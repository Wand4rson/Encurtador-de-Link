<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">        
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Encurtador de Link</title>
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/bootstrap.min.css">	
    <link rel="stylesheet" href="<?php echo BASE_URL; ?>assets/css/styles.css">
</head>
		<!-- Menu -->
		<header>
		<div class="collapse bg-primary" id="navbarHeader">
			<div class="container">
				<div class="row">
					<div class="col-sm-8 col-md-7 py-4">
					<h4 class="text-white">Sobre</h4>
					<p class="text-white">Exemplo de como seria a criação de um Encurtador de Link, lembro que é somente um exemplo e precisa ser melhorado ou desenvolvido melhorias em caso de uso em Produção.</p>
				</div>				
				</div>
			</div>
		</div>
		<div class="navbar navbar-dark bg-primary shadow-sm">
			<div class="container d-flex justify-content-between">
			<a href="<?php echo BASE_URL;?>" class="navbar-brand d-flex align-items-center">				
				<strong>Encurtador de Link</strong>
			</a>
			<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarHeader" aria-controls="navbarHeader" aria-expanded="false" aria-label="Toggle navigation">
				<span class="navbar-toggler-icon"></span>
			</button>
			</div>
		</div>
		</header>
		<!-- End Menu -->

<body>

		<br><br>
        <div class="container">            
            <!-- Content -->
            <?php $this->loadViewInTemplate($viewName, $viewData); ?>
            <!-- End Content -->
        </div> 
		<br><br>
		
	<!-- jquery latest version --> 
    <script src="<?php echo BASE_URL; ?>assets/js/jquery-2.2.4.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/bootstrap.min.js"></script>
    <script src="<?php echo BASE_URL; ?>assets/js/script.js"></script>
</body>

</html>
