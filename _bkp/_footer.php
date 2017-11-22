    <footer>
        <div class="arrow"></div>
              <div class="rrss">
                <p>© 2017 Agencia Forza. Todos los derechos reservados.</p>
                <ul>
                  <li>
                      <a href="" class="hvr-float">
                        <span class="fa-stack fa-lg">
                          <i class="fa fa-circle fa-stack-2x"></i>
                          <i class="fa fa-facebook fa-stack-1x fa-inverse"></i>
                        </span>
                      </a>
                  </li>
                  <li>
                    <a href="" class="hvr-float">
                      <span class="fa-stack fa-lg">
                        <i class="fa fa-circle fa-stack-2x"></i>
                        <i class="fa fa-instagram fa-stack-1x fa-inverse"></i>
                      </span>
                    </a>
                  </li>
                  <li>
                    <a href="" class="hvr-float">
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
     function initMap() {
     
       var uluru = {lat: -33.4161912, lng: -70.5873741};
       var map = new google.maps.Map(document.getElementById('map'), {
         zoom: 16,
         center: uluru,
       });
       var marker = new google.maps.Marker({
         position: uluru,
         map: map,
         //icon: 'http://cdn.com/my-custom-icon.png' // null = default icon
       });
       // map.setOptions({
       //    draggable: false

       //  });
     }
   </script>

      <!-- JS MAPS -->
     <script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDcsj-KWa06yqzSoMMIUw96Dswq0N7N8H0&callback=initMap"></script>

  </body>
</html>