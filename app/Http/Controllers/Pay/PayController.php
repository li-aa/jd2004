<?php

namespace App\Http\Controllers\Pay;

use App\Http\Controllers\Controller;
use App\Model\OrderGoodsModel;
use App\Model\OrderModel;
use Illuminate\Support\Str;
class PayController extends Controller
{
	public function create(){
        echo '111';exit;
     $uid = session()->get('reg_id');
        $cart_goods =DB::table('p_cart')
        ->join('p_goods','p_cart.goods_id','=','p_goods.goods_id')->where(['reg_id'=>$uid])->get();
        // dd($cart_goods);exit;
        $cart_goods_arr = $cart_goods->toArray();
        // dd($cart_goods_arr);exit;
        $total = 0;
        foreach ($cart_goods_arr as $k=>$v)
        {
            //查询商品表的实时价格
            $g = Goods::find($v->goods_id);
            // dd($g);die;
            $total += $g->shop_price;
            // dd($total);exit;
            $v->goods_price = $g->shop_price;
            $v->goods_name = $g->goods_name;
            $order_goods[] = $v;

        }
        $order_data = [
            'order_sn'  => strtolower(Str::random(20)),     //订单唯一编号
            'user_id'   => $uid,
            'order_amount'  => $total,
            'add_time'  => time(),
            //...
        ];
        // dd($order_data);exit;
        $oid = OrderModel::insertGetId($order_data);        //订单入库

        // 记录订单商品  （订单商品表orders_goods）
        foreach($order_goods as $k=>$v)
        {
            $goods = [
                'order_id'  => $oid,
                'goods_id'  => $v->goods_id,
                'goods_name'    => $v->goods_name,
                'goods_price'   => $v->goods_price
            ];

            OrderGoodsModel::insertGetId($goods);
        }
        return redirect('/order/pay');
    }
    public function pay(){
        return view('order.pay');
    }
}