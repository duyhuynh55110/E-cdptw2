function init_flot_chart() {
    if (typeof ($.plot) === 'undefined') { return; }
    console.log('init_flot_chart');
    var chart_plot_03_data = [
        [0, 1],
        [1, 9],
        [2, 6],
        [3, 10],
        [4, 5],
        [5, 17],
        [6, 6],
        [7, 10],
        [8, 7],
        [9, 11],
        [10, 35],
        [11, 9],
        [12, 12],
        [13, 5],
        [14, 3],
        [15, 4],
        [16, 9]
    ];
    var chart_plot_03_settings = {
        series: {
            curvedLines: {
                apply: true,
                active: true,
                monotonicFit: true
            }
        },
        colors: ["#26B99A"],
        grid: {
            borderWidth: {
                top: 0,
                right: 0,
                bottom: 1,
                left: 1
            },
            borderColor: {
                bottom: "#7F8790",
                left: "#7F8790"
            }
        }
    };
    if ($("#chart_plot_03").length) {
        console.log('Plot3');
        $.plot($("#chart_plot_03"), [{
            label: "Registrations",
            data: chart_plot_03_data,
            lines: {
                fillColor: "rgba(150, 202, 89, 0.12)"
            },
            points: {
                fillColor: "#fff"
            }
        }], chart_plot_03_settings);
    };
}

function init_sparklines() {
    if (typeof (jQuery.fn.sparkline) === 'undefined') { return; }
    console.log('init_sparklines');
    $(".sparkline_one").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 4, 5, 6, 3, 5, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'bar',
        height: '125',
        barWidth: 13,
        colorMap: {
            '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#26B99A'
    });
    $(".sparkline_two").sparkline([2, 4, 3, 4, 5, 4, 5, 4, 3, 4, 5, 6, 7, 5, 4, 3, 5, 6], {
        type: 'bar',
        height: '40',
        barWidth: 9,
        colorMap: {
            '7': '#a1a1a1'
        },
        barSpacing: 2,
        barColor: '#26B99A'
    });
};

$(document).ready(function () {
    init_sparklines();
    init_flot_chart();
});	
