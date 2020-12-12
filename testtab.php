<!doctype html>
<html lang="en">
<head>
<title>CGP | Sequential Event</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="http://www.w3schools.com/lib/w3.css">

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">
  <script src="https://code.jquery.com/jquery-1.12.4.js"></script>
  <script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
  <script>
  $( function() {
    $( "#tabs" ).tabs();
  } );
  </script>
  <style>
.city {display:none;}
</style>
</head>
<body>

<div id="tabs">
  <ul>
    <li><a href="#tabs-1">JAN 2014</a></li>
    <li><a href="#tabs-2">DEC 2014</a></li>
    <li><a href="#tabs-3">JAN 2015</a></li>
	<li><a href="#tabs-4">DEC 2015</a></li>
  </ul>
  <!-- JAN2014 -->
  <div id="tabs-1">
    <nav class="w3-sidenav w3-light-grey w3-card-2" style="width:130px">
	  <div class="w3-container">
		</div>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic01')">Topic 01</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic02')">Topic 02</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic03')">Topic 03</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic04')">Topic 04</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic05')">Topic 05</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic06')">Topic 06</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic07')">Topic 07</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic08')">Topic 08</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic09')">Topic 09</a>
	  <a href="javascript:void(0)" class="tablink" onclick="openCity(event, 'Topic10')">Topic 10</a>
	</nav>
  
  <div style="margin-left:130px">
  <div class="w3-padding"></div>
  <div id="Topic01" class="w3-container city">
    <h2>Topic 01</h2>
	<iframe width="600" height="371" seamless frameborder="0" scrolling="no" 
	src="https://docs.google.com/spreadsheets/d/1Rr1mB3d0kaqV8N-Dl2hfTyoglmCNWFkiUPRpeF5Jhmg/pubchart?oid=1929045438&amp;format=interactive">
	</iframe>
    <p></p>
 </div>

  <div id="Topic02" class="w3-container city">
    <h2>Topic 02</h2>
    <p>Paris is the capital of France.</p>
    <p>The Paris area is one of the largest population centers in Europe, with more than 12 million inhabitants.</p>
  </div>

  <div id="Topic03" class="w3-container city">
    <h2>Topic 03</h2>
    <p>Tokyo is the capital of Japan.</p>
    <p>It is the center of the Greater Tokyo Area, and the most populous metropolitan area in the world.</p>
  </div>
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
  
<!--DEC 2014 -->
  <div id="tabs-2">
    <p>Morbi tincidunt, dui sit amet facilisis feugiat, odio metus gravida ante, ut pharetra massa metus id nunc. Duis scelerisque molestie turpis. Sed fringilla, massa eget luctus malesuada, metus eros molestie lectus, ut tempus eros massa ut dolor. Aenean aliquet fringilla sem. Suspendisse sed ligula in ligula suscipit aliquam. Praesent in eros vestibulum mi adipiscing adipiscing. Morbi facilisis. Curabitur ornare consequat nunc. Aenean vel metus. Ut posuere viverra nulla. Aliquam erat volutpat. Pellentesque convallis. Maecenas feugiat, tellus pellentesque pretium posuere, felis lorem euismod felis, eu ornare leo nisi vel felis. Mauris consectetur tortor et purus.</p>
  </div>
  <!--JAN 2015 -->
  <div id="tabs-3">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
  <!--DEC 2015 -->
  <div id="tabs-4">
    <p>Mauris eleifend est et turpis. Duis id erat. Suspendisse potenti. Aliquam vulputate, pede vel vehicula accumsan, mi neque rutrum erat, eu congue orci lorem eget lorem. Vestibulum non ante. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos. Fusce sodales. Quisque eu urna vel enim commodo pellentesque. Praesent eu risus hendrerit ligula tempus pretium. Curabitur lorem enim, pretium nec, feugiat nec, luctus a, lacus.</p>
    <p>Duis cursus. Maecenas ligula eros, blandit nec, pharetra at, semper at, magna. Nullam ac lacus. Nulla facilisi. Praesent viverra justo vitae neque. Praesent blandit adipiscing velit. Suspendisse potenti. Donec mattis, pede vel pharetra blandit, magna ligula faucibus eros, id euismod lacus dolor eget odio. Nam scelerisque. Donec non libero sed nulla mattis commodo. Ut sagittis. Donec nisi lectus, feugiat porttitor, tempor ac, tempor vitae, pede. Aenean vehicula velit eu tellus interdum rutrum. Maecenas commodo. Pellentesque nec elit. Fusce in lacus. Vivamus a libero vitae lectus hendrerit hendrerit.</p>
  </div>
</div>
 
 
</body>
</html>