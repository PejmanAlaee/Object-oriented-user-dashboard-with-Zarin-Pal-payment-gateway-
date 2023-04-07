
<div class="content">
    <div class="container-fluid">
        <div class="row" style="margin-top: 40px;">
            <?php if ($status == 'false'): ?>
                <div class="col-xl-12 col-lg-12" style="background-color: #BD081C;text-align: center; padding: 12px 40px;">

                    <span style="text-align: center;color:white">

                        <span> ! پرداخت شما با موفقیت صورت نگرفت . لطفا دوباره امتحان کنید </span>
                    </span>
                </div>

            <?php endif ?>
            <?php if ($status == 'true'): ?>
                <div class="col-xl-12 col-lg-12" style="background-color: #09B83E;text-align: center; padding: 12px 40px;">
                    <span style="text-align: center;color:white">
                        <span> پرداخت شما با موفقیت صورت گرفت . با تشکر</span>

                    </span>
                </div>
            <?php endif ?>
        </div>
    </div>
</div>