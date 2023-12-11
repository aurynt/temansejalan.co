<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<div class="row">
</div>
<div class="row">
  <div class="col-12">
    <div class="card my-4">
      <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
        <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
          <h6 class="text-white text-capitalize ps-3">user table</h6>
        </div>
      </div>
      <div class="card-body px-0 pb-2">
        <div class="table-responsive p-0">
          <?php if (session()->get('succes')) : ?>
            <div id="alert" class="alert alert-success text-white mx-3" role="alert">
              <?= session()->get('succes'); ?>
            </div>
          <?php endif; ?>
          <table class="table align-items-center justify-content-center mb-0">
            <thead>
              <tr>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">nama</th>
                <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">email</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              <?php foreach ($users as $user) : ?>
                <tr>
                  <td>
                    <div class="d-flex p-4">
                      <h6 class="mb-0 text-sm"><?= $user['name']; ?></h6>
                    </div>
                  </td>
                  <td>
                    <p class="text-sm font-weight-bold mb-0"><?= $user['email']; ?></p>
                  </td>
                  <td class="align-middle">
                    <?php if ($user['id'] !== '1' || $user['email'] !== session()->get('email')) : ?>
                      <button type="button" class="btn bg-gradient-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                        Delete
                      </button>
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
                              <form action="<?= base_url('user/delete'); ?>" method="post">
                                <?= csrf_field(); ?>
                                <input name="email" type="hidden" value="<?= $user['email']; ?>">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                              <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                            </div>
                          </div>
                        </div>
                      </div>
                    <?php endif ?>
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