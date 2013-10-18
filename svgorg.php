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
    if (Modernizr.svg) {
         /* properties for browsers that
         support audio */
    }else{
         /* properties for browsers that
         does not support audio */
    }
    </script>

    <style>
  
  	.no-svg #svg-image {
     display: none; /* Don't show Audio options */
    }
		.svg #no-svg-image {
      display: none; 
    }
		
		#svg-image {
		  /*width: 1024px;
			height: 768px;*/
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
  <h2>SVG Example</h2>
  </header>
  <!-- Defining Content Section -->
  <section>
  <!-- Defining content section article -->
	
  <div id="svg-image">
       <?php include 'org1.svg'; ?>	
		
</div>
<div id="no-svg-image">
 No SVG support
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