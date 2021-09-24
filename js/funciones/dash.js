var ctx = document.getElementById('primero').getContext('2d');
    var chart = new Chart(ctx, {
        // The type of chart we want to create
        type: 'doughnut',

        // The data for our dataset
        data: {
            labels: <?=$nom?>,
            datasets: [{
                label: 'Unidades',
                backgroundColor: ['rgb(255, 99, 132)','rgb(99, 99, 132)','rgb(100, 99, 80)'],
                borderColor: 'rgb(255, 99, 132)',
                data: <?=$cant?>
            }]
        },

        // Configuration options go here
        options: {
            scales:{
                yAxes:[{
                    ticks:{
                        min: 0,
                        stepSize: 1
                    }
                }]
            }
        }
    });