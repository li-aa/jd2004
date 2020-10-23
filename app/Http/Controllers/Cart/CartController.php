<?php

namespace App\Http\Controllers\Cart;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;
use App\Goods;

use DB;
class CartController extends Controller
{
	public function add(Request $request,$goods_id){
  			$data = Goods::where('goods_id',$goods_id)->first();
		return view('cart.add',['data'=>$data]);
	}
	public function cartlist(Request $request,$goods_id){
        $goods_id = $request->post('goods_id');
        $uid = session()->get('reg_id');

        $goods_num = $request->get('goods_num');
        // dd($goods_num);exit;
        //购物车保存商品信息
        $cart_info = [
            'reg_id'       => $uid,
            'add_time'  => time(),
            'goods_num' => $goods_num,
            'goods_id' => $goods_id
        ];
        // dd($cart_info);exit;

        // $res = DB::table('p_cart')->insert($cart_info);
         $res = DB::table('p_cart')->insertGetId($cart_info);
        if($res>0)
        {
            $data = [
                'errno' => 0,
                'msg'   => '成功加入购物车'
            ];

            echo json_encode($data);
        }else{
            $data = [
                'errno' => 500001,
                'msg'   => '加入购物车失败'
            ];

            echo json_encode($data);
        }

        
    }
    public  function show(){
        $data = DB::table('p_cart')
        ->join('p_goods','p_cart.goods_id','=','p_goods.goods_id')
        ->limit(5)->get();
        // dd($data);exit;
       
        return view('cart.show',['data'=>$data]);
    }
    public function getOrderInfo(){
         $data = DB::table('p_cart')
        ->join('p_goods','p_cart.goods_id','=','p_goods.goods_id')
        ->limit(5)->get();
        return view('cart.getOrderInfo',['data'=>$data]);
    }
}
