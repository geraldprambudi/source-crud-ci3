<div class="container-fluid">
    <?php if ($this->session->flashdata('success')) : ?>
        <div class="alert alert-success" role="alert">
            <?= $this->session->flashdata('success'); ?>
        </div>
    <?php endif; ?>

    <div class="card mb-3">
        <div class="card-header">
            <a href="<?= base_url('admin/product/') ?>"><i class="fas fa-arrow-left"></i> Back</a>
        </div>
        <div class="card-body">
            <form action="<?php base_url('admin/product/add') ?>" method="post" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="name">Name*</label>
                    <input class="form-control <?= form_error('name') ? 'is-invalid' : '' ?>" type="text" name="name" placeholder="Nama Produk" value="<?= set_value('name'); ?>"  />
                    <div class="invalid-feedback">
                        <?= form_error('name') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input class="form-control <?= form_error('price') ? 'is-invalid' : '' ?>" type="text" name="price" placeholder="Price" value="<?= set_value('price'); ?>" />
                    <div class="invalid-feedback">
                        <?= form_error('price') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Description*</label>
                    <input class="form-control <?= form_error('description') ? 'is-invalid' : '' ?>" type="text" name="description" placeholder="deskripsi" value="<?= set_value('description'); ?>" />
                    <div class="invalid-feedback">
                        <?= form_error('description') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" value="Save">Save</button>
            </form>
        </div>
    </div>
</div>