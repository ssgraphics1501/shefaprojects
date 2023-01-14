<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery-1.10.2.js"></script>
<style>
.one{
	width:100%;
	height:150px;
	position:relative;
	overflow:hidden;
	border:blue 2px solid;
	border-radius:20px;
	padding:8px 0 0 0;
	z-index:10000;
	background-color:white;
	
	
	
}
.two{
	width:8032px;
	position:absolute;
	height:140px;
	left:-195px;
	
}

.slideImg{
	width:208px;
	height:auto;
	float:left;
	
}

</style>
</head>

<body>
<script>
$(document).ready(function(e) {
	var x = -160;
    function slideLeft(){
		
		//Please note the second time animate function. At trial time I was missing second animate and it was not showing after append becuase it was having 0 width.
		
$('.two').children(':first').animate(
{width:0},2100,function()
{ 
$(this).appendTo('.two').animate({width:180})
}
	
	);

/*$('.two').animate({left:x},1000);
x = x-160;*/



	}
	
	/*function slideRight(){
		$('.two').animate({left:2},1);
	}*/
	
	
	setInterval(slideLeft,2000);
	<!--setInterval(slideRight,87000);-->
	
});
</script>

<div class="one" style="overflow:hidden">
<div class="two">

<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (1).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (2).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (3).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (4).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (5).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (6).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (7).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (8).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (9).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (10).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (11).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (12).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (13).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (14).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (15).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (16).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (17).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (18).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (19).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (20).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (21).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (22).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (23).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (24).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (25).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (26).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (27).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (28).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (29).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
	
	
	
	
		<div class="slideImg"><img src="image/clientLogo/Logos with white border/client(31).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
	
		<div class="slideImg"><img src="image/clientLogo/Logos with white border/client(32).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
	
	
		<div class="slideImg"><img src="image/clientLogo/Logos with white border/client(33).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
	
		<div class="slideImg"><img src="image/clientLogo/Logos with white border/client(34).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
	
	
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (1).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (2).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (3).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (4).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (5).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (6).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (7).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (8).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (9).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (10).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (11).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (12).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>
<div class="slideImg"><img src="image/clientLogo/Logos with white border/client (13).png" class="clientLogoSlide" style="float:left; width:100%; height:auto; " /></div>

<!--<img src="image/clientLogo/Logos with white border/1.jpg" style="float:left; width:100%; height:auto; " />
<img src="image/clientLogo/Logos with white border/2.jpg" style="float:left; width:100%; height:auto; " />
<img src="image/clientLogo/Logos with white border/3.jpg" style="float:left; width:100%; height:auto; "  />
<img src="image/clientLogo/Logos with white border/4.jpg" style="float:left; width:100%; height:auto; "  />
<img src="image/clientLogo/Logos with white border/5.jpg" style="float:left; width:100%; height:auto; "  />
<img src="image/clientLogo/Logos with white border/6.jpg" style="float:left; width:100%; height:auto; "  />
<img src="image/clientLogo/Logos with white border/7.jpg" style="float:left; width:100%; height:auto; "  />
<img src="image/clientLogo/Logos with white border/8.jpg" style="float:left; width:100%; height:auto; "  />-->


</div>
</div>

</body>
</html>
