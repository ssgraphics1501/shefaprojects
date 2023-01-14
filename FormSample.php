<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Form Sample with Validation</title>
<script src="jquery-1.10.2.js"></script>

<style>
.error{
	color:red;
}
</style>
</head>

<body>
<?php 
include 'formValidation.php';

?>

<form id="myForm" name="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">
<table>
<tr>
<td><label for="fname">First Name :</label></td><td><input value="<?php echo $fname ?>" type="text" placeholder="First Name" title="Your First Name" id="fname" name="fname" /></td>
<td class="error"><?php echo $fnameError?></td>
</tr>
<tr>
<td><label for="mname">Middle Name :</label></td><td><input value="<?php echo $mname ?>" type="text" id="mname" name="mname" /></td>
<td class="error"><?php echo $mnameError?></td>
</tr>
<tr>
<td><label for="lname">Last Name :</label></td><td><input value="<?php echo $lname ?>" type="text" id="lname" name="lname" /></td>
<td class="error"><?php echo $lnameError?></td>
</tr>
<tr>
<td><label for="sex">Sex :</label></td><td><input type="radio" id="sex" name="sex" />Male
<input type="radio" id="sex" name="sex" checked="checked" />Female</td>
<td class="error"><?php echo $sexError?></td>
</tr>
<tr>
<td><label for="occupation">Occupation :</label></td><td><input value="<?php echo $occupation ?>" type="text" id="occupation" name="occupation" /></td>
<td class="error"><?php echo $occupError?></td>
</tr>
<tr>
<td><label for="field">Disired Field :</label></td><td><input value="<?php echo $field ?>" type="text" id="field" name="field" /></td>
<td class="error"><?php echo $fieldError?></td>
</tr>
<tr>
<td><label for="address">Address :</label></td><td><input value="<?php echo $address ?>" type="text" id="address" name="address" /></td>
<td class="error"><?php echo $addError?></td>
</tr>
<tr>
<td><label for="city">City :</label></td><td><input value="<?php echo $city ?>" type="text" id="city" name="city" /></td>
<td class="error"><?php echo $cityError?></td>
</tr>
<tr>
<td><label for="pin">PIN :</label></td><td><input value="<?php echo $pin ?>" type="text" id="pin" name="pin" /></td>
<td class="error"><?php echo $pinError?></td>
</tr>
<tr>
<td><label for="state">State :</label></td><td><input value="<?php echo $state ?>" type="text" id="state" name="state" /></td>
<td class="error"><?php echo $stateError?></td>
</tr>
<tr>
<td><label for="mobile">Mobile :</label></td><td><input value="<?php echo $mobile ?>" type="text" max="10" min="10" id="mobile" name="mobile" /></td>
<td class="error"><?php echo $mobileError?></td>
</tr>
<tr>
<td><label for="email">eMail :</label></td><td><input value="<?php echo $email ?>" type="text" id="email" placeholder="Your email" name="email" /></td>
<td class="error"><?php echo $emailError?></td>
</tr>
<tr>
<td><label for="web">Website :</label></td><td><input value="<?php echo $url ?>" type="url" id="web" name="web" /></td>
<td class="error"<?php echo $urlError?>></td>
</tr>
<tr>
<td><label for="date">Date of Submission :</label></td><td><input value="<?php echo $date ?>" type="date" id="date" name="date" /></td>
<td class="error"><?php echo $dateError?></td>
</tr>
<tr>
<td><label for="price">Price Range :</label></td><td><input type="range" id="price" name="price" /></td>
<td class="error"><?php echo $priceError?></td>
</tr>
<tr>
<td><label for="color">Color :</label></td><td><input value="<?php echo $color ?>" type="color" id="color" name="color" /></td>
<td class="error"><?php echo $colorError?></td>
</tr>
<tr>
<td><label for="time">Time :</label></td><td><input value="<?php echo $time ?>" type="time" id="time" name="time" /></td>
<td class="error"><?php echo $timeError?></td>
</tr>
<td><label for="attach">Attachement :</label></td><td><input type="file" id="attach" name="attach" /></td>
<td class="error"></td>
</tr>
<tr>
<td><label for="submit">Submit :</label></td><td><input type="submit" alt="Submit" id="submit" name="submit" /></td>
</tr>
</form>



</body>
</html>