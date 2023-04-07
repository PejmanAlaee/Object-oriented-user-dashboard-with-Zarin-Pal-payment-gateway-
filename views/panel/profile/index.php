<div class="content">
  <div class="container-fluid">
    <div class="row" style="margin-top: 14px;">
      <div class="col-md-8">
        <div class="card">
          <div class="card-header card-header-primary">
            <h4 class="card-title">Edit Profile</h4>
            <p class="card-category">Complete your profile</p>
          </div>
          <div class="card-body">
            <form action="" method="post">
              <div class="row" style="margin-top: 18px;">
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">نام و نام خانوادگی</label>
                    <input type="text" class="form-control" value="<?php echo $current_user[0]->display_name ?>"
                      name="user_display_name">
                  </div>
                </div>
                <div class="col-md-6">
                  <div class="form-group">
                    <label class="bmd-label-floating">آدرس ایمیل</label>
                    <input type="email" class="form-control " readonly
                      value="<?php echo $current_user[0]->user_email ?>" name="user_email"
                      style="background-color:#091732  ; padding: 0px 8px ;">
                  </div>
                </div>
              </div>
              <div class="row" style="margin-top: 14px;">
                <div class="col-md-4">
                  <div class="form-group">
                    <label class="bmd-label-floating">شهر</label>
                    <input type="text" class="form-control" name="user_city" value="<?php if (isset($another_value[0]->user_city))
                      echo $another_value[0]->user_city ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">کشور</label>
                      <input type="text" class="form-control" name="user_country" value="<?php if (isset($another_value[0]->user_country))
                      echo $another_value[0]->user_country ?>">
                    </div>
                  </div>
                  <div class="col-md-4">
                    <div class="form-group">
                      <label class="bmd-label-floating">شماره تلفن </label>
                      <input type="number" class="form-control" name="user_phone" value="<?php if (isset($another_value[0]->user_phone))
                      echo $another_value[0]->user_phone ?>">
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-top: 14px;">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">آدرس</label>
                      <input type="text" class="form-control" name="user_address" value="<?php if (isset($another_value[0]->user_address))
                      echo $another_value[0]->user_address ?>">
                    </div>
                  </div>
                </div>
                <div class="row" style="margin-top: 14px;">
                  <div class="col-md-12">
                    <div class="form-group">
                      <label class="bmd-label-floating">وبسایت </label>
                      <input type="text" class="form-control" name="user_website" value="<?php if (isset($another_value[0]->user_website))
                      echo $another_value[0]->user_website ?>">
                    </div>
                  </div>
                </div>

                <button type="submit" class="btn btn-primary pull-right" name="update-user-form">ثبت</button>
                <div class="clearfix"></div>
              </form>
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="card card-profile">
            <div class="card-avatar">
              <a href="#pablo">

                <?php
                    $user = wp_get_current_user();
                    if (function_exists('get_avatar')) {
                      echo get_avatar($user->user_email, 100);
                    } else {
                      //alternate gravatar code for < 2.5
                      $grav_url = "http://www.gravatar.com/avatar.php?gravatar_id=
     " . md5($user->user_email) . "&default=" . urlencode($default) . "&size=" . $size;
                      echo "<img class=img src='$grav_url' />";
                    }
                    ?>
            </a>
          </div>
          <div class="card-body">
            <p class="card-description">
              هیچ اندیشه‌ ای زشت نیست ؛
              .اندیشه‌ ای که اجبار شود زشت می‌ شود
              هیچ فردی زشت نیست ؛
              .فردی که زیبا نیندیشد زشت می‌ شود
              انسان‌ ها همه با محبت‌ اند ؛
              .انسانی که اراده‌ اش را تحمیل می‌ کند ، ظالم است
              انسان‌ ها همه عاشقند ؛
              .انسانی که نیاموخته عشق بورزد ، بی‌تفاوت است
              انسان‌ ها همه شادند ؛
              .انسانی که نیاموخته شادی را لمس کند ، افسرده و غمگین است
               از امروز زیبا ببینیم 
            </p>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>