<?=$this->extend('/header/template')?>
<?=$this->section('content')?>
<div class="container">
    <div class="col col-md-3 offset-4">
        <div class="row">
            <div class="rounded img-profile ml-3">
                <img src="<?='/asset/img/'.$pegawai->gambar?>" class="" alt="Responsive image">
            </div>
            <div class="">
            <table class="table">
                <tr>
                    <td>ID Pegawai</td>
                    <td>:</td>
                    <td><?=$pegawai->id_karyawan?></td>
                </tr>
                <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><?=$pegawai->nama?></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td><?=$pegawai->jenis_kelamin?></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><?=$pegawai->alamat?></td>
                </tr>
                <tr>
                    <td>departemen</td>
                    <td>:</td>
                    <td><?=$pegawai->departemen?></td>
                </tr>
            </table>
            </div>

        </div>

    </div>
</div>

<?=$this->endSection('content')?>