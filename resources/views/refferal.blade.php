@extends('layouts.main')

@section('content')

@include('nav_saldo')
<br><br>
<div class="container">
    <h2 class="title">Referral Downline</h2>
    <link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.16/css/jquery.dataTables.min.css">
<link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.css">
<form id="searchhistory" class="needs-validation searchhistory" novalidate="novalidate">
<input type="hidden" name="_token" value="rXcSnXgOTVzMCsRO5wL0WOwSgKJiFtCYbSaIFYp5">    <div class="box-wrapper plr-15">

        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4 ">
                <div class="">
                    Tanggal                </div>
            </div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <input type="text" class="form-control datepicker m-15" name="daterange">
            </div>
        </div>
        <div class="row d-flex align-items-center">
            <div class="col-md-3 col-xs-4  "></div>
            <div class="col-md-9 col-xs-8 d-flex flex-wrap">
                <button type="submit" class="btn btn-primary m-15">Cari Pesan Disini</button>
            </div>
        </div>
    </div>

 </form>



    <script type="text/javascript" src="https://cdn.jsdelivr.net/momentjs/latest/moment.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/daterangepicker/daterangepicker.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js" type="text/javascript"></script>

    <script src="https://cdn.jsdelivr.net/jquery.validation/1.15.1/jquery.validate.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.19.0/dist/additional-methods.min.js"></script>
    <script>
        $(document).ready(function () {

            var start = moment().subtract(0, 'days'),
                end = moment(),
                last2 = moment().subtract(2, 'days'),
                last3 = moment().subtract(3, 'days');

                
            // $('input[name="daterange"]').daterangepicker({

            // });

            $('input[name="daterange"]').on('cancel.daterangepicker', function (ev, picker) {
                $(this).val('');
            });

            function cb(start, end) {
                $('.datepicker').html(start.format('YYYY/MM/DD') + ' - ' + end.format('YYYY/MM/DD'));
            }

            $('.datepicker').on('click', function(e) {
                e.preventDefault();
                $(this).attr("autocomplete", "off");
            });

            $('.datepicker').daterangepicker({
                locale: {
                    format: 'YYYY-MM-DD',
                    cancelLabel: 'Clear'
                },
                startDate: start,
                endDate: end,
                ranges: {
                    "Hari ini": [moment(), moment()],
                    "Kemarin": [moment().subtract(1, 'days').subtract(12, 'hours'), moment().subtract(1, 'days').subtract(12, 'hours')],
                    "7 Hari Terakhir":  [moment().subtract(6, 'days').subtract(12, 'hours'), moment().subtract(12, 'hours')],
                    "30 hari terakhir": [moment().subtract(29, 'days').subtract(12, 'hours'), moment().subtract(12, 'hours')],
                    "Bulan ini": [moment().startOf('month'), moment().endOf('month').subtract(12, 'hours')],
                    "Bulan lalu":[moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month').subtract(12, 'hours')]
                }
            }, cb);
            cb(start, end);

            $("#searchhistory").validate({
            rules: {

                daterange:{
                    required: true,

                }
            },
            // Specify validation error messages
            messages: {


                daterange: {
                    required: "lang.cant be empty",
                },
            },
            errorElement: "em",
            errorPlacement: function (error, element) {
                // Add the `help-block` class to the error element
                error.addClass("help-block mlr-15");

                // Add `has-feedback` class to the parent div.form-group
                // in order to add icons to inputs
                //element.parents(".col-sm-6").addClass("has-feedback");
                element.addClass("has-feedback");
                if (element.prop("type") === "checkbox") {
                    error.insertAfter(element.parent("label"));
                } else {
                    error.insertAfter(element);
                }

                // Add the span element, if doesn't exists, and apply the icon classes to it.
                if (!element.next("i")[0]) {
                    $("<i class='icon-cancel form-control-feedback absolute m-15'></i>").insertAfter(element);
                }
            },
            success: function (label, element) {
                // Add the span element, if doesn't exists, and apply the icon classes to it.

                if (!$(element).next("i")[0]) {
                    $("<i class='icon-checkmark  form-control-feedback absolute m-15'></i>").insertAfter($(element));
                }
            },
            highlight: function (element, errorClass, validClass) {
                $(element).addClass("has-error").removeClass("has-success");
                $(element).next("i").addClass("icon-cancel").removeClass("icon-checkmark");
            },
            unhighlight: function (element, errorClass, validClass) {
                $(element).addClass("has-success").removeClass("has-error");
                $(element).next("i").addClass("icon-checkmark").removeClass("icon-cancel");
            },
            submitHandler: function (form) {
                $('#historySearchResult').html('');
                $('button[type=submit]').prop('disabled',true);
                $.post('#', $('#searchhistory').serialize(), function (data) {
                    $('button[type=submit]').prop('disabled',false);
                    $('button[type=submit]').removeClass("disabled");

                    $('#historySearchResult').html(data);

                    $('#referral-table').on( 'draw.dt', function () {
                            convertToLocalDate();
                    } );
 
                    convertToLocalDate();
                });
            }
        });

        function convertToLocalDate(){
            $('.js-date').each(function(i ){
                    var dt = $(this).text().trim();
                    var isutc = $(this).hasClass('isutc');

                    if(isutc  ){
    
                        if(dt && dt!= '-' ){

                            if(dt[dt.length - 1] !='Z'){
                                dt = dt + 'Z';
                            }
                            $(this).text(moment.utc(dt).local().format("YYYY-MM-DD | HH:mm:ss"));
                            $(this).removeClass('isutc' );
                        }
                    }        
              });
        }
        $('#referral-table').on( 'draw.dt', function () {
            convertToLocalDate();
        } );
        convertToLocalDate();
    });

    </script>
    <div class="mt-2" id="historySearchResult">
     <div id="referral-table_wrapper" class="dataTables_wrapper no-footer"><div class="dataTables_length" id="referral-table_length"><label>Menampilkan <select name="referral-table_length" aria-controls="referral-table" class=""><option value="10">10</option><option value="25">25</option><option value="50">50</option><option value="100">100</option></select> entri</label></div><div id="referral-table_filter" class="dataTables_filter"><label>Cari Pesan Disini<input type="search" class="" placeholder="" aria-controls="referral-table"></label><i class="icon-search search_icon"></i></div><table class="table table-bordered table-hover toggle-circle dataTable no-footer table-striped table-responsive" role="grid" aria-describedby="referral-table_info" id="referral-table">
            <thead>
            <tr role="row"><th class="sorting_asc" tabindex="0" aria-controls="referral-table" rowspan="1" colspan="1" aria-sort="ascending" aria-label=" Tidak punya Referral bulan ini. : activate to sort column descending" style="width: 344px;"> Tidak punya Referral bulan ini. </th></tr>
        </thead>
    
<tbody><tr class="odd"><td valign="top" colspan="1" class="dataTables_empty">No records available</td></tr></tbody></table><div class="dataTables_info" id="referral-table_info" role="status" aria-live="polite">Tampilkan 0 hingga 0 dari 0 entri</div><div class="dataTables_paginate paging_simple_numbers" id="referral-table_paginate"><a class="paginate_button previous disabled" aria-controls="referral-table" data-dt-idx="0" tabindex="0" id="referral-table_previous">Sebelumnya</a><span></span><a class="paginate_button next disabled" aria-controls="referral-table" data-dt-idx="1" tabindex="0" id="referral-table_next">Lanjut</a></div></div>
<script>
  $('#referral-table').DataTable({
    
    language: { 
        search: "" ,
        "lengthMenu": "Menampilkan _MENU_ entri",
        "sSearch" : "Cari Pesan Disini",
        "sEmptyTable" : "No records available",
        "sInfoEmpty":      "Tampilkan 0 hingga 0 dari 0 entri",
        "sInfo":            "Menampilkan _START_ hingga _END_ dari _TOTAL_ item",
        "sInfoFiltered":    "(disaring dari _MAX_ total entri)",
        "oPaginate": {
            "sFirst":     "Pertama",
            "sLast":      "Terakhir",
            "sNext":     "Lanjut",
            "sPrevious":  "Sebelumnya"
	    },
    },
    'fnDrawCallback': function (oSettings) {
		$('.dataTables_filter').append('<i class="icon-search search_icon"></i>');
    },
      responsive: true,
  });
</script>
    </div>
</div>

@endsection