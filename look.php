<?php
session_start("seleciona");
?>
    <!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN"  
        "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">  
      
    <html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en"> 
	<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" /><!-- forçando o IE a usar o seu novo motor de renderização -->
	<title>Kifriks</title>
	<link rel="stylesheet" href="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.css" />
	<script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
	<script src="http://code.jquery.com/mobile/1.0a1/jquery.mobile-1.0a1.min.js"></script>	
<style type="text/css">
             .ui-page {
                       background: transparent url(images/fundo.gif);
position: relative;
                      }
        </style>
</head>
<body>
 
<!-- Começo da Index -->
<div data-role="page" id="selecao" data-theme="a">
	<?php
		session_start("seleciona");
		if ($_POST['kifriks'] != "")
			{
				$_SESSION["kifriks"] = $_POST['kifriks'];			
			}
	?>
	<div data-role="header" align="center">
		<img src="images/header.jpg" height="85px">
	</div><!-- /header -->
 
	<div data-role="content" align="center" style="color: black">			
		<img src="<? echo $_SESSION['camiseta'].".jpg"; ?>" width="125px" height="150px"><br>
		<img src="<? echo $_SESSION['calca'].".jpg"; ?>" width="125px" height="150px"><br>
		<img src="<? echo "images/kifriks/".$_SESSION['kifriks'].".jpg"; ?>" height="130px"><br>
		<h2>Para modificar selecione um dos itens abaixos!</h2>
		<p><a href="../index.php#inicio" rel="external" data-role="button">In&iacute;cio</a></p>
		<p><a href="../<? echo $_SESSION['sexocamiseta']; ?>" rel="external" data-role="button">Camiseta</a></p>
		<p><a href="../<? echo $_SESSION['sexocalca']; ?>" rel="external" data-role="button">Cal&ccedil;a</a></p>
		<p><a href="../kifriks.php" rel="external" data-role="button">Kifriks</a></p>				
	</div><!-- /content -->
 
 
	<div data-role="footer">
		<h4>KIFRIKS</h4>
	</div><!-- /header -->
</div><!-- /page -->
 
</body>
</html>