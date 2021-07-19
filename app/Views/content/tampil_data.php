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
                        <th>Id</th>
                        <th>Nama</th>
                        <th>Jenis Kelamin</th>
                        <th>Alamat</th>
                        <th>Departemen</th>
                        <th>Create at</th>
                    </tr>
                </thead>
                <tbody>
                <?php foreach($pegawai as $p):?>
                    <tr >
                        <td>1</td>
                        <td><?=$p['nama'];?></td>
                        <td><?=$p['jenis_kelamin'];?></td>
                        <td><?=$p['departemen'];?></td>
                        <td><?=$p['alamat'];?></td>
                        <td><?=$p['created_at'];?></td>
                    </tr>
                <?php endforeach;?>
                </tbody>
            </table>
        </div>
    </div>
</div>
<?=$this->endSection('content');?>