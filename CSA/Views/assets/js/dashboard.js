// Cargar los datos desde PHP
var data = chartData;
// Crear un objeto de datos para Chart.js
var labels = data.map(function(item) {
    return item.zona;
});

var values = data.map(function(item) {
    return item.id;
});

var colors = [
  'rgba(75, 192, 192, 0.2)',
  'rgba(255, 99, 132, 0.2)',
  'rgba(54, 162, 235, 0.2)',
  // Agrega más colores según sea necesario
];


var ctx = document.getElementById('myChart').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Afectados',
            data: values,
            backgroundColor: colors,
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }    }
});

//---------------------------------------------------------------------------------------------------------------------------------------------------------------------------

// Cargar los datos desde PHP
var data = chartDatas;
// Crear un objeto de datos para Chart.js
var labels = data.map(function(item) {
    return item.tipo_rescate;
});

var values = data.map(function(item) {
    return item.id;
});

var colors = [
  'rgba(75, 192, 192, 0.2)',
  'rgba(255, 99, 132, 0.2)',
  'rgba(54, 162, 235, 0.2)',
  // Agrega más colores según sea necesario
];


var ctx = document.getElementById('myChart2').getContext('2d');
var myChart = new Chart(ctx, {
    type: 'bar',
    data: {
        labels: labels,
        datasets: [{
            label: 'Afectados',
            data: values,
            backgroundColor: colors,
            borderColor: 'rgba(75, 192, 192, 1)',
            borderWidth: 1
        }]
    },
    options: {
        scales: {
            y: {
                beginAtZero: true
            }
        }
    }
});

