<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Menu form</h6>
        </div>
      </div>
      <div class="card-body px-4 pb-2">
        <form enctype="multipart/form-data" class="p-2" action="<?= base_url('menu/add'); ?>" method="post">
          <?= csrf_field(); ?> 
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Nama menu</label>
            <input value="<?= old('name'); ?>" name="name" type="text" class="form-control border border-primary px-4 p-2">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Harga</label>
            <input  value="<?= old('price'); ?>" name="price" type="text" class="form-control border border-primary px-4 p-2">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Deskripsi</label>
            <textarea class="form-control border border-primary px-4 p-2" name="description" rows="5"><?= old('description'); ?></textarea>
          </div>
          <div class="form-group mb-3">
            <label for="exampleInputEmail1">Foto</label>
            <input value="<?= old('photo'); ?>" name="photo" type="file" class="form-control border border-primary px-4 p-2">
            <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
          </div>
          <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>