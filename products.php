<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Company Profile</title>
<link rel="stylesheet" href="LocalStyle/myStyle.css" />
</head>

<body>

<div class="container-fluid"> 

<?php include 'restHeading.php'; ?>

<div class="row">
<div style="position:relative">
<img src="image/profile.jpg" width="100%" height="500" alt="Profile Picture" />
<div class="textOnHeaderImage">Manufacturer, Exporter & Supplier of <br />Industrial Process Plant & Equipments</div>
<div class="row" style="background-color:#00C; height:20px; margin-top:-5px"></div>
</div>
</div>

<div class="row">
<div class="col-sm-4">
<?php include 'verticalPlantGallery.php' ?>
</div>





<div class="col-sm-2" style="padding-left:0px;">
<a name="products" id="products">
<span></span>
</a>
<?php include 'productList.php' ?>

</div>

<br />



<div class="col-sm-3" style="margin-top:-19px;">
<?php include 'verticalProductGallery.php' ?>
</div>

<div class="col-sm-3" style="margin-top:-25px;">
<?php include 'verticalAutoGallery.php' ?>
</div>

</div>

<?php include 'footer.php'; ?>

</div>

</body>
</html>