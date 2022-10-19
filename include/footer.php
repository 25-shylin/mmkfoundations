 <!--footer-main-->
        <footer class="footer-main">
            <div class="footer-top">
                <div class="container">
                    <div class="row justify-content-between">
                        <div class="col-lg-4 mb-5 mb-lg-0">
                            <div class="about-widget">
                                <div class="footer-logo">
                                    <figure>
                                        <a href="index.php">
                                            <img loading="lazy" class="img-fluid" src="images/footer-logo.png" alt="medic">
                                        </a>
                                    </figure>
                                </div>

                                <ul class="location-link">
                                    <li class="item">
                                        <i class="fas fa-map-marker-alt"></i>
                                        <p>D.No 632, <br>Kattukottai, Manivilundan South,<br> Manivilundan, Vadachennimalai Post,<br> Attur Taluk,<br> Salem District – 636121</p>
                                    </li>
                                    <li class="item">
                                        <i class="far fa-envelope" aria-hidden="true"></i>
                                        <a href="mailto:director@mmkfoundation.org">
                                            <p>director@mmkfoundation.org</p>
                                        </a>
                                    </li>
                                    <li class="item">
                                        <i class="fas fa-phone" aria-hidden="true"></i>
                                        <p>04282 - 251797 </p>
                                    </li>
                                </ul>
                                <ul class="list-inline social-icons">
                                    <li class="list-inline-item"><a href="https://www.facebook.com/MMK-Foundation-101077255894364/" aria-label="facebook"><i class="fab fa-facebook-f"></i></a></li>
                                    <li class="list-inline-item"><a href="https://twitter.com/foundation_mmk" aria-label="twitter"><i class="fab fa-twitter"></i></a></li>
                                    <li class="list-inline-item"><a href="https://www.instagram.com/mmk_ngo/" aria-label="instagram"><i class="fab fa-instagram"></i></a></li>
                                    <li class="list-inline-item"><a href="#" aria-label="github"><i class="fab fa-github"></i></a></li>
                                </ul>
                            </div>
                        </div>
                        <div class="col-lg-3 col-md-5 mb-3 mb-md-0">
                            <h2>Services</h2>
                            <ul class="menu-link">


                                <li>
                                    <a href="index.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Home</a>
                                </li>
                                <li>
                                    <a href="aboutus.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>About Us</a>
                                </li>
                                <li>
                                    <a href="education.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Education</a>
                                </li>
                                <!-- <li>
                                    <a href="index.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Impact</a>
                                </li> -->
                                <li>
                                    <a href="individuals.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Individuals</a>
                                </li>
                                <li>
                                    <a href="covid-19.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Covid-19</a>
                                </li>
                                <li>
                                    <a href="testimonial.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Testimonial</a>
                                </li>
                                <li>
                                    <a href="contactus.php">
                                        <i class="fa fa-angle-right" aria-hidden="true"></i>Contact Us</a>
                                </li>
                            </ul>

                        </div>
                        <div class="col-lg-4 col-md-7">
                            <div class="social-links">
                                <h2>Our Gallery</h2>
                                <ul>
                                    <?php 
                                   
                              $galleryquery = "select * from gallery ORDER BY galleryid DESC LIMIT 3";
                              $rungalleryquery = mysqli_query($con,$galleryquery);
                               $serialNum = 1;
                               while ($rowgalleryquery = mysqli_fetch_array($rungalleryquery)) {
                                $serialNumber = $serialNum++;
                                $galleryid = $rowgalleryquery['galleryid'];
                                $tag = $rowgalleryquery['tag'];
                                $title = $rowgalleryquery['title'];
                                $galleryphoto = $rowgalleryquery['galleryphoto'];
                                $description = $rowgalleryquery['description'];
                                $createdate = $rowgalleryquery['createdate'];
                                $modifydate = $rowgalleryquery['modifydate'];
                                $status = $rowgalleryquery['status'];
                                $phpdate = strtotime( $createdate );
                                $date1 = date('d-m-y', $phpdate);

                                /*$modifydate = $rowgalleryquery['modifydate'];*/
                                /*$phpmodDate = strtotime( $modDate );
                                $modDate1 = date('d-m-y', $phpmodDate);*/
                           ?>  
                                    <li class="item">
                                        <div class="media">
                                            <div class="media-left mr-3">
                                                <a href="gallery.php">
                                                    <img loading="lazy" src="galleryphoto/<?= $galleryphoto ?>" alt="post-thumb">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="gallery.php"><?= $tag ?></a></h5>
                                                <p><?= $description ?></p>
                                            </div>
                                        </div>
                                    </li>
                                <?php } ?>
                                    <!-- <li class="item">
                                        <div class="media">
                                            <div class="media-left mr-3">
                                                <a href="health.php">
                                                    <img loading="lazy" src="images/f2.png" alt="post-thumb">
                                                </a>
                                            </div>
                                            <div class="media-body">
                                                <h5><a href="health.php">Health</a></h5>
                                                <p>Since independence, India has made remarkable progress in the health sector. </p>
                                            </div>
                                        </div>
                                    </li> -->
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="footer-bottom">
                <div class="container clearfix">
                    <div class="copyright-text">
                        <p>&copy; Copyright 2022. Designed &amp; Developed by <a href="#">Sastha Webrivers</a></p>
                    </div>
                    <ul class="footer-bottom-link">
                        <!-- <li>
                            <a href="women-empowerment.php">Women Empowerment</a>
                        </li> -->
                        <li>
                            <a href="terms-and-conditions.php">Terms and Conditions</a>
                        </li>
                        <li>
                            <a href="privacy-policy.php">Privacy Policy</a>
                        </li>
                    </ul>
                </div>
            </div>
        </footer>
        <!--End footer-main-->

        <!-- scroll-to-top -->
        <div id="back-to-top" class="back-to-top">
            <i class="fa fa-angle-up"></i>
        </div>

    </div>
    <!--End pagewrapper-->


    <!--Scroll to top-->
    <div class="scroll-to-top scroll-to-target" data-target=".header-top">
        <span class="icon fa fa-angle-up"></span>
    </div>


    <!-- jquery -->
    <script src="plugins/jquery.min.js"></script>
    <!-- bootstrap -->
    <script src="plugins/bootstrap/bootstrap.min.js"></script>
    <!-- Slick Slider -->
    <script src="plugins/slick/slick.min.js"></script>
    <script src="plugins/slick/slick-animation.min.js"></script>
    <!-- FancyBox -->
    <script src="plugins/fancybox/jquery.fancybox.min.js" defer></script>
    <!-- Google Map -->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCcABaamniA6OL5YvYSpB3pFMNrXwXnLwU" defer></script>
    <script src="plugins/google-map/gmap.js" defer></script>

    <!-- jquery-ui -->
    <script src="plugins/jquery-ui/jquery-ui.js" defer></script>
    <!-- timePicker -->
    <script src="plugins/timePicker/timePicker.js" defer></script>

    <!-- script js -->
    <script src="js/script.js"></script>
    <script>
          function showOnChange(e) {
            var elem = document.getElementById("slct");
            var value = elem.options[elem.selectedIndex].value;
            if(value == "Mission Education")
              {
                document.getElementById('Mission Education').style.display = "block";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
              }
           else if(value == "MMK (livelihood)")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "block";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
             }
             else if(value == "MMK On wheel")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "block";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
             }

            
           else if(value == "Corporate Partnership")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "block";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
             }
           else if(value == "Alliances")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "block";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
             }
          else if(value == "Individual Partnership")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "block";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
             }
           else if(value == "Communication")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "block";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
             }
          else if(value == "Information Technology")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "block";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "none";
             }
          else if(value == "Finance")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "block";
                document.getElementById('Human Resource').style.display = "none";
             }
          else if(value == "Human Resource")
             {
                document.getElementById('Mission Education').style.display = "none";
                document.getElementById('MMK (livelihood)').style.display = "none";
                document.getElementById('MMK On wheel').style.display = "none";
                document.getElementById('Corporate Partnership').style.display = "none";
                document.getElementById('Alliances').style.display = "none";
                document.getElementById('Individual Partnership').style.display = "none";
                document.getElementById('Communication').style.display = "none";
                document.getElementById('Information Technology').style.display = "none";
                document.getElementById('Finance').style.display = "none";
                document.getElementById('Human Resource').style.display = "block";
             }


          }
        </script>
    
</body>


</html>