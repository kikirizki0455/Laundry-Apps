<?= $this->extend('/layout/template'); ?>


<?= $this->section('content'); ?>
<div class="container_login">

    <div class="card text-bg-light mt-5 w-25 h-50">
        <div class="card-header">LAUNDRY RS DUSTIRA</div>
        <div class="card-body">
            <div class="container_card_login">
                <div class="col_login">
                    <div class="row_login">
                        <form action="" method="post">
                            <div class="mb-3">

                                <label for="">Username</label>
                                <input type="text" id="username" name="username" class="form-control" placeholder="masukan username...">
                            </div>
                            <div class="mb-3">
                                <label for="">password</label>
                                <input type="password" name="password" class="form-control" placeholder="masukan password" id="password">
                                <div class="button-login">
                                </div>

                                <button class="mt-2" value="LOGIN" name="login">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>