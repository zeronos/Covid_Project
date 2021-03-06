<!DOCTYPE html>
<html lang="th">

<head>
    <title>รายงานสถานการณ์โควิด-19</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- All Templete CSS -->
    <link href="https://fonts.googleapis.com/css?family=Muli:300,400,700,900" rel="stylesheet">
    <link rel="stylesheet" href="./asset/css/bootstrap.min.css">
    <link rel="stylesheet" href="./asset/css/jquery-ui.css">
    <link rel="stylesheet" href="./asset/css/owl.carousel.min.css">
    <link rel="stylesheet" href="./asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./asset/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="./asset/css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="./asset/fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="./asset/css/aos.css">
    <link rel="stylesheet" href="./asset/css/jquery.mb.YTPlayer.min.css" media="all">
    <link rel="stylesheet" href="./asset/css/style.css">

    <link rel="stylesheet" href="./asset/css/maxcdn-bootstrap.min.css">

    <!-- Datable CSS -->
    <link href="./asset/css/datatables/dataTables.bootstrap4.min.css" rel="stylesheet" type="text/css">

    <!-- Hihg Chart All JS -->
    <script src="https://code.highcharts.com/stock/highstock.js"></script>
    <script src="https://code.highcharts.com/stock/highcharts-more.js"></script>
    <!-- <script src="https://code.highcharts.com/stock/modules/exporting.js"></script>
    <script src="https://code.highcharts.com/stock/modules/export-data.js"></script> -->
    <script src="https://code.highcharts.com/modules/series-label.js"></script>
    <!-- <script src="https://code.highcharts.com/modules/accessibility.js"></script> -->
    <script src="https://code.highcharts.com/modules/no-data-to-display.js"></script>
    <script src="https://code.highcharts.com/maps/modules/data.js"></script>
    <script src="https://code.highcharts.com/maps/modules/map.js"></script>
    <script src="https://code.highcharts.com/mapdata/custom/world.js"></script>
    <script src="https://code.highcharts.com/mapdata/countries/th/th-all.js"></script>

    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
    <style>
        .grid-container {
            display: grid;
            grid-template-columns: 1fr 1fr;
            grid-gap: 2rem;
            padding: 2rem;
            padding-left: 5rem;
            padding-right: 5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .grid-container2 {
            display: grid;
            grid-template-columns: 3fr 3fr;
            grid-gap: 2rem;
            padding: 2rem;
            padding-left: 5rem;
            padding-right: 5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .grid-container3 {
            display: grid;
            grid-template-columns: 1fr;
            grid-gap: 2rem;
            padding: 2rem;
            padding-left: 5rem;
            padding-right: 5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .grid-container4 {
            display: grid;
            grid-template-columns: 1fr 1fr 1fr;
            grid-gap: 2rem;
            padding: 2rem;
            padding-left: 5rem;
            padding-right: 5rem;
            padding-top: 1rem;
            padding-bottom: 1rem;
        }

        .start-grid-container {
            grid-row-start: 1;
            grid-row-end: 3;
        }

        .grid-item {
            width: 100%;
            height: 100%;
        }

        .remove-paddingLR {
            padding-left: 0.5rem;
            padding-right: 0.5rem;
        }

        .setTab {
            width: 120px;
            text-align: center;
        }

        .setTab2 {
            width: 120px;
            text-align: center;
        }

        .loader {
            border: 16px solid #f3f3f3;
            border-radius: 50%;
            border-top: 16px solid #3498db;
            width: 120px;
            height: 120px;
            -webkit-animation: spin 2s linear infinite;
            /* Safari */
            animation: spin 2s linear infinite;
        }

        /* Safari */
        @-webkit-keyframes spin {
            0% {
                -webkit-transform: rotate(0deg);
            }

            100% {
                -webkit-transform: rotate(360deg);
            }
        }

        @keyframes spin {
            0% {
                transform: rotate(0deg);
            }

            100% {
                transform: rotate(360deg);
            }
        }
    </style>

</head>

<script>
    $(document).ready(function() {
        let path = '../admin/DWProjectCountry/';
            $.getJSON(path +'AllCard.json',function(data){
                //console.log()
                $("p#dataDate").text("อัปเดตล่าสุด "+data.LastUpdate)
            });
        });
            
</script>