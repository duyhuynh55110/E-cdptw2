//Chart Component
Vue.component('line-chart', {
  data: function () {
      return {
        datasets: [
          {
            label: 'Data Two',
            backgroundColor: '#a9c6ccc4',
            data: [20, 50, 20, 10, 30, 120, 40]
          },
          {
            label: 'Data One',
            backgroundColor: '#a8e3d7',
            data: [40, 120, 10, 40, 39, 50, 40]
          }
        ]
      }
  },
  extends: VueChartJs.Line,
  mounted () {
    this.renderChart({
      labels: ['Jan01', 'Jan02', 'Jan03', 'Jan04', 'Jan05', 'Jan06', 'Jan07'],
      datasets: this.datasets
    }, {responsive: true, maintainAspectRatio: false})
  }

})

//List social
var type150 = new Vue({
	el: ".type-150",
	data: {
		m: "123",
		socials: [
			{name: "Facebook", process: 50},
			{name: "Twitter", process: 70},
			{name: "Google", process: 50},
			{name: "Zalo", process: 40},
		],
	timer: null
	},
	mounted(){
		var timer = setInterval(
			() => {
				this.socials.forEach(social => (social.process = 25 + Math.floor(Math.random() * 75)))
			}, 2200)
	}
});

$(document).ready(function(){
  //daterangepicker Jquery
  $('#datepicker').datepicker({
        beforeShow: function () {
            $(".ui-datepicker").css('font-size', 12); //Controls the size of the calendar.
        }
  });
});
