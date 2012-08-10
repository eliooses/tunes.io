<!DOCTYPE html>
<html>
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap.css" rel="stylesheet">
    <link href="http://twitter.github.com/bootstrap/assets/css/bootstrap-responsive.css" rel="stylesheet">
    <style>
      body {
        padding-top: 150px;
        background-image: url('background.jpg');
      }
    </style>
    <title>tunes.io</title>
  </head>
  <body>
    <div class="navbar navbar-fixed-top">
      <div class="navbar-inner">
        <div class="container">
          <a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </a>
          <a class="brand" href="#">tunes.io</a>
          <ul class="nav">
            <li class=""><a href="top40.php">Top 40</a></li>
            <li class=""><a data-toggle="modal" href="#aboutBox">About</a></li>
          </ul>
        </div>
      </div>
      </div>
      <div class="container" style="width:50%">
        <div class="hero-unit">
          <h1 align="center">tunes.io</h1>
          <h3 align="center"><i>music torrent search</i></h3>
          <br /><br /><br />
          <form action="search.php">
            <div class="input-append" align="center">
              <input class="span2" style="width: 80%;" id="appendedInputButton" size="16" name="q" type="text"><button class="btn" type="submit"><i class="icon-search"></i></button>
            </div>
          </form>
        </div>
      </div>
      <div class="modal hide" id="myModal">
          <div class="modal-header">
            <button type="button" class="close" data-dismiss="modal">×</button>
            <h3>Modal header</h3>
          </div>
          <div class="modal-body">
            <p>One fine body…</p>
          </div>
          <div class="modal-footer">
            <a href="#" class="btn" data-dismiss="modal">Close</a>
            <a href="#" class="btn btn-primary">Save changes</a>
          </div>
      </div>
    </div>
    <div class="modal hide" id="aboutBox">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">×</button>
        <h3>About tunes.io</h3>
      </div>
      <div class="modal-body">
        <p>
            tunes.io combines a pleasant and great-looking user interface with all the functionality needed to find and collect the best albums out there.
        </p>
        <p>
            Search for any album and you will get a minimalist view with cover art, descriptions, track listing, torrent links and more.
        </p>
        <p>
            Sources:
            <br />
            <ul>
                <li><a href="http://www.last.fm/">Last.fm</a> is the source for music information and artwork.</li>
                <li>Torrent search is powered by <a href="http://www.fenopy.eu/">Fenopy</a>.</li>
                <li>Huge thanks to Twitter for their <a href="http://twitter.github.com/bootstrap/">Twitter Bootstrap</a>.</li>
            </ul>
        </p>
        <p>
            Legal:
            <br />
            <ul>
                <li>Please don't download content that you don't have a legal right to.</li>
                <li>We do not store or distribute any copyrighted material, nor any torrent files.</li>
                <li>Our search process is entirely automated.</li>
            </ul>
        </p>
        <p>
            <b>Tip</b>: Hover over the 'Download' link to get the full torrent name.
        </p>
      </div>
      <div class="modal-footer">
        <a href="#" class="btn" data-dismiss="modal">Close</a>
      </div>
    </div>
    <script src="http://twitter.github.com/bootstrap/assets/js/jquery.js"></script>
    <script src="http://twitter.github.com/bootstrap/assets/js/bootstrap-modal.js"></script>
    <script type="text/javascript">
    jQuery(document).ready(function ($) {
      var _gaq = _gaq || [];
      _gaq.push(['_setAccount', 'UA-34026217-1']);
      _gaq.push(['_trackPageview']);

      (function() {
        var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
        ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
        var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
      })();
    });
    </script>
  </body>
</html>
