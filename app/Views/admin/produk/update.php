<?= $this->extend('admin/layout/template') ?>

<?= $this->section('content') ?>
<div id="layoutSidenav_content">
<main>
                    <div class="container-fluid px-4">
                        <h1 class="mt-4">Batam</h1>
                        <ol class="breadcrumb mb-4">
                            <li class="breadcrumb-item"><a href="<?= base_url('dashboard'); ?>">Batam</a></li>
                            <li class="breadcrumb-item active"><?= $title; ?></li>
                        </ol>
                        <div class="card mb-4">
                            <div class="card-body">
                            <div class="card mb-4">
                            <div class="card-header">
                                <i class="fas fa-table me-1"></i>
                                Batam
                            </div>
                            <div class="card-body">
                            <a href="<?= base_url('Admin/ProdukController/form') ?>" class="btn btn-primary btn-sm mb-2" >
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
                                            <th>Nama produk</th>
                                            <th>kategori</th>
                                            <th>Tanggal Input</th>
                                            <th>Fungsi</th>
                                        </tr>
                                    </thead>

                                    <tbody>
                                        <?php $no = 1; ?>
                                            <tr>
                                                <td><?= $no++; ?></td>
                                                <td> </td>
                                                <td> </td>
                                                <td></td>
                                                <td width="15%" class="text-center">
                                                    <a href="<?= base_url('daftar-produk/ubah/' ) ?>" class="btn btn-success btn-sm"><i class="fas fa-edit"></i>Ubah</a>
                                                    <button tabindex="button" class="btn btn-danger btn-sm " data-bs-toggle="modal" data-bs-target="#hapusModal"><i class="fas fa-trash-alt"></i>Hapus</button>

                                                </td>
                                            </tr>
                                    </tbody>

                                </table>
                            </div>
                            </div>
                            </div>
                        </div>
                    </div>

                </main>

<?= $this->endSection(); ?>

