<!DOCTYPE html>
<html lang="en" id="home-page">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- <link rel="shortcut icon" href="../../docs-assets/ico/favicon.png"> -->

  <title>Guillaume Canva</title>

  <link href="css/bootstrap.css" rel="stylesheet">
  <link href="css/custom/main.css" rel="stylesheet">
  <link href="css/custom/responsive.css" rel="stylesheet">
  <link href="//netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css" rel="stylesheet">

  <!-- Just for debugging purposes. Don't actually copy this line! -->
  <!--[if lt IE 9]><script src="../../docs-assets/js/ie8-responsive-file-warning.js"></script><![endif]-->
  <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
  <script src="https://oss.maxcdn.com/libs/respond.js/1.3.0/respond.min.js"></script>
  <![endif]-->

</head>
<body>
  <div id="top"></div>
  <?php require_once('includes/nav.php'); ?>
  <div class="section" id="main">
    <section class="section jumbotron" id="introduce">
      <div class="container">
        <h1>Hello, world !</h1>
        <p>Je suis </p>
        <h1 id="me">Guillaume Canva</h1>
        <p class="lead">l'homme qui parle au machine.</p>
        <blockquote>
          <p class="lead">Web <i class="fa fa-plus"><span class="sr-only">And<span/></i> Photography</p>
          <small><cite title="Source Title">Passionné de Web et de Photographie.</cite></small>
        </blockquote>
        <p><a class="btn primary-color contrast btn-lg" role="button" href="#work">My work</a></p>
      </div>
    </section>
    <section class="section" id="work">
      <div class="container">
        <div class="col-lg-4 col-sm-6 col-xs-12 primary-color">A</div>
        <div class="col-lg-4 col-sm-6 col-xs-12">B</div>
        <div class="col-lg-4 col-sm-6 col-xs-12 primary-color">C</div>
      </div>
    </section>
    <section class="section" id="contact">
      <div class="col-lg-8 col-lg-offset-2 col-sm-10 col-sm-offset-1 col-xs-12">
       Contact Me
     </div>
   </section>
 </div>

 <script src="https://code.jquery.com/jquery-1.10.2.min.js"></script>
 <script src="js/bootstrap.min.js"></script>
 <script src="js/custom/main.js"></script>
</body>
</html>
