<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="<?= base_url('asset/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('asset/css/style.css'); ?>" rel="stylesheet">
</head>

<body>

    <nav class=" bg-gelap p-2 mb-4">
        <!-- <a class="navbar-brand" href="#">Navbar</a> -->
        <h4 class="text-white text-center">Aplikasi Sistem Laporan Karyawan Maintenance</h4>
    </nav>
    <div class="container">
        <div class="row">
            <div class="col-sm-6 offset-sm-3">

                <div class="card">
                    <h2 class="card-header text-black text-center"><?= lang('Auth.loginTitle') ?></h2>
                    <div class="card-body">
                        <div class="container">

                            <form action="<?=base_url('Auth/login');?>" method='post'>
                                <div class="form-group mb-3">
                                    <label for="number" class="text-black">Id Pegawai</label>
                                    <input type="number" class="form-control text-black" name="id_karyawan" placeholder="Masukkan Id">

                                </div>
                                <div class="form-group mb-3">
                                    <label for="password" class="text-black">Password</label>
                                    <input type="text" class="form-control text-black" name="password" placeholder="Masukkan Password">

                                </div>
                                <div class="form-group d-grid gap-2 mb-3">
                                    <button class="btn btn-primary d-block" type="submit">Sign In</button>
                                </div>
                                <hr class="sidebar-divider my-0">
                                <div class="d-flex my-3">
                                    <p>Lupa Password</p><a href="" class="px-1">Klik Disini</a>
                                    
                                </div>
                            </form>



                        </div>
                    </div>
                </div>
            </div>
</body>

</html>