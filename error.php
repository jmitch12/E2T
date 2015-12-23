<?php

if (isset($_GET['message_type'])) {
    $message_type = $_GET['message_type'];

    switch( $message_type ) {
    case "login_error":
        echo "<!DOCTYPE HTML>
         <html>
            <head>
               <meta charset='utf-8'>
               <title>Login Error</title>
               <link rel='stylesheet' href='css/error.css'>
            </head>
            <body>
               <h1>Login Error</h1>
               <p>Invalid username or password. Click
                  <a href='./login.php?action=login'>here</a> to go back to the login
                  page.</p>
            </body>
         </html>";

        break;

    case "registration_error":
        echo "<!DOCTYPE HTML>
         <html>
            <head>
               <meta charset='utf-8'>
               <title>Registration Error</title>
               <link rel='stylesheet' href='css/error.css'>
            </head>
            <body>
               <h1>Registration Error</h1>
               <p>It appears as though the username with which you’re trying to
                  register already exists. Click
                  <a href='./register.php?action=register'>here</a> to go back and try
                  again.</p>
            </body>
         </html>";

        break;
    }
} else {
    header("Location: ./");
}