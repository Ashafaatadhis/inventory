<div class="grid grid-cols-1 gap-6">
    {{-- Grafik Trend 7 Hari --}}
    <div class="card">
        <div class="card-body">
            <h3 class="font-semibold mb-4">Stok (7 Hari Terakhir)</h3>
            <div wire:ignore>
                <div id="stock-chart" style="height: 300px;"></div>
            </div>
        </div>
    </div>

    {{-- Grafik Stok per Produk --}}
    <div class="card">
        <div class="card-body">
            <h3 class="font-semibold mb-4">Stok Produk Tertinggi (Top 5)</h3>
            <div wire:ignore>
                <div id="current-stock-chart" style="height: 300px;"></div>
            </div>
        </div>
    </div>
</div>


<script>
    document.addEventListener('DOMContentLoaded', () => {
        const el = document.querySelector("#current-stock-chart");
        if (!el) return;

        const options = {
            chart: {
                type: 'bar',
                height: 300
            },
            series: @json($seriesCurrent),
            xaxis: {
                categories: @json($categoriesCurrent),
                labels: {
                    rotate: -45
                }
            },
            plotOptions: {
                bar: {
                    columnWidth: '50%'
                }
            },
            dataLabels: {
                enabled: true
            }
        };

        const chart = new ApexCharts(el, options);
        chart.render();
    });
    document.addEventListener('DOMContentLoaded', () => {
        const el = document.querySelector("#stock-chart");

        if (!el) return;

        const options = {
            chart: {
                type: 'line',
                height: 300
            },
            series: @json($series),
            xaxis: {
                categories: @json($categories)
            },
            stroke: {
                curve: 'smooth'
            },
            markers: {
                size: 4
            }
        };

        const chart = new ApexCharts(el, options);

        chart.render();
    });
</script>
