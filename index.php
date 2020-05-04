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
                        <p class="lead mx-auto desc mb-5">ข้อมูล ณ วันที่ 19 เมษายน 2563</p>
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
                <div class="grid-item" id="chart1_1"></div>
                <div class="grid-item" id="chart1_2"></div>
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

            <div class="grid-container3">
                <ul class="nav nav-tabs" id="myTab" role="tablist">
                    <li class="nav-item">
                        <a class="nav-link setTab active" data-toggle="tab" href="#age" type="age" status="1" role="tab" aria-controls="age" aria-selected="true">อายุ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link setTab" data-toggle="tab" href="#gender" type="gender" status="0" role="tab" aria-controls="gender" aria-selected="false">เพศ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link setTab" data-toggle="tab" href="#risk" type="risk" status="0" role="tab" aria-controls="risk" aria-selected="false">กลุ่มเสี่ยง</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link setTab" data-toggle="tab" href="#career" type="career" status="0" role="tab" aria-controls="career" aria-selected="false">อาชีพ</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link setTab" data-toggle="tab" href="#region" type="region" status="0" role="tab" aria-controls="region" aria-selected="false">ภูมิภาค</a>
                    </li>
                </ul>

                <div class="tab-content" id="myTabContent" style="margin-top:10px;">

                    <div class="tab-pane fade show active" id="age" role="tabpanel" aria-labelledby="age-tab">
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="age_chart2_1"></div>
                            <div class="grid-item" id="age_chart2_2"></div>
                        </div>
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="age_chart2_3"></div>
                            <div class="grid-item" id="age_chart2_4"></div>
                        </div>
                        <div class="grid-container4 remove-paddingLR">
                            <div class="grid-item" id="age_chart2_5"></div>
                            <div class="grid-item" id="age_chart2_6"></div>
                            <div class="grid-item" id="age_chart2_7"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="gender" role="tabpanel" aria-labelledby="gender-tab">
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="gender_chart2_1"></div>
                            <div class="grid-item" id="gender_chart2_2"></div>
                        </div>
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="gender_chart2_3"></div>
                            <div class="grid-item" id="gender_chart2_4"></div>
                        </div>
                        <div class="grid-container4 remove-paddingLR">
                            <div class="grid-item" id="gender_chart2_5"></div>
                            <div class="grid-item" id="gender_chart2_6"></div>
                            <div class="grid-item" id="gender_chart2_7"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="risk" role="tabpanel" aria-labelledby="risk-tab">
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="risk_chart2_1"></div>
                            <div class="grid-item" id="risk_chart2_2"></div>
                        </div>
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="risk_chart2_3"></div>
                            <div class="grid-item" id="risk_chart2_4"></div>
                        </div>
                        <div class="grid-container4 remove-paddingLR">
                            <div class="grid-item" id="risk_chart2_5"></div>
                            <div class="grid-item" id="risk_chart2_6"></div>
                            <div class="grid-item" id="risk_chart2_7"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="career" role="tabpanel" aria-labelledby="career-tab">
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="career_chart2_1"></div>
                            <div class="grid-item" id="career_chart2_2"></div>
                        </div>
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="career_chart2_3"></div>
                            <div class="grid-item" id="career_chart2_4"></div>
                        </div>
                        <div class="grid-container4 remove-paddingLR">
                            <div class="grid-item" id="career_chart2_5"></div>
                            <div class="grid-item" id="career_chart2_6"></div>
                            <div class="grid-item" id="career_chart2_7"></div>
                        </div>
                    </div>

                    <div class="tab-pane fade" id="region" role="tabpanel" aria-labelledby="region-tab">
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="region_chart2_1"></div>
                            <div class="grid-item" id="region_chart2_2"></div>
                        </div>
                        <div class="grid-container remove-paddingLR">
                            <div class="grid-item" id="region_chart2_3"></div>
                            <div class="grid-item" id="region_chart2_4"></div>
                        </div>
                        <div class="grid-container4 remove-paddingLR">
                            <div class="grid-item" id="region_chart2_5"></div>
                            <div class="grid-item" id="region_chart2_6"></div>
                            <div class="grid-item" id="region_chart2_7"></div>
                        </div>
                    </div>

                </div>
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
                <div class="grid-item" id="chart3_1" style="height: 700px;"></div>
                <table id="datatable3_1" class="table table-bordered table-striped table-hover table-data" style="margin-top: 72px;">
                    <thead>
                        <tr>
                            <th>จังหวัด</th>
                            <th>ติดเชื้อ</th>
                            <th>หาย</th>
                            <th>ตาย</th>
                        </tr>
                    </thead>
                    <tbody id="fetchDataTable3_1">

                    </tbody>
                </table>
            </div>
            <br><br>
            <div class="grid-container3">
                <div class="grid-item" id="chart3_2"></div>
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
                <div class="grid-item" id="chart4_1"></div>
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
<script src="./asset/js/method_main.js"></script>

<script>
    document.getElementById("card").addEventListener("load", loadCard());
    document.getElementById("chart1_1").addEventListener("load", loadChart1_1());
    document.getElementById("chart1_2").addEventListener("load", loadChart1_2());

    document.getElementById("age_chart2_1").addEventListener("load", loadChart2_1("age_chart2_1", "age", "age.json"));
    document.getElementById("age_chart2_2").addEventListener("load", loadChart2_2("age_chart2_2", "age", "age.json"));
    document.getElementById("age_chart2_3").addEventListener("load", loadChart2_3("age_chart2_3", "age", "age.json"));
    document.getElementById("age_chart2_4").addEventListener("load", loadChart2_4("age_chart2_4", "age", "age.json"));
    document.getElementById("age_chart2_5").addEventListener("load", loadChart2_5("age_chart2_5", "age", "ageDeathDaily.json"));
    document.getElementById("age_chart2_6").addEventListener("load", loadChart2_6("age_chart2_6", "age", "ageInfectedDaily.json"));
    document.getElementById("age_chart2_7").addEventListener("load", loadChart2_7("age_chart2_7", "age", ""));

    document.getElementById("chart3_1").addEventListener("load", loadChart3_1());
    document.getElementById("chart3_2").addEventListener("load", loadChart3_2());

    document.getElementById("chart4_1").addEventListener("load", loadChart4_1());


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

        $(".setTab").on('click', function() {
            let type = $(this).attr("type");
            let sta = $(this).attr("status");
            let file5 = "";
            let file6 = "";
            let file7 = "";

            if (type == "age")
                file5 = "ageDeathDaily.json";
            else if (type == "gender")
                file5 = "GenderDeathDaily.json";
            else if (type == "career")
                file5 = "jobDeathDaily.json";
            else if (type == "risk")
                file5 = "riskDeathDaily.json";

            if (type == "age")
                file6 = "ageInfectedDaily.json";
            else if (type == "gender")
                file6 = "GenderNewInfectDaily.json";
            else if (type == "career")
                file6 = "jobNewInfectDaily.json";
            else if (type == "risk")
                file6 = "riskInfectDaily.json";
            else
                file6 = "RegionNewInfect.json";

            if (sta == "0") {
                $(this).attr("status", "1");
                chart2_1.series = [{
                    name: 'จำนวน',
                }, ];
                chart2_2.series = [{
                    name: 'จำนวน',
                }, ];
                chart2_3.series = [{}, {}];
                chart2_4.series = [{}];
                chart2_5.series = [{}];
                chart2_6.series = [{}];
                chart2_7.series = [{}];
                loadChart2_1(type + "_chart2_1", type, type + ".json")
                loadChart2_2(type + "_chart2_2", type, type + ".json")
                loadChart2_3(type + "_chart2_3", type, type + ".json")
                loadChart2_4(type + "_chart2_4", type, type + ".json")
                loadChart2_5(type + "_chart2_5", type, file5)
                loadChart2_6(type + "_chart2_6", type, file6)
                loadChart2_7(type + "_chart2_7", type, file7)
            }

        });
    });
</script>