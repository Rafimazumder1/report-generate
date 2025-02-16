
document.addEventListener('DOMContentLoaded', function () {
    // Select the canvas element
    const ctx = document.getElementById('myChart').getContext('2d');

    // Data for the chart
    const data = {
        labels: ['Batch 1', 'Batch 2', 'Batch 3', 'Batch 4', 'Batch 5'], // Example labels
        datasets: [{
            label: 'Registered Alumni',
            data: [120, 150, 180, 200, 220], // Example data
            backgroundColor: [
                'rgba(255, 99, 132, 0.2)',
                'rgba(54, 162, 235, 0.2)',
                'rgba(255, 206, 86, 0.2)',
                'rgba(75, 192, 192, 0.2)',
                'rgba(153, 102, 255, 0.2)',
            ],
            borderColor: [
                'rgba(255, 99, 132, 1)',
                'rgba(54, 162, 235, 1)',
                'rgba(255, 206, 86, 1)',
                'rgba(75, 192, 192, 1)',
                'rgba(153, 102, 255, 1)',
            ],
            borderWidth: 1
        }]
    };

    // Chart configuration
    const config = {
        type: 'bar', // You can change this to 'line', 'pie', etc.
        data: data,
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'Batch Wise Registered Alumni'
                }
            }
        }
    };

    // Create the chart
    const myChart = new Chart(ctx, config);
});