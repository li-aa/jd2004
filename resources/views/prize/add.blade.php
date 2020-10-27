<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<h1>抽奖</h1>
	<button id="but">抽奖</button>
	<script src="/static/jquery.min.js"></script>
	<script>
	$(document).on('click','#but',function(){
		$.ajax({
				url: "/prize/start",
				type: 'get',
				datatType: 'json',
				success: function(d){
                    if(d.errno==400001)
                    {
                        alert(d.msg);
                        window.location.href = '/index/login';
                    }else{
                    	alert(d.data.level);
                    }
            }
		})
	});
	</script>
</body>
</html>