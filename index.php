<?php include("libs/head.php"); ?>

<body data-spy="scroll" data-target=".site-navbar-target" data-offset="300">

    <div class="site-wrap">

        <?php include("libs/responsive.php"); ?>
        <?php include("libs/navbar.php"); ?> 
        

        <!---------- การ์ด เสียชีวิต รักษาหาย ติดเชื้อ ---------->
        <div class="intro-section" id="home-section" style="background-color: #ccc;">
            <div class="container">
                <div id="card" class="row align-items-center" style="padding-top: 13%;">
                    <div class="col-lg-12 mx-auto text-center" data-aos="fade-up">
                        <h1 class="mb-3">รายงานสถานการณ์ <span class="text" style="color: orange">Covid-19</span></h1>
                        <p class="lead mx-auto desc mb-5">ข้อมูล ณ วันที่     19 เมษายน 2563</p>
                    </div>
                    <div class="card bg-danger text-white" style="width: 100%;height: 200px;font-size:50px;">
                        <div class="card-body text-center">
                            <p class="card-text" id="text1"></p>
                        </div>
                    </div>
                    <div class="card-columns text-white" style="width: 100%;font-size:30px;">
                        <div class="card bg-warning" style="height: 200px">
                            <div class="card-body text-center">
                                <p class="card-text" id="text2" style="margin-top: 10%"></p>
                            </div>
                        </div>
                        <div class="card bg-success">
                            <div class="card-body text-center" style="height: 200px">
                                <p class="card-text" id="text3" style="margin-top: 10%"></p>
                            </div>
                        </div>
                        <div class="card bg-primary">
                            <div class="card-body text-center" style="height: 200px">
                                <p class="card-text" id="text4" style="margin-top: 10%"></p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        

        <!---------- กราฟ ภาพรวมประเทศไทย ---------------->
        <div class="site-section" id="all-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5">
                    <div class="col-md-8  section-heading">
                        <br><br>
                        <h2 class="heading mb-3">ภาพรวมประเทศไทย</h2>
                        <p></p>
                    </div>

                </div>

            </div>
            <div class="grid-container">
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
                        <br><br>
                        <h2 class="heading mb-3">ติดเชื้อแยกตามกลุ่ม</h2>
                        <p>
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-9"></div>
                <select class="selectpicker col-sm-2" id="phase2_select">
                    <option value="gender" selected>เพศ</option>
                    <option value="job">อาชีพ</option>
                    <option value="risk">กลุ่มเสี่ยง</option>
                    <!-- <option value="region">ภูมิภาค</option> -->
                    <option value="age">อายุ</option>
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
                        <br><br>
                        <h2 class="heading mb-3">ติดเชื้อแยกตามพื้นที่</h2>
                        <p>
                        </p>
                    </div>
                </div>

            </div>
            <div class="grid-container2">
                <div id="grid8" style="height: 700px;"></div>
                <table id="table" class="table table-bordered table-striped table-hover table-data" style="margin-top: 72px;">

                </table>
            </div>
            <div class="container">
                <div id="grid10" style="height: 500px;"></div>
                </div>
        </div>
        <hr>

        <!---------- กราฟ ความสัมพันธ์ ---------------->
        <div class="site-section" id="relation-section">
            <div class="container">
                <div class="row justify-content-center text-center mb-5" data-aos="fade-up">
                    <div class="col-md-8  section-heading">
                        <br><br>
                        <h2 class="heading mb-3">ปัจจัยที่มีความสัมพันธ์</h2>
                        <p>
                        </p>
                    </div>
                </div>

            </div>
            <div class="row">
                <div class="col-sm-8"></div>
<p id="demo"></p>
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
                        <br><br>
                        <h2 class="heading mb-3">ภาพรวมทั่วโลก</h2>
                        <p>
                        </p>
                    </div>
                </div>
            </div>
            <div class="grid-container3">
                <div class="row" data-aos="fade-up">
                    <div class="col-md-6">
                        <div id="world_map" style="width: 100%;height: 100%;"></div>
                    </div>
                    <div class="col-md-6">
                        <div class="table-responsive">
                            <table id="world_table" class="table table-bordered table-striped table-hover table-data" style="width:100%">
                                
                            </table>
                        </div>
                    </div>
                </div>
                <br>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-6">
                        <div id="worldAll_pieChart" style="height: 280px;"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="worldRegion_spiderChart" style="width: 100%;height: 100%;"></div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-6">
                        <div id="world_barChart" style="height: 100%;"></div>
                    </div>
                    <div class="col-md-6">
                        <div id="world_lineChart" style="height: 100%;"></div>
                    </div>
                </div>
                <div class="row" data-aos="fade-up">
                    <div class="col-md-4">
                        <div id="worldDaed_lineChart" style="height: 100%;"></div>
                    </div>
                    <div class="col-md-4">
                        <div id="worldNewInfect_lineChart" style="height: 100%;"></div>
                    </div>
                    <div class="col-md-4">
                        <div id="worldRecover_lineChart" style="height: 100%;"></div>
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

<script src="./asset/js/variable_chart.js"></script>

<script>
    document.getElementById("card").addEventListener("load", loadCard());
    document.getElementById("grid1").addEventListener("load", loadGrid1());
    document.getElementById("grid2").addEventListener("load", loadGrid2());
    document.getElementById("grid3").addEventListener("load", loadGrid3());
    document.getElementById("grid4").addEventListener("load", loadGrid4());
    document.getElementById("grid5").addEventListener("load", loadGrid5());
    document.getElementById("grid6").addEventListener("load", loadGrid6());
    document.getElementById("grid7").addEventListener("load", loadGrid7());
    document.getElementById("grid8").addEventListener("load", loadGrid8());
    document.getElementById("grid9").addEventListener("load", loadGrid9());
    document.getElementById("grid10").addEventListener("load", loadGrid10());

    document.getElementById("world_map").addEventListener("load", load_World_map());
    document.getElementById("worldAll_pieChart").addEventListener("load", load_worldAll_pieChart());
    document.getElementById("worldRegion_spiderChart").addEventListener("load", load_worldRegion_spiderChart());
    document.getElementById("world_barChart").addEventListener("load", load_world_barChart());
    document.getElementById("world_lineChart").addEventListener("load", load_world_lineChart());

    document.getElementById("worldDaed_lineChart").addEventListener("load", load_worldDaed_lineChart());
    document.getElementById("worldNewInfect_lineChart").addEventListener("load", load_worldNewInfect_lineChart());
    document.getElementById("worldRecover_lineChart").addEventListener("load", load_worldRecover_lineChart());


    $(document).ready(function() {

        $('#choine-relation-section1').parent().attr('style', 'padding-left: 4rem;')
        $('#choine-relation-section2').parent().attr('style', 'padding-right: 4rem;')
    });

    $('#phase2_select').change(function() {
        let select = $(this).val();  

        grid4.series = [{}];
        grid5.series = [{}];
        grid6.series = [{}];
        grid7.series = [{}];

        if (select == "gender") {
            loadGrid3();
            loadGrid4();
            loadGrid5();
            loadGrid6();
            loadGrid7();
        } else if (select == "job") {

            // grid3
            $.getJSON('./DATA/phase2/job/career.json', function(data) {
                let json = [];
                let infect = [];
                let dead = [];
                $.each(data.data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push(val.ชื่อ);
                        infect.push(val.ติดเชื้อ);
                        dead.push(val.ตาย);
                    }
                });
                grid3.series[0].data = infect;
                grid3.series[0].name = "ติดเชื้อ";
                grid3.series[0].color = 'rgba(165,170,217,1)';
                grid3.series[0].pointPadding = 0.1;
                grid3.series[0].pointPlacement = -0.2;
                grid3.series[1].data = dead;
                grid3.series[1].name = "ตาย";
                grid3.series[1].color = 'rgba(248,161,63,1)';
                grid3.series[1].pointPadding = 0.2;
                grid3.series[1].pointPlacement = -0.2;
                grid3.xAxis.categories = json;

                
                new Highcharts.chart(grid3);
            });

            // grid4
            $.getJSON('./DATA/phase2/job/career.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                for (var i = 0; i < data.data.length; i++) {
                    json.push({
                        name: data.data[i].ชื่อ,
                        y: data.data[i].ติดเชื้อ
                    });
                }
                grid4.series[0].data = json;
                grid4.subtitle = {
                    text: "ข้อมูลวันที่ 19/04/2020"
                }
                new Highcharts.chart(grid4);
            });

            // grid5
            $.getJSON('./DATA/phase2/job/career.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                for (let i = 0; i < data.data.length; i++) {
                    json.push({
                        name: data.data[i].ชื่อ,
                        y: data.data[i].ตาย
                    });
                }
                grid5.series[0].data = json;
                grid5.subtitle = {
                    text: "ข้อมูลวันที่ 19/04/2020"
                }
                new Highcharts.chart(grid5);
            });

            // grid6
            $.getJSON('./DATA/phase2/job/jobNewInfectDaily.json', function(data) {
                //console.log(data.update);
                let json = [];
                let i = 0;
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data.Data, function(key, val) {
                    json.push({
                        name: key,
                        data: val
                    });
                });
                grid6.series[0] = json[0];
                grid6.series[1] = json[1];
                grid6.series[2] = json[2];
                grid6.series[3] = json[3];
                grid6.series[4] = json[4];
                grid6.series[5] = json[5];
                grid6.series[6] = json[6];
                grid6.series[7] = json[7];
                grid6.xAxis.categories = data.LabelText;
                new Highcharts.chart(grid6);
            });

            // grid7
            $.getJSON('./DATA/phase2/job/career.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data.data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push({
                            name: val.ชื่อ,
                            data: [val.ติดเชื้อ,0,0],
                            pointPlacement: 'on'
                        });
                    }
                });

                grid7.series[0] = json[0];
                grid7.series[1] = json[1];
                grid7.series[2] = json[2];
                grid7.series[3] = json[3];
                grid7.series[4] = json[4];
                grid7.series[5] = json[5];
                new Highcharts.chart(grid7);
            });


        } else if (select == "risk") {

            // grid3
            $.getJSON('./DATA/phase2/risk/risk.json', function(data) {
                let json = [];
                let infect = [];
                let dead = [];
                $.each(data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push(key);
                        infect.push(val.ติดเชื้อ);
                        dead.push(val.ตาย);
                    }
                });
                grid3.series[0].data = infect;
                grid3.series[0].name = "ติดเชื้อ";
                grid3.series[0].color = 'rgba(165,170,217,1)';
                grid3.series[0].pointPadding = 0.1;
                grid3.series[0].pointPlacement = -0.2;
                grid3.series[1].data = dead;
                grid3.series[1].name = "ตาย";
                grid3.series[1].color = 'rgba(248,161,63,1)';
                grid3.series[1].pointPadding = 0.2;
                grid3.series[1].pointPlacement = -0.2;
                grid3.xAxis.categories = json;
                new Highcharts.chart(grid3);
            });

            // grid4
            $.getJSON('./DATA/phase2/risk/risk.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push({
                            name: key,
                            y: val.ติดเชื้อ
                        });
                    }
                });
                grid4.series[0].data = json;
                grid4.subtitle = {
                    text: "ข้อมูลวันที่ " + data.Last_Update
                }
                new Highcharts.chart(grid4);
            });

            // grid5
            $.getJSON('./DATA/phase2/risk/risk.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push({
                            name: key,
                            y: val.ตาย
                        });
                    }
                });
                grid5.series[0].data = json;
                grid5.subtitle = {
                    text: "ข้อมูลวันที่ " + data.Last_Update
                }
                new Highcharts.chart(grid5);
            });

            // grid6
            $.getJSON('./DATA/phase2/risk/riskInfectDaily.json', function(data) {
                //console.log(data.update);
                let json = [];
                let i = 0;
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data.Data, function(key, val) {
                    json.push({
                        name: key,
                        data: val
                    });
                });
                grid6.series[0] = json[0];
                grid6.series[1] = json[1];
                grid6.series[2] = json[2];
                grid6.series[3] = json[3];
                grid6.series[4] = json[4];
                grid6.series[5] = json[5];
                grid6.series[6] = json[6];
                grid6.series[7] = json[7];
                grid6.series[8] = json[8];
                grid6.series[9] = json[9];
                grid6.series[10] = json[10];
                grid6.series[11] = json[11];
                grid6.xAxis.categories = data.LabelText;
                new Highcharts.chart(grid6);
            });

            // grid7
            $.getJSON('./DATA/phase2/risk/risk.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push({
                            name: key,
                            data: [val.ติดเชื้อ,0, val.ตาย],
                            pointPlacement: 'on'
                        });
                    }
                });

                grid7.series[0] = json[0];
                grid7.series[1] = json[1];
                grid7.series[2] = json[2];
                grid7.series[3] = json[3];
                grid7.series[4] = json[4];
                grid7.series[5] = json[5];
                new Highcharts.chart(grid7);
            });

        } else if (select == "age") {
        
            // grid3
            $.getJSON('./DATA/phase2/age/age.json', function(data) {
                let json = [];
                let infect = [];
                let dead = [];
                $.each(data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push(key);
                        infect.push(val.ติดเชื้อ);
                        dead.push(val.ตาย);
                    }
                });
                grid3.series[0].data = infect;
                grid3.series[0].name = "ติดเชื้อ";
                grid3.series[0].color = 'rgba(165,170,217,1)';
                grid3.series[0].pointPadding = 0.1;
                grid3.series[0].pointPlacement = -0.2;
                grid3.series[1].data = dead;
                grid3.series[1].name = "ตาย";
                grid3.series[1].color = 'rgba(248,161,63,1)';
                grid3.series[1].pointPadding = 0.2;
                grid3.series[1].pointPlacement = -0.2;
                grid3.xAxis.categories = json;
                new Highcharts.chart(grid3);
            });

            // grid4
            $.getJSON('./DATA/phase2/age/age.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push({
                            name: key,
                            y: val.ติดเชื้อ
                        });
                    }
                });
                grid4.series[0].data = json;
                grid4.subtitle = {
                    text: "ข้อมูลวันที่ " + data.Last_Update
                }
                new Highcharts.chart(grid4);
            });

            // grid5
            $.getJSON('./DATA/phase2/age/age.json', function(data) {
                //console.log(data.update);
                let json = [];
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data, function(key, val) {
                    if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                        json.push({
                            name: key,
                            y: val.ตาย
                        });
                    }
                });
                grid5.series[0].data = json;
                grid5.subtitle = {
                    text: "ข้อมูลวันที่ " + data.Last_Update
                }
                new Highcharts.chart(grid5);
            });

            // grid6
            $.getJSON('./DATA/phase2/age/ageInfectedDaily.json', function(data) {
                //console.log(data.update);
                let json = [];
                let i = 0;
                //ต้องดูว่าแต่ละกราฟใช้ format ไหน
                $.each(data.Data, function(key, val) {
                    json.push({
                        name: key,
                        data: val
                    });
                });
                grid6.series[0] = json[0];
                grid6.series[1] = json[1];
                grid6.series[2] = json[2];
                grid6.series[3] = json[3];
                grid6.series[4] = json[4];
                grid6.series[5] = json[5];
                grid6.series[6] = json[6];
                grid6.series[7] = json[7];
                grid6.series[8] = json[8];
                grid6.series[9] = json[9];
                grid6.xAxis.categories = data.LabelText;
                new Highcharts.chart(grid6);
            });

            // grid7
            $.getJSON('./DATA/phase2/age/age.json', function(data) {
                //console.log(data.update);
                let json = [];
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
                grid7.series[0] = json[0];
                grid7.series[1] = json[1];
                grid7.series[2] = json[2];
                grid7.series[3] = json[3];
                grid7.series[4] = json[4];
                grid7.series[5] = json[5];
                grid7.series[6] = json[6];
                grid7.series[7] = json[7];
                grid7.series[8] = json[8];
                grid7.series[9] = json[9];
                new Highcharts.chart(grid7);
            });
        }
    });

    function loadCard() {
        $.getJSON('./DATA/phase2/age/age.json', function(data) {
            document.getElementById("text1").innerHTML = "ติดเชื้อสะสม" + "<br>" +  formatNumber(data.Toltal["ติดเชื้อ"]) + " คน";
            document.getElementById("text2").innerHTML = "เสียชีวิต" + "<br>" + formatNumber(data.Toltal["ตาย"]) + " คน";
            document.getElementById("text3").innerHTML = "หาย" + "<br>" + formatNumber(data.Toltal["หาย"])+ " คน";
            document.getElementById("text4").innerHTML = "รักษา" + "<br>" + formatNumber(data.Toltal["รักษา"])+ " คน";
        });
    }

    function loadGrid1() {
        $.getJSON("DATA/phase1/ผู้ติดเชื้อสะสมในแต่ละวัน.json", function(data) {
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

            grid1.series = DATA;
            grid1.xAxis.categories = data.date;
            grid1.subtitle = {
                text: "ข้อมูลวันที่ " + data.UpdateDate
            }
            new Highcharts.chart('grid1', grid1);

        });
    }

    function loadGrid2() {
        $.getJSON("DATA/phase1/ผู้ติดเชื้อสะสมในแต่ละวัน.json", function(data) {
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
                    name: "ติดเชื้อ",
                    data: infect
                },
                {
                    name: "ตาย",
                    data: death
                },
                {
                    name: "รักษา",
                    data: hospital
                },
                {
                    name: "หาย",
                    data: well
                }
            ]


            grid2.series = DATA;
            grid2.xAxis.categories = data.date;
            grid2.subtitle = {
                text: "ข้อมูลวันที่ " + data.UpdateDate
            }
            new Highcharts.chart('grid2', grid2);

        });
    }

    function loadGrid3() {
        $.getJSON('./DATA/phase2/gender/gender.json', function(data) {
            let json = [];
            let infect = [];
            let dead = [];
            $.each(data, function(key, val) {
                if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                    json.push(key);
                    infect.push(val.ติดเชื้อ);
                    dead.push(val.ตาย);
                }
            });
            grid3.series[0].data = infect;
            grid3.series[0].name = "ติดเชื้อ";
            grid3.series[0].color = 'rgba(165,170,217,1)';
            grid3.series[0].pointPadding = 0.1;
            grid3.series[0].pointPlacement = -0.2;
            grid3.series[1].data = dead;
            grid3.series[1].name = "ตาย";
            grid3.series[1].color = 'rgba(248,161,63,1)';
            grid3.series[1].pointPadding = 0.2;
            grid3.series[1].pointPlacement = -0.2;
            grid3.xAxis.categories = json;
            new Highcharts.chart(grid3);
        });
    }

    function loadGrid4() {
        $.getJSON('./DATA/phase2/gender/gender.json', function(data) {
            //console.log(data.update);
            let json = [];
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            $.each(data, function(key, val) {
                if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                    json.push({
                        name: key,
                        y: val.ติดเชื้อ
                    });
                }
            });
            grid4.series[0].data = json;
            grid4.subtitle = {
                text: "ข้อมูลวันที่ " + data.Last_Update
            }
            new Highcharts.chart(grid4);
        });
    }

    function loadGrid5() {
        $.getJSON('./DATA/phase2/gender/gender.json', function(data) {
            //console.log(data.update);
            let json = [];
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            $.each(data, function(key, val) {
                if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                    json.push({
                        name: key,
                        y: val.ตาย
                    });
                }
            });
            grid5.series[0].data = json;
            grid5.subtitle = {
                text: "ข้อมูลวันที่ " + data.Last_Update
            }
            new Highcharts.chart(grid5);
        });
    }

    function loadGrid6() {
    
        $.getJSON('./DATA/phase2/gender/GenderNewInfectDaily.json', function(data) {
            //console.log(data.update);
            let json = [];
            let i = 0;
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            $.each(data.Data, function(key, val) {
                json.push({
                    name: key,
                    data: val.NewInfect
                });
            });
            grid6.series[0] = json[0];
            grid6.series[1] = json[1];
            grid6.series[2] = json[2];
            grid6.xAxis.categories = data.LabelText;
            new Highcharts.chart(grid6);
        });
    } 

    function loadGrid7() {
        $.getJSON('./DATA/phase2/gender/gender.json', function(data) {
            //console.log(data.update);
            let json = [];
            //ต้องดูว่าแต่ละกราฟใช้ format ไหน
            $.each(data, function(key, val) {
                if (key != "Last Update" && key != "Unit" && key != "Toltal") {
                    json.push({
                        name: key,
                        data: [val.ติดเชื้อ, 0, 0],
                        pointPlacement: 'on'
                    });
                }
            });
            grid7.series[0] = json[0];
            grid7.series[1] = json[1];
            grid7.series[2] = json[2];
            new Highcharts.chart(grid7);
        });
    }


    function loadGrid8() {
        $.getJSON("DATA/phase3/province.json", function(data) {
            let maxIn = [];
            let items = [];
            let table = '<thead>\n' + '<tr>\n' + '<th>จังหวัด</th>\n' + '<th>ติดเชื้อ</th>\n' + '<th>หาย</th>\n' + '<th>ตาย</th>\n' + '</tr>\n' + ' </thead>\n';

            $.each(data, function(key, value) {
                if (key != "lastupdate") {
                    table += '<tr>';
                    table += '<td>' + key + '</td>';
                    table += '<td style="text-align:right">' + numberWithCommas(value.infect) + '</td>';
                    table += '<td style="text-align:right">' + numberWithCommas(value.healing) + '</td>';
                    table += '<td style="text-align:right">' + numberWithCommas(value.dead) + '</td>';
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

            $.each(data, function(key, value) {
                if(key != "lastupdate"){
                maxIn.push(value.infect);
                document.getElementById("demo").innerHTML=data.bangkok["population"];
                }
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
                    max: Math.max.apply(Math, maxIn),
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
                }],
                tooltip: {
                headerFormat: '',
                pointFormatter: function() {
                    var string = '<b>'+this.name + ':<br>';
                    string += '<span style="color:#8a1900">●</span>'+' ติดเชื้อ '+this.value+' คน'+'</b>'+'<br>';
                    return string;
                }
        },
            });
        });
    }

    function loadGrid9() {
        Highcharts.chart('grid9', {
            chart: {
                type: 'scatter',
                zoomType: 'xy'
            },
            title: {
                text: ''
            },
            subtitle: {
                text: ''
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
                    [180.3, 83.2]
                ]
            }]
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
            })
        }
    })
    let table = '<thead>\n' + '<tr>\n' + '<th>ประเทศ</th>\n' + '<th>ติดเชื้อ</th>\n' + '<th>เสียชีวิต</th>\n' + '<th>หาย</th>\n' +'<th>รักษา</th>\n'+ '</tr>\n' + ' </thead>\n';
            table += '<tbody>\n'
            $.each(data, function(key, value) {
                if (key != "lastupdate") {
                    table += '<tr>';
                    table += '<td>' + key + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.infect) + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.dead) + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.recovered) + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.critical) + '</td>';
                    table += '</tr>';
                }
            });
            table += '</tbody>'
            $('#world_table').append(table);

            $("#world_table").DataTable({
                "dom": 'rtip',
                "scrollY": "300px",
                "scrollX": "300px",
                "scrollCollapse": true,
                "paging": false,
                "searching": false
            });

    //console.log(items);
    $('#world_map').highcharts('Map', {
        title: {
            text: 'World'
        },
        subtitle:{
            text: 'ข้อมูลวันที่ '+ data.lastupdate
        },
        mapNavigation: {
            enabled: true,
            enableDoubleClickZoomTo: true
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
                var string = '<b>'+this.name + ':<br>';
                string += '<span style="color:#8a1900">●</span>'+' ติดเชื้อ '+this.value+' คน'+'</b>'+'<br>';
                string += '<span style="color:#e1e1db">●</span>'+' ตาย '+this.dead+' คน'+'</b>'+'<br>';
                string += '<span style="color:#02fd45">●</span>'+' หาย '+this.recovered+' คน'+'</b>'+'<br>';
                string += '<span style="color:#feff7a">●</span>'+' รักษา '+this.critical+' คน'+'</b>'+'<br>';
                return string;
            }
        },
        series: [{
            data: items,
            joinBy: ['iso-a2', 'code'],
            mapData: Highcharts.maps['custom/world'],
            states: {
                hover: {
                    color: '#b7c1f2'
                }
            },
            dataLabels: {
                enabled: false,
                format: '{point.name}'
            },
            
        }]
    });
});
}

function load_worldAll_pieChart() {
$.getJSON('./DATA/world/globalAll.json', function(data) {
    let items = [];
    items.push({
        name: "ตาย",
        y: data.Dead.sum
    }, {
        name: "หาย",
        y: data.recover.sum
    }, {
        name: "ติดเชื้อ",
        y: data.infect.sum
    }, )
    //console.log(items)

    // Build the chart
    Highcharts.chart('worldAll_pieChart', {
        chart: {
            plotBackgroundColor: null,
            plotBorderWidth: null,
            plotShadow: false,
            type: 'pie'
        },
        title: {
            text: 'ทั่วโลก'
        },
        subtitle: {
            text: "ข้อมูลวันที่ " + data.Last_Update
        },
        tooltip: {
            pointFormat: '{series.name}: <b>{point.y:.0f} คน</b>'
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
            name: 'จำนวน',
            data: items
        }]
    });

});

}

function load_worldRegion_spiderChart() {
$.getJSON('./DATA/world/รวมเลขทุกประเทศเป็นทวีป.json', function(data) {
    //console.log(data.lastupdate);
    var items = [];
    $.each(data.continent, function(key, val) {
        if (key != "Last Update" && key != "Unit" && key != "Toltal") {
            items.push({
                name: val.name,
                data:[Math.log(val.confirm),Math.log(val.dead),Math.log(val.recovered),Math.log(val.well)],
                pointPlacement: 'on'
            });
        }
    });

    //console.log(items);

    for(var i = 0;i<items.length;i++) {
        wolrdRegionSpiderChart.series[i] = items[i]
    }

    wolrdRegionSpiderChart.subtitle.text = "ข้อมูลวันที่ "+data.lastupdate

    new Highcharts.chart(wolrdRegionSpiderChart)
});
}

function load_world_barChart()
{
var items = [];
var xaxis = [];
$.getJSON('./DATA/world/โควิดทวีป.json', function(data) {

    //console.log(data.lastupdate);

    $.each(data, function(key, value) {
        
        if(key == data.lastupdate)
        {
            $.each(value, function(key, value) {

                $.each(value, function(key, value) {
                    xaxis.push(key);
                    items.push(value.totalcases);
                })
            })
        }
    });

    worldRegion_barChart.xAxis.categories = xaxis
    worldRegion_barChart.series[0] = {
        name:'ติดเชื้อ',
        data: items
    }
    worldRegion_barChart.subtitle.text = "ข้อมูลวันที่ "+data.lastupdate
    new Highcharts.chart(worldRegion_barChart)
});
}

function load_world_lineChart()
{
$.getJSON('./DATA/world/totalcaseโควิดทวีป.json', function(data){

    //console.log(data)
    items = [];
    $.each(data, function(key, value){
        if(key != "lastupdate" && key != "date")
        items.push({
            name: key,
            data: value
        })
    })
    //console.log(items)
    worldRegion_lineChart.xAxis.categories = data.date
    worldRegion_lineChart.series = items
    worldRegion_lineChart.subtitle.text = "ข้อมูลวันที่ "+data.lastupdate
    new Highcharts.chart('world_lineChart',worldRegion_lineChart);
});

}

function load_worldDaed_lineChart()
{
 $.getJSON('./DATA/world/worldRegionDeath.json', function(data){

    //console.log(data)
    items = [];
    $.each(data.Data, function(key, value){
        items.push({
            name: key,
            data: value
        })
    })
    //console.log(items)

    worldDead_lineChart.tooltip.Format = "วันที่"+data.date
    worldDead_lineChart.xAxis.categories = data.date
    worldDead_lineChart.series = items
    worldDead_lineChart.subtitle.text = "ข้อมูลวันที่ "+data.LastUpDate
    
    new Highcharts.chart('worldDaed_lineChart',worldDead_lineChart);
});
}

function load_worldNewInfect_lineChart()
{
 $.getJSON('./DATA/world/worldRegionNewInfect.json', function(data){
    items = [];
    $.each(data.Data, function(key, value){
        items.push({
            name: key,
            data: value
        })
    })
    worldNewInfect_lineChart.xAxis.categories = data.date
    worldNewInfect_lineChart.series = items
    worldNewInfect_lineChart.subtitle.text = "ข้อมูลวันที่ "+data.LastUpDate

    new Highcharts.chart('worldNewInfect_lineChart',worldNewInfect_lineChart);
});
}
function load_worldRecover_lineChart()
{
 $.getJSON('./DATA/world/worldRegionRecovered.json', function(data){
    items = [];
    $.each(data.Data, function(key, value){
        items.push({
            name: key,
            data: value
        })
    })
    worldRecover_lineChart.xAxis.categories = data.date
    worldRecover_lineChart.series = items
    worldRecover_lineChart.subtitle.text = "ข้อมูลวันที่ "+data.LastUpDate
    
    new Highcharts.chart('worldRecover_lineChart',worldRecover_lineChart);
});
}
    function loadGrid10() {
    $.getJSON("DATA/phase2/tourist/ProvinceTouristNewInfectDaily.json", function(data) {
        let json = [];
        $.each(data.Data, function(key, val) {
            json.push({
                name: key,
                data: val
            });
        });
    grid10.xAxis.categories = formatDate(data.LabelText) ;
    grid10.series[0] = json[0];
    grid10.series[1] = json[1];
    grid10.series[2] = json[2];
    new Highcharts.chart('grid10', grid10);
    });
}
    function numberWithCommas(x) {
    return x.toString().replace(/\B(?=(\d{3})+(?!\d))/g, ",");
    }
    function formatDate(str) {
        var i;
        var res = [];
        var items = [];
        var month = ["ม.ค","ก.พ","มี.ค","เม.ย","พ.ค","มิ.ย","ก.ค","ส.ค","ก.ย","ต.ค","พ.ย","ธ.ค"];
        for (i = 0; i < str.length; i++){
            res = str[i].split("/");
            if(res[1][0]=="0"){
                items.push(res[0]+" "+month[res[1][1]-1]);
            }
            else{
                items.push(res[0]+" "+month[res[1]-1]);
            }
        }
        return items;
    }
</script>