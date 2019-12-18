<?php
include 'head1.php';
?>
        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#example1').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
<div id="section1" class="container-fluid">
<img id="img" src="ikon.png" alt="icon" >


<div id= "quote"><br />Get Projects From StartUps.<br />Work Leisurely !
</div>
</div>

<form class="form-horizontal" action="savingaddapro.php" method="post">
  <fieldset>
    <legend><h2>ADD A PROJECT</h2></legend>
    <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">PROJECT NAME</label>
      <div class="col-lg-10">
        <input type="text" class="form-control" name="projectname" id="projectname" placeholder="Project Name">
      </div>
    </div>

	 <div class="form-group">
      <label for="inputEmail" class="col-lg-2 control-label">STIPENED(INR)</label>
      <div class="col-lg-10">
        <input type="number" class="form-control" name="stipened" id="stpened" placeholder="Amount">
      </div>
    </div>

	 <div class="form-group">

      <label for="inputEmail" class="col-lg-2 control-label">LOCATION</label>
	  	       <div class="col-lg-10">
       <select data-placeholder="Select City" id="city_sidebar" name="city" class="form-control" id="sel1" >
				<option value='Bengaluru'>Bengaluru</option>
				 <option value="mumbai">Mumbai</option>
				 <option value="delhi">Delhi</option>
				 <option value="hyderabad">Hyderabad</option>
				 <option value="pune">Pune</option>
				 <option value="chennai">Chennai</option>
				 <option value="indore">Indore</option>
				 <option value="kolkata">Kolkata</option>
                 <option value="agra">Agra</option>
                <option value="ahmedabad">Ahmedabad</option>
                <option value="aizawl">Aizawl</option>
                <option value="ajmer">Ajmer</option>
                <option value="akola">Akola</option>
                <option value="alappuzha">Alappuzha</option>
                <option value="aligarh">Aligarh</option>
                <option value="allahabad">Allahabad</option>
                <option value="alwar">Alwar</option>
                <option value="ambala">Ambala</option>
                <option value="amritsar">Amritsar</option>
                <option value="anand">Anand</option>
                <option value="andheri">Andheri</option>
                <option value="anekal">Anekal</option>
                <option value="arambol">Arambol</option>
                <option value="asansol">Asansol</option>
                <option value="aurangabad">Aurangabad</option>
                <option value="baddi">Baddi</option>
                <option value="bareilly">Bareilly</option>
                <option value="barmer">Barmer</option>
                <option value="bathinda">Bathinda</option>
                <option value="belagavi">Belagavi</option>
				<option name='Bengaluru'>Bengaluru</option>
                <option value="berkeley">Berkeley</option>
                <option value="berkley">Berkley</option>
                <option value="bhagalpur">Bhagalpur</option>
                <option value="bharuch">Bharuch</option>
                <option value="bhilai">Bhilai</option>
                <option value="bhiwandi">Bhiwandi</option>
                <option value="bhopal">Bhopal</option>
                <option value="bhubaneswar">Bhubaneswar</option>
                <option value="bidar">Bidar</option>
                <option value="bidhannagar">Bidhannagar</option>
                <option value="bihar%20sharif">Bihar Sharif</option>
                <option value="bikaner">Bikaner</option>
                <option value="bilaspur">Bilaspur</option>
                <option value="bongaigaon">Bongaigaon</option>
                <option value="boston">Boston</option>
                <option value="budaun">Budaun</option>
                <option value="burdwan">Burdwan</option>
                <option value="calcutta">Calcutta</option>
                <option value="central%20delhi">Central Delhi</option>
                <option value="chakan">Chakan</option>
                <option value="chalakudy">Chalakudy</option>
                <option value="chamba">Chamba</option>
                <option value="chamoli">Chamoli</option>
                <option value="chandigarh">Chandigarh</option>
                <option value="chennai">Chennai</option>
                <option value="coimbatore">Coimbatore</option>
                <option value="coimbatore%20north">Coimbatore North</option>
                <option value="coimbatore%20south">Coimbatore South</option>
                <option value="coonoor">Coonoor</option>
                <option value="coventry">Coventry</option>
                <option value="cuttack">Cuttack</option>
                <option value="dehradun">Dehradun</option>
                <option value="delhi">Delhi</option>
                <option value="deoghar">Deoghar</option>
                <option value="dhanbad">Dhanbad</option>
                <option value="dharamshala">Dharamshala</option>
                <option value="dharwad">Dharwad</option>
                <option value="dibiyapur">Dibiyapur</option>
                <option value="dibrugarh">Dibrugarh</option>
                <option value="dombivli">Dombivli</option>
                <option value="dresden">Dresden</option>
                <option value="durg">Durg</option>
                <option value="durgapur">Durgapur</option>
                <option value="east%20delhi">East Delhi</option>
                <option value="ernakulam">Ernakulam</option>
                <option value="erode">Erode</option>
                <option value="etah">Etah</option>
                <option value="faizabad">Faizabad</option>
                <option value="fariabad">Fariabad</option>
                <option value="faridabad">Faridabad</option>
                <option value="gandhinagar">Gandhinagar</option>
                <option value="gangtok">Gangtok</option>
                <option value="gaya">Gaya</option>
                <option value="ghaziabad">Ghaziabad</option>
                <option value="goa%20velha">Goa Velha</option>
                <option value="gopalganj">Gopalganj</option>
                <option value="gorakhpur">Gorakhpur</option>
                <option value="greater%20noida">Greater Noida</option>
                <option value="gurgaon">Gurgaon</option>
                <option value="guwahati">Guwahati</option>
                <option value="gwalior">Gwalior</option>
                <option value="haldwani">Haldwani</option>
                <option value="hamirpur">Hamirpur</option>
                <option value="haridwar">Haridwar</option>
                <option value="hinganghat">Hinganghat</option>
                <option value="hisar">Hisar</option>
                <option value="honnavar">Honnavar</option>
                <option value="hubli">Hubli</option>
                <option value="hyderabad">Hyderabad</option>
                <option value="idukki">Idukki</option>
                <option value="imphal">Imphal</option>
                <option value="indore">Indore</option>
                <option value="itanagar">Itanagar</option>
                <option value="jabalpur">Jabalpur</option>
                <option value="jaipur">Jaipur</option>
                <option value="jaisalmer">Jaisalmer</option>
                <option value="jalalsar">Jalalsar</option>
                <option value="jalandhar">Jalandhar</option>
                <option value="jammu">Jammu</option>
                <option value="jamshedpur">Jamshedpur</option>
                <option value="jhalawar">Jhalawar</option>
                <option value="jodhpur">Jodhpur</option>
                <option value="jogeshwari">Jogeshwari</option>
                <option value="kakinada">Kakinada</option>
                <option value="kalaburagi">Kalaburagi</option>
                <option value="kalyan">Kalyan</option>
                <option value="kamand">Kamand</option>
                <option value="kanpur">Kanpur</option>
                <option value="kanpur%20nagar">Kanpur Nagar</option>
                <option value="kanshi%20ram%20nagar">Kanshi Ram Nagar</option>
                <option value="kanyakumari">Kanyakumari</option>
                <option value="karauli">Karauli</option>
                <option value="karimnagar">Karimnagar</option>
                <option value="karnal">Karnal</option>
                <option value="kasganj">Kasganj</option>
                <option value="kashmir">Kashmir</option>
                <option value="kharagpur">Kharagpur</option>
                <option value="kochi">Kochi</option>
                <option value="kolar">Kolar</option>
                <option value="kolhapur">Kolhapur</option>
                <option value="kolkata">Kolkata</option>
                <option value="koratty">Koratty</option>
                <option value="kota">Kota</option>
                <option value="kottayam">Kottayam</option>
                <option value="kozhikode">Kozhikode</option>
                <option value="kurukshetra">Kurukshetra</option>
                <option value="lakhimpur">Lakhimpur</option>
                <option value="lakhimpur%20kheri">Lakhimpur Kheri</option>
                <option value="latur">Latur</option>
                <option value="leh">Leh</option>
                <option value="london">London</option>
                <option value="lucknow">Lucknow</option>
                <option value="ludhiana">Ludhiana</option>
                <option value="madurai">Madurai</option>
                <option value="malad">Malad</option>
                <option value="malappuram">Malappuram</option>
                <option value="manali">Manali</option>
                <option value="mandi">Mandi</option>
                <option value="mangaluru">Mangaluru</option>
                <option value="manila">Manila</option>
                <option value="manipal">Manipal</option>
                <option value="mathura">Mathura</option>
                <option value="medinipur">Medinipur</option>
                <option value="meerut">Meerut</option>
                <option value="mira%20bhayandar">Mira Bhayandar</option>
                <option value="modinagar">Modinagar</option>
                <option value="mohali">Mohali</option>
                <option value="moradabad">Moradabad</option>
                <option value="mumbai">Mumbai</option>
                <option value="mumbai%20suburban">Mumbai Suburban</option>
                <option value="muradnagar">Muradnagar</option>
                <option value="mussoorie">Mussoorie</option>
                <option value="muzaffarpur">Muzaffarpur</option>
                <option value="mysuru">Mysuru</option>
                <option value="nagercoil">Nagercoil</option>
                <option value="nagpur">Nagpur</option>
                <option value="nala%20sopara">Nala Sopara</option>
                <option value="namakkal">Namakkal</option>
                <option value="nanded">Nanded</option>
                <option value="nashik">Nashik</option>
                <option value="navi%20mumbai">Navi Mumbai</option>
                <option value="naya%20raipur">Naya Raipur</option>
                <option value="noida">Noida</option>
                <option value="north%20delhi">North Delhi</option>
                <option value="omihachiman">Omihachiman</option>
                <option value="palakkad">Palakkad</option>
                <option value="palghar">Palghar</option>
                <option value="palwal">Palwal</option>
                <option value="panaji">Panaji</option>
                <option value="panchkula">Panchkula</option>
                <option value="panipat">Panipat</option>
                <option value="panjim">Panjim</option>
                <option value="parbhani">Parbhani</option>
                <option value="parwanoo">Parwanoo</option>
                <option value="pataudi">Pataudi</option>
                <option value="pathanamthitta">Pathanamthitta</option>
                <option value="patiala">Patiala</option>
                <option value="patna">Patna</option>
                <option value="pilani">Pilani</option>
                <option value="pimpri-chinchwad">Pimpri-Chinchwad</option>
                <option value="pittsburgh">Pittsburgh</option>
                <option value="port%20blair">Port Blair</option>
                <option value="puducherry">Puducherry</option>
                <option value="pune">Pune</option>
                <option value="purulia">Purulia</option>
                <option value="rae%20bareli">Rae Bareli</option>
                <option value="raipur">Raipur</option>
                <option value="rajahmundry">Rajahmundry</option>
                <option value="rajapalayam">Rajapalayam</option>
                <option value="rajarhat">Rajarhat</option>
                <option value="rajkot">Rajkot</option>
                <option value="ramanagara">Ramanagara</option>
                <option value="ranchi">Ranchi</option>
                <option value="redmond">Redmond</option>
                <option value="rishikesh">Rishikesh</option>
                <option value="rohtak">Rohtak</option>
                <option value="rourkela">Rourkela</option>
                <option value="rudraprayag">Rudraprayag</option>
                <option value="rudrapur">Rudrapur</option>
                <option value="saharanpur">Saharanpur</option>
                <option value="salem">Salem</option>
                <option value="sangli">Sangli</option>
                <option value="satara">Satara</option>
                <option value="secunderabad">Secunderabad</option>
                <option value="shillong">Shillong</option>
                <option value="shimla">Shimla</option>
                <option value="sikar">Sikar</option>
                <option value="siliguri">Siliguri</option>
                <option value="silvassa">Silvassa</option>
                <option value="sirsi">Sirsi</option>
                <option value="sitapur">Sitapur</option>
                <option value="sivakasi">Sivakasi</option>
                <option value="sivasagar">Sivasagar</option>
                <option value="siwan">Siwan</option>
                <option value="sohna">Sohna</option>
                <option value="solan">Solan</option>
                <option value="solapur">Solapur</option>
                <option value="sonipat">Sonipat</option>
                <option value="south%20delhi">South Delhi</option>
                <option value="sri%20ganganagar">Sri Ganganagar</option>
                <option value="srinagar">Srinagar</option>
                <option value="srivilliputhur">Srivilliputhur</option>
                <option value="sukma">Sukma</option>
                <option value="surat">Surat</option>
                <option value="talegaon%20dabhade">Talegaon Dabhade</option>
                <option value="tehri%20garhwal">Tehri Garhwal</option>
                <option value="thane">Thane</option>
                <option value="thiruvananthapuram">Thiruvananthapuram</option>
                <option value="thrissur">Thrissur</option>
                <option value="tinsukia">Tinsukia</option>
                <option value="tiruchirappalli">Tiruchirappalli</option>
                <option value="tirupati">Tirupati</option>
                <option value="tiruppur">Tiruppur</option>
                <option value="tumkur">Tumkur</option>
                <option value="udaipur">Udaipur</option>
                <option value="udupi">Udupi</option>
                <option value="ujjain">Ujjain</option>
                <option value="una">Una</option>
                <option value="unjha">Unjha</option>
                <option value="vadodara">Vadodara</option>
                <option value="vapi">Vapi</option>
                <option value="varanasi">Varanasi</option>
                <option value="vasai">Vasai</option>
                <option value="vijayawada">Vijayawada</option>
                <option value="villupuram">Villupuram</option>
                <option value="virar">Virar</option>
                <option value="virudhunagar">Virudhunagar</option>
                <option value="visakhapatnam">Visakhapatnam</option>
                <option value="warangal">Warangal</option>
                <option value="wayanad">Wayanad</option>
                <option value="west%20delhi">West Delhi</option>
                <option value="west%20singhbhum">West Singhbhum</option>
                <option value="yamuna%20nagar">Yamuna Nagar</option>
                <option value="zirakpur">Zirakpur</option>
        
                    </select>
					      </div>
    </div>
	 <div class="form-group" >
      <label for="inputEmail" class="col-lg-2 control-label">APPLY BY</label>
      <div class="col-lg-10" data-date-format="dd/mm/yyyy">
        <input type="text" class="datepicker" name="applyby" id="datepicker" data-date-format="dd/mm/yyyy" placeholder="31/01/1996" >
		        <script src="js/jquery-1.9.1.min.js"></script>
        <script src="js/bootstrap-datepicker.js"></script>
        <script type="text/javascript">
            // When the document is ready
            $(document).ready(function () {
                
                $('#datepicker').datepicker({
                    format: "dd/mm/yyyy"
                });  
            
            });
        </script>
      </div>
	  
    </div>
	 <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Category</label>
	        <div class="col-lg-10">
      <select class="form-control" id="sel1"  name='category'>
  <option value="coding">Coding</option>
  <option value="marketing">Marketing</option>
   <option value="bussiness">Bussiness Development</option>
     <option value="Others">Others</option>
</select>
      </div>
    </div>
    <div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Who Can Apply</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="whocanapply"  name="whocanapply" placeholder="Describe the desired qualification or the qualities of the applicant"></textarea>
      </div>
    </div>
	<div class="form-group">
      <label for="textArea" class="col-lg-2 control-label">Describe the project Details</label>
      <div class="col-lg-10">
        <textarea class="form-control" rows="3" id="projectdetails" name="projectdescription" placeholder="Describe a brief desciption about the project "></textarea>
      </div>
    </div>
    
    <div class="form-group">
      <div class="col-lg-10 col-lg-offset-2">
        <button type="reset" class="btn btn-default">Cancel</button>
        <button type="submit" name="submit" value="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </fieldset>
</form>


<?php
include 'footer.php';
?>