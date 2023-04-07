<div class="content">
    <div class="container-fluid">
        <div class="row">
            <div class="col-xl-12 col-lg-12">
                <table class="table" >
                    <thead>
                        <tr>
                            <th scope="col" style="text-align: center;">وضعیت</th>
                            <th scope="col">تاریخ پرداخت</th>
                            <th scope="col">تاریخ ایجاد</th>
                            <th scope="col">شماره پیگیری</th>
                            <th scope="col">شماره تراکنش</th>
                            <th scope="col">#</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php $counter = 1; ?>

                        <?php foreach ($data['transAtions'] as $trans): ?>
                            <tr>
                                <?php if ($trans->status == 1): ?>
                                    <td style="text-align: center;">
                                        <span class="stSpSuccess"> پرداخت موفق
                                        </span>
                                    </td>
                                <?php endif ?>
                                <?php if ($trans->status == 0): ?>
                                    <td style="text-align: center;">
                                        <span class="stSpFalse"> پرداخت ناموفق
                                        </span>
                                    </td>
                                <?php endif ?>
                                <td>
                                    <?php echo $trans->paid_at ?>
                                </td>
                                <td>
                                    <?php echo $trans->create_at ?>
                                </td>
                                <td>
                                    <?php echo $trans->reserve ?>
                                </td>
                                <td>
                                    <?php echo $trans->ref_num ?>
                                </td>


                                <th scope="row">
                                    <?php echo $counter ?>
                                </th>
                            </tr>
                            <?php $counter += 1; ?>
                        <?php endforeach; ?>

                    </tbody>
                </table>


            </div>
        </div>
    </div>
</div>

<style>
    .stSpSuccess {
        background-color: green;
        text-align: center;
        width: 30%;
        padding: 2px 14px;
        color: white;
    }

    @media screen and (max-width: 700px) {
        .table{
            font-size: 6px;
        }
        .stSpFalse {

            width: 100%;
            font-size: 8px;
 
        }

        .stSpSuccess {

            width: 100%;
            font-size: 8px;

        }
    }

    .stSpFalse {
        background-color: red;
        text-align: center;
        width: 30%;
        padding: 2px 11px;
        color: white;
    }
</style>