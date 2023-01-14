<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<link rel="icon" href="favicon.ico?r=31241" />
<!-- ?r=31241 to fix chrome bug-->
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="viewport" content="width=device-width, initial-scale=1.0" />
<title>Illustrator Tutorial</title>
<link href="Skeleton/css/normalize.css" rel="stylesheet" type="text/css" />
<link href="Skeleton/css/skeleton.css" rel="stylesheet" type="text/css" />
<script src="jquery-1.10.2.js"></script>


<style>
h2{
	font-size:20px !important;
	font-family:Verdana, Geneva, sans-serif;
	padding:0% !important;
	margin:0% !important;
	padding-top:2% !important;
	color:red;
}
.smallText{
	font-size:20px;
}
body{
	background-color:#FB874F;
}
.container{
	border:#000 solid thin;
	box-shadow:-1px 1px 30px 10px #000;
	-webkit-box-shadow:-1px 1px 30px 10px #000;
	-moz-box-shadow:-1px 1px 30px 10px #000;
	background-color:white;
}
.commentImage{
	float:left;
	width:20%;
	height:30%;
	padding:0% 0% 0% 2%;
}
.comment{
	float:left;
	width:76%;
	height:auto;
	font-family:Verdana, Geneva, sans-serif;
	font-size:16px;
	color:#999;
	padding:2% 0px 2% 2%;
}
.nameAndEmail{
	float:right;
	width:auto;
	height:auto;
	clear:left;
	padding:0% 2% 0% 0%;
}
.commentContainer{
	width:100%;
	height:auto;
	padding:0% 0% 5% 0%;
	border:thin #CCC solid;
	border-radius:20px;

}
.commentSubContainer{
	width:100%;
	height:auto;
	padding:2% 0% 2% 0%;
	overflow:auto;
}
.commentSubContainer:nth-child(even){
	background-color:#F3F3F3;
}
#readerInput{
	width:100%;
	color:#CCC;
}
#name{
	float:left;
	width:50%;
	color:#CCC;
	height:5px;
}
#email{
	float:left;
	width:50%;
	color:#CCC;
	max-height:5px;
}
textarea{
	display:block;
}
.formError{
	color:#F00;
	display:none;
	float:left;
	width:100%;
	font-size:16px;
}
</style>

</head>

<body>
<noscript>
<h1>Please Enable JavaScript for better experience. Otherwise you will not be able to upload file.</h1>
</noscript>
<div class="container">
<div class="row"><?php include 'horizontalMenu.php' ?></div>
<div class="row">
<div class="column"><img src="image/illustrator.gif" width="100%" alt="Illustrator Flash" /></div>
</div>
<div class="row">
<div class="four columns"><img src="image/illustratorLeft.gif" width="100%" alt="Illustrator Video" /></div>
<div class="seven columns">
<h1>Illustrator <span class="smallText">(Tools Introduction)</span></h1>
Illustrator is a very powerful Drawing software developed by Adobe. We can create VECTOR design by using it.

<h2>Vector Vs Bitmap (Raster)</h2>
Photoshop creates Bitmap or Raster Image. Illustrator creates Vector Graphics. What is difference between Raster and Vector? Raster is made with dot or pixel. It looses quality with enlargements. Vector is made with line and curve. It can be enlarged to any size without loosing quality.

<h2>Group Selection Tool</h2>
Draw four shapes. Gruop two of them. Add third shape to group by selecting first group then third shape and Ctrl+G. Now add fourth shape to group. Now with Group Selection tool click on first shape to select it. Again click on first shape with Group Selection tool, it will select second shape. On third time, clicking it will select third and on next fourth. What is happening here, it is selecting next shape of group according to grouping step. After deselcting all, click on third shape, it will select all top order viz. first, second and third but not down step viz. fourth. Click on second, it select first and second leaving third and fourth.


<h2>Magic Wand</h2>
It selects drawing by color. This way it becomes easier to select all same color drawing for editing.

<h2>Lasso Tool</h2>
It Selects things by drawing Lasso Tool. All drawing will be select that come in touch with this tool.

<h2>Pen Tool</h2>
To draw shape or curve we use Pen tool. To add new node (Anchor Point) we use Add Anchor Point, To delete node we use Delete Anchor Point and to edit, we use Convert Anchor Point tool.

<h2>Flare Tool</h2>
Make a Dark background. Draw a Flare. Go to Effect, Transform Effect. Change copies to 20, Rotate => Angle => 27, Scale => Horizontal = 120%, Vertical = 84% and change Move's Horizontal and Vertical. Now See the Magic. This way get amazing design.

<h2>Paintbrush Vs Blob Brush Tool</h2>
Paintbrush tool draw line as per brush. Blob Brush Tool draws fill.

<h2>Rotate Tool</h2>
Draw a circle. Select Rotate Tool. Click around the shape (circle) while Alt is pressed to choose centre point and open Rotate Dialogue box. In dialogue box choose degree, check preveiw and Copy. Duplicate the rotation by Ctrl+D and make wonderful design.

<h2>Reflect Tool</h2>
Draw an arc. Select Reflect Tool. Click around the shape (arc) while Alt is pressed to choose centre point and open Reflect Dialogue box. In dialogue box choose Axis, check preveiw and Copy. Duplicate the Reflection by Ctrl+D and make wonderful design.

<h2>Reshape Tool</h2>
Draw a line. Select Reshape tool. Click at centre and drage inside or outside, it will reshape the line just like CorelDraw does. It is also adding a node (Anchor Point). Press Alt and drag node to another point to make copy of whole shape with this node being at different place.


<h2>Width Tool</h2>
Draw a line. Select Width Tool. Zoom. What width tool does, it put 3 node on line can be drag in or out to change the width of line. If Alt is pressed, only selected node goes inward or outward otherwise it changes width in both direction. With help of this tool a simple line can be change into any shape like leaf or something else.

<h2>Warp Tool</h2>
With Warp tool we can shift line/outline/edge of circle inward or outward. While Alt or Shift is pressed, dragging can change size and shape of Warp Tool. By double clicking, we get a dialogue box to change size, shape or angle options etc.

<h2>Twirl Tool</h2>
It Twirl the edge or outline. Twirl means changing line into a shape like whirlpool.

<h2>Live Bucket Paint Tool</h2>
Select Multi shape (Compulsory). Now select Live Bucket Paint tool. Go to Color Palatte and select a colour and click inside of a shape. Change the colour and click inside of another shape and it will be coloured with new selected color.

<h2>Live Paint Selection Tool</h2>
Draw a cross line. Draw another cross line to cross first line. Select both and click on it with Live Paint tool to change it to live painting group. Now with Live Paint Selection tool click on a segment. What it is doing, without adding any node or anchor point on line, selecting the part of line from one node to crossing point. Now you can change width, color, style of that part of line or even delete this part.

<h2>Shape Builder Tool</h2>
Shape Building tool when drag from one shape to another merge it. By clicking with it just like Live Paint Selection Tool, it seperate that part independently. This way we get one shape from top, one intersecting part and another lower one if two circle is overlapping each other.

<h2>Perspective Grid Tool</h2>
After selecting this tool it shows Perspective grid or guidelines. When we pick a drawing with PERSPECTIVE SELECTION TOOL and drag it upto perspective grid line, it automatically change the drawing according to Perspective grid. When perspective grid is showing it shows a little control panel (Active Plane Widget) on top-left or top right. This control panel have three rectangle on a circle. With Perspective Grid or Selection tool selected we can choose the face by clicking on any rectangle, remember, if other tools, like Pick Tool, is selected than Perspective and its Selection, it will have no effect on control panel or Active Plane Widget. Once a face is highlighted all shape will be drawn by Perspective Grid aspect. To deselect all face, click on circle while Perspective Tool is selected.


<h2>Mesh Tool</h2>
Draw a circle or rectangle. Click on outline of circle or rectangle with Mesh Tool, it will put a line with handle. Click at some other place to add more handle and node. Now click and drag a color from color palatte and release it into shape created by Mesh tool inside that circle or rectangle. Repeate it once again and release on node. This operation fill color in that particular area in vignett form and make excellent visuals.


<h2>Blend Tool</h2>
Create a circle at top of page. Create a rectangle at bottom of page. Fill both shape with different color. Select Blend tool and drag from one shape to other and back. Alternately press Ctrl+Alt+B. Double click Blend tool and play with available options. Now with direct selection tool click first shape and change fill or outline color, repeat same with last shape and play around. Blend tool is not limited to only two shape, try as many as you feel right. Last but not least, select the graphic with pick or direct selection tool. You will see a line in centre from one object to last, this is called spine. Add more node on this spine and play with Convert Direction tool to give a nice and practical curve to this shape.

<br /><br />
<a href="illustrator_cs6_tools_modifier_keys.pdf" target="_blank">Illustrator CS6 Tool Tips</a>

<br /><br />
<b>Comment and Suggestions :</b>
<div class="commentContainer">
<?php 

$message = 'Your Comment';
$name = 'Your Name';
$email = 'Your eMail';

$area = 'Illustrator';
$conn= new mysqli('fdb3.biz.nf','2029543_user','pramod_1971','2029543_user');
if(!$conn){
	die("Not connect".mysqli_error);
}





if(isset($_POST['submit'])){
	$conn= new mysqli('fdb3.biz.nf','2029543_user','pramod_1971','2029543_user');
	if(!$conn){
	die("Not connect".mysqli_error);
}
	$stm = $conn->prepare("Insert into comment (Name, email, Message, Image) values (?, ?, ?, ?)");
	$stm->bind_param('ssss',$name,$email,$message,$image);
	
		
	$name = $_POST['name'];
	$message = $_POST['readerInput'];
	$email = $_POST['email'];
	$image='upload/comment/default.jpg';
	$time = date("s");
	
	
	//if(isset($_FILES['image'])){
	if(is_uploaded_file($_FILES['image']['tmp_name'])){
		$tmp_image = $_FILES['image']['size'];
		$finfo = new finfo(FILEINFO_MIME_TYPE);
				$file = $finfo->file($_FILES['image']['tmp_name']);	//This line checks MIME Type of uploaded image
				
				if($file!=='image/jpeg' && $file !=='image/gif' || $tmp_image > 1024*1024*2){ //1024*1024*2 = 2MB
					echo '<script> alert("Upload your Profile Image in jpg/gif format and lower than 2mb. Otherwise continue without Image.")</script>';				
					
					$message = 'Your Comment';
					$name = 'Your Name';
					$email = 'Your eMail';
					
				}
							
				else{
					
					$photo = move_uploaded_file($_FILES['image']['tmp_name'],'upload/comment/'.$name.$time.'.jpg');
					$image = 'upload/comment/'.$name.$time.'.jpg';
					echo '<script> alert("Your file is accepted.")</script>';
					$stm->execute();
					
					$message = 'Your Comment';
					$name = 'Your Name';
					$email = 'Your eMail';
					
				}

		}
	//}
	
		else{
			$stm->execute();
					$message = 'Your Comment';
					$name = 'Your Name';
					$email = 'Your eMail';
		}
	
	//$context = $area;


	
	
	


	
}


$data='select * from comment';
$query = mysqli_query($conn,$data);
while($row=mysqli_fetch_assoc($query)){?>
<div class="commentSubContainer">
<div class="commentImage"><img src="<?php echo $row['Image']?>" width="100%" /></div>
<div class="comment"><?php echo $row['Message']?></div>
<div class="nameAndEmail"><?php echo $row['Name']?></div></div>
<?php
}

?>


</div>
<b>Give your feedback:<br  /> <span style="font-size:12px; color:red; font-weight:100">(Upload your Profile Image in jpg/gif format and lower than 2mb. Otherwise continue without Image)</span></b>
<form method="post" id="comment" name="comment" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" enctype="multipart/form-data">
<textarea id="readerInput" name="readerInput" maxlength='950' placeholder="<?php echo $message ?>"></textarea>
<div class="formError"></div>
<p class="com" style="display:none">Your Comment</p>
<textarea id="name" name="name" maxlength='25' placeholder="<?php echo $name ?>" rows="1"></textarea>
<div class="formError"></div>
<p class="com" style="display:none">Name</p>
<textarea id="email" name="email" maxlength='50' placeholder="<?php echo $email ?>"></textarea>
<div class="formError"></div>
<p class="com" style="display:none">email</p>
<input type="file" id="image" name="image" />
<div class="formError"></div>
<input type="submit" class="button" role="button" id="submit" name="submit" value="Submit" />

</form>

<script>

function make_blank (Input)
{

    if (Input.value == Input.placeholder){
        Input.value = '';
		}
		
		if (Input.value == 'undefined'){
			
			Input.value = '';
			
		}
		
}

function restore_placeholder (Input)
{
    if (Input.value == '' && 'placeholder' in Input){
        Input.value = Input.placeHolder;}
		
		else{
			Input.value == Input.placeholder;
		}
}

$(document).ready(function(e) {
	
	
 
	/*$('#submit').click(function(){
		//event.preventDefault();
		
		$.ajax({
			url:"illustrator.php",
			type:'POST',
			dataType:"text",
			success: function(data){
				$('.commentContainer').html(data)
			}
		});
		
	});*/
	
});
</script>

</div>
</div>
<div class="one column"></div>


<?php include('footer2.php')?>
</div>






</body>
</html>