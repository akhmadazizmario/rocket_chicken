<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section id="home-section" class="hero">
  <div class="home-slider owl-carousel">
    <div class="slider-item" style="background-image: url(<?php echo base_url('assets/themes/vegefoods/images/bg_2.png'); ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-center align-items-center" data-scrollax-parent="true">

          <div class="col-md-12 ftco-animate text-center">
            <h1 class="mb-2 ">rocket chicken Tegal</h1>
            <h2 class="subheading mb-4">jalan.werkudoro, Kota tegal</h2>
            <p><a href="#menu" class="btn btn-success"><span class="icon icon-shopping-cart" style="color:white"> Pesan Sekarang</a></p>
          </div>
        </div>
      </div>
    </div>

    <div class="slider-item" style="background-image: url(<?php echo get_theme_uri('images/delivery.jpg'); ?>);">
      <div class="overlay"></div>
      <div class="container">
        <div class="row slider-text justify-content-left align-items-left" data-scrollax-parent="true">
          <div class="col-sm-12 ftco-animate">
            <h1 class="mb-2 text-dark">FOOD DELIVERY </h1>
            <h2 class="subheading mb-4 text-dark">pesan dirumah lebih cepat dan lebih efisien</h2>
            <p><a href="#menu" class="btn btn-success"><span class="icon icon-shopping-cart" style="color:white"> Pesan Sekarang</a></p>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>


<!--bagan card -->
<section class="ftco-section bg-warning" id="products">
  <div class="container">
    <div class="row no-gutters ftco-services">
      <!---card 1 --->
      <div class="card col-md-3 py-3">
        <div class=" text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-dark active d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-shipped"></span>
            </div>
            <div class="media-body">
              <h3 class="heading text-dark "><strong>Gratis Ongkir</strong></h3>
              <span class="text-dark">
                Belanja minimal Rp <?php echo format_rupiah(get_settings('min_shop_to_free_shipping_cost')); ?>
              </span>
            </div>
          </div>
        </div>
      </div>
      <!---card 2 --->
      <div class="card col-md-3 py-3">
        <div class="text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-dark d-flex justify-content-center align-items-center mb-2">
              <img src="<?= base_url() ?>/assets/themes/vegefoods/images/chicken-leg.png" height="60px" width="60px">
            </div>
            <div class="media-body">
              <h3 class="heading text-dark"><strong> ayam kualitas terbaik</strong></h3>
              <span class="text-dark">
                kami memilih daging ayam<br> segar pilihan terbaik
              </span>
            </div>
          </div>
        </div>
      </div>
      <!---card 3 --->
      <div class="card col-md-3 py-3">
        <div class="text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-dark d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-award"></span>
            </div>
            <div class="media-body">
              <h3 class="heading text-dark"><strong>pelayanan Terbaik</strong></h3>
              <span class="text-dark">
                Kami melayani pelanggan<br> dengan sepenuh hati
              </span>
            </div>
          </div>
        </div>
      </div>
      <!---card 4 --->
      <div class="card col-md-3 py-3">
        <div class=" text-center d-flex align-self-stretch ftco-animate">
          <div class="media block-6 services mb-md-0 mb-4">
            <div class="icon bg-dark d-flex justify-content-center align-items-center mb-2">
              <span class="flaticon-customer-service"></span>
            </div>
            <div class="media-body">
              <h3 class="heading text-dark"><strong>Bantuan</strong></h3>
              <span class="text-dark">
                kami siap Bantuan<br> Jam 09.00 Am - 22.00 Pm.
              </span>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <style class="text/css">
    .card {
      width: 100%;
      height: auto;
      grid-column: span 8;
      margin: 10px 0;
      border-radius: 10px;
      border-color: rgba(0, 0, 0, .1);
      position: relative;
      box-shadow: 0 10px 10px rgb(104, 100, 100);

    }

    .body-card {
      padding: 10px 15px;
    }

    .body-card h1 {
      margin: 0;

    }
  </style>

</section>


<!--Menu makanan-->
<section class="ftco-section bg-light" id="menu">
  <div class="container">
    <div class="row justify-content-center mb-3 pb-3">
      <div class="col-md-12 heading-section text-center ftco-animate">
        <span class="subheading text-dark">== MENU ==</span>
        <h2 class="mb-4">
          <?php echo get_store_name(); ?>
        </h2>
        <p class="text-dark">
          <?php echo get_settings('store_tagline'); ?>
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <?php if (count($products) > 0) : ?>
        <?php foreach ($products as $product) : ?>
          <div class="col-md-6 col-lg-3 ftco-animate">
            <div class="card product">
              <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="img-prod">
                <img class="img-fluid" src="<?php echo base_url('assets/uploads/products/' . $product->picture_name); ?>" alt="<?php echo $product->name; ?>">
                <?php if ($product->current_discount > 0) : ?>
                  <span class="status"><?php echo count_percent_discount($product->current_discount, $product->price, 0); ?>%</span>
                <?php endif; ?>
                <div class="overlay"></div>
              </a>
              <div class="text py-3 pb-4 px-3 text-center bg-dark">
                <h3><a class="text-white" href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>"><?php echo $product->name; ?></a></h3>
                <div class="d-flex">
                  <div class="pricing">
                    <p class="price">
                      <?php if ($product->current_discount > 0) : ?>
                        <span class="mr-2 price-dc text-danger">Rp <?php echo format_rupiah($product->price); ?></span><span class="price-sale text-white">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                      <?php else : ?>
                        <span class="mr-2"><span class="price-sale text-white">Rp <?php echo format_rupiah($product->price - $product->current_discount); ?></span>
                        <?php endif; ?>
                    </p>
                  </div>
                </div>
                <div class="bottom-area d-flex px-3">
                  <div class="m-auto d-flex">
                    <a href="<?php echo site_url('shop/product/' . $product->id . '/' . $product->sku . '/'); ?>" class="buy-now d-flex justify-content-center align-items-center text-center">
                      <span><i class="ion-ios-menu"></i></span>
                    </a>
                    <a href="#" class="add-to-chart add-cart d-flex justify-content-center align-items-center mx-1" data-sku="<?php echo $product->sku; ?>" data-name="<?php echo $product->name; ?>" data-price="<?php echo ($product->current_discount > 0) ? ($product->price - $product->current_discount) : $product->price; ?>" data-id="<?php echo $product->id; ?>">
                      <span><i class="ion-ios-cart"></i></span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>
        <?php endforeach; ?>
      <?php else : ?>
      <?php endif; ?>
    </div>
  </div>

</section>

<!--komentar pelanggan-->
<section class="ftco-section testimony-section bg-warning">
  <div class="container">
    <div class="row justify-content-center mb-5 pb-3">
      <div class="col-md-7 heading-section ftco-animate text-center">
        <span class="subheading text-dark">Komentar</span>
        <h2 class="mb-4">Review dari Pelanggan kami</h2>
      </div>
    </div>
    <div class="row ftco-animate">
      <div class="col-md-12">
        <div class="carousel-testimony owl-carousel">
          <?php if (count($reviews) > 0) : ?>
            <?php foreach ($reviews as $review) : ?>
              <div class="item bg-light">
                <div class="testimony-wrap p-4 pb-5">
                  <div class="user-img mb-5" style="background-image: url(<?php echo base_url('assets/uploads/users/' . $review->profile_picture); ?>)">
                    <span class="quote d-flex align-items-center justify-content-center">
                      <i class="icon-quote-left"></i>
                    </span>
                  </div>
                  <div class="text text-center">
                    <p class="mb-5 pl-4 line text-"><?php echo $review->review_text; ?></p>
                    <p class="name text-"><?php echo $review->name; ?></p>
                    <span class="position text-"><?php echo get_formatted_date($review->review_date); ?></span>
                  </div>
                </div>
              </div>
            <?php endforeach; ?>
          <?php else : ?>
          <?php endif; ?>

        </div>
      </div>
    </div>
  </div>
</section>

<!--maps-->
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3472.7834830135616!2d109.14015023488722!3d-6.887648902446493!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e6fb9cafb3a7a45%3A0xeafd1121db857c56!2sRocket%20Chiken%20Werkudoro!5e0!3m2!1sid!2sid!4v1648960792800!5m2!1sid!2sid" width="1520" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</iframe>