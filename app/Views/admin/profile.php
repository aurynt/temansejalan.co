<?= $this->extend('layout/adminLayout'); ?>
<?= $this->section('content'); ?>
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
            <div class="col-12 col-xl-4">
              <div class="card card-plain h-100">
                <div class="card-header pb-0 p-3">
                  <div class="row">
                    <div class="col-md-8 d-flex align-items-center">
                      <h6 class="mb-0">Profile Information</h6>
                    </div>
                  </div>
                </div>
                <div class="card-body p-3">
                  <p class="text-sm">
                    Hi, I’m <?= session()->name; ?>, Decisions: If you can’t decide, the answer is no. If two equally difficult paths, choose the one more painful in the short term (pain avoidance is creating an illusion of equality).
                  </p>
                  <hr class="horizontal gray-light my-4">
                  <ul class="list-group">
                    <li class="list-group-item border-0 ps-0 pt-0 text-sm text-capitalize"><strong class="text-dark">Full Name:</strong> &nbsp; <?= session()->name; ?></li>
                    <li class="list-group-item border-0 ps-0 text-sm"><strong class="text-dark">Email:</strong> &nbsp; <?= session()->email; ?></li>
                  </ul>
                </div>
              </div>
            </div>
            <div class="col-12 mt-4">
              <div class="mb-5 ps-3">
                <h6 class="mb-1">Events</h6>
              </div>
              <div class="row">
                <?php if($events==null): ?>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="card-body p-3">
                        <p class="mb-2 text-sm">
                          No event set
                        </p>
                        <div class="d-flex">
                          <a class="font-weight-bold" href="<?= base_url('dashboard/gallery'); ?>">Create event</a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <?php endif; ?>
                <?php $no=1; foreach($events as $event): ?>
                  <div class="col-xl-3 col-md-6 mb-xl-0 mb-4">
                    <div class="card card-blog card-plain">
                      <div class="card-header p-0 mt-n4 mx-3">
                        <a class="d-block shadow-xl border-radius-xl">
                          <img src="<?= base_url('assets/uploads/galleries').$event['image']; ?>" alt="img-blur-shadow" class="img-fluid shadow border-radius-xl">
                        </a>
                      </div>
                      <div class="card-body p-3">
                        <p class="mb-0 text-sm">Project #<?= $no; ?></p>
                        <a href="javascript:;">
                          <h5>
                            <?= $event['title']; ?>
                          </h5>
                        </a>
                        <p class="mb-4 text-sm">
                          <?= $event['information']; ?>
                        </p>
                        <div class="d-flex align-items-center justify-content-between">
                          <button type="button" class="btn btn-outline-primary btn-sm mb-0"><a href="<?= base_url('dashboard/gallery/').$event['id']; ?>">View Project</a></button>
                        </div>
                      </div>
                    </div>
                  </div>
                <?php endforeach; ?>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
    <?= $this->endSection(); ?>