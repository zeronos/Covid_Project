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

function log10(n) {
    return Math.log(n) / Math.log(10);
}



function loadCard() {
    $.getJSON('./DATA/phase2/age/age.json', function(data) {
        document.getElementById('text1').innerHTML =
            'ติดเชื้อสะสม' + '<br>' + formatNumber(data.Toltal['ติดเชื้อ']) + ' คน';
        document.getElementById('text2').innerHTML = 'เสียชีวิต' + '<br>' + formatNumber(data.Toltal['ตาย']) + ' คน';
        document.getElementById('text3').innerHTML = 'รักษาหาย' + '<br>' + formatNumber(data.Toltal['หาย']) + ' คน';
        document.getElementById('text4').innerHTML =
            'อยู่ระหว่างการรักษา' + '<br>' + formatNumber(data.Toltal['รักษา']) + ' คน';
    });
}

function loadChart1_1() {
    $.getJSON('DATA/phase1/ผู้ติดเชื้อสะสมในแต่ละวัน.json', function(data) {
        //console.log(data.Data[100].Confirmed);
        let infectFreq = [];
        let deathFreq = [];
        let hospitalFreq = [];
        //console.log(data.Data[110].Recovered)
        for (let i = 0; i < data.Data.length; i++) {
            infectFreq[i] = data.Data[i].Confirmed;
            deathFreq[i] = data.Data[i].Deaths;
            hospitalFreq[i] = data.Data[i].Hospitalized;
        }
        //console.log(wellFreq);
        let DATA = [{
                name: 'ติดเชื้อสะสม',
                data: infectFreq,
            },
            {
                name: 'เสียชีวิตสะสม',
                data: deathFreq,
            },
            {
                name: 'รักษาหายสะสม',
                data: hospitalFreq,
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
                name: 'เสียชีวิต',
                data: death,
            },
            {
                name: 'อยู่ระหว่างการรักษา',
                data: hospital,
            },
            {
                name: 'รักษาหาย',
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
    let type = 0;
    let path = '../DWFinalProject/DWProjectCountry/';
    if (folder == 'risk') {
        path = './DATA/phase2/' + folder + '/';
        type = 1;
    }

    $.getJSON(path + file, function(data) {
        let text = ` <div class=row>
                        <div class=col-md-0>
                            <div class='blob'>
                            </div>
                        </div>
                        <div class='col-md-1'>
                            ข้อมูลวันที่ ${data['LastUpDate']}
                        </div>
                    </div>`;
        let json = [];
        let title = 'สัดส่วนผู้ติดเชื้อแยกตาม';
        let title2 = '';
        if (folder == 'age') title2 = 'ช่วงอายุ';
        else if (folder == 'gender') title2 = 'เพศ';
        else if (folder == 'risk') title2 = 'กลุ่มเสี่ยง';
        else title2 = 'ภูมิภาค';

        if (type == 0)
            $.each(data, function(key, val) {
                if (key == 'Data') {
                    $.each(val, function(key2, val2) {
                        let sum = 0;
                        let name = key2;
                        if (key2 == 'NA') name = 'ไม่ระบุ' + title2;
                        $.each(val2, function(key3, val3) {
                            sum += val3;
                        });
                        json.push({
                            name: name,
                            y: sum,
                        });
                    });
                }
            });
        else {
            $.each(data, function(key, val) {
                if (key != 'Lastupdate' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: key,
                        y: val['ติดเชื้อ'],
                    });
                }
            });
            text = data['Lastupdate'];
        }

        chart2_1.series[0].data = json;
        chart2_1.title = {
            text: title + title2,
        };
        chart2_1.subtitle = {
            text: text,
            useHTML: true,
        };

        if (Array.isArray(json) && json[0].y != null) new Highcharts.chart(id, chart2_1);
        else {
            chart2_1.subtitle = {
                text: 'ไม่มีข้อมูล',
            };
            new Highcharts.chart(id, chart2_1).showNoData('ไม่มีข้อมูล');
        }
    });
}

function loadChart2_2(id, folder, file) {
    $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
        let json = [];
        let title = 'สัดส่วนผู้เสียชีวิตแยกตาม';
        if (folder == 'age') title += 'ช่วงอายุ';
        else if (folder == 'gender') title += 'เพศ';
        else if (folder == 'career') title += 'อาชีพ';
        else if (folder == 'risk') title += 'กลุ่มเสี่ยง';
        else title += 'ภูมิภาค';

        if (folder == 'career') {
            for (var i = 0; i < data.data.length; i++) {
                json.push({
                    name: data.data[i]['ชื่อ'],
                    y: data.data[i]['ตาย'],
                });
            }
        } else {
            $.each(data, function(key, val) {
                if (key != 'Lastupdate' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: key,
                        y: val['ตาย'],
                    });
                }
            });
        }

        chart2_2.series[0].data = json;
        chart2_2.title = {
            text: title,
        };
        chart2_2.subtitle = {
            text: 'ข้อมูลวันที่ ' + data.Lastupdate,
        };

        if (Array.isArray(json) && json[0].y != null) new Highcharts.chart(id, chart2_2);
        else {
            chart2_2.subtitle = {
                text: 'ไม่มีข้อมูล',
            };
            chart2_2.series[0].data = [];
            new Highcharts.chart(id, chart2_2).showNoData('ไม่มีข้อมูล');
        }
    });
}

function loadChart2_3(id, folder, file) {
    $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
        let json = [];;
        let infect = [];
        let dead = [];
        let title = 'จำนวนผู้ติดเชื้อและผู้เสียชีวิตแยกตาม';
        let title2 = '';
        if (folder == 'age') title2 = 'ช่วงอายุ';
        else if (folder == 'gender') title2 = 'เพศ';
        else if (folder == 'career') title2 = 'อาชีพ';
        else if (folder == 'risk') title2 = 'กลุ่มเสี่ยง';
        else title2 = 'ภูมิภาค';

        $.each(data, function(key, val) {
            if (key != 'Lastupdate' && key != 'Unit' && key != 'Toltal') {
                json.push(key);
                infect.push(log10(val['ติดเชื้อ']));
                dead.push(log10(val['ตาย']));
            }
        });
        if (Array.isArray(dead) && Array.isArray(infect) && Array.isArray(json)) {
            chart2_3.series[0].data = infect;
            chart2_3.series[0].name = 'ผู้ติดเชื้อ';
            chart2_3.series[0].color = 'rgba(165,170,217,1)';
            chart2_3.series[0].pointPadding = 0.1;
            chart2_3.series[0].pointPlacement = -0.2;
            chart2_3.series[1].data = dead;
            chart2_3.series[1].name = 'ผู้เสียชีวิต';
            chart2_3.series[1].color = 'rgba(248,161,63,1)';
            chart2_3.series[1].pointPadding = 0.2;
            chart2_3.series[1].pointPlacement = -0.2;
            chart2_3.xAxis.categories = json;
        }
        chart2_3.title = {
            text: title + title2,
        };
        chart2_3.tooltip = {
            formatter: function() {
                return '<b>' + this.series.name + ':<br>' + `<span style="color:${this.color}">●</span>` +
                    title2 + ' ' + this.x + ' ' + Math.round(Math.pow(10, this.y)) + ' คน' + '</b>' + '<br>';
            }
        }
        chart2_3.subtitle = {
            text: 'ข้อมูลวันที่ ' + data.Lastupdate,
        };
        new Highcharts.chart(id, chart2_3);
    });
}

function loadChart2_4(id, folder, file) {
    $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
        let json = [];
        let title = 'จำนวนผู้ติดเชื้อแยกตาม';
        if (folder == 'age') title += 'ช่วงอายุ';
        else if (folder == 'gender') title += 'เพศ';
        else if (folder == 'career') title += 'อาชีพ';
        else if (folder == 'risk') title += 'กลุ่มเสี่ยง';
        else title += 'ภูมิภาค';
        title += 'และผลการรักษารวม';
        if (folder == 'career') {
            $.each(data, function(key, val) {
                if (key != 'Lastupdate' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: val['ชื่อ'],
                        data: [val['ติดเชื้อ'], 0, 0],
                        pointPlacement: 'on',
                    });
                }
            });
        } else if (folder == 'risk') {
            $.each(data, function(key, val) {
                if (key != 'Lastupdate' && key != 'Unit' && key != 'Toltal') {
                    json.push({
                        name: key,
                        data: [val['ติดเชื้อ'], val['ตาย'], 0],
                        pointPlacement: 'on',
                    });
                }
            });
        } else {
            $.each(data, function(key, val) {
                if (key != 'Lastupdate' && key != 'Unit' && key != 'Toltal') {
                    let data1 = val['ติดเชื้อ'];
                    let data2 = val['หาย'];
                    let data3 = val['ตาย'];
                    if (val['ติดเชื้อ'] == null) data1 = 0;
                    if (val['หาย'] == null) data2 = 0;
                    if (val['ตาย'] == null) data3 = 0;
                    json.push({
                        name: key,
                        data: [data1, data2, data3],
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

        chart2_4.title = {
            text: title,
        };
        chart2_4.subtitle = {
            text: 'ข้อมูลวันที่ ' + data.Lastupdate,
        };

        

        new Highcharts.chart(id, chart2_4);
    });
}

function loadChart2_5(id, folder, file) {
    let title = 'จำนวนผู้เสียชีวิตรายวันแยกตาม';
    if (folder == 'age') title += 'ช่วงอายุ';
    else if (folder == 'gender') title += 'เพศ';
    else if (folder == 'career') title += 'อาชีพ';
    else if (folder == 'risk') title += 'กลุ่มเสี่ยง';
    else title += 'ภูมิภาค';
    chart2_5.title = {
        text: title,
    };
    if (file != '')
        $.getJSON(`./DATA/phase2/${folder}/${file}`, function(data) {
            let json = [];
            let i = 0;

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
                chart2_5.xAxis.categories = formatDate(data.LabelText);
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
                chart2_5.xAxis.categories = formatDate(data.LabelText);
            } else if (folder == 'career') {
                chart2_5.series[0] = json[0];
                chart2_5.series[1] = json[1];
                chart2_5.series[2] = json[2];
                chart2_5.series[3] = json[3];
                chart2_5.series[4] = json[4];
                chart2_5.series[5] = json[5];
                chart2_5.series[6] = json[6];
                chart2_5.series[7] = json[7];
                chart2_5.xAxis.categories = formatDate(data.LabelText);
            } else if (folder == 'risk') {
                chart2_5.series[0] = json[0];
                chart2_5.series[1] = json[1];
                chart2_5.series[2] = json[2];
                chart2_5.series[3] = json[3];
                chart2_5.series[4] = json[4];
                chart2_5.series[5] = json[5];
                chart2_5.xAxis.categories = formatDate(data.LabelText);
            }
            // if (Array.isArray(json))
            //     console.log("not null")
            // else
            //     console.log("nul")
            chart2_5.subtitle = {
                text: 'ข้อมูลวันที่ ' + data.Lastupdate,
            };
            if (Array.isArray(json) && json[0].data != null) new Highcharts.chart(id, chart2_5);
            else {
                chart2_5.subtitle = {
                    text: 'ไม่มีข้อมูล',
                };
                new Highcharts.chart(id, chart2_5).showNoData('ไม่มีข้อมูล');
            }
        });
    else {
        chart2_5.subtitle = {
            text: 'ไม่มีข้อมูล',
        };
        new Highcharts.chart(id, chart2_5).showNoData('ไม่มีข้อมูล');
    }
}

function loadChart2_6(id, folder, file) {
    let type = 0;
    let path = '../DWFinalProject/DWProjectCountry/';
    if (folder == 'risk') {
        path = './DATA/phase2/' + folder + '/';
        type = 1;
    }

    $.getJSON(path + file, function(data) {
        let text = ` <div class=row>
                        <div class=col-md-0>
                            <div class='blob'>
                            </div>
                        </div>
                        <div class='col-md-1'>
                            ข้อมูลวันที่ ${data['LastUpDate']}
                        </div>
                    </div>`;
        let title = 'จำนวนผู้ติดเชื้อรายวันแยกตาม';
        let title2 = '';
        if (folder == 'age') title2 = 'ช่วงอายุ';
        else if (folder == 'gender') title2 = 'เพศ';
        else if (folder == 'risk') title2 = 'กลุ่มเสี่ยง';
        else title2 = 'ภูมิภาค';
        chart2_6.title = {
            text: title + title2,
        };

        let json = [];

        $.each(data.Data, function(key, val) {
            let name = key;
            if (key == 'NA') name = 'ไม่ระบุ' + title2;
            json.push({
                name: name,
                data: val,
            });
        });
        if (type == 1) text = data['Lastupdate'];

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
            chart2_6.series[10] = json[10];
            chart2_6.series[11] = json[11];
            chart2_6.xAxis.categories = formatDate(data.LabelText);
        } else if (folder == 'gender') {
            chart2_6.series[0] = json[0];
            chart2_6.series[1] = json[1];
            chart2_6.series[2] = json[2];
            chart2_6.xAxis.categories = formatDate(data.LabelText);
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
            chart2_6.xAxis.categories = formatDate(data.LabelText);
        } else {
            chart2_6.series[0] = json[0];
            chart2_6.series[1] = json[1];
            chart2_6.series[2] = json[2];
            chart2_6.series[3] = json[3];
            chart2_6.series[4] = json[4];
            chart2_6.series[5] = json[5];
            chart2_6.series[6] = json[6];
            chart2_6.xAxis.categories = formatDate(data.LabelText);
        }

        chart2_6.subtitle = {
            text: text,
            useHTML: true,
        };

        if (Array.isArray(json) && json[0].data != null) new Highcharts.chart(id, chart2_6);
        else {
            chart2_6.subtitle = {
                text: 'ไม่มีข้อมูล',
            };
            new Highcharts.chart(id, chart2_6).showNoData('ไม่มีข้อมูล');
        }
    });
}

function check(data) {
    let check = {
        '0': ['เชียงราย', 'เชียงใหม่', 'น่าน', 'พะเยา', 'แพร่', 'แม่ฮ่องสอน', 'ลำปาง', 'ลำพูน', 'อุตรดิตถ์'],
        '1': [
            'กาฬสินธุ์',
            'ขอนแก่น',
            'ชัยภูมิ',
            'นครพนม',
            'นครราชสีมา',
            'บึงกาฬ',
            'บุรีรัมย์',
            'มหาสารคาม',
            'มุกดาหาร',
            'ยโสธร',
            'ร้อยเอ็ด',
            'เลย',
            'สกลนคร',
            'สุรินทร์',
            'ศรีสะเกษ',
            'หนองคาย',
            'หนองบัวลำภู',
            'อุดรธานี',
            'อุบลราชธานี',
            'อำนาจเจริญ',
        ],
        '2': [
            'กรุงเทพมหานคร',
            'กำแพงเพชร',
            'ชัยนาท',
            'นครนายก',
            'นครปฐม',
            'นครสวรรค์',
            'นนทบุรี',
            'ปทุมธานี',
            'พระนครศรีอยุธยา',
            'พิจิตร',
            'พิษณุโลก',
            'เพชรบูรณ์',
            'ลพบุรี',
            'สมุทรปราการ',
            'สมุทรสงคราม',
            'สมุทรสาคร',
            'สิงห์บุรี',
            'สุโขทัย',
            'สุพรรณบุรี',
            'สระบุรี',
            'อ่างทอง',
            'อุทัยธานี',
        ],
        '3': ['จันทบุรี', 'ฉะเชิงเทรา', 'ชลบุรี', 'ตราด', 'ปราจีนบุรี', 'ระยอง', 'สระแก้ว'],
        '4': ['กาญจนบุรี', 'ตาก', 'ประจวบคีรีขันธ์', 'เพชรบุรี', 'ราชบุรี'],
        '5': [
            'กระบี่',
            'ชุมพร',
            'ตรัง',
            'นครศรีธรรมราช',
            'นราธิวาส',
            'ปัตตานี',
            'พังงา',
            'พัทลุง',
            'ภูเก็ต',
            'ระนอง',
            'สตูล',
            'สงขลา',
            'สุราษฎร์ธานี',
            'ยะลา',
        ],
    };

    for (i = 0; i < 6; i++)
        for (j = 0; j < 6; j++) {
            if (check[i][j] == data) return i;
        }
    return 0;
}

function loadDatatable3_1() {
    $.getJSON('DATA/phase2/tourist/touristProvince.json', function(data) {
        let table = '';
        let zone = ['เหนือ', 'ตะวันออกเฉียงเหนือ', 'กลาง', 'ตะวันออก', 'ตะวันตก', 'ใต้'];
        let main = [];
        let second = [];

        $.each(data, function(key, value) {
            if (key != 'Lastupdate' && key != 'Unit' && key != 'Toltal') {
                if (key != 'จังหวัดท่องเที่ยวรอง') {
                    $.each(value, function(key2, value2) {
                        if (key2 != 0)
                            $.each(value2, function(key3, value3) {
                                main.push({
                                    zone: zone[check(key3)],
                                    key: key.substring(7),
                                    province: key3,
                                    infect: value3['ติดเชื้อ'],
                                    recover: value3['หาย'],
                                    dead: value3['ตาย'],
                                    heal: value3['รักษา'],
                                });
                            });
                    });
                } else {
                    $.each(value, function(key2, value2) {
                        if (key2 != 0)
                            $.each(value2, function(key3, value3) {
                                second.push({
                                    zone: zone[check(key3)],
                                    key: key.substring(7),
                                    province: key3,
                                    infect: value3['ติดเชื้อ'],
                                    recover: value3['หาย'],
                                    dead: value3['ตาย'],
                                    heal: value3['รักษา'],
                                });
                            });
                    });
                }
            }
        });

        $.each(main, function(key, value) {
            table += `<tr>
                         <td style="text-align:center">${value.zone}</td>
                         <td style="text-align:center">${value.key}</td>
                         <td>${value.province}</td>
                         <td style="text-align:right">${formatNumber(value.infect)}</td>
                         <td style="text-align:right">${formatNumber(value.recover)}</td>
                         <td style="text-align:right">${formatNumber(value.dead)}</td>
                         <td style="text-align:right">${formatNumber(value.heal)}</td>
                     </tr>`;
        });

        $.each(second, function(key, value) {
            table += `<tr>
                         <td style="text-align:center">${value.zone}</td>
                         <td style="text-align:center">${value.key}</td>
                         <td>${value.province}</td>
                         <td style="text-align:right">${formatNumber(value.infect)}</td>
                         <td style="text-align:right">${formatNumber(value.recover)}</td>
                         <td style="text-align:right">${formatNumber(value.dead)}</td>
                         <td style="text-align:right">${formatNumber(value.heal)}</td>
                     </tr>`;
        });

        $('#fetchDataTable3_1').html(table);
        $('#datatable3_1').DataTable({
            dom: '<"row"<"col"><"col"f>>' + '<"row"<"col"tr>>' + '<"row"<"col"i><"col"p>>',
            scrollY: '600px',
            paging: false,
        });
    });
}

function loadChart3_1() {
    $.getJSON('DATA/phase3/th.json', function(data) {
        let maxIn = [];
        let items = [];

        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                maxIn.push(value.healing);
                items.push({
                    name: key,
                    value: value.healing,
                    dead: value.dead,
                    infect: value.infect,
                    critical: value.cure,
                    'hc-key': value.code,
                });
            }
        });

        Highcharts.mapChart('chart3_1', {
            chart: {
                map: 'countries/th/th-all',
            },

            title: {
                text: 'จำนวนผู้รักษาหายในประเทศไทยแยกตามจังหวัด',
            },

            subtitle: {
                text: 'ข้อมูลวันที่ ' + data.lastupdate,
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom',
                },
            },

            colorAxis: {
                min: 0,
                max: Math.max.apply(Math, maxIn),
                stops: [
                    [0, '#ffffff'],
                    [0.5, '#b8ffb5'],
                    [1, '#069900'],
                ],
            },
            series: [{
                data: items,
                states: {
                    hover: {
                        color: '#ffff59',
                    },
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                },
            }, ],
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>' + this.name + ':<br>';
                    string +=
                        '<span style="color:#02fd45">●</span>' +
                        ' รักษาหาย ' +
                        formatNumber(this.value) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#8a1900">●</span>' +
                        ' ติดเชื้อ ' +
                        formatNumber(this.infect) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#feff7a">●</span>' +
                        ' อยู่ระหว่างการรักษา ' +
                        formatNumber(this.critical) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#e1e1db">●</span>' +
                        ' เสียชีวิต ' +
                        formatNumber(this.dead) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    return string;
                },
            },
        });
    });
}

function loadChart3_2() {
    $.getJSON('DATA/phase3/th.json', function(data) {
        let maxIn = [];
        let items = [];

        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                maxIn.push(value.dead);
                items.push({
                    name: key,
                    value: value.dead,
                    healing: value.healing,
                    critical: value.cure,
                    infect: value.infect,
                    'hc-key': value.code,
                });
            }
        });

        Highcharts.mapChart('chart3_2', {
            chart: {
                map: 'countries/th/th-all',
            },

            title: {
                text: 'จำนวนผู้เสียชีวิตในประเทศไทยแยกตามจังหวัด',
            },

            subtitle: {
                text: 'ข้อมูลวันที่ ' + data.lastupdate,
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom',
                },
            },

            colorAxis: {
                min: 0,
                max: Math.max.apply(Math, maxIn),
                stops: [
                    [0, '#ffffff'],
                    [0.5, '#ccbebe'],
                    [1, '#332e2e'],
                ],
            },
            series: [{
                data: items,
                states: {
                    hover: {
                        color: '#ffff59',
                    },
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                },
            }, ],
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>' + this.name + ':<br>';
                    string +=
                        '<span style="color:#e1e1db">●</span>' +
                        ' เสียชีวิต ' +
                        formatNumber(this.value) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#8a1900">●</span>' +
                        ' ติดเชื้อ ' +
                        formatNumber(this.infect) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#feff7a">●</span>' +
                        ' อยู่ระหว่างการรักษา ' +
                        formatNumber(this.critical) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#02fd45">●</span>' +
                        ' รักษาหาย ' +
                        formatNumber(this.healing) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    return string;
                },
            },
        });
    });
}

function loadChart3_3() {
    $.getJSON('DATA/phase3/th.json', function(data) {
        let maxIn = [];
        let items = [];

        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                maxIn.push(value.cure);
                items.push({
                    name: key,
                    value: value.cure,
                    healing: value.healing,
                    infect: value.infect,
                    dead: value.dead,
                    'hc-key': value.code,
                });
            }
        });

        Highcharts.mapChart('chart3_3', {
            chart: {
                map: 'countries/th/th-all',
            },

            title: {
                text: 'จำนวนผู้อยู่ระหว่างการรักษาในประเทศไทยแยกตามจังหวัด',
            },

            subtitle: {
                text: 'ข้อมูลวันที่ ' + data.lastupdate,
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom',
                },
            },

            colorAxis: {
                min: 0,
                max: Math.max.apply(Math, maxIn),
                stops: [
                    [0, '#ffffff'],
                    [0.5, '#faeb64'],
                    [1, '#a1920a'],
                ],
            },
            series: [{
                data: items,
                states: {
                    hover: {
                        color: '#ffff59',
                    },
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                },
            }, ],
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>' + this.name + ':<br>';
                    string +=
                        '<span style="color:#feff7a">●</span>' +
                        ' อยู่ระหว่างการรักษา ' +
                        formatNumber(this.value) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#8a1900">●</span>' +
                        ' ติดเชื้อ ' +
                        formatNumber(this.infect) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#e1e1db">●</span>' +
                        ' เสียชีวิต ' +
                        formatNumber(this.dead) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#02fd45">●</span>' +
                        ' รักษาหาย ' +
                        formatNumber(this.healing) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    return string;
                },
            },
        });
    });
}

function loadChart3_4() {
    $.getJSON('DATA/phase3/th.json', function(data) {
        let maxIn = [];
        let items = [];

        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                maxIn.push(value.infect);
                items.push({
                    name: key,
                    value: value.infect,
                    healing: value.healing,
                    cure: value.cure,
                    dead: value.dead,
                    'hc-key': value.code,
                });
            }
        });

        Highcharts.mapChart('chart3_4', {
            chart: {
                map: 'countries/th/th-all',
            },

            title: {
                text: 'จำนวนผู้ติดเชื้อในประเทศไทยแยกตามจังหวัด',
            },

            subtitle: {
                text: 'ข้อมูลวันที่ ' + data.lastupdate,
            },

            mapNavigation: {
                enabled: true,
                buttonOptions: {
                    verticalAlign: 'bottom',
                },
            },

            colorAxis: {
                min: 0,
                max: Math.max.apply(Math, maxIn),
                stops: [
                    [0, '#ffffff'],
                    [0.5, '#d62b39'],
                    [1, '#94000c'],
                ],
            },
            series: [{
                data: items,
                states: {
                    hover: {
                        color: '#ffff59',
                    },
                },
                dataLabels: {
                    enabled: true,
                    format: '{point.name}',
                },
            }, ],
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>' + this.name + ':<br>';
                    string +=
                        '<span style="color:#8a1900">●</span>' +
                        ' ติดเชื้อ ' +
                        formatNumber(this.value) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#feff7a">●</span>' +
                        ' อยู่ระหว่างการรักษา ' +
                        formatNumber(this.cure) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#e1e1db">●</span>' +
                        ' เสียชีวิต ' +
                        formatNumber(this.dead) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#02fd45">●</span>' +
                        ' รักษาหาย ' +
                        formatNumber(this.healing) +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    return string;
                },
            },
        });
    });
}

function loadChart3_5() {
    $.getJSON('../DWFinalProject/DWProjectCountry/ProvinceTouristNewInfect.json', function(data) {
        let text = ` <div class=row>
                        <div class=col-md-0>
                            <div class='blob'>
                            </div>
                        </div>
                        <div class='col-md-1'>
                            ข้อมูลวันที่ ${data['LastUpDate']}
                        </div>
                    </div>`;
        let json = [];
        $.each(data.Data, function(key, val) {
            let name = key;
            if (key == 'NA') name = 'ไม่ระบุ';
            json.push({
                name: name,
                data: val,
            });
        });
        chart3_5.xAxis.categories = formatDate(data.LabelText);
        chart3_5.series[0] = json[0];
        chart3_5.series[1] = json[1];
        chart3_5.series[2] = json[2];
        chart3_5.subtitle = {
            text: text,
            useHTML: true,
        };
        if (Array.isArray(json) && json[0].data != null) new Highcharts.chart(chart3_5);
        else {
            chart3_5.subtitle = {
                text: 'ไม่มีข้อมูล',
            };
            new Highcharts.chart(chart3_5).showNoData('ไม่มีข้อมูล');
        }
    });
}

function loadChart4_1() {
    $.getJSON('DATA/phase3/th.json', function(data) {
        let items = [];
        $.each(data, function(key, value) {
            if (key != 'lastupdate') {
                items.push({
                    name: key,
                    data: [
                        [value.population, value.infect]
                    ],
                });
            }
        });
        for (i = 0; i < 77; i++) chart4_1.series[i] = items[i];
        chart4_1.subtitle = {
            text: 'ข้อมูลวันที่ ' + data.lastupdate,
        };
        new Highcharts.chart(chart4_1);
    });
}

//-------------------------------------------------------------------------------------------------- world ------------------------------------------//
let path = '../DWFinalProject/DWProjectWorld/';
function load_world_table() {
    $.getJSON( path +'InfoAllCountry.json', function(data) {
        let table = '';
        $.each(data, function(key, value) {
            if (key != 'LastUpdate' && key != 'country' && key != 'URL' && key != 'ทั่วโลก') {
                table += '<tr>';
                table += '<td>' + value.region + '</td>';
                table += '<td>' + value.subregion + '</td>';
                table += '<td>' + key + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value['ติดเชื้อสะสม']) + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value['ตายสะสม']) + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value['หายสะสม']) + '</td>';
                table += '<td style="text-align:right">' + formatNumber(value['กำลังรักษา']) + '</td>';
                table += '</tr>';
            }
        });

        //console.log(table);
        $('#fetchworld').html(table);

        $('#world_table').DataTable({
            dom: '<"row"<"col"><"col"f>>' + '<"row"<"col"tr>>' + '<"row"<"col"i><"col"p>>',
            pageLength: 11,
            scrollY: '400px',
            paging: false,
        });
    });
}

function load_World_map(type) {
    let path = '../DWFinalProject/DWProjectWorld/';
    $.getJSON( path +'InfoAllCountry.json', function(data) {
        var items = [];
        var text = '';
        var cmax,
            cmin = '';
        if (type == 'infect') {
            $.each(data, function(key, val) {
                if (key != 'LastUpdate' && key != 'country' && key != 'URL' && key != 'ทั่วโลก') {
                    items.push({
                        name: key,
                        value: val['ติดเชื้อสะสม'],
                        infect: formatNumber(val['ติดเชื้อสะสม']),
                        dead: formatNumber(val['ตายสะสม']),
                        recovered: formatNumber(val['หายสะสม']),
                        critical: formatNumber(val['กำลังรักษา']),
                        code: val.alpha2,
                    });
                }
            });
            text = 'ติดเชื้อ';
            cmax = '#e6156f';
            cmin = '#fabbd6';
        } else if (type == 'dead') {
            $.each(data, function(key, val) {
                if (key != 'LastUpdate' && key != 'country' && key != 'URL' && key != 'ทั่วโลก') {
                    items.push({
                        name: key,
                        value: val.ตายสะสม,
                        infect: formatNumber(val['ติดเชื้อสะสม']),
                        dead: formatNumber(val['ตายสะสม']),
                        recovered: formatNumber(val['หายสะสม']),
                        critical: formatNumber(val['กำลังรักษา']),
                        code: val.alpha2,
                    });
                }
            });
            text = 'เสียชีวิต';
            cmin = '#f5c6ca';
            cmax = '#d61122';
        } else if (type == 'well') {
            $.each(data, function(key, val) {
                if (key != 'LastUpdate' && key != 'country' && key != 'URL' && key != 'ทั่วโลก') {
                    items.push({
                        name: key,
                        value: val.หายสะสม,
                        infect: formatNumber(val['ติดเชื้อสะสม']),
                        dead: formatNumber(val['ตายสะสม']),
                        recovered: formatNumber(val['หายสะสม']),
                        critical: formatNumber(val['กำลังรักษา']),
                        code: val.alpha2,
                    });
                }
            });
            text = 'รักษาหาย';
            cmax = '#37bd1c';
            cmin = '#b8f0ad';
        } else if (type == 'hospital') {
            $.each(data, function(key, val) {
                if (key != 'LastUpdate' && key != 'country' && key != 'URL' && key != 'ทั่วโลก') {
                    items.push({
                        name: key,
                        value: val['กำลังรักษา'],
                        infect: formatNumber(val['ติดเชื้อสะสม']),
                        dead: formatNumber(val['ตายสะสม']),
                        recovered: formatNumber(val['หายสะสม']),
                        critical: formatNumber(val['กำลังรักษา']),
                        code: val.alpha2,
                    });
                }
            });
            text = 'อยู่ระหว่างการรักษา';
            cmax = '#e7f216';
            cmin = '#eff2ac';
        }
        Highcharts.mapChart('world_map', {
            chart: {
                map: 'custom/world',
            },

            title: {
                text: 'จำนวนผู้' + text + 'ทั่วโลก',
            },
            subtitle: {
                text: '<div class=row>\n' +
                    '<div class=col-md-0>\n' +
                    "<div class='blob'></div>" +
                    '</div>\n' +
                    "<div class='col-md-1'>\n" +
                    'ข้อมูลวันที่ ' +
                    data.LastUpdate +
                    '</div>\n' +
                    '</div>',
                useHTML: true,
            },
            mapNavigation: {
                enabled: true,
                enableDoubleClickZoomTo: true,
            },
            colorAxis: {
                min: 1,
                max: 999999,
                minColor: cmin,
                maxColor: cmax,
            },
            tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>' + this.name + ':<br>';
                    string +=
                        '<span style="color:#e6156f">●</span>' +
                        ' จำนวนผู้ติดเชื้อ ' +
                        this.value +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#d61122">●</span>' +
                        ' จำนวนผู้เสีชีวิต ' +
                        this.dead +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#37bd1c">●</span>' +
                        ' จำนวนผู้รักษาหาย ' +
                        this.recovered +
                        ' คน' +
                        '</b>' +
                        '<br>';
                    string +=
                        '<span style="color:#e7f216">●</span>' +
                        ' จำนวนผู้ที่อยู่ระหว่างรักษา ' +
                        this.critical +
                        ' คน' +
                        '</b>' +
                        '<br>';
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

    $('.th #infect').click(function() {
        alert('Handler for .click() called.');
    });
}

function load_worldAll_pieChart() {
    $.getJSON('./DATA/world/info/InfoAllCountry.json', function(data) {
        let items = [];
        items.push({
            name: 'เสียชีวิต',
            y: data['ทั่วโลก']['ตายสะสม'],
        }, {
            name: 'รักษาหาย',
            y: data['ทั่วโลก']['หายสะสม'],
        }, {
            name: 'กำลังรักษา',
            y: data['ทั่วโลก']['กำลังรักษา'],
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
                text: 'สัดส่วนผู้เสียชีวิต รักษาหาย และกำลังรักษา ทั่วโลก',
            },
            subtitle: {
                text: '<div class=row>\n' +
                    '<div class=col-md-0>\n' +
                    "<div class='blob'></div>" +
                    '</div>\n' +
                    "<div class='col-md-1'>\n" +
                    'ข้อมูลวันที่ ' +
                    data.LastUpdate +
                    '</div>\n' +
                    '</div>',
                useHTML: true,
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
                    data: [log10(val.well), log10(val.dead), log10(val.recovered), log10(val.confirm)],
                    pointPlacement: 'on',
                });
            }
        });
        wolrdRegionSpiderChart.subtitle.text = 'ข้อมูลวันที่ ' + data.lastupdate;
        //console.log(items);

        for (var i = 0; i < items.length; i++) {
            wolrdRegionSpiderChart.series[i] = items[i];
        }
        wolrdRegionSpiderChart.tooltip = {
            formatter: function() {
                return '<b>' + this.key + ':<br>' + `<span style="color:${this.color}">●</span>` +
                    this.series.name + ' ' + Math.round(Math.pow(10, this.y)) + ' คน' + '</b>' + '<br>';
            }
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
                        items.push(log10(value.totalcases));
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

        worldRegion_barChart.tooltip = {
            // pointFormat: '{series.name}: <b>{point.y:.0f} คน</b><br/>',
            formatter: function() {
                return '<b>' + this.key + ':<br>' + `<span style="color:${this.color}">●</span>` +
                    this.series.name + ' ' + Math.round(Math.pow(10, this.y)) + ' คน' + '</b>' + '<br>';
            }
        }
        new Highcharts.chart(worldRegion_barChart);
    });
}

function load_world_lineChart() {
    $.getJSON('./DATA/world/totalcaseโควิดทวีป.json', function(data) {
        //console.log(data);
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

function load_worldSubRegion_spiderChart() {
    $.getJSON(path+'InfoAllRegion.json', function(data) {
        //console.log(data.key);
        var items = [];
        $.each(data, function(key, val) {
            if (key != 'LastUpdate' && key != 'ทั่วโลก') {
                items.push({
                    name: key,
                    data: [
                        Math.log(val['หายสะสม']),
                        Math.log(val['ตายสะสม']),
                        Math.log(val['กำลังรักษา']),
                        Math.log(val['ติดเชื้อ']),
                    ],
                    pointPlacement: 'on',
                });
            }
        });
        wolrdSubRegionSpiderChart.subtitle.text =
            '<div class=row>\n' +
            '<div class=col-md-0>\n' +
            "<div class='blob'></div>" +
            '</div>\n' +
            "<div class='col-md-1'>\n" +
            'ข้อมูลวันที่ ' +
            data.LastUpdate +
            '</div>\n' +
            '</div>';
        //console.log(items);

        for (var i = 0; i < items.length; i++) {
            wolrdSubRegionSpiderChart.series[i] = items[i];
        }
        wolrdSubRegionSpiderChart.tooltip = {
            formatter: function() {
                return '<b>' + this.key + ':<br>' + `<span style="color:${this.color}">●</span>` +
                    this.series.name + ' ' + Math.round(Math.pow(10, this.y)) + ' คน' + '</b>' + '<br>';
            }
        }
        new Highcharts.chart(wolrdSubRegionSpiderChart);
    });
}