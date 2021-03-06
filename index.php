<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
  <title>Site Simples - Code-Education!</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="Site Simples - Code-education">
  <meta name="author" content="Maycon Luczynski">

	<!--link rel="stylesheet/less" href="less/bootstrap.less" type="text/css" /-->
	<!--link rel="stylesheet/less" href="less/responsive.less" type="text/css" /-->
	<!--script src="js/less-1.3.3.min.js"></script-->
	<!--append â€˜#!watchâ€™ to the browser URL, then refresh the page. -->
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/style.css" rel="stylesheet">

  <!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
  <!--[if lt IE 9]>
    <script src="js/html5shiv.js"></script>
  <![endif]-->

  <!-- Fav icon -->

  <link rel="shortcut icon" href="img/favicon.png">
  
	<script type="text/javascript" src="js/jquery.min.js"></script>
	<script type="text/javascript" src="js/bootstrap.min.js"></script>
	<script type="text/javascript" src="js/scripts.js"></script>
</head>

<body>
<!-- titulo e url -->
    <?php
        date_default_timezone_set('America/Sao_Paulo');
		require_once ('config.php');
		// pega os dados pelo get e verifica se não está em branco
        if (isset($_GET['p']) != "") 
        	{ 
        		$pag = $_GET['p'];
        	} else 
        		{ 
        			$pag = "";
        	   	}
		// ajusta os titulos e páginas e verifica se existe
		if (($pag == 'home') or ($pag == ""))
			{
				$titulo = $paginas["home"];
				$conteudo = 'home.php';
			}elseif ($pag == 'empresa')
				{
					$titulo = $paginas["empresa"];
					$conteudo = 'empresa.php';			
				}elseif ($pag == 'produtos')
					{
						$titulo = $paginas["produtos"];
						$conteudo = 'produtos.php';			
					}elseif ($pag == 'servicos')
						{
							$titulo = $paginas["servicos"];
							$conteudo = 'servicos.php';			
						}elseif ($pag == 'contato')
							{
								$titulo = $paginas["contato"];
								$conteudo = 'contato.php';			
							}
							else 
								{
									$titulo = $paginas["404"];
									$conteudo = '404.php';			
								}
      ?>
<!-- titulo e url -->
<div class="container">
    <header>
        <div class="row clearfix">
            <div class="col-md-12 column">
                <div class="page-header">
                    <h2>
                        SITE SIMPLES | PHP <small>code-education</small>
                    </h2>
                </div>
            </div>
        </div>
    </header>
    <section>
    	<div class="row clearfix">
        <!-- menu -->
            <div class="col-md-3 column">
                <?php require_once('menu.php'); ?>
            </div>
        <!-- menu -->
        <!-- corpo -->
		<div class="col-md-9 column">
        <!-- breadcump -->
            <?php require_once('voce-esta.php'); ?>
        <!-- breadcump -->
            <div class="conteudo"> 
                <?php
                   require_once($conteudo);
                ?>
            </div>
		</div>
	</div>
    </section>
</div>
    <footer>
    <div class="container">
        <div class="row clearfix">
            <div class="col-md-12 column">
                <p class="text-center">Todos os direitos reservados <?=date("Y"); ?></p>
            </div>
    	</div>
    </div>
    </footer>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
</body>
</html>
