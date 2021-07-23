<?=$this->extend('template');?>
<?=$this->section('content');?>

<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Data Pegawai</h6>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="example" width="100%" cellspacing="0">
                <thead>
                    <tr>
                        <th>Id Karyawan</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Departemen</th>
                        <th>Create at</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($pegawai as $p):?>
                    <tr>
                        <td><?=$p['id_karyawan'];?></td>
                        <td><img class="img-profile-sm "style="width:90px;  min-height:60px;" src="/asset/img/<?=$p['gambar'];?>" alt="" srcset=""></td>
                        <td><?=$p['nama'];?></td>
                        <td><?=$p['jenis_kelamin'];?></td>
                        <td><?=$p['departemen'];?></td>
                        <td><?=$p['alamat'];?></td>
                        <td><?=$p['tanggal'];?></td>
                        <td><a href="<?=site_url('dashboard/karyawan/edit/');?>">
                                <div class="d-flex">
                                    <a class="dropdown-item p-0" href="<?= site_url('auth/');?>" data-toggle="modal"
                                        data-target="#exampleModal">

                                        <form action="dashboard/"><button
                                                class="btn btn-danger btn-sm mx-1">delete</button></form>
                                    </a>
                                    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog"
                                        aria-labelledby="exampleModalLabel" aria-hidden="true">
                                        <div class="modal-dialog" role="document">
                                            <div class="modal-content">
                                                <div class="modal-header">
                                                    <h5 class="modal-title" id="exampleModalLabel">Delete</h5>
                                                    <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                </div>
                                                <div class="modal-body">
                                                    Apa anda yakin ingin mendelete data?
                                                </div>
                                                <div class="modal-footer">
                                                    <button type="button" class="btn btn-secondary"
                                                        data-dismiss="modal">Close</button>
                                                    <button type="button" class="btn btn-primary">Save changes</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <button class="btn btn-warning btn-sm">Edit</button></td>
        </div>
        </tr>
        <?php endforeach;?>
        </tbody>
        </table>
    </div>
</div>
</div>
<?=$this->endSection('content');?>