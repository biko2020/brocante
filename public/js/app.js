document.addEventListener('DOMContentLoaded', function() {
    const ctx = document.getElementById('analyticsChart').getContext('2d');
    
    new Chart(ctx, {
        type: 'line',
        data: {
            labels: ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun'],
            datasets: [{
                label: 'Monthly Users',
                data: [65, 59, 80, 81, 56, 55],
                borderColor: '#2c3e50',
                tension: 0.4
            }]
        },
        options: {
            responsive: true,
            plugins: {
                legend: {
                    position: 'top',
                },
                title: {
                    display: true,
                    text: 'User Growth'
                }
            }
        }
    });
});
