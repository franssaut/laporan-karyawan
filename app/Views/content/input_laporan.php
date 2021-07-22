<?=$this->extend('template');?>
<?=$this->section('content');?>
<div class="card shadow mb-4">
    <div class="card-header py-3">
        <h6 class="m-0 font-weight-bold text-primary">Input Laporan</h6>
    </div>
    <div class="card-body">
        <form action="">
            <div class="form-group row d-flex">
                <label for="inputNama" class="col-sm-2 col-form-label">Tanggal</label>
                <div class="col-sm-6">
                    <input type="date" class="form-control" id="inputNama" name="tanggal" placeholder="Nama">

                </div>
                <div class="col-sm-3 offset-1 ">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </div>
        </form>
    </div>
</div>
<?=$this->endSection('content');?>