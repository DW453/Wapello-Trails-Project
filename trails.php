
<!DOCTYPE html>
<html lang="en">
<head>
	<link rel="stylesheet" type="text/css" href="css/trail-styles.css">
	<link rel="stylesheet" href="css/masterstyle.css">
	<meta charset="UTF-8">
	<script src="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.js"></script>
	<link href="https://api.mapbox.com/mapbox-gl-js/v1.11.1/mapbox-gl.css" rel="stylesheet" />

	<title>Trails</title>
</head>

<header>
	<h1 class="nav">Wapello Trails</h1>
</header>

<body>
<nav>
	<div class="logo">
		<h1 class="nav">Wapello Trails</h1>
	</div>

	<ul class="nav-links">
		<li><a href="home.html">Home</a></li>
		<li><a href="gallery.html">Gallery</a></li>
		<li><a href="trails.html">Trails</a></li>
	</ul>

	<div class="burger">
		<div class="line1"></div>
		<div class="line2"></div>
		<div class="line3"></div>
	</div>
</nav>

<section class="head-container">
	<h1 class="page-title">Activities</h1>
	<!--
		Text area that can display possible trail activities. These could include:
			-   Biking
			-   Hiking
			-   Walking
			-   Running
			-   Etc.
	-->
	<h2 class="activities">Walking</h2>
	<div class="flex-container">
		<p class="p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .flex-container -->

	<h2 class="activities">Running</h2>
	<div class="flex-container">
		<p class="p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .flex-container -->

	<h2 class="activities">Biking</h2>
	<div class="flex-container">
		<p class="p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .flex-container -->
</section>  <!-- END .head-container -->

<div id="menu"></div>
<div id="map"></div>

<!-- Div for buttons on map <div id="menu"></div>  -->
<h3 class="legend-head">Map Legend:</h3>
<!-- Legend for trail map -->
<div class="legend-container">
	<ul class="legend-box-1">
		<li class="square1 legend color-code"></li>
		<li class="square2 legend color-code"></li>
		<li class="square3 legend color-code"></li>
		<li class="square4 legend color-code"></li>
		<li class="square5 legend color-code"></li>
	</ul>
	<ul class="legend-box-2">
		<li class="legend trail-name">Trail 1: 3.2 Miles</li>
		<li class="legend trail-name">Trail 2: 2.5 Miles</li>
		<li class="legend trail-name">Trail 3: 1.6 Miles</li>
		<li class="legend trail-name">Trail 4: 0.9 Miles</li>
		<li class="legend trail-name">Trail 5: 1.1 Miles</li>
	</ul>
	<ul class="legend-box-1">
		<li class="square6 legend color-code"></li>
		<li class="square7 legend color-code"></li>
		<li class="square8 legend color-code"></li>
		<li class="icon legend"><img src="images/parking-15.svg"></li>
		<li class="icon legend"><img src="images/campsite-15.svg"></li>
	</ul>
	<ul class="legend-box-2">
		<li class="legend trail-name">Trail 6: 1.7 Miles</li>
		<li class="legend trail-name">Trail 7: 1.2 Miles</li>
		<li class="legend trail-name">Trail 8: 1.4 Miles</li>
		<li class="legend trail-name">Parking and Trailheads</li>
		<li class="legend trail-name">Shelters and Rest Stops</li>
	</ul>   <!-- END legend-box -->
</div>  <!-- END legend-container -->

<section class="body-container">

	<!--
		Area plan section. This portion of the page can be utilized to display the maps and possibly description and other information concerning the future expansions.
	-->

	<h2 class="plans-page-title">Future Plans</h2>
	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page1-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>
	<h2 class="area-plan-heading">1st Priority - North Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->

	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page2-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>  <!-- END .flex-container -->
	<h2 class="area-plan-heading">1st Priority - South Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->

	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page3-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>  <!-- END .flex-container -->
	<h2 class="area-plan-heading">All Corridors - North Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->

	<div class="area-plan-container">
		<div class="area-plan-img">
			<img src="images/future-plan-page4-1000x1500.jpg"/>
		</div>  <!-- END .areaPlanIMG -->
	</div>  <!-- END .flex-container -->
	<h2 class="area-plan-heading">All Corridors - South Side</h2>
	<div class="flex-container">
		<p class="plan-p-info">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Metus aliquam eleifend mi in nulla posuere sollicitudin aliquam. Sed augue lacus viverra vitae. Diam quam nulla porttitor massa id neque aliquam vestibulum morbi. Risus nullam eget felis eget. Amet justo donec enim diam vulputate ut. In hac habitasse platea dictumst quisque. Vestibulum sed arcu non odio euismod lacinia at quis risus. Gravida dictum fusce ut placerat orci nulla pellentesque dignissim enim. Curabitur vitae nunc sed velit dignissim sodales. Mi eget mauris pharetra et. Neque volutpat ac tincidunt vitae semper. Diam phasellus vestibulum lorem sed. Viverra aliquet eget sit amet tellus cras. Hendrerit dolor magna eget est. Ornare massa eget egestas purus.</p>
	</div>  <!-- END .area-plan-container -->
</section>  <!-- END .body-container -->

<script>
    mapboxgl.accessToken = 'pk.eyJ1Ijoiam9zaHVhLWRlbG9uZyIsImEiOiJja2MzcHZ1a3owMDl2MnBrMDE5M3J4c3UxIn0.kFA68Avg1OaqG0QMq6f7dg';
    var map = new mapboxgl.Map({
        container: 'map',
        style: 'mapbox://styles/joshua-delong/ckcfn77730anb1ilibata5gt6'
    });

    /*
**** The following code will create clickable boxes to show and hide the different trails on the map ****
	*/
    map.on('load', function() {
        // add source and layer for trail 1
        map.addSource('Trail_1', {
            type: vector,
            url: 'joshua-delong.ckccuis8j0lvn24prl707kt0m-36b55'
        });
        map.addLayer({
            'id': 'Trail_1',
            'type': 'line',
            'source': 'Trail_1',
            'layout': {
                // make layer visible by default
                'visibility': 'visible',
                'line-cap': 'butt',
                'line-join': 'miter'
            },
            'paint': {
                'line-color':  '#f8ff33',
                'line-width': 4
            }
        });
    });

    // enumerate ids of the layers
    var toggleableLayerIds = ['Trail 1', 'Trail 2', 'Trail 3', 'Trail 4', 'Trail 5', 'Trail 6', 'Trail 7', 'Trail 8', 'Parking/Trailheads', 'Shelters/Rest Stops',];

    // set up the corresponding toggle buttons for each layer
    for (var i = 0; i < toggleableLayerIds.length; i++) {
        var id = toggleableLayerIds[i];

        var link = document.createElement('a');
        link.href = '#';
        link.className = 'active';
        link.textContent = id;

        link.onclick = function(e) {
            var clickedLayer = this.textContent;
            e.preventDefault();
            e.stopPropagation();

            var visibility = map.getLayoutProperty(clickedLayer, 'visibility');

            // toggle layer visibility by changing the layout object's visibility property
            if (visibility === 'visible') {
                map.setLayoutProperty(clickedLayer, 'visibility', 'none');
                this.className = '';
            } else {
                this.className = 'active';
                map.setLayoutProperty(clickedLayer, 'visibility', 'visible');
            }   // END if/else
        };  // END onclick function

        var layers = document.getElementById('menu');
        layers.appendChild(link);
    }   // END for loop
    /*
	  trail-2-2.5-mile
	  joshua-delong.ckccvqmm83ebt29nva5ffon5p-5mho1
	  trail-3-1.6-mile
	  joshua-delong.ckce8yd5p0qwk26qlxombf42j-52phz
	  trail-4-0.9-mile
	  joshua-delong.ckce952in3woq2fnvkhlpyg3r-84s4q
	  trail-5-1-1-mile
	  joshua-delong.ckce9akfz0ng623o51n8sm7qb-30ltn
	  trail-6-1-7-mile
	  joshua-delong.ckce9p5nm0udd23py4dvq3tse-1nrg9
	  trail-7-1-2-mile
	  joshua-delong.ckceaaowm0sux22pyxhsc3t9d-0l3nm
	  trail-8-1-4-mile
	  joshua-delong.ckcf6q2ht5drl29p5s4j4hraa-5xt9t
	  parking
	  joshua-delong.ckcky2p6z0adr23p9ky2syyeo-1cncy
	 shelter-rest-stops
	  joshua-delong.ckcky9clj0ag223p9qizha01k-2knvy
	*/

</script>
</body>

<footer>
	<div class="footerInfo">
		<div class="contact">
			<h2 class="footer">Contact Us</h2>
			<p class="footer">email@gmail.com</p>
			<p class="footer">Name | 123-456-7899</p>
			<p class="footer">Name | 123-456-7899</p>
			<p class="footer">Name | 123-456-7899</p>
		</div>
		<div class="community">
			<h2 class="footer">Community</h2>
			<p class="footer"><a href="https://www.gopip.org/">Greater Ottumwa Partners in Progress</a></p>
			<p class="footer"><a href="https://www.mainstreetottumwa.com/">Main Street Ottumwa</a></p>
			<p class="footer"><a href="https://www.greaterottumwacvb.org/">Ottumwa Convention and Visitor Bureau</a></p>
			<p class="footer"><a href="https://www.orlf.org/">Legacy Foundation</a></p>
			<p class="footer"><a href="http://wapellocounty.org/">Wapello County</a></p>
		</div>

		<div class="additional">
			<h2 class="footer">Additional Links</h2>
			<p class="footer"><a href="https://soarraptors.org/">SOAR</a></p>
			<p class="footer"><a href="https://americangothichouse.org/">American Gothic House</a></p>
			<p class="footer"><a href="https://www.bikeiowa.com/">Bike Iowa</a></p>
			<p class="footer"><a href="http://www.jeffersoncountytrails.org/">Jeffereson County Trails</a></p>
			<p class="footer"><a href="https://www.traillink.com/">Trail Link</a></p>
			<p class="footer"><a href="https://www.inhf.org/what-we-do/trails/iowa-by-trail/">Iowa by Trail</a></p>
			<p class="footer"><a href="http://www.treesforever.org/">Trees Forever</a></p>
		</div>
	</div>

	<div class="toTop">
		<button onclick="topFunction()" id="myBtn">Back to Top</button>
	</div>
</footer>


<script>
    var mybutton = document.getElementById("myBtn");

    function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
    }
</script>
<script src="js/master.js"></script>
</body>
</html>
