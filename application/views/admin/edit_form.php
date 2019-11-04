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
            <form action="<?php base_url('admin/product/edit') ?>" method="post" enctype="multipart/form-data">
                <input type="hidden" name="id" value="<?= $product->id ?>" />

                <div class="form-group">
                    <label for="name">Name*</label>
                    <input class="form-control <?= form_error('name') ? 'is_invalid' : '' ?>" type="text" name="name" placeholder="Nama Produk" value="<?= $product->name ?>" />
                    <div class="invalid-feedback">
                        <?= form_error('name') ?>
                    </div>
                </div>
                <div class="form-group">
                    <label for="price">Price*</label>
                    <input class="form-control <?= form_error('price') ? 'is_invalid' : '' ?>" type="text" name="price" placeholder="Price" value="<?= $product->price ?>" />
                    <div class="invalid-feedback">
                        <?= form_error('price') ?>
                    </div>
                </div>

                <div class="form-group">
                    <label for="name">Description*</label>
                    <input class="form-control <?= form_error('description') ? 'is_invalid' : '' ?>" type="text" name="description" placeholder="deskripsi" value="<?= $product->description ?>" />
                    <div class="invalid-feedback">
                        <?= form_error('description') ?>
                    </div>
                </div>
                <button type="submit" class="btn btn-success" name="btn" value="Save">Save</button>
            </form>
        </div>
    </div>
</div>