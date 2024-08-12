<?= $this->extend('/layout/template'); ?>

<?= $this->section('content'); ?>
<div class="card text-bg-light mb-3" style="max-width: 18rem;">
    <div class="card-header">Login</div>
    <div class="card-body">
        <div class="container_login">
            <div class="col_login">
                <div class="row_login">
                    <form action="" method="post">
                        <label for="">Username</label>
                        <input type="text" id="username" placeholder="masukan username...">
                        <label for="">password</label>
                        <input type="password" placeholder="masukan password" id="password">
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
<?= $this->endSection(); ?>