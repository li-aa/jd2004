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
        $goods_num = $request->get('num',1);
        // dd($goods_num);exit;
        //购物车保存商品信息
        $cart_info = [
            'goods_name'  => 'AMD APU A4 3400 2.7G 1M 散',
            'user_id'       => '4',
            'add_time'  => time(),
            'shop_price' =>'237',
            'goods_num' => '1',
            'goods_id' => '218'
        ];
        // dd($cart_info);exit;

        $res = DB::table('p_cart')->insert($cart_info);
        // if($res>0)
        // {
            $data = [
                'errno' => 0,
                'msg'   => '成功加入购物车'
            ];

            echo json_encode($data);
            // return redirect('/index/reglist');
        // }else{
        //     $data = [
        //         'errno' => 500001,
        //         'msg'   => '加入购物车失败'
        //     ];

        //     echo json_encode($data);
        // }
        
    }
    public  function show(){
        return view('cart.show');
    }
}
