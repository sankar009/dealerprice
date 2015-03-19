<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Connecting you to store</title>
<style>
#loadingStore{width:400px; margin:0 auto; padding:0; margin-top:200px; text-align:center;}
#loadingStore img{margin-left:17px;}
#loadingAnimation{width:240px; margin:0 auto; padding:0; margin-top:20px; margin-bottom:20px;}
#loadingStore p{color:#888;}
#fountainG{
position:relative;
width:240px;
height:29px}

.fountainG{
position:absolute;
top:0;
background-color:#14bfcc;
width:29px;
height:29px;
-moz-animation-name:bounce_fountainG;
-moz-animation-duration:1.3s;
-moz-animation-iteration-count:infinite;
-moz-animation-direction:linear;
-moz-transform:scale(.3);
-moz-border-radius:19px;
-webkit-animation-name:bounce_fountainG;
-webkit-animation-duration:1.3s;
-webkit-animation-iteration-count:infinite;
-webkit-animation-direction:linear;
-webkit-transform:scale(.3);
-webkit-border-radius:19px;
-ms-animation-name:bounce_fountainG;
-ms-animation-duration:1.3s;
-ms-animation-iteration-count:infinite;
-ms-animation-direction:linear;
-ms-transform:scale(.3);
-ms-border-radius:19px;
-o-animation-name:bounce_fountainG;
-o-animation-duration:1.3s;
-o-animation-iteration-count:infinite;
-o-animation-direction:linear;
-o-transform:scale(.3);
-o-border-radius:19px;
animation-name:bounce_fountainG;
animation-duration:1.3s;
animation-iteration-count:infinite;
animation-direction:linear;
transform:scale(.3);
border-radius:19px;
}

#fountainG_1{
left:0;
-moz-animation-delay:0.52s;
-webkit-animation-delay:0.52s;
-ms-animation-delay:0.52s;
-o-animation-delay:0.52s;
animation-delay:0.52s;
}

#fountainG_2{
left:30px;
-moz-animation-delay:0.65s;
-webkit-animation-delay:0.65s;
-ms-animation-delay:0.65s;
-o-animation-delay:0.65s;
animation-delay:0.65s;
}

#fountainG_3{
left:60px;
-moz-animation-delay:0.78s;
-webkit-animation-delay:0.78s;
-ms-animation-delay:0.78s;
-o-animation-delay:0.78s;
animation-delay:0.78s;
}

#fountainG_4{
left:90px;
-moz-animation-delay:0.91s;
-webkit-animation-delay:0.91s;
-ms-animation-delay:0.91s;
-o-animation-delay:0.91s;
animation-delay:0.91s;
}

#fountainG_5{
left:120px;
-moz-animation-delay:1.04s;
-webkit-animation-delay:1.04s;
-ms-animation-delay:1.04s;
-o-animation-delay:1.04s;
animation-delay:1.04s;
}

#fountainG_6{
left:150px;
-moz-animation-delay:1.17s;
-webkit-animation-delay:1.17s;
-ms-animation-delay:1.17s;
-o-animation-delay:1.17s;
animation-delay:1.17s;
}

#fountainG_7{
left:180px;
-moz-animation-delay:1.3s;
-webkit-animation-delay:1.3s;
-ms-animation-delay:1.3s;
-o-animation-delay:1.3s;
animation-delay:1.3s;
}

#fountainG_8{
left:210px;
-moz-animation-delay:1.43s;
-webkit-animation-delay:1.43s;
-ms-animation-delay:1.43s;
-o-animation-delay:1.43s;
animation-delay:1.43s;
}

@-moz-keyframes bounce_fountainG{
0%{
-moz-transform:scale(1);
background-color:#14bfcc;
}

100%{
-moz-transform:scale(.3);
background-color:#FFFFFF;
}

}

@-webkit-keyframes bounce_fountainG{
0%{
-webkit-transform:scale(1);
background-color:#14bfcc;
}

100%{
-webkit-transform:scale(.3);
background-color:#FFFFFF;
}

}

@-ms-keyframes bounce_fountainG{
0%{
-ms-transform:scale(1);
background-color:#14bfcc;
}

100%{
-ms-transform:scale(.3);
background-color:#FFFFFF;
}

}

@-o-keyframes bounce_fountainG{
0%{
-o-transform:scale(1);
background-color:#14bfcc;
}

100%{
-o-transform:scale(.3);
background-color:#FFFFFF;
}

}

@keyframes bounce_fountainG{
0%{
transform:scale(1);
background-color:#14bfcc;
}

100%{
transform:scale(.3);
background-color:#FFFFFF;
}

}
</style>
</head>
<body>
	<div id="loadingStore">
		<img src="<?=Yii::app()->theme->baseUrl?>/images/logo.png"/>
		<div id="loadingAnimation">
			<div id="fountainG">
				<div id="fountainG_1" class="fountainG">
				</div>
				<div id="fountainG_2" class="fountainG">
				</div>
				<div id="fountainG_3" class="fountainG">
				</div>
				<div id="fountainG_4" class="fountainG">
				</div>
				<div id="fountainG_5" class="fountainG">
				</div>
				<div id="fountainG_6" class="fountainG">
				</div>
				<div id="fountainG_7" class="fountainG">
				</div>
				<div id="fountainG_8" class="fountainG">
				</div>
			</div>
		</div>	
		<p>Your being redirected to <?=ucfirst($store)?></p>
		<p>Please do not press back or refesh the page</p>
	</div>
	<script src="<?=Yii::app()->theme->baseUrl?>/scripts/jquery-2.1.1.min.js"></script>
	<script type="text/javascript">
	$(function(){
		setTimeout(function(){
		var url = "<?=$this->createUrl('site/storeurl') ?>";
		$.post(url, {load: true}, function(d){
			d = $.parseJSON(d);
			if(d.status =="success")
			window.location = d.redirect;
		});
		}, 3000);
	});
	</script>
</body>
</html>