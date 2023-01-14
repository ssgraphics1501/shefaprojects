<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<script src="jquery-1.10.2.js"></script>
<style>
.one{
	width:700px;
	height:150px;
	position:relative;
	overflow:hidden;	
}


.two{
	width:6032px;
	position:absolute;
	height:150px;
	left:-170px;
	
}

.clSlide{
	width:180px;
	height:150px;
	float:left;
}

</style>
</head>

<body>
<script>
$(document).ready(function(e) {
    function any(){
		
		//Please note the second time animate function. At trial time I was missing second animate and it was not showing after append becuase it was having 0 width.
		
$('.two').children(':first').animate({width:0},2000,function(){ $(this).appendTo( '.two').animate({width:208})});
	}
	
	setInterval(any,1000);
	
});
</script>

<div class="one" style="overflow:hidden; background-color:#CCC">
<div class="two">
<div class="clSlide"><img src="image/autoSlide1.jpg" height="128" width="90%" class="autoSlideBorder" /></div>
<div class="clSlide"><img src="image/autoSlide2.jpg" height="128" width="90%" class="autoSlideBorder"  /></div>
<div class="clSlide"><img src="image/autoSlide3.jpg" height="128" width="90%" class="autoSlideBorder"  /></div>
<div class="clSlide"><img src="image/autoSlide4.jpg" height="128" width="90%" class="autoSlideBorder"  /></div>
<div class="clSlide"><img src="image/autoSlide5.jpg" height="128" width="90%" class="autoSlideBorder"  /></div>
<div class="clSlide"><img src="image/autoSlide6.jpg" height="128" width="90%" class="autoSlideBorder"  /></div>
<div class="clSlide"><img src="image/autoSlide8.jpg" height="128" width="90%" class="autoSlideBorder"  /></div>




</div>
</div>

</body>
</html>
