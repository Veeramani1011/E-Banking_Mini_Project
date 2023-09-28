<?php ob_start() ?>

<html>
<head>
    <title>Registration Form</title>
    <link rel="stylesheet" type="text/css" href="css/customer_reg_form.css"/>
    
	<?php include'header.php';  ?>
    </head>
    <body>
    <div class="container_regfrm_container_parent">
	<h3>Online Account Opening Form</h3>
	<div class="container_regfrm_container_parent_child">
		<form method="post">
				 <input type="text" name="name" placeholder="Name" required />
				 <select name ="gender" required >
					  <option class="default" value="" disabled selected>Gender</option>
					  <option value="Male" required >Male</option>
					  <option value="Female">Female</option>
					  <option value="Others">Others</option>
				</select>
				 <input type="text" name="mobile" placeholder="Mobile no" required />
				 <input type="text" name="email" placeholder="Email id" />
				 <input type="text" name="landline" placeholder="Landline no" />
				 <input type="text" name="dob" placeholder="Date of Birth" onfocus="(this.type='date')" required />
				 <input type="text" name="pan_no" placeholder="PAN Number" required />
				 <input type="text" name="citizenship" placeholder="Citizenship Number" required />
				 <input class="address" type="text" name="homeaddrs" placeholder="Home Address" required  />
				 <input class="address" type="text" name="officeaddrs" placeholder="Office Address" />
				 <input type="text" name="country" placeholder="US" value="US" readonly="readonly" />



				 <select name ="state" required >
					  <option class="default" value="" disabled selected>State</option>
					  
					  <option value="Andhra Pradesh">Andhra Pradesh</option>
					  <option value="Arunachal Pradesh">Arunachal Pradesh</option>
					  <option value="Assam">Assam</option>
					  <option value="Bihar">Bihar</option>
					  <option value="Chattisgarh">Chattisgarh</option>
					  <option value="Goa">Goa</option>
					  <option value="Gujarat">Gujarat</option>
					  <option value="Haryana">Haryana</option>
						<option value="Himachal Pradesh">Himachal Pradesh</option>
					  <option value="Karnataka">Karnataka</option>
					  <option value="Kerala">Kerala</option>
					  <option value="Madhya Pradesh">Madhya Pradesh</option>
					  <option value="Maharastra">Maharastra</option>
					  <option value="Manipur">Manipur</option>
					  <option value="Meghalaya">Meghalaya</option>
					  <option value="Mizoram">Mizoram</option>
					  <option value="Nagaland">Nagaland</option>
					  <option value="Odisha">Odisha</option>
					  <option value="Punjab">Punjab</option>
					  <option value="Rajasthan">Rajasthan</option>
					  <option value="Sikkim">Sikkim</option>
					  <option value="Tamil Nadu">Tamil Nadu</option>
					  <option value="Telungana">Telungana</option>
					  <option value="Tripura">Tripura</option>
					  <option value="Uttarakhand">Uttarakhand</option>
					  <option value="Uttar Pradesh">Uttar Pradesh</option>
						<option value="West Bengal">West Bengal</option>


				</select>



				 <select name ="city" required >
					  <option class="default" value="" disabled selected>City</option>
					  <option value="Ambattur">Ambattur</option>
					  <option value="Avadi">Avadi</option>
					  <option value="Thoothukkudi">Thoothukkudi</option>
					  <option value="Coimbatore">Coimbatore</option>
					  <option value="Cuddalore">Cuddalore</option>
					  <option value="Dindigul">Dindigul</option>
					  <option value="Erode">Erode</option>
					  <option value="Hosur">Hosur</option>
					  <option value="Kancheepuram">Kancheepuram</option>
					  <option value="Karaikkudi">Karaikkudi</option>
					  <option value="Kumbakonam">Kumbakonam</option>
					  <option value="Kurichi">Kurichi</option>
					  <option value="Madavaram">Madavaram</option>
					  <option value="Madurai">Madurai</option>
					  <option value="Nagapattinam">Nagapattinam</option>
					  <option value="Nagercoil">Nagercoil</option>
					  <option value="Neyveli">Neyveli</option>
					  <option value="Pallavaram">Pallavaram</option>
					  <option value="Pudukkottai">Pudukkottai</option>
					  <option value="Salem">Salem</option>
					  <option value="Tambaram">Tambaram</option>
					  <option value="Thanjavur">Thanjavur</option>
					  <option value="Thoothukkudi">Thoothukkudi</option>
					  <option value="Tiruchirappalli">Tiruchirappalli</option>
					  <option value="Tirunelveli">Tirunelveli</option>
					  <option value="Tiruppur">Tiruppur</option>
					  <option value="Tiruvannamalai">Tiruvannamalai</option>
					  <option value="Tiruvottiyur">Tiruvottiyur</option>
					  <option value="Vellore">Vellore</option>
					  
				</select>



				 
				 <input type="text" name="pin" placeholder="Pin Code" required />
				 <input type="text" name="arealoc" placeholder="Area/Locality" required />
				 <input type="text" name="nominee_name" placeholder="Nominee Name (If any)" />
				 <input type="text" name="nominee_ac_no" placeholder="Nominee Account no"  />
				 
				 <select name ="acctype" required >
					  <option class="default" value="" disabled selected>Account Type</option>
					  <option value="Saving">Saving</option>
					  <option value="Current">Current</option>
				</select>
				<input type="submit" name="submit" value="Submit">
				</form>
         </div>
		 </div>
		 
<?php include'footer.php';?>
    
</body>
</html>


<?php 

if(isset($_POST['submit'])){

	session_start();
	$_SESSION['$cust_acopening'] = TRUE;
	$_SESSION['cust_name']=$_POST['name'];
	$_SESSION['cust_gender']=$_POST['gender'];
	$_SESSION['cust_mobile']=$_POST['mobile'];
	$_SESSION['cust_email']=$_POST['email'];
	$_SESSION['cust_landline']=$_POST['landline'];
	$_SESSION['cust_dob']=$_POST['dob'];
	$_SESSION['cust_pan=']=$_POST['pan_no'];
	$_SESSION['cust_citizenship']=$_POST['citizenship'];
	$_SESSION['cust_homeaddrs']=$_POST['homeaddrs'];
	$_SESSION['cust_officeaddrs']=$_POST['officeaddrs'];
	$_SESSION['cust_country']=$_POST['country'];
	$_SESSION['cust_state']=$_POST['state'];
	$_SESSION['cust_city']=$_POST['city'];
	$_SESSION['cust_pin']=$_POST['pin'];
	$_SESSION['arealoc']=$_POST['arealoc'];
	$_SESSION['nominee_name']=$_POST['nominee_name'];
	$_SESSION['nominee_ac_no']=$_POST['nominee_ac_no'];
	$_SESSION['cust_acctype']=$_POST['acctype'];
	
	header('location:cust_regfrm_confirm.php');
	
	
}

?>