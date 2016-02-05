<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">
<title>Lista de Notícias</title>

<!--data table-->
<link rel="stylesheet" href="../../js/data-tables/DT_bootstrap.css" />
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
  
  <?php
	include '../../includes/menu_vertical.php';
	?>
  
  <!-- left side end--> 
  
  <!-- main content start-->
  <div class="main-content" > 
    
    <!-- header section start-->
    
    <?php
	include '../../includes/menu_horizontal.php';
	?>
    
    <!-- header section end--> 
    
    <!-- page heading start-->
    <div class="page-heading">
      <h3> Lista de Notícias </h3>
      <ul class="breadcrumb">
        <li> <a href="../../br.com.portal.principal/view/index.php">Index</a> </li>
        <li> <a href="#">Lista de Notícias</a> </li>
      </ul>
    </div>
    <!-- page heading end--> 
    
    <!--body wrapper start-->
    <div class="wrapper">
      <div class="row">
        <div class="col-sm-12">
          <section class="panel">
            <header class="panel-heading"> Notícias <span class="tools pull-right"></span> </header>
            <div class="panel-body">
              <div class="adv-table editable-table ">
                <div class="clearfix">
                  <div class="btn-group">
                    <button id="editable-sample_new" class="btn btn-primary"> Cadastrar uma nova <i class="fa fa-plus"></i> </button>
                  </div>
                  <div class="btn-group pull-right">
                    <button class="btn btn-default dropdown-toggle" data-toggle="dropdown">Opções <i class="fa fa-angle-down"></i> </button>
                    <ul class="dropdown-menu pull-right">
                      <li><a href="#">Imprimir</a></li>
                      <li><a href="#">Salvar como PDF</a></li>
                      <li><a href="#">Exportar para Excel</a></li>
                    </ul>
                  </div>
                </div>
                <div class="space15"></div>
                <table class="table table-striped table-hover table-bordered" id="editable-sample">
                  <thead>
                    <tr>
                      <th>Código</th>
                      <th>Autor</th>
                      <th>Título</th>
                      <th>Descrição</th>
                      <th>Ativo</th>
                      <th>Alterar</th>
                      <th>Excluir</th>
                    </tr>
                  </thead>
                  <tbody>
                    <tr class="">
                      <td>1</td>
                      <td>Matheus</td>
                      <td>Primeira Categoria</td>
                      <td class="center">Categoria Excelente</td>
                      <td><i class="fa fa-check"></i></td>
                      <td><a class="edit" href="javascript:;"><i class="fa fa-refresh"></a></td>
                      <td><a class="delete" href="javascript:;"><i class="fa fa-trash"></a></td>
                    </tr>
                    <tr class="">
                      <td>2</td>
                      <td>Cano</td>
                      <td>Segunda Categoria</td>
                      <td class="center">Categoria TOP</td>
                      <td><i class="fa fa-close"></i></td>
                      <td><a class="edit" href="javascript:;"><i class="fa fa-refresh"></a></td>
                      <td><a class="delete" href="javascript:;"><i class="fa fa-trash"></a></td>
                    </tr>
                  </tbody>
                </table>
              </div>
            </div>
          </section>
        </div>
      </div>
    </div>
    <!--body wrapper end--> 
    
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

<!--data table--> 
<script type="text/javascript" src="../../js/data-tables/jquery.dataTables.js"></script> 
<script type="text/javascript" src="../../js/data-tables/DT_bootstrap.js"></script> 

<!--common scripts for all pages--> 
<script src="../../js/scripts.js"></script> 

<!--script for editable table--> 
<script src="../../js/editable-table.js"></script> 

<!-- END JAVASCRIPTS --> 
<script>
    jQuery(document).ready(function() {
        EditableTable.init();
    });
</script>
</body>
</html>
