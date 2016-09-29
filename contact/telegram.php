<?php
/* Set e-mail recipient */
$myemail = "gordeon@gmail.com";
$mysubject = "Web Form from gordonmei.com";

/* Check all form inputs using check_input function */
$yourname = check_input($_POST['thename'], "Enter your name");
$email    = check_input($_POST['theemail']);
$comments = check_input($_POST['themessage'], "Write your message");

/* If e-mail is not valid show error message */
if (!preg_match("/([\w\-]+\@[\w\-]+\.[\w\-]+)/", $email))
{
    show_error("E-mail address not valid");
}

/* Let's prepare the message for the e-mail */
$message = "Your contact form has been submitted by:

Name: $yourname
E-mail: $email
Comments:
$comments
";

/* Send the message using mail() function */
mail($myemail, $mysubject, $message);

/* Redirect visitor to the thank you page */
header('Location: indexconfirm.html');
exit();

/* Functions we used */
function check_input($data, $problem='')
{
    $data = trim($data);
    $data = stripslashes($data);
    $data = htmlspecialchars($data);
    if ($problem && strlen($data) == 0)
    {
        show_error($problem);
    }
    return $data;
}

function show_error($myError)
{
?>
    <html>
    <body>

    <b>Please correct the following error:</b><br />
    <?php echo $myError; ?>

    </body>
    </html>
<?php
exit();
}
?>
