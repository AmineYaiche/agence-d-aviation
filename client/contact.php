<?php session_start();?>
<!DOCTYPE html>
<html>
<head>
	<title></title>
	<meta charset="UTF-8" />

</head>
<body>
<header><?php include_once "/opt/lampp/htdocs/www/aeroport/vue/header.php"; ?></header>



<!-- google maps-->
	<script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
	<div style="overflow:hidden;height:400px;width:500px;"><div id="gmap_canvas" style="height:400px;width:500px;">
	</div><style>#gmap_canvas img{max-width:none!important;background:none!important}</style>
	<a class="google-map-code" href="http://www.staubsauger-test.biz" id="get-map-data">www.staubsauger-test.biz</a></div>
	<script type="text/javascript"> 
	function init_map(){var myOptions = {zoom:16,center:new google.maps.LatLng(36.83402281022142,10.144436505804379),
	mapTypeId: google.maps.MapTypeId.ROADMAP};map = new google.maps.Map(document.getElementById("gmap_canvas"), myOptions);
	marker = new google.maps.Marker({map: map,position: new google.maps.LatLng(36.83402281022142, 10.144436505804379)});
	infowindow = new google.maps.InfoWindow({content:"<b>FST</b><br/>El Manar<br/> Tunis" });
	google.maps.event.addListener(marker, "click", function(){infowindow.open(map,marker);});
	infowindow.open(map,marker);}google.maps.event.addDomListener(window, 'load', init_map);</script>
<!-- google maps-->








<aside> <?php include_once "/opt/lampp/htdocs/www/aeroport/controller/aside.php" ?> </aside>

<footer> <?php include_once "/opt/lampp/htdocs/www/aeroport/vue/footer.html"; ?></footer>

</body>
</html>
