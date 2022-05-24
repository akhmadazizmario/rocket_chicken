<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<section class="ftco-section testimony-section">
    <div class="container">
        <div class="row mb-2">
            <div class="col-sm-5">
                <h1>Pembayaran Saya</h1>
            </div>
            <div class="col-sm-5">
                <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><?php echo anchor(base_url(), 'Home'); ?></li>
                    <li class="breadcrumb-item active">Pembayaran</li>
                </ol>
            </div>
        </div>
        <hr class="bg-dark">
        <button class="btn-btn success bg-primary"><a href="<?php echo site_url('customer/payments/confirm'); ?>" class="nav-link text-white">pembayaran baru</button>
    </div>

    <section class="ftco-section testimony-section">
        <div class="container">
            <div class="card card-primary">
                <div class="card-body<?php echo (count($payments) > 0) ? ' p-0' : ''; ?>">
                    <?php if (count($payments) > 0) : ?>
                        <div class="table-responsive">
                            <table class="table table-striped m-0">
                                <tr class="bg-danger">
                                    <th scope="col" class="text-white">No.</th>
                                    <th scope="col" class="text-white">Order</th>
                                    <th scope="col" class="text-white">Tanggal</th>
                                    <th scope="col" class="text-white">Status</th>
                                </tr>
                                <?php foreach ($payments as $payment) : ?>
                                    <tr>
                                        <td class="text-dark"><?php echo $payment->id; ?></td>
                                        <td class="text-dark"><?php echo anchor('customer/payments/view/' . $payment->id, '#' . $payment->order_number); ?></td>
                                        <td class="text-dark"><?php echo get_formatted_date($payment->payment_date); ?></td>
                                        <td class="text-dark"><?php echo get_payment_status($payment->payment_status); ?></td>
                                    </tr>
                                <?php endforeach; ?>
                            </table>
                        </div>
                    <?php else : ?>
                        <div class="row">
                            <div class="col-md-6">
                                <div class="alert alert-info">
                                    Belum ada data pembayaran
                                </div>

                                <?php echo anchor('customer/payments/confirm', 'Konfirmasi pembayaran baru'); ?>
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
</section>