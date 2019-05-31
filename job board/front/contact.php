<?php 
include 'navbar2.php';
?>


<div id="google-map"></div>


<section id="content">
<div class="container">
<div class="row">
<div class="col-md-4">
<h2 class="medium-title">
Contact Us
</h2>
<div class="information">
<div class="contact-datails">
<div class="icon">
<i class="ti-location-pin"></i>
</div> -->
<div class="info">
<h3>Address</h3>
<span class="detail">Main Office: NO.22-23 Street Al Hajal- Antelias,Lebanon</span>
</div>
</div> 
<div class="contact-datails">
<div class="icon">
<i class="ti-mobile"></i>
</div>
<div class="info">
<h3>Phone Numbers</h3>
<span class="detail">Main Office: +961  71 456 456</span>
<span class="datail">Customer Supprort: +961 70 300 301 </span>
</div>
</div>
<div class="contact-datails">
<div class="icon">
<i class="ti-location-arrow"></i>
</div>
<div class="info">
<h3>Email Address</h3>
<span class="detail">Customer or Technical 
Support: <a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="d7beb9b1b897bab6bebbf9b4b8ba">hr.cus@live.com</a></span>
</div>
</div>
</div>
</div>
<div class="col-md-8">
<h2 class="medium-title" style = "margin-left:30px;">
Important notice</h2>
<p style="margin-left:30px;">
This website follows all the rules and regulations of the lebanese laws regarding online information sharing, therefore we are not responsible for any misinformation that may occur for both job seekers or companies, and those who violate the law are liable to prosecution by the lebanese government.  
</p>
</section>


<?php
include 'footer.php';
?>


<a href="#" class="back-to-top">
<i class="ti-arrow-up"></i>
</a>
<div id="loading">
<div id="loading-center">
<div id="loading-center-absolute">
<div class="object" id="object_one"></div>
<div class="object" id="object_two"></div>
<div class="object" id="object_three"></div>
<div class="object" id="object_four"></div>
<div class="object" id="object_five"></div>
<div class="object" id="object_six"></div>
<div class="object" id="object_seven"></div>
<div class="object" id="object_eight"></div>
</div>
</div>
</div>

<script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script type="text/javascript" src="assets/js/jquery-min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/material.min.js"></script>
<script type="text/javascript" src="assets/js/material-kit.js"></script>
<script type="text/javascript" src="assets/js/color-switcher.js"></script>
<script type="text/javascript" src="assets/js/jquery.parallax.js"></script>
<script type="text/javascript" src="assets/js/owl.carousel.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.slicknav.js"></script>
<script type="text/javascript" src="assets/js/main.js"></script>
<script type="text/javascript" src="assets/js/jquery.counterup.min.js"></script>
<script type="text/javascript" src="assets/js/waypoints.min.js"></script>
<script type="text/javascript" src="assets/js/jasny-bootstrap.min.js"></script>
<script type="text/javascript" src="assets/js/bootstrap-select.min.js"></script>
<script type="text/javascript" src="assets/js/form-validator.min.js"></script>
<script type="text/javascript" src="assets/js/contact-form-script.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.revolution.min.js"></script>
<script type="text/javascript" src="assets/js/jquery.themepunch.tools.min.js"></script>

<style>
      #google-map,
      body,
      html {
        padding: 0;
        height: 460px;
      }
    </style>

<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyAHo_WtZ2nIYCgCLf7sINZaqcrpqSDio9o"></script>

<script type="text/javascript">
      var map;
      var defult = new google.maps.LatLng(23.749574, 90.396594,15);
      var mapCoordinates = new google.maps.LatLng(23.749574, 90.396594,15); 
      
      var markers = [];
      var image = new google.maps.MarkerImage(
        'assets/img/map-marker.png',
        new google.maps.Size(84, 70),
        new google.maps.Point(0, 0),
        new google.maps.Point(60, 60)
      );
      
      function addMarker() {
        markers.push(new google.maps.Marker({
          position: defult,
          raiseOnDrag: false,
          icon: image,
          map: map,
          draggable: false
        }
      ));
        
      }
      
      function initialize() {
        var mapOptions = {
          backgroundColor: "#ffffff",
          zoom: 14,
          disableDefaultUI: true,
          center: mapCoordinates,
          zoomControl: false,
          scaleControl: false,
          scrollwheel: false,
          disableDoubleClickZoom: true,
          mapTypeId: google.maps.MapTypeId.ROADMAP,
          styles: [{
            "featureType": "landscape.natural",
            "elementType": "geometry.fill",
            "stylers": [{
              "color": "#ffffff"
            }
                       ]
          }
                   , {
                     "featureType": "landscape.man_made",
                     "stylers": [{
                       "color": "#ffffff"
                     }
                                 , {
                                   "visibility": "off"
                                 }
                                ]
                   }
                   , {
                     "featureType": "water",
                     "stylers": [{
                       "color": "#80C8E5"
                     }
                                 , {
                                   "saturation": 0
                                 }
                                ]
                   }
                   , {
                     "featureType": "road.arterial",
                     "elementType": "geometry",
                     "stylers": [{
                       "color": "#999999"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text.stroke",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#333333"
                     }
                                ]
                   }
                   
                   , {
                     "featureType": "road.local",
                     "stylers": [{
                       "color": "#dedede"
                     }
                                ]
                   }
                   , {
                     "featureType": "road.local",
                     "elementType": "labels.text",
                     "stylers": [{
                       "color": "#666666"
                     }
                                ]
                   }
                   , {
                     "featureType": "transit.station.bus",
                     "stylers": [{
                       "saturation": -57
                     }
                                ]
                   }
                   , {
                     "featureType": "road.highway",
                     "elementType": "labels.icon",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   , {
                     "featureType": "poi",
                     "stylers": [{
                       "visibility": "off"
                     }
                                ]
                   }
                   
                  ]
          
        }
            ;
        map = new google.maps.Map(document.getElementById('google-map'), mapOptions);
        addMarker();
        
      }
      google.maps.event.addDomListener(window, 'load', initialize);
    </script>
</body>
</html>
