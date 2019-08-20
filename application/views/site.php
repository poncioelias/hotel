<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

<!doctype html>

<html lang="pt-br">

  <head>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	
	<script defer src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.9.0/js/all.js"></script> <!--load all styles -->
	
	<!-- Include CSS do sistema-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/style.css" />
		
	<?php if(!empty($pagina_css)): ?>
	
	<!-- Include CSS da pagina-->
	<link rel="stylesheet" href="<?=base_url()?>assets/css/<?=$pagina_css?>" />
	
	<?php endif; ?>

    <title>Hotel</title>

  </head>
  
  
  <body>
	
	<!--menu lateral -->
	<nav class="sidebar">
    <ul class="nav">
      <li class="nav-item">
        <a class="nav-link" href="#">
          <img src="<?=base_url()?>assets/images/diamond.png" class="logo" alt="">
        </a>
      </li>
        <li class="nav-item">
          <a class="nav-link active" href="#">
            <i class="far fa-clock sidebar-icon"></i>
          </a>
        </li>
        <li class="nav-item nav-active">
          <a class="nav-link" href="<?=base_url()?>">
            <i class="fas fa-home sidebar-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="<?=base_url()?>new_guest">
            <i class="fas fa-user-friends sidebar-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="fas fa-comments sidebar-icon"></i>
          </a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">
            <i class="far fa-credit-card sidebar-icon"></i>
          </a>
        </li>
      </ul>
      <ul class="nav">
		<li class="nav-item">
            <a class="nav-link" href="#">
              <i class="fas fa-cog sidebar-icon"></i>
            </a>
		</li>
	 	<li class="nav-item">
            <a class="nav-link" href="#">
              <i class="sidebar-icon">
			  	<div class="circle-ico">
					<img src="https://ionicframework.com/docs/v3/dist/preview-app/www/assets/img/avatar-ts-woody.png" />
				</div>
			  </i>
            </a>
		</li>
      </ul>
  	</nav>

	<div class="container">
		<div class="header">
			<a href='#'><u>Updates</u></a>
			<div class="users">
				<small>Session: 34 minutes</small>
				<small>User: Ann Tsibulski</small>
			</div>
		</div>
	</div>

	<!--container -->
	<?php $this->load->view($pagina); ?>

	<!--footer-->





    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


	<!-- Include JS do sistema-->
	<script type="text/javascript" src="<?=base_url()?>assets/js/script.js"></script>
	
	<?php if(!empty($pagina_js)): ?>
	
	<!-- Include JS da pagina-->
	<script type="text/javascript" src="<?=base_url()?>assets/js/<?=$pagina_js?>"></script>
	
	<?php endif; ?>
  
  
  </body>

</html>