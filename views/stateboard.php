<!DOCTYPE html>
<html lang="fr">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-iYQeCzEYFbKjA/T2uDLTpkwGzCiq6soy8tYaI1GyVh/UjpbCx/TYkiZhlZB6+fzT" crossorigin="anonymous" />
  <script src="https://canvasjs.com/assets/script/canvasjs.min.js"></script>
  <script src="views/js/main.js"></script>
  <link rel="stylesheet" href="views/styles/index.css" />
  <title>Dashboard</title>
</head>

<body>
  <div class="container">

    <script>
      setTimeout(() => {
        window.location.reload();
      }, "30000");
    </script>

    <div class="title">Dashboard</div>
    <div id="items-row">
      <div id="datas">
        <?php  //echo json_encode($data_entry_day_circle, JSON_NUMERIC_CHECK); 
        ?>
        <script defer>
          window.onload = function() {
            // datas = document.getElementById("datas");
            console.log("datas loaded" );
            var chart1 = new CanvasJS.Chart("chartContainer", {
              animationEnabled: true,
              exportEnabled: true,
              title: {
                text: "Rapport journalier global"
              },
              subtitles: [{
                text: "Toutes zones incluses"
              }],
              data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($data_entry_day_circle, JSON_NUMERIC_CHECK);
                            ?>
              }]
            });
            console.log("datas loaded for zone lome");
            var chartZoneLome = new CanvasJS.Chart("chartContainerZoneLome", {
              animationEnabled: true,
              exportEnabled: true,
              title: {
                text: "Rapport journalier global"
              },
              subtitles: [{
                text: "Zone Lomé"
              }],
              data: [{
                type: "pie",
                showInLegend: "true",
                legendText: "{label}",
                indexLabelFontSize: 16,
                indexLabel: "{label} - #percent%",
                yValueFormatString: "฿#,##0",
                dataPoints: <?php echo json_encode($data_entry_day_circle, JSON_NUMERIC_CHECK);
                            ?>
              }]
            }); 


           
            chart1.render();

            chartZoneLome.render();
          }

             // datas = document.getElementById("datas");
         

        </script>
      </div>
      <div id="chartContainer" style="margin-left: 2vw; height: 30vh; position: absolute; right: 66vw; width: 35%;">
        <div id="chartContainerZoneLome" style="margin-left: 2vw; height: 30vh; position: absolute; right: 60vw; width: 35%;">

        </div>
        <div id="chartContainerBlock" style="font-family: 'Poppins', sans-serif; background-color: #f8fafb"></div>

        <div class="circle"></div>
        <div class="left">
        </div>
      </div>

      <div class="ticket-open">
        <div class="title">
          <!-- Tickets ouverts -->
        </div>
        <table class="table">
          <thead>
            <tr>
              <th scope="col">ID Ticket</th>
              <th scope="col">Type de demande</th>
              <th scope="col">Equipement</th>
              <th scope="col">Site</th>
              <th scope="col">Adresse</th>
              <th scope="col">Temps écoulé</th>
            </tr>
          </thead>
          <tbody>
            <?php while ($demande_info = $req->fetch()) {  ?>
              <tr>
                <td><?= $demande_info['id_ticket']; ?></td>
                <td><?= $demande_info['type_demande']; ?></td>
                <td><?= $demande_info['equipement']; ?></td>
                <td><?= $demande_info['site_demande']; ?></td>
                <td><?= $demande_info['add_by']; ?></td>
                <td class="alert-time-left-init">
                  <?php
                  $date = new DateTime(htmlspecialchars($demande_info['date_envoi']));
                  $jour = intval($date->diff($now)->format('%d'));
                  $heure = intval($date->diff($now)->format('%h'));
                  $minute = intval($date->diff($now)->format('%i'));
                  if (($minute > 5) && ($jour > 1)) {
                    echo "<div style='color: red'>" . $jour . " jour " . $heure . " heure " . $minute . " minute " . "</div>";
                  } else {
                    echo $minute . " minute ";
                  }


                  // echo $date->diff($now)->format('%d jour %h heure %i minutes');
                  ?>
                </td>
              </tr>
            <?php  } ?>
          </tbody>
        </table>
      </div>
    </div>
</body>

</html>