<script>
    $(document).ready(function() {
        Highcharts.getJSON('https://cdn.jsdelivr.net/gh/highcharts/highcharts@v7.0.0/samples/data/world-population-density.json', function(data) {
            // Prevent logarithmic errors in color calulcation
            data.forEach(function(p) {
                p.value = (p.value < 1 ? 1 : p.value);
            });
            // Initiate the chart
            Highcharts.mapChart('world_map', {
                chart: {
                    map: 'custom/world'
                },

                title: {
                    text: ''
                },

                mapNavigation: {
                    enabled: true,
                    enableDoubleClickZoomTo: true
                },

                colorAxis: {
                    min: 1,
                    max: 1000,
                    type: 'logarithmic'
                },

                series: [{
                    data: data,
                    joinBy: ['iso-a3', 'code3'],
                    name: 'Population density',
                    states: {
                        hover: {
                            color: '#a4edba'
                        }
                    },
                    tooltip: {
                        valueSuffix: '/km²'
                    }
                }]
            });
        });

    });
</script>