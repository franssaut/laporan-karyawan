<?= $this->extend('template'); ?>
<?= $this->section('content'); ?>
<form action="<?= site_url('/dashboard/karyawan/edit') ?>" method="post">
<?=csrf_field();?>
    <div class="form-group row">
        <label for="Id Karyawan" class="col-sm-2 col-form-label">id_karyawan</label>
        <div class="col-sm-6">
            <input type="number" class="form-control" id="Id Karyawan"value="<?=$row->id_karyawan?>" name="id_karyawan" placeholder="Id Karyawan">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="inputNama" name="nama" value="<?=$row->nama?>" placeholder="Nama">
        </div>
    </div>
    <!-- Select -->
    <div class="form-group row">
        <label for="inputGender" class="col-sm-2 col-form-label">Jenis Kelamin</label>
        <div class="col-sm-4">
            <select class="custom-select my-1 mr-sm-2" id="inputGender" name="jenis_kelamin">
                <option selected>Pilih</option>
                <option value="Laki-Laki">Laki-Laki</option>
                <option value="Perempuan">Perempuan</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="inputAlamat" class="col-sm-2 col-form-label">alamat</label>
        <div class="col-sm-6">
            <input type="select" value="" class="form-control" id="inputAlamat" name="alamat" placeholder="alamat">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputGender" class="col-sm-2 col-form-label">Departemen</label>
        <div class="col-sm-4">
            <select class="custom-select my-1 mr-sm-2" id="inputGender" name="departemen">
                <option selected>Pilih</option>
                <option value="Electrical">Electrical</option>
                <option value="Builing">Building</option>
            </select>
        </div>
    </div>
    <div class="form-group row">
        <label for="password" class="col-sm-2 col-form-label">password</label>
        <div class="col-sm-6">
            <input type="select" class="form-control" value="" id="password" name="password" placeholder="password">
        </div>
    </div>
    <div class="form-group row">
        <label for="inputGender" class="col-sm-2 col-form-label">Role</label>
        <div class="col-sm-4">
            <select class="custom-select my-1 mr-sm-2" id="inputGender" name="role">
                <option selected>Pilih</option>
                <option value="Electrical">admin</option>
                <option value="Builing">pegawai</option>
            </select>
        </div>
    </div>

    <div class="form-group row">
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>
<?= $this->endSection('content'); ?>