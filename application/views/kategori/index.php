<div class="container-fluid">

<h2 class="h3 mb-4 text-gray-800">Data Kategori</h2>

<!-- ALERT SUCCESS -->
<?php if($this->session->flashdata('success')){ ?>
<div class="alert alert-success">
    <?= $this->session->flashdata('success'); ?>
</div>
<?php } ?>

<a href="<?= site_url('kategori/tambah'); ?>" class="btn btn-primary mb-3">
    <i class="bi bi-plus-circle"></i> Tambah Data
</a>

<div class="card shadow mb-4">
    <div class="card-body">
        <div class="table-responsive">

<table class="table table-bordered table-hover" width="100%" cellspacing="0">
    <thead class="table-dark">
    <tr>
        <th width="50">No</th>
        <th>Nama Kategori</th>
        <th width="150">Aksi</th>
    </tr>
    </thead>

<tbody>
<?php if(!empty($kategori)){ ?>
    <?php $no=1; foreach($kategori as $k): ?>
    <tr>
        <td><?= $no++; ?></td>
        <td><?= $k->nama_kategori; ?></td>
        <td>
            <a href="<?= site_url('kategori/edit/'.$k->id); ?>" class="btn btn-warning btn-sm">
                <i class="bi bi-pencil"></i> Edit
            </a>

            <a href="<?= site_url('kategori/hapus/'.$k->id); ?>" 
               onclick="return confirm('Yakin ingin hapus data ini?')" 
               class="btn btn-danger btn-sm">
               <i class="bi bi-trash"></i> Hapus
            </a>
        </td>
    </tr>
    <?php endforeach; ?>
<?php } else { ?>
    <tr>
        <td colspan="3" class="text-center">Data tidak ditemukan</td>
    </tr>
<?php } ?>
</tbody>

</table>

        </div>
    </div>
</div>

</div>