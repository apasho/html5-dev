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
      $(document).ready(function()
      { 
        if (Modernizr.websockets)
        {
          $("#web-sockets").html('Yes');
        } 
        else
        {
          $("#web-sockets").html('No');
        } 

        if (Modernizr.canvas)
        {
          $("#canvas").html('Yes');
        } 
        else
        {
          $("#canvas").html('No');
        } 

        if (Modernizr.canvastext)
        {
          $("#canvastext").html('Yes');
        } 
        else
        {
          $("#canvastext").html('No');
        } 

        if (Modernizr.geolocation)
        {
          $("#geolocation").html('Yes');
        } 
        else
        {
          $("#geolocation").html('No');
        } 

        if (Modernizr.crosswindowmessaging)
        {
          $("#crosswindowmessaging").html('Yes');
        } 
        else
        {
          $("#crosswindowmessaging").html('No');
        } 

        if (Modernizr.websqldatabase)
        {
          $("#sqldb").html('Yes');
        } 
        else
        {
          $("#sqldb").html('No');
        } 

        if (Modernizr.indexeddb)
        {
          $("#indexeddb").html('Yes');
        } 
        else
        {
          $("#indexeddb").html('No');
        } 
        if (Modernizr.hashchange)
        {
          $("#hashchange").html('Yes');
        } 
        else
        {
          $("#hashchange").html('No');
        } 

        if (Modernizr.historymanagement)
        {
          $("#historymanagement").html('Yes');
        } 
        else
        {
          $("#historymanagement").html('No');
        } 
				
        if (Modernizr.draganddrop)
        {
          $("#draganddrop").html('Yes');
        } 
        else
        {
          $("#draganddrop").html('No');
        } 
  
        if (Modernizr.rgba)
        {
          $("#rgba").html('Yes');
        } 
        else
        {
          $("#rgba").html('No');
        } 
  
        if (Modernizr.hsla)
        {
          $("#hsla").html('Yes');
        } 
        else
        {
          $("#hsla").html('No');
        } 
	
        if (Modernizr.multiplebgs)
        {
          $("#multiplebgs").html('Yes');
        } 
        else
        {
          $("#multiplebgs").html('No');
        } 
        if (Modernizr.video)
        {
          $("#video").html('Yes');
        } 
        else
        {
          $("#video").html('No');
        } 
        if (Modernizr.audio)
        {
          $("#audio").html('Yes');
        } 
        else
        {
          $("#audio").html('No');
        } 
	
        if (Modernizr.localstorage)
        {
          $("#localstorage").html('Yes');
        } 
        else
        {
          $("#localstorage").html('No');
        } 

        if (Modernizr.sessionstorage)
        {
          $("#sessionstorage").html('Yes');
        } 
        else
        {
          $("#sessionstorage").html('No');
        } 

        if (Modernizr.webworkers)
        {
          $("#webworkers").html('Yes');
        } 
        else
        {
          $("#webworkers").html('No');
        } 

        if (Modernizr.applicationcache)
        {
          $("#applicationcache").html('Yes');
        } 
        else
        {
          $("#applicationcache").html('No');
        } 

        if (Modernizr.svg)
        {
          $("#svg").html('Yes');
        } 
        else
        {
          $("#svg").html('No');
        } 
        if (Modernizr.smil)
        {
          $("#smil").html('Yes');
        } 
        else
        {
          $("#smil").html('No');
        } 

        if (Modernizr.svgclippaths)
        {
          $("#svgclippaths").html('Yes');
        } 
        else
        {
          $("#svgclippaths").html('No');
        } 
				
      });
    </script>
		
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
  <h2>Using Modernizr to detect HTML5 capabilities</h2>
  </header>
  <!-- Defining Content Section -->
  <section>
  <!-- Defining content section article -->
	
	  <p><strong>HTML5 Features</strong></p> 
		<p>Audio support? <span id="audio"></span></p>
		<p>Canvas support? <span id="canvas"></span></p>
		<p>Canvas Text support? <span id="canvastext"></span></p>
		<p>Cross Window Messaging support? <span id="crosswindowmessaging"></span></p>
		<p>Drag and Drop support? <span id="draganddrop"></span></p>
		<p>Geolocation support? <span id="geolocation"></span></p>
		<p>Hashchange support? <span id="hashchange"></span></p>
		<p>History Management support? <span id="historymanagement"></span></p>
		<p>Indexed DB support? <span id="indexeddb"></span></p>
		<p>Video support? <span id="video"></span></p>
		<p>Web SQL Database support? <span id="sqldb"></span></p>
		<p>Web Socket support? <span id="web-sockets"></span></p>
		<p>Local Storage support? <span id="localstorage"></span></p>
    <p>Web Workers support? <span id="webworkers"></span></p>		
    <p>Application Cache support? <span id="applicationcache"></span></p>
		<p>Session Storage support? <span id="sessionstorage"></span></p>
		<p>SVG support? <span id="svg"></span></p>
		<p>SMIL support? <span id="smil"></span></p>
		<p>SVG Clippaths support? <span id="svgclippaths"></span></p>


		<!-- <p><strong>CSS Features</strong></p> 
		<p>RGBA (Red Green Blue Alpha)support? <span id="rgba"><span></p>
		<p>HSLA (Hue Saturation Lightness and alpha) support? <span id="hsla"><span></p>
		<p>Multiple Backgrounds support? <span id="multiplebgs"><span></p> -->

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