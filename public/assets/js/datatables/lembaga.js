"use strict";
// Class definition

$.ajaxSetup({
    headers: {
        'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
    }
});

var KTDatatableJsonRemoteDemo = function () {
    // Private functions

    // basic demo
    var demo = function () {
        var datatable = $('#kt_datatable').KTDatatable({
            // datasource definition
            data: {
                type: 'remote',
                source: HOST_URL + '/admin/list-lembaga/data',
                pageSize: 10,
            },

            // layout definition
            layout: {
                scroll: false, // enable/disable datatable scroll both horizontal and vertical when needed.
                footer: false // display/hide footer
            },

            // column sorting
            sortable: true,

            pagination: true,

            search: {
                input: $('#kt_datatable_search_query'),
                key: 'generalSearch'
            },

            // columns definition
            columns: [{
                field: 'id',
                title: 'No',
                sortable: 'desc',
                width: 25,
                type: 'number',
                selector: false,
                textAlign: 'center',
                template: function(data, index) {
                    index++
                    return index
                }
            }, {
                field: 'nama',
                title: 'Perusahaan',
                width: 210,
                template: function (data) {
                    var number = KTUtil.getRandomInt(1, 14);
                    var user_img = 'background-image:url(\'' + data.foto + '\')';

                    var output = '';
                    output = '<div class="d-flex align-items-center">\
                            <div class="symbol symbol-40 flex-shrink-0">\
                                <div class="symbol-label" style="' + user_img + '"></div>\
                            </div>\
                            <div class="ml-2">\
                                <span class="text-dark-75 font-weight-bold line-height-sm text-hover-primary">' + data.nama + '</span>\
                            </div>\
                        </div>';

                    return output;
                },
            }, {
                field: 'alamat',
                title: 'Alamat',
                width: 160,
            }, {
                field: 'telepon',
                title: 'Telepon',
                width: 100,
            }, {
                field: 'email',
                title: 'Email',
                width: 180,
            }, {
                field: 'website',
                title: 'Website',
            }],
        });

        datatable.on(
            'datatable-on-check datatable-on-uncheck',
            function (e) {
                var checkedNodes = datatable.rows('.datatable-row-active').nodes();
                var count = checkedNodes.length;
                $('#kt_datatable_selected_records').html(count);
                if (count > 0) {
                    $('#kt_datatable_group_action_form').collapse('show');
                } else {
                    $('#kt_datatable_group_action_form').collapse('hide');
                }
            });
        };

    return {
        // public functions
        init: function () {
            demo();
        }
    };
}();

jQuery(document).ready(function () {
    KTDatatableJsonRemoteDemo.init();
});

// delete function
$('body').on('click', '.delete', function () {
    var id = $(this).data('id');
    $.ajax({
        type: "POST",
        url: `${HOST_URL}/admin/siswa/hapus`,
        data: { id: id },
        dataType: 'json',
    });
    Swal.fire({
        title: 'Apakah anda yakin?',
        text: 'Jika data terhapus tidak dapat dikembalikan!',
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Hapus data!'
    }).then((result)=>{
        if(result.isConfirmed){
            Swal.fire(
                'Terhapus!',
                'Data telah berhasil dihapus',
                'success'
            )
            location.reload();
        }
    })
});
