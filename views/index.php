<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1" />
  <title>State GMAO | Dashboard</title>
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css" />

  <!-- iCheck -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css" />
  <!-- JQVMap -->
  <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css" />
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css" />
  <!-- Daterange picker -->
  <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
  <!-- summernote -->
  <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
</head>

<body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'Poppins', sans-serif;">
  <div class="wrapper">
    <!-- Preloader -->
    <div class="preloader flex-column justify-content-center align-items-center">
      <img class="animation__shake" src="dist/img/splash.png" alt="AdminLTELogo" height="60" width="60" />
    </div>

    <?php require('dist/partials/_sidebar.html'); ?>

    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
      <!-- Content Header (Page header) -->
      <div class="content-header">
        <div class="container-fluid">
          <div class="row mb-2">
            <div class="col-sm-6">
              <h1 class="m-0">Dashboard</h1>
            </div>
            <!-- /.col -->
            <div class="col-sm-6">
              <ol class="breadcrumb float-sm-right">
                <li class="breadcrumb-item"><a href="#">Home</a></li>
                <a href="config/logout.php" class="breadcrumb-item active">Logout</a>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <section class="content">
        <div class="container-fluid">
          <!-- Small boxes (Stat box) -->
          <div class="row">
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-info">
                <div class="inner">
                  <h3> <?= $nb_users; ?> </h3>

                  <p>Utilisateurs</p>
                </div>
                <div class="icon">
                  <i class="ion ion-bag"></i>
                </div>
              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-success">
                <div class="inner">
                  <h3><?= $nb_demande_traiter; ?></h3>

                  <p>Demande traitées</p>
                </div>
                <div class="icon">
                  <i class="ion ion-stats-bars"></i>
                </div>

              </div>
            </div>
            <!-- ./col -->
            <div class="col-lg-3 col-6">
              <!-- small box -->
              <div class="small-box bg-warning">
                <div class="inner">
                  <h3><?= $nb_demande; ?></h3>

                  <p>Demande en attente</p>
                </div>
                <div class="icon">
                  <i class="ion ion-person-add"></i>
                </div>
              </div>
            </div>
          </div>
          <!-- /.row -->
          <!-- Main row -->
          <div class="row">
            <!-- Left col -->
            <section class="col-lg-7 connectedSortable">
              <button class="btn btn-success" id="export">
                Export to Excel
              </button>
              <!-- Custom tabs (Charts with tabs)-->
              <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js", type="text/javascript">
                const exportbtn = document.getElementById('export');
                exportbtn.addEventListener('click', function(){
                  console.log('export clicked');
                  $("#export").table2excel({
                    filename: "file.xls"
                  });
                })
              </script>
              <div class="card card-info">
                <div class="card-header">
                  <h3 class="card-title">Utilisateurs</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table" id="export">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Nom </th>
                        <th>Adresse</th>
                        <th>Mot de passe</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($user_info = $req->fetch()) { ?>
                        <tr>
                          <td><?= $user_info['id_user']; ?></td>
                          <td><?= $user_info['nom_user']; ?></td>
                          <td><?= $user_info['email_user']; ?></td>
                          <td><?= $user_info['pass_user']; ?></td>
                          <td class="text-right py-0 align-middle">
                            <div class="btn-group btn-group-sm">
                              <a href="config/del/user.php?id_user=<?= $user_info['id_user']; ?>&id_admin=<?= $id_admin; ?>" class="btn btn-danger">Supprimer</a>
                            </div>
                          </td>
                        <?php  } ?>


                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>
            <!-- TICKETS -->
            <section class="col-lg-5 connectedSortable">
              <div class="card card-success">
                <div class="card-header">
                  <h3 class="card-title">Demandes Traitées</h3>

                  <div class="card-tools">
                    <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                      <i class="fas fa-minus"></i>
                    </button>
                  </div>
                </div>
                <div class="card-body p-0">
                  <table class="table">
                    <thead>
                      <tr>
                        <th>Id</th>
                        <th>Demande</th>
                        <th>Site</th>
                        <th>Ajouté par</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($ticket_info = $req2->fetch()) { ?>

                        <tr>
                          <td><?= $ticket_info['id_ticket']; ?></td>
                          <td><?= $ticket_info['type_demande']; ?></td>
                          <td><?= $ticket_info['site']; ?></td>
                          <td><?= $ticket_info['add_by']; ?></td>

                          <td class="text-right py-0 align-middle">
                          </td>
                        <?php  } ?>

                    </tbody>
                  </table>
                </div>
                <!-- /.card-body -->
              </div>
              <!-- /.card -->
            </section>
            <!-- /.card -->



            <!-- /.card -->
      </section>
      <!-- right col -->
      <section class="col-lg-7 connectedSortable">
        <div class="card card-warning">
          <div class="card-header">
            <h3 class="card-title">Demandes En attente</h3>

            <div class="card-tools">
              <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
                <i class="fas fa-minus"></i>
              </button>
            </div>
          </div>
          <div class="card-body p-0">
            <table class="table">
              <thead>
                <tr>
                  <th>Id</th>
                  <th>Demande</th>
                  <th>Site</th>
                  <th>Ajouté par</th>
                </tr>
              </thead>
              <tbody>
                <?php while ($d = $req3->fetch()) { ?>
                  <tr>
                    <td><?= $d['id_ticket']; ?></td>
                    <td><?= $d['type_demande']; ?></td>
                    <td><?= $d['site_demande']; ?></td>
                    <td><?= $d['add_by']; ?></td>
                    <td class="text-right py-0 align-middle">
                      <div class="btn-group btn-group-sm">
                        <a href="config/clot.php?id_ticket=<?= $d['id_ticket']; ?>&id_admin=<?= $id_admin ?>" class="btn btn-info">Clôturer</a>
                        <a href="#" class="btn btn-danger">Spprimer</a>
                      </div>
                    </td>
                  <?php } ?>
              </tbody>
            </table>
          </div>
          <!-- /.card-body -->
        </div>
        <!-- /.card -->
      </section>
      <!-- /.card -->



      <!-- /.card -->
      </section>
    </div>
    <!-- /.row (main row) -->
  </div>
  <!-- /.container-fluid -->
  </section>
  <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <footer class="main-footer">
    <strong>Copyright &copy; 2022
      All rights reserved.
      <div class="float-right d-none d-sm-inline-block">
        <b>Version</b> 3.1.0
      </div>
  </footer>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
  </div>
  <!-- ./wrapper -->

  <!-- jQuery -->
  <script src="plugins/jquery/jquery.min.js"></script>
  <!-- jQuery UI 1.11.4 -->
  <script src="plugins/jquery-ui/jquery-ui.min.js"></script>
  <!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->

  <!-- Bootstrap 4 -->
  <script src="plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- ChartJS -->
  <!-- Sparkline -->
  <script src="plugins/sparklines/sparkline.js"></script>
  <!-- JQVMap -->
  <script src="plugins/jqvmap/jquery.vmap.min.js"></script>
  <script src="plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
  <!-- jQuery Knob Chart -->
  <script src="plugins/jquery-knob/jquery.knob.min.js"></script>
  <!-- daterangepicker -->
  <script src="plugins/moment/moment.min.js"></script>
  <script src="plugins/daterangepicker/daterangepicker.js"></script>
  <!-- Tempusdominus Bootstrap 4 -->
  <script src="plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
  <!-- Summernote -->
  <script src="plugins/summernote/summernote-bs4.min.js"></script>
  <!-- overlayScrollbars -->
  <script src="plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
  <!-- AdminLTE App -->
  <script src="dist/js/adminlte.js"></script>
  <!-- AdminLTE for demo purposes -->
  <script src="dist/js/demo.js"></script>
  <!-- AdminLTE dashboard demo (This is only for demo purposes) -->
  <script src="dist/js/pages/dashboard.js"></script>
</body>

</html>