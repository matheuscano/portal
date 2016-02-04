<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
<meta name="keywords" content="admin, dashboard, bootstrap, template, flat, modern, theme, responsive, fluid, retina, backend, html5, css, css3">
<meta name="description" content="">
<meta name="author" content="ThemeBucket">
<link rel="shortcut icon" href="#" type="image/png">
<title>Portal Inov@</title>

<!--icheck-->
<link href="../../js/iCheck/skins/minimal/minimal.css" rel="stylesheet">
<link href="../../js/iCheck/skins/square/square.css" rel="stylesheet">
<link href="../../js/iCheck/skins/square/red.css" rel="stylesheet">
<link href="../../js/iCheck/skins/square/blue.css" rel="stylesheet">

<!--dashboard calendar-->
<link href="../../css/clndr.css" rel="stylesheet">

<!--common-->
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
	include 'menu_vertical.php';
	?>
  
  <!-- left side end--> 
  
  <!-- main content start-->
  <div class="main-content" > 
    
    <!-- header section start-->
    
    <?php
	include 'menu_horizontal.php';
	?>
    
    <!-- header section end--> 
    
    <!--body wrapper start-->
    <div class="wrapper">
      <div class="row states-info">
        <div class="col-md-3">
          <div class="panel red-bg">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-4"> <i class="fa fa-money"></i> </div>
                <div class="col-xs-8">
                  <div class="col-xs-8"> <span class="state-title"> Dollar Profit Today </span>
                    <h4>$ 23,232</h4>
                  </div>
                  <span class="state-title"></span></div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel blue-bg">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-4"> <i class="fa fa-tag"></i> </div>
                <div class="col-xs-8"> <span class="state-title"> Copy Sold Today </span>
                  <h4>2,980</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel green-bg">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-4"> <i class="fa fa-gavel"></i> </div>
                <div class="col-xs-8"> <span class="state-title"> New Order </span>
                  <h4>5980</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-3">
          <div class="panel yellow-bg">
            <div class="panel-body">
              <div class="row">
                <div class="col-xs-4"> <i class="fa fa-eye"></i> </div>
                <div class="col-xs-8"> <span class="state-title"> Unique Visitors </span>
                  <h4>10,000</h4>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-8">
          <section class="panel">
            <header class="panel-heading"> Area Chart <span class="tools pull-right"> <a href="javascript:;" class="fa fa-chevron-down"></a> <a href="javascript:;" class="fa fa-times"></a> </span> </header>
            <div class="panel-body">
              <div id="visitors-chart">
                <div id="visitors-container" style="width: 100%;height:358px; text-align: center; margin:0 auto;"> </div>
              </div>
            </div>
          </section>
        </div>
        <div class="col-md-4">
          <div class="wdgt-profile">
            <div class="profile"> <img src="../../images/gallery/wdgt-img.jpg" alt=""/>
              <div class="profile-social"> <a href="#" ><i class="fa fa-pinterest"></i></a> <a href="#" ><i class="fa fa-twitter"></i></a> <a href="#" ><i class="fa fa-facebook"></i></a> </div>
              <ul class="profile-tab">
                <li> <a href="#"> <i class="fa fa-camera"></i> Photo </a> </li>
                <li class="active"> <a href="#"> <i class="fa fa-user"></i> Profile </a> </li>
                <li> <a href="#"> <i class="fa fa-music"></i> Music </a> </li>
                <li> <a href="#"> <i class="fa fa-comments"></i> Comments </a> </li>
              </ul>
            </div>
            <div class="profile-info">
              <h5>Margarita Rose</h5>
              <span>Creative Designer</span> </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-4">
          <div class="panel widget-info-one">
            <div class="avatar-img"> <img src="../../images/gallery/image3.jpg" alt=""/> </div>
            <div class="inner">
              <div class="avatar"><img alt="" src="../../images/photos/userprofile.png"></div>
              <h5>Margarita Rose</h5>
              <span class="subtitle"> Praesent magna nunc, tincidunt pretium. </span> </div>
            <div class="panel-footer">
              <ul class="post-view">
                <li> <a href="#"> <i class="fa fa-eye"></i> </a> 109 </li>
                <li class="active"> <a href="#"> <i class="fa fa-comment"></i> </a> 233 </li>
                <li> <a href="#"> <i class="fa fa-heart"></i> </a> 34 </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-body extra-pad">
                  <h4 class="pros-title">prospective <span>leads</span></h4>
                  <div class="row">
                    <div class="col-sm-4 col-xs-4">
                      <div id="p-lead-1"></div>
                      <p class="p-chart-title">Laptop</p>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                      <div id="p-lead-2"></div>
                      <p class="p-chart-title">iPhone</p>
                    </div>
                    <div class="col-sm-4 col-xs-4">
                      <div id="p-lead-3"></div>
                      <p class="p-chart-title">iPad</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <div class="panel">
                <div class="panel-body extra-pad">
                  <div class="col-sm-6 col-xs-6">
                    <div class="v-title">Visits</div>
                    <div class="v-value">10,090</div>
                    <div id="visit-1"></div>
                    <div class="v-info">Pages/Visit</div>
                  </div>
                  <div class="col-sm-6 col-xs-6">
                    <div class="v-title">Unique Visitors</div>
                    <div class="v-value">8,173</div>
                    <div id="visit-2"></div>
                    <div class="v-info">Avg. Visit Duration</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="row">
            <div class="col-md-12">
              <ul class="iconic-list">
                <li> <a href="#"> <i class="fa fa-heart"></i> </a> </li>
                <li class="active"> <a href="#"> <i class="fa fa-camera-retro"></i> </a> </li>
                <li> <a href="#"> <i class="fa fa-calendar"></i> </a> </li>
                <li> <a class="last" href="#"> <i class="fa fa-crosshairs"></i> </a> </li>
              </ul>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="panel">
            <div class="panel-body">
              <div class="dir-info">
                <div class="row">
                  <div class="col-xs-3">
                    <div class="avatar"> <img src="../../images/photos/user2.png" alt=""/> </div>
                  </div>
                  <div class="col-xs-6">
                    <h5>Wild Awake</h5>
                    <span> <a href="#" class="small"> katy Perry</a> </span> </div>
                  <div class="col-xs-3"> <a class="dir-like" href="#"> <span class="small">434</span> <i class="fa fa-heart"></i> </a> </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <div class="avatar"> <img src="../../images/photos/user1.png" alt=""/> </div>
                  </div>
                  <div class="col-xs-6">
                    <h5>Bulet Proof</h5>
                    <span> <a href="#" class="small"> Bruno Mars</a> </span> </div>
                  <div class="col-xs-3"> <a class="dir-like" href="#"> <span class="small">441</span> <i class="fa fa-heart"></i> </a> </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <div class="avatar"> <img src="../../images/photos/user3.png" alt=""/> </div>
                  </div>
                  <div class="col-xs-6">
                    <h5>Bit it</h5>
                    <span> <a href="#" class="small"> Jackson</a> </span> </div>
                  <div class="col-xs-3"> <a class="dir-like" href="#"> <span class="small">124</span> <i class="fa fa-heart"></i> </a> </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <div class="avatar"> <img src="../../images/photos/user4.png" alt=""/> </div>
                  </div>
                  <div class="col-xs-6">
                    <h5>Its my life</h5>
                    <span> <a href="#" class="small"> Bon jovi</a> </span> </div>
                  <div class="col-xs-3"> <a class="dir-like" href="#"> <span class="small">334</span> <i class="fa fa-heart"></i> </a> </div>
                </div>
                <div class="row">
                  <div class="col-xs-3">
                    <div class="avatar"> <img src="../../images/photos/user1.png" alt=""/> </div>
                  </div>
                  <div class="col-xs-6">
                    <h5>Bulet Proof</h5>
                    <span> <a href="#" class="small"> Bruno Mars</a> </span> </div>
                  <div class="col-xs-3"> <a class="dir-like" href="#"> <span class="small">44</span> <i class="fa fa-heart"></i> </a> </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-6">
          <div class="panel">
            <header class="panel-heading"> Chat </header>
            <div class="panel-body">
              <ul class="chats cool-chat">
                <li class="in"> <img src="../../images/photos/user1.png" alt="" class="avatar">
                  <div class="message"> <span class="arrow"></span> <a class="name" href="#">Jone Doe</a> <span class="datetime">at Mar 12, 2014 6:12</span> <span class="body"> Lorem ipsum dolor sit amet, consectetuer adipiscing elit </span> </div>
                </li>
                <li class="out"> <img src="../../images/photos/user2.png" alt="" class="avatar">
                  <div class="message"> <span class="arrow"></span> <a class="name" href="#">Margarita Rose</a> <span class="datetime">at Mar 12, 2014 6:13</span> <span class="body"> sed diam nonummy nibh euismod tincidunt ut </span> </div>
                </li>
                <li class="in"> <img src="../../images/photos/user1.png" alt="" class="avatar">
                  <div class="message"> <span class="arrow"></span> <a class="name" href="#">Jone Doe</a> <span class="datetime">at Mar 12, 2014 6:12</span> <span class="body"> aoreet dolore magna aliquam erat volutpat. </span> </div>
                </li>
                <li class="out"> <img src="../../images/photos/user2.png" alt="" class="avatar">
                  <div class="message"> <span class="arrow"></span> <a class="name" href="#">Margarita Rose</a> <span class="datetime">at Mar 12, 2014 6:13</span> <span class="body"> sed diam nonummy nibh euismod tincidunt ut </span> </div>
                </li>
                <li class="in"> <img src="../../images/photos/user1.png" alt="" class="avatar">
                  <div class="message"> <span class="arrow"></span> <a class="name" href="#">Jone Doe</a> <span class="datetime">at Mar 12, 2014 6:12</span> <span class="body"> aoreet dolore magna aliquam erat volutpat. </span> </div>
                </li>
                <li class="out"> <img src="../../images/photos/user2.png" alt="" class="avatar">
                  <div class="message"> <span class="arrow"></span> <a class="name" href="#">Margarita Rose</a> <span class="datetime">at Mar 12, 2014 6:13</span> <span class="body"> sed diam nonummy nibh </span> </div>
                </li>
              </ul>
              <div class="chat-form ">
                <form role="form" class="form-inline">
                  <div class="form-group">
                    <input type="text" style="width: 100%" placeholder="Type a message here..." class="form-control">
                  </div>
                  <button class="btn btn-primary" type="submit">Send</button>
                </form>
              </div>
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <section class="panel post-wrap pro-box">
            <aside class="post-highlight purple v-align">
              <div class="panel-body">
                <h2>AdminEx in Excelent templates <a href="javascript:;"> http://themebucket.net/</a> 1 days ago  by John Doe</h2>
              </div>
            </aside>
            <aside>
              <div class="post-info"> <span class="arrow-pro left"></span>
                <div class="panel-body">
                  <div class="text-center twite"> <i class="fa fa-twitter"></i>
                    <h1>Twitter Feed</h1>
                  </div>
                </div>
              </div>
            </aside>
          </section>
          <div class="panel">
            <div class="panel-body">
              <div class="media usr-info"> <a href="#" class="pull-left"> <img class="thumb" src="../../images/photos/user2.png" alt=""/> </a>
                <div class="media-body">
                  <h4 class="media-heading">Mila Watson</h4>
                  <span>Senior UI Designer</span>
                  <p>I use to design websites and applications for the web.</p>
                </div>
              </div>
            </div>
            <div class="panel-footer custom-trq-footer">
              <ul class="user-states">
                <li> <i class="fa fa-heart"></i> 127 </li>
                <li> <i class="fa fa-eye"></i> 853 </li>
                <li> <i class="fa fa-user"></i> 311 </li>
              </ul>
            </div>
          </div>
          <div class="panel blue-box twt-info">
            <div class="panel-body">
              <h3>19 Februay 2014</h3>
              <p>AdminEx is new model of admin
                dashboard <a href="#">http://t.co/3laCVziTw4</a> 4 days ago by John Doe</p>
            </div>
          </div>
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

<!--easy pie chart--> 
<script src="../../js/easypiechart/jquery.easypiechart.js"></script> 
<script src="../../js/easypiechart/easypiechart-init.js"></script> 

<!--Sparkline Chart--> 
<script src="../../js/sparkline/jquery.sparkline.js"></script> 
<script src="../../js/sparkline/sparkline-init.js"></script> 

<!--icheck --> 
<script src="../../js/iCheck/jquery.icheck.js"></script> 
<script src="../../js/icheck-init.js"></script> 

<!-- jQuery Flot Chart--> 
<script src="../../js/flot-chart/jquery.flot.js"></script> 
<script src="../../js/flot-chart/jquery.flot.tooltip.js"></script> 
<script src="../../js/flot-chart/jquery.flot.resize.js"></script> 
<script src="../../js/flot-chart/jquery.flot.pie.resize.js"></script> 
<script src="../../js/flot-chart/jquery.flot.selection.js"></script> 
<script src="../../js/flot-chart/jquery.flot.stack.js"></script> 
<script src="../../js/flot-chart/jquery.flot.time.js"></script> 
<script src="../../js/main-chart.js"></script> 

<!--common scripts for all pages--> 
<script src="../../js/scripts.js"></script>
</body>
</html>
