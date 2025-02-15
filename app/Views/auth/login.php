<?= view('../templates/header', ['title' => 'Login']) ?>

<div class="row justify-content-center">
    <div class="col-md-4 col-sm-8">
        <div class="card shadow-lg">
            <div class="card-header text-center bg-primary text-white">
                <h4>Login</h4>
            </div>
            <div class="card-body">
                <?php if (session()->getFlashdata('error')): ?>
                    <div class="alert alert-danger">
                        <?= session()->getFlashdata('error') ?>
                    </div>
                <?php endif; ?>

                <form action="<?= base_url('/login') ?>" method="POST">
                    <div class="mb-3">
                        <label for="email" class="form-label">Email</label>
                        <input type="email" name="email" class="form-control" id="email" required>
                    </div>

                    <div class="mb-3">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" name="password" class="form-control" id="password" required>
                    </div>

                    <button type="submit" class="btn btn-primary w-100">Login</button>
                </form>
            </div>
            <div class="card-footer text-center">
                <small>Don't have an account? <a href="<?= base_url('/register') ?>">Register</a></small>
            </div>
        </div>
    </div>
</div>

<?= view('../templates/footer') ?>
