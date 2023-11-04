<?= $this->extend('layout/authLayout'); ?>
<?= $this->section('content'); ?>
<?php if(session()->getFlashdata('message')): ?>
  <div id="alert" class="alert alert-danger text-white" role="alert">
    <?= session()->getFlashdata('message'); ?>
  </div>
<?php endif; ?>
<form action="<?= base_url('auth/reset'); ?>" method='post' class="text-start">
<?= csrf_field(); ?>
  <div class="form-group my-3">
    <label class="form-label">Email</label>
    <input readonly value="<?= session()->get('emailResetPassword'); ?>" name='email' type="email" class="border border-secondary px-3 form-control">
  </div>
  <div class="form-group mb-3">
    <label class="form-label">Password</label>
    <input value="<?= old('password'); ?>" name='password' type="password" class="form-control border border-secondary px-3">
  </div>
  <div class="form-group mb-3">
    <label class="form-label">Confirm Password</label>
    <input value="<?= old('confirmPassword'); ?>" name='confirmPassword' type="password" class="form-control border border-secondary px-3">
  </div>
  <div class="form-check form-switch d-flex align-items-center mb-3">
    <input class="form-check-input" type="checkbox" id="rememberMe">
    <label class="form-check-label mb-0 ms-2" for="rememberMe">Remember me</label>
  </div>
  <div class="text-center">
    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Sign in</button>
  </div>
</form>
<?= $this->endSection(); ?>