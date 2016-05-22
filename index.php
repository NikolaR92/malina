<!DOCTYPE html>
<html>
	<head>
	<title>Plantaža Ristić</title>
		<?php
			include 'include/head.php';
		?>
	</head>
	<body>
		<header>
			<?php
				include 'include/menu.php';
				include 'include/log_in.html';
				include 'include/register.html';
			?>
		</header>
		<main id="mid" class="container-fluid">
			<div class="row">
				<div id="left_mid" class="col-md-2">
				</div>
				<div id="content" class="col-md-8 panel-body">
					<div class="jumbotron">
						<h1>Plantaza Ristic</h1>
					</div>
				</div>
				<div id="right_mid" class="col-md-2">
					<?php
						include 'include/links.php';
					?>
				</div>
        	</div>
		</main>
		<?php
			include 'include/footer.html'
		?>
    </body>
</html>
