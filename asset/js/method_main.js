function formatNumber(num) {
    return num.toString().replace(/(\d)(?=(\d{3})+(?!\d))/g, '$1,');
}

function formatDate(str) {
    var i;
    var res = [];
    var items = [];
    var month = ['ม.ค', 'ก.พ', 'มี.ค', 'เม.ย', 'พ.ค', 'มิ.ย', 'ก.ค', 'ส.ค', 'ก.ย', 'ต.ค', 'พ.ย', 'ธ.ค'];
    for (i = 0; i < str.length; i++) {
        res = str[i].split('/');
        if (res[1][0] == '0') {
            items.push(res[0] + ' ' + month[res[1][1] - 1]);
        } else {
            items.push(res[0] + ' ' + month[res[1] - 1]);
        }
    }
    return items;
}

function loadCard() {
    $.getJSON('./DATA/phase2/age/age.json', function(data) {
        document.getElementById('text1').innerHTML =
            'ติดเชื้อสะสม' + '<br>' + formatNumber(data.Toltal['ติดเชื้อ']) + ' คน';
        document.getElementById('text2').innerHTML = 'เสียชีวิต' + '<br>' + formatNumber(data.Toltal['ตาย']) + ' คน';
        document.getElementById('text3').innerHTML = 'หาย' + '<br>' + formatNumber(data.Toltal['หาย']) + ' คน';
        document.getElementById('text4').innerHTML = 'รักษา' + '<br>' + formatNumber(data.Toltal['รักษา']) + ' คน';
    });
}

function loadChart1_1() {
    $.getJSON('DATA/phase1/ผู้ติดเชื้อสะสมในแต่ละวัน.json', function(data) {
        //console.log(data.Data[100].Confirmed);
        let infectFreq = [];
        let deathFreq = [];
        let hospitalFreq = [];
        let wellFreq = [];
        //console.log(data.Data[110].Recovered)
        for (let i = 0; i < data.Data.length; i++) {
            infectFreq[i] = data.Data[i].Confirmed;
            deathFreq[i] = data.Data[i].Deaths;
            hospitalFreq[i] = data.Data[i].Hospitalized;
            wellFreq[i] = data.Data[i].Recovered;
        }
        //console.log(wellFreq);
        let DATA = [{
                name: 'ติดเชื้อ',
                data: infectFreq,
            },
            {
                name: 'ตาย',
                data: deathFreq,
            },
            {
                name: 'รักษา',
                data: hospitalFreq,
            },
            {
                name: 'หาย',
                data: wellFreq,
            },
        ];

        chart1_1.series = DATA;
        chart1_1.xAxis.categories = data.date;
        chart1_1.subtitle = {
            text: 'ข้อมูลวันที่ ' + data.UpdateDate,
        };
        new Highcharts.chart(chart1_1);
    });
}

function loadChart1_2() {
    $.getJSON('DATA/phase1/ผู้ติดเชื้อสะสมในแต่ละวัน.json', function(data) {
        //console.log(data.Data[100].NewConfirmed);
        let infect = [];
        let death = [];
        let hospital = [];
        let well = [];
        //console.log(data.Data[110].Recovered)
        for (let i = 0; i < data.Data.length; i++) {
            infect[i] = data.Data[i].NewConfirmed;
            death[i] = data.Data[i].NewDeaths;
            hospital[i] = data.Data[i].NewHospitalized;
            well[i] = data.Data[i].NewRecovered;
        }
        //console.log(hospital);
        let DATA = [{
                name: 'ติดเชื้อ',
                data: infect,
            },
            {
                name: 'ตาย',
                data: death,
            },
            {
                name: 'รักษา',
                data: hospital,
            },
            {
                name: 'หาย',
                data: well,
            },
        ];

        chart1_2.series = DATA;
        chart1_2.xAxis.categories = data.date;
        chart1_2.subtitle = {
            text: 'ข้อมูลวันที่ ' + data.UpdateDate,
        };
        new Highcharts.chart(chart1_2);
    });
}

function loadChart2_1(id, folder, file) {
    $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
        //console.log(data.update);
        let json = [];
        //ต้องดูว่าแต่ละกราฟใช้ format ไหน

        if (folder == 'career') {
            for (var i = 0; i < data.data.length; i++) {
                json.push({
                    name: data.data[i]['ชื่อ'],
                    y: data.data[i]['ติดเชื้อ'],
                });
            }
            chart2_1.series[0].data = json;
            chart2_1.subtitle = {
                text: 'ข้อมูลวันที่ ' + data.update,
            };
        } else {
            $.each(data, function(key, val) {
                if (key != 'Last Update' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: key,
                        y: val['ติดเชื้อ'],
                    });
                }
            });
            chart2_1.series[0].data = json;
            chart2_1.subtitle = {
                text: 'ข้อมูลวันที่ ' + data.Last_Update,
            };
        }

        new Highcharts.chart(id, chart2_1);
    });
}

function loadChart2_2(id, folder, file) {
    $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
        //console.log(data.update);
        let json = [];
        //ต้องดูว่าแต่ละกราฟใช้ format ไหน

        if (folder == 'career') {
            for (var i = 0; i < data.data.length; i++) {
                json.push({
                    name: data.data[i]['ชื่อ'],
                    y: data.data[i]['ตาย']
                });
            }

            chart2_2.series[0].data = json;
            chart2_2.subtitle = {
                text: 'ข้อมูลวันที่ ' + data.update,
            };
        } else {
            $.each(data, function(key, val) {
                if (key != 'Last Update' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: key,
                        y: val['ตาย'],
                    });
                }
            });
            chart2_2.series[0].data = json;
            chart2_2.subtitle = {
                text: 'ข้อมูลวันที่ ' + data.Last_Update,
            };
        }

        new Highcharts.chart(id, chart2_2);
    });
}

function loadChart2_3(id, folder, file) {
    $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
        let json = [];
        let infect = [];
        let dead = [];
        $.each(data, function(key, val) {
            if (key != 'Last Update' && key != 'Unit' && key != 'Toltal') {
                json.push(key);
                infect.push(val['ติดเชื้อ']);
                dead.push(val['ตาย']);
            }
        });
        console.log(dead)

        if (Array.isArray(dead) && Array.isArray(infect) && Array.isArray(json)) {
            chart2_3.series[0].data = infect;
            chart2_3.series[0].name = 'ติดเชื้อ';
            chart2_3.series[0].color = 'rgba(165,170,217,1)';
            chart2_3.series[0].pointPadding = 0.1;
            chart2_3.series[0].pointPlacement = -0.2;
            chart2_3.series[1].data = dead;
            chart2_3.series[1].name = 'ตาย';
            chart2_3.series[1].color = 'rgba(248,161,63,1)';
            chart2_3.series[1].pointPadding = 0.2;
            chart2_3.series[1].pointPlacement = -0.2;
            chart2_3.xAxis.categories = json;
        }
        new Highcharts.chart(id, chart2_3);
    });
}

function loadChart2_4(id, folder, file) {
    $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
        //console.log(data.update);
        let json = [];
        //ต้องดูว่าแต่ละกราฟใช้ format ไหน

        if (folder == 'career') {
            $.each(data, function(key, val) {
                if (key != 'Last Update' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: val['ชื่อ'],
                        data: [val['ติดเชื้อ'], 0, 0],
                        pointPlacement: 'on',
                    });
                }
            });
        } else if (folder == 'risk') {
            $.each(data, function(key, val) {
                if (key != 'Last Update' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: key,
                        data: [val['ติดเชื้อ'], val['ตาย'], 0],
                        pointPlacement: 'on',
                    });
                }
            });
        } else {
            $.each(data, function(key, val) {
                if (key != 'Last Update' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: key,
                        data: [val['ติดเชื้อ'], val['หาย'], val['ตาย']],
                        pointPlacement: 'on',
                    });
                }
            });
        }

        if (json[0]['name'] != null) {
            if (folder == 'age') {
                chart2_4.series[0] = json[0];
                chart2_4.series[1] = json[1];
                chart2_4.series[2] = json[2];
                chart2_4.series[3] = json[3];
                chart2_4.series[4] = json[4];
                chart2_4.series[5] = json[5];
                chart2_4.series[6] = json[6];
                chart2_4.series[7] = json[7];
                chart2_4.series[8] = json[8];
                chart2_4.series[9] = json[9];
            } else if (folder == 'gender') {
                chart2_4.series[0] = json[0];
                chart2_4.series[1] = json[1];
                chart2_4.series[2] = json[2];
            } else if (folder == 'risk' || folder == 'career') {
                chart2_4.series[0] = json[0];
                chart2_4.series[1] = json[1];
                chart2_4.series[2] = json[2];
                chart2_4.series[3] = json[3];
                chart2_4.series[4] = json[4];
                chart2_4.series[5] = json[5];
            } else {
                chart2_4.series[0] = json[0];
                chart2_4.series[1] = json[1];
                chart2_4.series[2] = json[2];
                chart2_4.series[3] = json[3];
                chart2_4.series[4] = json[4];
            }
        }

        new Highcharts.chart(id, chart2_4);
    });
}

function loadChart2_5(id, folder, file) {
    if (file != '')
        $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
            //console.log(data.update);
            let json = [];
            let i = 0;
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน

            if (folder == 'age' || folder == 'career') {
                $.each(data.Data, function(key, val) {
                    json.push({
                        name: key,
                        data: val,
                    });
                });
            } else if (folder == 'risk' || folder == 'gender') {
                $.each(data.Data, function(key, val) {
                    json.push({
                        name: key,
                        data: val['Death'],
                    });
                });
            }

            if (folder == 'gender') {
                chart2_5.series[0] = json[0];
                chart2_5.series[1] = json[1];
                chart2_5.series[2] = json[2];
                chart2_5.xAxis.categories = data.LabelText;
            } else if (folder == 'age') {
                chart2_5.series[0] = json[0];
                chart2_5.series[1] = json[1];
                chart2_5.series[2] = json[2];
                chart2_5.series[3] = json[3];
                chart2_5.series[4] = json[4];
                chart2_5.series[5] = json[5];
                chart2_5.series[6] = json[6];
                chart2_5.series[7] = json[7];
                chart2_5.series[8] = json[8];
                chart2_5.series[9] = json[9];
                chart2_5.xAxis.categories = data.LabelText;
            } else if (folder == 'career') {
                chart2_5.series[0] = json[0];
                chart2_5.series[1] = json[1];
                chart2_5.series[2] = json[2];
                chart2_5.series[3] = json[3];
                chart2_5.series[4] = json[4];
                chart2_5.series[5] = json[5];
                chart2_5.series[6] = json[6];
                chart2_5.series[7] = json[7];
                chart2_5.xAxis.categories = data.LabelText;
            } else if (folder == 'risk') {
                chart2_5.series[0] = json[0];
                chart2_5.series[1] = json[1];
                chart2_5.series[2] = json[2];
                chart2_5.series[3] = json[3];
                chart2_5.series[4] = json[4];
                chart2_5.series[5] = json[5];
                chart2_5.xAxis.categories = data.LabelText;
            }

            new Highcharts.chart(id, chart2_5);
        });
    else new Highcharts.chart(id, chart2_5);
}

function loadChart2_6(id, folder, file) {
    if (file != '')
        $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
            //console.log(data.update);
            let json = [];
            let i = 0;
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            if (folder == 'gender') {
                $.each(data.Data, function(key, val) {
                    json.push({
                        name: key,
                        data: val['NewInfect'],
                    });
                });
            } else {
                $.each(data.Data, function(key, val) {
                    json.push({
                        name: key,
                        data: val,
                    });
                });
            }

            if (folder == 'age') {
                chart2_6.series[0] = json[0];
                chart2_6.series[1] = json[1];
                chart2_6.series[2] = json[2];
                chart2_6.series[3] = json[3];
                chart2_6.series[4] = json[4];
                chart2_6.series[5] = json[5];
                chart2_6.series[6] = json[6];
                chart2_6.series[7] = json[7];
                chart2_6.series[8] = json[8];
                chart2_6.series[9] = json[9];
                chart2_6.xAxis.categories = data.LabelText;
            } else if (folder == 'gender') {
                chart2_6.series[0] = json[0];
                chart2_6.series[1] = json[1];
                chart2_6.series[2] = json[2];
                chart2_6.xAxis.categories = data.LabelText;
            } else if (folder == 'risk') {
                chart2_6.series[0] = json[0];
                chart2_6.series[1] = json[1];
                chart2_6.series[2] = json[2];
                chart2_6.series[3] = json[3];
                chart2_6.series[4] = json[4];
                chart2_6.series[5] = json[5];
                chart2_6.series[6] = json[6];
                chart2_6.series[7] = json[7];
                chart2_6.series[8] = json[8];
                chart2_6.series[9] = json[9];
                chart2_6.series[10] = json[10];
                chart2_6.series[11] = json[11];
                chart2_6.xAxis.categories = data.LabelText;
            } else if (folder == 'career') {
                chart2_6.series[0] = json[0];
                chart2_6.series[1] = json[1];
                chart2_6.series[2] = json[2];
                chart2_6.series[3] = json[3];
                chart2_6.series[4] = json[4];
                chart2_6.series[5] = json[5];
                chart2_6.series[6] = json[6];
                chart2_6.series[7] = json[7];
                chart2_6.xAxis.categories = data.LabelText;
            } else {
                chart2_6.series[0] = json[0];
                chart2_6.series[1] = json[1];
                chart2_6.series[2] = json[2];
                chart2_6.series[3] = json[3];
                chart2_6.series[4] = json[4];
                chart2_6.series[5] = json[5];
                chart2_6.series[6] = json[6];
                chart2_6.xAxis.categories = data.LabelText;
            }

            new Highcharts.chart(id, chart2_6);
        });
    else new Highcharts.chart(id, chart2_6);
}

function loadChart2_7(id, folder, file) {
    if (file != '')
        $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
            //console.log(data.update);
            let json = [];
            let i = 0;
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            $.each(data.Data, function(key, val) {
                json.push({
                    name: key,
                    data: val.NewInfect,
                });
            });
            chart2_7.series[0] = json[0];
            chart2_7.series[1] = json[1];
            chart2_7.series[2] = json[2];
            chart2_7.xAxis.categories = data.LabelText;
            new Highcharts.chart(id, chart2_7);
        });
    else new Highcharts.chart(id, chart2_7);
}

function loadChart3_1() {
    $.getJSON('DATA/phase3/th.json', function(data) {
        let maxIn = [];
        let items = [];
        let table = '';

        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                table += `<tr>
                        <td>${key}</td>
                        <td style="text-align:right">${formatNumber(value.infect)}</td>
                        <td style="text-align:right">${formatNumber(value.healing)}</td>
                        <td style="text-align:right">${formatNumber(value.dead)}</td>
                    </tr>`;
            }
        });

        $('#fetchDataTable3_1').html(table);
        $('#datatable3_1').DataTable({
            dom: '<"row"<"col"><"col"f>>' + '<"row"<"col"tr>>' + '<"row"<"col"i><"col"p>>',
            pageLength: 11,
        });

        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                maxIn.push(value.infect);
                items.push({
                    name: key,
                    value: value.infect,
                    dead: value.dead,
                    recovered: value.healing,
                    critical: value.cure,
                    "hc-key": value.code
                })
            }
        });

        console.log(items)

        Highcharts.mapChart('chart3_1', {
            chart: {
                map: 'countries/th/th-all'
            },

            title: {
                text: 'ผู้ติดเชื้อในประเทศไทยแยกตามจังหวัด'
            },

            subtitle: {
                text: 'Source map: <a href="http://code.highcharts.com/mapdata/countries/th/th-all.js">Thailand</a>'
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom'
                }
            },

            colorAxis: {
                min: 0,
                max: Math.max.apply(Math, maxIn),
                stops: [
                    [0, '#F1EEF6'],
                    [0.5, '#900037'],
                    [1, '#500007']
                ],
            },
            series: [{
                data: items,
                states: {
                    hover: {
                        color: '#ffff59'
                    }
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}'
                }
            }],
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>' + this.name + ':<br>';
                    string += '<span style="color:#8a1900">●</span>' + ' ติดเชื้อ ' + formatNumber(this.value) + ' คน' + '</b>' + '<br>';
                    string += '<span style="color:#e1e1db">●</span>' + ' ตาย ' + formatNumber(this.dead) + ' คน' + '</b>' + '<br>';
                    string += '<span style="color:#02fd45">●</span>' + ' หาย ' + formatNumber(this.recovered) + ' คน' + '</b>' + '<br>';
                    string += '<span style="color:#feff7a">●</span>' + ' รักษา ' + formatNumber(this.critical) + ' คน' + '</b>' + '<br>';
                    return string;
                }
            },
        });
    });
}

function loadChart3_2() {
    $.getJSON('DATA/phase2/tourist/ProvinceTouristNewInfectDaily.json', function(data) {
        let json = [];
        $.each(data.Data, function(key, val) {
            json.push({
                name: key,
                data: val,
            });
        });
        chart3_2.xAxis.categories = formatDate(data.LabelText);
        chart3_2.series[0] = json[0];
        chart3_2.series[1] = json[1];
        chart3_2.series[2] = json[2];
        new Highcharts.chart(chart3_2);
    });
}

function loadChart4_1() {

    $.getJSON("DATA/phase3/th.json", function(data) {
        let items = [];
        $.each(data, function(key, value) {
            if (key != "lastupdate") {
                items.push({
                    name: key,
                    data: [
                        [value.population, value.infect]
                    ]
                })
            }
        });
        for (i = 0; i < 77; i++)
            chart4_1.series[i] = items[i];
        new Highcharts.chart(chart4_1);

    });

}

//-------------------------------------------------------------------------------------------------- world ------------------------------------------//

function load_World_map() {
    $.getJSON('./DATA/world/รายงานโควิดแต่ละประเทศ.json', function(data) {
        var items = [];
        $.each(data, function(key, val) {
            if (key != 'lastupdate') {
                items.push({
                    name: key,
                    value: val.infect,
                    dead: formatNumber(val.dead),
                    recovered: formatNumber(val.recovered),
                    critical: formatNumber(val.critical),
                    code: val.code.toUpperCase(),
                });
            }
        });
        let table =
            '<thead>\n' +
            '<tr>\n' +
            '<th>ประเทศ</th>\n' +
            '<th>ติดเชื้อ</th>\n' +
            '<th>เสียชีวิต</th>\n' +
            '<th>หาย</th>\n' +
            '<th>รักษา</th>\n' +
            '</tr>\n' +
            ' </thead>\n';
        table += '<tbody>\n';
        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                table += '<tr>';
                table += '<td>' + key + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value.infect) + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value.dead) + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value.recovered) + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value.critical) + '</td>';
                table += '</tr>';
            }
        });
        table += '</tbody>';
        $('#world_table').append(table);

        $('#world_table').DataTable({
            dom: 'rtip',
            scrollY: '300px',
            scrollX: '300px',
            scrollCollapse: true,
            paging: false,
            searching: false,
        });

        //console.log(items);
        $('#world_map').highcharts('Map', {
            title: {
                text: 'World',
            },
            mapNavigation: {
                enabled: true,
                enableDoubleClickZoomTo: true,
            },
            colorAxis: {
                min: 1,
                max: 1000000,
                minColor: '#ffece8',
                maxColor: '#8a1900',
            },
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>' + this.name + ':<br>';
                    string +=
                        '<span style="color:#8a1900">●</span>' + ' ติดเชื้อ ' + this.value + ' คน' + '</b>' + '<br>';
                    string += '<span style="color:#e1e1db">●</span>' + ' ตาย ' + this.dead + ' คน' + '</b>' + '<br>';
                    string +=
                        '<span style="color:#02fd45">●</span>' + ' หาย ' + this.recovered + ' คน' + '</b>' + '<br>';
                    string +=
                        '<span style="color:#feff7a">●</span>' + ' รักษา ' + this.critical + ' คน' + '</b>' + '<br>';
                    return string;
                },
            },
            series: [{
                data: items,
                joinBy: ['iso-a2', 'code'],
                mapData: Highcharts.maps['custom/world'],
                states: {
                    hover: {
                        color: '#b7c1f2',
                    },
                },
                dataLabels: {
                    enabled: false,
                    format: '{point.name}',
                },
            }, ],
        });
    });
}

function load_worldAll_pieChart() {
    $.getJSON('./DATA/world/globalAll.json', function(data) {
        let items = [];
        items.push({
            name: 'ตาย',
            y: data.Dead.sum,
        }, {
            name: 'หาย',
            y: data.recover.sum,
        }, {
            name: 'ติดเชื้อ',
            y: data.infect.sum,
        });
        //console.log(items)

        // Build the chart
        Highcharts.chart('worldAll_pieChart', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie',
            },
            title: {
                text: 'ทั่วโลก',
            },
            subtitle: {
                text: 'ข้อมูลวันที่ ' + data.Last_Update,
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.y:.0f} คน</b>',
            },
            plotOptions: {
                pie: {
                    allowPointSelect: true,
                    cursor: 'pointer',
                    dataLabels: {
                        enabled: false,
                    },
                    showInLegend: true,
                },
            },
            series: [{
                name: 'จำนวน',
                data: items,
            }, ],
        });
    });
}

function load_worldRegion_spiderChart() {
    $.getJSON('./DATA/world/รวมเลขทุกประเทศเป็นทวีป.json', function(data) {
        //console.log(data.continent[0].name);
        var items = [];
        $.each(data.continent, function(key, val) {
            if (key != 'Last Update' && key != 'Unit' && key != 'Toltal') {
                items.push({
                    name: val.name,
                    data: [Math.log(val.confirm), Math.log(val.dead), Math.log(val.recovered), Math.log(val.well)],
                    pointPlacement: 'on',
                });
            }
        });

        //console.log(items);

        for (var i = 0; i < items.length; i++) {
            wolrdRegionSpiderChart.series[i] = items[i];
        }

        new Highcharts.chart(wolrdRegionSpiderChart);
    });
}

function load_world_barChart() {
    var items = [];
    var xaxis = [];
    $.getJSON('./DATA/world/โควิดทวีป.json', function(data) {
        //console.log(data.lastupdate);

        $.each(data, function(key, value) {
            if (key == data.lastupdate) {
                $.each(value, function(key, value) {
                    $.each(value, function(key, value) {
                        xaxis.push(key);
                        items.push(value.totalcases);
                    });
                });
            }
        });

        worldRegion_barChart.xAxis.categories = xaxis;
        worldRegion_barChart.series[0] = {
            name: 'ติดเชื้อ',
            data: items,
        };
        worldRegion_barChart.subtitle.text = 'ข้อมูลวันที่ ' + data.lastupdate;
        new Highcharts.chart(worldRegion_barChart);
    });
}

function load_world_lineChart() {
    $.getJSON('./DATA/world/totalcaseโควิดทวีป.json', function(data) {
        console.log(data);
        items = [];
        $.each(data, function(key, value) {
            if (key != 'lastupdate' && key != 'date')
                items.push({
                    name: key,
                    data: value,
                });
        });
        //console.log(items)
        worldRegion_lineChart.xAxis.categories = data.date;
        worldRegion_lineChart.series = items;
        worldRegion_lineChart.subtitle.text = 'ข้อมูลวันที่ ' + data.lastupdate;
        new Highcharts.chart('world_lineChart', worldRegion_lineChart);
    });
}

function load_worldDaed_lineChart() {
    $.getJSON('./DATA/world/worldRegionDeath.json', function(data) {
        //console.log(data)
        items = [];
        $.each(data.Data, function(key, value) {
            items.push({
                name: key,
                data: value,
            });
        });
        //console.log(items)

        worldDead_lineChart.tooltip.Format = 'วันที่' + data.date;
        worldDead_lineChart.xAxis.categories = data.date;
        worldDead_lineChart.series = items;
        worldDead_lineChart.subtitle.text = 'ข้อมูลวันที่ ' + data.LastUpDate;

        new Highcharts.chart('worldDaed_lineChart', worldDead_lineChart);
    });
}

function load_worldNewInfect_lineChart() {
    $.getJSON('./DATA/world/worldRegionNewInfect.json', function(data) {
        items = [];
        $.each(data.Data, function(key, value) {
            items.push({
                name: key,
                data: value,
            });
        });
        worldNewInfect_lineChart.xAxis.categories = data.date;
        worldNewInfect_lineChart.series = items;
        worldNewInfect_lineChart.subtitle.text = 'ข้อมูลวันที่ ' + data.LastUpDate;

        new Highcharts.chart('worldNewInfect_lineChart', worldNewInfect_lineChart);
    });
}

function load_worldRecover_lineChart() {
    $.getJSON('./DATA/world/worldRegionRecovered.json', function(data) {
        items = [];
        $.each(data.Data, function(key, value) {
            items.push({
                name: key,
                data: value,
            });
        });
        worldRecover_lineChart.xAxis.categories = data.date;
        worldRecover_lineChart.series = items;
        worldRecover_lineChart.subtitle.text = 'ข้อมูลวันที่ ' + data.LastUpDate;

        new Highcharts.chart('worldRecover_lineChart', worldRecover_lineChart);
    });
}