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
                        data: [val.ติดเชื้อ, val.หาย, val.ตาย],
                        pointPlacement: 'on'
                    });
                }
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
            var chart = new Highcharts.chart(option);
        });
        var option = {
            chart: {
                polar: true,
                type: 'line',
                renderTo: 'grid7'
            },

            accessibility: {
                description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.'
            },

            title: {
                text: 'spending',
                x: -80
            },

            pane: {
                size: '80%'
            },

            xAxis: {
                categories: ['ติดเชื้อ', 'หาย', 'ตาย'],
                tickmarkPlacement: 'on',
                lineWidth: 0
            },

            yAxis: {
                gridLineInterpolation: 'polygon',
                lineWidth: 0,
                min: 0
            },

            tooltip: {
                shared: true,
                pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>'
            },

            legend: {
                align: 'right',
                verticalAlign: 'middle',
                layout: 'vertical'
            },

            series: [{}],

            responsive: {
                rules: [{
                    condition: {
                        maxWidth: 500
                    },
                    chartOptions: {
                        legend: {
                            align: 'center',
                            verticalAlign: 'bottom',
                            layout: 'horizontal'
                        },
                        pane: {
                            size: '70%'
                        }
                    }
                }]
            }
        }
    });
</script>