<?= $this->extend('layout/authLayout'); ?>
<?= $this->section('content'); ?>
<?php $errors=session()->get('errors'); ?>

<?php if(session()->getFlashdata('message')): ?>
  <div id="alert" class="alert alert-danger text-white" role="alert">
    <?= session()->getFlashdata('message'); ?>
  </div>
<?php endif; ?>

<?php if(session()->get('succes')): ?>
  <div id="alert" class="alert alert-success text-white" role="alert">
    <?= session()->get('succes'); ?>
  </div>
<?php endif; ?>

<form method='post' action="<?= base_url('auth/create'); ?>">
<?= csrf_field(); ?>
<div class="mb-3">
  <div class="input-group input-group-outline">
    <label class="form-label">Name</label>
    <input value="<?= old('name'); ?>" name='name' type="text" class="form-control">
  </div>
  <small class="form-text text-danger"><?= $errors['name']??''; ?></small>
</div>
<div class="mb-3">

  <div class="input-group input-group-outline">
    <label class="form-label">Email</label>
    <input value="<?= old('email'); ?>" name='email' type="email" class="form-control">
  </div>
  <small class="form-text text-danger"><?= $errors['email']??''; ?></small>
</div>
<div class="mb-3">

  <div class="input-group input-group-outline">
    <label class="form-label">Password</label>
    <input value="<?= old('password'); ?>" name='password' type="password" class="form-control">
  </div>
  <small class="form-text text-danger"><?= $errors['password']??''; ?></small>
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