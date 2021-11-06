<?php

include_once __DIR__.'/PHP/justPHP.php';
include_once __DIR__.'/PHP/data.php';

if(!empty($_POST)) {
   // debug($_POST);
    $data = load($data);
    if($errors = validate($data)) {
        debug($errors);
    } else {
        echo "OK";
    }
}

?>


<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://fonts.googleapis.com/css2?family=Zen+Kaku+Gothic+Antique:wght@300&display=swap" rel="stylesheet">
    <script src="JS/jQuery.js" type="text/javascript"></script>
    <script src="JS/buttonAnimation.js" type="text/javascript"></script>
    <link rel="stylesheet" type="text/css" href="CSS/style.css">
    <title>The form</title>
</head>
<body>
    <div>
        <form name="test" method="post" action="PHP/justPHP.php">
            <div >
                <label for="fieldEmail">Name</label>
                <input id="fieldEmail" name="email" class="field">
            </div>
            <div >
                <label for="fieldPassword">Email</label>
                <input id="fieldPassword" name="password" class="field">
            </div>
            <div >
                <label for="fieldPassword">Address</label>
                <input id="fieldPassword" name="password" class="field">
            </div>
            <div >
                <label for="fieldPassword">Phone</label>
                <input id="fieldPassword" name="password" class="field">
            </div>


            <button type="submite" class="submitButton">Send</button>
        </form>
    </div>
</body>
</html>