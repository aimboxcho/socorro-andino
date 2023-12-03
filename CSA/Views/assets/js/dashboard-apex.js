
  // --------------------------------------------------------------------------------------------------------
  var data_pie = chartPie;
  var labels = data_pie.map(function(item) {
      return item.descripcion;
  });
  
  var values = data_pie.map(function(item) {
      return item.cantidades; 
  });

  var colors = ['#FF5733', '#33FF57', '#3366FF', '#FF33CC', '#FFD700', '#7B68EE'];

  
  var options = {
    series: values,
    chart: {
    width: 380,
    type: 'polarArea'
  },
  labels: labels,
  fill: {
    opacity: 1
  },
  stroke: {
    width: 1,
    colors: undefined
  },
  yaxis: {
    show: false
  },
  legend: {
    position: 'bottom'
  },
  plotOptions: {
    polarArea: {
      rings: {
        strokeWidth: 0
      },
      spokes: {
        strokeWidth: 0
      },
    }
  },
  theme: {
    monochrome: {
      enabled: true,
      shadeTo: 'light',
      shadeIntensity: 0.6
    }
  },
  };

  var chart = new ApexCharts(document.querySelector("#chart"), options);
  chart.render();


//-----------------------------------------------------------------------------------------------------------------------

  var data_pie = chartBar;
  console.log(data_pie);
  // Extrae las etiquetas (descripciones) y los valores (id) de los datos
  var labels = data_pie.map(function(item) {
      return item.zona;
  });
  
  var values = data_pie.map(function(item) {
      return item.cantidad;
  });
  


  var optionsbar = {
    series: [{
    name: 'Cantidad de Rescate',
    data: values
  }],
    chart: {
    type: 'bar',
    height: 350
  },
  plotOptions: {
    bar: {
      borderRadius: 4,
      horizontal: true,
      dataLabels: {
        position: 'center', // top, center, bottom
      },
    }
  },
  dataLabels: {
    enabled: false
  },
  xaxis: {
    categories: labels,
  }
  };

  var chart2 = new ApexCharts(document.querySelector("#chart2"), optionsbar);
  chart2.render();


  //----------------------------------------------------------------------------------------------------

  var data_pie = chartLine;
  // Extrae las etiquetas (descripciones) y los valores (id) de los datos
  var labels = data_pie.map(function(item) {
      return item.mes_anio;
  });
  
  var values = data_pie.map(function(item) {
      return item.cantidades;
  });

  var options = {
    series: [{
      name: "Cantidad de Rescates",
      data: values
  }],
    chart: {
    height: 350,
    type: 'line',
    zoom: {
      enabled: false
    }
  },
  dataLabels: {
    enabled: false
  },
  stroke: {
    curve: 'straight'
  },
  grid: {
    row: {
      colors: ['#f3f3f3', 'transparent'], // takes an array which will be repeated on columns
      opacity: 0.5
    },
  },
  xaxis: {
    categories: labels,
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart3"), options);
  chart.render();

  //--------------------------------------------------------------------------------------------------

  var data_pie = chartTipo;
  // Extrae las etiquetas (descripciones) y los valores (id) de los datos
  var labels = data_pie.map(function(item) {
      return item.tipo_rescate;
  });
  
  var values = data_pie.map(function(item) {
      return item.cantidades;
  });

  var options = {
    series: [{
    name: 'Cantidad de rescate',
    data: values
  }],
    chart: {
    height: 350,
    type: 'bar',
  },
  plotOptions: {
    bar: {
      borderRadius: 10,
      dataLabels: {
        position: 'center', // top, center, bottom
      },
    }
  },
  xaxis: {
    categories: labels,
    position: 'top',
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false
    },
    crosshairs: {
      fill: {
        type: 'gradient',
        gradient: {
          colorFrom: '#D8E3F0',
          colorTo: '#BED1E6',
          stops: [0, 100],
          opacityFrom: 0.4,
          opacityTo: 0.5,
        }
      }
    },
    tooltip: {
      enabled: true,
    }
  },
  yaxis: {
    axisBorder: {
      show: false
    },
    axisTicks: {
      show: false,
    },
    labels: {
      show: false,
      formatter: function (val) {
        return val + "%";
      }
    }
  
  }
  };

  var chart = new ApexCharts(document.querySelector("#chart4"), options);
  chart.render();

  //-----------------------------------------------------------------------------------------------

  //MAP

  var datamap = chartMap;
  // Extrae las etiquetas (descripciones) y los valores (id) de los datos
  var labels = datamap.map(function(item) {
      return item.edad;
  });
  
  var values = datamap.map(function(item) {
      return item.cantidades;
  });

  var options = {
    series: [
      {
        name: 'Cantidad',
        data: datamap.map(function(item) {
          return {
            x: item.edad,
            y: item.cantidades  // Asegúrate de convertir a número si es un string
          };
        })
      }
    ],
    legend: {
      show: false
    },
    chart: {
      height: 350,
      type: 'treemap'
    }
  };
  
  var chart = new ApexCharts(document.querySelector("#chart5"), options);
  chart.render();

