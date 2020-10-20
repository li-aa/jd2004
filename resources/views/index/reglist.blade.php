@extends('layouts.shop')
  @section('title','注册')
  @section('content')
	<div class="register py-container ">
		<!--head-->
		<div class="logoArea">
			<a href="" class="logo"></a>
		</div>
		<!--register-->
		<div class="registerArea">
			<h3>注册新用户<span class="go">我有账号，去<a href="{{url('/index/login')}}">登陆</a></span></h3>
			<div class="info">
				<form class="sui-form form-horizontal" action="{{url('/index/reglistdo')}}" method="post">
					<div class="control-group">
						<label class="control-label">用户名：</label>
						<div class="controls">
							<input type="text" name ="user_name" placeholder="请输入你的用户名" class="input-xfat input-xlarge">
							<b style="color:red">{{$errors->first('user_name')}}</b>
						</div>
						
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">登录密码：</label>
						<div class="controls">
							<input type="password"  name ="password" placeholder="设置登录密码" class="input-xfat input-xlarge">
							<b style="color:red">{{$errors->first('password')}}</b>
						</div>
						
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">确认密码：</label>
						<div class="controls">
							<input type="password" name ="password1" placeholder="再次确认密码" class="input-xfat input-xlarge">
							
						</div>
						<b style="color:red">{{$errors->first('password1')}}</b>
					</div>
					
					<div class="control-group">
						<label class="control-label">手机号：</label>
						<div class="controls">
							<input type="text" name ="tel" placeholder="请输入你的手机号" class="input-xfat input-xlarge">
							
						</div>
						<b style="color:red">{{$errors->first('tel')}}</b>
					</div>
					<div class="control-group">
						<label for="inputPassword" class="control-label">邮箱：</label>
						<div class="controls">
							<input type="text" name ="email" placeholder="邮箱" class="input-xfat input-xlarge">
								<b style="color:red">{{$errors->first('email')}}</b>
						</div>
						
					</div>
							
					<!-- <div class="control-group">
						<label for="inputPassword" class="control-label">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</label>
						<div class="controls">
							<input name="m1" type="checkbox" value="2" checked=""><span>同意协议并注册《品优购用户协议》</span>
						</div>
					</div> -->
					<div class="control-group">
						<label class="control-label"></label>
						<div class="controls btn-reg">
							<input class="sui-btn btn-block btn-xlarge btn-danger"  type="submit"  value="完成注册">
						</div>
					</div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>
		<script src="/static/jquery.min.js"></script>
		<script src="/static/jquery.js"></script>
		<script>
      $('button').click(function(){
          var tel = $('input[name="tel"]').val();
          // alert();exit;
          if(!tel){
            alert('请输入手机号或邮箱!');
            return;
          }
           $.post("/index/ajaxsend",{tel:tel},function(msg){
            if(msg.code=='00000'){
              alert('发送成功');
            }
              
          },'json');
      });

     </script>
	@endsection