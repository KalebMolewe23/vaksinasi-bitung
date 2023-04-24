<div class="sampul">
    <div class="kolom-login">
        <img src="<?= base_url('assets/user/user.png'); ?>" alt="" class="gambarprofil">
        <h1>Login Admin</h1>
        <?= $this->session->flashdata('message') ?>

            <form class="user" method="post" action="<?= base_url('auth'); ?>">

                <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="text" class="form-control" name="email" value="<?= set_value('email'); ?>">
                    <?= form_error('email', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group">
                    <label for="password" class="control-label">Password</label>
                    <input type="password" class="form-control form-control-user" id="password" name="password">
                    <?= form_error('password', '<small class="text-danger">', '</small>'); ?>
                </div>

                <div class="form-group text-right">
                    <button type="submit" class="btn btn-primary btn-lg btn-icon icon-right">
                        Login
                    </button>
                </div>

            </form>
        </div>
    </div>