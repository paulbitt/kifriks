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
 <?php
	session_start("seleciona");
	$_SESSION["sexocamiseta"] = "camiseta_masculina.php#camiseta_masculina";
	$_SESSION["sexocalca"] = "calca_masculina.php";
?>
<!-- Começo da Index -->
<div data-role="page" id="homem" data-theme="a">
 
	<div data-role="header"align="center">
		Homem
	</div><!-- /header -->
 
	<div data-role="content" align="center" style="color: black">
		<h2>Selecione um dos itens abaixos para come&ccedil;ar!</h2>
		<p><a href="#camiseta_masculina" data-role="button">Camiseta</a></p>
		<p><a href="../calca_masculina.php" rel="external" data-role="button">Cal&ccedil;a</a></p>
		<p><a href="../kifriks.php" rel="external" data-role="button">Kifriks</a></p>
		<p><a href="../look.php" rel="external" data-role="button">Look</a></p>
		<p><a href="../index.php#inicio" rel="external" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4>
	</div><!-- /header -->
</div><!-- /page -->
 
 
<!-- Começo da Camiseta -->
<div data-role="page" id="camiseta_masculina" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content" align="center" style="color: black">
		<h2>Selecione</h2>
		<p>
		<a href="#camiseta1"><img src="images/masculino/camiseta/1_camisetam.jpg" height="85px"></a>
		<a href="#camiseta2"><img src="images/masculino/camiseta/2_camisetam.jpg" height="85px"></a>
		<a href="#camiseta3"><img src="images/masculino/camiseta/3_camisetam.jpg" height="85px"></a>
		<a href="#camiseta4"><img src="images/masculino/camiseta/4_camisetam.jpg" height="85px"></a>
		<a href="#camiseta5"><img src="images/masculino/camiseta/5_camisetam.jpg" height="85px"></a>
		<a href="#camiseta6"><img src="images/masculino/camiseta/6_camisetam.jpg" height="85px"></a>
		</p>
		<p><a href="../calca_masculina.php" rel="external" data-role="button">Cal&ccedil;a</a></p>
		<p><a href="../kifriks.php" rel="external" data-role="button">Kifriks</a></p>
		<p><a href="../look.php" rel="external" data-role="button">Look</a></p>
		<p><a href="#homem" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 1 -->
<div data-role="page" id="camiseta1" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Camiseta Masculina</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="camisetas_masculina" action="../calca_masculina.php" method="post">
			<p>
				<center>					
					<img src="images/masculino/camiseta/1_camisetam.jpg" height="300px">
					<a href="#camiseta2" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>			
			<input type="hidden" value="images/masculino/camiseta/1_camisetam" name="camiseta" />
			<p><input type="submit" value="Selecionar"></p>			
			<p><a href="#camiseta_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 2 -->
<div data-role="page" id="camiseta2" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="camiseta_masculina2" action="../calca_masculina.php" method="post">
			<p>
				<center>
					<a href="#camiseta1" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/camiseta/2_camisetam.jpg" height="300px">
					<a href="#camiseta3" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/camiseta/2_camisetam" name="camiseta" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#camiseta_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 3 -->
<div data-role="page" id="camiseta3" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="camiseta_masculina3" action="../calca_masculina.php" method="post">
			<p>
				<center>
					<a href="#camiseta2" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/camiseta/3_camisetam.jpg" height="300px">
					<a href="#camiseta4" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/camiseta/3_camisetam" name="camiseta" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#camiseta_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 4 -->
<div data-role="page" id="camiseta4" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="camiseta_masculina4" action="../calca_masculina.php" method="post">
			<p>
				<center>
					<a href="#camiseta3" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/camiseta/4_camisetam.jpg" height="300px">
					<a href="#camiseta5" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/camiseta/4_camisetam" name="camiseta" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#camiseta_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 5 -->
<div data-role="page" id="camiseta5" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="camiseta_masculina5" action="../calca_masculina.php" method="post">
			<p>
				<center>
					<a href="#camiseta4" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/camiseta/5_camisetam.jpg" height="300px">
					<a href="#camiseta6" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/camiseta/5_camisetam" name="camiseta" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#camiseta_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Camiseta 6 -->
<div data-role="page" id="camiseta6" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Camiseta</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="camiseta_masculina6" action="../calca_masculina.php" method="post">
			<p>
				<center>
					<a href="#camiseta5" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/camiseta/6_camisetam.jpg" height="300px">					
				</center>
			</p>
			<input type="hidden" value="images/masculino/camiseta/6_camisetam" name="camiseta" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#camiseta_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

</body>
</html>