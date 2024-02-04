<div>

    <canvas id="voteChart" width="400" height="200"></canvas>
    
    <!-- Other HTML elements related to your Livewire component go here -->
</div>

@push('scripts')
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
    <script>
        document.addEventListener('livewire:load', function () {
            window.Livewire.on('chartUpdated', function (data) {
                updateChart(data.labels, data.data);
            });

            function updateChart(labels, data) {
                var ctx = document.getElementById('voteChart').getContext('2d');
                var myChart = new Chart(ctx, {
                    type: 'bar',
                    data: {
                        labels: labels,
                        datasets: [{
                            label: 'Total Votes',
                            data: data,
                            backgroundColor: 'rgba(75, 192, 192, 0.2)',
                            borderColor: 'rgba(75, 192, 192, 1)',
                            borderWidth: 1
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
            }
        });
    </script>
@endpush
