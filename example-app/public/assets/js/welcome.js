
// letiable declaration for table "desempenho por disciplina"

$(function () {
    let dt_dashboard_table = $('.dt-performance-by-discipline');

    if (dt_dashboard_table.length) {
        let dt_dashboard = dt_dashboard_table.DataTable({
            ajax: 'assets/json/exemplo-desempenho-por-disciplina.json',

            columns: [
                { data: 'id' },
                { data: 'id' },
                { data: 'disciplina' },
                { data: 'porcentagemCompleta' },
                { data: 'dataInicio' },
                { data: 'dataFim' },
                { data: 'totalDias' },
                { data: 'diasPlanejados' },
                { data: 'diasRemanescentes' }
            ],
            columnDefs: [
                {
                    // For Responsive
                    className: 'control',
                    orderable: false,
                    searchable: false,
                    responsivePriority: 2,
                    targets: 0,
                    render: function (data, type, full, meta) {
                        return '';
                    }
                },
                {
                    // For Checkboxes
                    targets: 1,
                    orderable: false,
                    searchable: false,
                    checkboxes: true,
                    responsivePriority: 3,
                    render: function () {
                        return '<input type="checkbox" class="dt-checkboxes form-check-input">';
                    },
                    checkboxes: {
                        selectAllRender: '<input type="checkbox" class="form-check-input">'
                    }
                },
                {
                    // Disciplina
                    targets: 2,
                    responsivePriority: 1,
                    render: function (data, type, full, meta) {
                        let $disciplina = full['disciplina'];
                        // Creates full output for row
                        let $row_output =
                            '<div class="d-flex flex-column">' +  $disciplina +  '</div>'
                        return $row_output;
                    }
                },
                {
                    // Porcentagem completa
                    targets: 3,
                    render: function (data, type, full, meta) {
                        let $progress = full['porcentagemCompleta'];
                        let $progress_output =
                            '<div class="d-flex align-items-center">' +
                                '<div class="text-body">' +  $progress + '%</div>' +
                                '<div div class="progress w-100 ms-3" style="height: 8px;">' +
                                    '<div class="progress-bar bg-success" role="progressbar" style="width:' +
                                        $progress + '%;" aria-valuenow="' + $progress +
                                        '" aria-valuemin="0" aria-valuemax="100">'+ 
                                    '</div>' +
                                '</div>' +
                            '</div>';
                        return $progress_output;
                    }
                },
                {
                    // Data inicio
                    targets: 4,
                    render: function (data, type, full, meta) {
                        let $dataInicio = full['dataInicio']
                        let $row_output = '<div class="text-body">' + $dataInicio + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Data Fim
                    targets: 5,
                    render: function (data, type, full, meta) {
                        let $dataFim = full['dataFim']
                        let $row_output = '<div class="text-body">' + $dataFim + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Total dias
                    targets: 6,
                    render: function (data, type, full, meta) {
                        let $totalDias = full['totalDias']
                        let $row_output = '<div class="text-body">' + $totalDias + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Total dias
                    targets: 7,
                    render: function (data, type, full, meta) {
                        let $diasPlanejados = full['diasPlanejados']
                        let $row_output = '<div class="text-body">' + $diasPlanejados + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Total dias
                    targets: 8,
                    render: function (data, type, full, meta) {
                        let $diasRemanescentes = full['diasRemanescentes']
                        let $row_output = '<div class="text-body">' + $diasRemanescentes + '</div >';
                        return $row_output;
                    }
                }
            ],
            order: [2, 'asc'],
            dom: '<"table-responsive"t><"row d-flex align-items-center"<"col-sm-12 col-md-6"i><"col-sm-12 col-md-6"p>>',
            displayLength: 5,
            responsive: {
                details: {
                    display: $.fn.dataTable.Responsive.display.modal({
                        header: function (row) {
                            let data = row.data();
                            return 'Details of ' + data['location'];
                        }
                    }),
                    type: 'column',
                    renderer: function (api, rowIdx, columns) {
                        let data = $.map(columns, function (col, i) {
                            return col.title !== '' // ? Do not show row in modal popup if title is blank (for check box)
                                ? '<tr data-dt-row="' +
                                col.rowIndex +
                                '" data-dt-column="' +
                                col.columnIndex +
                                '">' +
                                '<td>' +
                                col.title +
                                ':' +
                                '</td> ' +
                                '<td>' +
                                col.data +
                                '</td>' +
                                '</tr>'
                                : '';
                        }).join('');

                        return data ? $('<table class="table"/><tbody />').append(data) : false;
                    }
                }
            }
        });
        $('.dataTables_info').addClass('pt-0');
    }
});

// End letiable declaration for table "desempenho por disciplina"

 //  start of % realizada chart

 const generatedLeadsChartEl = document.querySelector('#generatedLeadsChart'),
 generatedLeadsChartConfig = {
   chart: {
     height: 150,
     width: auto,
     parentHeightOffset: 0,
     type: 'donut'
   },
   labels: ['Electronic', 'Sports'],
   series: [45, 58],
   colors: [
     chartColors.donut.series1,
     chartColors.donut.series2
   ],
   stroke: {
     width: 0
   },
   dataLabels: {
     enabled: false,
     formatter: function (val, opt) {
       return parseInt(val) + '%';
     }
   },
   legend: {
     show: false
   },
   tooltip: {
     theme: false
   },
   grid: {
     padding: {
       top: 15,
       right: -20,
       left: -20
     }
   },
   states: {
     hover: {
       filter: {
         type: 'none'
       }
     }
   },
   plotOptions: {
     pie: {
       donut: {
         size: '70%',
         labels: {
           show: true,
           value: {
             fontSize: '1.375rem',
             fontFamily: 'Public Sans',
             color: headingColor,
             fontWeight: 500,
             offsetY: -15,
             formatter: function (val) {
               return parseInt(val) + '%';
             }
           },
           name: {
             offsetY: 20,
             fontFamily: 'Public Sans'
           },
           total: {
             show: true,
             showAlways: true,
             color: config.colors.success,
             fontSize: '.8125rem',
             label: 'Total',
             fontFamily: 'Public Sans',
             formatter: function (w) {
               return '184';
             }
           }
         }
       }
     }
   },
   responsive: [
     {
       breakpoint: 1025,
       options: {
         chart: {
           height: 172,
           width: 160
         }
       }
     },
     {
       breakpoint: 769,
       options: {
         chart: {
           height: 178
         }
       }
     },
     {
       breakpoint: 426,
       options: {
         chart: {
           height: 147
         }
       }
     }
   ]
 };
if (typeof generatedLeadsChartEl !== undefined && generatedLeadsChartEl !== null) {
 const generatedLeadsChart = new ApexCharts(generatedLeadsChartEl, generatedLeadsChartConfig);
 generatedLeadsChart.render();
}

//end of % realizada chart