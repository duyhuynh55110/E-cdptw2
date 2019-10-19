$(function() {
    Highcharts.chart('chartColumnContainer', {
        chart: {
            type: 'column'
        },
        title: {
            text: ''
        },
        xAxis: {
            categories: ['Apples', 'Oranges', 'Pears']
        },
        yAxis: {
            min: 0,
            title: {
                text: 'Total fruit'
            }
        },
        tooltip: {
            pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
            shared: true
        },
        plotOptions: {
            column: {
                stacking: 'percent'
            }
        },
        series: [{
            name: 'John',
            data: [5, 3, 4]
        }, {
            name: 'Jane',
            data: [5, 7, 6]
        }, ]
    });

});