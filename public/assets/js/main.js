document.addEventListener('DOMContentLoaded', function() {
            const togglePassword = document.getElementById('togglePassword');
            const password = document.getElementById('password');

            togglePassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = password.getAttribute('type') === 'password' ? 'text' : 'password';
                password.setAttribute('type', type);
                // Toggle the eye icon
                this.classList.toggle('bi-eye-fill');
                this.classList.toggle('bi-eye-slash-fill');
            });

            const toggleConfirmPassword = document.getElementById('toggleConfirmPassword');
            const confirmPassword = document.getElementById('confirmPassword');

            toggleConfirmPassword.addEventListener('click', function() {
                // Toggle the type attribute
                const type = confirmPassword.getAttribute('type') === 'password' ? 'text' : 'password';
                confirmPassword.setAttribute('type', type);
                // Toggle the eye icon
                this.classList.toggle('bi-eye-fill');
                this.classList.toggle('bi-eye-slash-fill');
            });
        });


        // Gráfico de Crecimiento de Suscriptores Mensuales
const ctx = document.getElementById('subscriberGrowthChart');

new Chart(ctx, {
  type: 'line',
  data: {
    labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
    datasets: [{
      label: 'New Subscribers',
      data: [100, 150, 120, 180, 200, 160],
      fill: false,
      borderColor: '#ffc107',
      backgroundColor: '#ffc107',
      tension: 0.3,
      pointBackgroundColor: '#ffc107',
      pointBorderColor: '#fff',
      pointRadius: 5,
      pointHoverRadius: 7
    },
    {
      label: 'Unsubscribers',
      data: [50, 30, 40, 20, 10, 35],
      fill: false,
      borderColor: '#dc3545',
      backgroundColor: '#dc3545',
      tension: 0.3,
      pointBackgroundColor: '#dc3545',
      pointBorderColor: '#fff',
      pointRadius: 5,
      pointHoverRadius: 7
    },
    {
      label: 'Net Change',
      data: [50, 120, 80, 160, 190, 125],
      fill: true,
      backgroundColor: 'rgba(255, 193, 7, 0.2)',
      borderColor: '#ffc107',
      tension: 0.3,
      pointBackgroundColor: '#ffc107',
      pointBorderColor: '#fff',
      pointRadius: 5,
      pointHoverRadius: 7
    }]
  },
  options: {
    responsive: true,
    maintainAspectRatio: false,
    scales: {
      y: {
        beginAtZero: true,
        title: {
          display: true,
          text: 'Number of Subscribers',
          color: 'white'
        },
        ticks: {
          color: 'white'
        },
        grid: {
          color: 'rgba(255, 255, 255, 0.1)',
          drawBorder: false
        }
      },
      x: {
        title: {
          display: true,
          text: 'Month',
          color: 'white'
        },
        ticks: {
          color: 'white'
        },
        grid: {
          color: 'rgba(255, 255, 255, 0.1)',
          drawBorder: false
        }
      }
    },
    plugins: {
      legend: {
        display: true,
        labels: {
          color: 'white'
        }
      },
      tooltip: {
        backgroundColor: '#343a40',
        titleColor: '#ffc107',
        bodyColor: 'white',
        borderColor: '#ffc107',
        borderWidth: 1,
        cornerRadius: 4,
        displayColors: true
      }
    }
  }
});

// Gráfico de Ganancias Mensuales por Suscripción
const earningsCtx = document.getElementById('monthlyEarningsChart');
new Chart(earningsCtx, {
    type: 'bar',
    data: {
        labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Earnings ($)',
            data: [5000, 5600, 6200, 5800, 6500, 7100],
            backgroundColor: '#ffc107',
            borderColor: '#e0a800',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Amount ($)',
                    color: 'white'
                },
                ticks: {
                    color: 'white',
                    callback: function(value) {
                        return '$' + value.toLocaleString();
                    }
                },
                grid: {
                    color: 'rgba(255, 255, 255, 0.1)',
                    drawBorder: false
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Month',
                    color: 'white'
                },
                ticks: {
                    color: 'white'
                },
                grid: {
                    color: 'rgba(255, 255, 255, 0.1)',
                    drawBorder: false
                }
            }
        },
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'white'
                }
            },
            tooltip: {
                backgroundColor: '#343a40',
                titleColor: '#ffc107',
                bodyColor: 'white',
                borderColor: '#ffc107',
                borderWidth: 1,
                cornerRadius: 4,
                displayColors: false,
                callbacks: {
                    label: function(context) {
                        let label = context.dataset.label || '';
                        if (label) {
                            label += ': ';
                        }
                        if (context.parsed.y !== null) {
                            label += '$' + context.parsed.y.toLocaleString();
                        }
                        return label;
                    }
                }
            }
        }
    }
});

// Gráfico de Ganancias por Contenido Premium
const premiumEarningsCtx = document.getElementById('premiumContentEarningsChart');
new Chart(premiumEarningsCtx, {
    type: 'bar',
    data: {
        labels: ['Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul'],
        datasets: [{
            label: 'Premium Earnings ($)',
            data: [150, 280, 200, 350, 420, 380],
            backgroundColor: 'rgba(255, 193, 7, 0.7)',
            borderColor: '#ffc107',
            borderWidth: 1
        }]
    },
    options: {
        responsive: true,
        maintainAspectRatio: false,
        scales: {
            y: {
                beginAtZero: true,
                title: {
                    display: true,
                    text: 'Amount ($)',
                    color: 'white'
                },
                ticks: {
                    color: 'white',
                    callback: function(value) {
                        return '$' + value.toLocaleString();
                    }
                },
                grid: {
                    color: 'rgba(255, 255, 255, 0.1)',
                    drawBorder: false
                }
            },
            x: {
                title: {
                    display: true,
                    text: 'Month',
                    color: 'white'
                },
                ticks: {
                    color: 'white'
                },
                grid: {
                    color: 'rgba(255, 255, 255, 0.1)',
                    drawBorder: false
                }
            }
        },
        plugins: {
            legend: {
                display: true,
                labels: {
                    color: 'white'
                }
            },
            tooltip: {
                backgroundColor: '#343a40',
                titleColor: '#ffc107',
                bodyColor: 'white',
                borderColor: '#ffc107',
                borderWidth: 1,
                cornerRadius: 4,
                displayColors: false,
                callbacks: {
                    label: function(context) {
                        let label = context.dataset.label || '';
                        if (label) {
                            label += ': ';
                        }
                        if (context.parsed.y !== null) {
                            label += '$' + context.parsed.y.toLocaleString();
                        }
                        return label;
                    }
                }
            }
        }
    }
});