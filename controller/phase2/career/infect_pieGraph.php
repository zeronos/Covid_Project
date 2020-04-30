<script>
    $(document).ready(function() {
        $.getJSON('./DATA/phase2/job/career.json', function(data) {
            //console.log(data.update);
            var json = [];
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            for (var i = 0; i < data.data.length; i++) {
                json.push({
                    name: data.data[i].ชื่อ,
                    y: data.data[i].ติดเชื้อ
                });
            }
            option.series[0].data = json;
            option.subtitle = {
                text: "ข้อมูลวันที่ " + data.update
            }
            var chart = new Highcharts.chart(option);
        });
        var option = {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
                renderTo: 'grid4'
            },
            title: {
                text: 'จำนวนผู้ติดเชื้อ'
            },
            tooltip: {
                pointFormat: '{series.name}:<b>{point.y}</b>',
                valueSuffix: ' คน'
            },
            accessibility: {
                point: {
                    valueSuffix: 'คน'
                }
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false
                    },
                    showInLegend: true
                }
            },
            series: [{}]
        }

    });
</script>