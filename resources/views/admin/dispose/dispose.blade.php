@extends('mainpages.maindmin')
@section('css')
    <style>

    </style>
    <script type="text/javascript">

    </script>

@endsection
@section('content')

    <!-- begin:: Content Head -->
    {{--<div class="kt-subheader   kt-grid__item" id="kt_subheader">--}}
    {{--<div class="kt-container ">--}}
    {{--<div class="kt-subheader__main">--}}

    {{--<h3 class="kt-subheader__title"></h3>--}}

    {{--<span class="kt-subheader__separator kt-subheader__separator--v"></span>--}}

    {{--<span class="kt-subheader__desc">#XRS-45670</span>--}}

    {{--<a href="#" class="btn btn-label-primary btn-bold btn-icon-h kt-margin-l-10">--}}
    {{--Add New--}}
    {{--</a>--}}
    {{--</div>--}}
    {{--<div class="kt-subheader__toolbar">--}}
    {{--<div class="kt-subheader__wrapper">--}}
    {{--<a href="#" class="btn kt-subheader__btn-primary">--}}
    {{--Actions &nbsp;--}}
    {{--<!--<i class="flaticon2-calendar-1"></i>-->--}}
    {{--</a>--}}

    {{--<a href="#" class="btn kt-subheader__btn-primary btn-icon">--}}
    {{--<i class="flaticon2-file"></i>--}}
    {{--</a>--}}

    {{--<a href="#" class="btn kt-subheader__btn-primary btn-icon">--}}
    {{--<i class="flaticon-download-1"></i>--}}
    {{--</a>--}}

    {{--<a href="#" class="btn kt-subheader__btn-primary btn-icon">--}}
    {{--<i class="flaticon2-fax"></i>--}}
    {{--</a>--}}

    {{--<a href="#" class="btn kt-subheader__btn-primary btn-icon">--}}
    {{--<i class="flaticon2-settings"></i>--}}
    {{--</a>--}}

    {{--<div class="dropdown dropdown-inline" data-toggle="kt-tooltip" title="Quick actions" data-placement="left">--}}
    {{--<a href="#" class="btn btn-icon"data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
    {{--<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1" class="kt-svg-icon kt-svg-icon--success kt-svg-icon--md">--}}
    {{--<g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">--}}
    {{--<polygon id="Shape" points="0 0 24 0 24 24 0 24"/>--}}
    {{--<path d="M5.85714286,2 L13.7364114,2 C14.0910962,2 14.4343066,2.12568431 14.7051108,2.35473959 L19.4686994,6.3839416 C19.8056532,6.66894833 20,7.08787823 20,7.52920201 L20,20.0833333 C20,21.8738751 19.9795521,22 18.1428571,22 L5.85714286,22 C4.02044787,22 4,21.8738751 4,20.0833333 L4,3.91666667 C4,2.12612489 4.02044787,2 5.85714286,2 Z" id="Combined-Shape" fill="#000000" fill-rule="nonzero" opacity="0.3"/>--}}
    {{--<path d="M11,14 L9,14 C8.44771525,14 8,13.5522847 8,13 C8,12.4477153 8.44771525,12 9,12 L11,12 L11,10 C11,9.44771525 11.4477153,9 12,9 C12.5522847,9 13,9.44771525 13,10 L13,12 L15,12 C15.5522847,12 16,12.4477153 16,13 C16,13.5522847 15.5522847,14 15,14 L13,14 L13,16 C13,16.5522847 12.5522847,17 12,17 C11.4477153,17 11,16.5522847 11,16 L11,14 Z" id="Combined-Shape" fill="#000000"/>--}}
    {{--</g>--}}
    {{--</svg>                        <!--<i class="flaticon2-plus"></i>-->--}}
    {{--</a>--}}
    {{--<div class="dropdown-menu dropdown-menu-fit dropdown-menu-md dropdown-menu-right">--}}
    {{--<!--begin::Nav-->--}}
    {{--<ul class="kt-nav">--}}
    {{--<li class="kt-nav__head">--}}
    {{--Export Options:--}}
    {{--<i class="flaticon2-correct kt-font-warning" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more..."></i>--}}
    {{--</li>--}}
    {{--<li class="kt-nav__separator"></li>--}}
    {{--<li class="kt-nav__item">--}}
    {{--<a href="#" class="kt-nav__link">--}}
    {{--<i class="kt-nav__link-icon flaticon2-drop"></i>--}}
    {{--<span class="kt-nav__link-text">Orders</span>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="kt-nav__item">--}}
    {{--<a href="#" class="kt-nav__link">--}}
    {{--<i class="kt-nav__link-icon flaticon2-new-email"></i>--}}
    {{--<span class="kt-nav__link-text">Members</span>--}}
    {{--<span class="kt-nav__link-badge">--}}
    {{--<span class="kt-badge kt-badge--brand kt-badge--rounded">15</span>--}}
    {{--</span>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="kt-nav__item">--}}
    {{--<a href="#" class="kt-nav__link">--}}
    {{--<i class="kt-nav__link-icon flaticon2-calendar-8"></i>--}}
    {{--<span class="kt-nav__link-text">Reports</span>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="kt-nav__item">--}}
    {{--<a href="#" class="kt-nav__link">--}}
    {{--<i class="kt-nav__link-icon flaticon2-link"></i>--}}
    {{--<span class="kt-nav__link-text">Finance</span>--}}
    {{--</a>--}}
    {{--</li>--}}
    {{--<li class="kt-nav__separator"></li>--}}
    {{--<li class="kt-nav__foot">--}}
    {{--<a class="btn btn-label-brand btn-bold btn-sm" href="#">More options</a>--}}
    {{--<a class="btn btn-clean btn-bold btn-sm kt-hidden" href="#" data-toggle="kt-tooltip" data-placement="right" title="Click to learn more...">Learn more</a>--}}
    {{--</li>--}}
    {{--</ul>--}}
    {{--<!--end::Nav-->--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    {{--</div>--}}
    <!-- end:: Content Head -->
    <!-- begin:: Content -->
    <div class="kt-container  kt-grid__item kt-grid__item--fluid">
        <div class="row">
            <div class="col-lg-12">
                <!--begin::Portlet-->
                <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                    <div class="kt-portlet__head kt-portlet__head--lg">
                        <div class="kt-portlet__head-label">
                            <h3 class="kt-portlet__head-title">Wet Stock Management</h3>
                        </div>
                        {{--<div class="alert alert-success msg" style="display: none;"><h5 style="margin-bottom: 0">Product was added successfully</h5></div>--}}

                        <div class="kt-portlet__head-toolbar">
                            <a href="/dashboard" class="btn btn-clean kt-margin-r-10">
                                <i class="la la-arrow-left"></i>
                                <span class="kt-hidden-mobile">Back</span>
                            </a>
                            <div class="btn-group">
                                <button type="button" class="btn btn-brand save">
                                    <i class="la la-check"></i>
                                    <span class="kt-hidden-mobile">Save</span>
                                </button>
                                {{--<button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--</button>--}}
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__item">
                                            <a href="/showusers" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-reload"></i>
                                                <span class="kt-nav__link-text">Save & continue</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="/dashboard" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-power"></i>
                                                <span class="kt-nav__link-text">Save & exit</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-edit-interface-symbol-of-pencil-tool"></i>
                                                <span class="kt-nav__link-text">Save & edit</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-add-1"></i>
                                                <span class="kt-nav__link-text">Save & add new</span>
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="kt-portlet__body">
                        {{--<form class="kt-form" id="kt_form">--}}
                        <div class="row">
                            <div class="col-xl-12">
                                <div class="kt-section kt-section--first">
                                    <div class="kt-section__body">
{{--                                        <h3 class="kt-section__title kt-section__title-lg">Wet Stock Management:</h3>--}}
                                        <div class="form-group row">
                                            {{--<div class="col-md-3"></div>--}}
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Product</label>
                                                    <div class="input-group">
                                                        <select class="form-control kt-select2 selectproduct" id="kt_select2_1" name="param">
                                                            <option value="defaultproduct" selected disabled>Select a Product</option>
                                                            @foreach($products as $product)
                                                                <option value="{{$product->id}}">{{$product->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-text error-alert text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>
{{--                                            <div class="col-md-1" style="margin-top: 25px; ">--}}
{{--                                                <button type=button class=" btn btn-primary btn-receive form-control " data-toggle="modal" data-target="#addproduct">--}}
{{--                                                    Add</button>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-2">--}}
{{--                                                <div class="form-group">--}}
{{--                                                    <label>Company</label>--}}
{{--                                                    <div class="input-group">--}}
{{--                                                        <select class="form-control kt-select2 selectcompany" id="kt_select2_2" name="param">--}}
{{--                                                            <option value="defaultcompany" selected disabled>Select a Company</option>--}}
{{--                                                            @foreach($companies as $company)--}}
{{--                                                                <option value="{{$company->id}}">{{$company->company_name}}</option>--}}
{{--                                                            @endforeach--}}
{{--                                                        </select>--}}
{{--                                                        <span class="form-text error-alert text-danger"></span>--}}

{{--                                                    </div>--}}
{{--                                                </div>--}}
{{--                                            </div>--}}
{{--                                            <div class="col-md-1" style="margin-top: 25px; ">--}}
{{--                                                <button type=button class=" btn btn-primary btn-receive form-control " data-toggle="modal" data-target="#addcompany">--}}
{{--                                                    Add</button>--}}
{{--                                            </div>--}}

                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Product Opening stock</label>
                                                    <input type="text" class="form-control" autocomplete="off" readonly id="opening_stock" placeholder="Opening Stock">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Deliveries</label>
                                                    <input type="text" class="form-control" autocomplete="off" readonly id="prev_purchases" placeholder="Deliveries">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Sales</label>
                                                    <input type="text" class="form-control" autocomplete="off" readonly id="prev_sales" placeholder="Sales">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Product Book stock</label>
                                                    <input type="text" class="form-control" autocomplete="off" readonly id="product_prev_stock" placeholder="Product Stock">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Product Testing</label>
                                                    <input type="text" class="form-control" autocomplete="off" id="product_testing" placeholder="Product Testing">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Real Stock</label>
                                                    <input type="text" class="form-control" autocomplete="off" id="new_stock" placeholder="Enter Analysed Stock">
                                                    <input type="text" class="form-control" autocomplete="off" id="purchase_price" style="display: none;">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Variance</label>
                                                    <input type="text" class="form-control" readonly autocomplete="off" id="variance" placeholder="Product Variance">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                            <div class="col-md-2">
                                                <div class="form-group">
                                                    <label>Variance Value</label>
                                                    <input type="text" class="form-control" readonly autocomplete="off" id="lost_stock_value" placeholder="Lost Stock Value">
                                                    <span class="form-text error-alert text-danger"></span>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            {{--</form>--}}
                        </div>
                    </div>
                </div>
            </div>
        </div>

        @endsection
        @section('scripts')
            <script src="{{ url('assets/js/demo10/pages/crud/forms/widgets/select2.js') }}" type="text/javascript"></script>

            <script>
                $(document).ready(function (e) {
                    setInterval(function () {
                        var prev_stock=$('#product_prev_stock').val();
                        var new_stock=$('#new_stock').val();
                        var purchase_price=$('#purchase_price').val();
                        var varience=parseFloat(new_stock-prev_stock);

                        // var stock_disposed= parseFloat(-1*(new_stock-prev_stock));
                        // var lost_stock_value= parseFloat(stock_disposed*purchase_priec);

                        $( "#new_stock" ).keyup(function(){
                            if(new_stock == ''|| new_stock == null){
                                $('#variance').val('');
                                $('#lost_stock_value').val('');
                            }else{
                                $('#variance').val(varience);
                                $('#lost_stock_value').val(varience*purchase_price);
                            }
                            // $('#variance').val(varience);
                            // $('#lost_stock_value').val(varience*purchase_price);
                        });

                        // console.log(lost_stock_value);
                        // console.log(stock_disposed);
                    },100);
                    // $('.selectproduct').on('select2:select',function () {
                    //
                    //
                    // });

                    $("#sale").keypress(function(e) {
                        if(e.which == 13) {
                            $(".save").click();
                        }
                    });

                    $('.selectproduct').on('select2:select',function () {
                        var id=$('.selectproduct').val();
                        // alert(id);
                        $.ajax({
                            url:'{{url('dispose/fetch_prev_data')}}',
                            type: 'post',
                            data:{'id':id,'_token':'{{csrf_token()}}'},
                            success:function (data) {
                                console.log(data);
                                // console.log(data.opening_stock);
                                // $('.').html('');
                                $('#product_prev_stock').val(data.stock.total_qty);
                                $('#purchase_price').val(data.opening_stock.closing_stock);
                                $('#opening_stock').val(data.stock.purchase_price);
                                $('#prev_purchases').val(data.purchases);
                                $('#prev_sales').val(data.sale);

                                var prev_stock=$('#product_prev_stock').val();
                                var new_stock=$('#new_stock').val();
                                var purchase_price=$('#purchase_price').val();
                                var varience=parseFloat(new_stock-prev_stock);
                                if(new_stock == '' || new_stock ==null) {
                                    $('#variance').val('');
                                    $('#lost_stock_value').val('');
                                }else{
                                    $('#variance').val(varience);
                                    $('#lost_stock_value').val(varience*purchase_price);
                                }
                            },
                            error:function (error) {
                                console.log(error.responseText);
                            }
                        });
                    });


                    $(".save").click(function (e) {
                        // alert('save');
                        var product=$('.selectproduct').val();
                        var prev_stock=$('#product_prev_stock').val();
                        var new_stock=$('#new_stock').val();
                        var lost_stock=$('#variance').val();
                        var product_testing=$('#product_testing').val();
                        var lost_stock_value=$('#lost_stock_value').val();
                        var analysed_date=$('#analysed_date').val();
                        //validation
                        if (product == 'defaultproduct' || product == null) {
                            // $('#name_error').removeClass('is-valid').addClass('is-invalid').closest('div').children('.form-text').text('Name is Required').removeClass('error-alert').show();
                            $('.selectproduct').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Product Name is Required.').addClass('text-danger').show();
                        } else {
                            $('.selectproduct').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        }
                        if (new_stock == '' || new_stock == null) {
                            $('#new_stock').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Enter Analysed Stock.').addClass('text-danger').show();
                        } else {
                            $('#new_stock').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        }
                        // if (sale == '' || sale == null) {
                        //     $('#sale').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Sale Price is Required.').addClass('text-danger').show();
                        // } else {
                        //     $('#sale').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        // }
                        if ($('.is-invalid').length<1) {
                            $.ajax({
                                url: '{{ url("dispose/insert_new_dispose") }}',
                                type: 'post',
                                data: {
                                    'product': product,
                                    'prev_stock': prev_stock,
                                    'new_stock': new_stock,
                                    'lost_stock': lost_stock,
                                    'product_testing': product_testing,
                                    'lost_stock_value': lost_stock_value,
                                    // 'analysed_date': analysed_date,
                                    '_token': '{{csrf_token()}}'
                                },
                                success: function (data) {
                                    console.log(data);
                                    $.notify('<strong>Saving</strong> Do not close this page...', {
                                        type: 'success',
                                        allow_dismiss: false,
                                        showProgressbar: true,
                                        timer: 700,
                                        delay: 1000,
                                    });
                                    $('.selectproduct').val('defaultproduct').change();
                                    $('#product_prev_stock').val('');
                                    $('#new_stock').val('');
                                    $('#lost_stock').val('');
                                    $('#lost_stock_value').val('');
                                    $('#analysed_date').val('<?php echo date("m/d/Y"); ?>');

                                    $('.selectproduct').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                                    $('#product_prev_stock').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                                    $('#new_stock').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                                    $('#lost_stock').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                                    $('#lost_stock_value').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                                    $('#analysed_date').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();

                                },
                                error: function (error) {
                                    console.log(error.responseText);
                                    //
                                }
                            });
                        }
                    });

                });
            </script>

@endsection


