<!DOCTYPE html>
<!--[if lt IE 7 ]> <html class="ie ie6 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 lte9 lte8 lte7 no-js"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 lte9 lte8 no-js"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 lte9 no-js"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> <html class="notie no-js"> <!--<![endif]-->
	<head>
    <?php include 'title.html'; ?> 
    <link rel="stylesheet" type="text/css" href="style.css" />
		<script src="modernizr.js"></script> 
		<script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>
		
<script type="text/javascript">

function TestGeo()
    {
         if (navigator.geolocation) 
            {
              navigator.geolocation.getCurrentPosition( TestMap, error, {maximumAge: 30000, timeout: 10000, enableHighAccuracy: true} );
        }
        else
        {
              alert("Sorry, but it looks like your browser does not support geolocation.");
        }
    }
	
	var map;
     function TestMap(position)
     {
           // Define the coordinates as a Google Maps LatLng Object
           var coords = new google.maps.LatLng(position.coords.latitude, position.coords.longitude);

           // Prepare the map options
           var mapOptions =
          {
                      zoom: 10,
                      center: coords,
                      mapTypeControl: false,
                      navigationControlOptions: {style: google.maps.NavigationControlStyle.SMALL},
                      mapTypeId: google.maps.MapTypeId.ROADMAP
            };

            // Create the map, and place it in the map_canvas div
            map = new google.maps.Map(document.getElementById("map_canvas"), mapOptions);

            // Place the initial marker
            var marker = new google.maps.Marker({
                      position: coords,
                      map: map,
                      title: "Your current location!"
            });
        }
	
function error() {
		alert("Cannot locate user");
		}


		

</script>
	</head>
	<body onload="TestGeo();">
  <!-- Defining Header -->
  <header>
    <?php include 'header.html'; ?> 
  </header>
  <!-- Defining Navigation -->
  <nav>
    <?php include 'menu.html'; ?> 
  </nav>
  <div id="content">
  <div id="mcontent">
  <!-- Defining Header for content section -->
  <header>
  <h2>Geo Location</h2>
  </header>
  <!-- Defining Content Section -->
  <section>
  <!-- Defining content section article -->

    <div id="map_canvas" style="width: 400px; height: 200px; border-right: 1px solid #666666; border-bottom: 1px solid #666666; border-top: 1px solid #AAAAAA; border-left: 1px solid #AAAAAA;"></div>

    <article class="bpage">
      <div>
			
      </div>
    <div class="image">
    </div>
    </article>
  </section>
	</div>
  <!-- Defining Sidebar / Aside -->
  <aside>
    <section>
       <?php include 'sidebar.html'; ?> 
    </section>
  </aside>
  </div>
  <!-- Defining Footer -->
  <footer>
    <?php include 'footer.html'; ?> 
  </footer>
	</body>
</html>