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
</head>
<body>
 
<!-- Começo da Sapato -->
<div data-role="page" id="sapato_feminino">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Calca</h1>
		<?php
			session_start("seleciona");
			$_SESSION["calsa_f"] = $_POST['calca'];
		?>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
	<?PHP echo $_SESSION["calca_f"].".jpg"; ?>		
		<h2>Selecione</h2>
		<p>
		<a href="#sapato1"><img src="images/feminino/sapato/1_sapatof.jpg" height="85px"></a>
		<a href="#sapato2"><img src="images/feminino/sapato/2_sapatof.jpg" height="85px"></a>
		<a href="#sapato3"><img src="images/feminino/sapato/3_sapatof.jpg" height="85px"></a>
		<a href="#sapato4"><img src="images/feminino/sapato/4_sapatof.jpg" height="85px"></a>
		<a href="#sapato5"><img src="images/feminino/sapato/5_sapatof.jpg" height="85px"></a>
		<a href="#sapato6"><img src="images/feminino/sapato/6_sapatof.jpg" height="85px"></a>
		</p>
		<p><a href="camiseta_feminina.php#camiseta_feminina" data-role="button">Camiseta</a></p>
		<p><a href="sapato_feminino.php" data-role="button">Sapato</a></p>
		<p><a href="look_feminino.php" data-role="button">Look</a></p>
		<p><a href="calca.php" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo do Sapato 1 -->
<div data-role="page" id="sapato1">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Sapato Feminino</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="sapato_feminino1" action="look_feminino.php" method="post">
			<p>
				<center>					
					<img src="images/feminino/sapato/1_sapatof.jpg" height="300px">
					<a href="#sapato2" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>			
			<input type="hidden" value="1_sapatof" name="sapato" />
			<p><input type="submit" value="Selecionar"></p>
			<p><a href="look_feminino.php" data-role="button">Look</a></p>
			<p><a href="#sapato_feminino" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo do Sapato 2 -->
<div data-role="page" id="sapato2">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Sapato Feminino</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="sapato_feminino2" action="look_feminino.php" method="post">
			<p>
				<center>
					<a href="#sapato1" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/feminino/sapato/2_sapatof.jpg" height="300px">
					<a href="#sapato3" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="2_sapatof" name="sapato" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>
			<p><a href="look_feminino.php" data-role="button">Look</a></p>			
			<p><a href="#sapato_feminino" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo do Sapato 3 -->
<div data-role="page" id="sapato3">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Sapato Feminino</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="sapato_feminino3" action="look_feminino.php" method="post">
			<p>
				<center>
					<a href="#sapato2" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/feminino/sapato/3_sapatof.jpg" height="300px">
					<a href="#sapato4" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="3_sapatof" name="sapato" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>
			<p><a href="look_feminino.php" data-role="button">Look</a></p>			
			<p><a href="#sapato_feminino" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo do Sapato 4 -->
<div data-role="page" id="sapato4">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Sapato Feminino</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="sapato_feminino4" action="look_feminino.php" method="post">
			<p>
				<center>
					<a href="#sapato3" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/feminino/sapato/4_calcaf.jpg" height="300px">
					<a href="#sapato5" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="4_sapatof" name="sapato" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>
			<p><a href="look_feminino.php" data-role="button">Look</a></p>
			<p><a href="#sapato_feminino" data-role="button">Voltar</a></p>			
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo do Sapato 5 -->
<div data-role="page" id="sapato5">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Sapato feminino</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="sapato_feminino5" action="look_feminino.php" method="post">
			<p>
				<center>
					<a href="#sapato4" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/feminino/sapato/5_sapatof.jpg" height="300px">
					<a href="#sapato6" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="5_sapato" name="sapato" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="look_feminino.php" data-role="button">Look</a></p>			
			<p><a href="#sapato_feminino" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo do Sapato 6 -->
<div data-role="page" id="sapato6">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Sapato feminino</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="sapato_feminino6" action="sapato_feminino.php" method="post">
			<p>
				<center>
					<a href="#sapato5" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/feminino/sapato/6_sapatof.jpg" height="300px">					
				</center>
			</p>
			<input type="hidden" value="6_sapatof" name="sapato" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="look_feminino.php" data-role="button">Look</a></p>			
			<p><a href="#sapato_feminino" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

</body>
</html>