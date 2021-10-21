<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Kanjika Technology - Filter Section Using Jquery</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- Latest compiled and minified CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

	<!-- jQuery library -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

	<!-- Popper JS -->
	<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

	<!-- Latest compiled JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

	<!-- Google Translator CDN -->
	<script type="text/javascript" src="//translate.google.com/translate_a/element.js?cb=googleTranslateElementInit"></script>
	
</head>
<body>
	<section class="container-fluid bg-dark navbar-dark">
		<div class="conatiner">
			<nav class="navbar navbar-expand-md ">
			  <!-- Brand -->
			  <a class="navbar-brand" href="#">Kanjika Technology</a>

			  <!-- Toggler/collapsibe Button -->
			  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
			    <span class="navbar-toggler-icon"></span>
			  </button>

			  <!-- Navbar links -->
			  <div class="collapse navbar-collapse" id="collapsibleNavbar">
			    <ul class="navbar-nav">
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#">Link</a>
			      </li>
			      <li class="nav-item">
			        <a class="nav-link" href="#"><div id="google_translate_element"></div></a>
			      </li>
			    </ul>
			  </div>
			</nav>
		</div>
	</section>

	<section class="container mt-4">
		<input type="text" name="search" id="StudentSearch" placeholder="Search">
		<table class="table table-striped">
		    <thead>
		      <tr>
		        <th>Name</th>
		        <th>Roll No</th>
		        <th>Full Marks</th>
		        <th>Obtained Marks</th>
		      </tr>
		    </thead>
		    <tbody id="Student">
		      <tr>
		        <td>Lorem Ipsum</td>
		        <td>987456</td>
		        <td>500</td>
		        <td>475</td>
		      </tr>
		      <tr>
		        <td>Raj Malhotra</td>
		        <td>56325</td>
		        <td>500</td>
		        <td>300</td>
		      </tr>
		      <tr>
		        <td>Ram</td>
		        <td>35874</td>
		        <td>500</td>
		        <td>240</td>
		      </tr>
		    </tbody>
		  </table>
	</section>


<!-- jquery filter search start -->
<script>
$(document).ready(function(){
  $("#StudentSearch").on("keyup", function() {
    var value = $(this).val().toLowerCase();
    $("#Student tr").filter(function() {
      $(this).toggle($(this).text().toLowerCase().indexOf(value) > -1)
    });
  });
});
</script>
<!-- jquery filter search end -->

<!-- google translator -->
<script type="text/javascript">
function googleTranslateElementInit() {
  new google.translate.TranslateElement({pageLanguage: 'en', layout: google.translate.TranslateElement.InlineLayout.SIMPLE}, 'google_translate_element');
}
</script>
<!-- google translator -->


</body>
</html>