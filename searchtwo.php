<?php

    include('includes/header.php');
?>



    <!--====== BLOG STANDARD PART START ======-->
         
    <div class="blog-standard-area pt-90 pb-120">
        <br>
        <br>
        <br>
        <div class="container">
            <div class="row justify-content-center">

                <div class="col-lg-8">
                    <div class="blog-standard">
                        <?php
                            if (isset($_POST['submit-search'])) {
                            	$search = mysqli_real_escape_string($conn, $_POST['search']);
                            	 $sql = "SELECT * FROM digitalsupport WHERE i_head LIKE '%$search%' OR i_title LIKE '%$search%' OR i_text LIKE '%$search%'";
                            	 $result = mysqli_query($conn, $sql);
                            	 $queryResults = mysqli_num_rows($result);

                            	 echo "<br><h3>There are ".$queryResults." results!</h3>";

                            	 if ($queryResults > 0) {
                            	 	while ($row = mysqli_fetch_assoc($result)) {
                            	 		echo "
	                                        <div class='single-blog-standard mt-30'>
		                                        <div class='blog-standard-thumb'>
		                                            <img src='upload/".$row['i_image']."' alt='blog'>
		                                        </div>
		                                        <div class='blog-standard-content'>
		                                            <span>".$row['i_head']."</span>
		                                            <h2 class='title'>".$row['i_title']."</h2>
		                                            <p>".$row['i_text']."</p>
		                                            <div class='blog-flex'>
		                                                
		                                                <div class='blog-right'>
		                                                    <a href='".$row['i_link']."'><i class='fal fa-arrow-right'></i>Read More</a>
		                                                </div>
		                                            </div>
		                                        </div>
		                                    </div>";
                            	 	}
                            	 } else {
                            	 	echo "There are no results matching your search !";
                            	 }
                            }
                        ?>
                       
                	</div>
        		</div>
    		</div> 
    	</div>
    </div>

    <!--====== BLOG STANDARD PART ENDS ======-->



    <!--====== footer PART START ======-->

   <footer class="footer-area footer-area-2 footer-area-1 bg_cover" style="background-image: url(assets/images/footer-bg.jpg);">
        <div class="footer-overlay">
            <div class="container position-relative">
                <div class="row">
                    
                     <div class="col-lg-4 col-md-6">
                        <div class="widget-item-2 widget-item-2 mt-30">
                            <h4 class="title">London Office</h4>

                            <p>9-11 Gunnery Terrace, Woolwich Arsenal, London SE18 6SW</p>
                            <ul>
                                <li>Telephone - +44-203-290-8686</li>
                                <li>Mobile: +44 7957 143 856</li>
                            </ul>
                            
                        </div> <!-- widget item 3 -->
                        <div class="widget-item-2 widget-item-3 mt-30">
                            <h4 class="title">Lagos Office</h4>

                            <p>14A Apapa Lane, Dolphin Estate, Ikoyi, Lagos</p>
                           
                        </div> <!-- widget item 3 -->
                    </div>

                    <div class="col-lg-4 offset-lg-1 col-md-5">
                       <div class="widget-item-2 widget-item-2 mt-30">
                            <h4 class="title">Abuja Office</h4>

                            <p>Ground Floor, BOA Plaza, Independence Avenue,Central Business District, Abuja</p>
                            
                        </div> <!-- widget item 3 -->
                        <div class="widget-item-2 widget-item-3 mt-30">
                            <h4 class="title">Enugu Office</h4>

                            <p>22 Dental Avenue, Trans-Ekulu, Enugu</p>
                           
                        </div> <!-- widget item 3 -->
                    </div>
                    <div class="col-lg-3 col-md-7">
                        <div class="widget-item-1 mt-30">
                            <img src="assets/images/diro1logowhite.png" alt="">
                            <p>Let’s help set your business free..Contact us:</p>
                            <p>Telephone: <br>
                            +234-701-000-1002, +234-817-099-0775,<br>
                             Email: <br>
                            info@dirosystems.com, www.dirosystems.com</p>
                        </div> <!-- widget item 1 -->
                    </div>
                   
                </div> <!-- row -->

                <div class="row">
                    <div class="col-lg-12">
                        <div class="footer-copyright">
                            <p>Copyright By@ <span>DIRO SYSTEMS</span> - 2019</p>
                        </div> <!-- footer copyright -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>
    </footer>

    <!--====== footer PART ENDS ======-->

    <!--====== BACK TO TOP ======-->
    <div class="back-to-top back-to-top-2">
        <a href="">
            <i class="fas fa-arrow-up"></i>
        </a>
    </div>
    <!--====== BACK TO TOP ======-->



    <!--====== jquery js ======-->
    <script src="assets/js/vendor/modernizr-3.6.0.min.js"></script>
    <script src="assets/js/vendor/jquery-1.12.4.min.js"></script>

    <!--====== Bootstrap js ======-->
    <script src="assets/js/bootstrap.min.js"></script>
    <script src="assets/js/popper.min.js"></script>

    <!--====== Slick js ======-->
    <script src="assets/js/slick.min.js"></script>

    <!--====== Isotope js ======-->
    <script src="assets/js/isotope.pkgd.min.js"></script>

    <!--====== Images Loaded js ======-->
    <script src="assets/js/imagesloaded.pkgd.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.magnific-popup.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/jquery.counterup.min.js"></script>

    <!--====== Circle Progress js ======-->
    <script src="assets/js/circle-progress.min.js"></script>

    <!--====== ajax contact js ======-->
    <script src="assets/js/ajax-contact.js"></script>

    <!--====== Syotimer js ======-->
    <script src="assets/js/jquery.syotimer.min.js"></script>

    <!--====== Nice Select js ======-->
    <script src="assets/js/jquery.nice-select.min.js"></script>

    <!--====== wow js ======-->
    <script src="assets/js/wow.min.js"></script>

    <!--====== Magnific Popup js ======-->
    <script src="assets/js/waypoints.min.js"></script>

    <!--====== Main js ======-->
    <script src="assets/js/main.js"></script>

    <!--====== Search Js ======-->
    <script src="assets/js/search.js"></script>

</body>

</html>