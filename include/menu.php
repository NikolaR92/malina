<?php 


echo '
 <nav class="navbar navbar-inverse">
	<div class="container-fluid">
		<div class="row">
			<!-- logo i meni za mob-->
			<div id="nav_left" class="navbar-header">
				<img src="'.WEB_ROOT.'/assets/images_core/Logo_Ristic.gif" class="img-rounded pull-left" alt="Logo Ristic" width="75px" height="75px">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#nav_right">
					<span class="icon-bar"></span>
       				<span class="icon-bar"></span>
        			<span class="icon-bar"></span>
     			</button>
			</div>
			<!-- meni bar -->
			<div id="nav_right" class="collapse navbar-collapse" >
				<ul class="nav navbar-nav">
					<li><a href="'.WEB_ROOT.'/index.php">Početna</a></li>
					<li><a href="'.WEB_ROOT.'/pages/product.php">Proizvodi</a></li>
					<li><a href="'.WEB_ROOT.'/pages/gallery.php">Galerija</a></li>
					<li><a href="'.WEB_ROOT.'/pages/forum.php">Forum</a></li>
					<li><a href="'.WEB_ROOT.'/pages/contact.php">Kontakt</a></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">			
					<li><button type="button" class="btn btn-primary lang"> SRB</button></li>
					<li><button type="button" class="btn btn-primary lang"> EN</button></li>
				</ul>
				<ul class="nav navbar-nav navbar-right">
					<!-- Trigger the modal with a button -->
					<li><a data-toggle="modal" data-target="#register" href="#register"><span class="glyphicon glyphicon-user"></span>Registruj se</a></li>
					<li><a data-toggle="modal" data-target="#log_in" href="#login_in"><span class="glyphicon glyphicon-log-in"></span>Uloguj se</a></li>
				</ul>
				
			</div>	
		</div>
	</div>
</nav>
';
?>	