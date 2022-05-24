<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-6">
                <h1>Review Saya</h1>
            </div>
            <br>
            <div class="col-sm-5">
                <ol class="breadcrumb float-sm-right bg-dark">
                    <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                    <li class="breadcrumb-item active text-white">Review</li>
                </ol>
            </div>
        </div>
        <hr class="bg-dark">
        <button class="btn-btn success bg-danger"><a href="<?php echo site_url('customer/reviews/write'); ?>" class="nav-link text-white">review baru</button>
        <section class="ftco-section testimony-section">
            <div class="container">
                <div class="card card-danger">
                    <div class="card-body<?php echo (count($reviews) > 0) ? ' p-0' : ''; ?>">
                        <?php if (count($reviews) > 0) : ?>
                            <div class="table-responsive">
                                <table class="table table-striped m-0 bg-light">
                                    <tr class="bg-danger">
                                        <th scope="col">No.</th>
                                        <th scope="col">Order</th>
                                        <th scope="col">Tanggal</th>
                                        <th scope="col">Review</th>
                                    </tr>
                                    <?php foreach ($reviews as $review) : ?>
                                        <tr>
                                            <td class="text-dark"><?php echo $review->id; ?></td>
                                            <td class="text-dark"><?php echo anchor('customer/reviews/view/' . $review->id, '#' . $review->order_number); ?></td>
                                            <td class="text-dark"><?php echo get_formatted_date($review->review_date); ?></td>
                                            <td class="text-dark"><?php echo $review->review_text; ?></td>
                                        </tr>
                                    <?php endforeach; ?>
                                </table>
                            </div>
                        <?php else : ?>
                            <div class="row">
                                <div class="col-md-6">
                                    <div class="alert alert-info">
                                        Belum ada review yang ditulis. Silahkan tulis baru.
                                    </div>

                                    <?php echo anchor('customer/reviews/write', 'Tulisan review baru'); ?>
                                </div>
                            </div>
                        <?php endif; ?>
                    </div>

                    <?php if ($pagination) : ?>
                        <div class="card-footer">
                            <?php echo $pagination; ?>
                        </div>
                    <?php endif; ?>

                </div>
            </div>
        </section>
    </div>
</section>