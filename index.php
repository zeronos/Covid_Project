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
                <div class="grid-item" id="grid9" ></div>
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
        $.getJSON("DATA/phase3/th.json", function(data) {
            let maxIn = [];
            let items = [];
            let table = '<thead>\n' + '<tr>\n' + '<th>จังหวัด</th>\n' + '<th>ติดเชื้อ</th>\n' + '<th>หาย</th>\n' + '<th>รักษา</th>\n'+ '<th>ตาย</th>\n' + '</tr>\n' + ' </thead>\n';

            $.each(data, function(key, value) {
                if (key != "lastupdate") {
                    table += '<tr>';
                    table += '<td>' + key + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.infect) + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.healing) + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.cure) + '</td>';
                    table += '<td style="text-align:right">' + formatNumber(value.dead) + '</td>';
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
            Highcharts.mapChart('grid8', {
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
                    var string = '<b>'+this.name + ':<br>';
                    string += '<span style="color:#8a1900">●</span>'+' ติดเชื้อ '+formatNumber(this.value)+' คน'+'</b>'+'<br>';
                    string += '<span style="color:#e1e1db">●</span>'+' ตาย '+formatNumber(this.dead)+' คน'+'</b>'+'<br>';
                    string += '<span style="color:#02fd45">●</span>'+' หาย '+formatNumber(this.recovered)+' คน'+'</b>'+'<br>';
                    string += '<span style="color:#feff7a">●</span>'+' รักษา '+formatNumber(this.critical)+' คน'+'</b>'+'<br>';
                    return string;
                }
        },
            });
        });
    }

    function loadGrid9() {
        $.getJSON("DATA/phase3/th.json", function(data) {
            let items = [];
            let state = [];
            $.each(data, function(key, value) {
                if(key != "lastupdate"){
                    items.push({name:key,data:[[value.population,value.infect]]})
                }
            });
            grid9.series[0] = items[0];
            grid9.series[1] = items[1];
            grid9.series[2] = items[2];
            grid9.series[3] = items[3];
            grid9.series[4] = items[4];
            grid9.series[5] = items[5];
            grid9.series[6] = items[6];
            grid9.series[7] = items[7];
            grid9.series[8] = items[8];
            grid9.series[9] = items[9];
            grid9.series[10] = items[10];
            grid9.series[11] = items[11];
            grid9.series[12] = items[12];
            grid9.series[13] = items[13];
            grid9.series[14] = items[14];
            grid9.series[15] = items[15];
            grid9.series[16] = items[16];
            grid9.series[17] = items[17];
            grid9.series[18] = items[18];
            grid9.series[19] = items[19];
            grid9.series[20] = items[20];
            grid9.series[21] = items[21];
            grid9.series[22] = items[22];
            grid9.series[23] = items[23];
            grid9.series[24] = items[24];
            grid9.series[25] = items[25];
            grid9.series[26] = items[26];
            grid9.series[27] = items[27];
            grid9.series[28] = items[28];
            grid9.series[29] = items[29];
            grid9.series[30] = items[30];
            grid9.series[31] = items[31];
            grid9.series[32] = items[32];
            grid9.series[33] = items[33];
            grid9.series[34] = items[34];
            grid9.series[35] = items[35];
            grid9.series[36] = items[36];
            grid9.series[37] = items[37];
            grid9.series[38] = items[38];
            grid9.series[39] = items[39];
            grid9.series[40] = items[40];
            grid9.series[41] = items[41];
            grid9.series[42] = items[42];
            grid9.series[43] = items[43];
            grid9.series[44] = items[44];
            grid9.series[45] = items[45];
            grid9.series[46] = items[46];
            grid9.series[47] = items[47];
            grid9.series[48] = items[48];
            grid9.series[49] = items[49];
            grid9.series[50] = items[50];
            grid9.series[51] = items[51];
            grid9.series[52] = items[52];
            grid9.series[53] = items[53];
            grid9.series[54] = items[54];
            grid9.series[55] = items[55];
            grid9.series[56] = items[56];
            grid9.series[57] = items[57];
            grid9.series[58] = items[58];
            grid9.series[59] = items[59];
            grid9.series[60] = items[60];
            grid9.series[61] = items[61];
            grid9.series[62] = items[62];
            grid9.series[63] = items[63];
            grid9.series[64] = items[64];
            grid9.series[65] = items[65];
            grid9.series[66] = items[66];
            grid9.series[67] = items[67];
            grid9.series[68] = items[68];
            grid9.series[69] = items[69];
            grid9.series[70] = items[70];
            grid9.series[71] = items[71];
            grid9.series[72] = items[72];
            grid9.series[73] = items[73];
            grid9.series[74] = items[74];
            grid9.series[75] = items[75];
            grid9.series[76] = items[76];
            new Highcharts.chart(grid9);
        
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