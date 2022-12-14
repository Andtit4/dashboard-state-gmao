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
                <li class="breadcrumb-item"><a href="#">Utilisateur</a></li>
                <a href="config/logout.php" class="breadcrumb-item active">Logout</a>
              </ol>
            </div>
          </div>
        </div>
      </div>
      <div style=" color: red; ">
        <?php if (isset($message)) {
          echo $message;
        }  ?>
      </div>


      <section class="content">
        <div class="card card-success">
          <div class="card-header">
            <h3 class="card-title">Ajouter un Site</h3>
          </div>
          <!-- /.card-header -->
          <!-- form start -->
          <form method="post" action="">
            <div class="card-body">
              <div class="form-group">
                <label for="exampleInputEmail1">Site Id</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="siteid" placeholder="Site id">
              </div>
              <div class="form-group">
                <label for="exampleInputEmail1">Nom</label>
                <input type="text" class="form-control" id="exampleInputEmail1" name="nom" placeholder="Nom">
              </div>
              <div class="form-group">
                <select name="typologie" id="">
                  <option value="">Typologie</option>
                  <option value="SOLAIRE">SOLAIRE</option>
                  <option value="GE">GE</option>
                  <option value="GRID">GRID</option>
                  <option value="SOLAIRE+GE">SOLAIRE+GE</option>
                  <option value="GRID+GE">GRID+GE</option>
                </select>
              </div>
              <div class="row g-3">
                <div class="col-auto">
                  <div class="form-group">
                    <select name="classification" id="">
                      <option value="">Classification</option>
                      <option value="GOLD">GOLD</option>
                      <option value="SILVER">SILVER</option>
                      <option value="BRONZE">BRONZE</option>
                      <option value="PLATINUM">PLATINUM</option>
                      <option value="DATACENTER">DATACENTER</option>
                    </select>
                  </div>
                </div>
                <div class="col-auto">
                  <div class="form-group">
                    ZONE
                    <select name="zone" id="">
                      <option value="LOME-E">LOME-E</option>
                      <option value="LOME-O">LOME-O</option>
                      <option value="LOME-N">LOME-N</option>
                      <option value="LOME-VIP">LOME-VIP</option>
                      <option value="MARITIME-A">MARITIME-A</option>
                      <option value="MARITIME-T">MARITIME-T</option>
                      <option value="PLATEAUX-A">PLATEAUX-A</option>
                      <option value="PLATEAUX-K">PLATEAUX-K</option>
                      <option value="PLATEAUX-N">PLATEAUX-N</option>
                      <option value="CENTRALE-S">CENTRALE-S</option>
                      <option value="CENTRALE-B">CENTRALE-B</option>
                      <option value="KARA-K">KARA-K</option>
                      <option value="KARA-B">KARA-B</option>
                      <option value="SAVANE-M">SAVANE-M</option>
                      <option value="SAVANE-D">SAVANE-D</option>
                    </select>
                  </div>
                </div>
                <div class="col-auto">
                  DISTANCE
                  de
                  <select name="de" id="">
                    <option value="1">1</option>
                    <option value="51">51</option>
                    <option value="101">101</option>
                    <option value="151">151</option>
                  </select>
                </div>
                <div class="col-auto">
                  ??
                  <select name="a" id="">
                    <option value="50">50</option>
                    <option value="100">100</option>
                    <option value="200">200</option>
                  </select>
                </div>
                <div class="col-auto">
                  SLA
                  de
                  <select name="sla-de" id="">
                    <option value="1">1</option>
                    <option value="4">4</option>
                    <option value="8">8</option>
                    <option value="12">12</option>
                  </select>
                </div>
                <div class="col-auto">
                  ??
                  <select name="sla-a" id="">
                    <option value="3">3</option>
                    <option value="7">7</option>
                    <option value="15">15</option>
                  </select>
                </div>
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
                        <th>Site Id</th>
                        <th>Nom</th>
                        <th>Typologie</th>
                        <th>Classification</th>
                        <th>Zone</th>
                        <th>Zone globale</th>
                        <th>Distance</th>
                        <th>SLA</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php while ($list = $req1->fetch()) { ?>
                        <tr>
                          <td><?= $list['site_id']; ?></td>
                          <td><?= $list['nom']; ?></td>
                          <td><?= $list['typologie']; ?></td>
                          <td><?= $list['classification']; ?></td>
                          <td><?= $list['zone']; ?></td>
                          <td><?= $list['zone_generale']; ?></td>
                          <td><?= $list['distance']; ?></td>
                          <td><?= $list['sla']; ?></td>
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