<!doctype html>
<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" lang="en"> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" lang="en"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang="en"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>Password Decoder</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" href="style.css">

    
</head>

<body>


<h1>


Your password for <?php echo htmlspecialchars($_POST['service']); ?> is :<br>
<br>
<!-- <?php $res = system('./pwd '.$_POST['password'].' '.$_POST['service']) ?> -->

<html>
  <input type="text" value=<?php echo system('./pwd '.$_POST['password'].' '.$_POST['service'])?> id="myInput"/>
    <button onclick="Hello()">Copy Text</button>


<script>
  function Hello() {
  var copyText = document.getElementById('myInput')
  copyText.select();
  document.execCommand('copy')
}
</script>

</h1>


</body>
 </html>