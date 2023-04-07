<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-6" style="margin: 0 auto;">
        <div class="card card-chart" style="height: 70%;">
          <div class="card-header card-header-success" style="height: 84%;">
            <img src="<?php echo ASSETS_URL . 'img/User-Profile-PNG.png' ?>" alt=""
              style="display: block; margin:  0 auto; width: 34%; height: 100%;">
          </div>
          <div class="card-body">
            <h4 class="card-title" style="direction: rtl; text-align: center;">نام و نام خانوادگی :
              <?php echo $current_user->display_name ?>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-xl-6 col-lg-6" style="margin: 0 auto;">
        <div class="card card-chart" style="height: 70%;">
          <div class="card-header card-header-success" style="height: 84%;">
            <img src="<?php echo ASSETS_URL . 'img/pic5.png' ?>" alt=""
              style="display: block; margin:  0 auto; width: 31%; height: 100%; ">
          </div>
          <div class="card-body">
            <h4 class="card-title" style="direction: rtl; text-align: center;">ایمیل :
              <?php echo  $profile ?>
            </h4>
          </div>
        </div>
      </div>

    </div>

    <div class="row">

      <div class="col-xl-4 col-lg-12 "style="margin: 0 auto;">
        <div class="card card-chart" style="height: 80%;">
          <div class="card-header card-header-warning" style="height: 80%;">
            <img src="<?php echo ASSETS_URL . 'img/pic3.png' ?>" alt=""
              style="display: block; margin:  0 auto; width: 40%;height: 100%; ">

          </div>
          <div class="card-body" style="direction: rtl; text-align: right;">
            <h4 class="card-title"> میزان کیف پول شما :
              <?php echo $user_wallet ?>
            </h4>
          </div>
        </div>
      </div>
      <div class="col-xl-4 col-lg-12"style="margin: 0 auto;">
        <div class="card card-chart" style="height: 80%;">
          <div class="card-header card-header-success" style="height: 80%;">
            <img src="<?php echo ASSETS_URL . 'img/pic1.png' ?>" alt=""
              style="display: block; margin:  0 auto; width: 40%;height: 100%; ">
          </div>
          <div class="card-body">
            <h4 class="card-title" style="direction: rtl; text-align: right;"> تعداد تراکنش های موفق :
              <?php echo $transS ?>
            </h4>
          </div>
        </div>
      </div>

      <div class="col-xl-4 col-lg-12" style="margin: 0 auto;">
        <div class="card card-chart" style="height: 80%;">
          <div class="card-header card-header-danger" style="height: 80%;">
            <img src="<?php echo ASSETS_URL . 'img/pic2.png' ?>" alt=""
              style="display: block; margin:  0 auto;  width: 40%;height: 100%;">
          </div>
          <div class="card-body">
            <h4 class="card-title" style="direction: rtl; text-align: right;"> تعداد تراکنش های نا موفق :
              <?php echo $transF ?>
            </h4>

          </div>
        </div>
      </div>
    </div>






  </div>
</div>