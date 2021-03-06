<!DOCTYPE HTML>
<html>
<head>
    <?php include 'title.html'; ?> 
    <link rel="stylesheet" type="text/css" href="style.css" />
		<!-- <script src="modernizr.js"></script> --> 
		<script src="http://code.jquery.com/jquery-1.4.3.min.js"></script>

<script src="http://maps.google.com/maps/api/js?sensor=false" type="text/javascript"></script>
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

    <!--[if lt IE 9]>
    <script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
    <![endif]-->		


</head>
<body onload="TestGeo();">
  <!-- Defining Header -->
  <header>
    <!--#include virtual="header.html" --> 
  </header>
  <!-- Defining Navigation -->
  <nav>
    <?php include 'menu.html'; ?> 
  </nav>

  <div id="content">
  <div id="mcontent" style="width:70%">
  <!-- Defining Header for content section -->
  <header>
  <h2>Geo Location</h2>
  </header>


<div id="map_canvas" style="position:relative; width: 500px; height: 300px; border-right: 1px solid #666666; border-bottom: 1px solid #666666; border-top: 1px solid #AAAAAA; border-left: 1px solid #AAAAAA;"></div>

	</div>
  <!-- Defining Sidebar / Aside -->
  <aside>
    <section>
       <ul>
         <li><a href="index.php">Home</a></li>
       </ul>
    </section>
  </aside>
	</div>
	<div style="height:50px"></div>
  <footer>
    <?php include 'footer.html'; ?> 
  </footer>
</body>
</html>