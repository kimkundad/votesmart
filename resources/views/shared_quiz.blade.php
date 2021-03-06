<html>
<head>
  <title>ถ้าต้องบริหารประเทศไทย</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <?php
    $time_fb = time();
   ?>
  <meta property="og:url"           content="https://votesmart.me/shared_quiz/{{$user->id}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="ถ้าต้องบริหารประเทศไทย" />
  <meta property="og:image"         content="https://votesmart.me/assets/image/shared/{{$user->image_shared}}?v={{$time_fb}}" />
  <meta property="og:description"   content="{{$user->name}} จะเลือกเรื่องเหล่านี้ วิสัยทัศน์ดีแบบนี้ เราเลยสร้างโปสเตอร์หาเสียงให้คุณแล้วล่ะ" />
  <meta property="og:image:width" content="600" />
  <meta property="og:image:height" content="314" />
  <meta property="fb:app_id" content="148045139197033">
  <meta property="fb:admins" content="100002037238809">



</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->

  <div class="col-md-8">
               <h3>ถ้าต้องบริหารประเทศไทย</h3>
               <p>{{$user->name}} จะเลือกเรื่องเหล่านี้ วิสัยทัศน์ดีแบบนี้ เราเลยสร้างโปสเตอร์หาเสียงให้คุณแล้วล่ะ</p>
               <hr>
               <img src="https://votesmart.me/assets/image/shared/{{$user->image_shared}}?v={{$time_fb}}" class="img-responsive">






             </div>

<div id="fb-root"></div>
<script>
setTimeout(function(){
  window.location = "{{url('/')}}";
}, 100);

(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/th_TH/sdk.js#xfbml=1&version=v2.12&appId=148045139197033&autoLogAppEvents=1';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>

  <!-- Your share button code -->
  <div class="fb-share-button"
    data-href="https://votesmart.me/shared_quiz/{{$user->id}}?v={{$time_fb}}"
    data-layout="button_count">
  </div>

</body>
</html>
