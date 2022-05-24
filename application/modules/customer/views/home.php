<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="ftco-section testimony-section">
  <div class="container">
    <h1 class="m-0 text-dark">Halaman anda</h1>
    <hr>
    <?php if ($flash) : ?>
      <div class="text-success font-weight-bold"><?php echo $flash; ?></div>
    <?php else : ?>
      <ol class="breadcrumb float-sm-right bg-dark">
        <li class="breadcrumb-item text-white"><a href="#">Home</a></li>
        <li class="breadcrumb-item active text-white">HALAMAN ANDA</li>
      </ol>
    <?php endif; ?>
  </div>
</section>

<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row">

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <h3><?php echo $total_order; ?></h3>
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                  ORDER CUSTOMER</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-gift fa-2x text-black-300"></i>
              </div>
              <a href="<?php echo site_url('customer/orders'); ?>" class="small-box-footer">Lihat Order <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <h3><?php echo $total_process_order; ?></h3>
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                  DALAM PROSESS</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-truck fa-2x text-black-300"></i>
              </div>
              <a href="<?php echo site_url('customer/orders'); ?>" class="small-box-footer">Lihat Posess <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <h3><?php echo $total_payment; ?></h3>
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                  PEMBAYARAN</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-credit-card fa-2x text-black-300"></i>
              </div>
              <a href="<?php echo site_url('customer/payments'); ?>" class="small-box-footer">Lihat Pembayaran <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>

      <!-- Earnings (Monthly) Card Example -->
      <div class="col-xl-3 col-md-6 mb-4">
        <div class="card border-left-success shadow h-100 py-2">
          <div class="card-body">
            <div class="row no-gutters align-items-center">
              <div class="col mr-2">
                <h3><?php echo $total_review; ?></h3>
                <div class="text-xs font-weight-bold text-danger text-uppercase mb-1">
                  REVIEWQU</div>
              </div>
              <div class="col-auto">
                <i class="fa fa-comments fa-2x text-black-300"></i>
              </div>
              <a href="<?php echo site_url('customer/reviews'); ?>" class="small-box-footer">Lihat Reviewku <i class="fas fa-arrow-circle-right"></i></a>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>