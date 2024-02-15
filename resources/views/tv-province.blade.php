<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    @include('template.sections.style')
</head>

<body x-data="main" class="relative overflow-x-hidden font-nunito text-sm font-normal antialiased"
    :class="[$store.app.sidebar ? 'toggle-sidebar' : '', $store.app.theme === 'dark' || $store.app.isDarkMode ? 'dark' : '',
        $store.app.menu, $store.app.layout, $store.app.rtlClass
    ]">
    <!-- sidebar menu overlay -->
    <div x-cloak class="fixed inset-0 z-50 bg-[black]/60 lg:hidden" :class="{ 'hidden': !$store.app.sidebar }"
        @click="$store.app.toggleSidebar()"></div>

    <!-- scroll to top button -->
    @include('template.sections.scroll-to-top')

    <!-- start theme customizer section -->
    @include('template.sections.customizer')
    <!-- end theme customizer section -->

    <div class="animate__animated p-6" :class="[$store.app.animation]">
        <!-- start main content section -->
        <div>
            <div class="main-logo flex shrink-0 justify-between">
                <div class="flex">
                    <img class="ml-[5px] w-8 flex-none" src="{{ asset('logo.png') }}" alt="image" />
                    <span class="align-middle text-lg font-bold ltr:ml-1.5 rtl:mr-1.5 dark:text-white-light lg:inline">
                        Hasil Perolehan Suara Caleg Provinsi
                    </span>
                </div>

                <div class="text-xl dark:text-white-light ">Total: <strong>{{ $total_province_voter }} Suara</strong></div>
                <div class="text-xl dark:text-white-light ">Suara Partai: <strong>{{ $party_province_voter }} Suara</strong></div>
            </div>
            <!-- Card 1 -->
            <div class="col-12 mt-2">
                <div class="panel">
                    <div class="bg-white dark:bg-black rounded-lg" id="chart1"></div>
                </div>
            </div>
        </div>
        <!-- end main content section -->

    </div>
    @include('template.sections.js')

    <script src="{{ asset('assets/js/apexcharts.js') }}"></script>

    <script>
        document.addEventListener("DOMContentLoaded", function(event) {
            // star chart 1
            function updateData1() {
                return new Promise((resolve, reject) => {
                    $.ajax({
                        url: `{{ url('tv/get-province') }}`,
                        method: 'GET',
                        dataType: 'json',
                        success: function(response) {
                            const sortedData = response.sort((a, b) => b.total_votes - a
                                .total_votes);

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
                        name: 'Jumlah Suara',
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
                        height: 600
                    },
                    plotOptions: {
                        bar: {
                            horizontal: true,
                            columnWidth: '55%',
                            endingShape: 'rounded'
                        },
                    },
                    dataLabels: {
                        enabled: true,
                    },
                    title: {
                        text: `Grafik Peringkat Suara Caleg Provinsi {{ env('PARTY') }}`,
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
            // END CHART 1
        });
    </script>

    <script>
        setTimeout(function() {
            location.reload();
        }, 30000);
    </script>
</body>

</html>
