var grid1 = {
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

var grid2 = {
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

var grid3 = {
    chart: {
        type: 'column',
        renderTo: 'grid3',
    },
    title: {
        text: 'Efficiency Optimization by Branch',
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

var grid4 = {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        renderTo: 'grid4',
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

var grid5 = {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie',
        renderTo: 'grid5',
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

var grid6 = {
    chart: {
        renderTo: 'grid6',
    },
    title: {
        text: '',
    },

    subtitle: {
        text: 'Source: thesolarfoundation.com',
    },

    yAxis: {
        title: {
            text: 'Number of Employees',
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

var grid7 = {
    chart: {
        polar: true,
        type: 'line',
        renderTo: 'grid7',
    },

    accessibility: {
        description: 'A spiderweb chart compares the allocated budget against actual spending within an organization. The spider chart has six spokes. Each spoke represents one of the 6 departments within the organization: sales, marketing, development, customer support, information technology and administration. The chart is interactive, and each data point is displayed upon hovering. The chart clearly shows that 4 of the 6 departments have overspent their budget with Marketing responsible for the greatest overspend of $20,000. The allocated budget and actual spending data points for each department are as follows: Sales. Budget equals $43,000; spending equals $50,000. Marketing. Budget equals $19,000; spending equals $39,000. Development. Budget equals $60,000; spending equals $42,000. Customer support. Budget equals $35,000; spending equals $31,000. Information technology. Budget equals $17,000; spending equals $26,000. Administration. Budget equals $10,000; spending equals $14,000.',
    },
    title: {
        text: 'spending',
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
        gridLineInterpolation: 'polygon',
        lineWidth: 0,
        min: 0,
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