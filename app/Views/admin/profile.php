<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
<?php $errors = session()->get('errors'); ?>
<div class="page-header min-height-300 border-radius-xl mt-4" style="background-image: url('https://images.unsplash.com/photo-1531512073830-ba890ca4eba2?ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&ixlib=rb-1.2.1&auto=format&fit=crop&w=1920&q=80');">
  <span class="mask  bg-gradient-primary  opacity-6"></span>
</div>
<div class="card card-body mx-3 mx-md-4 mt-n6">
  <div class="row gx-4 mb-2">
    <div class="col-auto">
      <div class="avatar avatar-xl position-relative">
        <img src="<?= base_url('assets/admin/'); ?>img/bruce-mars.jpg" alt="profile_image" class="w-100 border-radius-lg shadow-sm">
      </div>
    </div>
    <div class="col-auto my-auto">
      <div class="h-100">
        <h5 class="mb-1 text-capitalize">
          <?= session()->name; ?>
        </h5>
        <p class="mb-0 font-weight-normal text-sm">
          <?= session()->email; ?>
        </p>
      </div>
    </div>
  </div>

  <div class="row">
    <div class="row">
      <div class="col-lg-4 col-md-6 my-sm-auto ms-sm-auto me-sm-0 mx-auto mt-3">
        <div class="nav-wrapper position-relative end-0">
          <ul class="nav nav-pills nav-fill p-1" role="tablist">
            <li class="nav-item">
              <a class="nav-link text-center mb-0 px-0 py-1 active " data-bs-toggle="tab" href="#pills-app" role="tab" aria-selected="true">
                <i class="material-icons text-lg position-relative">home</i>
                <span class="ms-1">App</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link text-center mb-0 px-0 py-1 " data-bs-toggle="tab" href="#pills-setting" role="tab" aria-selected="false">
                <i class="material-icons text-lg position-relative">settings</i>
                <span class="ms-1">Settings</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link mb-0 px-0 py-1 " data-bs-toggle="tab" href="#pills-experience" role="tab" aria-selected="false">
                <i class="material-icons text-lg position-relative">laptop</i>
                <span class="ms-1">Experience</span>
              </a>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-12 my-5">
        <div class="card card-plain h-100">
          <div class="tab-content" id="pills-tabContent">
            <div class="tab-pane fade show active" id="pills-app" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="card">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">App Setting</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body px-4 pb-2">
                  <form enctype="multipart/form-data" class=" was-validated" action="<?= base_url('setting/update'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Deskripsi</label>
                      <textarea class="form-control border border-primary px-4 p-2" name="description" rows="5"><?= old('description', $setting['description']); ?></textarea>
                      <small class="form-text text-danger"><?= $errors['description'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Instagram</label>
                      <input value="<?= old('instagram', $setting['instagram']); ?>" name="instagram" type="text" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['instagram'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Facebook</label>
                      <input value="<?= old('facebook', $setting['facebook']); ?>" name="facebook" type="text" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['facebook'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Whatsapp</label>
                      <input value="<?= old('whatsapp', $setting['whatsapp']); ?>" name="whatsapp" type="text" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['whatsapp'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Email</label>
                      <input value="<?= old('email', $setting['email']); ?>" name="email" type="email" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['email'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Image</label>
                      <div class="card mb-3" style="width:153px;height: 102px;">
                        <img style="width:153px;height: 102px;" src="<?= $setting['image'] !== 'hero_1.jpeg' ? base_url('assets/uploads/') . $setting['image'] : base_url('assets/images/') . $setting['image'] ?>" class="rounded" alt="<?= $setting['image']; ?>">
                      </div>
                      <input accept="image/*" value="<?= old('image'); ?>" name="image" type="file" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['image'] ?? ''; ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show" id="pills-setting" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="card">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Profile Setting</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body px-4 pb-2">
                  <form enctype="multipart/form-data" class=" was-validated" action="<?= base_url('auth/update'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= session()->user_id; ?>">
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Name</label>
                      <input value="<?= old('name', session()->name); ?>" name="name" type="text" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['name'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Email</label>
                      <input value="<?= old('email', session()->email); ?>" name="email" type="email" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['email'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Password</label>
                      <input name="password" type="password" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['password'] ?? ''; ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
              <div class="card mt-4">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Change Password</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body px-4 pb-2">
                  <form enctype="multipart/form-data" class=" was-validated" action="<?= base_url('auth/change-password'); ?>" method="post">
                    <?= csrf_field(); ?>
                    <input type="hidden" name="id" value="<?= session()->user_id; ?>">
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Password</label>
                      <input name="password" type="password" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['password'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">New Password</label>
                      <input name="newPassword" type="password" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['newPassword'] ?? ''; ?></small>
                    </div>
                    <div class="form-group mb-3">
                      <label for="exampleInputEmail1">Confirm Password</label>
                      <input name="confirmPassword" type="password" class="form-control border border-primary px-4 p-2">
                      <small class="form-text text-danger"><?= $errors['confirmPassword'] ?? ''; ?></small>
                    </div>
                    <button type="submit" class="btn btn-primary">Save</button>
                  </form>
                </div>
              </div>
            </div>
            <div class="tab-pane fade show " id="pills-experience" role="tabpanel" aria-labelledby="pills-home-tab">
              <div class="row">
                <div class="col-12 mb-6">
                  <div class="card">
                    <div class="card-header pb-0 p-3">
                      <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                          <h6 class="mb-0">Experience</h6>
                        </div>
                      </div>
                    </div>
                    <div class="card-body px-4 pb-2">
                      <form enctype="multipart/form-data" class=" was-validated" action="<?= base_url('exp/add'); ?>" method="post">
                        <?= csrf_field(); ?>
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1">Title</label>
                          <input value="<?= old('title'); ?>" name="title" type="text" class="form-control border border-primary px-4 p-2">
                          <small class="form-text text-danger"><?= $errors['title'] ?? ''; ?></small>
                        </div>
                        <div class="form-group mb-3">
                          <label for="exampleInputEmail1">Deskripsi</label>
                          <textarea class="form-control border border-primary px-4 p-2" name="description" rows="5"><?= old('description'); ?></textarea>
                          <small class="form-text text-danger"><?= $errors['description'] ?? ''; ?></small>
                        </div>
                        <button type="submit" class="btn btn-primary">Submit</button>
                      </form>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="card">
                    <div class="card-header pb-0 p-3">
                      <div class="row">
                        <div class="col-md-8 d-flex align-items-center">
                          <h6 class="mb-0">Experience List</h6>
                        </div>
                      </div>
                    </div>
                    <div class="card-body px-0">
                      <div class="table-responsive p-0">
                        <table class="table align-items-center justify-content-center mb-0">
                          <thead>
                            <tr>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Title</th>
                              <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Description</th>
                              <th></th>
                            </tr>
                          </thead>
                          <tbody>
                            <?php foreach ($experiences as $exp) : ?>
                              <tr>
                                <td>
                                  <div class="d-flex p-4">
                                    <h6 class="mb-0 text-sm mb-1"><?= $exp['title']; ?></h6>
                                  </div>
                                </td>
                                <td>
                                  <p class="text-sm font-weight-bold mb-0"><?= $exp['description']; ?></p>
                                </td>
                                <td class="align-middle">
                                  <button type="button" class="btn text-danger" data-bs-toggle="modal" data-bs-target="#exampleModal">
                                    Delete
                                  </button>
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
                                          <p class="font-weight-semibold">Serius mau delete experience</p>
                                        </div>
                                        <div class="modal-footer d-flex align-items-center">
                                          <form action="<?= base_url('exp/delete'); ?>" method="post">
                                            <?= csrf_field(); ?>
                                            <input name="id" type="hidden" value="<?= $exp['id']; ?>">
                                            <button class="btn btn-danger" type="submit">Delete</button>
                                          </form>
                                          <button type="button" class="btn bg-gradient-secondary" data-bs-dismiss="modal">Close</button>
                                        </div>
                                      </div>
                                    </div>
                                  </div>
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
              <div class="col-12 col-xl-6">

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