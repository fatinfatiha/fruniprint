@extends('master.master')

@section('content')

<!-- ***************HOME***************** -->
<body data-spy="scroll" data-target="#mainSidebar" data-offset="170">
  <div class="row">
    <div id="mainSidebar" class="navbar nav">
      <div class="col-md-1 col-md-offset-5 progressbar">
          <img src="img/progress bar.png" alt="">
      </div>
        <div class="col-md-11 progressbar">
          <ul class="nav">
            <li class="active"><a href="#homestudent">Home</a></li>
            <li><a href="#homeprint">How to print</a></li>
            <li><a href="#ads_student">Ads for you</a></li>
            <li><a href="#campus_student">Campuses</a></li>
            <li><a href="#get_involve">Get involved</a></li>
          </ul>
        </div>
    </div>
  </div>

<div id="homestudent" class="row homestudent">
    <div class="row">
      <div class="col-md-8 col-md-offset-2 livecounter">
        <h2>Sponsored printing given this month</h2>
      </div>
    </div>

    <div class="row">
      <div class="col-md-8 col-md-offset-2 text-center loginbtn ">
        <img src="img/loginbutton.png">
      </div>
    </div>

    <div class="row">
      <div class="col-md-12 text-center arrowbtn">
        <img src="img/01_home_arrow down.png" alt="">
      </div>
    </div>

</div>

<!-- *************END HOME********************** -->

<!-- **************HOW TO PRINT**************** -->

<div id="homeprint" class="homeprint">
  <div class="row">
    <div class="col-sm-12 col-md-8 col-md-offset-2 printtitle">
      <h1>How to print</h1>
    </div>
  </div>

  <div class="row howtologo">
    <div class="col-sm-10 col-sm-offset-2 col-md-10 col-md-offset-2">
      <div class="col-sm-12 col-md-2">
        <div class="col-md-12 col-sm-6 col-sm-push-2 img_register">
          <img src="img/02_how to print_register icon.png" alt=""><br>
        </div>
        <div class="col-md-12 col-sm-6 col-sm-pull-1">
          <h3>Register</h3>
          <p>for one whole <br> year of sponsored <br> printing</p>
        </div>
      </div>

      <div class="col-sm-12 col-md-2">
        <div class="col-md-12 col-sm-6 col-sm-push-2 img_login">
          <img src="img/02_how to print_login icon.png" alt="">
        </div>
        <div class="col-md-12 col-sm-6 col-sm-pull-1">
          <h3>Login</h3>
          <p>to your personal <br> secured account <br> on the website </p>
        </div>
      </div>

      <div class="col-sm-12 col-md-2">
        <div class="col-md-12 col-sm-6 col-sm-push-2 img_upload ">
          <img src="img/02_how to print_upload icon.png" alt="">
        </div>
        <div class="col-md-12 col-sm-6 col-sm-pull-1">
          <h3>Upload</h3>
          <p>your study <br> materials anytime <br> from any device</p>
        </div>
      </div>

      <div class="col-sm-12 col-md-2">
        <div class="col-md-12 col-sm-6 col-sm-push-2 img_print">
          <img src="img/02_how to print_print icon.png" alt="">
        </div>
        <div class="col-md-12 col-sm-6 col-sm-pull-1">
          <h3>Print</h3>
          <p>at the nearest <br> FRUNI SPOT <br> in your campus</p>
        </div>
      </div>

      <div class="col-sm-12 col-md-2">
        <div class="col-md-12 col-sm-6 col-sm-push-2 img_collect">
            <img src="img/02_how to print_collect icon.png" alt="">
        </div>
        <div class="col-md-12 col-sm-6 col-sm-pull-1">
          <h3>Collect</h3>
          <p>your documents <br> and have an <br> awesome day</p>
        </div>
      </div>
    </div>

    </div>

  <div class="row">
    <div class="col-md-12 regbtn">
      <img src="img/registerbutton.png" alt="">
    </div>
  </div>

</div>

<!-- ****************END HOW TO PRINT****************** -->

<!-- ****************Student Ads***************** -->

<div id="ads_student" class="ads_student">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center adslogo">
      <h1>Ads for you</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md col-md-offset-2 sentence1">
      <h3>We let university students <br> print for free by placing <br>
        advertisements at the <br> back of the paper.</h3>
    </div>
  </div>

  <div class="row">
    <div class="col-md col-md-offset-2 sentence2">
      <h3>You will have access <br> to the best deals <br> and opportunities <br>
        targeting youth.</h3>
    </div>
  </div>

</div>

<!-- *****************End Student Ads****************** -->

<!-- ****************Campus Spot******************** -->

<div id="campus_student" class="campus_student">
  <div class="row">
    <div class="col-md text-center campus_title">
      <h1>FRUNI SPOTS</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="col-xs-12 col-xs-push-1 col-sm-12 col-sm-push-2 col-md-3 col-md-push-0 vline vline1">
        <div class="col-md-12">
          <img src="img/04_campuses_taylors logo.png" alt=""><hr>
        </div>
        <div class="col-md-12">
          <strong>Taylor's Lakeside</strong><br>
          Taylor's Business School <br> Divisional Office,Block E,L2
        </div>
      </div>

      <div class="col-xs-12 col-xs-push-1 col-sm-12 col-sm-push-2 col-md-3 col-md-push-0 vline vline2">
        <div class="col-md-12">
          <img src="img/04_campuses_sunway logo.png" alt=""><hr>
        </div>
        <div class="col-md-12 col-xs-push-2 col-sm-push-0">
          <strong>Sunway</strong><br>
          Coming soon
        </div>
      </div>

      <div class="col-xs-12 col-xs-push-1 col-sm-12 col-sm-push-2 col-md-3 col-md-push-0 vline vline3">
        <div class="col-md-12">
          <img src="img/04_campuses_monash logo.png" alt=""><hr>
        </div>
        <div class="col-md-12 col-xs-push-2 col-sm-push-0">
          <strong>Monash</strong><br>
          Coming soon
        </div>
      </div>

      <div class="col-xs-12 col-xs-push-1 col-sm-12 col-sm-push-2 col-md-3 col-md-push-0 hr1">
        <div class="col-xs-pull-2  col-sm-pull-0 col-md-12 inti_logo">
          <img src="img/04_campuses_inti logo.png" alt=""><hr>
        </div>
        <div class="col-md-12 col-xs-push-2 col-sm-push-0">
          <strong>INTI Subang</strong><br>
          Coming soon
        </div>
      </div>
    </div>

  </div>

  <div class="row">
    <div class="col-sm-12 col-md-12 text-center invite_sentence">
      Can't find you campus? <br> Invite us and we will come to you.
    </div>
  </div>

  <div class="row">
    <div class="col-sm-12 col-md-12 text-center invitebtn">
      <img src="img/invitebutton.png" alt="">
    </div>
  </div>

</div>

<!-- ******************End Campus Spot******************* -->

<!-- ******************Get Involve******************** -->

<div id="get_involve" class="get_involve">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center involve_title">
      <h1>Get involved</h1>
    </div>
  </div>

  <div class="row">
    <div class="col-md-12 text-center involve_sentence">
      Wanna join the journey? <br> Become our Campus Ambassador and get rewarded.
    </div>
  </div>
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center joinbtn">
      <img src="img/joinbutton.png" alt="">
    </div>
  </div>
</div>

<div class="stay_connected">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center connected_title">
      <h1>Stay connected</h1>
    </div>
  </div>

  <div class="row involve_logo">
    <div class="col-md-8 col-md-offset-2">
      <div class="col-sm-4 col-md-4 fb_icon ">
        <img src="img/05_get involved_fb icon.png" alt="">
      </div>

      <div class="col-sm-4 col-md-4 insta_icon">
        <img src="img/05_get involved_insta icon.png" alt="">
      </div>

      <div class="col-sm-4 col-md-4 email_icon">
        <img src="img/05_get involved_email icon.png" alt="">
      </div>
    </div>



  </div>
</div>

</body>

<!-- *****************footer********************* -->

<footer>
<div class="student_footer">
  <div class="row stud_foot">
    <div class="col-md-8 col-md-offset-2">
      <div class="col-md-1 col-sm-1 col-xs-12 fb_involve">
        <img src="img/05_get involved_small fb icon.png" alt="">
      </div>

      <div class="col-md-1 col-sm-1 col-xs-12 insta_involve">
        <img src="img/05_get involved_small insta icon.png" alt="">
      </div>

      <div class="col-md-2 col-sm-2 col-xs-12 text-center email_icon">
        <img src="img/05_get involved_small email icon.png" alt="">
        <p>info@fruniprint.com</p>
      </div>

      <div class="col-md-2 col-md-push-1 col-sm-2 col-sm-push-1 col-xs-12 ftp_involve">
         <a href="#">FAQ</a><br>
         <a href="#">Terms of Use </a><br>
         <a href="#">Privacy Policy</a>
      </div>

      <div class="col-md-2 col-md-push-1 col-sm-2 col-sm-push-1 col-xs-12  abf_involve">
        <a href="#">About</a><br>
        <a href="#">Blog</a><br>
        <a href="#">For Sponsors</a>
      </div>

      <div class="col-md-4 col-md-push-1 col-sm-4 col-sm-push-1 col-xs-12 copyright_involve">
        <img src="img/05_get involved_copyright icon.png" alt="">
        FRUNI PRINT Sdn Bhd.2016.
      </div>
    </div>


  </div>


</div>
</footer>

<script type="text/javascript">
$('#mainSidebar ul li a').bind('click', function(e) {
  e.preventDefault();
  $('html, body').animate({
      scrollTop: $(this.hash).offset().top -190
  }, 300);
  // edit: Opera requires the "html" elm. animated
});

</script>

@stop
