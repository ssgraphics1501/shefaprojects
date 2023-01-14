<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    
    <link rel="stylesheet" href="bootstrap-3.3.7-dist/css/bootstrap.min.css">
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>
    <script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"></script>

<link rel="stylesheet" href="LocalStyle/myStyle.css" />
  <meta name="description" content="Shefa Projects">
  <meta name="keywords" content="Fabricator, Reactors, Heat Exchanger, Storage Tank, Turnkey Industrial Project, Plant Automation">
<style>
.col-sm-1, .col-sm-7, .col-sm-4{
	float:left;
}
</style>

</head>

<body>
<?php 
include 'formValidation.php';

?>

<div class="row blueForHeading">

<div class="col-sm-1">
<img src="image/logo.png" width="90">
</div>

<div class="col-sm-5" style="padding-top:20px; padding-left:20px">
<img src="image/name.png" width="500">
</div>

<div class="col-sm-2">&nbsp;</div>

<div class="col-sm-2">
<a href="#">
<div onClick="document.getElementById('id01').style.display='block'" class="col-sm-2 enquiry popup" style="padding-top:25px; width:auto;">
Send Enquiry<br>
<img src="image/envelopeRed.png" width="50">
</div>
</a>
</div>

<div id="id01" class="modal">
  
  <form class="modal-content animate" id="myForm" name="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
    <div class="imgcontainer">
      <span onClick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
     
    </div>


	
<div class="enquiryBox">
<p style="color:red; font-size:18px; font-weight:bold">Send Enquiry Online</p>



<div style="width:99%">
<div style="width:49%; float:left;">
<textarea placeholder="Query" rows="10" name="query" id="query" required style="width:100%"></textarea>
</div>

<div style="width:49%; float:left; height:40%">
<table>
<tr>
<td style="width:20%; padding-left:10px">Name </td><td> <input value="<?php echo $name ?>" type="text" id="name" name="name" style="width:80%"></td><td class="error"><?php echo $nameError?></td>
</tr>


<tr>

<td style="width:20%; padding-left:10px">Organisation </td><td> <input value="<?php echo $organ ?>" type="text" id="organ" name="organ" style="width:80%"></td><td class="error"><?php echo $orgError?></td>
</tr>


<tr>


<td style="width:20%; padding-left:10px">Phone No.</td><td> <input value="<?php echo $phone ?>" type="text" id="phone" name="phone" style="width:80%"></td><td class="error"><?php echo $phoneError?></td>
</tr>

<tr>

<td style="width:20%; padding-left:10px">Email</td><td> <input  value="<?php echo $email ?>" type="text" id="email" name="email" style="width:80%"></td><td class="error"><?php echo $emailError?></td>
</tr>

<tr><td colspan="2">&nbsp;</td></tr>

<tr><td style="width:20%; padding-left:10px">Contact</td><td>&nbsp;&nbsp;&nbsp;+91 7503097438</td></tr><tr>

<tr><td colspan="2">&nbsp;</td></tr>

<tr>
<td width="20%"></td><td> <input type="submit" name="submit" id="submit"  style="width:80%" /></td>
</tr>

<tr><td colspan="2">&nbsp;</td></tr>
</tr>
</table>


</div>
</div>
<div style="width:90%">
<strong><em>Shefa Projects</em></strong><br>
D-7, Industrial Area, Site-IV, Sahibabad, Ghaziabad-201010<br>
Email : sales@shefaprojects.com
</div>

</div>
  
  </form>
</div>


<script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>




<div class="col-sm-1" style="padding-top:10px; padding-left:10px">
<img src="image/QualityLogo.jpg" width="150">
</div>

<div class="col-sm-1">&nbsp;</div>

</div>

<div class="row blueForHeading" style="height:30px">
<div class="col-sm-12 redColor">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;An ISO 9001:2015 Certified Company</div>
</div>



<div class="row">
<?php include 'menu.php' ?>
</div>


<div class="row" style="background-color:#00C; height:10px; margin-top:-5px"></div>






</body>