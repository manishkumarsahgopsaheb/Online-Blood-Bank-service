
<html>
<head>
<title>Donar registraion</title>

<style>
body{

		background-color:#D5A1A1;
		
		}
.donarform{
		
			}
fieldset { 
  display: block;
  margin-left: 23%;
  margin-right: 33%;
  padding-top: 0.35em;
  padding-bottom: 0.480em;
  padding-left: 1.2em;
  padding-right: 1.2em;
  border: 3px solid white;
  font-size:20px;
  color:white;
}
input[type=text],input[type=number]{
				width:296px;;
				font-size:15px;
			
				
				}
input[type=submit]{
				width:15%;
				margin-left:45%;
				padding-left:10px;
				radius:25px;
				padding-bottom:10px;
				padding-top:10px;
				background:#791515;
				color:white;
				font-size:25px;
				font-family:bold;}
select{
		width:300px;
		height:30px;
		font-size:15px;
		}

</style>
<head>
<body>

<div style="background-color:#791515;">
<a href="main.php"><span style="
								position:absolute;
								font-size:25px;
								color:#830303;
								text-shadow: 2px 2px 5px red;
								font-style:oblique;
								text-decoration:underline;"><strong>BloodBud:<strong></span></a>
<img src="k1.png" style="width:100%;">

<div>
<p style="font-size:35px;text-align:center;font-style:oblique;text-shadow: 2px 2px 5px white;"><strong>Donar Registration!</strong></p>
<div class="donarform">



<form name="myform" onsubmit="return validateForm()" action="insert.php"  method="POST">
<fieldset>
<legend><span style="color:white;text-shadow: 2px 2px 5px red;">Donars Information</span></legend>
<div>
<table style="margin:0 auto; margin-top:4px; width:980px; height:32px; background-color:#B22222; color:#ffffff;">
	<tr>
	<td>Donar Name</td>
	<td><input type="text" name="dname" required>
	</tr><br>
	<tr>
	<td>Gender</td>
	<td><input type="radio" name="gender" value="m" required>Male</td>
	<td><input type="radio" name="gender" value="f" required>Female</td>
	<td><input type="radio" name="gender" value="o" required>Others</td>
	</tr>
	<tr>
	<td>Age</td>
	<td><input type="number" name="age" required></td>
	</tr>
	<tr>
	<td>Blood Group</td>
		<td>
			<select name="bloodgroup" id="bloodgroup" value="" required>
<option value="">--</option>
<option value='' selected></option><option value='A+'>A+</option>
<option value='A-'>A-</option><option value='A1+'>A1+</option>
<option value='A1B+'>A1B+</option><option value='A1B-'>A1B-</option>
<option value='A2+'>A2+</option><option value='A2-'>A2-</option>
<option value='A2B+'>A2B+</option><option value='AB '>AB </option>
<option value='AB+'>AB+</option><option value='AB-'>AB-</option>
<option value='B '>B </option><option value='B+'>B+</option>
<option value='B-'>B-</option><option value='O+'>O+</option>
<option value='O-'>O-</option></select>
		
	</td>
	
	
	</tr>
	<tr>
	<td>Weight</td>
	<td><input type="number" name="weight" required></td>
	</tr>
	<tr>
	<td>Contact Number</td>
	<td><input type="number" name="contact" required></td>
	</tr>
	
	<tr>
	<td>State</td>
	<td>
<select name="state" required>
	<option value="">--</option>
<option value='' selected></option><option value='000'>000</option><option value='AP'>AP</option>
<option value='AS'>AS</option><option value='BH'>BH</option><option value='CH'>CH</option><option value='D&Diu'>D&Diu</option>
<option value='D&NH'>D&NH</option><option value='DL'>DL</option><option value='GJ'>GJ</option><option value='HP'>HP</option>
<option value='HR'>HR</option><option value='J&K'>J&K</option><option value='JH'>JH</option><option value='JK'>JK</option>
<option value='KA'>KA</option><option value='KR'>KR</option><option value='LKDP'>LKDP</option><option value='MH'>MH</option>
<option value='MP'>MP</option><option value='NL'>NL</option><option value='OR'>OR</option><option value='PJ'>PJ</option>
<option value='PO'>PO</option><option value='RJ'>RJ</option><option value='SK'>SK</option><option value='TN'>TN</option>
<option value='UP'>UP</option><option value='UT'>UT</option><option value='WB'>WB</option></select>
	
	</td>
	</tr>
	<tr>
	<td>City</td>
	<td>
<select name="city" required>
	<option value="">--</option>
<option value='' selected></option>
<option value='Aasegaon Purna'>Aasegaon Purna</option><option value='Abohar'>Abohar</option><option value='Akola'>Akola</option>
<option value='Aligarh'>Aligarh</option><option value='Allahabad'>Allahabad</option><option value='Amnour'>Amnour</option>
<option value='Amritsar'>Amritsar</option><option value='Arrah'>Arrah</option><option value='Aurangabad'>Aurangabad</option>
<option value='Ausa'>Ausa</option><option value='Badarpur'>Badarpur</option><option value='Badnagar'>Badnagar</option>
<option value='Bagusarai'>Bagusarai</option><option value='Banka'>Banka</option><option value='Banmankhi'>Banmankhi</option>
<option value='Barh'>Barh</option><option value='Begusarai'>Begusarai</option><option value='Begusari'>Begusari</option>
<option value='Bettiah'>Bettiah</option><option value='Bhagalpur'>Bhagalpur</option><option value='Bhopalpatnam'>Bhopalpatnam</option>
<option value='Bhubaneswar'>Bhubaneswar</option><option value='Biharsharif'>Biharsharif</option><option value='Buxar'>Buxar</option>
<option value='Chandapura'>Chandapura</option><option value='Chandauli'>Chandauli</option><option value='Chapra'>Chapra</option>
<option value='Chennai'>Chennai</option><option value='Chennamagallur'>Chennamagallur</option><option value='Chhapara'>Chhapara</option>
<option value='Chittaranjan'>Chittaranjan</option><option value='Cuttack'>Cuttack</option><option value='Dalkheda'>Dalkheda</option>
<option value='Darbhanga'>Darbhanga</option><option value='Dehradun'>Dehradun</option><option value='Dhanbad'>Dhanbad</option>
<option value='Doaba'>Doaba</option><option value='Dumka'>Dumka</option><option value='Faridabad'>Faridabad</option>
<option value='Forbesganj'>Forbesganj</option><option value='Gaya'>Gaya</option><option value='Ghaziabad'>Ghaziabad</option>
<option value='Gopalganj'>Gopalganj</option><option value='Gorakhpur'>Gorakhpur</option><option value='Gulzaribagh'>Gulzaribagh</option>
<option value='Gurgaon'>Gurgaon</option><option value='Hajipur'>Hajipur</option><option value='Haradanahalli'>Haradanahalli</option>
<option value='Hazaribag'>Hazaribag</option><option value='Hilsa'>Hilsa</option><option value='Indore'>Indore</option>
<option value='Jabalpur'>Jabalpur</option><option value='Jagatsinghpur'>Jagatsinghpur</option><option value='Jaipur'>Jaipur</option>
<option value='Jamalpur'>Jamalpur</option><option value='Jammu Tawi'>Jammu Tawi</option><option value='Jamshedpur'>Jamshedpur</option>
<option value='Jehanabad'>Jehanabad</option><option value='Jhanjharpur'>Jhanjharpur</option><option value='Kaithal'>Kaithal</option>
<option value='Kanpur'>Kanpur</option><option value='Katihar'>Katihar</option><option value='Khagaria'>Khagaria</option>
<option value='Khagaul'>Khagaul</option><option value='Kolaras'>Kolaras</option><option value='Kolkata'>Kolkata</option>
<option value='Kurukshetra'>Kurukshetra</option><option value='Lalganj'>Lalganj</option><option value='Lemale'>Lemale</option>
<option value='Ludhiana'>Ludhiana</option><option value='Madhepura'>Madhepura</option><option value='Madhubani'>Madhubani</option>
<option value='Madurai'>Madurai</option><option value='Meerut'>Meerut</option><option value='Moradabad'>Moradabad</option>
<option value='Motihari'>Motihari</option><option value='Mumbai'>Mumbai</option><option value='Munger'>Munger</option>
<option value='Muzaffarpur'>Muzaffarpur</option><option value='Nagpur'>Nagpur</option><option value='Nalanda'>Nalanda</option>
<option value='Namchi'>Namchi</option><option value='Nawadah'>Nawadah</option><option value='NewDelhi'>NewDelhi</option>
<option value='Noida'>Noida</option><option value='Parsa'>Parsa</option><option value='Patan'>Patan</option><option value='Patna'>Patna</option>
<option value='PatnaSaheb'>PatnaSaheb</option><option value='Pune'>Pune</option><option value='Purnea'>Purnea</option><option value='Purnia'>Purnia</option>
<option value='Rajkot'>Rajkot</option><option value='Ranchi'>Ranchi</option><option value='Raxaul'>Raxaul</option><option value='Rohtak'>Rohtak</option>
<option value='Roorkee'>Roorkee</option><option value='Rosera'>Rosera</option><option value='Rudrapur'>Rudrapur</option><option value='Saharsa'>Saharsa</option>
<option value='Samastipur'>Samastipur</option><option value='Select'>Select</option><option value='Seondha'>Seondha</option>
<option value='Shahbad'>Shahbad</option><option value='Sitamarhi'>Sitamarhi</option><option value='Siwan'>Siwan</option>
<option value='Solan'>Solan</option><option value='Sonepur'>Sonepur</option><option value='Supoul'>Supoul</option>
<option value='Surendranagar'>Surendranagar</option><option value='Tambaram'>Tambaram</option><option value='Tigaon'>Tigaon</option>
<option value='Tohana'>Tohana</option><option value='Vapi'>Vapi</option><option value='Varanasi'>Varanasi</option><option value='Washim'>Washim</option>
</select>
	</td>

	</tr>
	<tr>
	<td>Pin code</td>
	<td><input type="number" name="pin" required></td>
	</tr>
	<tr>
	<td><input type="checkbox" name="agree" required> Agree to <a href="terms.html" style="color:#00CED1;">Terms and Conditions</a></td>
	</tr>
</table>
<input type="submit" value="Submit">
</div>
</fieldset>
</form>
</div>

<img src="k6.jpg" style="width:100%;">

</body>
</html>