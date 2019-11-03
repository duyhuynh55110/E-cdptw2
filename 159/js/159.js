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
    $('.btn-open').click(function () {
      var a = $(this).next(".x_panel");
      a.show();
      $(this).hide();
    });
});

//Draw chart
var app = new Vue ({
    el: ".type-159",
    data: {
      pie: {
        labels: ['IOS', 'Android','Blackberry', 'Symbian','Others'],
        values: [30, 10 , 20, 15, 30],
        backgroundColors: [
                  '#26b99a',
                  '#bdc3c7',
                  '#9b59b6',
                  '#455c73',
                  '#3498db',
        ],
      },
      gauge: {
        labels: ["Red","Blue"],
        values: [0, 100],
        backgroundColors: [
            "#ff3547",
            "#4285f4",
        ],
        openModal: 'none',
      },
      progressBars: [
            {title: "Angular", value: "123", process: 70},
            {title: "React", value: "53", process: 40},
            {title: "Vue", value: "23", process: 30},
            {title: "jQuery", value: "3", process: 15},
            {title: "Untun", value: "1", process: 3},
      ],
      table: {
        columns: ["Name","Address"],
        users: [
          {name: "Truong Dung",address:"HCM"},
          {name: "Tan Thuong",address:"HN"},
          {name: "Van Nang",address:"Da Nang"},
          {name: "Long Binh",address:"Hue"},
        ]
      }
    },
    mounted(){
          // Create chart
          var ctx = document.getElementById('myChart').getContext('2d');
          var myPieChart = new Chart(ctx, {
              type: 'pie',
              data: {
                  labels: this.pie.labels,
                  datasets: [{
                      data: this.pie.values,
                      backgroundColor: this.pie.backgroundColors,
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


          var timer = setInterval(
            () => {
              let temp = this.updateGaugeValue();//update this.gauge.values
              gaugeChart.data.datasets[0].data = temp;
              gaugeChart.update();

              Vue.set(this.gauge.values,temp);

          }, 1500)
    },
    methods: {
        changeValue: function(i){
            this.progressBars[i].process += 40;
        },
        updateGaugeValue: function(){
          let value = 40;
          var temp = this.gauge.values;

          temp[0] += value;
          temp[1] -= value;

          //load complete
          if(temp[0] >= 100){
              temp[0] = 100;
              temp[1] = 0;

              this.gauge.openModal = 'block'
              return temp;
          }
          return temp;
        }
    }
});
