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
    <form enctype="multipart/form-data" class="p-2" action="<?= base_url('gallery/add'); ?>" method="post">
        <?= csrf_field(); ?>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Title</label>
            <input value="<?= old('title'); ?>" name="title" type="text" class="form-control px-4 p-2 border border-primary">
            <small id="emailHelp" class="form-text text-danger"><?= $errors['title']??''; ?></small>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Information</label>
            <textarea name="information" class="form-control border border-primary px-4 p-2" rows="5"><?= old('information'); ?></textarea>
            <small id="emailHelp" class="form-text text-danger"><?= $errors['information']??''; ?></small>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Foto</label>
            <input value="<?= old('image'); ?>" name="image" type="file" class="form-control px-4 p-2 border border-primary">
            <small id="emailHelp" class="form-text text-danger"><?= $errors['image']??''; ?></small>
        </div>
        <div class="form-group mb-3">
            <label for="exampleInputEmail1">Tampilkan di event</label>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="event" id="exampleRadios1" value="1">
                <label class="form-check-label" for="exampleRadios1">
                    Ya
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" type="radio" name="event" id="exampleRadios2" value="0" checked>
                <label class="form-check-label" for="exampleRadios2">
                    Tidak
                </label>
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
    </div>
</div>
</div>
<?= $this->endSection(); ?>