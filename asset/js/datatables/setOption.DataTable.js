/*
    // [21/02/63]
    **** How to Funnction Set option .DataTable && Export.DataTable **** 

    arguments[0] = Id_Table
    arguments[1] = FileName_PDF
    arguments[2] = FileName_EXCEL
    arguments[3] = Option_SetColums [ Option_SetColums = 0  : All Columns
                                      Option_SetColums = 1  : Set Columns arguments[4] - arguments[5]
                                      Option_SetColums = -1 : Set Columns arguments[4]
                                    ]
    Example : setOption_DataTable("idTable","PDF","EXCEL",0)                columns = All
              setOption_DataTable("idTable","PDF","EXCEL",1,0,3)            columns = [0,1,2,3]
              setOption_DataTable("idTable","PDF","EXCEL",-1,[1,3,4,5])     columns = [1,3,4,5]
              
*/
pdfMake.fonts = {
    THSarabun: {
        normal: 'THSarabun.ttf',
        bold: 'THSarabun-Bold.ttf',
        italics: 'THSarabun-Italic.ttf',
        bolditalics: 'THSarabun-BoldItalic.ttf'
    }
}

function setOption_DataTable(idTable, fileName_Pdf, fileName_Excel, option) {
    let columns = [];
    if (option == 0)
        columns = ':visible';
    else if (option == 1) {
        for (index = 0, val = arguments[arguments.length - 2]; val <= arguments[arguments.length - 1]; index++, val++)
            columns[index] = val;
    } else if (option == -1)
        columns = arguments[arguments.length - 1];

    $("#" + idTable).DataTable({
        dom: '<"row"<"col-sm-6"B>>' +
            '<"row"<"col-sm-6 DT-margin-top"l><"col-sm-6 DT-margin-top"f>>' +
            '<"row"<"col-sm-12"tr>>' +
            '<"row"<"col-sm-5"i><"col-sm-7"p>>',
        buttons: [{
            extend: 'excel',
            title: fileName_Excel,
            text: '<i class="fas fa-file-excel"> <font class="DT-font"> Excel</font> </i>',
            className: 'btn btn-outline-success btn-sm DT-export-button',
            exportOptions: {
                columns: columns
            }
        }, {
            extend: 'pdf',
            title: fileName_Pdf,
            text: '<i class="fas fa-file-pdf"> <font class="DT-font"> PDF</font> </i>',
            className: 'btn btn-outline-danger btn-sm DT-export-button',
            pageSize: 'A4',
            customize: function(doc) {
                doc.defaultStyle = {
                    font: 'THSarabun',
                    fontSize: 16
                };
            },
            exportOptions: {
                columns: columns
            }
        }],
        language: {
            emptyTable: "ไม่พบข้อมูลที่ต้องการค้นหา !!"
        }
    });
}