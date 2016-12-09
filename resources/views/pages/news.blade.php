<!-- Container (Trainer Section) -->
<div id="news" class="container-fluid text-center bg-grey">
 <h2>News and Events</h2>
  <div id="myNewsCarousel" class="carousel slide text-center" data-ride="carousel">
    <!-- Indicators -->
    <ol class="carousel-indicators">
      <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
      <li data-target="#myCarousel" data-slide-to="1"></li>
      <li data-target="#myCarousel" data-slide-to="2"></li>
    </ol>

    <!-- Wrapper for slides -->
    <div class="carousel-inner" role="listbox">
      <div class="item active">
          <div class="col-sm-5 col-sm-offset-1">
            <div class="thumbnail">
              <img src="{{ url('images/news.jpg') }}" alt="San Francisco" width="400" height="300">
                <h4><strong>Title</strong><br>Description</h4>
            </div>
          </div>

          <div class="col-sm-5">
            <div class="thumbnail">
              <img src="{{ url('images/news.jpg') }}" alt="San Francisco" width="400" height="300">
                <h4><strong>Title</strong><br>Description</h4>
            </div>
          </div>
      </div>
    </div>

    <!-- Left and right controls -->
    <a class="left carousel-control" href="#myNewsCarousel" role="button" data-slide="prev">
      <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="right carousel-control" href="#myNewsCarousel" role="button" data-slide="next">
      <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>
</div>
