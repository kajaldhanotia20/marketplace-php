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
    print("<title>Welcome!</title></head>
     <body style = \"font-family: arial;
       Font-size: 1em; color: blue\">
     <strong> Permission granted to $USERNAME! <br/></strong></body>");
   
    echo "<h2>The following users are using the website as of now:</h2>";  
    echo "<strong>";
   $data = [
    ["id" => 1, "name" => 'Mary Smith'],
    ["id" => 2, "name" => 'John Wang'],
    ["id" => 3, "name" => 'Alex Bington'],
    ["id" => 4, "name" => 'Kenzo Suzuki'],
    ["id" => 5, "name" => 'Stephen Curry'],
    ];
     foreach ($data as ["id" => $id, "name" => $name]) {
       echo nl2br("id: $id, name: $name\n");
        }
    echo "</strong>";    
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