<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">
<title> Cadastro de Notícias</title>
<link href="../../css/style.css" rel="stylesheet">
<link href="../../css/style-responsive.css" rel="stylesheet">


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
      <h3> Notícias </h3>
      <ul class="breadcrumb">
        <li> <a href="../../br.com.portal.principal/view/index.php">Index</a> </li>
        <li class="active"> Cadastro de Notícias </li>
      </ul>
    </div>
    <!-- page heading end--> 
    
    <!--body wrapper start-->
    <section class="wrapper"> 
      <!-- page start-->
      
      <div class="row">
      <div class="col-lg-12">
        <section class="panel">
          <header class="panel-heading"> Cadastro de Notícias </header>
          <div class="panel-body">
            <form role="form">
              <div class="col-md-4 form-group">
                <label for="iptAutor">Autor</label>
                <input type="number" class="form-control" id="iptAutor">
              </div>
              <div class="col-md-8 form-group">
                <label for="iptTitle">Título</label>
                <input type="text" class="form-control" id="iptTitle" maxlength="100" size="100">
              </div>
              <div class="col-md-4 form-group">
                <label for="iptTitleSEO">Título SEO</label>
                <input type="text" class="form-control" id="iptTitleSEO"  maxlength="50" size="50">
              </div>
              <div class="col-md-8 form-group">
                <label for="iptDescSEO">Descrição do SEO</label>
                <input type="text" class="form-control" id="iptDescSEO" maxlength="250" size="250">
              </div>
              <div class="col-md-12 form-group">
                <label for="iptNot">Notícia</label>
                <textarea class="form-control" id="iptNot" rows="10" cols="10"></textarea>
              </div>
              <div class="col-md-4 form-group">
                <label for="iptDataCad">Data</label>
                <input type="date" class="form-control" id="iptDataCad">
              </div>
              <div class="col-md-4 form-group">
                <label for="iptDataMod">Data Alteração</label>
                <input type="text" class="form-control" id="iptDataMod">
              </div>
              <div class="col-md-4 form-group">
                <label> Ativo </label>
                <input type="checkbox">
              </div>
               <div class="col-md-4 form-group">
              <button type="submit" class="btn btn-primary">Cadastrar</button>
            </div>
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
<script src="../../js/jquery-1.10.2.min.js"></script> 
<script src="../../js/jquery-ui-1.9.2.custom.min.js"></script> 
<script src="../../js/jquery-migrate-1.2.1.min.js"></script> 
<script src="../../js/bootstrap.min.js"></script> 
<script src="../../js/modernizr.min.js"></script> 
<script src="../../js/jquery.nicescroll.js"></script> 

<!--common scripts for all pages--> 
<script src="../../js/scripts.js"></script>
</body>
</html>
