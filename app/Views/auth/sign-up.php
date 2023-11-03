<?= $this->extend('layout/authLayout'); ?>
<?= $this->section('content'); ?>
<form method='post' action="<?= base_url('auth/create'); ?>">
<?= csrf_field(); ?>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Name</label>
    <input value="<?= old('name'); ?>" name='name' type="text" class="form-control">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Email</label>
    <input value="<?= old('email'); ?>" name='email' type="email" class="form-control">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Password</label>
    <input value="<?= old('password'); ?>" name='password' type="password" class="form-control">
  </div>
  <div class="input-group input-group-outline mb-3">
    <label class="form-label">Confirm Password</label>
    <input name='confirmPassword' type="password" class="form-control">
  </div>
  <div class="form-check form-check-info text-start ps-0">
    <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked>
    <label class="form-check-label" for="flexCheckDefault">
      I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
    </label>
    <p><?= session()->getFlashdata('message'); ?></p>
  </div>
  <div class="text-center">
    <button type="submit" class="btn btn-lg bg-gradient-primary btn-lg w-100 mt-4 mb-0">Sign Up</button>
  </div>
</form>
<?= $this->endSection(); ?>