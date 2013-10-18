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


<style>

label {
  float: left;
  display: block;
  width: 220px;
  line-height: 24px;
}
</style>

<script>

//This function is triggered when the user clicks the Submit button
function OnSubmit() {
  var textfield = document.getElementById('your-name');
  sessionStorage.firstname = textfield.value; //passes the value to the session storage object
}

//This function is triggered when the user clicks the Recall button
function show_alert() {
  alert(sessionStorage.firstname); //returns the value stored in the session storage
}

function OnSubmit2() {
  var textfield = document.getElementById('last-name');
  localStorage.lastname = textfield.value;
}

function show_alert2() {
  alert(localStorage.lastname);
}

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
  <h2>HTML5 Storage</h2>
  </header>
  <!-- Defining Content Section -->
  <section>
  <!-- Defining content section article -->

    <article class="bpage">
      <p>Session Storage: What is your first name? </p>
      <form name="myForm">
      <input type="text" name="your-name" id="your-name" />
      <input type="submit" onclick="OnSubmit()" value="Save" />
      <input type="button" id="" value="Recall" onclick="show_alert()" />
      </form>
		</article>
		
    <article class="bpage">
      <p>Local Storage: What is your last name? </p>
      <form name="myForm">
      <input type="text" name="last-name" id="last-name"  />
      <input type="button" onclick="OnSubmit2()" value="Save" />
      <input type="button" id="recall2" value="Recall" onclick="show_alert2()" />
      </form>
		</article>
  </section>
	<div style="height:50px"></div>
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