<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">

  <title>FC Football template</title>

  <!-- Stylesheets -->
  <link rel="stylesheet" href="storage/resources/css/style.css">
  <link rel="stylesheet" href="storage/resources/css/owl.carousel.css">

  <!-- Google Fonts -->
  <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,700' rel='stylesheet' type='text/css'>
  <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>

  <!--[if IE 9]>
    <script src="js/media.match.min.js"></script>
  <![endif]-->
</head>

<body>
<div id="main-wrapper">

  <!-- Start Header -->
  <header id="header" class="second-version">
    <div class="container">
      <div class="header-logo">
        <!-- <a href="index.html"><img src="storage/resources/img/logo.png" alt=""></a> -->
        <a href="index.html"><img src="storage/resources/img/splash_crest.png" alt=""></a>
        <div class="triangle-left"></div>
        <div class="triangle-right"></div>
      </div>
    </div>
    <div class="header-toolbar">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <div class="header-language pull-left">
            <a href="#">
              <i class="fa fa-globe"></i>
              <span>EN</span>
              <i class="fa fa-chevron-down"></i>
            </a>
            <ul class="custom-list">
              <li class="active"><a href="#">EN</a></li>
              <li><a href="#">TC</a></li>
              <li><a href="#">CN</a></li>
            </ul>
          </div>
          {{-- <div class="header-user pull-right">
            <ul class="custom-list">
              <li>
                <div class="header-user-forms">
                  <div class="header-login">
                    <a href="#" class="">Login</a>
                    <div>
                      <form action="#" class="default-form">
                        <p class="form-row">
                          <input type="text" class="form-control" placeholder="Username">
                        </p>
                        <p class="form-row">
                          <input type="password" class="form-control" placeholder="Password">
                        </p>
                        <p class="form-row">
                          <input type="submit" class="btn full-width" value="Login">
                        </p>
                        <a href="#" class="btn btn-link">Forgot Password?</a>
                      </form>
                    </div>
                  </div>
                  <div class="header-register">
                    <a href="#" class="">Register</a>
                    <div>
                      <form action="#" class="default-form">
                        <p class="form-row">
                          <input type="text" class="form-control" placeholder="Username">
                        </p>
                        <p class="form-row">
                          <input type="email" class="form-control" placeholder="Email">
                        </p>
                        <p class="form-row">
                          <input type="password" class="form-control" placeholder="Password">
                        </p>
                        <input type="submit" class="btn full-width" value="Register">
                      </form>
                    </div>
                  </div>
                </div>
              </li>
              <li>
                <a href="#">
                  <i class="fa fa-shopping-cart"></i>
                  <span>Cart (0)</span>
                </a>
              </li>
            </ul>
          </div> --}}
        </div>
      </div>
    </div>
    <div class="header-navbar">
      <div class="container">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
          <nav class="navigation">
            <ul class="list-inline text-center custom-list">
              <li class="has-submenu">
                <a href="/">Home</a>
                {{-- <ul class="sub-menu custom-list">
                  <li class="active"><a href="index.html">Home Default</a></li>
                  <li><a href="home2.html">Home Variation 2 (teams)</a></li>
                  <li><a href="home3.html">Home Variation 3 (newsletter block)</a></li>
                  <li><a href="home4.html">Home Variation 4 (timeline & gallery block a)</a></li>
                  <li><a href="home5.html">Home Variation 5 (video & trophies)</a></li>
                  <li><a href="home6.html">Home Variation 6 (video & social)</a></li>
                  <li><a href="home7.html">Home Variation 7 (video & widgets)</a></li>
                  <li><a href="home8.html">Home Variation 8 (contact form block)</a></li>
                </ul> --}}
              </li>
              <li><a href="#about">About</a></li>
              <li><a href="#teams">Teams</a></li>
              <li><a href="#news">News</a></li>
              <li><a href="#footer">Contact</a></li>
            </ul>
          </nav>
          {{-- <ul class="social list-inline">
            <li><a href="#"><i class="fa fa-facebook"></i></a></li>
            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
            <li><a href="#"><i class="fa fa-google-plus"></i></a></li>
          </ul> --}}
          <button class="navbar-toggle">
            <i class="fa fa-list"></i>
          </button>
        </div>
      </div>
    </div>
  </header>
  <!-- End Header -->

  <!-- Start Intro -->
  <div class="intro">
    <div id="home-slider" class="fixed-nav owl-carousel owl-theme">
      @foreach ($banners as $banner)
        <div class="item">
        <img src="{{ $banner->image_path }}" alt="{{ $banner->alt }}">
          <div class="slide-content col-lg-8 col-lg-offset-2 col-md-12 col-sm-12 text-center">          
            <h1>{{ $banner->caption }}</h1>
            <p>{{ $banner->description }}</p>
            {{-- <a href="#" class="button"><span>Read More</span><i class="fa fa-arrow-circle-right"></i></a> --}}            
          </div>
        </div>
      @endforeach
    </div>
    <div class="customNavigation">
      <a class="btn prev"><i class="fa fa-angle-left"></i></a>
      <a class="btn next"><i class="fa fa-angle-right"></i></a>
    </div>
  </div>
  <!-- End Intro -->

  <!-- Start About -->
  <div id="about" class="about">

    <!-- Start Container -->
    <div class="container">

      <!-- Start Preamble -->
      <div class="preamble text-center col-lg-10 col-lg-offset-1">
        <h4>MATCH CENTRE: Live build-up to Aston Villa v Liverpool</h4>
        <p>
          Visit our Match Centre now to follow all of the build-up, live updates and reaction as Liverpool visit Aston Villa in the Premier League.<br><br>
          <a href="https://www.liverpoolfc.com/news">https://www.liverpoolfc.com/news</a>
        </p>
        {{-- <h4>This website is mainly for showing and practising my skillset.</h4>
        <ol>
          <li>1. This web site is built on Laravel</li>
          <li>2. Route, Controller, Model, Migration, Eloquent ORM are used</li>
          <li>3. All source code can be found at github.com. <a href="https://github.com/ryoyin/liverpool-news" target="_blank">https://github.com/ryoyin/liverpool-news</a></li>
          <li>4. I will keep adding new features to this website until I found a job at England.</li>
        </ol> --}}
      </div>
      <!-- End Preamble -->

    </div>
    <!-- End Container -->

    <!-- Start Nav-Tabs -->
    <ul class="nav nav-tabs list-inline horizontal-tab" role="tablist">
      <li class="active"><a href="#matches" role="tab" data-toggle="tab">Matches</a>
      </li>
      <li class=""><a href="#trainings" role="tab" data-toggle="tab">League Table</a>
      </li>
    </ul>
    <!-- End Nav-Tabs -->

    <!-- Start Tab-Content -->
    <div class="tab-content">
      <div class="container">
        <div class="tab-pane fade active in" id="matches">

          <!-- Start Nav-Tabs -->
          {{-- <ul class="nav nav-tabs list-inline experience" role="tablist">
            <li class="active"><a href="#seniors-matches" role="tab" data-toggle="tab">Seniors</a>
            </li>
            <li class=""><a href="#juvenile-matches" role="tab" data-toggle="tab">Juvenile</a>
            </li>
            <li class=""><a href="#veterans-matches" role="tab" data-toggle="tab">Veterans</a>
            </li>
          </ul> --}}
          <!-- End Nav-Tabs -->

          <!-- Start Tab Seniors -->
          <div class="tab-pane fade active in" id="seniors-matches">

            <!-- Start Result -->
            <div class="result col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
              <h4 class="border">Latest Result</h4>
              <div class="team">
                <figure>
                  <img src="{{ $currentMatch->home_team->crest_url }}" alt="" class="team-background">
                  {{-- <img src="storage/resources/img/team1-logo.png" alt="" class="team-logo"> --}}
                  <figcaption>
                    {{ $currentMatch->home_team->name }}
                  </figcaption>
                </figure>
              </div>
              <div class="match-details">
                <header class="match-name"><h5>Match {{ $matchday }}</h5></header>
                <div class="score">                  
                  @if($currentMatch->status == 'SCHEDULED')
                    <span style="font-size:12px;">Comming Soon</span>
                  @else
                    <span class="color">1</span>
                    <span>:</span>
                    <span>1</span>
                  @endif
                </div>
                <footer class="schedule">
                  <span class="team-name">{{ $currentMatch->home_team->venue }}</span>                  
                  <span class="time">{{ \Carbon\Carbon::parse($currentMatch->datetime)->tz('Europe/London')->format('d M H:i') }}</span>
                </footer>
              </div>
              <div class="team">
                <figure>
                  <img src="{{ $currentMatch->away_team->crest_url }}" alt="" class="team-background">
                  {{-- <img src="storage/resources/img/team2-logo.png" alt="" class="team-logo"> --}}
                  <figcaption>
                    {{ $currentMatch->away_team->name }}
                  </figcaption>
                </figure>
              </div>
            </div>
            <!-- End Result -->

            <!-- Start Upcoming -->
            <div class="upcoming col-lg-6 col-lg-offset-0 col-md-8 col-md-offset-2 col-sm-10 col-sm-offset-1 clearfix">
              <h4 class="border">Upcoming Matches</h4>
              <ul class="matches custom-list">
                @foreach($clubMatches as $match)
                  <li class="match">
                    <div class="team text-left">
                      <img src="{{ $match->home_team->crest_url }}" alt=""><span>{{ $match->home_team->name }}</span>
                    </div>
                    <div class="schedule">
                      {{-- <span class="team-name">{{ $match->home_team->venue }}</span> --}}
                      <span class="time">{{ \Carbon\Carbon::parse($match->datetime)->tz('Europe/London')->format('d M H:i') }}</span>
                    </div>
                    <div class="team right text-right">
                      <span>{{ $match->away_team->name }}</span>
                      <img src="{{ $match->away_team->crest_url }}" alt="">
                    </div>
                  </li>
                @endforeach
              </ul>
              <a class="button text-left prev"><i class="fa fa-angle-left"></i><span>Previous</span></a>
              <div class="match-week">
                
              </div>
              <a class="button text-right next"><span>Next</span><i class="fa fa-angle-right"></i></a>
            </div>
            <!-- End Upcoming -->

          </div>
          <!-- End Tab Seniors -->

        </div>
        <!-- End Matches -->

        <!-- Start Trainings -->
        <div class="tab-pane fade" id="trainings">

          <!-- Start Tab Seniors -->
          <div class="tab-pane fade active in" id="seniors-trainings">
            <div class="training-header col-lg-12 col-md-12 col-sm-12">
              <h4 class="border pull-left">Premier League Table</h4>
            </div>
            <div class="training-table col-lg-12 col-md-12 col-xs-12">
              <header></header>
              <table class="table">
                <tr>
                  <th class="col-lg-1 col-md-1 col-xs-1">Position</th>
                  <th class="col-lg-2 col-md-2 col-xs-2">Team</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Played</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Form</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Won</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Draw</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Lost</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Points</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">For</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Against</th>
                  <th class="col-lg-1 col-md-1 col-xs-1">Diff</th>
                </tr>
                @foreach($standings as $standing)
                  <tr>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->position }}</th>
                    <th class="col-lg-2 col-md-2 col-xs-2"><img src="{{ $standing->team->crest_url }}" style="width:30px"> {{ $standing->team->name }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->played_games }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->form }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->won }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->draw }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->lost }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->points }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->goals_for }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->goals_against }}</th>
                    <th class="col-lg-1 col-md-1 col-xs-1">{{ $standing->goal_difference }}</th>
                  </tr>
                @endforeach
              </table>
              <footer>
                <span></span>
              </footer>
            </div>
          </div>
          <!-- End Tab Seniors -->

        </div>
        <!-- End Trainings -->

      </div>
    </div>
    <!-- End Tab-Content -->

  </div>
  <!-- End About -->

  <!-- Start Teams -->
  <div id="teams" class="teams">
    <div class="container">

      <!-- Start Heading -->
      <div class="heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 class="border">Our Teams</h4>
      </div>
      <!-- End Heading -->

      <!-- Start Teams-Frame -->
      <div class="teams-frame col-lg-12">

        <!-- Start Tab Seniors -->
        <div class="tab-pane fade active in" id="senior-team">

          <!-- Start Team-Players -->
          @foreach($players as $player)
            <div class="team-players">
              <div class="player-profile">
                <img src="storage/resources/img/team-player6.jpg" alt="" class="thumbnail">
                {{-- <span class="number">21</span> --}}
                <span class="name">{{ $player->name }}</span>
              </div>
            </div>
          @endforeach
          <!-- End Team-Players -->

        </div>
        <!-- End Tab Seniors -->

      </div>
      <!-- End Teams-Frame -->

    </div>
  </div>
  <!-- End Teams -->

  <!-- Start News -->
  <div id="news" class="news">
    <div class="container">

      <!-- Start Heading -->
      <div class="heading col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <h4 class="border pull-left">Latest News</h4>
        <a href="#" class="rest pull-right"><span>See all news</span><i class="fa fa-arrow-circle-right"></i></a>
      </div>
      <!-- End Heading -->

      <!-- Start Single-News -->
      <div class="single-news col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <article>
          <img src="storage/resources/img/article-thumbnail.jpg" alt="" class="thumbnail">
          <div class="article-content">
            <h5><a href="#">#AFCvHCFC: live audio on Arsenal Player</a></h5>
            <p>Theo Walcott and Serge Gnabry in line to make return to action for club's second string at Meadow Park on Friday evening</p>
          </div>
        </article>
      </div>
      <!-- End Single-News -->

      <!-- Start Single-News -->
      <div class="single-news col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <article>
          <img src="storage/resources/img/article-thumbnail2.jpg" alt="" class="thumbnail">
          <div class="article-content">
            <h5><a href="#">Welbeck - I’m loving this new adventure</a></h5>
            <p>Theo Walcott and Serge Gnabry in line to make return to action for club's second string at Meadow Park on Friday evening</p>
          </div>
        </article>
      </div>
      <!-- End Single-News -->

      <!-- Start Single-News -->
      <div class="single-news col-lg-4 col-md-4 col-sm-12 col-xs-12">
        <article>
          <img src="storage/resources/img/article-thumbnail3.jpg" alt="" class="thumbnail">
          <div class="article-content">
            <h5><a href="#">#AFCvHCFC: live audio on Arsenal Player</a></h5>
            <p>Theo Walcott and Serge Gnabry in line to make return to action for club's second string at Meadow Park on Friday evening</p>
          </div>
        </article>
      </div>
      <!-- End Single-News -->

    </div>
  </div>
  <!-- End News -->

  <!-- Start Twitter -->
  <div class="twitter-widget loading">
    <div class="container">
      <div class="col-lg-12">
        <i class="fa fa-twitter"></i>
        <div class="widget-content">
          <div class="twitter-feed paginated" data-id="uouapps" data-limit="3" data-interval="0"><span class="loading-anim"><span></span></span></div>
        </div>
      </div>
    </div>
  </div>
  <!-- End Twitter -->

  <!-- Start Footer -->
  <footer id="footer">
    <div class="container">

      <!-- Start Footer-Top -->
      <div class="footer-top clearfix">
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">About FC</h5>
          <p>Lorem ipsum dolor sit amet consete adipisicing elit. Proin nibh augue.</p>
          <ul class="contact-info custom-list">
            <li><i class="fa fa-map-marker"></i><span>10 Milk Street #230 Boston, MA 02108</span></li>
            <li><i class="fa fa-phone"></i><span>+1 (123) 456-7890</span></li>
            <li><i class="fa fa-envelope"></i><span><a href="mailto:example@example.com">example@example.com</a></span></li>
          </ul>
        </div>
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">Information</h5>
          <ul class="custom-list">
            <li><a href="#">About the Club</a></li>
            <li><a href="#">Shop</a></li>
            <li><a href="#">Our Team</a></li>
            <li><a href="#">Tickets and Membership</a></li>
            <li><a href="#">Features</a></li>
            <li><a href="#">404 Error Page</a></li>
          </ul>
        </div>
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">Support</h5>
          <ul class="custom-list">
            <li><a href="#">Terms and Conditions</a></li>
            <li><a href="#">Website Accessibility Statement</a></li>
            <li><a href="#">Privacy Policy</a></li>
            <li><a href="#">Sitemap</a></li>
            <li><a href="#">FAQ</a></li>
            <li><a href="#">Account</a></li>
          </ul>
        </div>
        <div class="widget col-lg-3 col-md-3 col-sm-6">
          <h5 class="widget-title">Gallery</h5>
          <ul class="gallery custom-list row">
            <li><a href="#"><img src="storage/resources/img/gallery_footer.jpg" alt=""></a></li>
            <li><a href="#"><img src="storage/resources/img/gallery_footer2.jpg" alt=""></a></li>
            <li><a href="#"><img src="storage/resources/img/gallery_footer3.jpg" alt=""></a></li>
            <li><a href="#"><img src="storage/resources/img/gallery_footer4.jpg" alt=""></a></li>
            <li><a href="#"><img src="storage/resources/img/gallery_footer5.jpg" alt=""></a></li>
            <li><a href="#"><img src="storage/resources/img/gallery_footer6.jpg" alt=""></a></li>
          </ul>
        </div>
      </div>
      <!-- End Footer-Top -->

      <!-- Start Sposnors -->
      <div class="sponsors clearfix">
        <h5 class="text-center">Sponsors</h5>
        <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
          <img src="storage/resources/img/partner.png" alt="">
        </div>
        <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
          <img src="storage/resources/img/partner2.png" alt="">
        </div>
        <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
          <img src="storage/resources/img/partner3.png" alt="">
        </div>
        <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
          <img src="storage/resources/img/partner4.png" alt="">
        </div>
        <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
          <img src="storage/resources/img/partner5.png" alt="">
        </div>
        <div class="sponsor-logo text-center col-lg-2 col-md-2 col-sm-4">
          <img src="storage/resources/img/partner6.png" alt="">
        </div>
      </div>
      <!-- End Sponsors -->

    </div>

    <!-- Start Copyrights -->
    <div class="copyrights clearfix text-center">
      <p class="col-lg-12">© Copyright 2014 FC Theme. All Rights Reserved</p>
    </div>
    <!-- End Copyrights -->

  </footer>
  <!-- End Footer -->

  <!-- Start Back-to-Top -->
  <a href="#" id="back-to-top">
    <i class="fa fa-angle-up"></i>
  </a>
  <!-- End Back-to-Top -->

</div> 
<!-- end #main-wrapper -->

<!-- Scripts -->
<script src="storage/resources/js/jquery.min.js"></script>
<script src="storage/resources/js/scripts.js"></script>
<script src="storage/resources/js/owl.carousel.min.js"></script>
<script src="storage/resources/js/jquery.ba-outside-events.min.js"></script>
<script src="storage/resources/js/tab.js"></script>
<script src="storage/resources/js/bootstrap-datepicker.js"></script>
<script src="storage/resources/js/jquery.timelinr-0.9.54.js"></script>
<script src="storage/resources/js/jquery.vide.min.js"></script>
{{-- <script src="storage/resources/twitter/jquery.tweet.min.js" type="text/javascript"></script> --}}

</body>
</html>
