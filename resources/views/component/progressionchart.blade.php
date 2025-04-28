<div class="flex-1 max-h-80 w-full">
    <h1 class="text-xl text-slate-600 font-semibold text-center">Progression chart</h1>
    <canvas id="myChart" class="w-full"></canvas>

    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    @if(isset($exam_name))
        <script>
            const ctx = document.getElementById('myChart').getContext('2d');

            const label = Object.values(@json($exam_name));
            label.forEach(exam => console.log(exam.name));
            console.log(label);
            const data = Object.values(@json($gpa));
            console.log(data)

            console.log(label.map(exam=>exam.name));


            // Optional: resize canvas to match container
            Chart.defaults.responsive = true;
            Chart.defaults.maintainAspectRatio = false;

            const myChart = new Chart(ctx, {
                type: 'line',
                data: {
                    labels: label, // Use the exam names as labels
                    datasets: [{
                        label: 'CGPA',
                        data: data, // Use the GPA values as data
                        borderColor: 'rgba(56, 100, 255, 1)',
                        borderWidth: 3,
                        fill: true,
                        tension: 0.3
                    }]
                },
                options: {
                    responsive: true,
                    maintainAspectRatio: false, // allow full width
                    scales: {
                        y: {
                            beginAtZero: true
                        }
                    }
                }
            });
        </script>
    @endif
</div>
