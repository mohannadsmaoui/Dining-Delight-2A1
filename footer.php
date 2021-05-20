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

