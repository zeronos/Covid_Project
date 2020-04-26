<?php include("libs/head.php"); ?>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>


<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">
    <div class="site-wrap">

        <?php include("libs/responsive.php"); ?>
        <?php include("libs/navbar.php"); ?>

        <!---------- การ์ด เสียชีวิต รักษาหาย ติดเชื้อ ---------->
        <div class="intro-section" id="home-section" style="background-color: #ccc;">
            <div class="container">

                <div class="row align-items-center">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1 class="mb-3">รายงานสถานการณ์ <span class="text" style="color: orange">Covid-19</span></h1>
                        <p class="lead mx-auto desc mb-5">ข้อมูล ณ วันที่ 19 เมษายน 2563</p>
                    </div>
                </div>

            </div>
        </div>

        <!---------- กราฟ ภาพรวมประเทศไทย ---------------->
        <div class="site-section" id="all-section">
            <div class="container">

                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8  section-heading">
                        <h2 class="heading mb-3">ภาพรวมประเทศไทย</h2>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quis consequatur cum neque?
                            Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                    </div>
                </div>

            </div>
            <div class="grid-container" style="padding: 2rem;">
                <div class="grid-item" id="grid1"></div>
                <div class="grid-item" id="grid2"></div>
            </div>
        </div>
        <hr>

        <!---------- กราฟ ติดเชื้อแยกตามกลุ่ม ---------------->
        <div class="site-section" id="group-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">

                        <h2 class="heading mb-3">ติดเชื้อแยกตามกลุ่ม</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-9"></div>
                <select class="selectpicker col-sm-2">
                    <option value="" selected>ศาสนา</option>
                    <option value="">อาชีพ</option>
                    <option value="">ภูมิภาค</option>
                    <option value="">อายุ</option>
                </select>
            </div>
            <div class="grid-container">
                <div class="start-grid-container grid-item" id="grid3" style="height: 560px;"></div>
                <div class="grid-item" id="grid4" style="height: 280px;"></div>
                <div class="grid-item" id="grid5" style="height: 280px;"></div>
            </div>
            <div class="grid-container">
                <div class="grid-item" id="grid6"></div>
                <div class="grid-item" id="grid7"></div>
            </div>
        </div>
        <hr>

        <!---------- กราฟ ติดเชื้อแยกตามพื้นที่ ---------------->
        <div class="site-section" id="area-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">
                        <h2 class="heading mb-3">ติดเชื้อแยกตามพื้นที่</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.
                        </p>
                    </div>
                </div>

            </div>
            <div class="grid-container2">
                <script src="https://code.highcharts.com/maps/highmaps.js"></script>
                <script src="https://code.highcharts.com/mapdata/countries/th/th-all.js"></script>
                <div id="grid8" style="height: 700px;"></div>
                <table id="th-table" class="table table-bordered table-striped table-hover table-data" style="margin-top: 72px;">
                    <thead>
                        <tr>
                            <th>จังหวัด</th>
                            <th>ติดเชื้อ</th>
                            <th>หาย</th>
                            <th>ตาย</th>
                        </tr>
                    </thead>

                </table>
            </div>
        </div>
        <hr>

        <!---------- กราฟ ความสัมพันธ์ ---------------->
        <div class="site-section" id="relation-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">
                        <h2 class="heading mb-3">ปัจจัยที่มีความสัมพันธ์</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-8"></div>

                <select class="selectpicker col-sm-2" id="choine-relation-section1">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>
                <select class="selectpicker col-sm-2" id="choine-relation-section2">
                    <option value="">1</option>
                    <option value="">2</option>
                    <option value="">3</option>
                    <option value="">4</option>
                </select>

            </div>
            <div class="grid-container3">
                <div class="grid-item" id="grid9"></div>
            </div>
        </div>
        <hr>

        <!---------- กราฟ ภาพรวมทั่วโลก ---------------->
        <div class="site-section" id="world-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">
                        <h2 class="heading mb-3">ภาพรวมทั่วโลก</h2>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind
                            texts.
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid-container3">

                <div class="row" data-aos="fade-up">
                    <div class="col-md-7">
                        <div id="world_map" style="width: 100%;height: 100%;"></div>
                    </div>
                    <div class="col-md-5">
                        <div class="table-responsive">
                            <table id="world_table" class="table table-bordered table-striped table-hover table-data" style="width:100%">
                                <thead>
                                    <tr>
                                        <th>ประเทศ</th>
                                        <th>เสียชีวิต</th>
                                        <th>กลับบ้าน</th>
                                        <th>รักษา</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>กก</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                        <td>1</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
                <br>

                <div class="row" data-aos="fade-up">
                    <div class="col-md-6">
                        <div id="container" style="width: 100%;height: 100%;"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="stack" style="width: 100%;height: 100%;"></div>
                    </div>
                </div>

            </div>
        </div>
        <hr>

        <?php include("libs/footer.php"); ?>

    </div>
    <?php include("libs/js.php"); ?>
</body>

</html>
<script>
    $(document).ready(function(){
        $.getJSON( "DATA/phase3/province.json", function( data ){
            var items = '';
            $.each(data, function(key, value){
                items += '<tr>';
                items += '<td>' +key+'</td>';
                items += '<td>' +value.dead+'</td>';
                items += '<td>' +value.healing+'</td>';
                items += '<td>' +value.cure+'</td>';
                items += '</tr>';
            });
            $('#th-table').append(items);
        });
    });
</script>
<script>
    document.getElementById("grid8").addEventListener("load", createMap());

    $(document).ready(function() {

        $('#choine-relation-section1').parent().attr('style', 'padding-left: 4rem;')
        $('#choine-relation-section2').parent().attr('style', 'padding-right: 4rem;')

        $("#table").DataTable({
            "dom": 'rtip'
        });

        $('#world_table').DataTable({
            "scrollY": "300px",
            "scrollCollapse": true,
            "paging": false,
            "searching": false
        });
        Highcharts.chart('grid1', {
            title: {
                text: ''
            },

            subtitle: {
                text: 'Source: thesolarfoundation.com'
            },

            yAxis: {
                title: {
                    text: 'Number of Employees'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2010 to 2017'
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
                    pointStart: 2010
                }
            },

            series: [{
                name: 'Installation',
                data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
            }, {
                name: 'Manufacturing',
                data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
            }, {
                name: 'Sales & Distribution',
                data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
            }, {
                name: 'Project Development',
                data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
            }, {
                name: 'Other',
                data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
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

        });
        Highcharts.chart('grid2', {
            title: {
                text: 'Solar Employment Growth by Sector, 2010-2016'
            },

            subtitle: {
                text: 'Source: thesolarfoundation.com'
            },

            yAxis: {
                title: {
                    text: 'Number of Employees'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2010 to 2017'
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
                    pointStart: 2010
                }
            },

            series: [{
                name: 'Installation',
                data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
            }, {
                name: 'Manufacturing',
                data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
            }, {
                name: 'Sales & Distribution',
                data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
            }, {
                name: 'Project Development',
                data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
            }, {
                name: 'Other',
                data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
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

        });
        Highcharts.chart('grid3', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Stacked column chart'
            },
            xAxis: {
                categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total fruit consumption'
                }
            },
            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
                shared: true
            },
            plotOptions: {
                column: {
                    stacking: 'percent'
                }
            },
            series: [{
                name: 'John',
                data: [5, 3, 4, 7, 2]
            }, {
                name: 'Jane',
                data: [2, 2, 3, 2, 1]
            }, {
                name: 'Joe',
                data: [3, 4, 4, 2, 5]
            }]
        });
        Highcharts.chart('grid4', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
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
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Chrome',
                    y: 61.41,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Internet Explorer',
                    y: 11.84
                }, {
                    name: 'Firefox',
                    y: 10.85
                }, {
                    name: 'Edge',
                    y: 4.67
                }, {
                    name: 'Safari',
                    y: 4.18
                }, {
                    name: 'Other',
                    y: 7.05
                }]
            }]
        });
        Highcharts.chart('grid5', {
            chart: {
                plotBackgroundColor: null,
                plotBorderWidth: null,
                plotShadow: false,
                type: 'pie'
            },
            title: {
                text: 'Browser market shares in January, 2018'
            },
            tooltip: {
                pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
            },
            accessibility: {
                point: {
                    valueSuffix: '%'
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
                name: 'Brands',
                colorByPoint: true,
                data: [{
                    name: 'Chrome',
                    y: 61.41,
                    sliced: true,
                    selected: true
                }, {
                    name: 'Internet Explorer',
                    y: 11.84
                }, {
                    name: 'Firefox',
                    y: 10.85
                }, {
                    name: 'Edge',
                    y: 4.67
                }, {
                    name: 'Safari',
                    y: 4.18
                }, {
                    name: 'Other',
                    y: 7.05
                }]
            }]
        });
        Highcharts.chart('grid6', {
            title: {
                text: ''
            },

            subtitle: {
                text: 'Source: thesolarfoundation.com'
            },

            yAxis: {
                title: {
                    text: 'Number of Employees'
                }
            },

            xAxis: {
                accessibility: {
                    rangeDescription: 'Range: 2010 to 2017'
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
                    pointStart: 2010
                }
            },

            series: [{
                name: 'Installation',
                data: [43934, 52503, 57177, 69658, 97031, 119931, 137133, 154175]
            }, {
                name: 'Manufacturing',
                data: [24916, 24064, 29742, 29851, 32490, 30282, 38121, 40434]
            }, {
                name: 'Sales & Distribution',
                data: [11744, 17722, 16005, 19771, 20185, 24377, 32147, 39387]
            }, {
                name: 'Project Development',
                data: [null, null, 7988, 12169, 15112, 22452, 34400, 34227]
            }, {
                name: 'Other',
                data: [12908, 5948, 8105, 11248, 8989, 11816, 18274, 18111]
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

        });
        Highcharts.chart('grid7', {

            chart: {
                polar: true,
                type: 'line'
            },

            accessibility: {
                description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.'
            },

            title: {
                text: 'Budget vs spending',
                x: -80
            },

            pane: {
                size: '80%'
            },

            xAxis: {
                categories: ['Sales', 'Marketing', 'Development', 'Customer Support',
                    'Information Technology', 'Administration'
                ],
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
                pointFormat: '<span style="color:{series.color}">{series.name}: <b>${point.y:,.0f}</b><br/>'
            },

            legend: {
                align: 'right',
                verticalAlign: 'middle',
                layout: 'vertical'
            },

            series: [{
                name: 'Allocated Budget',
                data: [43000, 19000, 60000, 35000, 17000, 10000],
                pointPlacement: 'on'
            }, {
                name: 'Actual Spending',
                data: [50000, 39000, 42000, 31000, 26000, 14000],
                pointPlacement: 'on'
            }],

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

        });
        Highcharts.chart('grid9', {
            chart: {
                type: 'scatter',
                zoomType: 'xy'
            },
            title: {
                text: 'Height Versus Weight of 507 Individuals by Gender'
            },
            subtitle: {
                text: 'Source: Heinz  2003'
            },
            xAxis: {
                title: {
                    enabled: true,
                    text: 'Height (cm)'
                },
                startOnTick: true,
                endOnTick: true,
                showLastLabel: true
            },
            yAxis: {
                title: {
                    text: 'Weight (kg)'
                }
            },
            legend: {
                layout: 'vertical',
                align: 'left',
                verticalAlign: 'top',
                x: 100,
                y: 70,
                floating: true,
                backgroundColor: Highcharts.defaultOptions.chart.backgroundColor,
                borderWidth: 1
            },
            plotOptions: {
                scatter: {
                    marker: {
                        radius: 5,
                        states: {
                            hover: {
                                enabled: true,
                                lineColor: 'rgb(100,100,100)'
                            }
                        }
                    },
                    states: {
                        hover: {
                            marker: {
                                enabled: false
                            }
                        }
                    },
                    tooltip: {
                        headerFormat: '<b>{series.name}</b><br>',
                        pointFormat: '{point.x} cm, {point.y} kg'
                    }
                }
            },
            series: [{
                name: 'Female',
                color: 'rgba(223, 83, 83, .5)',
                data: [
                    [161.2, 51.6],
                    [167.5, 59.0],
                    [159.5, 49.2],
                    [157.0, 63.0],
                    [155.8, 53.6],
                    [170.0, 59.0],
                    [159.1, 47.6],
                    [166.0, 69.8],
                    [176.2, 66.8],
                    [160.2, 75.2],
                    [172.5, 55.2],
                    [170.9, 54.2],
                    [172.9, 62.5],
                    [153.4, 42.0],
                    [160.0, 50.0],
                    [147.2, 49.8],
                    [168.2, 49.2],
                    [175.0, 73.2],
                    [157.0, 47.8],
                    [167.6, 68.8],
                    [159.5, 50.6],
                    [175.0, 82.5],
                    [166.8, 57.2],
                    [176.5, 87.8],
                    [170.2, 72.8],
                    [174.0, 54.5],
                    [173.0, 59.8],
                    [179.9, 67.3],
                    [170.5, 67.8],
                    [160.0, 47.0],
                    [154.4, 46.2],
                    [162.0, 55.0],
                    [176.5, 83.0],
                    [160.0, 54.4],
                    [152.0, 45.8],
                    [162.1, 53.6],
                    [170.0, 73.2],
                    [160.2, 52.1],
                    [161.3, 67.9],
                    [166.4, 56.6],
                    [168.9, 62.3],
                    [163.8, 58.5],
                    [167.6, 54.5],
                    [160.0, 50.2],
                    [161.3, 60.3],
                    [167.6, 58.3],
                    [165.1, 56.2],
                    [160.0, 50.2],
                    [170.0, 72.9],
                    [157.5, 59.8],
                    [167.6, 61.0],
                    [160.7, 69.1],
                    [163.2, 55.9],
                    [152.4, 46.5],
                    [157.5, 54.3],
                    [168.3, 54.8],
                    [180.3, 60.7],
                    [165.5, 60.0],
                    [165.0, 62.0],
                    [164.5, 60.3],
                    [156.0, 52.7],
                    [160.0, 74.3],
                    [163.0, 62.0],
                    [165.7, 73.1],
                    [161.0, 80.0],
                    [162.0, 54.7],
                    [166.0, 53.2],
                    [174.0, 75.7],
                    [172.7, 61.1],
                    [167.6, 55.7],
                    [151.1, 48.7],
                    [164.5, 52.3],
                    [163.5, 50.0],
                    [152.0, 59.3],
                    [169.0, 62.5],
                    [164.0, 55.7],
                    [161.2, 54.8],
                    [155.0, 45.9],
                    [170.0, 70.6],
                    [176.2, 67.2],
                    [170.0, 69.4],
                    [162.5, 58.2],
                    [170.3, 64.8],
                    [164.1, 71.6],
                    [169.5, 52.8],
                    [163.2, 59.8],
                    [154.5, 49.0],
                    [159.8, 50.0],
                    [173.2, 69.2],
                    [170.0, 55.9],
                    [161.4, 63.4],
                    [169.0, 58.2],
                    [166.2, 58.6],
                    [159.4, 45.7],
                    [162.5, 52.2],
                    [159.0, 48.6],
                    [162.8, 57.8],
                    [159.0, 55.6],
                    [179.8, 66.8],
                    [162.9, 59.4],
                    [161.0, 53.6],
                    [151.1, 73.2],
                    [168.2, 53.4],
                    [168.9, 69.0],
                    [173.2, 58.4],
                    [171.8, 56.2],
                    [178.0, 70.6],
                    [164.3, 59.8],
                    [163.0, 72.0],
                    [168.5, 65.2],
                    [166.8, 56.6],
                    [172.7, 105.2],
                    [163.5, 51.8],
                    [169.4, 63.4],
                    [167.8, 59.0],
                    [159.5, 47.6],
                    [167.6, 63.0],
                    [161.2, 55.2],
                    [160.0, 45.0],
                    [163.2, 54.0],
                    [162.2, 50.2],
                    [161.3, 60.2],
                    [149.5, 44.8],
                    [157.5, 58.8],
                    [163.2, 56.4],
                    [172.7, 62.0],
                    [155.0, 49.2],
                    [156.5, 67.2],
                    [164.0, 53.8],
                    [160.9, 54.4],
                    [162.8, 58.0],
                    [167.0, 59.8],
                    [160.0, 54.8],
                    [160.0, 43.2],
                    [168.9, 60.5],
                    [158.2, 46.4],
                    [156.0, 64.4],
                    [160.0, 48.8],
                    [167.1, 62.2],
                    [158.0, 55.5],
                    [167.6, 57.8],
                    [156.0, 54.6],
                    [162.1, 59.2],
                    [173.4, 52.7],
                    [159.8, 53.2],
                    [170.5, 64.5],
                    [159.2, 51.8],
                    [157.5, 56.0],
                    [161.3, 63.6],
                    [162.6, 63.2],
                    [160.0, 59.5],
                    [168.9, 56.8],
                    [165.1, 64.1],
                    [162.6, 50.0],
                    [165.1, 72.3],
                    [166.4, 55.0],
                    [160.0, 55.9],
                    [152.4, 60.4],
                    [170.2, 69.1],
                    [162.6, 84.5],
                    [170.2, 55.9],
                    [158.8, 55.5],
                    [172.7, 69.5],
                    [167.6, 76.4],
                    [162.6, 61.4],
                    [167.6, 65.9],
                    [156.2, 58.6],
                    [175.2, 66.8],
                    [172.1, 56.6],
                    [162.6, 58.6],
                    [160.0, 55.9],
                    [165.1, 59.1],
                    [182.9, 81.8],
                    [166.4, 70.7],
                    [165.1, 56.8],
                    [177.8, 60.0],
                    [165.1, 58.2],
                    [175.3, 72.7],
                    [154.9, 54.1],
                    [158.8, 49.1],
                    [172.7, 75.9],
                    [168.9, 55.0],
                    [161.3, 57.3],
                    [167.6, 55.0],
                    [165.1, 65.5],
                    [175.3, 65.5],
                    [157.5, 48.6],
                    [163.8, 58.6],
                    [167.6, 63.6],
                    [165.1, 55.2],
                    [165.1, 62.7],
                    [168.9, 56.6],
                    [162.6, 53.9],
                    [164.5, 63.2],
                    [176.5, 73.6],
                    [168.9, 62.0],
                    [175.3, 63.6],
                    [159.4, 53.2],
                    [160.0, 53.4],
                    [170.2, 55.0],
                    [162.6, 70.5],
                    [167.6, 54.5],
                    [162.6, 54.5],
                    [160.7, 55.9],
                    [160.0, 59.0],
                    [157.5, 63.6],
                    [162.6, 54.5],
                    [152.4, 47.3],
                    [170.2, 67.7],
                    [165.1, 80.9],
                    [172.7, 70.5],
                    [165.1, 60.9],
                    [170.2, 63.6],
                    [170.2, 54.5],
                    [170.2, 59.1],
                    [161.3, 70.5],
                    [167.6, 52.7],
                    [167.6, 62.7],
                    [165.1, 86.3],
                    [162.6, 66.4],
                    [152.4, 67.3],
                    [168.9, 63.0],
                    [170.2, 73.6],
                    [175.2, 62.3],
                    [175.2, 57.7],
                    [160.0, 55.4],
                    [165.1, 104.1],
                    [174.0, 55.5],
                    [170.2, 77.3],
                    [160.0, 80.5],
                    [167.6, 64.5],
                    [167.6, 72.3],
                    [167.6, 61.4],
                    [154.9, 58.2],
                    [162.6, 81.8],
                    [175.3, 63.6],
                    [171.4, 53.4],
                    [157.5, 54.5],
                    [165.1, 53.6],
                    [160.0, 60.0],
                    [174.0, 73.6],
                    [162.6, 61.4],
                    [174.0, 55.5],
                    [162.6, 63.6],
                    [161.3, 60.9],
                    [156.2, 60.0],
                    [149.9, 46.8],
                    [169.5, 57.3],
                    [160.0, 64.1],
                    [175.3, 63.6],
                    [169.5, 67.3],
                    [160.0, 75.5],
                    [172.7, 68.2],
                    [162.6, 61.4],
                    [157.5, 76.8],
                    [176.5, 71.8],
                    [164.4, 55.5],
                    [160.7, 48.6],
                    [174.0, 66.4],
                    [163.8, 67.3]
                ]

            }, {
                name: 'Male',
                color: 'rgba(119, 152, 191, .5)',
                data: [
                    [174.0, 65.6],
                    [175.3, 71.8],
                    [193.5, 80.7],
                    [186.5, 72.6],
                    [187.2, 78.8],
                    [181.5, 74.8],
                    [184.0, 86.4],
                    [184.5, 78.4],
                    [175.0, 62.0],
                    [184.0, 81.6],
                    [180.0, 76.6],
                    [177.8, 83.6],
                    [192.0, 90.0],
                    [176.0, 74.6],
                    [174.0, 71.0],
                    [184.0, 79.6],
                    [192.7, 93.8],
                    [171.5, 70.0],
                    [173.0, 72.4],
                    [176.0, 85.9],
                    [176.0, 78.8],
                    [180.5, 77.8],
                    [172.7, 66.2],
                    [176.0, 86.4],
                    [173.5, 81.8],
                    [178.0, 89.6],
                    [180.3, 82.8],
                    [180.3, 76.4],
                    [164.5, 63.2],
                    [173.0, 60.9],
                    [183.5, 74.8],
                    [175.5, 70.0],
                    [188.0, 72.4],
                    [189.2, 84.1],
                    [172.8, 69.1],
                    [170.0, 59.5],
                    [182.0, 67.2],
                    [170.0, 61.3],
                    [177.8, 68.6],
                    [184.2, 80.1],
                    [186.7, 87.8],
                    [171.4, 84.7],
                    [172.7, 73.4],
                    [175.3, 72.1],
                    [180.3, 82.6],
                    [182.9, 88.7],
                    [188.0, 84.1],
                    [177.2, 94.1],
                    [172.1, 74.9],
                    [167.0, 59.1],
                    [169.5, 75.6],
                    [174.0, 86.2],
                    [172.7, 75.3],
                    [182.2, 87.1],
                    [164.1, 55.2],
                    [163.0, 57.0],
                    [171.5, 61.4],
                    [184.2, 76.8],
                    [174.0, 86.8],
                    [174.0, 72.2],
                    [177.0, 71.6],
                    [186.0, 84.8],
                    [167.0, 68.2],
                    [171.8, 66.1],
                    [182.0, 72.0],
                    [167.0, 64.6],
                    [177.8, 74.8],
                    [164.5, 70.0],
                    [192.0, 101.6],
                    [175.5, 63.2],
                    [171.2, 79.1],
                    [181.6, 78.9],
                    [167.4, 67.7],
                    [181.1, 66.0],
                    [177.0, 68.2],
                    [174.5, 63.9],
                    [177.5, 72.0],
                    [170.5, 56.8],
                    [182.4, 74.5],
                    [197.1, 90.9],
                    [180.1, 93.0],
                    [175.5, 80.9],
                    [180.6, 72.7],
                    [184.4, 68.0],
                    [175.5, 70.9],
                    [180.6, 72.5],
                    [177.0, 72.5],
                    [177.1, 83.4],
                    [181.6, 75.5],
                    [176.5, 73.0],
                    [175.0, 70.2],
                    [174.0, 73.4],
                    [165.1, 70.5],
                    [177.0, 68.9],
                    [192.0, 102.3],
                    [176.5, 68.4],
                    [169.4, 65.9],
                    [182.1, 75.7],
                    [179.8, 84.5],
                    [175.3, 87.7],
                    [184.9, 86.4],
                    [177.3, 73.2],
                    [167.4, 53.9],
                    [178.1, 72.0],
                    [168.9, 55.5],
                    [157.2, 58.4],
                    [180.3, 83.2],
                    [170.2, 72.7],
                    [177.8, 64.1],
                    [172.7, 72.3],
                    [165.1, 65.0],
                    [186.7, 86.4],
                    [165.1, 65.0],
                    [174.0, 88.6],
                    [175.3, 84.1],
                    [185.4, 66.8],
                    [177.8, 75.5],
                    [180.3, 93.2],
                    [180.3, 82.7],
                    [177.8, 58.0],
                    [177.8, 79.5],
                    [177.8, 78.6],
                    [177.8, 71.8],
                    [177.8, 116.4],
                    [163.8, 72.2],
                    [188.0, 83.6],
                    [198.1, 85.5],
                    [175.3, 90.9],
                    [166.4, 85.9],
                    [190.5, 89.1],
                    [166.4, 75.0],
                    [177.8, 77.7],
                    [179.7, 86.4],
                    [172.7, 90.9],
                    [190.5, 73.6],
                    [185.4, 76.4],
                    [168.9, 69.1],
                    [167.6, 84.5],
                    [175.3, 64.5],
                    [170.2, 69.1],
                    [190.5, 108.6],
                    [177.8, 86.4],
                    [190.5, 80.9],
                    [177.8, 87.7],
                    [184.2, 94.5],
                    [176.5, 80.2],
                    [177.8, 72.0],
                    [180.3, 71.4],
                    [171.4, 72.7],
                    [172.7, 84.1],
                    [172.7, 76.8],
                    [177.8, 63.6],
                    [177.8, 80.9],
                    [182.9, 80.9],
                    [170.2, 85.5],
                    [167.6, 68.6],
                    [175.3, 67.7],
                    [165.1, 66.4],
                    [185.4, 102.3],
                    [181.6, 70.5],
                    [172.7, 95.9],
                    [190.5, 84.1],
                    [179.1, 87.3],
                    [175.3, 71.8],
                    [170.2, 65.9],
                    [193.0, 95.9],
                    [171.4, 91.4],
                    [177.8, 81.8],
                    [177.8, 96.8],
                    [167.6, 69.1],
                    [167.6, 82.7],
                    [180.3, 75.5],
                    [182.9, 79.5],
                    [176.5, 73.6],
                    [186.7, 91.8],
                    [188.0, 84.1],
                    [188.0, 85.9],
                    [177.8, 81.8],
                    [174.0, 82.5],
                    [177.8, 80.5],
                    [171.4, 70.0],
                    [185.4, 81.8],
                    [185.4, 84.1],
                    [188.0, 90.5],
                    [188.0, 91.4],
                    [182.9, 89.1],
                    [176.5, 85.0],
                    [175.3, 69.1],
                    [175.3, 73.6],
                    [188.0, 80.5],
                    [188.0, 82.7],
                    [175.3, 86.4],
                    [170.5, 67.7],
                    [179.1, 92.7],
                    [177.8, 93.6],
                    [175.3, 70.9],
                    [182.9, 75.0],
                    [170.8, 93.2],
                    [188.0, 93.2],
                    [180.3, 77.7],
                    [177.8, 61.4],
                    [185.4, 94.1],
                    [168.9, 75.0],
                    [185.4, 83.6],
                    [180.3, 85.5],
                    [174.0, 73.9],
                    [167.6, 66.8],
                    [182.9, 87.3],
                    [160.0, 72.3],
                    [180.3, 88.6],
                    [167.6, 75.5],
                    [186.7, 101.4],
                    [175.3, 91.1],
                    [175.3, 67.3],
                    [175.9, 77.7],
                    [175.3, 81.8],
                    [179.1, 75.5],
                    [181.6, 84.5],
                    [177.8, 76.6],
                    [182.9, 85.0],
                    [177.8, 102.5],
                    [184.2, 77.3],
                    [179.1, 71.8],
                    [176.5, 87.9],
                    [188.0, 94.3],
                    [174.0, 70.9],
                    [167.6, 64.5],
                    [170.2, 77.3],
                    [167.6, 72.3],
                    [188.0, 87.3],
                    [174.0, 80.0],
                    [176.5, 82.3],
                    [180.3, 73.6],
                    [167.6, 74.1],
                    [188.0, 85.9],
                    [180.3, 73.2],
                    [167.6, 76.3],
                    [183.0, 65.9],
                    [183.0, 90.9],
                    [179.1, 89.1],
                    [170.2, 62.3],
                    [177.8, 82.7],
                    [179.1, 79.1],
                    [190.5, 98.2],
                    [177.8, 84.1],
                    [180.3, 83.2],
                    [180.3, 83.2]
                ]
            }]
        });
    });

    function createMap() {
        // Prepare demo data
        // Data is joined to map using value of 'hc-key' property by default.
        // See API docs for 'joinBy' for more info on linking data and map.
        var myObj = [];
        var items = [];
        $.getJSON( "DATA/phase3/province.json", function( data ) {
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
        // Create the chart
        Highcharts.mapChart('grid8', {
            chart: {
                map: 'countries/th/th-all'
            },

            title: {
                text: 'Highmaps basic demo'
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
                max: 1000,
                stops: [[0, '#F1EEF6'], [0.5, '#900037'], [1, '#500007']],
            },

            series: [{
                data: items,
                name: 'Random data',
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
    }

    document.addEventListener('DOMContentLoaded', function() {
        var myChart = Highcharts.chart('container', {
            chart: {
                type: 'bar'
            },
            title: {
                text: 'Fruit Consumption'
            },
            xAxis: {
                categories: ['Apples', 'Bananas', 'Oranges']
            },
            yAxis: {
                title: {
                    text: 'Fruit eaten'
                }
            },
            series: [{
                name: 'Jane',
                data: [1, 0, 4]
            }, {
                name: 'John',
                data: [5, 7, 3]
            }]
        });

        var myChart2 = Highcharts.chart('stack', {
            chart: {
                type: 'column'
            },
            title: {
                text: 'Stacked column chart'
            },
            xAxis: {
                categories: ['Apples', 'Oranges', 'Pears', 'Grapes', 'Bananas']
            },
            yAxis: {
                min: 0,
                title: {
                    text: 'Total fruit consumption'
                }
            },
            tooltip: {
                pointFormat: '<span style="color:{series.color}">{series.name}</span>: <b>{point.y}</b> ({point.percentage:.0f}%)<br/>',
                shared: true
            },
            plotOptions: {
                column: {
                    stacking: 'percent'
                }
            },
            series: [{
                name: 'John',
                data: [5, 3, 4, 7, 2]
            }, {
                name: 'Jane',
                data: [2, 2, 3, 2, 1]
            }, {
                name: 'Joe',
                data: [3, 4, 4, 2, 5]
            }]

        });

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
                    text: 'Zoom in on country by double click'
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
