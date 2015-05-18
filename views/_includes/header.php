<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Genrec - <?php echo $this->title; ?></title>

  <!-- Bootstrap -->
  <link href="<?php echo HOME_URI; ?>/views/_bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="<?php echo HOME_URI; ?>/views/_css/global.css" rel="stylesheet">

  <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
  <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
  <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
  <![endif]-->
  <script>
    var HOME_URI = "<?php echo HOME_URI;?>";
  </script>
</head>
<body>
  <nav class="navbar navbar-inverse navbar-fixed-top">
    <div class="container">
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="<?php echo HOME_URI; ?>">Genrec</a>
      </div>
      <div id="navbar" class="collapse navbar-collapse" style="float:right;">
      <?php if ($this->usuario) { ?>
        <ul class="nav navbar-nav container-fluid">
          <li><div class="navbar-nome">Olá, <?php echo $this->usuario->getNome(); ?>!</div></li>
          <li><img src="<?php echo HOME_URI;?>/views/_images/user1.png" class="img-thumbnail" height="45" width="45" style="margin:2px"></li>
          <li><a href="<?php echo HOME_URI;?>/login/sair">Sair</a></li>
        </ul>
      <?php } ?>
      </div><!--/.nav-collapse -->
    </div>
  </nav>
