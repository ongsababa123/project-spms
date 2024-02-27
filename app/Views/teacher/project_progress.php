<title>ติดตามความก้าวหน้า</title>

<body class="hold-transition sidebar-mini">
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        <section class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                    <div class="col-sm-6">
                        <h1>ติดตามความก้าวหน้า</h1>
                    </div>
                    <div class="col-sm-6">
                        <ol class="breadcrumb float-sm-right">
                            <li class="breadcrumb-item"><a href="<?= site_url('/'); ?>">หน้าหลัก</a></li>
                            <li class="breadcrumb-item active">ติดตามความก้าวหน้า</li>
                        </ol>
                    </div>
                </div>
            </div><!-- /.container-fluid -->
        </section>
        <section class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-12 col-sm-12">
                        <div class="card card-navy card-tabs">
                            <div class="card-header p-0 pt-1">
                                <ul class="nav nav-tabs" id="custom-tabs-one-tab" role="tablist">
                                    <li class="nav-item">
                                        <a class="nav-link active" id="custom-tabs-one-home-tab" data-toggle="pill"
                                            href="#custom-tabs-one-home" role="tab" aria-controls="custom-tabs-one-home"
                                            aria-selected="true">โครงงานพิเศษที่ยังดำเนินการอยู่</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-profile-tab" data-toggle="pill"
                                            href="#custom-tabs-one-profile" role="tab"
                                            aria-controls="custom-tabs-one-profile" aria-selected="false"
                                            onclick="getTableData_status2()">โครงงานพิเศษที่จบแล้ว</a>
                                    </li>
                                    <li class="nav-item">
                                        <a class="nav-link" id="custom-tabs-one-display3-tab" data-toggle="pill"
                                            href="#custom-tabs-one-display3" role="tab"
                                            aria-controls="custom-tabs-one-display3" aria-selected="false"
                                            onclick="getTableData_status3()">โครงงานพิเศษที่ยกเลิก</a>
                                    </li>
                                </ul>
                            </div>
                            <div class="card-body">
                                <div class="tab-content" id="custom-tabs-one-tabContent">
                                    <div class="tab-pane fade show active" id="custom-tabs-one-home" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-home-tab">
                                        <table id="example1" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px" class="text-center">ลำดับ</th>
                                                    <th>ชื่อโครงงานพิเศษ</th>
                                                    <th class="text-center">ทก.01</th>
                                                    <th class="text-center">ทก.02</th>
                                                    <th class="text-center">ทก.03</th>
                                                    <th class="text-center">ทก.04</th>
                                                    <th class="text-center">ทก.05</th>
                                                    <th class="text-center">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-profile" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-profile-tab">
                                        <table id="example2" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px" class="text-center">ลำดับ</th>
                                                    <th>ชื่อโครงงานพิเศษ</th>
                                                    <th class="text-center">ทก.01</th>
                                                    <th class="text-center">ทก.02</th>
                                                    <th class="text-center">ทก.03</th>
                                                    <th class="text-center">ทก.04</th>
                                                    <th class="text-center">ทก.05</th>
                                                    <th class="text-center">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="tab-pane fade" id="custom-tabs-one-display3" role="tabpanel"
                                        aria-labelledby="custom-tabs-one-display3-tab">
                                        <table id="example3" class="table table-bordered">
                                            <thead>
                                                <tr>
                                                    <th style="width: 10px" class="text-center">ลำดับ</th>
                                                    <th>ชื่อโครงงานพิเศษ</th>
                                                    <th class="text-center">ทก.01</th>
                                                    <th class="text-center">ทก.02</th>
                                                    <th class="text-center">ทก.03</th>
                                                    <th class="text-center">ทก.04</th>
                                                    <th class="text-center">ทก.05</th>
                                                    <th class="text-center">สถานะ</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="overlay dark" id="overlay" name="overlay">
                                <i class="fas fa-2x fa-sync-alt fa-spin"></i>
                            </div>
                            <!-- /.card -->
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <div class="modal fade" id="modal-default">
        <div id="main_tk">
            <?= $this->include("modal/main_tk"); ?>
        </div>
        <div id="c_comment">
            <?= $this->include("modal/c_comment"); ?>
        </div>
    </div>
    <script>
        $(document).ready(function () {
            getTableData_status1();
        });
    </script>
    <script>
        function getTableData_status1() {
            $("#overlay").show()
            if ($.fn.DataTable.isDataTable('#example1')) {
                $('#example1').DataTable().destroy();
            }
            $('#example1').DataTable({
                "processing": true,
                "pageLength": 10,
                "pagingType": "full_numbers", // Display pagination as 1, 2, 3... instead of Previous, Next buttons
                'serverSide': true,
                'ajax': {
                    'url': "<?php echo site_url('teacher/progress/getdata/1'); ?>",
                    'type': 'GET',
                    'dataSrc': 'data',
                },
                "responsive": true,
                "lengthChange": false,
                "autoWidth": false,
                "drawCallback": function (settings) {
                    $("#overlay").hide()
                    var daData = settings.json.data;
                    if (daData.length == 0) {
                        $('#example1 tbody').html(`<tr><td colspan="8" class="text-center"> ไม่พบข้อมูล</td></tr>`);
                    }
                },
                'columns': [
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return meta.settings.oAjaxData.start += 1;

                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            return data.name_project_th + '<br>' + data.name_project_eng;
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            if (data.data_tk01 == null) {
                                return 'ยังไม่มีข้อมูล'
                            } else {
                                return create_button(data.data_tk01.status_tk_01, 2, encodedRowData);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            if (data.data_tk02 == null) {
                                return create_button(1, 3, encodedRowData);
                            } else {
                                return create_button(data.data_tk02.status_tk_02, 3, encodedRowData);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            if (data.data_tk03 == null) {
                                return create_button(1, 4, encodedRowData);
                            } else {
                                return create_button(data.data_tk03.status_tk_03, 4, encodedRowData);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            if (data.data_tk04 == null) {
                                return create_button(1, 5, encodedRowData);
                            } else {
                                return create_button(data.data_tk04.status_tk_04, 5, encodedRowData);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            if (data.data_tk05 == null) {
                                return create_button(1, 6, encodedRowData);
                            } else {
                                return create_button(data.data_tk05.status_tk_05, 6, encodedRowData);
                            }
                        }
                    },
                    {
                        'data': null,
                        'class': 'text-center',
                        'render': function (data, type, row, meta) {
                            const encodedRowData = encodeURIComponent(JSON.stringify(row));
                            if (data.status_project == 0) {
                                return `<span class="badge bg-success">ปิดโครงงานพิเศษ</span>`
                            } else if (data.status_project == 1) {
                                return `<span class="badge bg-warning">กำลังดำเนินการ</span>`
                            } else {
                                return `<span class="badge bg-danger">ยกเลิกโครงงานพิเศษ</span>`
                            }
                        }
                    },
                ]
            });
            $('[data-toggle="tooltip"]').tooltip();
        }
    </script>
    <script>
        var display2 = 0;
        function getTableData_status2() {
            if (display2 === 0) {
                display2++;
                $("#overlay").show()
                if ($.fn.DataTable.isDataTable('#example2')) {
                    $('#example2').DataTable().destroy();
                }
                $('#example2').DataTable({
                    "processing": true,
                    "pageLength": 10,
                    "pagingType": "full_numbers", // Display pagination as 1, 2, 3... instead of Previous, Next buttons
                    'serverSide': true,
                    'ajax': {
                        'url': "<?php echo site_url('teacher/progress/getdata/0'); ?>",
                        'type': 'GET',
                        'dataSrc': 'data',
                    },
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "drawCallback": function (settings) {
                        $("#overlay").hide()
                        var daData = settings.json.data;
                        if (daData.length == 0) {
                            $('#example2 tbody').html(`<tr><td colspan="8" class="text-center"> ไม่พบข้อมูล</td></tr>`);
                        }
                    },
                    'columns': [
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                return meta.settings.oAjaxData.start += 1;

                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                return data.name_project_th + '<br>' + data.name_project_eng;
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk01 == null) {
                                    return 'ยังไม่มีข้อมูล'
                                } else {
                                    return create_button(data.data_tk01.status_tk_01, 2, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk02 == null) {
                                    return create_button(1, 3, encodedRowData);
                                } else {
                                    return create_button(data.data_tk02.status_tk_02, 3, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk03 == null) {
                                    return create_button(1, 4, encodedRowData);
                                } else {
                                    return create_button(data.data_tk03.status_tk_03, 4, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk04 == null) {
                                    return create_button(1, 5, encodedRowData);
                                } else {
                                    return create_button(data.data_tk04.status_tk_04, 5, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk05 == null) {
                                    return create_button(1, 6, encodedRowData);
                                } else {
                                    return create_button(data.data_tk05.status_tk_05, 6, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.status_project == 0) {
                                    return `<span class="badge bg-success">ปิดโครงงานพิเศษ</span>`
                                } else if (data.status_project == 1) {
                                    return `<span class="badge bg-warning">กำลังดำเนินการ</span>`
                                } else {
                                    return `<span class="badge bg-danger">ยกเลิกโครงงานพิเศษ</span>`
                                }
                            }
                        },
                    ]
                });
                $('[data-toggle="tooltip"]').tooltip();
            }
        }
    </script>
    <script>
        var display3 = 0;
        function getTableData_status3() {
            if (display3 === 0) {
                display3++;
                $("#overlay").show()
                if ($.fn.DataTable.isDataTable('#example3')) {
                    $('#example3').DataTable().destroy();
                }
                $('#example3').DataTable({
                    "processing": true,
                    "pageLength": 10,
                    "pagingType": "full_numbers", // Display pagination as 1, 2, 3... instead of Previous, Next buttons
                    'serverSide': true,
                    'ajax': {
                        'url': "<?php echo site_url('teacher/progress/getdata/2'); ?>",
                        'type': 'GET',
                        'dataSrc': 'data',
                    },
                    "responsive": true,
                    "lengthChange": false,
                    "autoWidth": false,
                    "drawCallback": function (settings) {
                        $("#overlay").hide()
                        var daData = settings.json.data;
                        if (daData.length == 0) {
                            $('#example3 tbody').html(`<tr><td colspan="8" class="text-center"> ไม่พบข้อมูล</td></tr>`);
                        }
                    },
                    'columns': [
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                return meta.settings.oAjaxData.start += 1;

                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                return data.name_project_th + '<br>' + data.name_project_eng;
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk01 == null) {
                                    return 'ยังไม่มีข้อมูล'
                                } else {
                                    return create_button(data.data_tk01.status_tk_01, 2, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk02 == null) {
                                    return create_button(1, 3, encodedRowData);
                                } else {
                                    return create_button(data.data_tk02.status_tk_02, 3, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk03 == null) {
                                    return create_button(1, 4, encodedRowData);
                                } else {
                                    return create_button(data.data_tk03.status_tk_03, 4, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk04 == null) {
                                    return create_button(1, 5, encodedRowData);
                                } else {
                                    return create_button(data.data_tk04.status_tk_04, 5, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.data_tk05 == null) {
                                    return create_button(1, 6, encodedRowData);
                                } else {
                                    return create_button(data.data_tk05.status_tk_05, 6, encodedRowData);
                                }
                            }
                        },
                        {
                            'data': null,
                            'class': 'text-center',
                            'render': function (data, type, row, meta) {
                                const encodedRowData = encodeURIComponent(JSON.stringify(row));
                                if (data.status_project == 0) {
                                    return `<span class="badge bg-success">ปิดโครงงานพิเศษ</span>`
                                } else if (data.status_project == 1) {
                                    return `<span class="badge bg-warning">กำลังดำเนินการ</span>`
                                } else {
                                    return `<span class="badge bg-danger">ยกเลิกโครงงานพิเศษ</span>`
                                }
                            }
                        },
                    ]
                });
                $('[data-toggle="tooltip"]').tooltip();
            }
        }
    </script>
    <script>
        function create_button(status, index_modal, id_project) {
            const rowData = JSON.parse(decodeURIComponent(id_project));
            const rowDataString = JSON.stringify(rowData);
            const encodedRowData = encodeURIComponent(rowDataString);
            if (status == 1) {
                return '<a class="btn btn-app bg-secondary" >' +
                    '<i class="fas fa-pencil-ruler"></i> ร่างเอกสาร' +
                    '</a>';
            } else if (status == 2) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-warning" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',\'' + encodedRowData + '\')">' +
                    '<i class="fab fa-searchengin"></i> อยู่ระหว่างการตรวจสอบเอกสาร' +
                    '</a>' +
                    '</td>';
            } else if (status == 3) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-maroon" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',\'' + encodedRowData + '\')">' +
                    '<i class="fas fa-undo-alt"></i> เอกสารถูกตีกลับ' +
                    '</a>' +
                    '</td>';
            } else if (status == 4) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-orange" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',\'' + encodedRowData + '\')">' +
                    '<i class="fas fa-spinner"></i> รอยืนยันจากที่ปรึกษา' +
                    '</a>' +
                    '</td>';
            } else if (status == 5) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-danger" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',\'' + encodedRowData + '\')">' +
                    '<i class="fas fa-window-close"></i> ยกเลิกเอกสาร' +
                    '</a>' +
                    '</td>';
            } else if (status == 6) {
                return `<td class="text-center">
                <a class="btn btn-app bg-success" data-toggle="modal"
                data-target="#modal-default" onclick="load_modal(${index_modal}, '${encodedRowData}')">
                    <i class="fas fa-check-circle"></i> เอกสารผ่าน
                </a>
            </td>`;
            } else if (status == 7) {
                return '<td class="text-center">' +
                    '<a class="btn btn-app bg-info" data-toggle="modal" ' +
                    'data-target="#modal-default" onclick="load_modal(' + index_modal + ',\'' + encodedRowData + '\')">' +
                    '<i class="fas fa-user-cog"></i> ติดต่อเจ้าหน้าที่' +
                    '</a>' +
                    '</td>';
            }
        }
    </script>
    <script>
        function load_modal(load_check, data_encode) {
            $(".modal-footer #submit_btn").hide();
            $(".modal-footer #submit_btn_teacher").show();

            const rowData = JSON.parse(decodeURIComponent(data_encode));
            // console.log(rowData);
            $(".modal-body #tk_04_file_1").empty();
            $(".modal-body #select_teacher").empty();
            main_tk = document.getElementById("main_tk");
            c_comment = document.getElementById("c_comment");
            main_tk.style.display = "block";
            c_comment.style.display = "none";
            $(".modal-body #select_teacher").empty();
            const fieldsToReset = [
                '#name_project', '#name_project_eng', '#department', '#subject_group',
                '#semester', '#learn_year', '#name_consult_1', '#name_consult_2',
                '#name_student_2', '#lastname_student_2', '#email_student_2', '#phone_student_2', '#room_student_2',
                '#name_student_3', '#lastname_student_3', '#email_student_3', '#phone_student_3', '#room_student_3', '#select_teacher'
            ];
            $(".modal-footer #submit").prop('disabled', true);
            fieldsToReset.forEach(field => $(".modal-body " + field).prop('disabled', true));
            $(".modal-body #name_project").val(rowData['name_project_th']);
            $(".modal-body #name_project_eng").val(rowData['name_project_eng']);
            $(".modal-body #department").val(rowData['department']);
            $(".modal-body #subject_group").val(rowData['subject_group']);
            $(".modal-body #semester").val(rowData['term']);
            $(".modal-body #learn_year").val(rowData['year']);
            $(".modal-body #name_student_1").val(rowData['students'][0]['name_user']);
            $(".modal-body #lastname_student_1").val(rowData['students'][0]['lastname_user']);
            $(".modal-body #email_student_1").val(rowData['students'][0]['email_user']);
            $(".modal-body #phone_student_1").val(rowData['students'][0]['phone_user']);
            $(".modal-body #room_student_1").val(rowData['students'][0]['room_user']);
            if (rowData['students'][1] == null) {
                $(".modal-body #name_student_2").val('');
                $(".modal-body #lastname_student_2").val('');
                $(".modal-body #email_student_2").val('');
                $(".modal-body #phone_student_2").val('');
                $(".modal-body #room_student_2").val('');
            } else {
                $(".modal-body #name_student_2").val(rowData['students'][1]['name_user']);
                $(".modal-body #lastname_student_2").val(rowData['students'][1]['lastname_user']);
                $(".modal-body #email_student_2").val(rowData['students'][1]['email_user']);
                $(".modal-body #phone_student_2").val(rowData['students'][1]['phone_user']);
                $(".modal-body #room_student_2").val(rowData['students'][1]['room_user']);
            }

            if (rowData['students'][2] == null) {
                $(".modal-body #name_student_3").val('');
                $(".modal-body #lastname_student_3").val('');
                $(".modal-body #email_student_3").val('');
                $(".modal-body #phone_student_3").val('');
                $(".modal-body #room_student_3").val('');
            } else {
                $(".modal-body #name_student_3").val(rowData['students'][2]['name_user']);
                $(".modal-body #lastname_student_3").val(rowData['students'][2]['lastname_user']);
                $(".modal-body #email_student_3").val(rowData['students'][2]['email_user']);
                $(".modal-body #phone_student_3").val(rowData['students'][2]['phone_user']);
                $(".modal-body #room_student_3").val(rowData['students'][2]['room_user']);
            }
            var newOption = $('<option></option>').val(rowData['teacher']['email_user']).text(rowData['teacher']['name_user'] + ' ' + rowData['teacher']['lastname_user']);
            $(".modal-body #select_teacher").append(newOption.prop('selected', true));
            if (rowData['name_consult'] == null) {
                $(".modal-body #name_consult_1").val('');
                $(".modal-body #name_consult_2").val('');
            } else {
                var consultants = rowData['name_consult'].split(',');
                $(".modal-body #name_consult_1").val(consultants[0]);
                $(".modal-body #name_consult_2").val(consultants[1]);
            }
            $(".modal-footer #btn_history").prop('href', '<?= base_url('comment/index/') ?>' + rowData['id_project']);

            if (load_check == 2) {
                //edit tk01
                $("#tk_01_file_read_btn").click(() => window.open('<?php echo site_url('openfile/') ?>' + rowData['data_tk01']['id_file_01'], '_blank'));
                if (rowData['data_tk01']['status_tk_01'] == 4) {
                    $(".modal-footer #submit_success").prop('disabled', false);
                    $(".modal-footer #submit_back_edit").prop('disabled', false);
                    $(".modal-footer #submit_danger").prop('disabled', false);
                } else {
                    $(".modal-footer #submit_success").prop('disabled', true);
                    $(".modal-footer #submit_back_edit").prop('disabled', true);
                    $(".modal-footer #submit_danger").prop('disabled', true);
                }

                $("#submit_success").click(() => confirm_Alert('ต้องการให้ผ่านหรือไม่?', rowData['data_tk01']['id_tk_01'] + '/1/6'));
                $("#submit_back_edit").click(() => comment(rowData['id_project'], rowData['data_tk01']['id_tk_01'], '1'));
                $("#submit_danger").click(() => confirm_Alert('ต้องการยกเลิกเอกสารหรือไม่?', rowData['data_tk01']['id_tk_01'] + '/1/5'));
                $(".modal-header #title_modal").text('ข้อมูล ทก.01');
                $(".modal-body #tk_01_file_upload").hide();
                $(".modal-body #tk_01").show();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
                $(".modal-footer #submit_btn_teacher").hide();

            } else if (load_check == 3) {
                //edit tk02
                $("#tk_02_file_read_1").click(() => window.open('<?php echo site_url('openfile/') ?>' + rowData['data_tk02']['id_file_02'], '_blank'));
                if (rowData['data_tk02']['id_file_present'] != null) {
                    $(".modal-body #tk_02_file_present").show();
                    $("#tk_02_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + rowData['data_tk02']['id_file_present'], '_blank'));
                } else {
                    $(".modal-body #tk_02_file_present").hide();
                }
                if (rowData['data_tk02']['status_tk_02'] == 4) {
                    $(".modal-footer #submit_success").prop('disabled', false);
                    $(".modal-footer #submit_back_edit").prop('disabled', false);
                    $(".modal-footer #submit_danger").prop('disabled', false);
                } else {
                    $(".modal-footer #submit_success").prop('disabled', true);
                    $(".modal-footer #submit_back_edit").prop('disabled', true);
                    $(".modal-footer #submit_danger").prop('disabled', true);
                }
                $("#submit_success").click(() => confirm_Alert('ต้องการให้ผ่านหรือไม่?', rowData['data_tk02']['id_tk_02'] + '/2/6'));
                $("#submit_back_edit").click(() => comment(rowData['id_project'], rowData['data_tk02']['id_tk_02'], '2'));
                $("#submit_danger").click(() => confirm_Alert('ต้องการยกเลิกเอกสารหรือไม่?', rowData['data_tk02']['id_tk_02'] + '/2/5'));
                $(".modal-body #tk_02_file").hide();
                $(".modal-header #title_modal").text('ข้อมูล ทก.02');
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").show();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 4) {
                //edit tk03
                $("#tk_03_file_read_1").click(() => window.open('<?php echo site_url('openfile/') ?>' + rowData['data_tk03']['id_file_03'], '_blank'));
                if (rowData['data_tk03']['id_file_present'] != null) {
                    $(".modal-body #tk_03_file_present").show();
                    $("#tk_03_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + rowData['data_tk03']['id_file_present'], '_blank'));
                } else {
                    $(".modal-body #tk_03_file_present").hide();
                }
                $(".modal-body #file_tk03").hide();
                if (rowData['data_tk03']['id_score'] != null) {
                    $(".modal-body #tk_03_score").show();
                    // $("#tk_03_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + data['data_tk03']['id_file_present'], '_blank'));
                } else {
                    $(".modal-body #tk_03_score").hide();
                }
                if (rowData['data_tk03']['status_tk_03'] == 4) {
                    $(".modal-footer #submit_success").prop('disabled', false);
                    $(".modal-footer #submit_back_edit").prop('disabled', false);
                    $(".modal-footer #submit_danger").prop('disabled', false);
                } else {
                    $(".modal-footer #submit_success").prop('disabled', true);
                    $(".modal-footer #submit_back_edit").prop('disabled', true);
                    $(".modal-footer #submit_danger").prop('disabled', true);
                }

                $("#submit_success").click(() => confirm_Alert('ต้องการให้ผ่านหรือไม่?', rowData['data_tk03']['id_tk_03'] + '/3/6'));
                $("#submit_back_edit").click(() => comment(rowData['id_project'], rowData['data_tk03']['id_tk_03'], '3'));
                $("#submit_danger").click(() => confirm_Alert('ต้องการยกเลิกเอกสารหรือไม่?', rowData['data_tk03']['id_tk_03'] + '/3/5'));
                $(".modal-header #title_modal").text('ข้อมูล ทก.03');
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").show();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 5) {
                //edit tk04
                $(".modal-body #tk_04_file_upload").hide();
                rowData['data_tk04']['file_04'].forEach((data_file_04, index) => {
                    var statusButtonHtml = '';
                    if (data_file_04.status_file == 0) {
                        statusButtonHtml = `<button type="button" class="btn btn-block btn-warning btn-sm" onclick="confirm_check_file(${data_file_04.id_file}, ${rowData['data_tk04']['id_tk_04']}, ${rowData['id_project']})" >กำลังตรวจสอบ</button>`;
                    } else if (data_file_04.status_file == 1) {
                        statusButtonHtml = ` <button type="button" class="btn btn-block btn-success btn-sm">ตรวจสอบแล้ว</button>`;
                    } else {
                        statusButtonHtml = `<button type="button" class="btn btn-block btn-danger btn-sm">ไม่ผ่านการตรวจสอบ</button>`;
                    }
                    var newHtml = `
                    <div class="row">
                        <div class="col-md-2 text-center mt-2">
                            <p>${index + 1}</p>
                        </div>
                        <div class="col-md-2 text-center">
                            <a class="btn btn-app bg-danger" href="<?= site_url('openfile/') ?>${data_file_04.id_file}" target="_blank">
                                <i class="fas fa-file-pdf"></i> ไฟล์รายงานความก้าวหน้า
                            </a>
                        </div>
                        <div class="col-md-3 text-center mt-2">
                            <p>${data_file_04.date_uploade}</p>
                        </div>
                        <div class="col-md-3 text-center">
                            ${statusButtonHtml}
                        </div>
                    </div>`;
                    // Append the new HTML code to the tk_04_file_1 element
                    $("#tk_04_file_1").append(newHtml);
                });
                $(".modal-footer #submit_btn_teacher").hide();
                $(".modal-header #title_modal").text('ข้อมูล ทก.04');
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").show();
                $(".modal-body #tk_05").hide();
            } else if (load_check == 6) {
                //edit tk05
                $(".modal-body #chairman").prop('disabled', true);
                $(".modal-body #director_1").prop('disabled', true);
                $(".modal-body #director_2").prop('disabled', true);
                $(".modal-body #score_tk05").show();
                $(".modal-body #chairman").val(rowData['data_tk05']['email_director1']);
                $(".modal-body #director_1").val(rowData['data_tk05']['email_director2']);
                $(".modal-body #director_2").val(rowData['teacher']['name_user'] + ' ' + rowData['teacher']['lastname_user']);
                $(".modal-body #file_tk05").hide();
                $("#tk_05_file_read_1").click(() => window.open('<?php echo site_url('openfile/') ?>' + rowData['data_tk05']['id_file_05'], '_blank'));
                if (rowData['data_tk05']['id_file_present'] != null) {
                    $(".modal-body #tk_05_file_present").show();
                    $("#tk_05_file_read_2").click(() => window.open('<?php echo site_url('openfile/') ?>' + rowData['data_tk05']['id_file_present'], '_blank'));
                } else {
                    $(".modal-body #tk_05_file_present").hide();
                }
                if (rowData['data_tk05']['id_score'] != null) {
                    $(".modal-body #tk_05_score").show();
                } else {
                    $(".modal-body #tk_05_score").hide();
                }
                if (rowData['data_tk05']['status_tk_05'] == 4) {
                    $(".modal-footer #submit_success").prop('disabled', false);
                    $(".modal-footer #submit_back_edit").prop('disabled', false);
                    $(".modal-footer #submit_danger").prop('disabled', false);
                } else {
                    $(".modal-footer #submit_success").prop('disabled', true);
                    $(".modal-footer #submit_back_edit").prop('disabled', true);
                    $(".modal-footer #submit_danger").prop('disabled', true);
                }

                $("#submit_success").click(() => confirm_Alert('ต้องการให้ผ่านหรือไม่?', rowData['data_tk05']['id_tk_05'] + '/5/6'));
                $("#submit_back_edit").click(() => comment(rowData['id_project'], rowData['data_tk05']['id_tk_05'], '5'));
                $("#submit_danger").click(() => confirm_Alert('ต้องการยกเลิกเอกสารหรือไม่?', rowData['data_tk05']['id_tk_05'] + '/5/5'));
                $(".modal-header #title_modal").text('ข้อมูล ทก.05');
                $(".modal-body #tk_01").hide();
                $(".modal-body #tk_02").hide();
                $(".modal-body #tk_03").hide();
                $(".modal-body #tk_04").hide();
                $(".modal-body #tk_05").show();
            }
        }
    </script>
    <script>
        function confirm_Alert(text, url) {
            Swal.fire({
                title: text,
                icon: 'question',
                showCancelButton: true,
                confirmButtonColor: "#28a745",
                confirmButtonText: "submit",
            }).then((result) => {
                if (result.isConfirmed) {
                    // Show loading indicator
                    Swal.showLoading();

                    $.ajax({
                        url: '<?= base_url('/teacher/progress/changestatus/tk/') ?>' + url,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        beforeSend: function () {
                            // Show loading indicator here
                            var loadingIndicator = Swal.fire({
                                title: 'กําลังดําเนินการ...',
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                showConfirmButton: false,
                            });
                        },
                    }).done(function (response) {
                        Swal.close();
                        if (response.success) {
                            Swal.fire({
                                title: response.message,
                                icon: 'success',
                                showConfirmButton: false
                            });
                            setTimeout(() => {
                                if (response.reload) {
                                    window.location.reload();
                                }
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: response.message,
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                }
            });
        }
    </script>
    <script>
        function confirm_check_file(id_file, id_tk_04, id_project) {
            Swal.fire({
                title: "ต้องการให้เอกสารผ่านหรือไม่?",
                showDenyButton: true,
                showCancelButton: true,
                confirmButtonText: "เอกสารผ่าน",
                denyButtonText: `เอกสารไม่ผ่าน`,
                cancelButtonText: "ยกเลิก", // Set the cancel button text
            }).then((result) => {
                /* Read more about isConfirmed, isDenied below */
                if (result.isConfirmed) {
                    var url = id_file + '/1/' + id_tk_04;
                    Swal.showLoading();
                    $.ajax({
                        url: '<?= base_url('/teacher/progress/changestatus/file/') ?>' + url,
                        headers: {
                            'X-Requested-With': 'XMLHttpRequest'
                        },
                        beforeSend: function () {
                            // Show loading indicator here
                            var loadingIndicator = Swal.fire({
                                title: 'กําลังดําเนินการ...',
                                allowEscapeKey: false,
                                allowOutsideClick: false,
                                showConfirmButton: false,
                            });
                        },
                    }).done(function (response) {
                        Swal.close();
                        if (response.success) {
                            Swal.fire({
                                title: response.message,
                                icon: 'success',
                                showConfirmButton: false
                            });
                            setTimeout(() => {
                                if (response.reload) {
                                    window.location.reload();
                                }
                            }, 2000);
                        } else {
                            Swal.fire({
                                title: response.message,
                                icon: 'error',
                                showConfirmButton: true
                            });
                        }
                    });
                } else if (result.isDenied) {
                    var url = id_file + '/2/' + id_tk_04;
                    $(".modal-body #url_route_file_tk").val(url);
                    comment(id_project, id_tk_04, '4');
                }
                // Show loading indicator

            });
        }
    </script>
    <script>
        function comment(id_project, id_tk, type) {
            main_tk = document.getElementById("main_tk");
            c_comment = document.getElementById("c_comment");
            main_tk.style.display = "none";
            c_comment.style.display = "block";
            $(".modal-body #file").empty();
            $(".modal-body #comment").empty();
            $(".modal-body #url_route_file").val("comment/create/" + id_project + "/" + id_tk + "/" + type);
        }
    </script>
    <script>
        function action_(url, form) {
            var formData = new FormData(document.getElementById(form));
            $.ajax({
                url: '<?= base_url() ?>' + url,
                type: "POST",
                cache: false,
                data: formData,
                processData: false,
                contentType: false,
                dataType: "JSON",
                beforeSend: function () {
                    // Show loading indicator here
                    var loadingIndicator = Swal.fire({
                        title: 'กําลังดําเนินการ...',
                        allowEscapeKey: false,
                        allowOutsideClick: false,
                        showConfirmButton: false,
                    });
                },
                success: function (response) {
                    if (response.success) {
                        Swal.fire({
                            title: response.message,
                            icon: 'success',
                            showConfirmButton: false,
                            allowOutsideClick: false
                        });
                        setTimeout(() => {
                            if (response.reload) {
                                window.location.reload();
                            }
                        }, 2000);
                    }
                },
                error: function (xhr, status, error) {
                    Swal.fire({
                        title: "เกิดข้อผิดพลาด",
                        icon: 'error',
                        showConfirmButton: true,
                        confirmButtonText: "ตกลง",
                    });
                },
            });
        }
    </script>