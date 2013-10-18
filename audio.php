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
		<script type="text/javascript" src="audio-player/audio-player.js"></script>
		<script type="text/javascript">
			AudioPlayer.setup("http://localhost:8080/html5-dev/audio-player/player.swf", {
				width: 290
			});
		</script>    
		<script type="text/javascript">
    if (Modernizr.audio) {
         /* properties for browsers that
         support audio */
    }else{
         /* properties for browsers that
         does not support audio */
    }
    </script>

    <style>
  
  	.no-audio #music {
     display: none; /* Don't show Audio options */
    }
    .audio #music button {
      width:40px;
      height:20px;
    }
		.audio #no-jsplayer {
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
  <h2>Audio Example</h2>
	<!-- using http://wpaudioplayer.com/standalone/ for fall back-->
  </header>
  <!-- Defining Content Section -->
  <section>
  <!-- Defining content section article -->
	
	
    <div id="music">
        <audio id="player1" preload controls tabindex="0">
          <source type="audio/mpeg" src="audio-test1.mp3"/>
          <source type="audio/ogg" src="audio-test1_1.ogg"/>
       </audio>
    </div>		

    <div id="no-jsplayer">
		      <p>HTML5 audio not supported</p>
          <p id="audioplayer_1">Alternative content</p>
          		<script type="text/javascript">
          		AudioPlayer.embed("audioplayer_1", {soundFile: "http://localhost:8080/html5-dev/audio-test1.mp3"});
          		</script>
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