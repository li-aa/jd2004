@extends('layouts.car')
      @section('titles','支付')

      @section('contentc')
		<div class="cart py-container">
			<!--主内容-->
			<div class="checkout py-container  pay">
				<div class="checkout-tit">
					<h4 class="fl tit-txt"><span class="success-icon"></span><span  class="success-info">订单提交成功，请您及时付款！订单号：{{$order_data['order_sn']}}</span></h4>
                    <span class="fr"><em class="sui-lead">应付金额：</em><em  class="orange money">￥{{$goods['goods_price']}}</em>元</span>
					<div class="clearfix"></div>
				</div>				
				<div class="checkout-steps">
					<div class="fl weixin">微信支付</div>
                    <div class="fl sao"> 
                        <!-- <p class="red">二维码已过期，刷新页面重新获取二维码。</p>                       -->
                        <div class="fl code">
                            <img src="/static/img/erweima.png" alt="">
                            <div class="saosao">
                                <p>请使用微信扫一扫</p>
                                <p>扫描二维码支付</p>
                            </div>
                        </div>
                        <div class="fl phone">
                            
                        </div>
                        
                    </div>
                    <div class="clearfix"></div>
				    <p><a href="pay.html" target="_blank">> 其他支付方式</a></p>
				</div>
			</div>

		</div>
		<!-- 底部栏位 -->

@endsection