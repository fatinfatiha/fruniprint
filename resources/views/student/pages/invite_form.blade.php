@include('student.include.header')

<div class="invitation_background">
  <div class="row">
    <div class="col-md-8 col-md-offset-2 text-center invite_title">
      <h1>Invite</h1>
    </div>

    <div class="col-md-12 col-md-offset-2 ">
      <div class="col-md-8 col-md-offset-1 text-center">
        <form class="form-horizontal form_content">
          <div class="form-group">
            <label for="name" class="col-sm-2 control-label">Name</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="name">
            </div>
          </div>

          <div class="form-group">
            <label for="university" class="col-sm-2 control-label">University</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="university">
            </div>
          </div>

          <div class="form-group">
            <label for="email" class="col-sm-2 control-label">Email</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="email">
            </div>
          </div>

          <div class="form-group">
            <label for="number" class="col-sm-2 control-label">Mobile number</label>
            <div class="col-sm-10">
              <input type="text" class="form-control" id="number">
            </div>
          </div>
      </div>


        <div class="col-md-8 col-md-push-1 check_invite">
          <div class="form-group">
            <div class="col-sm-offset-2 col-sm-10">
              <div class="checkbox">
                <label>
                  <input type="checkbox"> Yes,I want FRUNI PRINT in my campus!
                </label>
              </div>
            </div>
          </div>
        </div>

      <div class="col-md-8 col-md-push-3 ">
        <div class="form-group">
          <div class="col-sm-offset-2 col-sm-10 btn_invite">
            <a href="invite-success"><input type="submit" name="button2" value="INVITE" class="btn btn-default"></button></a>
          </div>
        </div>
        </div>

      </form>

    </div>
  </div>




</div>
