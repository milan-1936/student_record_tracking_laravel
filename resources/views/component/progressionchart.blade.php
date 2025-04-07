<div class="flex-1">
    <h1 class="text-xl text-slate-600 font-semibold text-center">Progression chart</h1>
    <canvas id="myChart"></canvas>
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        const ctx = document.getElementById('myChart').getContext('2d');
        const label = @json($lists);
        const myChart = new Chart(ctx, {
            type: 'line',
            data: {
                labels: label,
                datasets: [{
                    label: 'Progression',
                    data: [65, 59, 80, 81, 56, 55, 40],
                    borderColor: 'rgba(56, 100, 255, 1)',
                    borderWidth: 2,
                    fill: true,
                    tension: 0.3 // This property adds interpolation to the line chart
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: false
                    }
                }
            }
        });
    </script>
</div>
