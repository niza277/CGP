<!DOCTYPE html>
<html>
<title>W3.CSS</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">
<style>
.city {display:none;}
</style>
<body>

<div class="w3-container">
 <div class="w3-container">
    <a href="index.php"><h2>Home</h2></a>
  </div>
  <p>Click on the links below:</p>

  <ul class="w3-navbar w3-black">
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'London');">JAN 2014</a></li>
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Paris');">DEC 2014</a></li>
    <li><a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Tokyo');">JAN 2015</a></li>
  </ul>

  <div id="London" class="w3-container w3-border city">
    <nav class="w3-sidenav w3-light-grey w3-card-2" style="width:130px">
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic01')">Topic 01</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic02')">Topic 02</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic03')">Topic 03</a>
	</nav>
	<div style="margin-left:130px">
	  <div class="w3-padding">January 2014 Locations</div>
	  <div id="Topic01" class="w3-container city">
		<h2>Topic 01</h2>
		<p>London is the capital city of England.</p>
		<p>It is the most populous city in the United Kingdom, with a metropolitan area of over 13 million inhabitants.</p>
	  </div>
	  <div id="Topic02" class="w3-container city">
		<h2>Topic 02</h2>
		<p>Paris is the capital of France.</p>
		<p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
	  </div>
	  <div id="Topic03" class="w3-container city">
		<h2>Topic 02</h2>
		<p>Tokyo is the capital of Japan.</p>
		<p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
	  </div>
	</div>
	<!--
	<script>
	function openCity(evt, cityName) {
	  var i, x, tablinks;
	  x = document.getElementsByClassName("city");
	  for (i = 0; i < x.length; i++) {
		 x[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablink");
	  for (i = 0; i < x.length; i++) {
		  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " w3-red";
	}
	</script> -->
  </div>

  <div id="Paris" class="w3-container w3-border city">
    <h2>Paris</h2>
    <p>Paris is the capital of France.</p>
  </div>

  <div id="Tokyo" class="w3-container w3-border city">
    <h2>Tokyo</h2>
    <p>Tokyo is the capital of Japan.</p>
  </div>
</div>






	<script>
	function openCity(evt, cityName) {
	  var i, x, tablinks;
	  x = document.getElementsByClassName("city");
	  for (i = 0; i < x.length; i++) {
		  x[i].style.display = "none";
	  }
	  tablinks = document.getElementsByClassName("tablink");
	  for (i = 0; i < x.length; i++) {
		  tablinks[i].className = tablinks[i].className.replace(" w3-red", "");
	  }
	  document.getElementById(cityName).style.display = "block";
	  evt.currentTarget.className += " w3-red";
	}
	</script>



</body>
</html>
