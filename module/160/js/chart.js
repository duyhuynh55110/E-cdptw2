$(function() {
    Highcharts.chart('chartColumnContainer', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        subtitle: {
            text: 'Source: <a href="http://en.wikipedia.org/wiki/List_of_cities_proper_by_population">Wikipedia</a>'
        },
        xAxis: {
            type: 'category',
            labels: {
                rotation: -45,
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        },
        yAxis: {
            min: 0,
            title: {
                text: ''
            }
        },
        legend: {
            enabled: false
        },
        tooltip: {
            pointFormat: ''
        },
        series: [{
            name: 'Population',
            data: [
                ['Shanghai', 2487.2],
                ['Beijing', 2250.8],
                ['Karachi', 1483.9],
                ['Shenzhen', 1301.7],
                ['Guangzhou', 1385.1],
                ['Istanbul', 123.7],
                ['Mumbai', 1203.4],
                ['Moscow', 1213.2],
                ['São Paulo', 12.0],

            ],
            dataLabels: {
                enabled: true,
                rotation: -90,
                color: '#FFFFFF',
                align: 'right',
                format: '{point.y:.1f}', // one decimal
                y: 10, // 10 pixels down from the top
                style: {
                    fontSize: '13px',
                    fontFamily: 'Verdana, sans-serif'
                }
            }
        }]
    });

});