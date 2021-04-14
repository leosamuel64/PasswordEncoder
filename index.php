
<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Password Encoder</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">

    
</head>
<body>


<?php
if (isset($_GET['service'])) 
{
    $res=htmlspecialchars($_GET["service"]);
}
else
{
    $res="";
}
?>

<h1>
<form action="action.php" method="post">
 <p>Service : <input type="text" name="service" value=<?php echo $res;?> /></p>
 <p>Password : <input type="password" name="password" /></p>
 <p><input type="submit" value="Encode"></p>
</form>
</h1>


</body>
 </html>
