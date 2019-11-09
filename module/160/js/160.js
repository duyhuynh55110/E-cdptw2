$(document).ready(function() {
    $(".collapse-link").on("click", function() {
        var a = $(this).closest(".admin-panel"),
            b = $(this).find("i"),
            c = a.find(".admin-content");
        a.attr("style") ? c.slideToggle(200, function() {
            a.removeAttr("style")
        }) : (c.slideToggle(200), a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
    }), $(".close-link3").click(function() {
        var a = $(this).closest(".x3");
        a.hide();
        $('#open3').show();

    });

    $('#open3').click(function() {
        var a = $(this).next(".x3");
        a.show();
        $(this).hide();
    });
    $(".close-link1").click(function() {
        var a = $(this).closest(".x1");
        a.hide();
        $('#open1').show();

    });

    $('#open1').click(function() {
        var a = $(this).next(".x1");
        a.show();
        $(this).hide();
    });
    $(".close-link2").click(function() {
        var a = $(this).closest(".x2");
        a.hide();
        $('#open2').show();

    });

    $('#open2').click(function() {
        var a = $(this).next(".x2");
        a.show();
        $(this).hide();
    });
    setTimeout(function() {
        $('.progress-bar').css('width', '87%');
    }, 300);

})
var MONTHS = ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
    'October', 'November', 'December'
];
var color = Chart.helpers.color;
var barChartData = {
    labels: ['January', 'February', 'March', 'April'],
    datasets: [{
        label: 'Dataset 1',
        backgroundColor: color(window.chartColors.red).alpha(0.5).rgbString(),
        borderColor: window.chartColors.red,
        borderWidth: 1,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }, {
        label: 'Dataset 2',
        backgroundColor: color(window.chartColors.blue).alpha(0.5).rgbString(),
        borderColor: window.chartColors.blue,
        borderWidth: 1,
        data: [
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor(),
            randomScalingFactor()
        ]
    }]

};

window.onload = function() {
    var ctx = document.getElementById('canvas').getContext('2d');
    window.myBar = new Chart(ctx, {
        type: 'bar',
        data: barChartData,
        options: {
            responsive: true,
            legend: {
                position: 'top',
            },
            title: {
                display: false,
                text: ''
            }
        }
    });

};