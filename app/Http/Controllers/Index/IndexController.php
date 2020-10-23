<?php

namespace App\Http\Controllers\Index;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Validator;
use App\User;
use App\Goods;
use App\Model\ReglistModel;
use Illuminate\Support\Facades\Redis;
use DB;
use Cookie;
class IndexController extends Controller
{
	//注册
    public function reglist(){
    	return view('index.reglist');
    }
    public function reglistdo(Request $request){
      $data = $request->post();
      $password = $request->input('password');
      //验证
      $validator = Validator::make($data,[
          'user_name'=>'required|unique:reglist',
          'password'=>'between:6,18',
          'password1' =>'required',
          'tel' =>'required',
          'email' =>'required'
        ],[
          'user_name.required'=>'名称不能为空',
          'user_name.unique'=>'名称已存在',
          'password.between'=>'密码长度位6-18位',
          'password1.required'=>'确认密码不能为空',
          'tel.required'=>'手机号不能为空',
          'email.required' =>'邮箱不能为空'
        ]);
      if($validator->fails()){
        return redirect('/index/reglist')
                        ->withErrors($validator)
                        ->withInput();
       }
       //密码加密+判断密码是否一致
      if($data["password"] != $data['password1']){
        header('refresh:2;url=/index/reglist');
                  echo "两次密码不一致";exit;
      }
       $data["password"] = password_hash($password,PASSWORD_DEFAULT);
      //判断验证码是否一致+验证码过期时间
       $data['reg_time'] = time();
       $res = User::insertGetId($data);
       // dd($res);exit;
       $active_code = Str::random(64);
       // dd($active_code);exit;
        $redis_active_key = 'ss:index:active';
        $cc = Redis::zAdd($redis_active_key,$res,$active_code);
        // dd($cc);exit;
        $active_url = env('APP_URL').'/index/active?code='.$active_code;
        echo $active_url;die;
        if($res){
         header('refresh:2;url=/index/login');
                  echo "注册成功";
       }
    }
    //登录
    public function login(){
    	return view('index.login');
    }
    public function logindo(Request $request){

        $user_name = $request->input('reg_name');
        $user_pass = $request->input('password');
         $ip = $request->getClientIp();
        // dd($date["ip"]);exit;
        $key = 'login:count:'.$user_name;
        //检测用户是否已被锁定
        $count = Redis::get($key);

        if($count>=5)
        {
            Redis::expire($key,3600);
            echo "输入密码错误次数太多，用户已被锁定1小时，请稍后再试";
            die;
        }


        $u = ReglistModel::where(['user_name'=>$user_name])
            ->first();

        if(empty($u))   //用户不存在
        {
            die("用户不存在");
        }

        //验证密码
        $p = password_verify($user_pass,$u->password);
       if(!$p){
          if($count < 5){
                Redis::incr($key);
            }
            if($count == null || $count == 0){
                Redis::expire($key,60*120);
            }
            $counts = $count +1;
            echo "密码错误次数为".$counts."次";exit;
            }

       $res = DB::table('reglist')->first();
              // $user_name = DB::table('reglist')->where("reg_id",$res->reg_id)->update($res);
              if($res){
                session_start();
                session(['reg_id'=>$u['reg_id'],'user_name'=>$u['user_name'],'tel'=>$u['tel']]);
                    Redis::lpush($key,time());
                  header('refresh:2;url=/index/index');
                  echo "登录成功";
                }
    }
        /**
     * 激活用户
     */
    public function active(Request  $request)
    {
        $active_code = $request->get('code');
        echo "激活码：".$active_code;echo '</br>';

        $redis_active_key = 'ss:index:active';
        // echo ($redis_active_key);
        $uid = Redis::zScore($redis_active_key,$active_code);
        // echo $uid;
        if($uid){
            echo "user_id: ". $uid;echo '</br>';

            //激活用户
            User::where(['user_id'=>$uid])->update(['is_validated'=>1]);
            echo "激活成功";

            //删除集合中的激活码
            Redis::zRem($redis_active_key,$active_code);
        }else{
            echo "没有此用户";
        }

    }
    //首页
     public function index(){
    	return view('index.index');
    }
    public function layout(){
      Cookie::queue(Cookie::forget('reg_id'));
              Cookie::queue(Cookie::forget('reg_name'));
               header('refresh:2;url=/index/login');
                  echo "退出成功";
    }
    public function search(){
      $data = Goods::limit(5)->get();
      // dd($res);exit;
      return view('/index/search',['data'=>$data]);
    }

}
