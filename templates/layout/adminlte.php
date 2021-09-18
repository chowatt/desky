<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Desky | Dashboard</title>

    <!-- Custom styles for this template-->
    <link href="/css/bundle.css" rel="stylesheet">

    <!-- Bootstrap core JavaScript-->
    <script src="/js/bundle.js"></script>
</head>

<body class="hold-transition sidebar-mini layout-fixed">
    <div class="wrapper">


        <?= $this->element('adminlte/top-nav'); ?>
        <?= $this->element('adminlte/sidebar'); ?>

        <!-- Content Wrapper. Contains page content -->
        <div class="content-wrapper">
            <?= $this->element('adminlte/breadcrumb'); ?>

            <!-- Main content -->
            <section class="content">
                <div class="container-fluid">
                    <?= $this->Flash->render() ?>
                    <?= $this->fetch('content') ?>
                </div>
            </section>
            <!-- /.content -->
        </div>
        <!-- /.content-wrapper -->
        <?= $this->element('adminlte/footer'); ?>

        <!-- Control Sidebar -->
        <aside class="control-sidebar control-sidebar-dark">
            <!-- Control sidebar content goes here -->
        </aside>
        <!-- /.control-sidebar -->
    </div>
    <!-- ./wrapper -->
    <script src="https://kit.fontawesome.com/5157a25bf3.js" crossorigin="anonymous"></script>
</body>

</html>