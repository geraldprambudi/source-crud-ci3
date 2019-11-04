<div class="container">
    <div class="card mb-3">
        <div class="card-header">
            <a href="<?= base_url('admin/product/add') ?>"><i class="fas fa-plus"></i> Add New</a>
        </div>
        <div class="card-body">
            <div class="table-responsive">
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Price</th>
                            <th>Desc</th>
                            <th>Action</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($products as $p) :  ?>
                            <tr>
                                <td><?= $p->name ?></td>
                                <td><?= $p->price ?></td>
                                <td><?= $p->description ?></td>
                                <td>
                                    <a href="<?= base_url('admin/product/edit/' . $p->id) ?>" class="btn btn-small"><i class="fas fa-edit"></i> Edit</a>
                                    <a href="<?= base_url('admin/product/delete/' . $p->id) ?>" class="btn btn-small"><i class="fas fa-trash"></i> Delete</a>

                                </td>
                            </tr>
                        <?php endforeach; ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>