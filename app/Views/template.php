<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title; ?></title>

    <!-- Custom fonts for this template-->
    <link href="<?= base_url('asset/vendor/fontawesome-free/css/all.min.css') ?>" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/jquery.dataTables.min.css">
    <!-- Custom styles for this template-->
    <link href="<?= base_url('asset/css/bootstrap.css'); ?>" rel="stylesheet">
    <link href="<?= base_url('asset/css/style.css'); ?>" rel="stylesheet">
    
    <link href="<?= base_url('asset/vendor/datatables/dataTables.bootstrap4.min.css'); ?>" rel="stylesheet">
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
   
        <!-- Sidebar -->
       <?=$this->include('Dashboard/sidebar')?>

        <!-- Navbar -->
        <?=$this->include('Dashboard/navbar')?>
        
                <!-- Begin Page Content -->
                <div class="container-fluid">

                    <!-- content -->
                    <!-- Page Heading -->
                    <!-- <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800"></h1>
                        <a href="#" class="d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i
                                class="fas fa-download fa-sm text-white-50"></i> Generate Report</a>
                    </div> -->

                    <?= $this->renderSection('content') ?>

                </div>
                <!-- end content -->
                <!-- /.container-fluid -->
            </div>

            <!-- End of Main Content -->

            <!-- Footer -->
            <?=$this->include('Dashboard/footer')?>
            <!-- End of Footer -->

        </div>
        <!-- End of Content Wrapper -->

    </div>
    <!-- End of Page Wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

   

    <!-- Bootstrap core JavaScript-->
    <!-- <script>$(document).ready( function () {
    $('#table_id').DataTable();
} );<script>
     -->

    <script src="<?= base_url('asset/vendor/jquery/jquery.min.js'); ?>"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
    <script src="<?= base_url('asset/vendor/bootstrap/js/bootstrap.bundle.min.js'); ?>"></script>
    <!-- Core plugin JavaScript-->

    <script src="<?= base_url('asset/vendor/jquery-easing/jquery.easing.min.js'); ?>"></script>
    <!-- Custom scripts for all pages-->
    <script src="<?= base_url('asset/js/script.js'); ?>"></script>


    <script>
        $(document).ready(function() {
            $('#example').DataTable();
        });
    </script>
    <!-- Page level plugins -->
    <!-- <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="js/demo/datatables-demo.js"></script>
 -->

</body>

</html>