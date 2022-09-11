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


    // Chart dans le right bar
    
var chartDashed = new CanvasJS.Chart("chartContainerDashed", {
	animationEnabled: true,
	title: {
		text: "Etat récapitulatif de la semaine"
	},
	axisX: {
		valueFormatString: "DDD",
		minimum: new Date(2017, 1, 5, 23),
		maximum: new Date(2017, 1, 12, 1)
	},
/* 	axisY: {
		title: "Number of Messages"
	}, */
	legend: {
		verticalAlign: "top",
		horizontalAlign: "right",
		dockInsidePlotArea: true
	},
	toolTip: {
		shared: true
	},
	data: [{
		name: "Lomé",
		showInLegend: true,
		legendMarkerType: "square",
		type: "area",
		color: "rgba(40,175,101,0.6)",
		markerSize: 0,
		dataPoints: [
			{ x: new Date(2017, 1, 6), y: 30 },
			{ x: new Date(2017, 1, 7), y: 40 },
			{ x: new Date(2017, 1, 8), y: 20 },
			{ x: new Date(2017, 1, 9), y: 12 },
			{ x: new Date(2017, 1, 10), y: 50 },
			{ x: new Date(2017, 1, 11), y: 60 },
			{ x: new Date(2017, 1, 12), y: 15 }
		]
	},
	{
		name: "Maritime",
		showInLegend: true,
		legendMarkerType: "square",
		type: "area",
		color: "rgba(0,75,141,0.7)",
		markerSize: 0,
		dataPoints: [
			{ x: new Date(2017, 1, 6), y: 42 },
			{ x: new Date(2017, 1, 7), y: 34 },
			{ x: new Date(2017, 1, 8), y: 29 },
			{ x: new Date(2017, 1, 9), y: 42 },
			{ x: new Date(2017, 1, 10), y: 53},
			{ x: new Date(2017, 1, 11), y: 15 },
			{ x: new Date(2017, 1, 12), y: 12 }
		]
	},

]
});


   
var chartDashedMoi = new CanvasJS.Chart("chartContainerDashedMoi", {
	animationEnabled: true,
	title: {
		text: "Etat récapitulatif du mois"
	},
	axisX: {
		valueFormatString: "DDD",
		minimum: new Date(2017, 1, 5, 23),
		maximum: new Date(2017, 1, 12, 1)
	},
/* 	axisY: {
		title: "Number of Messages"
	}, */
	legend: {
		verticalAlign: "top",
		horizontalAlign: "right",
		dockInsidePlotArea: true
	},
	toolTip: {
		shared: true
	},
	data: [{
		name: "Lomé",
		showInLegend: true,
		legendMarkerType: "square",
		type: "area",
		color: "rgba(40,175,101,0.6)",
		markerSize: 0,
		dataPoints: [
			{ x: new Date(2017, 1, 6), y: 20 },
			{ x: new Date(2017, 1, 7), y: 15 },
			{ x: new Date(2017, 1, 8), y: 10 },
			{ x: new Date(2017, 1, 9), y: 8 },
			{ x: new Date(2017, 1, 10), y: 33 },
			{ x: new Date(2017, 1, 11), y: 12 },
			{ x: new Date(2017, 1, 12), y: 15.5 }
		]
	},
	{
		name: "Maritime",
		showInLegend: true,
		legendMarkerType: "square",
		type: "area",
		color: "rgba(0,75,141,0.7)",
		markerSize: 0,
		dataPoints: [
			{ x: new Date(2017, 1, 6), y: 21.1 },
			{ x: new Date(2017, 1, 7), y: 22.9 },
			{ x: new Date(2017, 1, 8), y: 22.6 },
			{ x: new Date(2017, 1, 9), y: 30 },
			{ x: new Date(2017, 1, 10), y: 10},
			{ x: new Date(2017, 1, 11), y: 15 },
			{ x: new Date(2017, 1, 12), y: 12 }
		]
	},

]
});
    
    
    
    
    chart.render();
    chart1.render();
    chartDashed.render();
    chartDashedMoi.render();


    }
    
    function explodePie (e) {
        if(typeof (e.dataSeries.dataPoints[e.dataPointIndex].exploded) === "undefined" || !e.dataSeries.dataPoints[e.dataPointIndex].exploded) {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = true;
        } else {
            e.dataSeries.dataPoints[e.dataPointIndex].exploded = false;
        }
        e.chart.render();
    
    }


