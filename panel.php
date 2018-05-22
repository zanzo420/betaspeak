<!DOCTYPE html>
<html>


<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
<meta charset="utf-8">
<meta name="apple-mobile-web-app-capable" content="yes"/>
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0, user-scalable=no">
<meta name="format-detection" content="telephone=no"/>
<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
<link rel="shortcut icon" href="favicon.ico"/>
<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="css/flags.min.css" rel="stylesheet" type="text/css"/>
<link href="css/style.css" rel="stylesheet" type="text/css"/>
<link rel="shortcut icon" href="/favicon.ico" type="image/x-icon">
<link rel="icon" href="/favicon.ico" type="image/x-icon">
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
<li class="active"><a href="panel.php">Panel Użytkownika</a>
</li>
<li><a href="serwer.php">Podgląd Serwera</a></li>
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
<?
if($_SERVER['REQUEST_URI'] == "/panel.php?betagiver"){?>
<div class="main-section canvas-graph">
<div class="container">
<div class="row">
<div style="float:left">
<a href="panel.php">
<h4><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> WRÓĆ DO</h4><br>
<h5 style="margin-top:-25px;">&ensp;&ensp;&ensp;<font color="orange">PANELU UŻYTKOWNIKA</font></h5>
</a>
</div>
<div style="margin-top:-45px;" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
<div class="second-title">
<h2>NADAWANIE RANG SERWEROWYCH</h2>
<p>Wybierz rangi serwerowe, które Ciebie interesują. Pamiętaj aby stosować się do limitów, aby uniknąć problemów z przyznaniem rang!<br><br>
</div>
</div>
</div>

<style>
.table>tbody>tr>td.active{
	background-color: #e8e8e8 !important;
}
</style>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">

<? include("panel/betagiver/index.php"); ?>

</div>
</div>
</div>
<div class="row">
<div class="col-md-4 col-xs-hidden">
<div class="block-desc">

</div>
</div>
<div class="col-md-4 col-xs-hidden">
<div class="block-desc">
</div>
</div>
</div>
</div>
</div>
<?} else if($_SERVER['REQUEST_URI'] == "/panel.php?betalevels"){?>

<div class="main-section canvas-graph">
<div class="container">
<div class="row">
<div style="float:left">
<a href="panel.php">
<h4><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> WRÓĆ DO</h4><br>
<h5 style="margin-top:-25px;">&ensp;&ensp;&ensp;<font color="orange">PANELU UŻYTKOWNIKA</font></h5>
</a>
</div>
<div style="margin-top:-45px;" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
<div class="second-title">
<h2>POZIOMY WTAJEMNICZENIA</h2>
<p>Na tej stronie znajdziesz informacje dotyczące poziomów wtajemniczenia występujących na naszym serwerze.<br>Niebawem ukaże się tabela informacyjna o wlasnych osiągnięciach w tym zakresie oraz ilości użytkowników posiadających rangę.</p>
</div>
</div>
</div>

<style>
.table>tbody>tr>td.active{
	background-color: #e8e8e8 !important;
}
</style>

<div class="row">
<div class="col-md-12">
<div class="table-responsive">

<table class="tables b-shadow table">
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323"><b>POZIOM</b></font></td>
<td><font size="3" color="#232323"><b>IKONA</b></font></td>
<td><font size="3" color="#232323"><b>WYMAGANY CZAS</b></font></td>
<td><font size="3" color="#232323"><b>PRZYWILEJE</b></font></td>
<td><font size="3" color="#232323"><b>ILOŚĆ UŻYTKOWNIKÓW</b></font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik I</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/bHDPbqX.png"></font></td>
<td><font size="3" color="#232323">5 minut</font></td>
<td><font size="3" color="#232323">» odebranie rangi Zarejestrowana/Zarejestrowany<br>» odebranie własnego kanału prywatnego,<br>» korzystanie z panelu nadawania rang,<br>» wchodzenie na wszystkie kanały publiczne.</font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik II</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/A0euWsg.png"></font></td>
<td><font size="3" color="#232323">1 godzina 0 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik III</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/YXSXoH2.png"></font></td>
<td><font size="3" color="#232323">3 godziny 30 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-II<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik IV</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/lWU5VbV.png"></font></td>
<td><font size="3" color="#232323">10 godzin 0 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-III<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik V</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/a4GtuaF.png"></font></td>
<td><font size="3" color="#232323">18 godzin 0 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-IV<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik VI</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/cqp11fQ.png"></font></td>
<td><font size="3" color="#232323">24 godzin 0 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-V<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik VII</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/dFrAF2u.png"></font></td>
<td><font size="3" color="#232323">32 godziny 0 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-VI<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik VIII</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/E6KwRS3.png"></font></td>
<td><font size="3" color="#232323">48 godzin 0 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-VII<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik IX</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/M30CFY2.png"></font></td>
<td><font size="3" color="#232323">62 godziny 30 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-VIII<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
<tr>
<td style="display:none;"></td>
<td><font size="3" color="#232323">Użytkownik X</font></td>
<td><font size="3" color="#232323"><img src="http://i.imgur.com/QUzNhYi.png"></font></td>
<td><font size="3" color="#232323">100 godzin 0 minut</font></td>
<td><font size="3" color="#232323">» przywileje rangi Użytkownik I-IX<br>+<br><font size="16px">?</font></font></td>
<td><font size="3" color="#232323">x użytkowników posiada tą rangę.</font></td>
</tr>
</table>

</div>
</div>
</div>
<div class="row">
<div class="col-md-4 col-xs-hidden">
<div class="block-desc">

</div>
</div>
<div class="col-md-4 col-xs-hidden">
<div class="block-desc">
</div>
</div>
</div>
</div>
</div>

<?} else if($_SERVER['REQUEST_URI'] == "/panel.php?betaverify" || $_SERVER['REQUEST_URI'] == "/panel.php?betaverify&blad" || $_SERVER['REQUEST_URI'] == "/panel.php?betaverify&sukces"){?>
<div style="margin-top:50px;" class="domain bg-white">
<div class="container">
<div class="row">
<div style="float:left">
<a href="panel.php">
<h4><i class="fa fa-arrow-circle-o-left" aria-hidden="true"></i> WRÓĆ DO</h4><br>
<h5 style="margin-top:-45px;">&ensp;&ensp;&ensp;<font color="orange">PANELU UŻYTKOWNIKA</font></h5>
</a>
</div>
<div style="margin-top:-45px;" class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
<div class="second-title">
<h2>WERYFIKACJA KONTA TEAMSPEAK3</h2>
<p>W celu weryfikacji konta TS3 musisz podać swój adres email, na który otrzymasz od nas link potwierdzający weryfikację.<br><br>W zamian za rejestrację poprzez email oferujemy Ci dostęp do specjalnej prestiżowej ikonki <font color="orange">ZWERYFIKOWANY UŻYTKOWNIK</font> - <img style="width:16px;height:16px;" src="http://i.imgur.com/5QceiGw.png">, która w przyszłości przyniesie same korzyści.</p>
</div>
<?if($_SERVER['REQUEST_URI'] == "/panel.php?betaverify&blad"){?>
<div style="margin-top:-25px;" class="alert-block bg-red b-radius b-shadow">
<p>Wystąpił błąd podczas procesu weryfikacji, link aktywacyjny jest nieprawidłowy lub został już wykorzystany!</p>
</div>
							<?include('panel/verify.php');?>
<?} else if($_SERVER['REQUEST_URI'] == "/panel.php?betaverify&sukces"){?>
							<div style="margin-top:-25px;" class="alert-block bg-green b-radius b-shadow">
							<p>Gratulacje! Zostałeś zarejestrowany, twoja ranga weryfikacyjna została przyznana. Miłego korzystania z serwera :)</p></div>
							<form action="panel.php">
							<button type="submit" class="sub-serch bg-orange b-radius"><i class="fa fa-arrow-left" aria-hidden="true"></i> Wróć do panelu</button>
							</form>
<?} else if ($_SERVER['REQUEST_URI'] == "/panel.php?betaverify"){
	include('panel/verify.php');
	}?>

</div>
</div>
</div>
</div>

<?} else {?>

<div class="main-section feature">
<div class="container">
<div class="row">
<div class="col-lg-8 col-lg-offset-2 col-md-8 col-md-offset-2 col-sm-12">
<div class="second-title">
<h2>FUNKCJE PANELU UŻYTKOWNIKA</h2>
<p>Wybierz interesującą Cię funkcję Panelu Użytkownika klikając na odpowiedni odnośnik.</p>
</div>
</div>
</div>
<div class="row">
<div class="col-md-3">
<a href="/panel.php?betagiver">
<div class="feature-block b-radius f-h-1">
<img style="border-radius:50px;" src="http://i.imgur.com/97K42By.png" alt="">
<h6>AUTOMATYCZNE<br>NADAWANIE RANG</h6>
<p class="font-13">Wybierz rangi które będziesz miał na serwerze....</p>
<div class="clip-hide" style="background-image:url(http://i.imgur.com/dOHA9db.png)">
</div>
</div>
</a>
<a href="/panel.php?betaverify">
<div class="feature-block b-radius f-h-2">
<img style="border-radius:50px;" src="http://i.imgur.com/97K42By.png" alt="">
<h6>WERYFIKOWANIE KONTA</h6>
<p class="font-13">Zweryfikuj swoje konto i otrzymaj prestiżową ikonkę...</p>
<div class="clip-hide" style="background-image:url(http://i.imgur.com/uPZuWRZ.png)">
</div>
</div>
</a>
</div>
<div class="col-md-6">
<div class="features-monitor">
<div class="monitor-mask">
<img src="img/monitor.png" alt="">
</div>
<div class="monitor-img">
<div class="clip">
<div class="bg bg-bg-chrome act" style="background-image:url(http://i.imgur.com/Zu0uYPS.png)">
</div>
</div>
</div>
</div>
</div>
<div class="col-md-3">
<a href="/panel.php?account">
<div class="feature-block b-radius f-h-3">
<img style="border-radius:50px;" src="http://i.imgur.com/97K42By.png" alt="">
<h6>DOKŁADNE INFORMACJE<br>DOTYCZĄCE KONTA</h6>
<p class="font-13">Dowiedz się ciekawych rzeczy na temat swojego konta...</p>
<div class="clip-hide" style="background-image:url(http://i.imgur.com/Zu0uYPS.png)">
</div>
</div>
</a>
<a href="/panel.php?betalevels">
<div class="feature-block b-radius f-h-4">
<img style="border-radius:50px;" src="http://i.imgur.com/97K42By.png" alt="">
<h6>INFORMACJE DOT. POZIOMÓW</h6>
<p class="font-13">Sprawdź swój poziom wtajemniczenia, oraz wymogi do kolejnego...</p>
<div class="clip-hide" style="background-image:url(http://i.imgur.com/LvPs1hZ.png)">
</div>
</div>
</a>
</div>
</div>
</div>
</div>
<?}?>

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
