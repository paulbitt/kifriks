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
 
<!-- Começo do Sapato -->
<div data-role="page" id="kifriks" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>kifriks</h1>
		<?php
			session_start("seleciona");
			if ($_POST['calca'] != "")
			{
			$_SESSION["calca"] = $_POST['calca'];			
			}
		?>
	</div><!-- /header -->
 
	<div data-role="content" align="center" style="color: black">	
		<h2>Selecione</h2>
		<p>
		<a href="#kifriks1"><img src="images/kifriks/kifriks_pt.jpg" height="95px"></a>
		<a href="#kifriks2"><img src="images/kifriks/kifriks_bc.jpg" height="95px"></a>
		<a href="#kifriks3"><img src="images/kifriks/kifriks_az.jpg" height="95px"></a>		
                <a href="#kifriks4"><img src="images/kifriks/kifriks_ll.jpg" height="95px"></a>
		<a href="#kifriks5"><img src="images/kifriks/kifriks_cz.jpg" height="95px"></a>		
		<a href="#kifriks6"><img src="images/kifriks/kifriks_rs.jpg" height="95px"></a>		
		</p>
		<p><a href="../<? echo $_SESSION["sexocamiseta"]; ?>" rel="external" data-role="button">Camiseta</a></p>
		<p><a href="../<? echo $_SESSION["sexocalca"]; ?>" rel="external" data-role="button">Cal&ccedil;a</a></p>
		<p><a href="../look.php" rel="external" data-role="button">Look</a></p>		
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>KIFRIKS</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo Kifriks 1 -->
<div data-role="page" id="kifriks1" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Kifriks</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="kifriks1" action="../look.php" method="post">
			<p>
				<center>					
					<img src="images/kifriks/kifriks_pt.jpg" height="300px">
					<a href="#kifriks2" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>			
			<input type="hidden" value="kifriks_pt" name="kifriks" />			
			<p><input type="submit" value="Selecionar"></p>			
			<p><a href="#kifriks" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo Kifriks 2 -->
<div data-role="page" id="kifriks2" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Kifriks</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="kifriks2" action="../look.php" method="post">
			<p>
				<center>
					<a href="#kifirks1" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/kifriks/kifriks_bc.jpg" height="300px">
					<a href="#kifriks3" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="kifriks_bc" name="kifriks" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>
			<p><a href="#kifriks" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo Kifriks 3 -->
<div data-role="page" id="kifriks3" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Kifriks</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="kifriks3" action="../look.php" method="post">
			<p>
				<center>
					<a href="#kifriks2" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/kifriks/kifriks_az.jpg" height="300px">
					<a href="#kifriks4" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="kifriks_az" name="kifriks" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>						
			<p><a href="#kifriks" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo Kifriks 4 -->
<div data-role="page" id="kifriks4" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Kifriks</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="kifriks4" action="../look.php" method="post">
			<p>
				<center>
					<a href="#kifriks3" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/kifriks/kifriks_ll.jpg" height="300px">
					<a href="#kifriks5" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="kifriks_ll" name="kifriks" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>						
			<p><a href="#kifriks" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo Kifriks 5 -->
<div data-role="page" id="kifriks5" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Kifriks</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="kifriks5" action="../look.php" method="post">
			<p>
				<center>
					<a href="#kifriks4" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/kifriks/kifriks_cz.jpg" height="300px">
					<a href="#kifriks6" id="nextbtn" data-role="button" data-iconpos="notext" data-icon="arrow-r">Next</a>
				</center>
			</p>
			<input type="hidden" value="kifriks_cz" name="kifriks" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>						
			<p><a href="#kifriks" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

<!-- Começo Kifriks 6 -->
<div data-role="page" id="kifriks6" data-theme="a">
 
	<div data-role="header" align="center">
		<h1>Kifriks</h1>
	</div><!-- /header -->
 
	<div data-role="content">
		<form name="kifriks6" action="../look.php" method="post">
			<p>
				<center>
					<a href="#kifriks5" id="prevbtn" data-role="button" data-iconpos="notext" data-icon="arrow-l">Previous</a>
					<img src="images/kifriks/kifriks_rs.jpg" height="300px">					
				</center>
			</p>
			<input type="hidden" value="kifriks_rs" name="kifriks" />
			<p><input type="submit" value="Selecionar" name="selecionar" data-role="button"></p>						
			<p><a href="#kifriks" data-role="button">Voltar</a></p>
		</form>
	</div><!-- /content -->
 
	<div data-role="footer">
		<h4>B&aacute;sico &eacute; ter estilo</h4> 
	</div><!-- /header -->
</div><!-- /page -->

</body>
</html>