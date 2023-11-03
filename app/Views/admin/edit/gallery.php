<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Gallery form</h6>
              </div>
            </div>
            <div class="card-body px-4 pb-2">
            <form enctype="multipart/form-data" class="p-2" action="<?= base_url('gallery/update'); ?>" method="post">
                <?= csrf_field(); ?>
                <input name="id" type="hidden" value="<?= $datas['id']; ?>">
              <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Information</label>
                  <textarea name="information" class="form-control border border-primary px-4 p-2" rows="5"><?= old('information',$datas['information']);; ?></textarea>
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Foto</label>
                    <div class="card mb-3" style="width:153px;height: 102px;">
                        <img style="width:153px;height: 102px;" src="<?= base_url('assets/') . 'uploads/galleries/' . $datas['image']; ?>" class="rounded" alt="gallery image">
                    </div>
                  <input value="<?= old('image',$datas['image']); ?>" name="image" type="file" class="form-control px-4 p-2 border border-primary">
                  <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                </div>
                <div class="d-flex justify-content-end gap-4">
                    <button type="submit" class="btn btn-danger">Delete</button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
      <?= $this->endSection(); ?>