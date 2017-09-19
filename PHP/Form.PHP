<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="../css/main.css" , type="text/css">
    <meta charset=utf-8>
    <title>bedankt!</title>
</head>
<!--PHP-->
<?php
$firstname = $_REQUEST['Voornaam'];
$lastname = $_REQUEST['Achternaam'];
$Reactie = $_REQUEST['Reactie'];
$Text = "$Reactie";
$naam = "$firstname $lastname";
$CommentSave = fopen("../Reacties/$naam.txt", "w");
fwrite($CommentSave, $Text);
?>

<body>
<h1>Harstikke bedankt voor uw reactie!</h1>
<section>
    <a href="../index.html">Klik hier om terug te gaan naar onze webpagina</a></section>
</body>
</html>