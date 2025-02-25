<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Roulette Wheel</title>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
    <script type="text/javascript" src="./../js/roulette.js"></script>
  </head>
  <body>
    <div>
      <canvas id="canvas" width="500" height="500"></canvas>
    </div>
    <div>
      <input id="roulette-reset" type="button" value="reset roulette">
      <input id="roulette-start" type="button" value="start roulette">
      <input id="roulette-stop" type="button" value="stop roulette">

      <input id="roulette-stop-angle" type="button" value="stop roulette with angle">
      <label for="roulette-stop-angle-value"></label>
      <input id="roulette-stop-angle-value" type="number" value="0">
    </div>
    <div style="font-family:sans-serif;padding:5px;">
      <div id="roulette-time"></div>
      <div id="roulette-angle"></div>
      <div id="roulette-velocity"></div>
      <div id="roulette-spinning"></div>
      <img src="roulette.png" id="image" hidden/>
    </div>
    <script>
      $(document).ready(function() {
        var update = function(tag, data) {
          $('#roulette-time').text('Roulette Time : ' + data.time + 'ms');
          $('#roulette-angle').text('Roulette Angle : ' + data.angle%360 + '°');
          $('#roulette-velocity').text('Roulette Angular Velocity : ' + data.velocity + '°/' + data.step + 'ms');
          $('#roulette-spinning').text('Roulette Spinning : ' + data.spinning);
        };
        var roulette = Roulette(
          document.getElementById('image'),
          document.getElementById('canvas'),
          {
            onRender: function(data) {
              update("Render", data);
            },
            onStop: function(data) {
              update("Stopped", data);
            }
          }
        );
        $('#roulette-reset').click(roulette.reset);
        $('#roulette-start').click(roulette.start);
        $('#roulette-stop').click(function() {
          roulette.stop();
        });
        $('#roulette-stop-angle').click(function() {
          roulette.stop($('#roulette-stop-angle-value').val());
        })
      });
    </script>
      <script src="biblio/custom.js"></script>
      <script src="biblio/singlePageNav.js"></script>
      <script src="biblio/bootstrap.js"></script>
<script src ="biblio/jquery-3.4.1.min.js"></script>
        <script src ="biblio/typed.min.js"></script>
     <script src ="biblio/typed.min.js"></script>
    <script src="biblio/bootstrap.min.js"></script>
    <script src="biblio/popper.min.js"></script>
<script src="biblio/coverflow-slideshow.js"></script>
 <script src ="biblio/jquery.min.js"></script>
    <script src ="biblio/swiper.min.css"></script>
             	<script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
  <script src="biblio/bootstrap.bundle.min.js"></script>
  <script src="biblio/jquery.easing.min.js"></script>
  </body>
</html>