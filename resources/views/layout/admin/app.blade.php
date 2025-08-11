<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Financail Dashboard</title>
    <link rel="stylesheet" href="{{asset('dist/css/index.css')}}">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css" />

</head>
<body>
    <!-- main container -->
    <div class="admin-app-container ">

        <div class="app-content">
            <!-- Include Header -->
            <div class="header-container">
                <div class="navbar">
                    @include('layout.admin.header')
                </div>

                <div class="breadcrumb">
                    @yield('breadcrumb')
                </div>
            </div>

            <!-- Page-specific content -->
            <div class="app-content-container">
                @yield('content')
            </div>

        </div>
    </div>

    <script src="{{asset('dist/js/index.js')}}"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chart.js@4.4.1/dist/chart.umd.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-pattern/dist/chartjs-plugin-pattern.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/chartjs-plugin-pattern@3.3.1/dist/chartjs-plugin-pattern.min.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>

    <script>
    const ctx = document.getElementById('areaChart').getContext('2d');

    new Chart(ctx, {
      type: 'line',
      data: {
        labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'],
        datasets: [{
          label: 'New Clients',
          data: [60, 70, 90, 85, 75, 50, 60, 70, 85, 70, 60, 95],
          tension: 0.4,
          fill: true,
          backgroundColor: 'rgba(0, 153, 255, 0.2)',
          borderColor: 'rgba(0, 123, 255, 1)',
          pointBackgroundColor: 'rgba(0, 123, 255, 1)',
          pointRadius: 4
        }]
      },
      options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
          y: {
            min: 0,
            max: 100,
            ticks: {
              callback: value => value + '%'
            },
            grid: {
              drawBorder: false,
              color: '#e0e0e0'
            }
          },
          x: {
            grid: {
              display: false
            }
          }
        },
        plugins: {
          legend: {
            display: false
          },
          tooltip: {
            callbacks: {
              label: (context) => ` New Clients: ${context.parsed.y}`
            }
          }
        }
      }
    });
    </script>

    <script>
        const ctx1 = document.getElementById('barChart').getContext('2d');
        new Chart(ctx1, {
        type: 'bar',
        data: {
            labels: ['MTN', 'Eneo', 'Orange', 'Canal+', 'MTN', 'Eneo', 'Orange'],
            datasets: [{
            label: 'Response Rate',
            data: [90, 85, 80, 70, 95, 90, 85],
            //   backgroundColor: Chart.pattern.draw('diagonal-right-left', '#6EC1E4'),
            borderRadius: {
                topLeft: 10,
                topRight: 10
            },
            borderSkipped: false
            }]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            layout: {
            padding: 10
            },
            plugins: {
            tooltip: {
                callbacks: {
                label: function (ctx1) {
                    return `Response Rate: ${ctx1.raw}%`;
                }
                }
            },
            legend: {
                display: false
            }
            },
            scales: {
            y: {
                beginAtZero: true,
                max: 100,
                ticks: {
                callback: value => `${value}%`
                },
                grid: {
                color: '#ddd',
                drawBorder: false
                }
            },
            x: {
                grid: {
                display: false
                }
            }
            }
        }
        });

    </script>

    <script>
        const ctx2 = document.getElementById('comboChart').getContext('2d');

        new Chart(ctx2, {
        type: 'bar',
        data: {
            labels: ['MTN Cameroon', 'Eneo Cameroon', 'Orange Cameroon', 'Canal+ Intl', 'Average'],
            datasets: [
            {
                label: 'Q1 2025',
                data: [80, 75, 72, 65, 78],
                backgroundColor: function(ctx2) {
                // return window.pattern.draw('diagonal', '#F6A623');
                },
                borderRadius: { topLeft: 8, topRight: 8 },
                borderSkipped: false
            },
            {
                label: 'Q2 2025',
                data: [85, 80, 78, 68, 82],
                backgroundColor: function(ctx2) {
                // return window.pattern.draw('diagonal', '#4A90E2');
                },
                borderRadius: { topLeft: 8, topRight: 8 },
                borderSkipped: false
            },
            {
                label: 'Average',
                type: 'line',
                data: [82, 78, 75, 66, 80],
                borderColor: '#2ECC71', // Green line
                backgroundColor: '#2ECC71',
                tension: 0.3,
                fill: false,
                pointRadius: 5,
                pointBackgroundColor: '#2ECC71',
                yAxisID: 'y'
            }
            ]
        },
        options: {
            responsive: true,
            maintainAspectRatio: false,
            plugins: {
            legend: {
                position: 'top',
                labels: {
                usePointStyle: true
                }
            },
            tooltip: {
                callbacks: {
                label: function(context) {
                    return `${context.dataset.label}: ${context.raw}%`;
                }
                }
            }
            },
            scales: {
            y: {
                beginAtZero: true,
                max: 100,
                ticks: {
                callback: value => `${value}%`
                },
                title: {
                display: true,
                text: 'Average Rating'
                },
                grid: {
                drawBorder: false
                }
            },
            x: {
                grid: {
                display: false
                }
            }
            }
        }
        });

    </script>
</body>
</html>
