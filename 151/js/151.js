$(document).ready(function(){
    $(".collapse-link").on("click", function () {
        var a = $(this).closest(".x_panel"),
                b = $(this).find("i"),
                c = a.find(".x_content");
        a.attr("style") ? c.slideToggle(200, function () {
            a.removeAttr("style")
        }) : (c.slideToggle(200), a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
    }),
    $(".close-link").on('click',function () {
        let index = $('.close-link').index(this);

        var a = $(this).closest(".x_panel");
        a.hide();
        $('.btn-open').eq(index).show();
    });
    $('#open').click(function () {
      var a = $(this).next(".x_panel");
      a.show();
      $(this).hide();
    });
});

//Draw chart
var app = new Vue ({
    el: ".type-151",
    data: {
      labels: ['IOS', 'Android','Blackberry', 'Symbian','Others'],
      values: [30, 10 , 20, 15, 30],
      backgroundColors: [
                '#3498db',
                '#26b99a',
                '#9b59b6',
                '#9cc2cb',
                '#e74c3c',
      ],
      gauge: {
        labels: ["Red","Blue"],
        values: [20, 190],
        backgroundColors: [
            "rgb(255, 99, 132)",
            "rgb(54, 162, 235)",
            "rgb(255, 205, 86)"
        ],
      },
      progressBars: [
            {title: "Angular", value: "123", process: 70},
            {title: "React", value: "53", process: 40},
            {title: "Vue", value: "23", process: 30},
            {title: "jQuery", value: "3", process: 15},
            {title: "Untun", value: "1", process: 3},
      ]
    },
    mounted(){
          // Create chart
          var ctx = document.getElementById('myChart').getContext('2d');
          var myPieChart = new Chart(ctx, {
              type: 'doughnut',
              data: {
                  labels: this.labels,
                  datasets: [{
                      data: this.values,
                      backgroundColor: this.backgroundColors,
                      borderWidth: 1
                  }]
                      },
               options: {
                    legend: {
                        display: true,
                        position: 'right',
                    },
                }
            });

          // Create Gauge chart
          var ctx = document.getElementsByClassName("chartjs-gauge");
          var gaugeChart = new Chart(ctx, {
              type:"doughnut",
              data: {
                  labels : this.gauge.labels,
                  datasets: [{
                      data : this.gauge.values,
                      backgroundColor: this.gauge.backgroundColors
                  }]
              },
              options: {
                  circumference: Math.PI,
                  rotation : Math.PI,
                  cutoutPercentage : 70, // precent
                  legend: {
                      display: false
                  },
              }
          });


    },
    methods: {
        changeValue: function(i){
            this.progressBars[i].process += 40;
        }
    }
});
