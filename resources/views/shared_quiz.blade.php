<html>
<head>
  <title>ถ้าต้องบริหารประเทศไทย</title>
    <!-- You can use Open Graph tags to customize link previews.
    Learn more: https://developers.facebook.com/docs/sharing/webmasters -->
  <meta property="og:url"           content="http://devzab.com/shared_quiz/{{$user->id}}" />
  <meta property="og:type"          content="website" />
  <meta property="og:title"         content="ถ้าต้องบริหารประเทศไทย" />
  <meta property="og:description"   content="{{$user->name}} จะเลือกเรื่องเหล่านี้ วิสัยทัศน์ดีแบบนี้ เราเลยสร้างโปสเตอร์หาเสียงให้คุณแล้วล่ะ" />
  <meta property="og:image"         content="http://devzab.com/assets/image/shared/{{$user->image_shared}}?time={{time()}}" />
</head>
<body>

  <!-- Load Facebook SDK for JavaScript -->
  <div id="fb-root"></div>
  <script>

  setTimeout(function(){
    window.location = "{{url('/')}}";
  }, 500);

  (function(d, s, id) {
    var js, fjs = d.getElementsByTagName(s)[0];
    if (d.getElementById(id)) return;
    js = d.createElement(s); js.id = id;
    js.src = "http://connect.facebook.net/en_US/sdk.js#xfbml=1";
    fjs.parentNode.insertBefore(js, fjs);
  }(document, 'script', 'facebook-jssdk'));




</script>

  <!-- Your share button code -->
  <div class="fb-share-button"
    data-href="http://devzab.com/shared_quiz/{{$user->id}}"
    data-layout="button_count">
  </div>

</body>
</html>
