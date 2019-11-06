
$(function () {
  $.datepicker.setDefaults(
    $.extend($.datepicker.regional[''])
  );
  $('#datepicker').datepicker();

  $(document).ready(function () {
    $(".collapse-link").on("click", function () {
      var a = $(this).closest(".admin-panel"),
      b = $(this).find("i"),
      c = a.find(".profiles-user");
      a.attr("style") ? c.slideToggle(200, function () {
        a.removeAttr("style")
      }) : (c.slideToggle(200), a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
    }),
    $(".close-link").click(function () {
      var a = $(this).closest(".left-column");
      a.hide();
      $('#open').show();
    });
    $('#open').click(function () {
      var a = $(this).next(".left-column");
      a.show();
      $(this).hide();
    });
  });

  //List Users and Chart
  var list = new Vue({
    el: ".type-155",
    data: {
      name: "project",
      dragging: -1,
      users: [
        {name: "Duy Huynh", money: 2300, note: "This is Duy", sales: 12},
        {name: "Trang Nguyen", money: 200, note: "This is Trang", sales: 15},
        {name: "Vy Huynh", money: 1500, note: "This is Vy", sales: 16},
        {name: "Cong Nang", money: 2000, note: "This is Cong", sales: 20},
      ],
      lineChart: {
        labels: ['01/11/19', '03/11/19', '05/11/19', '07/11/19', '09/11/19'],
        values: [50, 80, 60, 120, 70, 130],
        backgroundColors: [
          '#f2f9eb',
        ],
        borderColor: '#9ab777',
      },
      barChart: {
        labels: ["title-1","title-2","title-3","title-4","title-5"],
        values: [10, 20, 30, 40, 50, 60, 70],
        options: {
          scales: {
            xAxes: [{
              display: false
            }],
            yAxes: [{
              display: false
            }],
          },
          legend: {
            display: false
          },
        },
        colors: [
          '#3498db',
          '#9cc2cb',
          '#e74c3c',
          '#26b99a',

        ]
      }

    },
    methods: {
      dragStart(which, ev) {
        ev.dataTransfer.setData('Text', this.id);
        ev.dataTransfer.dropEffect = 'move'
        this.dragging = which;
      },
      dragEnter(ev) {
        /*
        if (ev.clientY > ev.target.height / 2) {
        ev.target.style.marginBottom = '10px'
      } else {
      ev.target.style.marginTop = '10px'
    }
    */
  },
      dragLeave(ev) {
        /*
        ev.target.style.marginTop = '2px'
        ev.target.style.marginBottom = '2px'
        */
      },
      dragEnd(ev) {
        this.dragging = -1
      },
      dragFinish(to, ev) {
        this.moveItem(this.dragging, to);
        ev.target.style.marginTop = '2px'
        ev.target.style.marginBottom = '2px'
      },
      moveItem(from, to) {
        if (to === -1) {
          this.removeItemAt(from);
        } else {
          this.users.splice(to, 0, this.users.splice(from, 1)[0]);
        }
      },

      //add user
      addUser: function(){
         this.users.push({name: "New User " + this.users.length, money: 5000, note: "This is New User " + this.users.length, sales: 20});
      },

      //remove user
      removeUser: function(index){
         this.users.splice(index, 1);
      }
},
computed: {
  isDragging() {
    return this.dragging > -1
  }
},
mounted(){
  var ctx = document.getElementById('lineChart').getContext('2d');

  //Line Chart
  var myPieChart = new Chart(ctx, {
    type: 'line',
    data: {
      labels: this.lineChart.labels,
      datasets: [{
        data: this.lineChart.values,
        backgroundColor: this.lineChart.backgroundColors,
        borderColor: this.lineChart.borderColor,
        pointRadius: 6,
        pointBorderWidth: 2,
        pointHoverBorderColor: "#9ab777de",
        pointHoverRadius: 6,
        pointBackgroundColor: '#fff',
      }]
    },
    options: {
      elements: {
        line: {
          tension: 0 // disables bezier curves
        }
      },
      legend: {
        display: false
      }
    }
  });

  var barCharts = document.getElementsByClassName('barChart');

  let n = 0;

  for(chart of barCharts){
    var chart_ctx = chart.getContext('2d');

    new Chart(chart_ctx, {
      type: 'bar',
      data: {
        labels: this.barChart.values,
        datasets: [{
          backgroundColor: '#26b99a',
          data: this.barChart.values,
          backgroundColor: this.barChart.colors[n],
        }],
      },
      options: this.barChart.options,
    });

    n++;
  }


}
})
});
