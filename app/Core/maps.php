<?php
    session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width">
    <title>baikinpesepeda</title>
    <script src="http://maps.googleapis.com/maps/api/js"></script>
    <script>
        var marker;

        function taruhMarker(peta,posisiTitik){
            if(marker){
                marker.setPosition(posisiTitik);
        } else {
            marker = new google.maps.marker({
                position: posisiTitik,
                map: peta
            });
        }


        document.getElementById("lat").value = posisiTitik.lat();
        document.getElementById("lng").value = posisiTitik.lng();
        }
        function initialize() {
        var propertiPeta = {
            center:new google.maps.LatLng(-7.2580752679714164,112.75421863886771),
            zoom:14,
            mapTypeId:google.maps.MapTypeId.ROADMAP
        };

        var peta = new google.maps.Map(document.getElementById("googleMap"), propertiPeta);

        
        google.maps.event.addListener(peta, 'click', function(event) {
        taruhMarker(this, event.latLng);
        });
            }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
    <link rel="stylesheet" href="../views/css/style-maps.css">
</head>
<body class="body">
    <header>
		<?php
			if( !isset($_SESSION['login']) ) {
				include 'header-guest.php';
			} else {
				include 'header-login.php';
			}
		?>
    </header>

    <main class="main">

        <h2 style="text-align: center;"><b>Peta</b></h2>

        <div id="googleMap" style="width: 640px; height: 480px;"></div>
        
    </main>

    <aside class="aside">
        <h2 style="text-align: center;">Rute</h2>

        <p>kamu bisa memilih rute <br> yang disarankan ataupun merencanakan rute bersepeda yang akan kamu lalui sesukamu</b></p>
    </aside>

    <footer class="footer">
        <?php include 'footer.php' ?>
    </footer>
</body>
</html>