<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<div class="row">
    </div>
    <div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Gallery table</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Image</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Information</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Event</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Author</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($galleries as $gallery) : ?>
                <tr>
                  <td>
                    <div class="d-flex p-4">
                      <div class="card">
                        <h6 class="mb-0 text-sm mb-1"><?= $gallery['title']; ?></h6>
                        <img style="width:153px;height: 102px;" src="<?= base_url('assets/') . 'uploads/galleries/' . $gallery['image']; ?>" class="rounded" alt="gallery image">
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0"><?= $gallery['information']; ?></p>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0 <?= $gallery['event']=='1'?'text-success':'text-danger'; ?>"><?= $gallery['event']=='1'?'yes':'no'; ?></p>
                  </td>
                  <td class="align-middle">
                    <?= $gallery['name']; ?>
                  </td>
                  <td class="align-middle">
                    <a href="<?= base_url('dashboard/gallery/') . $gallery['id']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <?= $pager->links('default','pagination'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>