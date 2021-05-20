
    <!-- Wrapper for slides -->
      <section id="slider" class="slider">
          <div class="slider_overlay">
              <div class="container">
                  <div class="row">
                      <div class="main_slider text-center">
                          <div class="col-md-12">
                              <div class="main_slider_content wow zoomIn" data-wow-duration="1s">
                                  <h1>Good Food, Good Mood</h1>
                                  <p>Vous Desirez Nous Livrons ! </p>
                                  <a class="primary-btn cta-btn" href="store.php">COMMANDEZ MAINTENANT !! </a>
                              </div>
                          </div>
                      </div>

                  </div>
              </div>
          </div>
      </section>

    <section id="abouts" class="abouts">
        <div class="container">
            <div class="row">
                <div class="abouts_content">
                    <div class="col-md-6">
                        <div class="single_abouts_text text-center wow slideInLeft" data-wow-duration="1s">
                            <img src="assets/images/ab.png" alt="" />
                        </div>
                    </div>

                    <div class="col-md-6">
                        <div class="single_abouts_text wow slideInRight" data-wow-duration="1s">
                            <h4>A propos de nous</h4>
                            <h3></h3>
                            <p>Mangez sainement mais délicieusement. Nos clients sont rois, nos clients sont nos patrons.</p>
                            <p>Notre Restaurant vous suggère le talents des meilleurs chefs cuisinier pour vous preparez vos désirs culinaires les plus fous</p>
                            <p>Nous vous proposons un voyage vers tous les pays et leurs succulent plats</p>
                            <a href="" class="btn btn-primary">click here</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="features" class="features">
        <div class="slider_overlay">
            <div class="container">
                <div class="row">
                    <div class="main_features_content_area  wow fadeIn" data-wow-duration="3s">
                        <div class="col-md-12">
                            <div class="main_features_content text-left">
                                <div class="col-md-6">
                                    <div class="single_features_text">
                                        <h4>Recettes speciales</h4>
                                        <h3>composez vous même </h3>
                                        <p>Nous mettons à votre disposition nos ingrédients et c'est à vous de composer votre plat a partir de ce que vous voulez </p>
                                        <p>Vous avez en plus un système de calcul des calories comme ça vous pourrez faire attention a votre ligne et manger sainement et delicieusement</p>

                                        <a href="" class="btn btn-primary">click here</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="portfolio" class="portfolio">
        <div class="container">
            <div class="row">
                <div class="portfolio_content text-center  wow fadeIn" data-wow-duration="5s">
                    <div class="col-md-12">
                        <div class="head_title text-center">
                            <h4>Nos Meilleures</h4>
                            <h3>Ventes</h3>
                        </div>

                        <div class="section">
                            <!-- container -->
                            <div class="container">
                                <!-- row -->
                                <div class="row">

                                    <!-- Products tab & slick -->
                                    <div class="col-md-12 mainn mainn-raised">
                                        <div class="row">
                                            <div class="products-tabs">
                                                <!-- tab -->
                                                <div id="tab1" class="tab-pane active">
                                                    <div class="products-slick" data-nav="#slick-nav-1" >

                                                        <?php
                                                        include 'db.php';


                                                        $product_query = "SELECT * FROM products,categories WHERE product_cat=cat_id AND product_id BETWEEN 1 AND 8";
                                                        $run_query = mysqli_query($con,$product_query);
                                                        if(mysqli_num_rows($run_query) > 0){

                                                            while($row = mysqli_fetch_array($run_query)){
                                                                $pro_id    = $row['product_id'];
                                                                $pro_cat   = $row['product_cat'];
                                                                $pro_brand = $row['product_brand'];
                                                                $pro_title = $row['product_title'];
                                                                $pro_price = $row['product_price'];
                                                                $pro_image = $row['product_image'];

                                                                $cat_name = $row["cat_title"];

                                                                echo "
				
                        
                                
								<div class='product'>
									<a href='product.php?p=$pro_id'><div class='product-img'>
										<img src='product_images/$pro_image' style='max-height: 290px;' alt=''>
										
									</div></a>
									<div class='product-body'>
										<h3 class='product-name header-cart-item-name'><a href='product.php?p=$pro_id'>$pro_title</a></h3>
										<h4 class='product-price header-cart-item-info'>$pro_price</h4>
					
									</div>
									<div class='add-to-cart'>
										<button pid='$pro_id' id='product' class='add-to-cart-btn block2-btn-towishlist' href='#'><i class='fa fa-shopping-cart'></i> ajouter au panier</button>
									</div>
								</div>
                               
							
                        
			";
                                                            }
                                                            ;

                                                        }
                                                        ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="ourPakeg" class="ourPakeg">
        <div class="container">
            <div class="main_pakeg_content">
                <div class="row">
                    <div class="head_title text-center">
                        <h4>Notre Menu</h4>

                    </div>

                    <div class="single_pakeg_one text-right wow rotateInDownRight">
                        <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                            <div class="single_pakeg_text">
                                <div class="pakeg_title">
                                    <h4>Boissons</h4>
                                </div>

                                <ul>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single_pakeg_two text-left wow rotateInDownLeft">
                        <div class="col-md-6 col-sm-8">
                            <div class="single_pakeg_text">
                                <div class="pakeg_title">
                                    <h4>Plat principale</h4>
                                </div>

                                <ul>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                </ul>
                            </div>
                        </div>
                    </div>

                    <div class="single_pakeg_three text-left wow rotateInDownRight">
                        <div class="col-md-6 col-md-offset-6 col-sm-8 col-sm-offset-4">
                            <div class="single_pakeg_text">
                                <div class="pakeg_title">
                                    <h4>Desserts</h4>
                                </div>

                                <ul>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                    <li> Tuna Roast Source........................................................$24.5 </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

		<!-- SECTION -->

		<!-- /SECTION -->
		  
		

		<!-- SECTION -->

		<!-- /SECTION -->

		<!-- HOT DEAL SECTION -->
		<!-- /HOT DEAL SECTION -->

		<!-- SECTION -->

		<!-- /SECTION -->

		<!-- SECTION -->
    <section id="mobaileapps" class="mobailapps">
        <div class="slider_overlay">
            <div class="container">
                <div class="row">
                    <div class="main_mobail_apps_content wow zoomIn">
                        <div class="col-md-5 col-sm-12 text-center">
                            <img src="assets/images/iphone.png" alt="" />
                        </div>
                        <div class="col-md-7 col-sm-12">
                            <div class="single_monail_apps_text">
                                <h4> Ravis de vous annoncer </h4>
                                <h1>Application mobile <span>Disponible sur toutes les plateformes OS</span></h1>

                                <a href=""><img src="assets/images/google.png" alt="" /></a>
                                <a href=""><img src="assets/images/apps.png" alt="" /></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
		<!-- /SECTION -->
