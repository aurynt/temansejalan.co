<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<div class="row">
</div>
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">activity table</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Information</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">date</th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($history as $activity) : ?>
                <tr>
                  <td class="align-middle d-flex align-items-center">
                    <div class="text-black h2  me-2">
                      <i class="material-icons opacity-10">person</i>
                    </div>
                    <p class="text-sm mb-0"><span class="font-weight-bold"><?= $activity['email']; ?></span> <?= $activity['description']; ?></p>
                  </td>
                  <td class="align-middle">
                    <?= $activity['created_at']; ?>
                  </td>
                </tr>
              <?php endforeach ?>
            </tbody>
          </table>
          <?= $pager->links('default', 'pagination'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>