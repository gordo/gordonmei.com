<?php

$where_form_is="http://".$_SERVER['SERVER_NAME'].strrev(strstr(strrev($_SERVER['PHP_SELF']),"/"));

session_start();
if( ($_SESSION['security_code']==$_POST['security_code']) && (!empty($_POST['security_code'])) ) { 
mail("gordeon@gmail.com","Monstercyborg - Form submission","Form data:

My mommy calls me:: " . $_POST['thename'] . " 
E-mail me back at:: " . $_POST['theemail'] . " 
I want to say:: " . $_POST['themessage'] . " 


 
");
//powered by phpFormGenerator.
include("confirm.html");
}
else {
echo "Invalid Captcha String.";
}

?>