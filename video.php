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
    if (Modernizr.video) {
         /* properties for browsers that
         support video */
    }else{
         /* properties for browsers that
         does not support video */
    }
    </script>

    <style>
  
  	.no-video #play {
     display: none; /* Don't show Audio options */
    }
    .video #play button {
      width:40px;
      height:20px;
    }

		.video #no-html5 {
      display: none; 
    }
	
    </style>		

		
	</head>
	<body>
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
  <h2>Video Example</h2>
  </header>
  <!-- Defining Content Section -->
  <section>
  <!-- Defining content section article -->

    <div id="play">
      <h3> Simple Player:</h3>
      <div id="videoContainer" style="width:500px;height:300px;">
        <video id="vid1" width="480" height="267" 
         poster="http://cdn.kaltura.org/apis/html5lib/kplayer-examples/media/bbb480.jpg"
         durationHint="33" controls>    
          <source type="video/webm" src="http://cdn.kaltura.org/apis/html5lib/kplayer-examples/media/bbb_trailer_360p.webm?a" />
          <source  src="http://cdn.kaltura.org/apis/html5lib/kplayer-examples/media/bbb_trailer_iphone270P.m4v"/>
          <source src="http://cdn.kaltura.org/apis/html5lib/kplayer-examples/media/bbb_trailer_400p.ogv" />
					<!-- IE does not execut this fallback, so I added the no-html5 div --> 
          <embed src="http://blip.tv/play/gcMVgcmBAgA%2Em4v" type="application/x-shockwave-flash" width="500" height="300" allowscriptaccess="always" allowfullscreen="true"></embed>  					
        </video>
      </div>
    </div>	
		
    <div id="no-html5">
		      <p>HTML5 video not supported</p>
          <embed src="http://blip.tv/play/gcMVgcmBAgA%2Em4v" type="application/x-shockwave-flash" width="500" height="300" allowscriptaccess="always" allowfullscreen="true"></embed>  					
    </div>		
			

    <article class="bpage">
      <div>
			
      </div>
    <div class="image">
    </div>
    </article>
  </section></div>
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