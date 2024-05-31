<?php $__env->startSection('title','Admin Panel'); ?>

<?php $__env->startSection('head'); ?>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="content-wrapper">
        <div class="row">
            <div class="col-sm-12">
                <div class="home-tab">
                    <div class="d-sm-flex align-items-center justify-content-between border-bottom">
                        <ul class="nav nav-tabs" role="tablist">
                            <li class="nav-item">
                                <a class="nav-link active ps-0" id="home-tab" data-bs-toggle="tab" href="#overview"
                                   role="tab" aria-controls="overview" aria-selected="true">Overview</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="profile-tab" data-bs-toggle="tab" href="#audiences" role="tab"
                                   aria-selected="false">Audiences</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" id="contact-tab" data-bs-toggle="tab" href="#demographics"
                                   role="tab" aria-selected="false">Demographics</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link border-0" id="more-tab" data-bs-toggle="tab" href="#more" role="tab"
                                   aria-selected="false">More</a>
                            </li>
                        </ul>
                        <div>
                            <div class="btn-wrapper">
                                <a href="#" class="btn btn-otline-dark align-items-center"><i class="icon-share"></i>
                                    Share</a>
                                <a href="#" class="btn btn-otline-dark"><i class="icon-printer"></i> Print</a>
                                <a href="#" class="btn btn-primary text-white me-0"><i class="icon-download"></i> Export</a>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content tab-content-basic">
                        <div class="tab-pane fade show active" id="overview" role="tabpanel" aria-labelledby="overview">
                            <div class="row">
                                <div class="col-sm-12">
                                    <div class="statistics-details d-flex align-items-center justify-content-between">
                                        <div>
                                            <p class="statistics-title">Kullanıcı sayısı</p>
                                            <h3 class="rate-percentage"></h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-up"></i><span>+0.8%</span></p>
                                        </div>
                                        <div>
                                            <p class="statistics-title">Duyuru sayısı</p>
                                            <h3 class="rate-percentage"></h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-up"></i><span>+0.2%</span></p>
                                        </div>
                                        <div>
                                            <p class="statistics-title">Hizmet sayısı</p>
                                            <h3 class="rate-percentage"></h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-up"></i><span>+0.6%</span></p>
                                        </div>
                                        <div class="d-none d-md-block">
                                            <p class="statistics-title">Mesaj sayısı</p>
                                            <h3 class="rate-percentage"></h3>
                                            <p class="text-success d-flex"><i
                                                    class="mdi mdi-menu-up"></i><span>+0.3%</span></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 col-lg-4 col-lg-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                                                        <div class="carousel-inner">
                                                            <div class="carousel-item active">
                                                                <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/Admin/images/11.jpg"
                                                                     alt="First slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/Admin/images/12.jpg"
                                                                     alt="Second slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/Admin/images/13.jpg"
                                                                     alt="Third slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/Admin/images/14.jpg"
                                                                     alt="Third slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/Admin/images/15.jpg"
                                                                     alt="Third slide">
                                                            </div>
                                                            <div class="carousel-item">
                                                                <img class="d-block w-100" src="<?php echo e(asset('assets')); ?>/Admin/images/10.jpg"
                                                                     alt="Third slide">
                                                            </div>
                                                        </div>
                                                        <a class="carousel-control-prev" href="#carouselExampleControls" role="button"
                                                           data-slide="prev">
                                                            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Previous</span>
                                                        </a>
                                                        <a class="carousel-control-next" href="#carouselExampleControls" role="button"
                                                           data-slide="next">
                                                            <span class="carousel-control-next-icon" aria-hidden="true"></span>
                                                            <span class="sr-only">Next</span>
                                                        </a>
                                                        <!-- /.card-footer-->
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-4 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12" style="overflow: auto; height: 500px">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <i class="bi bi-megaphone-fill"></i>
                                                                <h2 class="card-title card-title-dash" style="font-size: 30px">Duyurular</h2>

                                                            </div>
                                                            <div class="list-wrapper">
                                                                <ul class="todo-list todo-list-rounded">
                                                                    <?php $__currentLoopData = $data; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $rs): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li class="d-block">
                                                                        <div class="form-check w-100">
                                                                            <h5><?php echo e($rs->title); ?></h5>
                                                                            <p><?php echo e($rs->description); ?></p>
                                                                            <div class="d-flex mt-2">
                                                                                <div class="ps-4 text-small me-3"><?php echo e($rs->created_at); ?>

                                                                                </div>
                                                                                <div
                                                                                    class="badge badge-opacity-warning me-3">
                                                                                    Notice
                                                                                </div>
                                                                                <i class="mdi mdi-flag ms-2 flag-color"></i>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                                </ul>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="row">
                                                        <div class="col-lg-12">
                                                            <div
                                                                class="d-flex justify-content-between align-items-center mb-3">
                                                                <div>
                                                                    <h4 class="card-title card-title-dash">Top
                                                                        Performer</h4>
                                                                </div>
                                                            </div>
                                                            <div class="mt-3">
                                                                <div
                                                                    class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                    <div class="d-flex">
                                                                        <img class="img-sm rounded-10"
                                                                             src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face1.jpg"
                                                                             alt="profile">
                                                                        <div class="wrapper ms-3">
                                                                            <p class="ms-1 mb-1 fw-bold">Brandon
                                                                                Washington</p>
                                                                            <small
                                                                                class="text-muted mb-0">162543</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-muted text-small">
                                                                        1h ago
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                    <div class="d-flex">
                                                                        <img class="img-sm rounded-10"
                                                                             src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face2.jpg"
                                                                             alt="profile">
                                                                        <div class="wrapper ms-3">
                                                                            <p class="ms-1 mb-1 fw-bold">Wayne
                                                                                Murphy</p>
                                                                            <small
                                                                                class="text-muted mb-0">162543</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-muted text-small">
                                                                        1h ago
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                    <div class="d-flex">
                                                                        <img class="img-sm rounded-10"
                                                                             src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face3.jpg"
                                                                             alt="profile">
                                                                        <div class="wrapper ms-3">
                                                                            <p class="ms-1 mb-1 fw-bold">Katherine
                                                                                Butler</p>
                                                                            <small
                                                                                class="text-muted mb-0">162543</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-muted text-small">
                                                                        1h ago
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wrapper d-flex align-items-center justify-content-between py-2 border-bottom">
                                                                    <div class="d-flex">
                                                                        <img class="img-sm rounded-10"
                                                                             src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face4.jpg"
                                                                             alt="profile">
                                                                        <div class="wrapper ms-3">
                                                                            <p class="ms-1 mb-1 fw-bold">Matthew
                                                                                Bailey</p>
                                                                            <small
                                                                                class="text-muted mb-0">162543</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-muted text-small">
                                                                        1h ago
                                                                    </div>
                                                                </div>
                                                                <div
                                                                    class="wrapper d-flex align-items-center justify-content-between pt-2">
                                                                    <div class="d-flex">
                                                                        <img class="img-sm rounded-10"
                                                                             src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face5.jpg"
                                                                             alt="profile">
                                                                        <div class="wrapper ms-3">
                                                                            <p class="ms-1 mb-1 fw-bold">Rafell John</p>
                                                                            <small class="text-muted mb-0">Alaska,
                                                                                USA</small>
                                                                        </div>
                                                                    </div>
                                                                    <div class="text-muted text-small">
                                                                        1h ago
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 d-flex flex-column">
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Market Overview</h4>
                                                            <p class="card-subtitle card-subtitle-dash">Lorem ipsum
                                                                dolor sit amet consectetur adipisicing elit</p>
                                                        </div>
                                                        <div>
                                                            <div class="dropdown">
                                                                <button
                                                                    class="btn btn-secondary dropdown-toggle toggle-dark btn-lg mb-0 me-0"
                                                                    type="button" id="dropdownMenuButton2"
                                                                    data-bs-toggle="dropdown" aria-haspopup="true"
                                                                    aria-expanded="false"> This month
                                                                </button>
                                                                <div class="dropdown-menu"
                                                                     aria-labelledby="dropdownMenuButton2">
                                                                    <h6 class="dropdown-header">Settings</h6>
                                                                    <a class="dropdown-item" href="#">Action</a>
                                                                    <a class="dropdown-item" href="#">Another action</a>
                                                                    <a class="dropdown-item" href="#">Something else
                                                                        here</a>
                                                                    <div class="dropdown-divider"></div>
                                                                    <a class="dropdown-item" href="#">Separated link</a>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div
                                                        class="d-sm-flex align-items-center mt-1 justify-content-between">
                                                        <div
                                                            class="d-sm-flex align-items-center mt-4 justify-content-between">
                                                            <h2 class="me-2 fw-bold">$36,2531.00</h2><h4 class="me-2">
                                                                USD</h4><h4 class="text-success">(+1.37%)</h4></div>
                                                        <div class="me-3">
                                                            <div id="marketing-overview-legend"></div>
                                                        </div>
                                                    </div>
                                                    <div class="chartjs-bar-wrapper mt-3">
                                                        <canvas id="marketingOverview"></canvas>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded table-darkBGImg">
                                                <div class="card-body">
                                                    <div class="col-sm-8">
                                                        <h3 class="text-white upgrade-info mb-0">
                                                            Enhance your <span class="fw-bold">Campaign</span> for
                                                            better outreach
                                                        </h3>
                                                        <a href="#" class="btn btn-info upgrade-btn">Upgrade
                                                            Account!</a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row flex-grow">
                                        <div class="col-12 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-sm-flex justify-content-between align-items-start">
                                                        <div>
                                                            <h4 class="card-title card-title-dash">Pending Requests</h4>
                                                            <p class="card-subtitle card-subtitle-dash">You have 50+ new
                                                                requests</p>
                                                        </div>
                                                        <div>
                                                            <button class="btn btn-primary btn-lg text-white mb-0 me-0"
                                                                    type="button"><i class="mdi mdi-account-plus"></i>Add
                                                                new member
                                                            </button>
                                                        </div>
                                                    </div>
                                                    <div class="table-responsive  mt-1">
                                                        <table class="table select-table">
                                                            <thead>
                                                            <tr>
                                                                <th>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input"
                                                                                   aria-checked="false"><i
                                                                                class="input-helper"></i></label>
                                                                    </div>
                                                                </th>
                                                                <th>Customer</th>
                                                                <th>Company</th>
                                                                <th>Progress</th>
                                                                <th>Status</th>
                                                            </tr>
                                                            </thead>
                                                            <tbody>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input"
                                                                                   aria-checked="false"><i
                                                                                class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex ">
                                                                        <img
                                                                            src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face1.jpg"
                                                                            alt="">
                                                                        <div>
                                                                            <h6>Brandon Washington</h6>
                                                                            <p>Head admin</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Company name 1</h6>
                                                                    <p>company type</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">79%</p>
                                                                            <p>85/162</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success"
                                                                                 role="progressbar" style="width: 85%"
                                                                                 aria-valuenow="25" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-warning">In
                                                                        progress
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input"
                                                                                   aria-checked="false"><i
                                                                                class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img
                                                                            src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face2.jpg"
                                                                            alt="">
                                                                        <div>
                                                                            <h6>Laura Brooks</h6>
                                                                            <p>Head admin</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Company name 1</h6>
                                                                    <p>company type</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">65%</p>
                                                                            <p>85/162</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success"
                                                                                 role="progressbar" style="width: 65%"
                                                                                 aria-valuenow="65" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-warning">In
                                                                        progress
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input"
                                                                                   aria-checked="false"><i
                                                                                class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img
                                                                            src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face3.jpg"
                                                                            alt="">
                                                                        <div>
                                                                            <h6>Wayne Murphy</h6>
                                                                            <p>Head admin</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Company name 1</h6>
                                                                    <p>company type</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">65%</p>
                                                                            <p>85/162</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-warning"
                                                                                 role="progressbar" style="width: 38%"
                                                                                 aria-valuenow="38" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-warning">In
                                                                        progress
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input"
                                                                                   aria-checked="false"><i
                                                                                class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img
                                                                            src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face4.jpg"
                                                                            alt="">
                                                                        <div>
                                                                            <h6>Matthew Bailey</h6>
                                                                            <p>Head admin</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Company name 1</h6>
                                                                    <p>company type</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">65%</p>
                                                                            <p>85/162</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-danger"
                                                                                 role="progressbar" style="width: 15%"
                                                                                 aria-valuenow="15" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-danger">Pending
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            <tr>
                                                                <td>
                                                                    <div class="form-check form-check-flat mt-0">
                                                                        <label class="form-check-label">
                                                                            <input type="checkbox"
                                                                                   class="form-check-input"
                                                                                   aria-checked="false"><i
                                                                                class="input-helper"></i></label>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="d-flex">
                                                                        <img
                                                                            src="<?php echo e(asset('assets')); ?>/Admin/images/faces/face5.jpg"
                                                                            alt="">
                                                                        <div>
                                                                            <h6>Katherine Butler</h6>
                                                                            <p>Head admin</p>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <h6>Company name 1</h6>
                                                                    <p>company type</p>
                                                                </td>
                                                                <td>
                                                                    <div>
                                                                        <div
                                                                            class="d-flex justify-content-between align-items-center mb-1 max-width-progress-wrap">
                                                                            <p class="text-success">65%</p>
                                                                            <p>85/162</p>
                                                                        </div>
                                                                        <div class="progress progress-md">
                                                                            <div class="progress-bar bg-success"
                                                                                 role="progressbar" style="width: 65%"
                                                                                 aria-valuenow="65" aria-valuemin="0"
                                                                                 aria-valuemax="100"></div>
                                                                        </div>
                                                                    </div>
                                                                </td>
                                                                <td>
                                                                    <div class="badge badge-opacity-success">Completed
                                                                    </div>
                                                                </td>
                                                            </tr>
                                                            </tbody>
                                                        </table>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <div class="row flex-grow">
                                        <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body card-rounded">
                                                    <h4 class="card-title  card-title-dash">Recent Events</h4>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Change in Directors
                                                            </p>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14,
                                                                        2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Other Events
                                                            </p>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14,
                                                                        2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Quarterly Report
                                                            </p>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14,
                                                                        2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="list align-items-center border-bottom py-2">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-2 font-weight-medium">
                                                                Change in Directors
                                                            </p>
                                                            <div
                                                                class="d-flex justify-content-between align-items-center">
                                                                <div class="d-flex align-items-center">
                                                                    <i class="mdi mdi-calendar text-muted me-1"></i>
                                                                    <p class="mb-0 text-small text-muted">Mar 14,
                                                                        2019</p>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="list align-items-center pt-3">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-0">
                                                                <a href="#" class="fw-bold text-primary">Show all <i
                                                                        class="mdi mdi-arrow-right ms-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-6 col-lg-6 grid-margin stretch-card">
                                            <div class="card card-rounded">
                                                <div class="card-body">
                                                    <div class="d-flex align-items-center justify-content-between mb-3">
                                                        <h4 class="card-title card-title-dash">Activities</h4>
                                                        <p class="mb-0">20 finished, 5 remaining</p>
                                                    </div>
                                                    <ul class="bullet-line-list">
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <div><span class="text-light-green">Ben Tossell</span>
                                                                    assign you a task
                                                                </div>
                                                                <p>Just now</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <div><span class="text-light-green">Oliver Noah</span>
                                                                    assign you a task
                                                                </div>
                                                                <p>1h</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <div><span class="text-light-green">Jack William</span>
                                                                    assign you a task
                                                                </div>
                                                                <p>1h</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <div><span class="text-light-green">Leo Lucas</span>
                                                                    assign you a task
                                                                </div>
                                                                <p>1h</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <div><span class="text-light-green">Thomas Henry</span>
                                                                    assign you a task
                                                                </div>
                                                                <p>1h</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <div><span class="text-light-green">Ben Tossell</span>
                                                                    assign you a task
                                                                </div>
                                                                <p>1h</p>
                                                            </div>
                                                        </li>
                                                        <li>
                                                            <div class="d-flex justify-content-between">
                                                                <div><span class="text-light-green">Ben Tossell</span>
                                                                    assign you a task
                                                                </div>
                                                                <p>1h</p>
                                                            </div>
                                                        </li>
                                                    </ul>
                                                    <div class="list align-items-center pt-3">
                                                        <div class="wrapper w-100">
                                                            <p class="mb-0">
                                                                <a href="#" class="fw-bold text-primary">Show all <i
                                                                        class="mdi mdi-arrow-right ms-2"></i></a>
                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- partial -->
<?php $__env->stopSection(); ?>

<?php $__env->startSection('foot'); ?>
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <!-- Popper.js -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js"></script>
    <!-- Bootstrap JS -->
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.userbase', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Abdullah\Desktop\laravelkuafor (2)\laravelkuafor\resources\views/user/index.blade.php ENDPATH**/ ?>