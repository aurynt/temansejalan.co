<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">Menu table</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
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
          <table class="table align-items-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Name</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">price</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">slide</th>
                <th class="text-center text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Author</th>
                <th class="text-secondary opacity-7"></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($menus as $menu) : ?>
                <tr>
                  <td>
                    <div class="d-flex px-2 py-1">
                      <div class="d-flex flex-column-reverse justify-content-center gap-2">
                        <div class="card">
                          <img style="width:153px;height: 102px;" src="<?= base_url('assets/') . 'uploads/menus/' . $menu['photo']; ?>" class="rounded" alt="<?= $menu['menu']; ?>">
                        </div>
                        <h6 class="mb-0 text-sm"><?= $menu['menu']; ?></h6>
                      </div>
                    </div>
                  </td>
                  <td>
                    <p class="text-xs text-secondary mb-0"><?= $menu['description']; ?></p>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="badge badge-sm bg-gradient-success">Rp.<?= $menu['price']; ?></span>
                  </td>
                  <td class="align-middle text-center text-sm">
                    <span class="text-sm font-weight-bold mb-0 <?= $menu['slide'] == 1 ? 'text-success' : 'text-danger'; ?>"><?= $menu['slide'] == 1 ? 'yes' : 'no'; ?></span>
                  </td>
                  <td class="align-middle text-center">
                    <span class="text-secondary text-xs font-weight-bold"><?= $menu['name']; ?></span>
                  </td>
                  <td class="align-middle">
                    <a href="<?= base_url('dashboard/menu/') . $menu['slug']; ?>" class="text-secondary font-weight-bold text-xs" data-toggle="tooltip" data-original-title="Edit user">
                      Edit
                    </a>
                  </td>
                </tr>
              <?php endforeach; ?>
            </tbody>
          </table>
          <?= $pager->links('default', 'pagination'); ?>
        </div>
      </div>
    </div>
  </div>
</div>
<?= $this->endSection(); ?>