@extends('master.master')

@section('content')

<div class="faq_background">
  <div class="container">
    <div class="faq_content">
      <div class="row">
        <div class="col-md faq_title">
          <h1>FAQ</h1>
        </div>
      </div>

      <div class="row">
        <div class="col-md-8 col-md-offset-2 faq" style="border:none" >
          <div class="panel-group" id="accordion">
            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content1">
                  <i class="indicator glyphicon glyphicon-chevron-up"> What is FRUNI PRINT?</i></a>
                </h4>
              </div>

              <div id="content1" class="panel-collapse collapse in">
                <div class="panel-body">
                  Founded in 2015, FRUNI PRINT is a Malaysian start-up run by former students.
                  It aims to change the world of advertising by making it beneficial to university
                  students. It provides free university printing sponsored by direct and targeted
                  advertisements.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content2">
                  <i class="indicator glyphicon glyphicon-chevron-down"> How do I register? </i></a>
                </h4>
              </div>

              <div id="content2" class="panel-collapse collapse">
                <div class="panel-body">
                  You may contact our Campus Ambassadors or email us at membership@fruniprint.com to
                  purchase Membership Card. Once you receive it, you will need to activate your card
                  at www.fruniprint.com/register with card serial number and its ready to use. You will
                  get one whole year of sponsored printing.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content3">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Is there any quota and how big is it?</i></a>
                </h4>
              </div>
              <div id="content3" class="panel-collapse collapse">
                <div class="panel-body">
                  There is a quota of 50 black and white pages per week. However, the quota is
                  subject to change depending on the number of advertisements secured.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content4">

                  <i class="indicator glyphicon glyphicon-chevron-down"> What file formats can I print?</i></a>
                </h4>
              </div>
              <div id="content4" class="panel-collapse collapse">
                <div class="panel-body">
                  You can print Word, PowerPoint and PDF files.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content5">

                  <i class="indicator glyphicon glyphicon-chevron-down"> How do I upload my files?</i></a>
                </h4>
              </div>
              <div id="content5" class="panel-collapse collapse">
                <div class="panel-body">
                  Login to your account at www.fruniprint.com/login to upload your
                  files. You can do it anytime from any device. Maximum upload storage is 25MB.
                  Your files will be kept for 24 hours.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content6">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Where do I print my files?</i></a>
                </h4>
              </div>
              <div id="content6" class="panel-collapse collapse">
                <div class="panel-body">
                  You can print your files at the nearest FRUNI SPOT to your campus.
                  Check out what campuses we are in on the Home Page.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content7">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I preview my documents?</i></a>
                </h4>
              </div>
              <div id="content7" class="panel-collapse collapse">
                <div class="panel-body">
                Yes, you can preview your documents when uploading. You can also
                set the number of slides per page.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content8">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I photocopy my files?</i></a>
                </h4>
              </div>
              <div id="content8" class="panel-collapse collapse">
                <div class="panel-body">
                  Unfortunately, this service is not available at the moment.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content9">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I print double-sided?</i></a>
                </h4>
              </div>
              <div id="content9" class="panel-collapse collapse">
                <div class="panel-body">
                  With sponsored printing, advertisements will be placed at the
                  back of the paper allowing you to print on one side. However,
                  with paid printing option, you can print double-sided.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content10">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I print in colour?</i></a>
                </h4>
              </div>
              <div id="content10" class="panel-collapse collapse">
                <div class="panel-body">
                  Unfortunately, this service is not available at the moment.
                  However, with paid printing option, you can print in colour.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content11">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I print A3 and bigger sizes?</i></a>
                </h4>
              </div>
              <div id="content11" class="panel-collapse collapse">
                <div class="panel-body">
                  Unfortunately, this service is not available at the moment.
                </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content12">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I print without advertisements?</i></a>
                </h4>
              </div>
              <div id="content12" class="panel-collapse collapse">
                <div class="panel-body">
                  You can print your assignments and other academic documents without advertisements
                  with paid printing option.
               </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content13">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Is the printing service available 24/7?</i></a>
                </h4>
              </div>
              <div id="content13" class="panel-collapse collapse">
                <div class="panel-body">
                  For every FRUNI SPOT, opening times vary. However, the service
                  is certainly available on weekdays 8am – 6pm.
               </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content14">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I print without the card?</i></a>
                </h4>
              </div>
              <div id="content14" class="panel-collapse collapse">
                <div class="panel-body">
                  Card provides security and make sure only you have access to your account.
                  Bring it along to FRUNI SPOT in order to print.
               </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content15">

                  <i class="indicator glyphicon glyphicon-chevron-down"> What if I lost my card?</i></a>
                </h4>
              </div>
              <div id="content15" class="panel-collapse collapse">
                <div class="panel-body">
                  If you lost your card, please email us at membership@fruniprint.com
                  and we will get it replaced for you. The replacement fee if RM10.
               </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content16">

                  <i class="indicator glyphicon glyphicon-chevron-down"> What to do if there is a printing problem?</i></a>
                </h4>
              </div>
              <div id="content16" class="panel-collapse collapse">
                <div class="panel-body">
                  If printing problem occurs, please contact the person in
                  charge on FRUNI SPOT in your campus or email us at info@fruniprint.com
                  and we will look into it.
               </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content17">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Can I pass my card to other students?</i></a>
                </h4>
              </div>
              <div id="content17" class="panel-collapse collapse">
                <div class="panel-body">
                  No, the card is not transferable. Only you can use it.
               </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content18">

                  <i class="indicator glyphicon glyphicon-chevron-down"> How do I stay updated on FRUNI PRINT news?</i></a>
                </h4>
              </div>
              <div id="content18" class="panel-collapse collapse">
                <div class="panel-body">
                  Like our Facebook page and follow us on Instagram to stay tuned. We will be posting
                  all the news and announcements there.
               </div>
              </div>
            </div>

            <div class="panel panel-default">
              <div class="panel-heading">
                <h4 class="panel-title">
                  <a class="accordion-toggle" data-toggle="collapse" data-parent="#accordion" href="#content19">

                  <i class="indicator glyphicon glyphicon-chevron-down"> Anything we missed out?</i></a>
                </h4>
              </div>
              <div id="content19" class="panel-collapse collapse">
                <div class="panel-body">
                  If there is anything we haven’t covered, shoot us at info@fruniprint.com
                  and we will get back to you.
               </div>
              </div>
            </div>

        </div>
      </div>
    </div>
  </div>
</div>
</div>

<!-- *****************footer******************* -->

<footer>
<div class="student_footer">
  <div class="row stud_foot">
    <div class="col-md-9 col-md-offset-2">
      <div class="col-md-1 fb_involve">
        <img src="img/05_get involved_small fb icon.png" alt="">
      </div>

      <div class="col-md-1 insta_involve">
        <img src="img/05_get involved_small insta icon.png" alt="">
      </div>

      <div class="col-md-2 text-center email_icon">
        <img src="img/05_get involved_small email icon.png" alt="">
        <p>info@fruniprint.com</p>
      </div>

      <div class="col-md-2 ftp_involve">
         <a href="#">FAQ</a><br>
         <a href="#">Terms of Use </a><br>
         <a href="#">Privacy Policy</a>
      </div>

      <div class="col-md-2 abf_involve">
        <a href="#">About</a><br>
        <a href="#">Blog</a><br>
        <a href="#">For Sponsors</a>
      </div>

      <div class="col-md-4 copyright_involve">
        <img src="img/05_get involved_copyright icon.png" alt="">
        FRUNI PRINT Sdn Bhd.2016.
      </div>
    </div>


  </div>


</div>
</footer>

<!-- ****************js******************* -->

<script type="text/javascript">
function toggleChevron(e) {
  $(e.target)
      .prev('.panel-heading')
      .find("i.indicator")
      .toggleClass('glyphicon-chevron-down glyphicon-chevron-up');
}
$('#accordion').on('hidden.bs.collapse', toggleChevron);
$('#accordion').on('shown.bs.collapse', toggleChevron);
</script>


<!-- <script type="text/javascript">
function anything() {
  $(document).ready(function() {
      $('.collapse').on('show.bs.collapse', function(){
        $(this).parent().find('glyphicon-menu-down').removeClass('glyphicon-menu-down').addClass('glyphicon-menu-up');
      }).on('hidden.bs.collapse', function(){
        $(this).parent().find('glyphicon-menu-up').removeClass('glyphicon-menu-up').addClass('glyphicon-menu-down');
      })
});
}


</script> -->


@stop
