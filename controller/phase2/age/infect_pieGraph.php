<script>
    $(document).ready(function() {
        $.getJSON('./DATA/phase2/age/age.json', function(data) {
            //console.log(data.update);
            var json = [];
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            $.each(data, function(key, val) {
                if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                    json.push({
                        name: key,
                        y: val.ตาย
                    });
                }
            });
            option.series[0].data = json;
            option.subtitle = {
                text: "ข้อมูลวันที่ 19/04/2020"
            }

            var chart = new Highcharts.chart(option);

        });
        var option = {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
                renderTo: 'grid5'
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
            series: [{
                name: 'จำนวน'
            }]
        }
    });
</script>