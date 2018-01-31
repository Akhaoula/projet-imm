<!doctype html>
<html class="no-js">
    
    <?php include("cld/header.php"); ?>

			<!-- Page Header Section Start Here -->
			<div class="page-header-area">
			    <div class="container">
			        <div class="row">
			            <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
			                <div class="header-page">
			                    <h1>Contact Us</h1>
			                    <ul>
			                        <li> <a href="index.html">Home</a> </li>
			                        <li>Contact Us</li>
			                    </ul>
			                </div>
			            </div>
			        </div>
			    </div>
			</div>
			<!-- Page Header Section End Here -->
			<!-- Main Contact Page Section Area start here-->
		      <!-- Contact Form Page start Here -->
		       <div class="main-conatct-form-area">
		        <div class="container">
		        	<div class="google-map-area">
		        	  <div id="googleMap" style="width:100%;height:380px;"></div>
		        	</div>

				  <div class="contact-text">
				    <h3>Feel Free To Drop Us A Line To Contact Us</h3>
				    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dolore, optio. Ipsa, fugit earum dolorem delectus expedita magni quasi amet sed, eligendi dolore officia id tenetur placeat esse odit hic quidem.</p>
				  </div>

		          <div class="row">
		            <div class="col-lg-9 col-md-9 col-sm-9 col-xs-12">
		            	<!-- Google Map Integrate Start Here -->
		            	<!-- Google Map Integrate End Here -->
		                <div class="main-contact-form">                   
		                  <form>
		                    <fieldset>
		                    <div class="col-sm-6">
		                      <div class="form-group">
		                        <input type="text" class="form-control" placeholder="Name*">
		                      </div>
		                    </div>
		                    <div class="col-sm-6">
		                      <div class="form-group">
		                        <input type="email" class="form-control" placeholder="Email*">
		                      </div>
		                    </div>
		                    <div class="col-sm-12">
		                      <div class="form-group">
		                        <textarea cols="40" rows="10" class="textarea form-control" placeholder="Your Message"></textarea>
		                      </div>
		                    </div>
		                    <div class="col-sm-12">
		                      <div class="form-group">
		                        <button class="btn-send" type="submit">Send Message</button>
		                      </div>
		                    </div>
		                    </fieldset>
		                  </form>
		                </div>
		            </div>            
		            <div class="col-lg-3 col-md-3 col-sm-3 col-xs-12">
		              <div class="page-sidebar-area">
		                <div class="single-sidebar">
		                  <h3>Contact Info</h3>
		              <nav>
		                <ul>
		                  <li><i class="fa fa-paper-plane-o" aria-hidden="true"></i> 44 Kumarkhali, Kushtia 005</li>
		                  <li><i class="fa fa-phone" aria-hidden="true"></i> (007) 000-1232-54165</li>
		                  <li><i class="fa fa-envelope-o" aria-hidden="true"></i> info@hexo.com</li>
		                  <li><i class="fa fa-fax" aria-hidden="true"></i> Fax: (123) 489 45465</li>
		                </ul>
		              </nav>
		                </div>
		              </div>
		            </div>
		          </div>
		        </div>
		       </div>
		       <!-- Contact Form Page start Here -->


			<?php include("cld/footer.php"); ?>
			
        <script>
            /*-----------------------------------
            Google Map activation Code
            ------------------------------------*/
            equalHeight();
             $(window).load(equalHeight);
             $(window).resize(equalHeight);

             function equalHeight(){
                 var windowWidth = $( window ).width();
                 //console.log(windowWidth);
                 if( windowWidth >= 768 ){
                     var $h = 0;
                     $(".home-service-area .single-service-area").height('auto');
                     $(".home-service-area .single-service-area").each(function(){
                         var thisHeight = $(this).outerHeight();
                         if(thisHeight > $h){
                             $h = thisHeight;
                         }
                     });

                     $(".home-service-area .single-service-area").height($h+'px');
                 }else{
                     $(".home-service-area .single-service-area").height('auto');
                 }
             }

             if($("#googleMap").length){
                 function initialize() {
                 var mapOptions = {
                 zoom: 15,
                 scrollwheel: false,
                 center: new google.maps.LatLng(-37.81618, 144.95692)
                 };

                 var map = new google.maps.Map(document.getElementById('googleMap'),
                   mapOptions);


                 var marker = new google.maps.Marker({
                 position: map.getCenter(),
                 animation:google.maps.Animation.BOUNCE,
                 icon: 'img/map-marker.png',
                 map: map
                 });

                 }

                 google.maps.event.addDomListener(window, 'load', initialize);
             } 
        </script>
    </body>
</html>
