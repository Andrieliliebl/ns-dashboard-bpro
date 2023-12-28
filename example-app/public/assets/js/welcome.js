$(function () {
    // Variable declaration for table
    var dt_dashboard_table = $('.dt-performance-by-discipline');

    if (dt_dashboard_table.length) {
        var dt_dashboard = dt_dashboard_table.DataTable({
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
                        var $disciplina = full['disciplina'];
                        // Creates full output for row
                        var $row_output =
                            '<div class="d-flex flex-column">' +  $disciplina +  '</div>'
                        return $row_output;
                    }
                },
                {
                    // Porcentagem completa
                    targets: 3,
                    render: function (data, type, full, meta) {
                        var $progress = full['porcentagemCompleta'];
                        var $progress_output =
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
                        var $dataInicio = full['dataInicio']
                        var $row_output = '<div class="text-body">' + $dataInicio + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Data Fim
                    targets: 5,
                    render: function (data, type, full, meta) {
                        var $dataFim = full['dataFim']
                        var $row_output = '<div class="text-body">' + $dataFim + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Total dias
                    targets: 6,
                    render: function (data, type, full, meta) {
                        var $totalDias = full['totalDias']
                        var $row_output = '<div class="text-body">' + $totalDias + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Total dias
                    targets: 7,
                    render: function (data, type, full, meta) {
                        var $diasPlanejados = full['diasPlanejados']
                        var $row_output = '<div class="text-body">' + $diasPlanejados + '</div >';
                        return $row_output;
                    }
                },
                {
                    // Total dias
                    targets: 8,
                    render: function (data, type, full, meta) {
                        var $diasRemanescentes = full['diasRemanescentes']
                        var $row_output = '<div class="text-body">' + $diasRemanescentes + '</div >';
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
                            var data = row.data();
                            return 'Details of ' + data['location'];
                        }
                    }),
                    type: 'column',
                    renderer: function (api, rowIdx, columns) {
                        var data = $.map(columns, function (col, i) {
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