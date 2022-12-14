<!DOCTYPE html>
<html lang="fr">
  <head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <title>State GMAO | Dashboard</title>
    <!-- Tempusdominus Bootstrap 4 -->
    <link
      rel="stylesheet"
      href="plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css"
    />
    <!-- iCheck -->
    <link
      rel="stylesheet"
      href="plugins/icheck-bootstrap/icheck-bootstrap.min.css"
    />
    <!-- JQVMap -->
    <link rel="stylesheet" href="plugins/jqvmap/jqvmap.min.css" />
    <!-- Theme style -->
    <link rel="stylesheet" href="dist/css/adminlte.min.css" />
    <!-- overlayScrollbars -->
    <link
      rel="stylesheet"
      href="plugins/overlayScrollbars/css/OverlayScrollbars.min.css"
    />
    <!-- Daterange picker -->
    <link rel="stylesheet" href="plugins/daterangepicker/daterangepicker.css" />
    <!-- summernote -->
    <link rel="stylesheet" href="plugins/summernote/summernote-bs4.min.css" />
  </head>
  <body class="hold-transition sidebar-mini layout-fixed" style="font-family: 'Poppins', sans-serif;">
    <div class="wrapper">
      <!-- Preloader -->
      <div
        class="preloader flex-column justify-content-center align-items-center"
      >
        <img
          class="animation__shake"
          src="dist/img/splash.png"
          alt="AdminLTELogo"
          height="60"
          width="60"
        />
      </div>

      <?php include('dist/partials/_sidebar.html'); ?>

      <!-- Content Wrapper. Contains page content -->
      <div class="content-wrapper">
        <div class="content-header">
          <div class="container-fluid">
            <div class="row mb-2">
              <div class="col-sm-6">
                <h1 class="m-0">Dashboard</h1>
              </div>
              <!-- /.col -->
              <div class="col-sm-6">
                <ol class="breadcrumb float-sm-right">
                  <li class="breadcrumb-item"><a href="#">Superviseur</a></li>
                  <a href="config/logout.php" class="breadcrumb-item active">Logout</a>
                </ol>
              </div>
            </div>
          </div>
        </div>
        <section class="content">
            <div class="card card-primary">
                <div class="card-header">
                  <h3 class="card-title">Ajouter un Superviseur</h3>
                </div>
                <!-- /.card-header -->
                <!-- form start -->
                <form method="post" action="">
                  <div class="card-body">
                    <div class="form-group">
                      <label for="exampleInputEmail1">Adresse courrielle</label>
                      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Nom</label>
                        <input type="text" class="form-control" id="exampleInputEmail1" name="nom" placeholder="Enter email">
                      </div>
                    <div class="form-group">
                      <label for="exampleInputPassword1">Mot de passe</label>
                      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Confirmer le Mot de passe</label>
                        <input type="password" class="form-control" id="exampleInputPassword1" name="passconf" placeholder="Password">
                      </div>
                  </div>
                  <!-- /.card-body -->
  
                  <div class="card-footer">
                    <button type="submit" name="ajouter" class="btn btn-primary">Ajouter</button>
                  </div>
                </form>
              </div><br><br>
            <!-- /.container-fluid -->
            <div class="container-fluid">
                <div class="row">
                  <div class="col-12">
                    <div class="card">
                      <div class="card-header">
                        <h3 class="card-title">Ajout?? r??cement</h3>
                      </div>
                      <!-- /.card-header -->
                      <div class="card-body">
                        <table id="example2" class="table table-bordered table-hover">
                          <thead>
                          <tr>
                            <th>Id Superviseur</th>
                            <th>Nom</th>
                            <th>Adresse courrielle</th>
                            <th>Mot de passe</th>
                          </tr>
                          </thead>
                          <tbody>
                          <?php while($list = $req1 -> fetch()){ ?>
                        <tr>
                          <td><?= $list['id_sup']; ?></td>
                          <td><?= $list['nom_sup']; ?></td>
                          <td><?= $list['email_sup']; ?></td>
                          <td><?= $list['pass_sup']; ?></td>
                        </tr>
                        <?php } ?>
                          </tbody>
                        </table>
                      </div>
                      <!-- /.card-body -->
                    </div>
  
                  </div>
                  <!-- /.col -->
                </div>
                <!-- /.row -->
              </div>
          </section>
        <!-- /.content -->
      </div>
      <!-- /.content-wrapper -->
      <footer class="main-footer">
        <strong
          >Copyright &copy; 2022
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
    <script src="plugins/chart.js/Chart.min.js"></script>
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
