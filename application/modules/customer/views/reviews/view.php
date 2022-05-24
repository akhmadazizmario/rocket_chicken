<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="ftco-section testimony-section">
  <div class="container">
    <div class="row mb-2">
      <div class="col-sm-6">
        <h1>Review Order #<?php echo $review->order_number; ?></h1>
      </div>
      <div class="col-sm-6">
        <ol class="breadcrumb float-sm-right">
          <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
          <li class="breadcrumb-item"><?php echo anchor('customer/reviews', 'Review'); ?></li>
          <li class="breadcrumb-item active">Order #<?php echo $review->order_number; ?></li>
        </ol>
      </div>
    </div>
  </div>

  <section class="ftco-section testimony-section">
    <div class="container">
      <table class="table table-hover table-striped bg-white">
        <tr>
          <td class="text-dark">Judul</td>
          <td class="text-success"><b><?php echo $review->title; ?></b></td>
        </tr>
        <tr>
          <td class="text-dark">Order</td>
          <td class="text-danger"><b>#<?php echo $review->order_number; ?></b></td>
        </tr>
        <tr>
          <td class="text-dark">Tanggal</td>
          <td class="text-dark"><b><?php echo get_formatted_date($review->review_date); ?></b></td>
        </tr>
        <tr>
          <td class="text-dark">Review</td>
          <td class="text-dark"><b><?php echo $review->review_text; ?></b></td>
        </tr>
      </table>
    </div>
    <div class="col-md-4">
      <div class="text-center">
        <a href="#" data-toggle="modal" data-target="#deleteModal" class="btn btn-danger">
          <i class="fa fa-trash"></i> Hapus
        </a>
      </div>
    </div>
    </div>
  </section>
</section>

<div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="deletelModalLabel">Hapus Review</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p class="deleteText">Anda yakin ingin menghapus review?</p>
      </div>
      <div class="modal-footer">
        <?php echo anchor('customer/reviews/delete/' . $review->id, 'Hapus', array('class' => 'btn btn-danger')); ?>
      </div>
    </div>
  </div>
</div>