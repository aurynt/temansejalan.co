<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<?php $errors = session()->get('errors'); ?>
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Menu form</h6>
        </div>
      </div>
      <div class="card-body px-4 pb-2">
        <?php if (session()->getFlashdata('message')) : ?>
          <div id="alert" class="alert alert-danger text-white" role="alert">
            <?= session()->getFlashdata('message'); ?>
          </div>
        <?php endif; ?>
        <?php if (session()->getFlashdata('succes')) : ?>
          <div id="alert" class="alert alert-success text-white" role="alert">
            <?= session()->getFlashdata('succes'); ?>
          </div>
        <?php endif; ?>
        <form enctype="multipart/form-data" class="p-2" action="<?= base_url('menu/update'); ?>" method="post">
          <?= csrf_field(); ?>
          <input type="hidden" value="<?= $datas['id']; ?>" name="id">
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Nama menu</label>
            <input value="<?= old('name', $datas['menu']); ?>" name="name" type="text" class="form-control border border-primary px-4 p-2">
            <small class="form-text text-danger"><?= $errors['menu'] ?? ''; ?></small>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Harga</label>
            <input value="<?= old('price', $datas['price']); ?>" name="price" type="text" class="form-control border border-primary px-4 p-2">
            <small class="form-text text-danger"><?= $errors['price'] ?? ''; ?></small>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Deskripsi</label>
            <textarea class="form-control border border-primary px-4 p-2" name="description" rows="5"><?= old('description', $datas['description']);; ?></textarea>
            <small class="form-text text-danger"><?= $errors['description'] ?? ''; ?></small>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Foto</label>
            <div class="card mb-3" style="width:153px;height: 102px;">
              <img style="width:153px;height: 102px;" src="<?= base_url('assets/') . 'uploads/menus/' . $datas['photo']; ?>" class="rounded" alt="<?= $datas['menu']; ?>">
            </div>
            <input accept="image/*" value="<?= old('photo', $datas['photo']); ?>" name="photo" type="file" class="form-control border border-primary px-4 p-2">
            <small class="form-text text-danger"><?= $errors['photo'] ?? ''; ?></small>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Tampilkan sebagai slideshow</label>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="slide" id="exampleRadios1" value="1" <?= old('slide', $datas['slide']) == '1' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="exampleRadios1">
                Ya
              </label>
            </div>
            <div class="form-check">
              <input class="form-check-input" type="radio" name="slide" id="exampleRadios2" value="0" <?= old('slide', $datas['slide']) == '0' ? 'checked' : ''; ?>>
              <label class="form-check-label" for="exampleRadios2">
                Tidak
              </label>
            </div>
          </div>
          <div class="d-flex justify-content-end gap-4">
            <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
              Delete
            </button>
            <button type="submit" class="btn btn-primary">Save</button>
          </div>
        </form>
        <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
          <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
              <div class="modal-header">
                <h5 class="modal-title font-weight-bold text-danger" id="exampleModalLabel">Delete</h5>
                <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">&times;</span>
                </button>
              </div>
              <div class="modal-body">
                <p class="font-weight-semibold">Serius mau delete menu??</p>
              </div>
              <div class="modal-footer">
                <form action="<?= base_url('menu/delete'); ?>" method="post">
                  <?= csrf_field(); ?>
                  <input name="id" type="hidden" value="<?= $datas['id']; ?>">
                  <input name="menu" type="hidden" value="<?= $datas['menu']; ?>">
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
                <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>
</div>
<?= $this->endSection(); ?>