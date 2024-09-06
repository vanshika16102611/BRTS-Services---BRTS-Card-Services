<section id="portfolio" class="portfolio section">

      <!-- Section Title -->
      <div class="container section-title" data-aos="fade-up">
        <h2>Recharge Plans</h2>
        <p>Check our Recharge Plans</p>
      </div><!-- End Section Title -->

      <div class="container">

        <div class="isotope-layout" data-default-filter="*" data-layout="masonry" data-sort="original-order">

          <ul class="portfolio-filters isotope-filters" data-aos="fade-up" data-aos-delay="100">
            <li data-filter="*" class="filter-active">All</li>
            <li data-filter=".filter-app">Student</li>
            <li data-filter=".filter-product">Senior Citizen</li>
            <li data-filter=".filter-branding">General</li>
          </ul><!-- End Portfolio Filters -->

          <div class="row gy-4 isotope-container" data-aos="fade-up" data-aos-delay="200">
            <!-- Student plan -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets\img\stud.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <table class="table text-start align-middle table-bordered table-hover mb-0">
                            <thead>
                                <tr class="text-white">

                                    <h4>Student</h4>
                                    <th scope="col">Months/Year</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Days</th>
                                    
                                   
                                </tr>
                            </thead>
                            <tbody>
                            <?php
                            include("conn.php");
                                    $q = "SELECT MYear , Amount , Days FROM student where Planeno=1";
                                    echo($q)
                                    $result = mysqli_query($coon, $q);
                                    if ($result) {
                                   while ($row = mysqli_fetch_assoc($result)) {
                
                                    $mys = $row['MYear'];
                                    $amount = $row['Amount'];
                                    $day = $row['Days'];
                                    echo '<tr>
                                                      
                                    
                                    <td>'.$mys.'</td>
                                    <td>'.$amount.'</td>
                                    <td>'.$day.'</td>
                                    
                                </tr>';
            }
        }
        ?></tbody>
              
                <a class="por-btn" title="Recharge Now" href="recharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets\img\stud.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Student</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="recharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets\img\stud.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Student</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="recharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets\img\stud.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Student</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="recharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-app">
              <img src="assets\img\stud.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Student</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="recharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->
            <!-- Student end -->

            <!-- Senior Citizen --> 
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets\img\senoir citizen 4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Senior Citizen</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->
            
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets\img\senoir citizen 4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Senior Citizen</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets\img\senoir citizen 4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Senior Citizen</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets\img\senoir citizen 4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Senior Citizen</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-product">
              <img src="assets\img\senoir citizen 4.jpeg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>Senior Citizen</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->
            <!-- Senior Citizen end -->

            <!-- Genral -->
            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets\img\gen.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>General</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets\img\gen.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>General</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets\img\gen.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>General</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets\img\gen.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>General</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->

            <div class="col-lg-4 col-md-6 portfolio-item isotope-item filter-branding">
              <img src="assets\img\gen.jpg" class="img-fluid" alt="">
              <div class="portfolio-info">
                <h4>General</h4>
                <p> Month Plan</p>
                <p>Validity :  Days</p>
                <p>Price : </p>
                <a class="por-btn" title="Recharge Now" href="grecharge.php">Recharge Now</a>
              </div>
            </div><!-- End Portfolio Item -->
              <!-- Genral End-->
            
          </div><!-- End Portfolio Container -->

        </div>

      </div>

    </section>