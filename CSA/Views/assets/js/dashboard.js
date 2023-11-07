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
    'rgba(255, 159, 64, 0.2)',
    'rgba(255, 205, 86, 0.2)',
    'rgba(153, 102, 255, 0.2)',
    'rgba(255, 77, 166, 0.2)',
    'rgba(75, 75, 75, 0.2)',
    'rgba(0, 128, 128, 0.2)',
    'rgba(255, 69, 0, 0.2)'
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
            borderWidth: 1,
            categoryPercentage: 0.2
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
    'rgba(255, 159, 64, 0.2)',
    'rgba(255, 205, 86, 0.2)',
    'rgba(153, 102, 255, 0.2)',
    'rgba(255, 77, 166, 0.2)',
    'rgba(75, 75, 75, 0.2)',
    'rgba(0, 128, 128, 0.2)',
    'rgba(255, 69, 0, 0.2)'
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
            borderWidth: 1,
            categoryPercentage: 0.2
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

//-----------------------------------------------------------------------------------------------------------------------
var data_pie = chartPie;
// Datos de ejemplo
var labels = data_pie.map(function(item) {
    return item.zona;
});

var values = data_pie.map(function(item) {
    return item.id;
});

// Obtén el elemento canvas
var canvas = document.getElementById('myChart3');

// Crea el gráfico de pie
var myChart = new Chart(canvas, {
    type: 'doughnut',
    data: {
        labels: labels,
        datasets: [{
            data: values,
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 77, 166, 0.2)',
                'rgba(75, 75, 75, 0.2)',
                'rgba(0, 128, 128, 0.2)',
                'rgba(255, 69, 0, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
        }],
    }
});

//-------------------------------------------------------------------------------------------------------------------------------------

var data_pie = chartLine;

data_pie.sort(function(a, b) {
    return new Date(a.fecha_rescate) - new Date(b.fecha_rescate);
});

// Datos de ejemplo
var labels = data_pie.map(function(item) {
    return item.fecha_rescate;
});

var values = data_pie.map(function(item) {
    return item.id;
});

// Obtén el elemento canvas
var canvas = document.getElementById('myChart4');

// Crea el gráfico de pie
var myChart = new Chart(canvas, {
    type: 'line',
    data: {
        labels: labels,
        datasets: [{
            data: values,
            backgroundColor: [
                'rgba(75, 192, 192, 0.2)',
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 159, 64, 0.2)',
                'rgba(255, 205, 86, 0.2)',
                'rgba(153, 102, 255, 0.2)',
                'rgba(255, 77, 166, 0.2)',
                'rgba(75, 75, 75, 0.2)',
                'rgba(0, 128, 128, 0.2)',
                'rgba(255, 69, 0, 0.2)'
            ],
            borderColor: [
                'rgba(75, 192, 192, 1)',
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
            ],
            borderWidth: 1,
        }],
    },
 
});