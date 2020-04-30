<script>
    $(document).ready(function() {

        $.getJSON("DATA/phase1/ผู้ติดเชื้อสะสมในแต่ละวัน.json", function(data) {

            //console.log(data.Data[100].Confirmed);
            var infectFreq = [];
            var deathFreq = [];
            var hospitalFreq = [];
            var wellFreq = [];

            console.log(data.Data[110].Recovered)
            for (var i = 0; i < data.Data.length; i++) {
                infectFreq[i] = data.Data[i].Confirmed;
                deathFreq[i] = data.Data[i].Deaths;
                hospitalFreq[i] = data.Data[i].Hospitalized;
                wellFreq[i] = data.Data[i].Recovered;

            }
            console.log(wellFreq);
            var DATA = [{
                    name: "ติดเชื้อ",
                    data: infectFreq
                },
                {
                    name: "ตาย",
                    data: deathFreq
                },
                {
                    name: "รักษา",
                    data: hospitalFreq
                },
                {
                    name: "หาย",
                    data: wellFreq
                }
            ]


            phase1_1_Opt.series = DATA;
            phase1_1_Opt.xAxis.categories = data.date;
            var chart = new Highcharts.chart('grid1', phase1_1_Opt);

        });
        var phase1_1_Opt = {
            title: {
                text: 'กราฟสะสม'
            },
            yAxis: {
                title: {
                    text: 'สะสม (คน)'
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
            }

        }

    });
</script>