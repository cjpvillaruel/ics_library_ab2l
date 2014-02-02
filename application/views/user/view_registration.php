<!--Author: Aristotle Martinez
	View for Registration
	With some HTML5 Validation
	Used PHP in opening the Registration form-->


<?php 

$this->load->view('user/view_header');
?>
<body>
 <?php 
$attributes = array('name' => 'regForm');

 echo form_open("user/controller_register/registration", $attributes); ?>
 <ul>
	         <h2>Register</h2>
	         <!--span class="required_notification">* Denotes Required Field</span-->
	    <li>
	        <label for="fname">First Name:</label>
	        <input type="text" name="fname" id = "fname" required onfocus = "disabler()" /><span name = "valFname"></span> 
	    </li>
	    <li>
	        <label for="minit">Middle Initial:</label>
	        <input type="text" name="minit" id = "minit" required/><span name = "valInitial"></span>
	    </li>
	    <li>
	        <label for="lname">Last Name:</label>
	        <input type="text" name="lname" id = "lname" required/><span name = "valLname"></span>
	    </li>
	    <li>
	        <label for="classi">Classification:</label>
		<select id = "classi" name = "classi" onclick = "checker()" >
		<option value="student">Student</option>
		<option value="faculty">Faculty</option>
		</select>
	    </li>
	     <li>
	        <label for="stdNum" id = "labelNum">Student Number:</label>
	        <input type="text" name="stdNum" id = "stdNum" required/>	<span name = "valNumber"></span>	
	    </li>
	    <li>
	        <label for="college">College:</label>
		  	<select id = "college" name = "college" onclick = "courseChecker()" ><span name = "valCollege"></span>
			
			<option value="CA">CA</option>
			<option value="CAS">CAS</option>
			<option value="CDC">CDC</option>
			
			<option value="CEAT">CEAT</option>
			<option value="CEM">CEM</option>
			<option value="CFNR">CFNR</option>
			<option value="CHE">CHE</option>

			<option value="CVM">CVM</option>
			<!--option value="SESAM">SESAM</option>
			<option value="GS">GS</option>
			<option value="CPAf">CPAf</option-->
			
			</select>
	    </li>
	    <li>
	        <label for="course">Course:</label>
	      <select id = "course" name = "course" >
	      


	      </select>
	  
	    </li>
	    <li>
	        <label for="eadd">Email Address:</label>
	        <input type="email" name="eadd" id = "eadd" required/><span name = "valEmail"></span>
	    </li>
	    <li>
	        <label for="uname">Username:</label>
	        <input type="text" name="uname" id = "uname" required/><span name = "valUser"></span>
	    </li>
	    <li>
	        <label for="pass">Password:</label>
	        <input type="password" name="pass" id = "pass" required/><span name = "valPass"></span>
	    </li>
	    <li>
	        <label for="cpass">Confirm Password:</label>
	        <input type="password" name="cpass" id = "cpass" required/><span name = "valCpass"></span>
	    </li>
	   <br/>
	    <input type = "submit" value = "Register"/>
		<input type = "reset" value = "Cancel"/>

	</ul>
</form>
<script type = "text/javascript">
function disabler(){
var courseBox = document.getElementById('course');
var collegeBox = document.getElementById('college');
var NumBox = document.getElementById('stdNum');

courseBox.disabled = true;
collegeBox.disabled = true;
NumBox.disabled = true;
}

function checker(){
var selected = document.getElementById('classi').value;
var collegeBox = document.getElementById('college')
var NumBox = document.getElementById('stdNum');
var NumLabel = document.getElementById('labelNum');


if(selected === 'faculty'){
	collegeBox.disabled = false;
	NumBox.disabled = false;
	NumLabel.innerHTML = 'Faculty Number: ';
}
else{
	collegeBox.disabled = false;
	NumBox.disabled = false;
	NumLabel.innerHTML = 'Student Number: ';
}
//alert(checker);
}
function courseChecker(){
var selected = document.getElementById('college').value;
var obj = document.getElementById('course')
obj.disabled = false;
var length = obj.options.length;

while (obj.hasChildNodes())
    obj.removeChild(obj.firstChild);


if(selected === 'CA'){
	obj.options[obj.options.length] = new Option("BSA","BSA");
	obj.options[obj.options.length] = new Option("BSFT","BSFT");
	obj.options[obj.options.length] = new Option("BSAB","BSAB");
	obj.options[obj.options.length] = new Option("BSAC","BSAC");
	
}
else if(selected === 'CAS'){
	obj.options[obj.options.length] = new Option("BACA","BACA");
	obj.options[obj.options.length] = new Option("BA Philo","BA Philo");
	obj.options[obj.options.length] = new Option("BA Socio","BA Socio");
	obj.options[obj.options.length] = new Option("BS AMATH","BS AMATH");

	obj.options[obj.options.length] = new Option("BS APHY","BS APHY");
	obj.options[obj.options.length] = new Option("BS BIO","BS BIO");
	obj.options[obj.options.length] = new Option("BS CHEM","BS CHEM");
	obj.options[obj.options.length] = new Option("BSCS","BSCS");

	obj.options[obj.options.length] = new Option("BS MATH","BS MATH");
	obj.options[obj.options.length] = new Option("BS MST","BS MST");
	obj.options[obj.options.length] = new Option("BS STAT","BS STAT");
}
else if(selected === 'CDC'){
	obj.options[obj.options.length] = new Option("BSDC","BSDC");
}
else if(selected === 'CEAT'){
	obj.options[obj.options.length] = new Option("BS ABE","BS ABE");
	obj.options[obj.options.length] = new Option("BSChemE","BSChemE");
	obj.options[obj.options.length] = new Option("BSCE","BSCE");
	obj.options[obj.options.length] = new Option("BSEE","BSEE");

	obj.options[obj.options.length] = new Option("BSIE","BSIE");
}
else if(selected === 'CEM'){
	obj.options[obj.options.length] = new Option("BS AE","BS AE");
	obj.options[obj.options.length] = new Option("BSE","BSE");
	obj.options[obj.options.length] = new Option("BSAM","BSAM");

}
else if(selected === 'SESAM'){
	obj.options[obj.options.length] = new Option("PhD EnSci","PhD EnSci");
	obj.options[obj.options.length] = new Option("MS EnSci","MS EnSci");
}
else if(selected === 'CFNR'){
	obj.options[obj.options.length] = new Option("BSF","BSF");

}
else if(selected === 'CHE'){
obj.options[obj.options.length] = new Option("BSHE","BSHE");
obj.options[obj.options.length] = new Option("BSN","BSN");

}
else if(selected === 'GS'){

}
else if(selected === 'CPaf'){

}
else if(selected === 'CVM'){
obj.options[obj.options.length] = new Option("DVM","DVM");
obj.options[obj.options.length] = new Option("MSVM","MSVM");
obj.options[obj.options.length] = new Option("MSV","MSV");
}


//alert(checker);
}



</script>
</body>
</html>
