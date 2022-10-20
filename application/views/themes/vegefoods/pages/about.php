<!-- halaman TENTANG KAMI-->
<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<div class="hero-wrap hero-bread bg-info" style="background-image: url(<?php echo get_theme_uri('images/bg_2.jpg'); ?>);">
  <div class="container">
    <div class="row no-gutters slider-text align-items-center justify-content-center">
      <div class="col-md-9 ftco-animate text-center">
        <p class="breadcrumbs"><span class="mr-2"></span> <span>HALAMAN</span></p>
        <h1 class="mb-0 bread">Tentang Kami</h1>
      </div>
    </div>
  </div>
</div>

<!--- tentang kami beranda--->
<section class="ftco-section bg-warning" id="tentangkami">
  <div class="container">
    <div class="row justify-content-end">
      <div class="col-md-5 p-md-5 img img-2 d-flex justify-content-center align-items-center">
        <div style="width: 100%">
          <img src="<?= base_url() ?>/assets/themes/vegefoods/images/rc.jpg" width="450px" height="450px">
        </div>
      </div>
      <div class="col-md-7 py-5 wrap-about pb-md-5 ftco-animate">
        <div class="heading-section-bold mb-4 mt-md-5">
          <div class="ml-md-0">
            <h2 class="mb-4 text-dark">Selamat Datang di website <?php echo get_store_name(); ?></h2>
          </div>
        </div>
        <div class="pb-md-5">
          <p class="text-dark"><?php echo get_settings('store_description'); ?></p>

          <h3 class="mb-4">ROCKET CHICKEN TEGAL </h3>
          <span class="subheading text-dark"> Location:</span>
          <span class="icon icon-map-marker" style="color:black"> jalan.werkudoro,Langon,Kec.Tegal Timur , Kota Tegal
            <h3></h3>
            <p> ROCKET CHICKEN adalah Perusahaan yang bergerak di Bidang Fast Food Restaurant, dengan produk unggulan, Fried chicken, Burger, Steak dan Chinese food, dengan konsep menyajikan makanan yang sehat, berkualitas, halal, dengan cita rasa yang khas,
              harga terjangkau bagi semua kalangan masyarakat yang diolah dengan bumbu pilihan.
              dan sekarang sudah buka banyak cabang terutama di kota tegal yaitu tepatnya di jalan werkudoro, Langon, kec.Tegal Timur, Kota Tegal.
              dapatkan Harga spesialnya dengan Datang ke toko dan bisa pesan online.</p>
            <p>minat? Ayok pesan sekarang juga!</p>
            <a href="http://localhost/rocket_chicken/#menu" class="btn btn-success"><span class="icon icon-shopping-cart" style="color:white"> pesan Sekarang</a>
        </div>
      </div>
    </div>
  </div>
  </div>
  </div>
</section>