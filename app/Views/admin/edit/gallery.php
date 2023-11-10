<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<?php $errors=session()->get('errors'); ?>
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
                  <label for="exampleInputEmail1">Title</label>
                  <input value="<?= old('title',$datas['title']); ?>" name="title" type="text" class="form-control px-4 p-2 border border-primary">
                  <small id="emailHelp" class="form-text text-danger"><?= $errors['title']??''; ?></small>
                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Information</label>
                  <textarea name="information" class="form-control border border-primary px-4 p-2" rows="5"><?= old('information',$datas['information']);; ?></textarea>
                  <small id="emailHelp" class="form-text text-danger"><?= $errors['information']??''; ?></small>                </div>
                <div class="form-group mb-3">
                  <label for="exampleInputEmail1">Foto</label>
                    <div class="card mb-3" style="width:153px;height: 102px;">
                        <img style="width:153px;height: 102px;" src="<?= base_url('assets/') . 'uploads/galleries/' . $datas['image']; ?>" class="rounded" alt="gallery image">
                    </div>
                  <input value="<?= old('image'); ?>" name="image" type="file" class="form-control px-4 p-2 border border-primary">
                  <small id="emailHelp" class="form-text text-danger"><?= $errors['image']??''; ?></small>
                </div>
                <div class="form-group mb-3">
            <label for="exampleInputEmail1">Tampilkan di event</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="event" id="exampleRadios1" value="1" <?= old('event',$datas['event'])=='1'?'checked':''; ?>>
                <label class="form-check-label" for="exampleRadios1">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="event" id="exampleRadios2" value="0" <?= old('event',$datas['event'])=='0'?'checked':''; ?>>
                <label class="form-check-label" for="exampleRadios2">
                    Tidak
                </label>
            </div>
        </div>
                <div class="d-flex justify-content-end gap-4">
                    <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                      Delete
                    </button>
                    <button type="submit" class="btn btn-primary">Submit</button>
                  </div>
                </form>
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog modal-dialog-centered" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title font-weight-normal text-danger" id="exampleModalLabel">Delete</h5>
                        <button type="button" class="btn-close text-dark" data-bs-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                        <p class="font-weight-semibold">Serius mau delete gallery</p>
                      </div>
                      <div class="modal-footer">
                        <form action="<?= base_url('gallery/delete'); ?>" method="post">
                          <?= csrf_field(); ?>
                          <input name="id" type="hidden" value="<?= $datas['id']; ?>">
                          <button class="btn btn-danger" type="submit">Delete</button>
                        </form>
                        <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>                          </div>
                    </div>
                  </div>
                </div>
            </div>
          </div>
        </div>
      </div>
      <?= $this->endSection(); ?>