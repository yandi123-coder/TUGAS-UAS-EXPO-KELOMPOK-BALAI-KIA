<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
                <main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4"><?= $title; ?></h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">KARIMUN</a></li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Kategori Produk
                            </div>
                            <div class="card-body">
                            <button type="button" class="btn btn-primary btn-sm mb-2" data-bs-toggle="modal" data-bs-target="#tambahModal">
                            <i class="fas fa-plus"></i> Tambah
                            </button>

                            <!-- notifikasi pesan ditambahkan -->
                            <?php if(session('success')) : ?>
                                <div class="alert alert-success" role="alert">
                                <?= session('success'); ?>
                            </div>
                                <?php endif; ?>

                                <table id="datatablesSimple">
                                    <thead>
                                        <tr>
                                            <th>No</th>
                                            <th>Nama Kategori</th>
                                            <th>Hotel</th>
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                        <?php foreach ($daftar_kategori as $kategori) : ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td><?= $kategori->nama_kategori; ?> </td>
                                                <td><?= $kategori->nama_produk; ?></td>
                                                <td width="15%" class="text-center">
                                                    <button type="button" class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#ubahModal<?= $kategori->id_kategori; ?>"><i class="fas fa-edit"></i>Ubah</button>
                                                    <button tabindex="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#hapusModal<?= $kategori->id_kategori; ?>"><i class="fas fa-trash-alt"></i>Hapus</button>

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

                <!-- modal tambah -->
                <div class="modal fade" id="tambahModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-plus"></i> Tambah Kategori Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('daftar-kategori3/tambah3') ?>" method="post">
            <?= csrf_field() ?>

            <div class="mb-3">
                <label for="nama_kategori">Nama Tempat</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Save changes</button>
      </div>
      </form>
    </div>
  </div>
                </div>

<!-- modal ubah -->
 <?php foreach ($daftar_kategori as $kategori): ?>
<div class="modal fade" id="ubahModal<?= $kategori->id_kategori; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-primary text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-edit"></i> Ubah Kategori Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('daftar-kategori/ubah/'. $kategori->id_kategori) ?>" method="post">
            <?= csrf_field() ?>

            <input type="hidden" name="_method" value="PUT">

            <div class="mb-3">
                <label for="nama_kategori">Nama Kategori</label>
                <input type="text" name="nama_kategori" id="nama_kategori" class="form-control" value="<?= $kategori->nama_kategori; ?>" required>
            </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary btn-sm" data-bs-dismiss="modal">Close</button>
        <button type="submit" class="btn btn-primary btn-sm">Changes</button>
      </div>
      </form>
    </div>
  </div>
</div>
<?php endforeach; ?>

<!-- modal Hapus -->
<?php foreach ($daftar_kategori as $kategori): ?>
<div class="modal fade" id="hapusModal<?= $kategori->id_kategori; ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header bg-danger text-white">
        <h5 class="modal-title" id="exampleModalLabel"><i class="fas fa-trash-alt"></i> Hapus Kategori Produk</h5>
        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
      </div>
      <div class="modal-body">
        <form action="<?= base_url('daftar-kategori/hapus/'. $kategori->id_kategori) ?>" method="post">
            <?= csrf_field() ?>
            <input type="hidden" name="_method" value="DELETE">
            <p>yakin mau dihapus <?= $kategori->nama_kategori; ?> Akan diHapus?</p>

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

<!-- date('d/m/Y H:i:s', strtotime($kategori->tanggal_input)) -->