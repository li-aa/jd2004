<?php

namespace App\Http\Controllers\Prize;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\PrizeModel; 
class PrizeController extends Controller
{
    public function add(){
        return view('prize.add');
    }
    public function start(){
        $id = session()->get('reg_id');
        if(empty($id))
        {
            $aa = [
                'errno' => 400001,
                'msg'   => '请先登录'
            ];
            return $aa;
        }
        $time1 = strtotime(date('Y-m-d'));
        $res = PrizeModel::where(['reg_id'=>$id])->where("time",">=",$time1)->first();
        if($res)        //已经有记录
        {
            $response = [
                'errno' => 300008,
                'msg'   => '今天已经抽过奖了，请明天再来吧'
            ];

            return $response;
        }
        $rand = mt_rand(0,10000);
        $level = 0;
        if($rand >=2564 && $rand <=2574){
            // dd("一等奖");
            $level = '一等奖';
        }elseif($rand >=6666 && $rand <= 6686){
            // echo "二等奖";
            $level = '二等奖';
        }elseif($rand >= 4444 && $rand <= 4474){
            // echo "三等奖";
            $level = '三等奖';
        }

        $prize_data = [
                'reg_id' => $id,
                'level' => $level,
                'time' => time()
        ];
        // dd($prize_data);exit;
        $p_id = PrizeModel::insertGetId($prize_data);
        // dd($p_id);exit;
        if($p_id>0){
            $data = [
                'erron' => '2',
                'msg' =>'ok',
                // 'rand' =>$rand,
                'data' => [
                    'level'=> $level
                ]      
            ]; 
        }else{
            $data = [
                'erron' => '3',
                'msg' => '数据异常'
            ];
        }
        
        return $data;
    }
}