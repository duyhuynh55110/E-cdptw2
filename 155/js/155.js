var app = new Vue({
  el: '#app',
  data: {
    message: 'Hello Vue!',
    chartData: {
      labels: ["Boller", "Brus", "Chips", "Frukt", "Fisk", "Snop"], 
      datasets: [{data: [12, 9, 3, 5, 2, 15],
      backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 159, 64, 0.2)'
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
                'rgba(255, 159, 64, 1)'
            ],
            borderWidth: 1
     }]
    }
  }
})