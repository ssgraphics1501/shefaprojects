

  <form class="modal-content" style="width:100%" id="myForm" name="myForm" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF'])?>" method="post" enctype="multipart/form-data">


<div class="enquiryBox">
<p style="color:red; font-size:18px; font-weight:bold">Send Enquiry Online</p>




<div style="float:left; width:50%">
<textarea placeholder="Query" rows="10" name="query" id="query" required style="width:100%" ></textarea>
</div>

<div style="width:50%; float:left; height:70%">
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

<tr><td style="width:20%; padding-left:10px">Contact</td><td>&nbsp;&nbsp;&nbsp;+91 9873957835</td></tr>

<tr><td colspan="2">&nbsp;</td></tr>

<tr>
<td style="width:20%;"></td><td> <input type="submit" name="submit" id="submit" /></td>
</tr>

<tr><td colspan="2">&nbsp;</td></tr>

</table>


</div>

<div style="width:100%">
<strong><em>Shefa Projects</em></strong><br>
D-7, Industrial Area, Site-IV, Sahibabad, Ghaziabad-201010<br>
Email : akchopra.shefacnv@gmail.com
</div>

</div>

</form>
