<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Anambas</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Anambas</a></li>
                            <li class="breadcrumb-item active">Booking</li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Booking
                            </div>
                            <div class="card-body">
                            <a href="<?= base_url('daftar-produk/tambah') ?>" class="btn btn-primary btn-sm mb-2" >
                            <i class="fas fa-plus"></i> Tambah
                            </a>

                            <!-- notifikasi berhasil -->
                            <?php if(session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                <?= session('success'); ?>
                            </div>
                                <?php endif; ?>

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama</th>
                                            <th>Tujuan</th>
                                            <th>Nama Hotel</th>
                                            <th>departure</th>
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($daftar_produk as $produk) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $produk->deskripsi; ?> </td>
                                                <td><?= $produk->nama_produk; ?> </td>
                                                <td><?= $produk->sluq_kategori; ?> </td>
                                                <td><?= $produk->departure; ?></td>
                                                <td width="15%" class="text-center">
                                                    <button tabindex="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#hapusModal<?= $produk->id_produk; ?>"><i class="fas fa-trash-alt"></i>Hapus</button>

                                                </td>
                                            </tr>
                                            <?php endforeach; ?>
                                    </tbody>

                                </table>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </main>

                <!-- modal Hapus -->
                <?php foreach ($daftar_produk as $kategori): ?>
<div class="modal fade" id="hapusModal<?= $kategori->id_produk; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus Kategori Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('daftar-kategori/hapus1/'. $kategori->id_produk) ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="DELETE">
            <p>yakin mau dihapus <?= $kategori->sluq_kategori; ?> Akan diHapus?</p>

      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-danger btn-sm">Delete</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<?= $this->endSection(); ?>

