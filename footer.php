
    <footer>
        <div class="arrow"></div>
              <div class="rrss">
                <p><i class="fa fa-copyright" aria-hidden="true"></i> <?php the_time('Y'); ?> Agencia Forza. Todos los derechos reservados.</p>
                <ul>
                  <li>
                      <a href="https://www.facebook.com/agenciaforza/" class="hvr-float" target="_blank">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                  </li>
                  <li>
                    <a href="https://www.instagram.com/agenciaforza/" class="hvr-float" target="_blank">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="https://twitter.com/AgenciaForza" class="hvr-float" target="_blank">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-twitter fa-stack-1x fa-inverse"></i>
                      </span>
                    </a>
                  </li>
                </ul>
              </div><!-- rrss -->
    </footer>

    <!-- JS -->


   <?php wp_footer(); ?>
   <script type="text/javascript">

var map;
function initialize()
{
	// Create an array of styles.
  var styles = [
    {
      stylers: [
        { hue: "#fc371a" },
        { saturation: -20 }
      ]
    },{
      featureType: "road",
      elementType: "geometry",
      stylers: [
        { lightness: 100 },
        { visibility: "simplified" }
      ]
    },{
      featureType: "road",
      elementType: "labels",
      stylers: [
        { visibility: "on" }
      ]
    }
  ];

  var myLatLng1 = {lat: -33.4055507, lng: -70.5722807};

  var styledMap = new google.maps.StyledMapType(styles, {name: "Styled Map"});

  map = new google.maps.Map(document.getElementById('map'), {
    center: myLatLng1,//Setting Initial Position
    zoom: 15,
    scrollwheel: false,
    mapTypeControlOptions: {
      mapTypeIds: [google.maps.MapTypeId.ROADMAP, 'map_style']
    }
  });

  //Associate the styled map with the MapTypeId and set it to display.
  map.mapTypes.set('map_style', styledMap);
  map.setMapTypeId('map_style');

  var marker = new google.maps.Marker({
    position: myLatLng1,
    map: map
  });
}

function newLocation(newLat,newLng)
{
	 map.setCenter({
		lat : newLat,
		lng : newLng
	});
}




   </script>

   <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDduHMbtsYo8m5_BVyMOGDrM3gZnoOxPZA&callback=initialize" async defer></script>
      <script>
          (function(b,o,i,l,e,r){b.GoogleAnalyticsObject=l;b[l]||(b[l]=
          function(){(b[l].q=b[l].q||[]).push(arguments)});b[l].l=+new Date;
          e=o.createElement(i);r=o.getElementsByTagName(i)[0];
          e.src='//www.google-analytics.com/analytics.js';
          r.parentNode.insertBefore(e,r)}(window,document,'script','ga'));
          ga('create','UA-XXXXX-X','auto');ga('send','pageview');
      </script>
      <!-- End Google Analytics -->
  </body>
</html>
