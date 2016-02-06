<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">
<title>Registro</title>
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/style-responsive.css" rel="stylesheet">
<link rel="stylesheet" type="text/css" href="../../js/ios-switch/switchery.css" />
<link href="../../js/iCheck/skins/minimal/red.css" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
    <script src="js/respond.min.js"></script>
    <![endif]-->
</head>

<body class="login-body">
<div class="container">
  <form class="form-signin" action="index.html">
    <div class="form-signin-heading text-center">
      <h1 class="sign-title">Registro</h1>
      <img src="images/login-logo.png" alt=""/> </div>
    <div class="login-wrap">
      <p>Digite os seus dados pessoais abaixo</p>
      <input type="text" autofocus placeholder="Nome" class="form-control">
      <div class="radios">
        <label for="radio-01" class="label_radio col-lg-6 col-sm-6">
          <input type="radio" checked="" value="1" id="radio-01" name="sample-radio">
          Adminstrador </label>
        <label for="radio-02" class="label_radio col-lg-6 col-sm-6">
          <input type="radio" value="1" id="radio-02" name="sample-radio">
          Usúario </label>
      </div>
      <input type="text" autofocus placeholder="Email" class="form-control">
      <input type="password" placeholder="Senha" class="form-control">
      <input type="password" placeholder="Confirme Senha" class="form-control">
       <div class="slide-toggle">
 	  <label for="radio-02" class="label_radio col-lg-3 col-sm-3">Atívo: 
      </div><input type="checkbox" class="js-switch-red" checked/></label>
      <!-- <label class="checkbox">
                <input type="checkbox" value="agree this condition"> I agree to the Terms of Service and Privacy Policy
            </label>-->
      <button type="submit" class="btn btn-lg btn-login btn-block"> <i class="fa fa-check"></i> </button>
      <div class="registration"> Já tem conta? Faça o <a href="login.php" class=""> Login </a> </div>
    </div>
  </form>
</div>

<!-- Placed js at the end of the document so the pages load faster --> 

<!-- Placed js at the end of the document so the pages load faster --> 
<script src="../../js/jquery-1.10.2.min.js"></script> 
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/modernizr.min.js"></script>
<script src="../../js/ios-switch/switchery.js" ></script>
<script src="../../js/ios-switch/ios-init.js" ></script>
</body>
</html>
