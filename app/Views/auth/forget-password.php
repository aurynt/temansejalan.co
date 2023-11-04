<?= $this->extend('layout/authLayout'); ?>
<?= $this->section('content'); ?>
<?php if(session()->getFlashdata('message')): ?>
  <div id="alert" class="alert alert-danger text-white" role="alert">
    <?= session()->getFlashdata('message'); ?>
  </div>
<?php endif; ?>
<?php if(session()->getFlashdata('succes')): ?>
  <div id="alert" class="alert alert-success text-white" role="alert">
    <?= session()->getFlashdata('succes'); ?>
  </div>
<?php endif; ?>
<form action="<?= base_url('auth/reset-link'); ?>" method='post' class="text-start">
<?= csrf_field(); ?>
  <div class="form-group my-3">
    <label class="form-label">Email</label>
    <input value="<?= old('email'); ?>" name='email' type="email" class="border px-3 border-secondary form-control">
  </div>
  <div class="text-center">
    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2 text-capitalize">Send reset link</button>
  </div>
</form>
<?= $this->endSection(); ?>