<!DOCTYPE html>
<html>
    <head>
	    <title>Galerija</title>
		<?php
			include '../include/head.php';
		?>
        <script type="text/javascript" src="../app/gallery/bottom_gallery.js"></script>
    </head>
    <body>
        <header>
		          <?php
     		           include '../include/menu.php';
                       include '../include/register.html';
                       include '../include/login.html';
		            ?>
        </header>

	    <main class="container-fluid">
            <!--main picture -->
		          <div id="top_main" class="row">
                      <div id="top_arrow_left" class="col-md-3">
                          <button type="button" class="btn btn-primary">
                              <span class="glyphicon glyphicon-circle-arrow-left"></span>
                          </button>
                      </div>
                      <div id="top_mid" class="col-md-6">
                          <img src="../assets/images_other/IMG_0001.JPG" alt="slika1" width=500px height=400px />
                      </div>
                      <div id="top_arrow_right" class="col-md-3">
                          <button type="button" class="btn btn-primary">
                              <span class="glyphicon glyphicon-circle-arrow-right"></span>
                          </button>
                      </div>
                  </div>
                  <!-- other pictures in gallery -->
                  <div id="bottom_main" class="row">
                      <div id="bot_arrow_left" class="col-md-2">
                          <button type="button" class="btn btn-primary">
                              <span class="glyphicon glyphicon-circle-arrow-left"></span>
                          </button>
                      </div>
                      <div id="bot_mid" class="col-md-8">
                          <div id="images" class="row" >
                              <div id="image1" class="col-md-2 image">
                                  <img src="../assets/images_other/IMG_0001.JPG" class="img-thumbnail" alt="slika1" width=100px height=100px />
                              </div>
                              <div id="image2" class="col-md-2 image">
                                  <img src="../assets/images_other/IMG_0002.JPG" class="img-thumbnail" alt="slika2" width=100px height=100px/>
                              </div>
                              <div id="image3" class="col-md-2 image">
                                  <img src="../assets/images_other/IMG_0004.JPG" class="img-thumbnail" alt="slika3" width=100px height=100px/>
                              </div>
                              <div id="image4" class="col-md-2 image">
                                  <img src="../assets/images_other/IMG_0005.JPG" class="img-thumbnail" alt="slika3" width=100px height=100px/>
                              </div>
                              <div id="image5" class="col-md-2 image">
                                  <img src="../assets/images_other/IMG_0005.JPG" class="img-thumbnail" alt="slika3" width=100px height=100px/>
                              </div>
                              <div id="image6" class="col-md-2 image">
                                  <img src="../assets/images_other/IMG_0005.JPG" class="img-thumbnail" alt="slika3" width=100px height=100px/>
                              </div>
                              <div id="image7" class="col-md-2 image">
                                  <img src="../assets/images_other/IMG_0005.JPG" class="img-thumbnail" alt="slika3" width=100px height=100px/>
                              </div>
                          </div>
                      </div><!-- bottom_main -->
                      <div id="bot_arrow_right" class="col-md-2">
                          <button type="button" class="btn btn-primary">
                              <span class="glyphicon glyphicon-circle-arrow-right"></span>
                          </button>
                      </div>
                  </div>
        </main>
		<?php
			include '../include/footer.html'
		?>

        <!--JavaScript-->

<!-- TODO inplementirati require.js
<script type="text/javascript" src="../bower_components/requirejs/require.js"></script>
<script>
    requirejs(['../app/config'],function(){
        requirejs(["../app/gallery/bottom_gallery"]);
    });
</script>-->
    </body>
</html>
