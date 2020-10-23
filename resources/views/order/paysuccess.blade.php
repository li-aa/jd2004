@extends('layouts.car')
      @section('titles','购物车列表')

      @section('contentc')
			<div class="py-container">

		<div class="cart py-container">

			<!--主内容-->
			<div class="paysuccess">
				<div class="success">
					<h3><img src="/static/img/_/right.png" width="48" height="48">　恭喜您，支付成功啦！</h3>
					<div class="paydetail">
					<p>支付方式：支付宝</p>
					<p>支付金额：￥1006.00元</p>
					<p class="button"><a href="myOrder.html" class="sui-btn btn-xlarge btn-danger">查看订单</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="index.html" class="sui-btn btn-xlarge ">继续购物</a></p>
				    </div>
				</div>
				
			</div>
		</div>
		<!-- 底部栏位 -->
		@endsection