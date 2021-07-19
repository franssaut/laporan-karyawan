<?=$this->extend('template');?>
<?=$this->section('content');?>
<form action="<?=site_url('/dashboard/save')?>" method="post">
    <div class="form-group row">
        <label for="inputNama" class="col-sm-2 col-form-label">Nama</label>
        <div class="col-sm-6">
            <input type="text" class="form-control" id="inputNama" name="nama" placeholder="Nama">
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
            <input type="select" class="form-control" id="inputAlamat" name="alamat" placeholder="alamat">
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
        <div class="col-sm-10">
            <button type="submit" class="btn btn-primary">Tambah Data</button>
        </div>
    </div>
</form>
<?=$this->endSection('content');?>