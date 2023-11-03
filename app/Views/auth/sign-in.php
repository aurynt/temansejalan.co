<?= $this->extend('layout/authLayout'); ?>
<?= $this->section('content'); ?>
<form action="<?= base_url('auth/login'); ?>" method='post' class="text-start">
<?= csrf_field(); ?>
  <div class="input-group input-group-outline my-3">
    <label class="form-label">Email</label>
    <input value="<?= old('email'); ?>" name='email' type="email" class="form-control">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Password</label>
    <input value="<?= old('password'); ?>" name='password' type="password" class="form-control">
  </div>
  <div class="form-check form-switch d-flex align-items-center mb-3">
    <input class="form-check-input" type="checkbox" id="rememberMe">
    <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
    <small class="text-danger"><?= session()->getFlashdata('message'); ?></small>
  </div>
  <div class="text-center">
    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
  </div>
  <p class="mt-4 text-sm text-center">
    Don't have an account?
    <a href="<?= base_url('auth/sign-up'); ?>" class="text-primary text-gradient font-weight-bold">Sign up</a>
  </p>
</form>
<?= $this->endSection(); ?>