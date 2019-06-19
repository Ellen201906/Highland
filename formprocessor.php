<!--Author:Jonathan Arca
    This script prints everything the user submitted using the form on the contact page.
-->
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN" "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1">
<title>Untitled Document</title>
<style>
#myButton{
               text-align:left;
			   color: green;
               font-size:20px;
   			   width:200px;
              }

.message{
	font-size:20px
}
</style>
</head>

<body>
<?php
// assign the local variables from the post array
$first_name = $_REQUEST['first_name'];
$last_name = $_REQUEST['last_name'];
$email = $_REQUEST['email'];
$message = $_REQUEST['message'];


// process the data entered into the previous form
print "<h2>Thank you $first_name $last_name, we received the following information</h2>";
print "<div class='message'>";
print "<p>First Name: $first_name</p>";
print "<p>Last Name: $last_name</p>";
print "<p>Email Address: $email</p>";
print "<p>Message: $message</p>";
print "</div>";
?>
<br>

<script>
                function select() {
                    var qq = window.open('index.php', '_self', 'width=1300,height=1200,menubar=yes,toolbar=yes, status=yes,scrollbars=yes');       
            }
            </script>

 <button type="button" class="btn btn-success" onclick="select()" id="myButton">back to home page</button>
</body>
</html>
