<html>
<head>
  <title>ถ้าต้องบริหารประเทศไทย</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <?php
    $time_fb = time();
   ?>
  <meta property="og:url"           content="http://devzab.com/shared_quiz/{{$user->id}}?v={{$time_fb}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="ถ้าต้องบริหารประเทศไทย" />
  <meta property="og:description"   content="{{$user->name}} จะเลือกเรื่องเหล่านี้ วิสัยทัศน์ดีแบบนี้ เราเลยสร้างโปสเตอร์หาเสียงให้คุณแล้วล่ะ" />
  <meta property="og:image:width" content="500" />
  <meta property="og:image:height" content="330" />
  <meta property="fb:app_id" content="148045139197033">
  <meta property="og:image"         content="http://devzab.com/assets/image/shared/{{$user->image_shared}}?v={{$time_fb}}" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->



<div id="fb-root"></div>
<script>
setTimeout(function(){
  window.location = "{{url('/')}}";
}, 900);

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12&appId=148045139197033&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button"
    data-href="http://devzab.com/shared_quiz/{{$user->id}}?v={{$time_fb}}"
    data-layout="button_count">
  </div>

</body>
</html>
