<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Votesmart - โหวตได้โหวตดี</title>

    <!-- Bootstrap core CSS -->
    <link href="{{url('front/vendor/bootstrap/css/bootstrap.css')}}" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="{{url('front/vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet" type="text/css">

    <!-- Plugin CSS -->
    <link href="{{url('front/vendor/magnific-popup/magnific-popup.css')}}" rel="stylesheet">

    <!-- Custom styles for this template -->
    <link href="{{url('front/css/creative.css')}}" rel="stylesheet">
    <link href="{{url('front/css/css/style.css')}}" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Kanit" rel="stylesheet">




  </head>

  <body id="page-top" style="background: #f2f8fa;">

    <style>
    body,
    html {
      font-size: 0.8rem;
      font-family: 'Kanit', sans-serif;
    }
    .panel-body {
        background: #fdfdfd;
        -webkit-box-shadow: 0 1px 1px rgba(0, 0, 0, 0.05);
        padding: 20px;
        border-radius: 10px;
        box-shadow: 0 8px 12px rgba(0, 0, 0, 0.12);
    }
    .well.info {
      background: #d5ebf3;
      border-color: #89d1e6;
        color: #0f93c3;
      font-size: 14px;
    }
    .well {
    min-height: 20px;
    padding: 8px 8px;
    margin-bottom: 5px;
    background-color: #f5f5f5;
    border: 1px solid #e3e3e3;
    border-radius: 4px;
    -webkit-box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    box-shadow: inset 0 1px 1px rgba(0, 0, 0, .05);
    }
    </style>



    <section id="contact">
      <div class="container candidate-link">
        <div class="row">
          <div class="col-lg-6 mx-auto text-center">
            <div class="panel-body">

              <form  method="POST" id="my_form" action="{{url('add_public')}}">
                {{ csrf_field() }}
                <input type="hidden" name="user_id" value="{{ Auth::user()->id }}" class="form-control">
              <div class="share-vision">
                <img src="{{url('assets/image/VOTE.jpg')}}" ><br>
                <h2 class="mb-4 section-heading " style="color: #0479BD;">แสดงผลลัพธ์ของคุณ<br>บนหน้าเว็บของเรา?</h2>
                <h5>เลือกแสดงผลบนหน้าเว็บอของเรา<br>หากคุณอยากแชร์ความคิดเห็นให้คนอื่นได้รู้</h5>
                <p style="color: #777;font-size: 13px;">(หรือจะเลือกไม่แสดงก็ได้ ถ้ารู้สึกว่ามันค่อนข้าง<br>จะเป็นเรื่องส่วนตัวหน่อยๆ)</p><br>
                <div class="well info">

                  <label style="margin-bottom: 0px;">
															<input type="checkbox" value="1" name="confirm">
															ฉันยินดีให้แสดงสิ่งที่ฉันเลือก บนเว็บไซต์นี้
														</label>

									</div>
              </div>

              <br>
                <a class="btn btn-xl btn-primary " id="shared" style=" font-weight: 400; font-size:14px; color: #fff;" href="javascript:{}" onclick="document.getElementById('my_form').submit();">
           ดูผลลัพธ์ของคุณ </a>

           </form>


            </div>

          </div>
        </div>
      </div>
    </section>


    <!-- Bootstrap core JavaScript -->
    <script src="{{url('front/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{url('front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Plugin JavaScript -->
    <script src="{{url('front/vendor/jquery-easing/jquery.easing.min.js')}}"></script>
    <script src="{{url('front/vendor/scrollreveal/scrollreveal.min.js')}}"></script>
    <script src="{{url('front/vendor/magnific-popup/jquery.magnific-popup.min.js')}}"></script>


    <!-- Custom scripts for this template -->









  </body>

</html>
