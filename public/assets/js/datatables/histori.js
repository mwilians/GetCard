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
                source: HOST_URL + '/user/histori-pembayaran/data-histori',
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
            columns: [
            // {
            //     field: 'id',
            //     title: '#',
            //     sortable: 'desc',
            //     width: 20,
            //     selector: true,
            //     textAlign: 'center',
            // }, 
            
            {
                field: 'paket',
                title: 'Nama Paket',
                width: 120,
                template: function(dataHistori){
                    console.log(dataHistori);
                    return dataHistori.package.paket;
                }
            }, {
                field: 'order_id',
                title: 'ID Order',
                width: 110,
            }, {
                field: 'gross_amount',
                title: 'Harga',
                width: 65,
                template: function (dataHistori) {
                    var gross_amount = dataHistori.gross_amount.split(".");
                    return gross_amount[0];
                }
            }, {
                field: 'payment_type',
                title: 'Metode Pembayaran',
                textAlign: 'center',
                width: 120,
            },  {
                field: 'created_at',
                title: 'Tanggal',
                width: 100,
                template: function (dataHistori) {
                    var created_at = dataHistori.created_at.split("T");
                    return created_at[0];
                }
            }, {
                field: 'status',
                title: 'Status',
                width: 90,
                template: function(data) {
                    var status = {
                        'settlement': {
                            'class': 'label-light-success',
                            'title': 'settlement'
                        },
                        'capture': {
                            'class': 'label-light-success',
                            'title': 'capture'
                        },
                        'pending': {
                            'class': 'label-light-warning',
                            'title': 'pending'
                        },
                        'deny': {
                            'class': 'label-light-danger',
                            'title': 'deny'
                        },
                        'cancel': {
                            'class': 'label-light-danger',
                            'title': 'cancel'
                        },
                        'expire': {
                            'class': 'label-light-danger',
                            'title': 'expire'
                        }
                    };
                    var current = status[data.status];
                    return `<span class="label font-weight-bold label-lg label-inline ${current.class}">${current.title}</span>`;
                }
            }, {
                field: '',
                title: 'Tagihan',
                sortable: false,
                width: 80,
                overflow: 'visible',
                textAlign: 'center',
                autoHide: false,
                template: function (dataHistori) {
                    
                    return '\
                        <a href="' + dataHistori.pdf_url + '" class="btn btn-block btn-sm btn-light-primary font-weight-bolder text-uppercase" target="_blank" title="Lihat">\
                        Lihat</a>\
                    ';
                },
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