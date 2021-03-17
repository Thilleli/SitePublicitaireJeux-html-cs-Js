<!DOCTYPE html>
<html>
<head>
	<title>Contact</title>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<link href="style.css" rel="stylesheet">


	<script type="text/javascript">
		function validateForm()                                    
		{ 
		    var name = document.forms["fcontact"]["name"];               
		    var email = document.forms["fcontact"]["email"];    
		    var message = document.forms["fcontact"]["message"];   
		   
		    if (name.value == "")                                  
		    { 
		        document.getElementById('errorname').innerHTML="Veuillez saisir votre nom!";  
		        name.focus(); 
		        return false; 
		    }else{
		        document.getElementById('errorname').innerHTML="";  
		    }
		       
		    if (email.value == "")                                   
		    { 
		        document.getElementById('erroremail').innerHTML="Veuillez entrez une adresse mail!"; 
		        email.focus(); 
		        return false; 
		    }else{
		        document.getElementById('erroremail').innerHTML="";  
		    }
	
		    if (message.value == "")                           
		    {
		        document.getElementById('errormsg').innerHTML="Veuillez saisir un message à envoyer!"; 
		        message.focus(); 
		        return false; 
		    }else{
		        document.getElementById('errormsg').innerHTML="votre message nous a été envoyer!";  
		    }
		   
		    return true;
		}

    </script>
</head>
<body>
	<header></header>
	<div><?php include('navbarre.php'); ?></div>
	<div class="container" align="center" id="formcontact">
		<h2>CRSED Formulaire de contact</h2>
        

	      <form class="fcontact" name="fcontact" action="contact.php" onsubmit="return validateForm()" method="post">
	      	<p>Avez vous des questions ou un problème? Envoyez nous un message!</p>
	         <table class="form-style">
	            <tr>
	               <td>
	                  <label>
	                     Votre nom <span class="required">*</span>
	                  </label>
	               </td>
	               <td>
	                  <input type="text" name="name" class="long"/>
	                  <span class="error" id="errorname"></span>
	               </td>
	            </tr>
	            <tr>
	               <td>
	                  <label>
	                     Votre adresse e-mail <span class="required">*</span>
	                  </label>
	               </td>
	               <td>
	                  <input type="email" name="email" class="long"/>
	                  <span class="error" id="erroremail"></span>
	               </td>
	            </tr>
	            <tr>
	               <td>
	                  <label>
	                     Message <span class="required">*</span>
	                  </label>
	               </td>
	               <td>
	                  <textarea name="message" class="long field-textarea"></textarea>
	                  <span class="error" id="errormsg"></span>
	               </td>
	            </tr>
	            <tr>
	               <td><span class="error" id="msg"></span></td>
	               <td>
	                  <button type="button" name="Envoyer" onclick="validateForm()" id="Envoyer"> Envoyer</button>   
	                  <button type="reset" name="reset" > Réinitialiser</button>    
	               </td>
	            </tr>
	         </table>
	      </form>
	        
        
    </div>


</body>
</html>