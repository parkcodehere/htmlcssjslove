@extends('layout.bootstrap.base')

@section('head')
<style>
  .item {
    display: none;
    /*color: white;*/
  }

  .item h1 {
    margin: 0;
    padding: 16px;
    text-align: center;
  }

  .n1 {
    background: red;
    /*background: #EA4335;*/
    /*background: Cinnabar;*/
  }
  .n2 {
    background: yellow;
    /*background: #FBBC05;*/
    /*background: SelectiveYellow;*/
  }
  .n3 {
    background: green;
    /*background: #34A853;*/
    /*background: ChateauGreen;*/
  }
  .n4 {
    background: blue;
    /*background: #4285F4;*/
    /*background: RoyalBlue;*/
  }

  .google-logo-wrapper {
    text-align: center;
    padding-top: 16px;
  }

  .google-logo {
    display: inline-block;
    position: relative;
    width: 256px;
    height: 256px;
  }
  .google-logo img {
    position: absolute;
    width: 256px;
    top: 0;
    left: 0;
  }

  .google-logo-wrapper-small .google-logo
  , .google-logo-wrapper-small .google-logo img {
    width: 64px;
    height: 64px;
  }

  .question {
    text-align: center;
    display: none;
    padding-top: 32px;
  }
</style>
@endsection

@section('content')

<div class="color-names">
  <div class="item n1">
    <h1>Red</h1>
  </div>
  <div class="item n2">
    <h1>Yellow</h1>
  </div>
  <div class="item n3">
    <h1>Green</h1>
  </div>
  <div class="item n4">
    <h1>Blue</h1>
  </div>
</div>

<div class="google-logo-wrapper">
  <div class="google-logo">
    <img src="/img/fun/google-logo-colors/1.png">
    <img src="/img/fun/google-logo-colors/2.png">
    <img src="/img/fun/google-logo-colors/3.png">
    <img src="/img/fun/google-logo-colors/4.png">
  </div>
</div>

<div class="question">
  <span
    style="font-size: 64px;">?</span>
  <p style="display: none;" class="lead">
    <button
      type="button"
      class="btn btn-secondary btn-lg"
    >Click Here For The Answer</button>
    <br>
    <br>
    P.S. I'm really sorry for your eyes XP,
    click the button before they start to hurt!
  </p>
</div>

<div class="answer"
  style="display: none;text-align: center;padding-top: 8px;">
  <div class="google-logo-wrapper-small">
    <div class="google-logo">
      <img src="/img/fun/google-logo-colors/1.png">
      <img src="/img/fun/google-logo-colors/2.png">
      <img src="/img/fun/google-logo-colors/3.png">
      <img src="/img/fun/google-logo-colors/4.png">
    </div>
  </div>
  <p class="lead">
    Better?
    <br>
    <button class="btn btn-secondary btn-lg">
      <i class="fa fa-refresh"></i>
    </button>
  </p>
</div>

@endsection

@section('body')
  <script>
    $(function() {

      var timeSpace = 500;

      function animate(i, img, name) {
        setTimeout(function() {
          img.fadeOut();
          name.slideDown();
        }, timeSpace*i);
      }

      var imgs = $(".google-logo-wrapper .google-logo img");
      var names = $(".color-names .item");
      for (var i = 0;i < imgs.length;i++) {
        var img = $(imgs[i]);
        var name = $(names[i]);
        animate(i+1, img, name);
      }

      setTimeout(function() {
        $(".google-logo-wrapper").hide();
        $(".question").fadeIn('slow');
      }, timeSpace*i);
      setTimeout(function() {
        $(".question span").fadeOut('slow');
      }, timeSpace*(i+3));
      setTimeout(function() {
        $(".question p").fadeIn('slow');
      }, timeSpace*(i+4));

      $(".answer .btn").click(function() {
        location.reload();
      });

      $(".question .btn").click(function() {

        $(".question").fadeOut();

        $(".color-names .item").animate({
          width: "0%"
        }, timeSpace, function() {
          $(".color-names .item h1").css('visibility', 'hidden');
          var colors = [
            ['#EA4335', 'Cinnabar'],
            ['#FBBC05', 'Selective Yellow'],
            ['#34A853', 'Chateau Green'],
            ['#4285F4', 'Royal Blue'],
          ];
          for(var i = 0;i < names.length;i++) {
            var name = $(names[i]);
            name.css('background', colors[i][0]);
            name.find('h1').text(colors[i][1]);
          }
        });

        setTimeout(function() {
          $(".color-names .item").animate({
            width: "100%"
          }, timeSpace, function() {
            $(".color-names").css('color', 'white');
            $(".color-names .item h1").css('visibility', 'visible');
            $(".answer").fadeIn();
          });
        }, timeSpace);
      });
    });
  </script>
@endsection
