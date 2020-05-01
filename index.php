<?php include("libs/head.php"); ?>
<title>รายงานสถานการณ์โควิด-19</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

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
                        <p class="lead mx-auto desc mb-5">ข้อมูล ณ วันที่ 25 เมษายน 2563</p>
                        <div class="card bg-danger text-white" style="width: 100%;height: 200px;font-size:50px;">
                            <div class="card-body text-center">
                                <p class="card-text" id="text1"></p>
                            </div>
                        </div><br>
                        <div class="card-columns text-white" style="width: 100%;font-size:30px;margin:0,auto;">
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
                <div class="grid-container" style="padding: 2rem;">
                    <div class="grid-item" id="grid1"></div>
                    <div class="grid-item" id="grid2"></div>
                </div>
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
                    <option value="religion" >ศาสนา</option>
                    <option value="job">อาชีพ</option>
                    <option value="region">ภูมิภาค</option>
                    <option value="age" selected>อายุ</option>
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
    $(document).ready(function() {

        $('#choine-relation-section1').parent().attr('style', 'padding-left: 4rem;')
        $('#choine-relation-section2').parent().attr('style', 'padding-right: 4rem;')

        $('#world_table').DataTable({
            "scrollY": "300px",
            "scrollCollapse": true,
            "paging": false,
            "searching": false
        });
    });
</script>


<?php
//-------------phase1---------------------------//
include('./controller/phase1/allFreqGraph_TH.php');
include('./controller/phase1/allGraph_TH.php');
?>

<script>
    //----------------phase2----------------------//
    $('#phase2_select').change(function() {
        if ($('.option:selected')) {
            if ($(this).val() == "age") {
                $.ajax({
                    url: './controller/phase2/age/columnGraph.php',
                    success: function(data) {
                        alert(data);
                    }
                });

            }
            if ($(this).val() == "job") {
                alert('true');

            }

        } else
            alert("false");
    });
    $.getJSON('./DATA/phase2/age/age.json', function(data) {
        document.getElementById("text1").innerHTML = "ติดเชื้อสะสม" + "<br>" + data.Toltal["ติดเชื้อ"] + " คน";
        document.getElementById("text2").innerHTML = "เสียชีวิต" + "<br>" + data.Toltal["ตาย"] + " คน";
        document.getElementById("text3").innerHTML = "หาย" + "<br>" + data.Toltal["หาย"] + " คน";
        document.getElementById("text4").innerHTML = "รักษา" + "<br>" + data.Toltal["รักษา"] + " คน";
    });
</script>


<?php include('./controller/phase2/age/columnGraph.php') ?>
<?php include('./controller/phase2/age/infect_pieGraph.php') ?>
<?php include('./controller/phase2/age/dailyDeath_lineGraph.php') ?>
<?php include('./controller/phase2/age/spiderGraph.php') ?>


<?php include('./controller/phase2/career/infect_pieGraph.php') ?>

<?php include('./controller/phase3/map_TH.php') ?>
<?php include('./controller/phase4/relationGraph.php') ?>
<?php include('./controller/world/worldMap.php') ?>