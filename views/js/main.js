window.onload = function () {

    var chart = new CanvasJS.Chart("chartContainer", {
        
        // exportEnabled: true,
        animationEnabled: true,
        title:{
            text: "Etat global des tickets",
        },
        legend:{
            cursor: "pointer",
            itemclick: explodePie,
            maxWidth: 350,
			itemWidth: 120
        },
        data: [{
            type: "pie",
            showInLegend: true,
            toolTipContent: "{name}: <strong>{y}%</strong>",
            indexLabel: "{name} - {y}%",
            dataPoints: [
                { y: 26, name: "Ticket en retard de traitement", exploded: true },
                { y: 20, name: "Ticket effectué dans les normes" },
/*                 { y: 1176121, indexLabel: "Nintendo DS"},
				{ y: 1727161, indexLabel: "PSP" },
				{ y: 4303364, indexLabel: "Nintendo 3DS"},
				{ y: 1717786, indexLabel: "PS Vita"} */
/*                 { y: 5, name: "Debt/Capital" },
                { y: 3, name: "Elected Officials" },
                { y: 7, name: "University" }, */
            ]
        }]
    });

    var chart1 = new CanvasJS.Chart("chartContainerBlock",
    {
      title:{
        text: "Etat des demandes journalier"
      },
      data: [{
        type: "pie",
        showInLegend: true,
        toolTipContent: "{name}: <strong>{y}%</strong>",
        indexLabel: "{name} - {y}%",
        dataPoints: [
            { y: 26, name: "Ticket en retard de traitement", exploded: true },
            { y: 20, name: "Ticket effectué dans les normes" },
/*                 { y: 1176121, indexLabel: "Nintendo DS"},
            { y: 1727161, indexLabel: "PSP" },
            { y: 4303364, indexLabel: "Nintendo 3DS"},
            { y: 1717786, indexLabel: "PS Vita"} */
/*                 { y: 5, name: "Debt/Capital" },
            { y: 3, name: "Elected Officials" },
            { y: 7, name: "University" }, */
        ]
    }]
    });


    chart.render();
    chart1.render();


    }
    
    function explodePie (e) {
        if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();
    
    }


