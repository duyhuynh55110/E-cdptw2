
var rainChart = new Vue({
    el: "#chartRainContainer",
    data: {
        data: [
                ['Year', 'Sales', 'Expenses'],
                ['2013',  1000,    400],
                ['2014',  1170,    460],
                ['2015',  660,     1120],
                ['2018',  1030,    540]
          ],
        options: {
                title: 'Duy Company Performance',
                hAxis: {title: 'Year',  titleTextStyle: {color: '#333'}},
                vAxis: {minValue: 0}
        }  
    },
    mounted() {
        google.charts.load('current', {'packages':['corechart']});
        google.charts.setOnLoadCallback(this.drawChart);
    },
    methods: {
        drawChart() {
              var data = google.visualization.arrayToDataTable(this.data);

              var options = this.options;

              var chart = new google.visualization.AreaChart(document.getElementById('chartRainContainer'));
              chart.draw(data, options);
        }
    }
});


//Show list and drag with Vue Js
var list = new Vue({
    el: ".profiles-user",
    data: {
        name: "project",
        dragging: -1,
        users: [
            {name: "Duy Huynh", money: 2300, note: "This is Duy", sales: 12},
            {name: "Trang Nguyen", money: 200, note: "This is Trang", sales: 15},
            {name: "Vy Huynh", money: 1500, note: "This is Vy", sales: 16},
            {name: "Cong Nang", money: 2000, note: "This is Cong", sales: 20},
        ]
    },
    methods: {
        //ng??i dùng b?t ??u drag
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
        dragEnd(ev) {//xác ??nh là ?ã th? chu?t không drag n?a
          this.dragging = -1
        },
        dragFinish(to, ev) {//sau khi k?t thúc drag
          this.moveItem(this.dragging, to);
          ev.target.style.marginTop = '2px'
          ev.target.style.marginBottom = '2px'
        },
        moveItem(from, to) {//di chuy?n sang v? trí m?i
          if (to === -1) {
            this.removeItemAt(from);
          } else {
            this.users.splice(to, 0, this.users.splice(from, 1)[0]);
          }
        }
    },
    computed: {
        isDragging() {
          return this.dragging > -1;
        }
     },
});

$(document).ready(function(){
        $("#close-link").click(function(){
            $(".left-155").toggle();
            
        });
        
        $(".collapse-link").on("click", function () {
            var a = $(this).closest(".admin-panel"),
                    b = $(this).find("i"),
                    c = a.find(".profiles-user");
            a.attr("style") ? c.slideToggle(200, function () {
                a.removeAttr("style")
            }) : (c.slideToggle(200), a.css("height", "auto")), b.toggleClass("fa-chevron-up fa-chevron-down")
        }), $(".close-link").click(function () {
            var a = $(this).closest(".left-155");
            a.remove()
        });
    });
    
//show daterangepicker
$.datepicker.setDefaults(
    $.extend($.datepicker.regional[''])
);

$('#datepicker').datepicker();
    





