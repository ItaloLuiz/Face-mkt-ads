<!DOCTYPE html>
<html lang="pt-bt">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">  
    <title>Admin</title>    
    <link href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.css" />
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
    
    #custom-bootstrap-menu.navbar-default .navbar-brand {
    color: rgba(119, 119, 119, 1);
}
#custom-bootstrap-menu.navbar-default {
    font-size: 16px;
    background-color: rgba(248, 248, 248, 1);
    border-width: 0px;
    border-radius: 0px;
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a {
    color: rgba(119, 119, 119, 1);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>li>a:focus {
    color: rgba(51, 51, 51, 1);
    background-color: rgba(248, 248, 248, 0);
}
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:hover,
#custom-bootstrap-menu.navbar-default .navbar-nav>.active>a:focus {
    color: rgba(85, 85, 85, 1);
    background-color: rgba(231, 231, 231, 1);
}
#custom-bootstrap-menu.navbar-default .navbar-toggle {
    border-color: #ddd;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus {
    background-color: #ddd;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle .icon-bar {
    background-color: #888;
}
#custom-bootstrap-menu.navbar-default .navbar-toggle:hover .icon-bar,
#custom-bootstrap-menu.navbar-default .navbar-toggle:focus .icon-bar {
    background-color: #888;
}

.btn-sair{font-size:16px;font-weight:bold;position:relative; display:table;}

.home{position:relative;margin-top:60px;}

.panel-widget-topo{background-color:#3498db}
.panel-body h3{text-transform:uppercase;color:#2c3e50; padding-bottom:10px;border-bottom:solid 1px #2980b9;}
.panel-body h3 small{color:#fff;}
.panel-body h2{font-size:18px;text-transform:uppercase;color:#2c3e50; padding-bottom:5px; font-weight:bold;}
.panel-body h2 small{color:#fff; font-size:28px;}
.panel-body h4{font-size:18px;text-transform:uppercase;color:#2c3e50; padding-bottom:5px;padding-top:15px; font-weight:bold;}
.panel-body h4 small{color:#fff; font-size:28px;}4
    </style>

  </head>
  <body>

  <div id="custom-bootstrap-menu" class="navbar navbar-default " role="navigation">
    <div class="container-fluid">
        <div class="navbar-header"><a class="navbar-brand" href="index.php">Painel ADS</a>
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-menubuilder"><span class="sr-only">Toggle navigation</span><span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
            </button>
        </div>
        <div class="collapse navbar-collapse navbar-menubuilder">
            <ul class="nav navbar-nav navbar-left">
                <li><a href="index.php">Dashboard</a></li>
                <li><a href="config.php">Configurações</a></li>
            </ul>
            <ul class="nav navbar-nav navbar-right">
                <li><a>Logado como: <b>Fulano</b></a></li>
                <li><a class="btn-sair" href="?sair=sair">Sair</a></li>
            </ul>
        </div>
    </div>
</div>

<div class="container-fluid home">
 <div class="row">

<?php for($i=0;$i<8;$i++){?>
  <div class="col-md-3">
   <div class="panel panel-widget-topo">   
    <div class="panel-body">
      <h3>Campanha : <small>Nome da campanha</small></h3>
      <h2>Total Gasto : <small>R$ 2.600,00</small></h2>
      <h4>Limite Diário : <small>R$ 100,00</small></h4>
    </div>   
    <div class="panel-footer">
     <a class="btn btn-primary btn-xs" href="#">Mais Informações</a>
    </div>
   </div>  
  </div>
<?php } ?>
 
 
 
 </div>
</div>



    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>   
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
  </body>
</html>

