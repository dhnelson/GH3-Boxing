<!-- Container (Trainer Section) -->
<div id="trainers" class="container-fluid text-center bg-grey">
 <h2>Our Trainers</h2>
  <div id="myTrainerCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <div class="col-sm-4 col-sm-offset-4">
            <div class="thumbnail">
              <img src="{{ url('images/lou_esa.jpg') }}" alt="San Francisco" width="400" height="300">
                <h4><strong>Lou Esa</strong><br>#1 Trainer</h4>
            </div>
          </div>
        </div>
      <div class="item">
          <div class="col-sm-4 col-sm-offset-4">
            <div class="thumbnail">
              <img src="{{ url('images/person.jpg') }}" alt="San Francisco" width="400" height="300">
                <h4><strong>John Doe</strong><br>#2 Trainer</h4>
            </div>
          </div>
      </div>
      <div class="item">
          <div class="col-sm-4 col-sm-offset-4">
            <div class="thumbnail">
              <img src="{{ url('images/person.jpg') }}" alt="San Francisco" width="400" height="300">
                <h4><strong>Jane Doe</strong><br>#3 Trainer</h4>
            </div>
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myTrainerCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myTrainerCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
