
<?php include_once '../includes/top.php'; ?>


  <!--start wrapper-->
  <div class="wrapper">

    <!--start sidebar -->
    <?php include_once '../includes/sidebar.php'; ?>
    <!--end sidebar -->

    <!--start top header-->
    <?php include_once '../includes/header.php'; ?>
    <!--end top header-->


    <!-- start page content wrapper-->
    <div class="page-content-wrapper">
      <!-- start page content-->
      <div class="page-content">

        <!--start breadcrumb-->
        <div class="page-breadcrumb d-none d-sm-flex align-items-center mb-3">
          <div class="breadcrumb-title pe-3">Dashboard</div>
          <div class="ps-3">
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb mb-0 p-0 align-items-center">
                <li class="breadcrumb-item"><a href="javascript:;">
                    <ion-icon name="home-outline"></ion-icon>
                  </a>
                </li>
                <li class="breadcrumb-item active" aria-current="page">eCommerce</li>
              </ol>
            </nav>
          </div>
          <div class="ms-auto">
            <div class="btn-group">
              <button type="button" class="btn btn-outline-primary">Settings</button>
              <button type="button"
                class="btn btn-outline-primary split-bg-primary dropdown-toggle dropdown-toggle-split"
                data-bs-toggle="dropdown"> <span class="visually-hidden">Toggle Dropdown</span>
              </button>
              <div class="dropdown-menu dropdown-menu-right dropdown-menu-lg-end"> <a class="dropdown-item"
                  href="javascript:;">Action</a>
                <a class="dropdown-item" href="javascript:;">Another action</a>
                <a class="dropdown-item" href="javascript:;">Something else here</a>
                <div class="dropdown-divider"></div> <a class="dropdown-item" href="javascript:;">Separated link</a>
              </div>
            </div>
          </div>
        </div>
        <!--end breadcrumb-->


        <div class="row row-cols-1 row-cols-lg-2 row-cols-xxl-4">
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5">
                    <ion-icon name="person-add-outline"></ion-icon>
                  </div>
                  <div>
                    <p class="mb-0">Followers</p>
                  </div>
                  <div class="fs-5 ms-auto">
                    <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0">1,037</h5>
                  </div>
                  <div class="ms-auto" id="chart1"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5">
                    <ion-icon name="heart-outline"></ion-icon>
                  </div>
                  <div>
                    <p class="mb-0">Likes</p>
                  </div>
                  <div class="fs-5 ms-auto">
                    <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0">23,758</h5>
                  </div>
                  <div class="ms-auto" id="chart2"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5">
                    <ion-icon name="chatbox-outline"></ion-icon>
                  </div>
                  <div>
                    <p class="mb-0">Comments</p>
                  </div>
                  <div class="fs-5 ms-auto">
                    <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0">1,139</h5>
                  </div>
                  <div class="ms-auto" id="chart3"></div>
                </div>
              </div>
            </div>
          </div>
          <div class="col">
            <div class="card radius-10">
              <div class="card-body">
                <div class="d-flex align-items-center gap-2">
                  <div class="fs-5">
                    <ion-icon name="mail-outline"></ion-icon>
                  </div>
                  <div>
                    <p class="mb-0">Messages</p>
                  </div>
                  <div class="fs-5 ms-auto">
                    <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                  </div>
                </div>
                <div class="d-flex align-items-center mt-3">
                  <div>
                    <h5 class="mb-0">1,037</h5>
                  </div>
                  <div class="ms-auto" id="chart4"></div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->


        <div class="row">
          <div class="col-12 col-lg-8 col-xl-8 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Statistics</h6>
                  <div class="ms-auto">
                    <div class="d-flex align-items-center font-13 gap-2">
                      <span class="border px-1 rounded cursor-pointer"><i
                          class="bx bxs-circle me-1 text-primary"></i>Downloads</span>
                      <span class="border px-1 rounded cursor-pointer"><i
                          class="bx bxs-circle me-1 text-success"></i>Earnings</span>
                    </div>
                  </div>
                </div>
                <div class="chart-container1">
                  <canvas id="chart5"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-4 col-xl-4 d-flex">
            <div class="card radius-10 overflow-hidden w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Top Categories</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container6">
                  <div class="piechart-legend">
                    <h2 class="mb-1">$85K</h2>
                    <h6 class="mb-0">Total Sales</h6>
                  </div>
                  <canvas id="chart6"></canvas>
                </div>
              </div>
              <ul class="list-group list-group-flush">
                <li class="list-group-item d-flex justify-content-between align-items-center border-top">
                  Clothing
                  <span class="badge bg-tiffany rounded-pill">55</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Electronics
                  <span class="badge bg-success rounded-pill">20</span>
                </li>
                <li class="list-group-item d-flex justify-content-between align-items-center">
                  Furniture
                  <span class="badge bg-warning rounded-pill">10</span>
                </li>
              </ul>
            </div>
          </div>
        </div>
        <!--end row-->


        <div class="row">
          <div class="col-12 col-lg-12 col-xl-6 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Customers</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="javascript:;">Action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Another action</a></li>
                      <li><a class="dropdown-item" href="javascript:;">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="row row-cols-1 row-cols-md-2 g-3 align-items-center">
                  <div class="col-lg-7 col-xl-7 col-xxl-7">
                    <div class="chart-container5">
                      <div class="piechart-legend">
                        <h2 class="mb-1">48K</h2>
                        <h6 class="mb-0">Customers</h6>
                      </div>
                      <canvas id="chart7"></canvas>
                    </div>
                  </div>
                  <div class="col-lg-5 col-xl-5 col-xxl-5">
                    <div class="">
                      <div class="d-flex align-items-start gap-2 mb-3">
                        <div>
                          <ion-icon name="ellipse-sharp" class="text-info"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">Current Customers</p>
                          <p class="mb-0 h5">66%</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start gap-2 mb-3">
                        <div>
                          <ion-icon name="ellipse-sharp" class="text-danger"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">New Customers</p>
                          <p class="mb-0 h5">48%</p>
                        </div>
                      </div>
                      <div class="d-flex align-items-start gap-2">
                        <div>
                          <ion-icon name="ellipse-sharp" class="text-success"></ion-icon>
                        </div>
                        <div>
                          <p class="mb-1">Retargeted Customers</p>
                          <p class="mb-0 h5">25%</p>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-6 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">Sales By Country</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                        aria-label="ellipsis horizontal sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="table-responsive">
                  <table class="table table-borderless align-middle mb-0">
                    <tbody>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="assets/images/icons/india.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">India</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-info" role="progressbar" style="width: 82%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">82%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="assets/images/icons/usa.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">USA</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 70%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">70%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="assets/images/icons/china.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">China</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-success" role="progressbar" style="width: 60%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">60%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="assets/images/icons/russia.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">Russia</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-warning" role="progressbar" style="width: 45%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">45%</div>
                        </td>
                      </tr>
                      <tr>
                        <td>
                          <div class="country-icon">
                            <img src="assets/images/icons/russia.png" alt="" width="32">
                          </div>
                        </td>
                        <td>
                          <div class="country-name h6 mb-0">Russia</div>
                        </td>
                        <td class="w-100">
                          <div class="progress flex-grow-1" style="height: 5px;">
                            <div class="progress-bar bg-gradient-danger" role="progressbar" style="width: 30%;"></div>
                          </div>
                        </td>
                        <td>
                          <div class="percent-data">30%</div>
                        </td>
                      </tr>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!--end row-->


        <div class="row">
          <div class="col-12 col-lg-12 col-xl-4 d-flex">
            <div class="card radius-10 bg-transparent shadow-none w-100">
              <div class="card-body p-0">
                <div class="card radius-10">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="widget-icon radius-10 bg-gradient-purple text-white">
                        <ion-icon name="wallet-sharp" role="img" class="md hydrated" aria-label="wallet sharp">
                        </ion-icon>
                      </div>
                      <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                          aria-label="ellipsis horizontal sharp"></ion-icon>
                      </div>
                    </div>
                    <h4 class="my-3">$4,580</h4>
                    <div class="progress mt-1" style="height: 5px;">
                      <div class="progress-bar bg-gradient-purple" role="progressbar" style="width: 65%"></div>
                    </div>
                    <p class="mb-0 mt-2">Earned This Month <span class="float-end">+2.4%</span></p>
                  </div>
                </div>
                <div class="card radius-10 mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-center">
                      <div class="widget-icon-2 bg-gradient-branding text-white">
                        <ion-icon name="people-sharp" role="img" class="md hydrated" aria-label="people sharp">
                        </ion-icon>
                      </div>
                      <div class="fs-5 ms-auto">
                        <ion-icon name="ellipsis-horizontal-sharp" role="img" class="md hydrated"
                          aria-label="ellipsis horizontal sharp"></ion-icon>
                      </div>
                    </div>
                    <h4 class="my-3">8,126</h4>
                    <div class="progress mt-1" style="height: 5px;">
                      <div class="progress-bar bg-gradient-branding" role="progressbar" style="width: 65%"></div>
                    </div>
                    <p class="mb-0 mt-2">New Clients <span class="float-end">+5.3%</span></p>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-4 d-flex">
            <div class="card radius-10 w-100">
              <div class="card-body">
                <div class="d-flex align-items-center mb-3">
                  <h6 class="mb-0">User Activity</h6>
                  <div class="dropdown options ms-auto">
                    <div class="dropdown-toggle dropdown-toggle-nocaret" data-bs-toggle="dropdown">
                      <ion-icon name="ellipsis-horizontal-sharp"></ion-icon>
                    </div>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item" href="#">Action</a></li>
                      <li><a class="dropdown-item" href="#">Another action</a></li>
                      <li><a class="dropdown-item" href="#">Something else here</a></li>
                    </ul>
                  </div>
                </div>
                <div class="chart-container3">
                  <canvas id="chart8"></canvas>
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 col-lg-12 col-xl-4 d-flex">
            <div class="card radius-10 bg-transparent shadow-none w-100">
              <div class="card-body p-0">
                <div class="card radius-10">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <p class="mb-2">Total Session</p>
                        <h4 class="mb-0">15,690 <span class="ms-1 font-13 text-success">+36%</span></h4>
                      </div>
                      <div class="fs-5">
                        <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                      </div>
                    </div>
                    <div class="mt-3" id="chart9"></div>
                  </div>
                </div>
                <div class="card radius-10 mb-0">
                  <div class="card-body">
                    <div class="d-flex align-items-start justify-content-between">
                      <div>
                        <p class="mb-2">Page Views</p>
                        <h4 class="mb-0">28,963 <span class="ms-1 font-13 text-danger">-4.5%</span></h4>
                      </div>
                      <div class="fs-5">
                        <ion-icon name="ellipsis-vertical-sharp"></ion-icon>
                      </div>
                    </div>
                    <div class="mt-3" id="chart10"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>



        </div>
        <!--end row-->


        <div class="card radius-10 w-100">
          <div class="card-body">
            <div class="d-flex align-items-center">
              <h6 class="mb-0">Recent Orders</h6>
              <div class="fs-5 ms-auto dropdown">
                <div class="dropdown-toggle dropdown-toggle-nocaret cursor-pointer" data-bs-toggle="dropdown"><i
                    class="bi bi-three-dots"></i></div>
                <ul class="dropdown-menu">
                  <li><a class="dropdown-item" href="#">Action</a></li>
                  <li><a class="dropdown-item" href="#">Another action</a></li>
                  <li>
                    <hr class="dropdown-divider">
                  </li>
                  <li><a class="dropdown-item" href="#">Something else here</a></li>
                </ul>
              </div>
            </div>
            <div class="table-responsive mt-2">
              <table class="table align-middle mb-0">
                <thead class="table-light">
                  <tr>
                    <th>#ID</th>
                    <th>Product</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Date</th>
                    <th>Status</th>
                    <th>Actions</th>
                  </tr>
                </thead>
                <tbody>
                  <tr>
                    <td>#89742</td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img src="assets/images/products/11.png" alt="">
                        </div>
                        <div class="product-info">
                          <h6 class="product-name mb-1">Smart Mobile Phone</h6>
                        </div>
                      </div>
                    </td>
                    <td>2</td>
                    <td>$214</td>
                    <td><span class="badge alert-success">Completed</span></td>
                    <td>Apr 8, 2021</td>
                    <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="View detail" aria-label="Views">
                          <ion-icon name="eye-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Edit info" aria-label="Edit">
                          <ion-icon name="pencil-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete">
                          <ion-icon name="trash-sharp"></ion-icon>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#68570</td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img src="assets/images/products/07.png" alt="">
                        </div>
                        <div class="product-info">
                          <h6 class="product-name mb-1">Sports Time Watch</h6>
                        </div>
                      </div>
                    </td>
                    <td>1</td>
                    <td>$185</td>
                    <td><span class="badge alert-success">Completed</span></td>
                    <td>Apr 9, 2021</td>
                    <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="View detail" aria-label="Views">
                          <ion-icon name="eye-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Edit info" aria-label="Edit">
                          <ion-icon name="pencil-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete">
                          <ion-icon name="trash-sharp"></ion-icon>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#38567</td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img src="assets/images/products/17.png" alt="">
                        </div>
                        <div class="product-info">
                          <h6 class="product-name mb-1">Women Red Heals</h6>
                        </div>
                      </div>
                    </td>
                    <td>3</td>
                    <td>$356</td>
                    <td><span class="badge alert-danger">Cancelled</span></td>
                    <td>Apr 10, 2021</td>
                    <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="View detail" aria-label="Views">
                          <ion-icon name="eye-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Edit info" aria-label="Edit">
                          <ion-icon name="pencil-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete">
                          <ion-icon name="trash-sharp"></ion-icon>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#48572</td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img src="assets/images/products/04.png" alt="">
                        </div>
                        <div class="product-info">
                          <h6 class="product-name mb-1">Yellow Winter Jacket</h6>
                        </div>
                      </div>
                    </td>
                    <td>1</td>
                    <td>$149</td>
                    <td><span class="badge alert-success">Completed</span></td>
                    <td>Apr 11, 2021</td>
                    <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="View detail" aria-label="Views">
                          <ion-icon name="eye-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Edit info" aria-label="Edit">
                          <ion-icon name="pencil-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete">
                          <ion-icon name="trash-sharp"></ion-icon>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#96857</td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img src="assets/images/products/10.png" alt="">
                        </div>
                        <div class="product-info">
                          <h6 class="product-name mb-1">Orange Micro Headphone</h6>
                        </div>
                      </div>
                    </td>
                    <td>2</td>
                    <td>$199</td>
                    <td><span class="badge alert-danger">Cancelled</span></td>
                    <td>Apr 15, 2021</td>
                    <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="View detail" aria-label="Views">
                          <ion-icon name="eye-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Edit info" aria-label="Edit">
                          <ion-icon name="pencil-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete">
                          <ion-icon name="trash-sharp"></ion-icon>
                        </a>
                      </div>
                    </td>
                  </tr>
                  <tr>
                    <td>#96857</td>
                    <td>
                      <div class="d-flex align-items-center gap-3">
                        <div class="product-box border">
                          <img src="assets/images/products/12.png" alt="">
                        </div>
                        <div class="product-info">
                          <h6 class="product-name mb-1">Pro Samsung Laptop</h6>
                        </div>
                      </div>
                    </td>
                    <td>1</td>
                    <td>$699</td>
                    <td><span class="badge alert-warning">Pending</span></td>
                    <td>Apr 18, 2021</td>
                    <td>
                      <div class="d-flex align-items-center gap-3 fs-6">
                        <a href="javascript:;" class="text-primary" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="View detail" aria-label="Views">
                          <ion-icon name="eye-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-warning" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Edit info" aria-label="Edit">
                          <ion-icon name="pencil-sharp"></ion-icon>
                        </a>
                        <a href="javascript:;" class="text-danger" data-bs-toggle="tooltip" data-bs-placement="bottom"
                          title="" data-bs-original-title="Delete" aria-label="Delete">
                          <ion-icon name="trash-sharp"></ion-icon>
                        </a>
                      </div>
                    </td>
                  </tr>
                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
      <!-- end page content-->
    </div>
    <!--end page content wrapper-->


    <!--start footer-->
    <?php include_once '../includes/info.php'; ?>
    <!--end footer-->


    <!--Start Back To Top Button-->
    <a href="javaScript:;" class="back-to-top">
      <ion-icon name="arrow-up-outline"></ion-icon>
    </a>
    <!--End Back To Top Button-->

    <!--start switcher-->
    <div class="switcher-body">
      <button class="btn btn-primary btn-switcher shadow-sm" type="button" data-bs-toggle="offcanvas"
        data-bs-target="#offcanvasScrolling" aria-controls="offcanvasScrolling">
        <ion-icon name="color-palette-sharp" class="me-0"></ion-icon>
      </button>
      <div class="offcanvas offcanvas-end shadow border-start-0 p-2" data-bs-scroll="true" data-bs-backdrop="false"
        tabindex="-1" id="offcanvasScrolling">
        <div class="offcanvas-header border-bottom">
          <h5 class="offcanvas-title" id="offcanvasScrollingLabel">Theme Customizer</h5>
          <button type="button" class="btn-close text-reset" data-bs-dismiss="offcanvas"></button>
        </div>
        <div class="offcanvas-body">
          <h6 class="mb-0">Theme Variation</h6>
          <hr>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="LightTheme" value="option1">
            <label class="form-check-label" for="LightTheme">Light</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="DarkTheme" value="option2">
            <label class="form-check-label" for="DarkTheme">Dark</label>
          </div>
          <div class="form-check form-check-inline">
            <input class="form-check-input" type="radio" name="inlineRadioOptions" id="SemiDark" value="option3"
              checked>
            <label class="form-check-label" for="SemiDark">Semi Dark</label>
          </div>
          <hr />
          <h6 class="mb-0">Header Colors</h6>
          <hr />
          <div class="header-colors-indigators">
            <div class="row row-cols-auto g-3">
              <div class="col">
                <div class="indigator headercolor1" id="headercolor1"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor2" id="headercolor2"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor3" id="headercolor3"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor4" id="headercolor4"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor5" id="headercolor5"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor6" id="headercolor6"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor7" id="headercolor7"></div>
              </div>
              <div class="col">
                <div class="indigator headercolor8" id="headercolor8"></div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!--end switcher-->


    <!--start overlay-->
    <div class="overlay nav-toggle-icon"></div>
    <!--end overlay-->

  </div>
  <?php include_once '../includes/footer.php'; ?>
