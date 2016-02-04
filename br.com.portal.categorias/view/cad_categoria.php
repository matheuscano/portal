<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">
<title> Cadastro de Categoria</title>
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/style-responsive.css" rel="stylesheet">
<link href="../../includes/menu_horizontal.php" rel="stylesheet">

<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="js/html5shiv.js"></script>
  <script src="js/respond.min.js"></script>
  <![endif]-->
</head>

<body class="sticky-header">
<section> 
  <!-- left side start--> 
  
  <!-- left side end-->
  
  <?php
	include '../../includes/menu_vertical.php';
	?>
  
  <!-- main content start-->
  <div class="main-content" > 
    
    <!-- header section start-->
    
    <?php
	include '../../includes/menu_horizontal.php';
	?>
    
    <!-- header section end--> 
    
    <!-- page heading start-->
    <div class="page-heading">
      <h3> Categoria </h3>
      <ul class="breadcrumb">
        <li> <a href="../../br.com.portal.principal/view/index.php">Index</a> </li>
        <li class="active"> Cadastro de Categoria </li>
      </ul>
    </div>
    <!-- page heading end--> 
    
    <!--body wrapper start-->
    <section class="wrapper"> 
      <!-- page start-->
      
      <div class="row">
      <div class="col-lg-6">
        <section class="panel">
          <header class="panel-heading"> Cadastro de Categoria </header>
          <div class="panel-body">
            <form role="form">
              <div class="form-group">
                <label for="iptNome">Nome</label>
                <input type="text" class="form-control" id="iptNome" placeholder="Digite seu nome" maxlength="50" size="50">
              </div>
              <div class="form-group">
                <label for="iptTitle">Título</label>
                <input type="text" class="form-control" id="iptTitle" placeholder="Digite o título" maxlength="60" size="60">
              </div>
              <div class="form-group">
                <label for="iptDesc">Descrição</label>
                <textarea class="form-control" id="iptDesc" placeholder="Digite a descrição" rows="2" cols="2"></textarea>
              </div>
              <div class="checkbox">
                <label>
                  <input type="checkbox">
                  Ativa </label>
              </div>
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </form>
          </div>
        </section>
      </div>
      
      <!-- page end--> 
    </section>

  
  <!--body wrapper end--> 
  
</section>

<!--footer section start-->

<?php
	include '../../includes/footer.php';
	?>

<!--footer section end-->

</div>
<!-- main content end-->
</section>

<!-- Placed js at the end of the document so the pages load faster --> 
<script src="js/jquery-1.10.2.min.js"></script> 
<script src="js/jquery-ui-1.9.2.custom.min.js"></script> 
<script src="js/jquery-migrate-1.2.1.min.js"></script> 
<script src="js/bootstrap.min.js"></script> 
<script src="js/modernizr.min.js"></script> 
<script src="js/jquery.nicescroll.js"></script> 

<!--common scripts for all pages--> 
<script src="js/scripts.js"></script>
</body>
</html>
