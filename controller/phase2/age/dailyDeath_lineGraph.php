<script>
    $(document).ready(function() {
        $.getJSON('./DATA/phase2/age/ageInfectedDaily.json', function(data) {
            //console.log(data.update);
            var json = [];
            var i = 0;
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            $.each(data.Data, function(key, val) {
                json.push({
                    name: key,
                    data: val
                });
            });
            option.series[0] = json[0];
            option.series[1] = json[1];
            option.series[2] = json[2];
            option.series[3] = json[3];
            option.series[4] = json[4];
            option.series[5] = json[5];
            option.series[6] = json[6];
            option.series[7] = json[7];
            option.series[8] = json[8];
            option.series[9] = json[9];
            option.xAxis.categories = data.LabelText;
            var chart = new Highcharts.chart(option);

        });
        var option = {
            chart: {
                renderTo: 'grid6'
            },
            title: {
                text: 'จำนวนผู้ติดเชื้อรายวัน'
            },

            subtitle: {
                text: 'ข้อมูลวันที่ 19/04/2020'
            },

            yAxis: {
                title: {
                    text: 'จำนวน (คน)'
                }
            },

            xAxis: {
                categories: {

                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            plotOptions: {
                series: {
                    label: {
                        connectorAllowed: false
                    },
                    pointStart: 0
                }
            },

            series: [{

            }],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            layout: 'horizontal',
                            align: 'center',
                            verticalAlign: 'bottom'
                        }
                    }
                }]
            }
        }
    });
</script>