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
 
<!-- Começo da Calca -->
<div data-role="page" id="calca_masculina" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Cal&ccedil;a</h1>
		<?php
			session_start("seleciona");
			if ($_POST['camiseta'] != "")
				{
					$_SESSION["camiseta"] = $_POST['camiseta'];
				}
		?>
	</div><!-- /header -->
 
	<div data-role="content" align="center" style="color: black">	
		<h2>Selecione</h2>
		<p>
		<a href="#calca1"><img src="images/masculino/calca/1_calcam.jpg" width="85px" height="85px"></a>
		<a href="#calca2"><img src="images/masculino/calca/2_calcam.jpg" width="85px" height="85px"></a>
		<a href="#calca3"><img src="images/masculino/calca/3_calcam.jpg" width="85px" height="85px"></a>
		<a href="#calca4"><img src="images/masculino/calca/4_calcam.jpg" width="85px" height="85px"></a>
		<a href="#calca5"><img src="images/masculino/calca/5_calcam.jpg" width="85px" height="85px"></a>
		<a href="#calca6"><img src="images/masculino/calca/6_calcam.jpg" width="85px" height="85px"></a>
		</p>
		<p><a href="../kifriks.php" rel="external" data-role="button">Kifriks</a></p>
		<p><a href="../look.php" rel="external" data-role="button">Look</a></p>
		<p><a href="../camiseta_masculina.php#camiseta_masculina" rel="external" data-role="button">Voltar</a></p>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Calca 1 -->
<div data-role="page" id="calca1" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Cal&ccedil;a Masculina</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="calca_masculina" action="../kifriks.php" method="post">
			<p>
				<center>					
					<img src="images/masculino/calca/1_calcam.jpg" width="300px" height="300px">
					<a href="#calca2" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>			
			<input type="hidden" value="images/masculino/calca/1_calcam" name="calca" />			
			<p><input type="submit" value="Selecionar"></p>
			<p><a href="#calca_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Calca 2 -->
<div data-role="page" id="calca2" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Cal&ccedil;a Masculina</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="calca_masculina2" action="../kifriks.php" method="post">
			<p>
				<center>
					<a href="#calca1" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/calca/2_calcam.jpg" width="300px" height="300px">
					<a href="#calca3" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/calca/2_calcam" name="calca" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>
			<p><a href="#calca_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Calca 3 -->
<div data-role="page" id="calca3" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Cal&ccedil;a Masculina</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="calca_masculina3" action="../kifriks.php" method="post">
			<p>
				<center>
					<a href="#calca2" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/calca/3_calcam.jpg" width="300px" height="300px">
					<a href="#calca4" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/calca/3_calcam" name="calca" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>						
			<p><a href="#calca_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Calca 4 -->
<div data-role="page" id="calca4" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Cal&ccedil;a Masculina</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="calca_masculina4" action="../kifriks.php" method="post">
			<p>
				<center>
					<a href="#calca3" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/calca/4_calcam.jpg" height="300px">
					<a href="#calca5" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/calca/4_calcam" name="calca" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#calca_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Calca 5 -->
<div data-role="page" id="calca5" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Cal&ccedil;a Masculina</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="calca_masculina5" action="../kifriks.php" method="post">
			<p>
				<center>
					<a href="#calca4" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/calca/5_calcam.jpg" height="300px">
					<a href="#calca6" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="images/masculino/calca/5_calcam" name="calca" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#calca_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo da Calca 6 -->
<div data-role="page" id="calca6" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Cal&ccedil;a Masculina</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="calca_masculina6" action="../kifriks.php" method="post">
			<p>
				<center>
					<a href="#calca5" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/masculino/calca/6_calcam.jpg" height="300px">					
				</center>
			</p>
			<input type="hidden" value="images/masculino/calca/6_calcam" name="calca" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>			
			<p><a href="#calca_masculina" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

</body>
</html>