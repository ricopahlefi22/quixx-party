<!DOCTYPE html>
<html lang="en">
<head>
	@include('template.sections.style')
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.4.1/dist/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
</head>
<body>
	<div class="container-fluid">

		<div class="row">
			<div class="col-md-12">
				<center>
					<h2><img src="{{ asset('logo.png') }}" width="100px" alt="">  KETAPANG S14P</h2>
					<h4>HASIL PEROLEHAN SUARA</h4>
				</center>
			</div>
			<div class="col-md-6 col-12">
				<div class="card">
					<div class="card-body">
						<div class="bg-white dark:bg-black rounded-lg" id="chart1"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div  class="bg-white dark:bg-black rounded-lg" id="chart2"></div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-12 mt-3">
						<div class="card">
							<div class="card-body">
								<div  class="bg-white dark:bg-black rounded-lg" id="chart3"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('template.sections.js')

	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
			// star chart 1
			function updateData1() {
				return new Promise((resolve, reject) => {
					$.ajax({
						url: '{{ url("tv/get-suara1") }}',
						method: 'GET',
						dataType: 'json',
						success: function(response) {
							const sortedData = response.sort((a, b) => b.total_votes - a.total_votes);

							const top10Data = sortedData.slice(0, 18);
							resolve(top10Data);
						},
						error: function(error) {
							reject(error);
						}
					});
				});
			}

			function buildChartData1(data) {
				if (Array.isArray(data)) {
					return [{
						data: data.map(party => ({
							x: party.party_name,
							y: parseInt(party.total_votes)
						}))
					}];
				} else {
					console.error('Data yang diterima tidak dalam bentuk array:', data);
                    return []; // atau berikan nilai default jika perlu
                }
            }

            function updateChart1() {
            	updateData1()
            	.then((response) => {
            		if (chart1) {
            			chart1.updateSeries(buildChartData1(response));
            		} else {
            			console.error('chart1 belum didefinisikan.');
            		}

            		setTimeout(updateChart1, 5000);
            	})
            	.catch((error) => {
            		console.error('Gagal memperbarui data:', error);
            	});
            }

            // Mengatur data awal chart
            updateData1().then((response) => {
            	var chartData1 = {
            		series: buildChartData1(response),
            		chart: {
            			type: 'bar',
            			height: 650
            		},
            		plotOptions: {
            			bar: {
            				horizontal: true,
            				columnWidth: '55%',
            				endingShape: 'rounded'
            			},
            		},
            		dataLabels: {
            			enabled: false
            		},
            		title: {
            			text: 'TOTAL SUARA PARTAI',
            			align: 'center'
            		},
            		yaxis: {
            			title: {
            				text: 'Total Suara'
            			}
            		},
            		fill: {
            			colors: ['#3F51B5']
            		}
            	};
            	chart1 = new ApexCharts(document.querySelector("#chart1"), chartData1);
            	chart1.render();

            	setTimeout(updateChart1, 5000);
            });
			// END CHART 1 +===++++




			// START CHART 2

 // star chart 2
			function updateData2() {
				return new Promise((resolve, reject) => {
					$.ajax({
						url: '{{ url("tv/get-suara2") }}',
						method: 'GET',
						dataType: 'json',
						success: function(response) {
							const sortedData = response.sort((a, b) => b.total_votes - a.total_votes);

							const top10Data = sortedData.slice(0, 10);
							resolve(top10Data);
						},
						error: function(error) {
							reject(error);
						}
					});
				});
			}

			function buildChartData2(data) {
				if (Array.isArray(data)) {
					return [{
						data: data.map(candidate => ({
							x: candidate.candidate_name,
							y: parseInt(candidate.total_votes)
						}))
					}];
				} else {
					console.error('Data yang diterima tidak dalam bentuk array:', data);
                    return []; // atau berikan nilai default jika perlu
                }
            }

            function updateChart2() {
            	updateData2()
            	.then((response) => {
            		if (chart2) {
            			chart2.updateSeries(buildChartData2(response));
            		} else {
            			console.error('chart2 belum didefinisikan.');
            		}

            		setTimeout(updateChart2, 5000);
            	})
            	.catch((error) => {
            		console.error('Gagal memperbarui data:', error);
            	});
            }

            // Mengatur data awal chart
            updateData2().then((response) => {
            	var chartData2 = {
            		series: buildChartData2(response),
            		chart: {
            			type: 'bar',
            			height: 300
            		},
            		plotOptions: {
            			bar: {
            				horizontal: false,
            				columnWidth: '55%',
            				endingShape: 'rounded'
            			},
            		},
            		dataLabels: {
            			enabled: false
            		},
            		title: {
            			text: 'KANDIDAT TERTINGGI SEMUA PARTAI',
            			align: 'center'
            		},
            		yaxis: {
            			title: {
            				text: 'Total Suara'
            			}
            		},
            		fill: {
            			colors: ['#3F51B5']
            		}
            	};
            	chart2 = new ApexCharts(document.querySelector("#chart2"), chartData2);
            	chart2.render();

            	setTimeout(updateChart2, 5000);
            });
			// END CHART 2 +===++++




            // star chart 3
			function updateData3() {
				return new Promise((resolve, reject) => {
					$.ajax({
						url: '{{ url("tv/get-suara3") }}',
						method: 'GET',
						dataType: 'json',
						success: function(response) {
							const sortedData = response.sort((a, b) => b.total_votes - a.total_votes);

							const top10Data = sortedData.slice(0, 10);
							resolve(top10Data);
						},
						error: function(error) {
							reject(error);
						}
					});
				});
			}

			function buildChartData3(data) {
				if (Array.isArray(data)) {
					return [{
						data: data.map(candidate => ({
							x: candidate.candidate_name,
							y: parseInt(candidate.total_votes)
						}))
					}];
				} else {
					console.error('Data yang diterima tidak dalam bentuk array:', data);
                    return []; // atau berikan nilai default jika perlu
                }
            }

            function updateChart3() {
            	updateData3()
            	.then((response) => {
            		if (chart3) {
            			chart3.updateSeries(buildChartData3(response));
            		} else {
            			console.error('chart3 belum didefinisikan.');
            		}

            		setTimeout(updateChart3, 5000);
            	})
            	.catch((error) => {
            		console.error('Gagal memperbarui data:', error);
            	});
            }

            // Mengatur data awal chart
            updateData3().then((response) => {
            	var chartData3 = {
            		series: buildChartData3(response),
            		chart: {
            			type: 'bar',
            			height: 300
            		},
            		plotOptions: {
            			bar: {
            				horizontal: false,
            				columnWidth: '55%',
            				endingShape: 'rounded'
            			},
            		},
            		dataLabels: {
            			enabled: false
            		},
            		title: {
            			text: 'KANDIDAT TERTINGGI DI PARTAI ANDA',
            			align: 'center'
            		},
            		yaxis: {
            			title: {
            				text: 'Total Suara'
            			}
            		},
            		fill: {
            			colors: ['#3F51B5']
            		}
            	};
            	chart3 = new ApexCharts(document.querySelector("#chart3"), chartData3);
            	chart3.render();

            	setTimeout(updateChart3, 5000);
            });



        });
    </script>




<script>
	setTimeout(function(){
		location.reload();
	}, 60000);
</script>


</body>
</html>
