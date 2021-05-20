<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>Dining Delight Restaurant</title>

    <!-- Google font -->
    <link href='https://fonts.googleapis.com/css?family=Pacifico' rel='stylesheet' type='text/css'>
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

    <!-- Bootstrap -->
    <link type="text/css" rel="stylesheet" href="css/bootstrap.min.css"/>

    <!--For Plugins external css-->
    <link rel="stylesheet" href="assets/css/animate/animate.css" />
    <link rel="stylesheet" href="assets/css/plugins.css" />

    <!-- Slick -->
    <link type="text/css" rel="stylesheet" href="css/slick.css"/>
    <link type="text/css" rel="stylesheet" href="css/slick-theme.css"/>

    <!-- nouislider -->
    <link type="text/css" rel="stylesheet" href="css/nouislider.min.css"/>

    <!-- Font Awesome Icon -->
    <link rel="stylesheet" href="css/font-awesome.min.css">

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="css/style.css"/>
    <link type="text/css" rel="stylesheet" href="css/accountbtn.css"/>
    <link rel="stylesheet" href="assets/css/style.css">

    <link rel="stylesheet" href="assets/css/responsive.css" />





    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="assets/js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <style>
        #navigation {
            background: #FF4E50;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #F9D423, #FF4E50);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #F9D423, #FF4E50); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #header {

            background: #780206;  /* fallback for old browsers */
            background: -webkit-linear-gradient(to right, #061161, #780206);  /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to right, #061161, #780206); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #top-header {


            background: #870000;  /* fallback for old browsers */
            background: #FFFFFF;  /* Chrome 10-25, Safari 5.1-6 */
            background: #FFFFFF; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        #footer {
            background: #000000;  /* fallback for old browsers */
            background: #000000;  /* Chrome 10-25, Safari 5.1-6 */
            background: #000000; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


            color: #1E1F29;
        }
        #bottom-footer {
            background: #000000;  /* fallback for old browsers */
            background: #000000;  /* Chrome 10-25, Safari 5.1-6 */
            background: #000000; /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */


        }
        .footer-links li a {
            color: #1E1F29;
        }
        .mainn-raised {

            margin: -7px 0px 0px;
            border-radius: 6px;
            box-shadow: 0 16px 24px 2px rgba(0, 0, 0, 0.14), 0 6px 30px 5px rgba(0, 0, 0, 0.12), 0 8px 10px -5px rgba(0, 0, 0, 0.2);

        }

        .glyphicon{
            display: inline-block;
            font: normal normal normal 14px/1 FontAwesome;
            font-size: inherit;
            text-rendering: auto;
            -webkit-font-smoothing: antialiased;
            -moz-osx-font-smoothing: grayscale;
        }
        .glyphicon-chevron-left:before{
            content:"\f053"
        }
        .glyphicon-chevron-right:before{
            content:"\f054"
        }




    </style>

</head>
<body>
<!-- HEADER -->
<header id="home" class="navbar-fixed-top">
    <!-- TOP HEADER -->
    <div class="header_top_menu clearfix">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-md-offset-3 col-sm-12 text-right">
                    <div class="call_us_text">
                        <a href=""><i class="fa fa-clock-o"></i> ouvert 24/7</a>
                        <a href=""><i class="fa fa-phone"></i>71500200</a>
                    </div>
                </div>
                <ul class="header-links pull-right">
                    <li><?php
                        include "db.php";
                        if(isset($_SESSION["uid"])){
                            $sql = "SELECT first_name FROM user_info WHERE user_id='$_SESSION[uid]'";
                            $query = mysqli_query($con,$sql);
                            $row=mysqli_fetch_array($query);

                            echo '
                               <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> HI '.$row["first_name"].'</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#profile"><i class="fa fa-user-circle" aria-hidden="true" ></i>My Profile</a>
                                    <a href="logout.php"  ><i class="fa fa-sign-in" aria-hidden="true"></i>Log out</a>
                                    
                                  </div>
                                </div>';

                        }else{
                            echo '
                                <div class="dropdownn">
                                  <a href="#" class="dropdownn" data-toggle="modal" data-target="#myModal" ><i class="fa fa-user-o"></i> My Account</a>
                                  <div class="dropdownn-content">
                                    <a href="" data-toggle="modal" data-target="#Modal_login"><i class="fa fa-sign-in" aria-hidden="true" ></i>Login</a>
                                    <a href="" data-toggle="modal" data-target="#Modal_register"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a>
                                    
                                  </div>
                                </div>';

                        }
                        ?>

                    </li>
                </ul>
            </div>
        </div>

    </div>
    <!-- /TOP HEADER -->



    <!-- MAIN HEADER -->
    <div class="main_menu_bg">
        <div class="container">
            <div class="row">
                <nav class="navbar navbar-default">
                    <div class="container-fluid">
                        <!-- Brand and toggle get grouped for better mobile display -->
                        <div class="navbar-header">
                            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                                <span class="sr-only">Toggle navigation</span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>
                            <a class="navbar-brand our_logo" href="index.php"><img src="assets/images/logo.png" alt="" /></a>
                        </div>
                        <!-- /LOGO -->

                        <!-- SEARCH BAR -->
                        <!-- Collect the nav links, forms, and other content for toggling -->
                        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                            <ul class="nav navbar-nav navbar-right">
                                <li><a href="#slider">acceuil</a></li>
                                <li><a href="#abouts">A Propos</a></li>
                                <li><a href="#features">composition</a></li>
                                <li><a href="#portfolio">produits</a></li>
                                <li><a href="#ourPakeg">Menu</a></li>
                                <li><a href="#mobaileapps">Pages</a></li>
                                <!-- /SEARCH BAR -->
                                <li class="header-ctn">
                                    <!-- ACCOUNT -->
                                    <!-- Cart -->
                                    <div class="dropdown">
                                        <a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
                                            <i class="fa fa-shopping-cart"></i>
                                            <span>Votre Panier</span>
                                            <div class="badge qty">0</div>
                                        </a>
                                        <div class="cart-dropdown"  >
                                            <div class="cart-list" id="cart_product">


                                            </div>

                                            <div class="cart-btns">
                                                <a href="cart.php" style="width:100%;"><i class="fa fa-edit"></i>  editer Panier</a>

                                            </div>
                                        </div>

                                    </div>
                                </li>
                            </ul>
                            <!-- /Cart -->
                        </div>
                    </div>
            </div>
            </nav>
        </div>
        <!-- /ACCOUNT -->
    </div>
    <!-- row -->
    </div>
    <!-- container -->

    <!-- /MAIN HEADER -->
</header>
<!-- /HEADER -->


<!-- NAVIGATION -->

<div class="modal fade" id="Modal_login" role="dialog">
    <div class="modal-dialog">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include "login_form.php";

                ?>

            </div>

        </div>

    </div>
</div>
<div class="modal fade" id="Modal_register" role="dialog">
    <div class="modal-dialog" style="">

        <!-- Modal content-->
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>

            </div>
            <div class="modal-body">
                <?php
                include "register_form.php";

                ?>

            </div>

        </div>

    </div>
</div>


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

<section id="footer_widget" class="footer_widget">
    <div class="container">
        <div class="row">
            <div class="footer_widget_content text-center">
                <div class="col-md-4">
                    <div class="single_widget wow fadeIn" data-wow-duration="2s">
                        <h3>Notre localisation</h3>

                        <div class="single_widget_info">
                            <p>112-Route montfleuris, Manar.

                                <span>25-Rue des oranges, Lac 2 </span>
                                <span class="phone_email">Téléphone: 71 500 200</span>
                                <span>Email: Diningdelight@commande.tn</span></p>
                        </div>

                        <div class="footer_socail_icon">
                            <a href=""><i class="fa fa-facebook"></i></a>
                            <a href=""><i class="fa fa-google-plus"></i></a>
                            <a href=""><i class="fa fa-twitter"></i></a>
                            <a href=""><i class="fa fa-linkedin"></i></a>
                            <a href=""><i class="fa fa-pinterest-p"></i></a>
                            <a href=""><i class="fa fa-youtube"></i></a>
                            <a href=""><i class="fa fa-phone"></i></a>
                            <a href=""><i class="fa fa-camera"></i></a>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single_widget wow fadeIn" data-wow-duration="4s">
                        <h3>Heure de travail</h3>

                        <div class="single_widget_info">
                            <p><span class="date_day">Du lundi au Vendredi</span>
                                <span>8:00am to 10:00pm(Petit déjeuner)</span>
                                <span>11:00am to 10:00pm(Déjeuner/Diner)</span>

                                <span class="date_day">Saturday & Sunday</span>
                                <span>10:00am to 11:00pm(Brunch)</span>
                                <span>11:00am to 12:00pm(Déjeuner/Dinner)</span></p>
                        </div>
                    </div>
                </div>

                <div class="col-md-4">
                    <div class="single_widget wow fadeIn" data-wow-duration="5s">
                        <h3>Réclamation ou question</h3>

                        <div class="single_widget_form text-left">
                            <form action="#" id="formid">
                                <div class="form-group">
                                    <input type="text" class="form-control" name="name" placeholder="first name" required="">
                                </div>

                                <div class="form-group">
                                    <input type="email" class="form-control" name="email" placeholder="Email" required="">
                                </div>

                                <div class="form-group">
                                    <input type="text" class="form-control" placeholder="Subject">
                                </div> <!-- end of form-group -->

                                <div class="form-group">
                                    <textarea class="form-control" name="message" rows="3" placeholder="Message"></textarea>
                                </div>

                                <input type="submit" value="Submit" class="btn btn-primary">
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>



<!--Footer-->
<footer id="footer" class="footer">
    <div class="container text-center">
        <div class="row">
            <div class="col-sm-12">
                <div class="copyright wow zoomIn" data-wow-duration="3s">
                    <p>Made with <i class="fa fa-heart"></i> by <a href="http://bootstrapthemes.co">Dining Delight Team</a>2021. All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>

<div class="scrollup">
    <a href="#"><i class="fa fa-chevron-up"></i></a>
</div>

<script src="assets/js/vendor/jquery-1.11.2.min.js"></script>


<script src="assets/js/jquery-easing/jquery.easing.1.3.js"></script>
<script src="assets/js/wow/wow.min.js"></script>
<script src="assets/js/plugins.js"></script>
<script src="assets/js/main.js"></script>

<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/slick.min.js"></script>
<script src="js/nouislider.min.js"></script>
<script src="js/jquery.zoom.min.js"></script>
<script src="js/main.js"></script>
<script src="js/actions.js"></script>
<script src="js/sweetalert.min"></script>
<script src="js/jquery.payform.min.js" charset="utf-8"></script>
<script src="js/script.js"></script>
<script>var c = 0;
    function menu(){
        if(c % 2 == 0) {
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu active";
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg active";
            c++;
        }else{
            document.querySelector('.cont_drobpdown_menu').className = "cont_drobpdown_menu disable";
            document.querySelector('.cont_icon_trg').className = "cont_icon_trg disable";
            c++;
        }
    }


</script>
<script type="text/javascript">
    $('.block2-btn-addcart').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to cart !", "success");
        });
    });

    $('.block2-btn-addwishlist').each(function(){
        var nameProduct = $(this).parent().parent().parent().find('.block2-name').html();
        $(this).on('click', function(){
            swal(nameProduct, "is added to wishlist !", "success");
        });
    });
</script>
</body>
</html>


		
		