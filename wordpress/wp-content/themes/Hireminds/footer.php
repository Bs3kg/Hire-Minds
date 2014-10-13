<div class="footer" xmlns="http://www.w3.org/1999/html" xmlns="http://www.w3.org/1999/html">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <ul>Events</ul>
            <a href="http://www.hiremindssummit.com/hire-minds-annual-summit-2014/"><li>Hireminds Annual Summit 2014</li></a>
            <a href="http://www.hiremindssummit.com/hire-minds-regionals/"><li>Hireminds Regional Summit, Denver 2014</li></a>
            <a href="http://www.hiremindssummit.com/hire-minds-annual-summit-2015/"><li>Hireminds Annual Summit 2015</li></a>
          </div>
          <div class="col-md-4">
            <h4>Follow us on:</h4>
            <a href="https://twitter.com/snagajobworks"><img src="http://www.hiremindssummit.com/wp-content/themes/Hireminds/img/32-twitter.png" /></a>  <a href="https://www.linkedin.com/groups?home=&gid=3476518&trk=anet_ug_hm&goback=%2Eanb_3476518_*2_*1_*1_*1_*1_*1"><img src="http://www.hiremindssummit.com/wp-content/themes/Hireminds/img/32-linkedin.png" /></a>
          </div>
        </div>
      </div>
    </div>





    <!-- Bootstrap core JavaScript
    ================================================== -->
    <!-- Placed at the end of the document so the pages load faster -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?sensor=true"></script>
    <script type="text/javascript">
        var myLatlng;
        var map;
        var marker;

        function initialize() {
            myLatlng = new google.maps.LatLng(37.66434,-77.44461);

            var mapOptions = {
                zoom: 11,
                center: myLatlng,
                mapTypeId: google.maps.MapTypeId.ROADMAP,
                scrollwheel: false,
                draggable: false
            };
            map = new google.maps.Map(document.getElementById('map-canvas'), mapOptions);

            var contentString = '<p style="line-height: 20px;"><strong>Wyndham Virginia Crossing Hotel & Conference Center</strong></p><p>Glen Allen, Virginia 23059</p>';

            var infowindow = new google.maps.InfoWindow({
                content: contentString
            });

            marker = new google.maps.Marker({
                position: myLatlng,
                map: map,
                title: 'Marker'
            });

            google.maps.event.addListener(marker, 'click', function() {
                infowindow.open(map, marker);
            });
        }

        google.maps.event.addDomListener(window, 'load', initialize);
    </script>
  </body>
</html>