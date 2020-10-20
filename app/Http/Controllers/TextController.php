<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use DB;
use GuzzleHttp\Client;
use App\Model\GithubUserModel;
class TextController extends Controller
{
    public function githublogin(Request $request){
         $code = $_GET['code'];
         // echo "code: ".$code;
         $token = $this->getAccessToken($code);
         // var_dump($token);exit;
         // $git_user = $this->getGithubUserInfo($token);
         // dd($git_user);exit;
    }
    public function getAccessToken($code){
            //获取token接口地址
            $url = 'https://github.com/login/oauth/access_token';
            //POST方式请求 接口  
            $client = new Client();    // 实例化 Guzzle对象
            $response = $client->request('POST',$url,[
                'verify'    => false,    
                'form_params'   => [
                    'client_id'         => env('OAUTH_GITHUB_ID'),
                    'client_secret'     => env('OAUTH_GITHUB_SEC'),
                    'code'              => $code
                ]
            ]);
            dd($url);exit;
            parse_str($response->getBody(),$str); //getBody()接收服务器响应
            // return $str['access_token'];

    }
}