<?php session_start();
if(empty($_SESSION['id'])):
    header('Location:login.php');
endif;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<?php
include "connection.php";
session_destroy();

echo '<meta http-equiv="refresh" content="2;url=login.php">';
echo'<progress max=100><strong>Progress: 60% done. </strong></progress><br>';
echo'<span class="itext">Logging out please wait!...</span>';

?>

</body>
</html>