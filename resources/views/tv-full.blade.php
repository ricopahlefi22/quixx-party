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
						<div x-ref="barChart" class="bg-white dark:bg-black rounded-lg" id="chart1"></div>
					</div>
				</div>
			</div>
			<div class="col-md-6 col-12">
				<div class="row">
					<div class="col-md-12">
						<div class="card">
							<div class="card-body">
								<div  x-ref="barChart" class="bg-white dark:bg-black rounded-lg" id="chart2"></div>
							</div>
						</div>
					</div>

					<div class="col-md-12 col-12 mt-3">
						<div class="card">
							<div class="card-body">
								<div  x-ref="barChart" class="bg-white dark:bg-black rounded-lg" id="chart3"></div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	@include('template.sections.js')

	<script>
		var options = {
			series: [
			{
				name: 'Total Suara Partai',
				data: [
					@foreach ($list_party->sortByDesc('totalVotes') as $village)
					{
						x: "{{ $village->short_name }}",
						y: "{{ $village->totalVotes}}",
					},
					@endforeach
					]
			}
			],
			chart: {
				height: 650,
				type: 'bar'
			},
			plotOptions: {
				bar: {
					horizontal: true,
				}
			},
			colors: ['#3F51B5'],
			dataLabels: {
				formatter: function(val, opt) {
					const goals =
					opt.w.config.series[opt.seriesIndex].data[opt.dataPointIndex]
					.goals

					if (goals && goals.length) {
						return `${val} / ${goals[0].value}`
					}
					return val
				}
			},
			legend: {
				show: true,
				showForSingleSeries: true,
			}
		};

		var chart = new ApexCharts(document.querySelector("#chart1"), options);
		chart.render();
	</script>

	<!-- chart 2 -->
	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
            // Data untuk diagram batang
			var chartData = {
				series: [{
					data: [
						@foreach ($list_candidate->sortByDesc('totalVotes')->take(10) as $village)
						{
							x: "{{ $village->name }}",
							y: "{{ $village->totalVotes}}",
						},
						@endforeach

						]
				}],
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
					text: 'KANDIDAT TERTINGGI DALAM PARTAI',
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

            // Inisialisasi diagram batang dengan konfigurasi data di atas
			var chart = new ApexCharts(document.querySelector("#chart2"), chartData);
			chart.render();
		});
	</script>


	<!-- chart 3 -->

	<script>
		document.addEventListener("DOMContentLoaded", function(event) {
            // Data untuk diagram batang
			var chartData = {
				series: [{
					data: [
						@foreach ($list_candidate_all->sortByDesc('totalVotesAll')->take(10) as $village)
						{
							x: "{{ $village->name }}",
							y: "{{ $village->totalVotesAll}}",
						},
						@endforeach

						]
				}],
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

			var chart = new ApexCharts(document.querySelector("#chart3"), chartData);
			chart.render();
		});


	</script>


	<script>
		setTimeout(function(){
			location.reload();
		}, 60000);
	</script>


</body>
</html>