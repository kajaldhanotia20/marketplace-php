<?php

session_start(); 

// in ths short example code I set an empty array to session['recent'], elsewhere there will be +3 items always when you run the script
$_SESSION['recent'] = array();

// insert three items, code copied from your question    
$_SESSION['recent'][] = array("title"=>'title', "link"=>'REQUEST_URI', "image"=>'image');
$_SESSION['recent'][] = array("title"=>'title', "link"=>'REQUEST_URI', "image"=>'image');
$_SESSION['recent'][] = array("title"=>'title', "link"=>'REQUEST_URI', "image"=>'image');

// foreach loop, the same as above
foreach ($_SESSION['recent'] as $item) {
    echo 'product name: '  . $item['title'] . '<br>';
    echo 'product ID: '    . $item['link'] . '<br>';
    echo 'product image: ' . $item['image'] . '<br><br>'; // double <br> to make a gap between loops
}

/*
returns:

product name: title
product ID: REQUEST_URI
product image: image

product name: title
product ID: REQUEST_URI
product image: image

product name: title
product ID: REQUEST_URI
product image: image

*/ 
?>