<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<link rel="shortcut icon" href="favicon.ico"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/flags.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<title>BETASPEAK :: DARMOWY :: BEZPIECZNY :: STABILNY :: POLSKI SERWER TEAMSPEAK3!</title>
<link rel="stylesheet" href="css/font-awesome/css/font-awesome.min.css">
</head>

<body>
<div class="preloader">
<div class="container-fluid">
<div class="spinner">
<span class="ball-1"></span>
<span class="ball-2"></span>
<span class="ball-3"></span>
<span class="ball-4"></span>
</div>
</div>
</div>
<header>
<div class="container">
<div class="logo">
<a href="index.php">
<img src="img/logo.png" alt="">
</a>
</div>
<div class="nav-menu-icon">
<a href="#"><i></i></a>
</div>
<nav>
<ul>
<li><a href="index.php">Strona Główna</a>
</li>
<li><a href="panel.php">Panel Użytkownika</a>
</li>
<li class="active"><a href="serwer.php">Podgląd Serwera</a></li>
<li><a href="regulamin.php">Regulamin</a></li>
<li><a href="tabela-kar.php">Tabela Kar</a>
</li>
<li><a href="bany.php">LISTA BANÓW</a>
</li>
<li><a href="ts3server://betaspeak.pl"><font color="orange"><b>POŁĄCZ Z SERWEREM</b></font></a></li>
</ul>
</nav>
</div>
</header>
</div>
<div style="margin-top:100px;">
<? include("panel/strona/viewer.php"); ?>
</div>
</div>
</div>

<footer class="bg-dark">
<div class="top-footer-info">
<div class="container">
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="top-f-block">
<img src="img/support.png" alt="">
<a href="#">BETASPEAK.PL</a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="top-f-block text-center">
<img src="img/mail.png" alt="">
<a href="mailto:betaspeak@europe.com">betaspeak@europe.com</a>
</div>
</div>
<div class="col-md-3 col-sm-6 col-xs-12" style="float:right;"><div class="top-f-block text-center"><a href="ts3server://betaspeak.pl">Dołącz do nas już teraz!</a></div></div>
</div>
</div>
</div>
<div class="container">
<div class="row">
<div class="col-md-6 col-md-offset-3">
<div class="footer-title">
<img src="img/logo.png" alt="">
</div>
</div>
</div>
<div class="row">
<div class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-block">
<h6>nawigacja</h6>
<ul>
<li><a href="panel.php">Panel Użytkownika</a></li>
<li><a href="serwer.php">Podgląd Serwera</a></li>
<li><a href="regulamin.php">Regulamin</a></li>
<li><a href="tabela-kar.php">Tabela Kar</a></li>
<li><a href="bany.php">LISTA BANÓW</a></li>
</ul>
</div>
</div>
<div style="float:right;" class="col-md-3 col-sm-6 col-xs-12">
<div class="footer-block">
<h6>popularne tagi</h6>
<a href="#" class="tags-b">TeamSpeak3</a>
<a href="#" class="tags-b">TS3 Serwer</a>
<a href="#" class="tags-b">BETASPEAK</a>
<a href="#" class="tags-b">BETASPEAK.PL</a>
<a href="#" class="tags-b">BETASPEAK TS3</a>
<a href="#" class="tags-b">STRONA BETASPEAK</a>
</div>
</div>
</div>
</div>
<div class="copyright bg-dark-2">
<div class="container">
<div class="row">
<div class="col-md-12">
<ul>
<li><a href="#">Strona Główna</a></li>
<li><a href="panel.php">Panel Użytkownika</a></li>
<li><a href="serwer.php">Podgląd Serwera</a></li>
<li><a href="regulamin.php">Regulamin</a></li>
<li><a href="tabela-kar.php">Tabela Kar</a></li>
<li><a href="bany.php">LISTA BANÓW</a></li>
</ul>
<span>© 2017 All rights reserved. MATERIAL & BETASPEAK</span>
</div>
</div>
</div>
</div>
</footer>
<script src="js/jquery-2.1.4.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/idangerous.swiper.min.js"></script>
<script src="js/jquery.countTo.js"></script>
<script src="js/jquery.zaccordion.min.js"></script>
<script src="js/jquery.circliful.min.js"></script>
<script src="js/all.js"></script>
<script>
function addClass($xd)
{
	$($xd).toggleClass( "active" );
		
}
</script>
											<script type="text/javascript">
        function openconfirmation() {
            $.get("betagiver/confirmation.php");
            return false;
        }
    </script>
</body>

</html>
