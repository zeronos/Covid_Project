<script>
    $(document).ready(function() {
        $.getJSON('./DATA/phase2/age/age.json', function(data) {
            var json = [];
            var infect = [];
            var dead = [];
            $.each(data, function(key, val) {
                if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                    json.push(key);
                    infect.push(val.ติดเชื้อ);
                    dead.push(val.ตาย);
                }
            });
            option.series[0].data = infect;
            option.series[0].name = "ติดเชื้อ";
            option.series[0].color = 'rgba(165,170,217,1)';
            option.series[0].pointPadding = 0.1;
            option.series[0].pointPlacement = -0.2;
            option.series[1].data = dead;
            option.series[1].name = "ตาย";
            option.series[1].color = 'rgba(248,161,63,1)';
            option.series[1].pointPadding = 0.2;
            option.series[1].pointPlacement = -0.2;
            option.xAxis.categories = json;

            var chart = new Highcharts.chart(option);

        });
        var option = {
            chart: {
                type: 'column',
                renderTo: 'grid3'
            },
            title: {
                text: 'กราฟผู้ติดเชื้อและเสียชีวิต'
            },
            subtitle: {
                text: 'ข้อมูลวันที่ 19/04/2020'
            },
            xAxis: {

            },
            yAxis: [{
                min: 0,
                title: {
                    text: 'จำนวนคน'
                }
            }],
            legend: {
                shadow: false
            },
            tooltip: {
                shared: true
            },
            plotOptions: {
                column: {
                    grouping: false,
                    shadow: false,
                    borderWidth: 0
                }
            },
            series: [{

            }, {

            }]
        }
    });
</script>