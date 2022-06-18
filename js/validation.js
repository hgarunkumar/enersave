function validate()
{
		var user=document.contactForm.name.value;
		if(user=="")
		{
		document.getElementById("error").innerHTML="<font color='red'>Please Enter Name</font>";
		document.contactForm.name.focus();
		return false;
		}
		 var ck_user=/^[a-zA-Z ]{2,30}$/;
		if(!ck_user.test(user))
		{
		document.getElementById("error").innerHTML="<font color='red'>Please Enter Correct  Name</font>";
		document.contactForm.name.focus();
		return false;
		}  else{
		document.getElementById("error").innerHTML="";
		} 
		
		
		var cont=document.contactForm.phone.value;
		 if(cont == '')
			{
			  document.getElementById("error8").innerHTML="<font color='red'>Please Enter Contact Number</font>";
			  document.contactForm.phone.focus();
			  return false;
			}
			
			var ck_cont=/^\d{10,12}$/;
			if(!ck_cont.test(cont))
			{
			document.getElementById("error8").innerHTML="<font color='red'>Contact Number Must Be 10-12 Digits </font>";
			document.contactForm.phone.focus();
			return false;
			} else{
		document.getElementById("error8").innerHTML="";
		}	
		
		var email=document.contactForm.email.value;
		 if(email == '')
			{
			  document.getElementById("error7").innerHTML="<font color='red'>Please Enter Email Id </font>";
			  document.contactForm.email.focus();
			  return false;
			}
			var ck_email=/^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
		if(!ck_email.test(email))
		{
		document.getElementById("error7").innerHTML="<font color='red'> Enter Correct Email Id </font>";
		document.contactForm.email.focus();
		return false;
		}  else{
		document.getElementById("error7").innerHTML="";
		} 
		
		var qual=document.contactForm.education.value;
		if(qual=="")
		{
		document.getElementById("error6").innerHTML="<font color='red'>Please Enter Educational Qualification</font>";
		document.contactForm.education.focus();
		return false;
		}
		 var ck_qual=/^[a-zA-Z~\@\#\$\^\&\*\(\)\-\_\+\=\[\]\{\}\|\\\,\.\?\:]{2,30}$/;
		if(!ck_qual.test(qual))
		{
		document.getElementById("error6").innerHTML="<font color='red'>Please Enter Correct Educational Qualification</font>";
		document.contactForm.education.focus();
		return false;
		}  else{
		document.getElementById("error6").innerHTML="";
		}
		
		var useryear=document.contactForm.experience.value;
		 if(useryear == '')
			{
			  document.getElementById("error5").innerHTML="<font color='red'>Please Enter Experience in Year</font>";
			  document.contactForm.experience.focus();
			  return false;
			}
			
			var ck_useryear=/^\d{1,5}$/;
			if(!ck_useryear.test(useryear))
			{
			document.getElementById("error5").innerHTML="<font color='red'>Year Must Be 1-5 Digits </font>";
			document.contactForm.experience.focus();
			return false;
			} else{
		document.getElementById("error5").innerHTML="";
		}
		
		var userpost=document.contactForm.post.value;
		if(userpost=="")
		{
		document.getElementById("error4").innerHTML="<font color='red'>Please Enter Post Applied For</font>";
		document.contactForm.post.focus();
		return false;
		}
		 var ck_userpost=/^[a-zA-Z~\@\#\$\^\&\*\(\)\-\_\+\=\[\]\{\}\|\\\,\.\?\:]{2,30}$/;
		if(!ck_userpost.test(userpost))
		{
		document.getElementById("error4").innerHTML="<font color='red'>Please Enter Correct Post Applied For</font>";
		document.contactForm.post.focus();
		return false;
		}  else{
		document.getElementById("error4").innerHTML="";
		}
		
		var cv=document.contactForm.cv.value;
		if(cv == '')
			{
			  document.getElementById("error10").innerHTML="<font color='red'>Please Select a file</font>";
			  document.contactForm.cv.focus();			  
			  return false;
			}
			
			var cv = document.getElementById('cv');
			var fileName = cv.value;
			var ext = fileName.substring(fileName.lastIndexOf('.') + 1);
			if(ext == "gif" || ext == "GIF" || ext == "JPEG" || ext == "jpeg" || ext == "jpg" || ext == "JPG" || ext == "doc" || ext == "png" || ext == "pdf" || ext == "docx" || ext == "xls" || ext == "xlsx" || ext == "ppt" || ext == "txt")
			{
			return true;
			} 
			else
			{
			//document.getElementById("error11").innerHTML="<font color='red'>Upload .gif / .jpg / .png / .pdf / .doc / .docx / .xls / .xlsx / .ppt / .txt file only</font>";
			alert("Upload .gif / .jpg / .png / .pdf / .doc / .docx / .xls / .xlsx / .ppt / .txt file only");
			cv.focus();
			//document.contactForm.cv.value="";
			return false;
			}
			 
			var captchaCode=document.contactForm.captcha.value;
			if(""==document.contactForm.captcha.value)
			{
			document.getElementById("error15").innerHTML="<font color='red'>Please Enter Calculation</font>";
			  document.contactForm.captcha.focus();
			  return false;
			}
			
			var ck_captcha= (total!=total1);
			if(!ck_captcha.test(captchaCode))
			{
			document.getElementById("error15").innerHTML="<font color='red'> Wrong Calculation Entered </font>";
			document.contactForm.captcha.focus();
			return false;
			}  else{
			document.getElementById("error15").innerHTML="";
			}
}		

function randomnum()
{
	var number1 = 5;
	var number2 = 10;
	var randomnum = (parseInt(number2) - parseInt(number1)) + 1;
	var rand1 = Math.floor(Math.random()*randomnum)+parseInt(number1);
	var rand2 = Math.floor(Math.random()*randomnum)+parseInt(number1);
	$(".rand1").html(rand1);
	$(".rand2").html(rand2);
	}
	
	$(document).ready(function(){
	$(".re").click(function(){
	randomnum();
	});
	
	$("#submit").click(function(e){
	//alert("enter to submit");
	
	var total=parseInt($('.rand1').html())+parseInt($('.rand2').html());
	var total1=$('#total').val();
	
	if((""!=document.contactForm.name.value) && (""!=document.contactForm.phone.value) && (""!=document.contactForm.email.value))
	{
	if(document.contactForm.captcha.value == ""){
	//alert("Please enter captcha");
	document.getElementById("error15").innerHTML="<font color='red'>Please enter captcha</font>";
	e.preventDefault();
	}
	else if(total!=total1)
	{
	//alert("Wrong Calculation Entered");
	document.getElementById("error15").innerHTML="<font color='red'>Wrong Calculation Entered</font>";
	randomnum();
	return false;
	}
	else
	{
	document.getElementById("error15").innerHTML="";
	//document.getElementById("error15").innerHTML="<font color='red'>Wrong Calculation Entered</font>";
	//alert("Calculation Entered Correctly");
	}
	}
	});

randomnum();
});