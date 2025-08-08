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

// Esperar a que el documento esté completamente cargado
document.addEventListener('DOMContentLoaded', function() {
    const contentModal = document.getElementById('contentModal');
    
    // Escuchar el evento de que el modal se va a mostrar
    contentModal.addEventListener('show.bs.modal', function (event) {
        // Obtener el botón que disparó el modal
        const button = event.relatedTarget;
        // Extraer el ID del contenido del atributo 'data-content-id'
        const contentId = button.getAttribute('data-content-id');

        // Referencias a elementos dentro del modal
        const modalTitle = contentModal.querySelector('.modal-title');
        const contentPlaceholder = document.getElementById('content-placeholder');

        // Limpiar el contenido anterior y mostrar el mensaje de carga
        contentPlaceholder.innerHTML = '<p class="text-muted">Cargando contenido...</p>';
        modalTitle.textContent = 'Cargando...';

        // Realizar la petición fetch al script PHP
        fetch(`../../processes/fetch_content.php?id_content=${contentId}`)
            .then(response => {
                if (!response.ok) {
                    throw new Error('Error en la respuesta del servidor.');
                }
                return response.json();
            })
            .then(data => {
                if (data.status === 'success') {
                    const content = data.data;
                    modalTitle.textContent = content.title;

                    let contentHtml = '';
                    switch (content.type_content) {
                        case 'video':
                            contentHtml = `<video controls class="img-fluid" src="${content.url_file}"></video>`;
                            break;
                        case 'image':
                            contentHtml = `<img src="${content.url_file}" class="img-fluid" alt="${content.title}">`;
                            break;
                        // Añade más casos para otros tipos de contenido si es necesario
                        default:
                            contentHtml = `<p>Tipo de contenido no soportado.</p>`;
                            break;
                    }

                    contentPlaceholder.innerHTML = contentHtml;

                } else {
                    modalTitle.textContent = "Error";
                    contentPlaceholder.innerHTML = `<p class="text-danger">${data.message}</p>`;
                }
            })
            .catch(error => {
                console.error('Error:', error);
                modalTitle.textContent = "Error";
                contentPlaceholder.innerHTML = `<p class="text-danger">No se pudo cargar el contenido. Por favor, inténtalo de nuevo.</p>`;
            });
    });

    // Escuchar el evento de que el modal se va a ocultar
    contentModal.addEventListener('hide.bs.modal', function () {
        const contentPlaceholder = document.getElementById('content-placeholder');
        // Pausar cualquier video o audio que se esté reproduciendo
        const media = contentPlaceholder.querySelector('video, audio');
        if (media) {
            media.pause();
            media.currentTime = 0; // Opcional: reiniciar el video
        }
    });
});

// La función para manejar el clic en el botón de Like
function handleLikeClick(contentId) {
    const likeBtn = document.getElementById('likeBtn');
    const likeCountSpan = document.getElementById('likeCount');

    // Deshabilitar el botón para evitar clics múltiples
    likeBtn.disabled = true;

    const formData = new FormData();
    formData.append('id_content', contentId);

    fetch('../../processes/proccess_like.php', {
        method: 'POST',
        body: formData
    })
    .then(response => {
        if (!response.ok) throw new Error('Error en la respuesta del servidor.');
        return response.json();
    })
    .then(data => {
        if (data.status === 'success') {
            likeCountSpan.textContent = `${data.total_likes} Likes`;
            if (data.action === 'inserted') {
                // Si el like fue insertado, añade la clase de color dorado
                likeBtn.classList.add('btn-like-active');
            } else {
                // Si el like fue eliminado, quita la clase de color dorado
                likeBtn.classList.remove('btn-like-active');
            }
        } else {
            alert(`Error: ${data.message}`);
        }
    })
    .catch(error => {
        console.error('Error:', error);
        alert('Ocurrió un error al procesar el like. Inténtalo de nuevo.');
    })
    .finally(() => {
        // Volver a habilitar el botón
        likeBtn.disabled = false;
    });
}