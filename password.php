<?php
   extract( $_POST );

   if( !$USERNAME || !$PASSWORD ) {
     fieldsBlank();
     die();
   }
 

   if( isset( $Enter ) ) {

   $userVerified = 0;

  if( $USERNAME == "admin")
  {
    $userVerified = 1;

   if(checkPassword( $PASSWORD ) == true)
      accessGranted( $USERNAME );
   else
      wrongPassword();

   }
   }

  if(!$userVerified)
     accessDenied();

  function checkPassword( $PASSWORD )
  {
    if($PASSWORD == "23456")
       return true;
    else
       return false;
   }

  function accessGranted( $USERNAME )
  {
    
    
	<div class="container fullsize">
        <h2>Contact Us</h2>
	
        	<div>
            	<?php 
                $contacts = fopen("text/credentials.txt", "r");
                while(($line=fgets($contacts))!==false){
                    echo $line;
                    echo "<br/>";
                }
                fclose($contacts)
                ?>
            </div>
   }

  function wrongPassword()
  {
   print("<title>Access denied</title></head>
    <body style = \"font-family: arial;
      Font-size: 1em; color: red\">
    <strong> You entered an invalid password!<br/>Access has been denied.</strong>");
   }


  function accessDenied()
  {
    print("<title>Access denied</title></head>
    <body style = \"font-family: arial;
      Font-size: 1em; color: red\">
    <strong> You were denied any access to this file!<br/></strong>");

   }


  function fieldsBlank()
  {
    print("<title>Access denied</title></head>
    <body style = \"font-family: arial;
      Font-size: 1em; color: red\">
    <strong> Please fill in all form fields!<br/></strong>");

  }


?>
