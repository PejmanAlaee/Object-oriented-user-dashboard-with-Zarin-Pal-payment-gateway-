<div class="content">
  <div class="container-fluid">
    <div class="row">
      <div class="col-xl-6 col-lg-12">
        <div class="card card-chart" style="height: 80%;">
          <div class="card-header card-header-success">
          <img src="<?php echo ASSETS_URL . 'img/pic3.png' ?>" alt="" style="display: block; margin:  0 auto; width: 40%; ">
          </div>
          <div class="card-body" style="margin: 0 auto;">
          <h4 class="card-title" > : موجودی کیف پول شما</h4>

            <p class="card-category">
              <span class="text-success" style="display: block; margin:  0 auto; width: 80%; ">
                <?php echo $user_wallet ?>
              </span>
            </p>
          </div>

        </div>
      </div>
      <div class="col-xl-6 col-lg-12">
        <div class="card card-chart" style="height: 80%;">
          <div class="card-header card-header-warning">
          <img src="<?php echo ASSETS_URL . 'img/pic4.png' ?>" alt="" style="display: block; margin:  0 auto; width: 40%; ">
          </div>
          <div class="card-body">
            <form action="?action=walletPardakht" method="post">
              <div class="mb-3">
                <label for="paIt" class="form-label" style ="display: block; margin:  0 auto; width: 40%;">! مبلغ پرداخت مورد نظر را وارد کنید </label>
                <input type="number" class="form-control" id="paIt" aria-describedby="emailHelp" name="paIt">
              </div>
              <button type="submit" class="btn btn-primary" name="startPayMent">Submit</button>
            </form>
          </div>

        </div>
      </div>
    </div>
  </div>
</div>