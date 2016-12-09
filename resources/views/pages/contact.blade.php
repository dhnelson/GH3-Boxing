<!-- Container (Contact Section) -->
<div id="contact" class="container-fluid bg-grey">
  <h2>CONTACT</h2>
  <div class="row">
    <div class="col-sm-5">
      <p>Contact us and we'll get back to you within 24 hours.</p>
      <p><span class="glyphicon glyphicon-map-marker"></span> New Jersey, US</p>
      <p><span class="glyphicon glyphicon-phone"></span> +00 1515151515</p>
      <p><span class="glyphicon glyphicon-envelope"></span> myemail@something.com</p>
    </div>
    <div class="col-sm-7 slideanim">
      <div class="row">
        <form role="form" method="POST" action="{{ url('/contact') }}">
        {{ csrf_field() }}
            <div class="col-sm-6 form-group">
              <input class="form-control" id="name" name="name" placeholder="Name" type="text" required>
            </div>
            <div class="col-sm-6 form-group">
              <input class="form-control" id="email" name="email" placeholder="Email" type="email" required>
            </div>
            <div class="col-sm-12 form-group">
              <input class="form-control" id="subject" name="subject" placeholder="Subject" type="text" required>
            </div>
      </div>
          <textarea class="form-control" id="message" name="message" placeholder="Message" rows="5"></textarea><br>
          <div class="row">
            <div class="col-sm-12 form-group">
              <button class="btn btn-default pull-right" type="submit">Send</button>
            </div>
          </div>
        </form>
    </div>
  </div>
</div>

<div id="map" style="height:400px;width:100%;"></div>

<!-- Add Google Maps -->
<script>
    function initMap() {
      var mapDiv = document.getElementById('map');
      var map = new google.maps.Map(mapDiv, {
          center: {lat: 40.886037, lng: -74.209229},
          zoom: 17
      });
      
      var marker = new google.maps.Marker({
        position: {lat: 40.886037, lng: -74.209229},
        map: map,
        title: 'GH3 Boxing Gym'
      });

    }
</script>
<script async defer src="https://maps.googleapis.com/maps/api/js?key=AIzaSyC9nvN7A9Qly-oQrw7N3QkbVOaR3sB8nJw&callback=initMap">
</script>

