    <!--=================================*
                  Footer Section
    *===================================-->
    <footer>
        <div class="footer-area">
            <p>&copy; Copyright 2022. All right reserved. Powered by : SHASTHA WEBRIVERS</p>
        </div>
    </footer>
    <!--=================================*
                End Footer Section
    *===================================-->

</div>
<!--=========================*
        End Page Container
*===========================-->


<!--=========================*
            Scripts
*===========================-->

<!-- Jquery Js -->
<script src="assets/js/jquery.min.js"></script>
<!-- bootstrap 4 js -->
<script src="assets/js/popper.min.js"></script>
<script src="assets/js/bootstrap.min.js"></script>
<!-- Owl Carousel Js -->
<script src="assets/js/owl.carousel.min.js"></script>
<!-- Metis Menu Js -->
<script src="assets/js/metisMenu.min.js"></script>
<!-- SlimScroll Js -->
<script src="assets/js/jquery.slimscroll.min.js"></script>
<!-- Slick Nav -->
<script src="assets/js/jquery.slicknav.min.js"></script>
<!-- Data Table js -->
<script src="assets/vendors/data-table/js/jquery.dataTables.js"></script>
<script src="assets/vendors/data-table/js/jquery.dataTables.min.js"></script>
<script src="assets/vendors/data-table/js/dataTables.bootstrap4.min.js"></script>
<script src="assets/vendors/data-table/js/dataTables.responsive.min.js"></script>
<script src="assets/vendors/data-table/js/responsive.bootstrap.min.js"></script>

<!-- Data table Init -->
<script src="assets/js/init/data-table.js"></script>

<!-- Main Js -->
<script src="assets/js/main.js"></script>

<!--=========================*
        FullCalendar
*===========================-->
<!-- jQuery UI 1.11.4 -->
<script src="assets/vendors/jquery-ui/jquery-ui.min.js"></script>
<script src="assets/vendors/moment/moment.js"></script>
<script src="assets/vendors/fullcalendar/dist/fullcalendar.min.js"></script>

<!-- Calendar Init -->
<script src="assets/js/init/full-calendar.js"></script>

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
