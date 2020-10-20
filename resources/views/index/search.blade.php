@extends('layouts.jd')
      @section('title','列表页')

      @section('contents')
	<!--list-content-->
	<div class="main">
		<div class="py-container">
			<!--bread-->
			<div class="bread">
				<ul class="fl sui-breadcrumb">
					<li>
						<a href="#">全部结果</a>
					</li>					
					<li class="active">智能手机</li>					
				</ul>
				<ul class="tags-choose">
					<li class="tag">全网通<i class="sui-icon icon-tb-close"></i></li>
					<li class="tag">63G<i class="sui-icon icon-tb-close"></i></li>
				</ul>
				<form class="fl sui-form form-dark">
					<div class="input-control control-right">
						<input type="text" />
						<i class="sui-icon icon-touch-magnifier"></i>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
			<!--selector-->
			<div class="clearfix selector">
				<div class="type-wrap">
					<div class="fl key">手机、数码、配件</div>
					<div class="fl value"></div>
					<div class="fl ext"></div>
				</div>
				<div class="type-wrap logo">
					<div class="fl key brand">品牌</div>
					<div class="value logos">
						<ul class="logo-list">
							<li><img src="/static/img/_/phone01.png" /></li>
							<li><img src="/static/img/_/phone02.png" /></li>
							<li><img src="/static/img/_/phone03.png" /></li>
							<li><img src="/static/img/_/phone04.png" /></li>
							<li><img src="/static/img/_/phone05.png" /></li>
							<li><img src="/static/img/_/phone06.png" /></li>
							<li><img src="/static/img/_/phone07.png" /></li>
							<li><img src="/static/img/_/phone08.png" /></li>
							<li><img src="/static/img/_/phone09.png" /></li>
							<li><img src="/static/img/_/phone10.png" /></li>
							<li><img src="/static/img/_/phone11.png" /></li>
							<li><img src="/static/img/_/phone12.png" /></li>
							<li><img src="/static/img/_/phone13.png" /></li>
							<li><img src="/static/img/_/phone14.png" /></li>
							<li><img src="/static/img/_/phone05.png" /></li>
							<li><img src="/static/img/_/phone06.png" /></li>
							<li><img src="/static/img/_/phone07.png" /></li>
							<li><img src="/static/img/_/phone02.png" /></li>
						</ul>
					</div>
					<div class="ext">
						<a href="javascript:void(0);" class="sui-btn">多选</a>
						<a href="javascript:void(0);">更多</a>
					</div>
				</div>
				<div class="type-wrap">
					<div class="fl key">网络制式</div>
					<div class="fl value">
						<ul class="type-list">
							<li>
								<a>GSM（移动/联通2G）</a>
							</li>
							<li>
								<a>电信2G</a>
							</li>
							<li>
								<a>电信3G</a>
							</li>
							<li>
								<a>移动3G</a>
							</li>
							<li>
								<a>联通3G</a>
							</li>
							<li>
								<a>联通4G</a>
							</li>
							<li>
								<a>电信3G</a>
							</li>
							<li>
								<a>移动3G</a>
							</li>
							<li>
								<a>联通3G</a>
							</li>
							<li>
								<a>联通4G</a>
							</li>
						</ul>
					</div>
					<div class="fl ext"></div>
				</div>
				<div class="type-wrap">
					<div class="fl key">显示屏尺寸</div>
					<div class="fl value">
						<ul class="type-list">
							<li>
								<a>4.0-4.9英寸</a>
							</li>
							<li>
								<a>4.0-4.9英寸</a>
							</li>
						</ul>
					</div>
					<div class="fl ext"></div>
				</div>
				<div class="type-wrap">
					<div class="fl key">摄像头像素</div>
					<div class="fl value">
						<ul class="type-list">
							<li>
								<a>1200万以上</a>
							</li>
							<li>
								<a>800-1199万</a>
							</li>
							<li>
								<a>1200-1599万</a>
							</li>
							<li>
								<a>1600万以上</a>
							</li>
							<li>
								<a>无摄像头</a>
							</li>
						</ul>
					</div>
					<div class="fl ext"></div>
				</div>
				<div class="type-wrap">
					<div class="fl key">价格</div>
					<div class="fl value">
						<ul class="type-list">
							<li>
								<a>0-500元</a>
							</li>
							<li>
								<a>500-1000元</a>
							</li>
							<li>
								<a>1000-1500元</a>
							</li>
							<li>
								<a>1500-2000元</a>
							</li>
							<li>
								<a>2000-3000元 </a>
							</li>
							<li>
								<a>3000元以上</a>
							</li>
						</ul>
					</div>
					<div class="fl ext">
					</div>
				</div>
				<div class="type-wrap">
					<div class="fl key">更多筛选项</div>
					<div class="fl value">
						<ul class="type-list">
							<li>
								<a>特点</a>
							</li>
							<li>
								<a>系统</a>
							</li>
							<li>
								<a>手机内存 </a>
							</li>
							<li>
								<a>单卡双卡</a>
							</li>
							<li>
								<a>其他</a>
							</li>
						</ul>
					</div>
					<div class="fl ext">
					</div>
				</div>
			</div>
			<!--details-->
			<div class="details">
				<div class="sui-navbar">
					<div class="navbar-inner filter">
						<ul class="sui-nav">
							<li class="active">
								<a href="#">综合</a>
							</li>
							<li>
								<a href="#">销量</a>
							</li>
							<li>
								<a href="#">新品</a>
							</li>
							<li>
								<a href="#">评价</a>
							</li>
							<li>
								<a href="#">价格</a>
							</li>
						</ul>
					</div>
				</div>
								<div class="goods-list">
					
					<ul class="yui3-g">
						@foreach($data as $k=>$v)
						<li class="yui3-u-1-5">
							<div class="list-wrap">
								<div class="p-img">
									<a href="{{url('/cart/add/'.$v->goods_id)}}">
										<img src="{{env('UPLOAD_URL')}}{{$v->goods_img}}" />
									</a>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>{{$v->shop_price}}</i>
										</strong>
								</div>
								<div class="attr">
									<em>{{$v->goods_name}}</em>
								</div>
								<div class="cu">
									<em><span>促</span>超值换购</em>
								</div>
								<div class="commit">
									<i class="command">已有{{$v->click_count}}人评价</i>
								</div>
								<div class="operate">
									<button id="btn_add" class="sui-btn btn-bordered btn-danger">加入购物车</button>
									<a href="javascript:void(0);" class="sui-btn btn-bordered">关注</a>
								</div>
							</div>
						</li>
						@endforeach
					</ul>
				</div>
				<div class="fr page">
					<div class="sui-pagination pagination-large">
						<ul>
							<li class="prev disabled">
								<a href="#">«上一页</a>
							</li>
							<li class="active">
								<a href="#">1</a>
							</li>
							<li>
								<a href="#">2</a>
							</li>
							<li>
								<a href="#">3</a>
							</li>
							<li>
								<a href="#">4</a>
							</li>
							<li>
								<a href="#">5</a>
							</li>
							<li class="dotted"><span>...</span></li>
							<li class="next">
								<a href="#">下一页»</a>
							</li>
						</ul>
						<div><span>共10页&nbsp;</span><span>
      到第
      <input type="text" class="page-num">
      页 <button class="page-confirm" onclick="alert(1)">确定</button></span></div>
					</div>
				</div>
			</div>
			<!--hotsale-->
			<div class="clearfix hot-sale">
				<h4 class="title">热卖商品</h4>
				<div class="hot-list">
					<ul class="yui3-g">
						<li class="yui3-u-1-4">
							<div class="list-wrap">
								<div class="p-img">
									<img src="/static/img/like_01.png" />
								</div>
								<div class="attr">
									<em>Apple苹果iPhone 6s (A1699)</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4088.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-4">
							<div class="list-wrap">
								<div class="p-img">
									<img src="/static/img/like_03.png" />
								</div>
								<div class="attr">
									<em>金属A面，360°翻转，APP下单省300！</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4088.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-4">
							<div class="list-wrap">
								<div class="p-img">
									<img src="/static/img/like_04.png" />
								</div>
								<div class="attr">
									<em>256SSD商务大咖，完爆职场，APP下单立减200</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4068.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有20人评价</i>
								</div>
							</div>
						</li>
						<li class="yui3-u-1-4">
							<div class="list-wrap">
								<div class="p-img">
									<img src="/static/img/like_02.png" />
								</div>
								<div class="attr">
									<em>Apple苹果iPhone 6s (A1699)</em>
								</div>
								<div class="price">
									<strong>
											<em>¥</em>
											<i>4088.00</i>
										</strong>
								</div>
								<div class="commit">
									<i class="command">已有700人评价</i>
								</div>
							</div>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<script src="/static/jquery.min.js"></script>
	<script>
    // $("#btn_add").click(function(){
    //     $.ajax({
    //         url: "/cart/add?good_id="+{{ $v['goods_id'] }},
    //         type: "get",
    //         dataType: "json",
    //         success: function(d){
    //             // if(d.errno==0)
    //             // {
    //             //     alert(d.msg)
    //             // }
    //         }
    //     })
    // });
</script>
	@endsection