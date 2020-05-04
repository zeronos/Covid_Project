var chart1_1 = {
    chart: {
        renderTo: 'chart1_1',
    },
    title: {
        text: 'กราฟสะสม',
    },
    yAxis: {
        title: {
            text: 'สะสม (คน)',
        },
    },
    xAxis: {
        categories: {},
        title: {
            text: 'วันที่',
        },
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },
    series: [{}, {}, {}, {}],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f} คน</b><br/>',
        shared: true,
    },
    lang: {
        thousandsSep: ',',
    },
};

var chart1_2 = {
    chart: {
        renderTo: 'chart1_2',
    },
    title: {
        text: 'กราฟจำนวน',
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f} คน</b><br/>',
    },
    yAxis: {
        title: {
            text: 'จำนวน (คน)',
        },
    },
    xAxis: {
        categories: {},
        title: {
            text: 'วันที่',
        },
    },
    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },
    series: [{}, {}, {}, {}],
    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
};

var chart2_1 = {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
    },
    title: {
        text: 'จำนวนผู้ติดเชื้อ',
    },
    tooltip: {
        pointFormat: '{series.name}:<b>{point.y}</b>',
        valueSuffix: ' คน',
    },
    accessibility: {
        point: {
            valueSuffix: 'คน',
        },
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
    }, ],
};

var chart2_2 = {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
    },
    title: {
        text: 'จำนวนผู้เสียชีวิต',
    },
    tooltip: {
        pointFormat: '{series.name}:<b>{point.y}</b>',
        valueSuffix: ' คน',
    },
    accessibility: {
        point: {
            valueSuffix: 'คน',
        },
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
    }, ],

    lang: {
        noData: "ไม่พบข้อมูล"
    },
    noData: {
        style: {
            fontSize: '15px',
            color: '#303030'
        }
    }
};

var chart2_3 = {
    chart: {
        type: 'column',
    },
    title: {
        text: 'กราฟผู้ติดเชื้อและผู้เสียชีวิต',
    },
    xAxis: {},
    yAxis: [{
        min: 0,
        title: {
            text: 'จำนวนคน',
        },
    }, ],
    legend: {
        shadow: false,
    },
    tooltip: {
        shared: true,
    },
    plotOptions: {
        column: {
            grouping: false,
            shadow: false,
            borderWidth: 0,
        },
    },
    series: [{}, {}],
};

var chart2_4 = {
    chart: {
        polar: true,
        type: 'line',
    },

    accessibility: {
        description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.',
    },
    title: {
        text: 'ภาพรวม',
        x: -80,
    },

    pane: {
        size: '80%',
    },

    xAxis: {
        categories: ['ติดเชื้อ', 'หาย', 'ตาย'],
        tickmarkPlacement: 'on',
        lineWidth: 0,
    },

    yAxis: {
        type: 'logarithmic',
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
    },

    tooltip: {
        shared: true,
        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:,.0f}</b><br/>',
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical',
    },

    series: [{}],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal',
                },
                pane: {
                    size: '70%',
                },
            },
        }, ],
    },
};

var chart2_5 = {
    title: {
        text: 'ตาย',
    },

    subtitle: {
        text: '',
    },

    yAxis: {
        title: {
            text: '',
        },
    },

    xAxis: {
        categories: {},
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false,
            },
            pointStart: 0,
        },
    },

    series: [{}],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
    lang: {
        noData: "ไม่พบข้อมูล"
    },
    noData: {
        style: {
            fontSize: '15px',
            color: '#303030'
        }
    }
};

var chart2_6 = {
    title: {
        text: 'ติดเชื้อใหม่',
    },

    subtitle: {
        text: '',
    },

    yAxis: {
        title: {
            text: '',
        },
    },

    xAxis: {
        categories: {},
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false,
            },
            pointStart: 0,
        },
    },

    series: [{}],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
};

var chart2_7 = {
    title: {
        text: 'รักษา',
    },

    subtitle: {
        text: '',
    },

    yAxis: {
        title: {
            text: '',
        },
    },

    xAxis: {
        categories: {},
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false,
            },
            pointStart: 0,
        },
    },

    series: [{}],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
    lang: {
        noData: "ไม่พบข้อมูล"
    },
    noData: {
        style: {
            fontSize: '15px',
            color: '#303030'
        }
    }
};

var chart3_2 = {
    chart: {
        renderTo: 'chart3_2',
    },
    title: {
        text: 'ติดเชื้อแยกตามประเภทจังหวัด',
    },

    subtitle: {
        text: '',
    },

    yAxis: {
        title: {
            text: 'จำนวนผู้ติดเชื้อ(คน)',
        },
    },

    xAxis: {
        categories: {},
        title: {
            text: 'วันที่',
        },
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    plotOptions: {
        series: {
            label: {
                connectorAllowed: false,
            },
            pointStart: 0,
        },
    },

    series: [{}],

    tooltip: {
        pointFormat: 'ผู้ติดเชื้อ {series.name}: <b>{point.y:.0f} คน</b><br/>',
        shared: true,
    },

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
};

var chart4_1 = {
    chart: {
        type: 'scatter',
        zoomType: 'xy',
        renderTo: 'chart4_1',
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
            text: 'จำนวนผู้ติดเชื้อ (คน)'
        },
        startOnTick: true,
        endOnTick: true,
        showLastLabel: true
    },
    yAxis: {
        title: {
            text: 'จำนวนประชากรรวม (คน)'
        }
    },
    legend: {

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
                pointFormat: 'จำนวนประชากร:{point.x} คน, ผู้ติดเชื้อ:{point.y} คน'
            }
        }
    },
    series: [{}],
}

var wolrdRegionSpiderChart = {
    chart: {
        polar: true,
        type: 'line',
        renderTo: 'worldRegion_spiderChart',
    },

    accessibility: {
        description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.',
    },
    title: {
        text: 'กราฟทวีป',
        x: -80,
    },
    subtitle: {
        text: '',
    },

    pane: {
        size: '80%',
    },

    xAxis: {
        categories: ['ติดเชื้อ', 'หาย', 'ตาย', 'รักษา'],
        tickmarkPlacement: 'on',
        lineWidth: 0,
    },

    yAxis: {
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
        min: 0,
    },

    tooltip: {
        shared: true,
        pointFormat: '<span style="color:{series.color}">{series.name}: <b>{point.y:.0f} คน</b><br/>',
    },

    legend: {
        align: 'right',
        verticalAlign: 'middle',
        layout: 'vertical',
    },

    series: [{}],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    align: 'center',
                    verticalAlign: 'bottom',
                    layout: 'horizontal',
                },
                pane: {
                    size: '70%',
                },
            },
        }, ],
    },
};

var worldRegion_barChart = {
    chart: {
        type: 'column',
        renderTo: 'world_barChart',
    },
    title: {
        text: 'ติดเชื้อสะสมแต่ละทวีป',
    },
    subtitle: {},
    xAxis: {
        title: {
            text: 'ทวีป',
        },
    },
    yAxis: {
        min: 0,
        title: {
            text: 'จำนวนผู้ติดเชื้อ',
        },
        labels: {
            overflow: 'justify',
        },
    },

    tooltip: {
        pointFormat: '{series.name}: <b>{point.y:.0f} คน</b><br/>',
    },
    plotOptions: {
        bar: {
            dataLabels: {
                enabled: true,
            },
        },
    },

    credits: {
        enabled: false,
    },
    series: [],
};

var worldRegion_lineChart = {
    title: {
        text: 'กราฟทวีปติดเชื้อสะสมรายวัน',
    },

    subtitle: {},

    yAxis: {
        title: {
            text: 'จำนวนผู้ติดเชื้อสะสม (คน)',
        },
    },

    xAxis: {},
    tooltip: {
        shared: true,
        pointFormat: '{series.name}: <b>{point.y:.0f} คน</b><br/>',
    },

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    series: [],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
};

//-----------------------------------------------------------------------------------------------------------------------------------//
var worldDead_lineChart = {
    title: {
        text: 'กราฟเสียชีวิตรายวัน',
    },

    subtitle: {},

    tooltip: {
        shared: true,
        pointFormat: 'ทวีป {series.name}: <b>{point.y:.0f} คน</b><br/>',
    },

    yAxis: {
        title: {
            text: 'จำนวน (คน)',
        },
    },

    xAxis: {},

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    series: [],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
};

var worldNewInfect_lineChart = {
    title: {
        text: 'กราฟติดเชื้อใหม่รายวัน',
    },

    subtitle: {},
    tooltip: {
        shared: true,
        pointFormat: 'ทวีป {series.name}: <b>{point.y:.0f} คน</b><br/>',
    },
    yAxis: {
        title: {
            text: 'จำนวน (คน)',
        },
    },

    xAxis: {},

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    series: [],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
};

var worldRecover_lineChart = {
    title: {
        text: 'กราฟรักษารายวัน',
    },

    subtitle: {},
    tooltip: {
        shared: true,
        pointFormat: 'ทวีป {series.name}: <b>{point.y:.0f} คน</b><br/>',
    },

    yAxis: {
        title: {
            text: 'จำนวน (คน)',
        },
    },

    xAxis: {},

    legend: {
        layout: 'vertical',
        align: 'right',
        verticalAlign: 'middle',
    },

    series: [],

    responsive: {
        rules: [{
            condition: {
                maxWidth: 500,
            },
            chartOptions: {
                legend: {
                    layout: 'horizontal',
                    align: 'center',
                    verticalAlign: 'bottom',
                },
            },
        }, ],
    },
};



// var chart3_1 = {
//     chart: {
//         map: 'countries/th/th-all',
//         renderTo: 'chart2_7',
//     },

//     title: {
//         text: 'Highmaps basic demo',
//     },

//     subtitle: {
//         text: '',
//     },

//     mapNavigation: {
//         enabled: true,
//         buttonOptions: {
//             verticalAlign: 'bottom',
//         },
//     },

//     colorAxis: {
//         min: 0,
//         max: Math.max.apply(Math, maxIn),
//         stops: [
//             [0, '#F1EEF6'],
//             [0.5, '#900037'],
//             [1, '#500007'],
//         ],
//     },
//     series: [{}],
//     tooltip: {
//         pointFormat: '{point.name}:{point.value}',
//         valueSuffix: ' คน',
//     },
// };