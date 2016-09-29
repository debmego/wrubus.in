<?php
/**
 * Created by Sudipta Deb
 * Date: 16/1/16
 * Time: 10:55 PM
 */
include_once 'header.php';
?>
<script src="http://maps.googleapis.com/maps/api/js?key=AIzaSyDOg38KC1GGiTRS2vZccHQvGWWD75Ws5Wg"></script>

<script>
    var marker = {};

    function loadMap() {

        var mapOptions = {
            center: new google.maps.LatLng(10.9654, 76.9801), zoom: 6,
            mapTypeId: google.maps.MapTypeId.ROADMAP
        };


        var map = new google.maps.Map(document.getElementById("mapSpace"), mapOptions);


        var markMap = function (map, marker) {
            $.ajax({
                url: 'log?method=getAllLocations',
                method: 'get',
                success: function (response) {
                    console.log(response);
                    if (response.status == 'success') {
                        for (var i = 0; i < (response.data.length); i++) {
                            var latitude = parseFloat(response.data[i].latitude);
                            var longitude = parseFloat(response.data[i].longitude);
                            var serial = response.data[i].serial;
                            if (marker[serial] == undefined) {
                                marker[serial] = {};
                                marker[serial]['marker'] = new google.maps.Marker({
                                    position: new google.maps.LatLng(latitude, longitude),
                                    map: map,
                                    title: serial,
                                    icon: 'img/19g.png'
                                });
                                map.setCenter(new google.maps.LatLng(latitude, longitude));
                                map.setZoom(14);
                            } else {
                                marker[serial]['marker'].setPosition(new google.maps.LatLng(latitude, longitude));
                            }
                        }
                    }
                }
            });
        };
        var loadMarkers = setInterval(function () {
            markMap(map, marker)
        }, 5000);
    }
</script>
<div id="mapSpace" style="width:100%; height:600px;"></div>

<?php
include_once 'footer.php';
?>
<script>
    $('body').load(loadMap());
</script>
