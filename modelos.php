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
 
<!-- Começo da Index -->
<div data-role="page" id="selecao">
 
	<div data-role="header" data-theme="a" align="center">
		<img src="images/header.jpg" height="85px">
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">	
	<?PHP echo "Teste"; ?>
		<h2>Selecione um dos itens abaixos para comecar!</h2>
		<p><a href="#camiseta" data-role="button">Camiseta</a></p>
		<p><a href="#calca" data-role="button">Calca</a></p>
		<p><a href="#sapato" data-role="button">Sapato</a></p>
		<p><a href="#look" data-role="button">Look</a></p>
		<p><a href="#index" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4>
	</div><!-- /header -->
</div><!-- /page -->
 
 
<!-- Começo da Camiseta -->
<div data-role="page" id="camiseta">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a" align="center">
		<h2>Selecione</h2>
		<p>
		<a href="#camiseta1"><img src="images/feminino/camiseta/1.jpg" height="85px"></a>
		<a href="#camiseta2"><img src="images/feminino/camiseta/2.jpg" height="85px"></a>
		</p>
		<p><a href="#calca" data-role="button">Calca</a></p>
		<p><a href="#sapato" data-role="button">Sapato</a></p>
		<p><a href="#look" data-role="button">Look</a></p>
		<p><a href="#selecao" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 1 -->
<div data-role="page" id="camiseta1">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="camisetass" action="../modelos.php#calca" method="post">
			<p>
				<center>
					<a href="#camiseta1" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/feminino/camiseta/1.jpg" height="300px">
					<a href="#camiseta2" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>			
			<input type="hidden" value="1" name="camiseta" />
			<p><input type="submit" value="Selear" name="selecionar" style = "color:black; background-color:white; font-size:12px; font-weight:bold; width:100; height:45; font-family:verdana;"></p>
			<p><a href="#look" data-role="button">Look</a></p>
			<p><a href="#camiseta" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 2 -->
<div data-role="page" id="camiseta2">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<form name="camiseta" action="../modelos.php#calca" method="post">
			<p>
				<center>
					<a href="#camiseta1" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/feminino/camiseta/2.jpg" height="300px">
					<a href="#camiseta2" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="2" name="camiseta" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>
			<p><a href="#look" data-role="button">Look</a></p>
			<p><a href="#camiseta" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->
 
 <!-- Começo da Calca -->
<div data-role="page" id="calca">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Calca</h1>
		<?php
			session_start("seleciona");
			$_SESSION["camiseta"] = $_POST['camiseta'];
		?>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<h2>Selecione</h2>
		<p>Aki ficaria as calcas para selecionar.</p>
		<?PHP echo $_SESSION["camiseta"].".jpg"; ?>
		<p><a href="#camiseta" data-role="button">Camiseta</a></p>
		<p><a href="#sapato" data-role="button">Sapato</a></p>
		<p><a href="#look" data-role="button">Look</a></p>
		<p><a href="#selecao" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Sapato -->
<div data-role="page" id="sapato">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Sapato</h1>
	</div><!-- /header -->
 
	<div data-role="content" data-theme="a">
		<h2>Selecione</h2>
		<p>Aki ficaria os sapatos para selecionar.</p>
		<p><a href="#camiseta" data-role="button">Camiseta</a></p>
		<p><a href="#calca" data-role="button">Calca</a></p>
		<p><a href="#look" data-role="button">Look</a></p>
		<p><a href="#selecao" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo do Look -->
<div data-role="page" id="look">
 
	<div data-role="header" data-theme="a" align="center">
		<h1>Look</h1>
	</div><!-- /header -->
 
	<!-- /Inicio da imagem -->
		<div data-role="page" data-fullscreen="true" class="photoview">
	   
		<div data-role="header">
			<h1>Title of image</h1>       
		</div>
	   
		<div data-role="content" >       
			<img src="images/sim.jpg" alt="title of image"  />       
		</div>
	   
		<div data-role="footer">
			<a href="images2.html" class="next">Next</a>
		</div>
		</div>
		<!-- /Fim da imagem -->
 
 
	<div data-role="content" data-theme="a">
		<h2>Look com KIFRIKS</h2>
		<p>Aki ficaria o look montado.</p>
		
			
		<p><a href="#camiseta" data-role="button">Camiseta</a></p>
		<p><a href="#calca" data-role="button">Calca</a></p>
		<p><a href="#sapato" data-role="button">Sapato</a></p>
		<p><a href="#selecao" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
	<div data-role="footer" data-theme="a">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

</body>
</html>