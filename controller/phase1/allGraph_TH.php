<script>
    $(document).ready(function() {

        $.getJSON("DATA/phase1/ผู้ติดเชื้อสะสมในแต่ละวัน.json", function(data) {
            //console.log(data.Data[100].NewConfirmed);
            var infect = [];
            var death = [];
            var hospital = [];
            var well = [];
            //console.log(data.Data[110].Recovered)
            for (var i = 0; i < data.Data.length; i++) {
                infect[i] = data.Data[i].NewConfirmed;
                death[i] = data.Data[i].NewDeaths;
                hospital[i] = data.Data[i].NewHospitalized;
                well[i] = data.Data[i].NewRecovered;
            }
            //console.log(hospital);
            var DATA = [{
                    name: "ติดเชื้อ",
                    data: infect
                },
                {
                    name: "ตาย",
                    data: death
                },
                {
                    name: "รักษา",
                    data:  hospital
                },
                {
                    name: "หาย",
                    data: well
                }
            ]


            option.series = DATA;
            option.xAxis.categories = data.date;
            option.subtitle = {
                text: "ข้อมูลวันที่ " + data.UpdateDate
            }
            var chart = new Highcharts.chart('grid2',option);

        });

        var option = {
            title: {
                text: 'กราฟจำนวน'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:.0f} คน</b><br/>',
                
            },

            yAxis: {
                title: {
                    text: 'จำนวน (คน)'
                }
            },

            xAxis: {
                categories: {

                },
                title: {
                    text: 'วันที่'
                }
            },

            legend: {
                layout: 'vertical',
                align: 'right',
                verticalAlign: 'middle'
            },

            series: [{}, {}, {}, {}],

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
            },
           

        }
    });
</script>