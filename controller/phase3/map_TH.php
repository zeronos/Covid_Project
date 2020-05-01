<script>
    $(document).ready(function() {

        $.getJSON("DATA/phase3/province.json", function(data) {
            var myObj = [];
            var items = [];
            var table = '<thead>\n'+'<tr>\n'+'<th>จังหวัด</th>\n'+'<th>ติดเชื้อ</th>\n'+'<th>หาย</th>\n'+'<th>ตาย</th>\n'+'</tr>\n'+' </thead>\n';

            $.each(data, function(key, value) {
                if (key != "lastupdate") {
                    table += '<tr>';
                    table += '<td>' + key + '</td>';
                    table += '<td>' + value.cure + '</td>';
                    table += '<td>' + value.healing + '</td>';
                    table += '<td>' + value.dead + '</td>';
                    table += '</tr>';
                }
            });

            table += '</tbody>\n'
            $('#table').append(table);
            
            $("#table").DataTable({
            "dom": 'rtip',
            "scrollY": "300px",
            "scrollCollapse": true,
            "paging": false,
            "searching": false
        });

            items = [
                ['th-ct', data.chanthaburi["infect"]],
                ['th-4255', 1],
                ['th-pg', data.phangnga["infect"]],
                ['th-st', data.suratthani["infect"]],
                ['th-kr', data.krabi["infect"]],
                ['th-sa', data.satun["infect"]],
                ['th-tg', data.trang["infect"]],
                ['th-tt', data.trat["infect"]],
                ['th-pl', data.phatthalung["infect"]],
                ['th-ps', data.phitsanulok["infect"]],
                ['th-kp', data.kamphaengphet["infect"]],
                ['th-pc', data.phichit["infect"]],
                ['th-sh', data.suphanburi["infect"]],
                ['th-at', data.angthong["infect"]],
                ['th-lb', data.lopburi["infect"]],
                ['th-pa', data.phranakhonsiayutthaya["infect"]],
                ['th-np', data.nakhonpathom["infect"]],
                ['th-sb', data.singburi["infect"]],
                ['th-cn', data.chainat["infect"]],
                ['th-bm', data.bangkok["infect"]],
                ['th-pt', data.pathumthani["infect"]],
                ['th-no', data.nonthaburi["infect"]],
                ['th-sp', data.samutprakan["infect"]],
                ['th-ss', data.samutsakhon["infect"]],
                ['th-sm', data.samutsongkhram["infect"]],
                ['th-pe', data.phetchaburi["infect"]],
                ['th-cc', data.chachoengsao["infect"]],
                ['th-nn', data.nakhonnayok["infect"]],
                ['th-cb', data.chonburi["infect"]],
                ['th-br', data.buriram["infect"]],
                ['th-kk', data.khonkaen["infect"]],
                ['th-ph', data.phetchabun["infect"]],
                ['th-kl', data.kalasin["infect"]],
                ['th-sr', data.saraburi["infect"]],
                ['th-nr', data.nakhonratchasima["infect"]],
                ['th-si', data.sisaket["infect"]],
                ['th-re', data.roiet["infect"]],
                ['th-le', data.loei["infect"]],
                ['th-nk', data.nongkhai["infect"]],
                ['th-ac', data.amnatcharoen["infect"]],
                ['th-md', data.mukdahan["infect"]],
                ['th-sn', data.sakonnakhon["infect"]],
                ['th-nw', data.narathiwat["infect"]],
                ['th-pi', data.pattani["infect"]],
                ['th-rn', data.ranong["infect"]],
                ['th-nt', data.nakhonsithammarat["infect"]],
                ['th-sg', data.songkhla["infect"]],
                ['th-pr', data.phrae["infect"]],
                ['th-py', data.phayao["infect"]],
                ['th-so', data.sukhothai["infect"]],
                ['th-ud', data.uttaradit["infect"]],
                ['th-kn', data.kanchanaburi["infect"]],
                ['th-tk', data.tak["infect"]],
                ['th-ut', data.uthaithani["infect"]],
                ['th-ns', data.nakhonsawan["infect"]],
                ['th-pk', data.prachuapkhirikhan["infect"]],
                ['th-ur', data.ubonratchathani["infect"]],
                ['th-sk', data.sakaeo["infect"]],
                ['th-ry', data.rayong["infect"]],
                ['th-cy', data.chaiyaphum["infect"]],
                ['th-su', data.surin["infect"]],
                ['th-nf', data.nakhonphanom["infect"]],
                ['th-bk', data.buengkan["infect"]],
                ['th-mh', data.maehongson["infect"]],
                ['th-pu', data.phuket["infect"]],
                ['th-cp', data.chumphon["infect"]],
                ['th-yl', data.yala["infect"]],
                ['th-cr', data.chiangrai["infect"]],
                ['th-cm', data.chiangmai["infect"]],
                ['th-ln', data.lamphun["infect"]],
                ['th-na', data.nan["infect"]],
                ['th-lg', data.lampang["infect"]],
                ['th-pb', data.prachinburi["infect"]],
                ['th-rt', data.ratchaburi["infect"]],
                ['th-ys', data.yasothon["infect"]],
                ['th-ms', data.mahasarakham["infect"]],
                ['th-un', data.udonthani["infect"]],
                ['th-nb', data.nongbualamphu["infect"]]
            ];

            Highcharts.mapChart('grid8', {
                chart: {
                    map: 'countries/th/th-all'
                },

                title: {
                    text: 'ภาพรวมในแต่ละจังหวัด'
                },

                subtitle: {
                    text: ''
                },

                mapNavigation: {
                    enabled: true,
                    buttonOptions: {
                        verticalAlign: 'bottom'
                    }
                },

                colorAxis: {
                    min: 0,
                    max: 1000,
                    stops: [
                        [0, '#F1EEF6'],
                        [0.5, '#900037'],
                        [1, '#500007']
                    ],
                },

                series: [{
                    data: items,
                    name: 'จังหวัด',
                    states: {
                        hover: {
                            color: '#ffff59'
                        }
                    },
                    dataLabels: {
                        enabled: true,
                        format: '{point.name}'
                    }
                }]
            });
        });


    });
</script>