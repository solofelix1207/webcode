<?php include "includes/head.php" ?>
  <body>
    <!-- Navigation bar 0 -->
<?php include "includes/navigation.php" ?>

      

      <!-- JomboTron --  STartign barnner -->

 <?php include "includes/search.php" ?>


            <!-- PAGE HEADING -->
            <section>
              <div class="container">
                  <div class="row">
                      <div class="col-sm-12 text-center">
                          <h2 class="display-4 mb-5">Locations</h2>
                      </div>
                  </div>
              </div>
            </section>

      <!-- Featured listing on homepage -->
      <section>
          <div class="container">
            <div class="row">
              <!-- first column for Display listing based on categories -->
                <div class="col-sm-8">
                    <div class="card mb-5">
                        <img src="images/salon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                
                    <div class="card mb-5">
                        <img src="images/salon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>

                    <div class="card mb-5">
                        <img src="images/salon.jpg" class="card-img-top" alt="...">
                        <div class="card-body">
                          <h5 class="card-title">Card title</h5>
                          <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                          <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <!-- second column for all Sidebar with categories -->
                <?php include "includes/sidebar.php" ?>
            </div>
          </div>
      </section>
      <!-- Footer -->
 <?php include "includes/footer.php" ?>
