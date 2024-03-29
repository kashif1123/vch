<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>POS</title>

    <link href="{{url('assets/vendors/custom/fullcalendar/fullcalendar.bundle.css')}}" rel="stylesheet" type="text/css" />
{{--<link href="https://cdnjs.cloudflare.com/ajax/libs/ng-tags-input/3.2.0/ng-tags-input.bootstrap.min.cssnpm install" rel="stylesheet" type="text/css" />--}}
<!--end::Page Vendors Styles -->
    <!--begin::Global Theme Styles(used by all pages) -->
    <link rel="stylesheet" type="text/css" href="{{ url('custom/main.css') }}">

    <link href="{{url('assets/vendors/global/vendors.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('bootstrap-tagsinput.css')}}" rel="stylesheet" type="text/css" />
    <link href="{{url('assets/css/demo10/style.bundle.css')}}" rel="stylesheet" type="text/css" />
    <link rel="stylesheet" type="text/css" href="{{ url('DataTables/datatables.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('assets/editor/css/editor.bootstrap.css') }}">
    <script
            src="https://code.jquery.com/jquery-3.4.1.min.js"
            integrity="sha256-CSXorXvZcTkaix6Yvo6HppcZGetbYMGWSFlBw8HfCJo="
            crossorigin="anonymous"></script>
    <script src="{{ url('DataTables/datatables.js') }}"></script>
    <script src="{{ url('assets/editor/js/dataTables.editor.js') }}"></script>
    <script src="{{ url('assets/editor/js/editor.bootstrap.js') }}"></script>
    <style>
        input:read-only{
            background-color: rgba(158, 158, 158, 0.21) !important;
        }
    </style>
</head>
<body>

<div class="kt-container  kt-grid__item kt-grid__item--fluid">
    <div class="row">
        <div class="col-lg-12">
            <!--begin::Portlet-->
            <div class="kt-portlet kt-portlet--last kt-portlet--head-lg kt-portlet--responsive-mobile" id="kt_page_portlet">
                <div class="kt-portlet__head kt-portlet__head--lg">
                    <div class="kt-portlet__head-label">
                        <h3 class="kt-portlet__head-title">Sale Products</h3>
                        {{--<button type="button" class="kt-margin-l-100 btn btn-primary" data-toggle="modal" data-target="#addproduct">--}}
                        {{--Add Product--}}
                        {{--</button>--}}
                    </div>
                    <div class="kt-portlet__head-toolbar">
                        {{--<a href="#" class="btn btn-clean kt-margin-r-10">--}}
                        {{--<i class="la la-arrow-left"></i>--}}
                        {{--<span class="kt-hidden-mobile">Back</span>--}}
                        {{--</a>--}}
                        <div class="btn-group">
                            <button type="button" id="addtocartbtn" class=" btn btn-brand save">
                                <i class="la la-check"></i>
                                <span class="kt-hidden-mobile" id="save">Add to Cart</span>
                                {{--</button>--}}
                                {{--<button type="button" class="btn btn-brand dropdown-toggle dropdown-toggle-split" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">--}}
                                {{--</button>--}}
                                <div class="dropdown-menu dropdown-menu-right">
                                    <ul class="kt-nav">
                                        <li class="kt-nav__item save">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-reload"></i>
                                                <span class="kt-nav__link-text">Save & continue</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item save">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-power"></i>
                                                <span class="kt-nav__link-text">Save & exit</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item save">
                                            <a href="#" class="kt-nav__link">
                                                <i class="kt-nav__link-icon flaticon2-edit-interface-symbol-of-pencil-tool"></i>
                                                <span class="kt-nav__link-text">Save & edit</span>
                                            </a>
                                        </li>
                                        <li class="kt-nav__item">
                                            <a href="#" class="kt-nav__link save">
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
                            <div class="">
                                <div class="kt-section__body">
                                    {{--<h3 class="kt-section__title kt-section__title-lg">Purchase Info:</h3>--}}
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Customer Name</label>
                                                <div class="input-group">
                                                    <select class="form-control kt-select2 customer" id="kt_select2_2" name="param">
                                                        <optgroup label="Customers">
                                                            @foreach($customers as $customer)
                                                                <option value="{{$customer->id}}">{{$customer->name}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                        <optgroup label="Suppliers">
                                                            @foreach($suppliers as $supplier)
                                                                <option value="{{$supplier ->id}}">{{$supplier->name}}</option>
                                                            @endforeach
                                                        </optgroup>
                                                    </select>
                                                    <span class="form-text error-alert text-danger" >Please Select a Valid supplier Name.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Invoice No</label>
                                                <input type="text" class="form-control" readonly id="invoice">
                                                <span class="form-text error-alert text-danger">You entered invalid invoice no.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Date of sale</label>
                                                <input type="text" class="form-control dop_dop c_l_o_s_e" style="background-color: white !important;" value="<?php echo date("m/d/Y"); ?>" id="kt_datepicker_1" readonly placeholder="Select date of sale"/>
                                                <span class="form-text error-alert text-danger" >Please select valid date of purchase.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Balance</label>
                                                <input type="text" class="form-control" readonly id="last_balance">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group row">
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Company</label>
                                                <div class="input-group">
                                                    <select class="form-control kt-select2 role company_id" id="kt_select2_2" name="param">
                                                        <option value="defaultcompany"selected>All</option>
                                                        @foreach($companies as $company)
                                                            <option value="{{$company->id}}">{{$company->company_name}}</option>
                                                        @endforeach
                                                    </select>
                                                    <span class="form-text error-alert text-danger" >Please Select a Valid Product Name.</span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Product Name</label>
                                                <div class="input-group">
                                                    <select class="form-control kt-select2 role product_id" id="kt_select2_8" name="param">
                                                        <option value="default" disabled selected>Select a Product</option>
                                                        @foreach($products as $product)
                                                            <option value="{{$product->id}}">{{$product->name}} <p style="font-size: 1px!important;color: white">{{$product->barcode}}</p></option>
                                                        @endforeach
                                                    </select>
                                                    <span class="form-text error-alert text-danger" >Please Select a Valid Product Name.</span>

                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label class="change_qty_label" >Quantity</label>
                                                <input type="number" min="0" value="1"  class="select_qty triggeraddbutton form-control" id="qty" placeholder="Quantity">
                                                <span class="form-text error-alert text-danger">You entered quantity.</span>
                                            </div>
                                        </div>
                                        {{--                                            <div class="col-md-3">--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <label>Rate</label>--}}
                                        {{--                                                    <input type="number" min="0" value="1"  class="rate triggeraddbutton form-control" id="rate" placeholder="Rate">--}}
                                        {{--                                                    <span class="form-text error-alert text-danger">You entered quantity.</span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        {{--                                            <div class="col-md-3">--}}
                                        {{--                                                <div class="form-group">--}}
                                        {{--                                                    <label>Discount %</label>--}}
                                        {{--                                                    <input type="number" autocomplete="off" value="0" max="100" class="triggeraddbutton form-control" id="p_discount" placeholder="Discount"--}}
                                        {{--                                                           onblur="if(this.value==''){ this.value='0';}"--}}
                                        {{--                                                           onfocus="if(this.value=='0'){ this.value='';}"--}}
                                        {{--                                                    >--}}
                                        {{--                                                    <span class="form-text error-alert text-danger">You entered invalid sale price.</span>--}}
                                        {{--                                                </div>--}}
                                        {{--                                            </div>--}}
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Sale Price</label>
                                                <input type="number" autocomplete="off"  class="triggeraddbutton form-control" id="s_price" placeholder="Sale Price">
                                                <span class="form-text error-alert text-danger">You entered invalid sale price.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Purchase Price</label>
                                                <input type="number" readonly autocomplete="off"  class="triggeraddbutton form-control" id="avg_purchase_price" placeholder="Sale Price">
                                                <span class="form-text error-alert text-danger">You entered invalid sale price.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Quantity Available</label>
                                                <input type="text" readonly class="form-control" id="total_qty" placeholder="Quantity Available">
                                                <span class="form-text error-alert text-danger">You entered quantity.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Sale (%)</label>
                                                <input type="text" readonly style="background-color: rgb(146 248 152 / 92%) !important" class="form-control" id="sale_percentage" placeholder="Sale %">
                                                <span class="form-text error-alert text-danger">You entered quantity.</span>
                                            </div>
                                        </div>
                                        <div class="col-md-3">
                                            <div class="form-group">
                                                <label>Sale (Rs)</label>
                                                <input type="text" readonly style="background-color: rgb(146 248 152 / 92%) !important" class="form-control" id="sale_rs" placeholder="Sale RS">
                                                <span class="form-text error-alert text-danger">You entered quantity.</span>
                                            </div>
                                        </div>


                                    </div>
                                    <div class="form-group row">
                                    </div>
                                    <div class="row">
                                        <div class="col-md-9">
                                            <div class="box">
                                            {{--<div class="box-header">--}}
                                            {{--<h3 class="box-title">User Report </h3>--}}
                                            {{--</div>--}}
                                            <!-- /.box-header -->
                                                <div class="box-body" style="overflow-x:auto;border: #5e5e5e solid 1px;border-radius:6px;padding: 40px;">
                                                    <div style="text-align: center"><h3>Your Cart</h3></div>
                                                    <table id="purchase" class="table table-bordered">
                                                        <thead>
                                                        <tr>
                                                            <th>Sr</th>
                                                            <th>Product Name</th>
                                                            <th>Sale Price</th>
                                                            <th>Qty</th>
                                                            {{--                                                                <th>Discount</th>--}}
                                                            <th>Total Price</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody>
                                                        </tbody>
                                                    </table>
                                                </div>
                                                <!-- /.box-body -->
                                            </div>
                                        </div>

                                        <div class="col-md-3">
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="form-group">
                                                        <label>Total</label>
                                                        <input type="number" class="form-control" id="total" readonly placeholder="Total">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="kt-margin-b-10">
                                                        <label>Discount (%)</label>
                                                        <div class="input-group">
                                                            <input type="number" min="0" class="form-control" id="discount" value="0"  max="100" placeholder="Discount" aria-describedby="basic-addon2"
                                                                   onblur="if(this.value==''){ this.value='0';}"
                                                                   onfocus="if(this.value=='0'){ this.value='';}"
                                                            >
                                                            <div class="input-group-append"><span class="input-group-text" id="basic-addon2" >%</span></div>
                                                        </div>
                                                        <span class="form-text error-alert text-danger">You entered invalid discount percent.</span>
                                                    </div>
                                                </div>
                                            </div>
                                            {{--<div class="row">--}}
                                            {{--<div class="col-md-12">--}}
                                            {{--<div class="kt-margin-b-10">--}}
                                            {{--<label>Net Total</label>--}}
                                            {{--<input type="number" class="form-control" id="nettotal" readonly placeholder="Net Total">--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="row">--}}
                                            {{--<div class="col-md-6">--}}
                                            {{--<div class="kt-margin-b-10">--}}
                                            {{--<label>Wages</label>--}}
                                            {{--<input type="number" value="0" min="0" autocomplete="off" class="form-control" id="wages" placeholder="Wages"--}}
                                            {{--onblur="if(this.value==''){ this.value='0';}"--}}
                                            {{--onfocus="if(this.value=='0'){ this.value='';}"--}}
                                            {{-->--}}
                                            {{--<span class="form-text error-alert text-danger">You entered invalid amount.</span>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--<div class="col-md-6">--}}
                                            {{--<div class="kt-margin-b-10">--}}
                                            {{--<label>Other Expenses</label>--}}
                                            {{--<input type="number" value="0" min="0" autocomplete="off" class="form-control" id="expenses" placeholder="Expenses"--}}
                                            {{--onblur="if(this.value==''){ this.value='0';}"--}}
                                            {{--onfocus="if(this.value=='0'){ this.value='';}"--}}
                                            {{-->--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            {{--</div>--}}
                                            <div class="row">
                                                <div class="col-md-12">
                                                    <div class="kt-margin-b-10">
                                                        <label>Grand Total</label>
                                                        <input type="number" class="form-control" id="grandtotal" readonly placeholder="Grand Total">
                                                        <span class="form-text error-alert text-danger" >Please select valid date of purchase.</span>
                                                    </div>
                                                </div>

                                            </div>
                                            <div class="row">
                                                <div class="col-md-6">
                                                    <div class="kt-margin-b-10">
                                                        <label>Receiving Amount</label>
                                                        <input type="number" min="0" value="0" class="form-control" id="paid" placeholder="Amt Received"
                                                               onblur="if(this.value==''){ this.value='0';}"
                                                               onfocus="if(this.value=='0'){ this.value='';}"
                                                        >
                                                        <span class="form-text error-alert text-danger">You entered invalid amount.</span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="kt-margin-b-10">
                                                        <label>Remaining</label>
                                                        <input type="number" class="form-control" id="remaining" readonly placeholder="Remaining Amount">
                                                    </div>
                                                </div>
                                                <div class="col-md-12">
                                                    <div class="kt-margin-b-10">
                                                        <label>Employee</label>
                                                        <select class="form-control employee" name="param">
                                                            <option value="default" disabled selected>Select an Employee</option>
                                                            @foreach($employees as $employee)
                                                                <option value="{{$employee->id}}">{{$employee->name}}</option>
                                                            @endforeach
                                                        </select>
                                                        <span class="form-text error-alert text-danger"></span>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="kt-margin-b-10">
                                                        <label>commission (%)</label>
                                                        <input type="number" class="form-control" id="commission_percentage" readonly placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="kt-margin-b-10">
                                                        <label>commission (Rs)</label>
                                                        <input type="number" class="form-control" id="commission_rs" readonly placeholder="">
                                                    </div>
                                                </div>

                                                <div class="col-md-12 zero_hide">
                                                    <div class="form-group">
                                                        <label>Select Receiving Account</label>
                                                        <div class="input-group">
                                                            <select class="form-control kt-select2 account" id="kt_select2_1" name="param">
                                                                {{--<option value="defaultaccount" selected disabled>Receiving Account</option>--}}
                                                                <optgroup label="Accounts">
                                                                    @foreach($accounts as $account)
                                                                        <option value="{{$account->id}}">{{$account->branch_name}}</option>
                                                                    @endforeach
                                                                </optgroup>
                                                                {{--<optgroup label="Suppliers">--}}
                                                                {{--@foreach($suppliers as $supplier)--}}
                                                                {{--<option value="{{$supplier ->id}}">{{$supplier->name}}</option>--}}
                                                                {{--@endforeach--}}
                                                                {{--</optgroup>--}}
                                                            </select>
                                                            <span class="form-text error-alert text-danger"></span>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-md-12 zero_hide">
                                                    <div class="kt-margin-b-10">
                                                        <label>Account Balance</label>
                                                        <input type="text" class="form-control" id="account_balance" readonly placeholder="Account Balance">
                                                        <span class="form-text error-alert text-danger"></span>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <button class="btn btn-primary mx-12 form-control" id="submitcart">Save</button>
                                                <button class="btn btn-primary mx-12 form-control mt-3" id="save_and_print">Save and Print</button>
                                                <button class="btn btn-dark mx-12 form-control mt-3" id="resetallform">Reset</button>
                                                <span class="form-text error-alert text-danger">Cart is empty.</span>
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                {{--FULL PAGE INVOICE--}}
                                {{--<div class="container" id="my_invoice" style="display: none; font-family: sans-serif;">--}}
                                {{--<div style="border: 1px solid black;border-radius: 4px;padding: 30px;" >--}}
                                {{--<div class="kt-heading kt-heading--sm">Hussain Traiders</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12 alert" style="background-color: rgba(0,0,0,0.55);color: white;">--}}
                                {{--<div class=" d-flex px-4 py-2 border border-dark">--}}
                                {{--<div class="mr-auto"><span class="">Fatima Jinnah Road Sargodha </span></div>--}}
                                {{--<div class="ml-auto"><span class="">Ph:048-3713181</span></div>--}}
                                {{--</div>--}}
                                {{--<div class="row pt-3 px-12">--}}
                                {{--<div class="col-md-6 pl-4">--}}
                                {{--<h4 class="" style="font-family: sans-serif;">Chief Executive</h4>--}}
                                {{--<h4 class="m-0" style="font-family: sans-serif;">Haji Mukhtar Ahmed</h4>--}}
                                {{--<span class=" mr-2" style="font-family: sans-serif;">Secretary Fertilizers Dealers Association Sargodha Devision</span>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-6">--}}
                                {{--<h4 class="ml-4" style="font-family: sans-serif;">Fertilizers Dealers</h4>--}}
                                {{--<h4 class="ml-4 m-0" style="font-family: sans-serif;">Hussain Traders (048-3713181)</h4>--}}
                                {{--<span class="ml-4" style="font-family: sans-serif;">0300-6046015,0345-8601433,0322-8600598</span>--}}
                                {{--</div>--}}

                                {{--<div>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div style="font-family:sans-serif; text-align: center;background-color: lightgrey;color: black;font-size: 20px;margin-bottom: 10px;">Customer Information</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-2" style="font-family: sans-serif;">--}}
                                {{--<p><strong>Name : </strong></p>--}}
                                {{--<p><strong>CNIC :</strong></p>--}}
                                {{--<p><strong>Sale Date :</strong></p>--}}
                                {{--<p><strong>Account No.:</strong></p>--}}
                                {{--<p><strong>Residential Address:</strong></p>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-10" style="font-family: sans-serif;">--}}
                                {{--<p id="r_c_name" ></p>--}}
                                {{--<p id="r_c_cnic"></p>--}}
                                {{--<p id="r_t_date_of_sale"></p>--}}
                                {{--<p id="r_c_account"></p>--}}
                                {{--<p id="r_c_residential_address"></p>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div style="font-family: sans-serif; text-align: center;background-color: lightgrey;color: black;font-size: 20px;margin-bottom: 10px;">Product(s)  Details</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-12">--}}
                                {{--<table id="usertable" class="table table-bordered" >--}}
                                {{--<thead>--}}
                                {{--<tr style="font-family:sans-serif; background-color: rgba(165,165,171,0.25)">--}}
                                {{--<td>Product Name</td>--}}
                                {{--<td>Sale Price</td>--}}
                                {{--<td>Quantity</td>--}}
                                {{--<td>Total Price</td>--}}
                                {{--</tr>--}}
                                {{--</thead>--}}
                                {{--<tbody class="carttable1" style="font-family: sans-serif;">--}}

                                {{--</tbody>--}}
                                {{--</table>--}}
                                {{--</div>--}}
                                {{--</div>--}}
                                {{--<div style="font-family:sans-serif;text-align: center;background-color: lightgrey;color: black;font-size: 20px;margin-bottom: 10px;">Total</div>--}}
                                {{--<div class="row">--}}
                                {{--<div class="col-md-8"></div>--}}

                                {{--<div class="col-md-2" style="font-family: sans-serif;">--}}
                                {{--<p><strong>Total Bill :</strong></p>--}}
                                {{--<p><strong>Discount :</strong></p>--}}
                                {{--<p><strong>Grand Total :</strong></p>--}}
                                {{--<p><strong>Received Amount :</strong></p>--}}
                                {{--<p><strong>Remaining :</strong></p>--}}
                                {{--</div>--}}
                                {{--<div class="col-md-1" style="font-family: sans-serif; text-align: center;">--}}
                                {{--<p id="r_t_total_bill" style="border: solid 1px black; border-radius: 4px;"></p>--}}
                                {{--<p id="r_t_discount"></p>--}}
                                {{--<p id="r_t_grand_total"></p>--}}
                                {{--<p id="r_t_paid"></p>--}}
                                {{--<p id="r_t_remaining"></p>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--<div class="row" >--}}
                                {{--<div class="col-md-12" style="font-family: sans-serif; text-align: center;background-color: rgba(0,0,0,0.55);color: white;">--}}
                                {{--<h7>A Software by Brainiac Creative Solutions (03032600069)</h7>--}}
                                {{--</div>--}}
                                {{--</div>--}}

                                {{--</div>--}}
                                {{--</div>--}}
                                {{--FULL PAGE INVOICE--}}

                                {{--THERMAL INVOICE--}}
                                <div class="my_invoice" style="display: none;">




                                    {{--                                        <div class="card card-custom overflow-hidden">--}}
                                    {{--                                            <div class="card-body p-0">--}}
                                    {{--                                                <!-- begin: Invoice-->--}}
                                    {{--                                                <!-- begin: Invoice header-->--}}
                                    {{--                                                <div class="row justify-content-center py-8 px-8 py-md-27 px-md-0">--}}
                                    {{--                                                    <div class="col-md-9">--}}
                                    {{--                                                        <div class="d-flex justify-content-between pb-10 pb-md-20 flex-column flex-md-row">--}}
                                    {{--                                                            <h1 class="display-4 font-weight-boldest mb-10">INVOICE</h1>--}}
                                    {{--                                                            <div class="d-flex flex-column align-items-md-end px-0">--}}
                                    {{--                                                                <!--begin::Logo-->--}}
                                    {{--                                                                <a href="#" class="mb-5">--}}
                                    {{--                                                                    <img src="assets/media/logos/logo-dark.png" alt="" />--}}
                                    {{--                                                                </a>--}}
                                    {{--                                                                <b style="font-size: 30px;">{{credentials()->company_name}}</b>--}}
                                    {{--                                                                <!--end::Logo-->--}}
                                    {{--                                                                <span class="d-flex flex-column align-items-md-end opacity-70">--}}
                                    {{--															<b>{{credentials()->address}},</b>--}}
                                    {{--															<span>{{credentials()->phone1}} . {{credentials()->phone1}}</span>--}}
                                    {{--														</span>--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                        <div class="border-bottom w-100"></div>--}}
                                    {{--                                                        <div class="d-flex justify-content-between pt-6">--}}
                                    {{--                                                            <div class="d-flex flex-column flex-root">--}}
                                    {{--                                                                <span class="font-weight-bolder mb-2">DATE</span>--}}
                                    {{--                                                                <span class="opacity-70" id="r_t_date_of_sale"></span>--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                            <div class="d-flex flex-column flex-root">--}}
                                    {{--                                                                <span class="font-weight-bolder mb-2">INVOICE NO.</span>--}}
                                    {{--                                                                <span class="opacity-70" id="r_invoice"></span>--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                            <div class="d-flex flex-column flex-root">--}}
                                    {{--                                                                <span class="font-weight-bolder mb-2">INVOICE TO.</span>--}}
                                    {{--                                                                <span class="opacity-70" id="r_c_name"></span>--}}
                                    {{--                                                            </div>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!-- end: Invoice header-->--}}
                                    {{--                                                <!-- begin: Invoice body-->--}}
                                    {{--                                                <div class="row justify-content-center py-8 px-8 py-md-10 px-md-0">--}}
                                    {{--                                                    <div class="col-md-9">--}}
                                    {{--                                                        <div class="table-responsive">--}}
                                    {{--                                                            <table class="table">--}}
                                    {{--                                                                <thead>--}}
                                    {{--                                                                <tr>--}}
                                    {{--                                                                    <th class="pl-0 font-weight-bold text-muted text-uppercase">Product</th>--}}
                                    {{--                                                                    <th class="text-right font-weight-bold text-muted text-uppercase">Price</th>--}}
                                    {{--                                                                    <th class="text-right font-weight-bold text-muted text-uppercase">Quantity</th>--}}
                                    {{--                                                                    <th class="text-right pr-0 font-weight-bo?ld text-muted text-uppercase">Discount</th>--}}
                                    {{--                                                                    <th class="text-right pr-0 font-weight-bold text-muted text-uppercase">Total</th>--}}
                                    {{--                                                                </tr>--}}
                                    {{--                                                                </thead>--}}
                                    {{--                                                                <tbody class="carttable1" style="font-size: 10px;font-family: Arial, sans-serif">--}}
                                    {{--                                                                <tr>--}}
                                    {{--                                                                    <td id="ISr" style="padding: 3px; text-align: left;"></td>--}}
                                    {{--                                                                    <td id="IPName" style="padding: 3px; text-align: center;"></td>--}}
                                    {{--                                                                    <td id="Iqty" style="padding: 3px; text-align: center;"></td>--}}
                                    {{--                                                                    <td id="Idis" style="padding: 3px; text-align: center;"></td>--}}
                                    {{--                                                                    <td id="IPrice" style="padding: 3px; text-align: center;"></td>--}}
                                    {{--                                                                </tr>--}}
                                    {{--                                                                </tbody>--}}
                                    {{--                                                            </table>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!-- end: Invoice body-->--}}
                                    {{--                                                <!-- begin: Invoice footer-->--}}
                                    {{--                                                <div class="row justify-content-center bg-gray-100 py-8 px-8 py-md-10 px-md-0">--}}
                                    {{--                                                    <div class="col-md-9">--}}
                                    {{--                                                        <div class="table-responsive">--}}
                                    {{--                                                            <table class="table">--}}
                                    {{--                                                                <thead>--}}
                                    {{--                                                                <tr>--}}
                                    {{--                                                                    <th class="font-weight-bold text-muted text-uppercase">Total</th>--}}
                                    {{--                                                                    <th class="font-weight-bold text-muted text-uppercase">Discount</th>--}}
                                    {{--                                                                    <th class="font-weight-bold text-muted text-uppercase">Paid</th>--}}
                                    {{--                                                                    <th class="font-weight-bold text-muted text-uppercase">Due</th>--}}
                                    {{--                                                                </tr>--}}
                                    {{--                                                                </thead>--}}
                                    {{--                                                                <tbody>--}}
                                    {{--                                                                <tr class="font-weight-bolder">--}}
                                    {{--                                                                    <td id="r_t_total_bill"></td>--}}
                                    {{--                                                                    <td id="r_t_discount"></td>--}}
                                    {{--                                                                    <td id="r_t_grand_total" class="text-danger font-size-h3 font-weight-boldest"></td>--}}
                                    {{--                                                                    <td id="r_t_paid"></td>--}}
                                    {{--                                                                    <td id="r_t_remaining"></td>--}}
                                    {{--                                                                    <td class="text-danger font-size-h3 font-weight-boldest">20,600.00</td>--}}
                                    {{--                                                                </tr>--}}
                                    {{--                                                                </tbody>--}}
                                    {{--                                                            </table>--}}
                                    {{--                                                        </div>--}}
                                    {{--                                                    </div>--}}
                                    {{--                                                </div>--}}
                                    {{--                                                <!-- end: Invoice footer-->--}}
                                    {{--                                                <!-- end: Invoice-->--}}
                                    {{--                                            </div>--}}
                                    {{--                                        </div>--}}



















                                    {{--                                        Thermal Invoice--}}
                                    <div class="cart col-sm-12">
                                        <table border="0" align="center" class="table table-condensed">
                                            <tr>
                                                <td>

                                                    <table border="0" style="margin: auto;" class="header">
                                                        <tr>
                                                            <td  align="center" style="font-weight: bolder;font-size: 15pt; font-family: Arial, sans-serif">{{credentials()->company_name}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td  align="center" style="font-weight: bolder;font-size: 8pt; font-family: Arial, sans-serif">{{credentials()->address}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Arial, sans-serif;font-size: 14px;" align="center">{{credentials()->phone1}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Arial, sans-serif;font-size: 14px;" align="center">{{credentials()->phone2}}</td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Arial, sans-serif;font-size: 14px;" align="center" id="Idatetime"></td>
                                                        </tr>
                                                    </table>
                                                    <table width="100%">
                                                        <tr>
                                                            <td><nobr style="font-family: Arial, sans-serif;font-size: 12px;">INVOICE: &nbsp;&nbsp; <span style="font-family: Arial, sans-serif;font-size: 12px;" id="r_invoice"></span>  </nobr></td>
                                                            <td><nobr style="font-family: Arial, sans-serif;font-size: 12px;">Customer: &nbsp;&nbsp; <span style="font-family: Arial, sans-serif;font-size: 12px;" id="r_c_name"></span>  </nobr></td>
                                                        </tr>
                                                        <tr>
                                                            <td><nobr style="font-family: Arial, sans-serif;font-size: 12px;" >Date</nobr></td>
                                                            <td style="font-family: Arial, sans-serif;font-size: 12px;" id="r_t_date_of_sale"></td>
                                                        </tr>

                                                    </table>
                                                    <table border="1" style="margin-left: -9px;border: 1px solid black; border-collapse: collapse" class="table table-bordered mycart1">
                                                        <thead style="background-color: gainsboro;font-size: 12px;font-weight: bold;font-family: Arial, sans-serif">
                                                        <tr>
                                                            <th>PRODUCT</th>
                                                            <th>PRICE</th>
                                                            <th>QTY</th>
                                                            {{--                                                                <th>Dis</th>--}}
                                                            <th>TOTAL</th>
                                                        </tr>
                                                        </thead>
                                                        <tbody class="carttable1" style="font-size: 10px;font-family: Arial, sans-serif">
                                                        <tr>
                                                            <td id="ISr" style="padding: 3px; text-align: left;"></td>
                                                            <td id="IPName" style="padding: 3px; text-align: center;"></td>
                                                            <td id="Iqty" style="padding: 3px; text-align: center;"></td>
                                                            {{--                                                                <td id="Idis" style="padding: 3px; text-align: center;"></td>--}}
                                                            <td id="IPrice" style="padding: 3px; text-align: center;"></td>
                                                        </tr>
                                                        </tbody>
                                                    </table>
                                                    <table align="right" style="width: 150px;margin-bottom:20px;">
                                                        <tr>
                                                            <td><b style="font-family: Arial, sans-serif;font-size: 12px;">Total</b></td>
                                                            <td><b style="font-family: Arial, sans-serif;font-size: 10px;" id="r_t_total_bill">0.00</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Arial, sans-serif;font-size: 12px;" >Discount:</td>
                                                            <td><b style="font-family: Arial, sans-serif;font-size: 10px;" id="r_t_discount">0.00</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Arial, sans-serif;font-size: 12px;" >Grand Total:</td>
                                                            <td><b style="font-family: Arial, sans-serif;font-size: 10px;" id="r_t_grand_total">0.00</b></td>
                                                        </tr>

                                                        <tr>
                                                            <td style="font-family: Arial, sans-serif;font-size: 12px;" >Paid:</td>
                                                            <td><b style="font-family: Arial, sans-serif;font-size: 10px;" id="r_t_paid">0.00</b></td>
                                                        </tr>
                                                        <tr>
                                                            <td style="font-family: Arial, sans-serif;font-size: 12px;" >Due:</td>
                                                            <td><b style="font-family: Arial, sans-serif;font-size: 10px;" id="r_t_remaining">0.00</b></td>
                                                        </tr>
                                                    </table>
                                                    {{--                                                        <br>--}}
                                                </td>
                                                <table  border="0" style="margin: auto;">
                                                    <tr>
                                                        <td  align="center" style="font-weight: bolder;font-size: 18px; font-family: Arial, sans-serif">POLICIES</td>
                                                    </tr>

                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif;font-size: 10px;">1:-All Prices are fixed.</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif;font-size: 10px;">2:-No Cash Refund for any exchange and return.</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif;font-size: 10px;">3:-Original Receipt is required for exchange and claim within 7 days of purchase.</td></td>
                                                    </tr>
                                                    <tr>
                                                        <td align="left" style="font-family: Arial, sans-serif;font-size: 10px;">4:-Clearance Sale Item and cut pieces are not exchangeable.</td></td>
                                                    </tr>
                                                    </br>
                                                    <tr>
                                                        <td align="left" style=" border: 1px solid black; font-family: Arial, sans-serif;font-size: 12px;">A Software by BRAINIAC CS(0303-2600069)</td></td>
                                                    </tr>

                                                </table>

                                            </tr>
                                        </table>
                                    </div>
                                </div>
                                <button class="btn btn-info" id="print" style="display: none; float: right;margin-top: 4px;">Print Invoice</button>
                            </div>
                        </div>
                    </div>
                    {{--</form>--}}
                </div>
            </div>
        </div>
    </div>
</div>

<div class="container">
    <!-- begin::Card-->

    <!-- end::Card-->
</div>

</body>
<script src="{{url('assets/js/demo10/pages/crud/forms/widgets/bootstrap-datepicker.js')}}" type="text/javascript"></script>
<script src="{{url('assets/js/demo10/pages/crud/forms/widgets/select2.js')}}" type="text/javascript"></script>
<script src="{{ url('DataTables/datatables.js') }}"></script>
<script src="{{ url('assets/editor/js/dataTables.editor.js') }}"></script>
<script src="{{ url('assets/editor/js/editor.bootstrap.js') }}"></script>
<script>


    $(document).ready(function (e) {
        $('.customer').select2();
        $('.employee').select2();
        $(document).keypress("q",function(e) {
            if(e.ctrlKey){
                $('#paid ').focus();
                $('.product_id').select2('close');
                $('#paid ').focus();
                setTimeout(function () {
                    $('.product_id').select2('close');
                    $("#paid").focus()
                },100);
            }
        });
        $('.product_id').on('click',function () {
            $(this).select2('open');
        });
        $('.select_qty').on('click',function () {
            // $(this).focus();
            // alert('asdfasdf');
        });

        $('.product_id').on('select2:select',function () {
            setTimeout(function () {
                $(".select_qty").focus()
            },100) ;
            // alert('ho gya');
        });
        // $('.product_id').on('select2:close',function () {
        //     $(".select_qty").focus();
        //     // alert('ho gya');
        // });
        $('.product_id').click();


        $('.company_id').on('select2:select',function () {

            var id=$('.company_id').val();
            $.ajax({
                url:'{{url('sale/fetch_company_products')}}',
                type: 'post',
                data:{'id':id,'_token':'{{csrf_token()}}'},
                success:function (data) {
                    console.log(data.data);
                    $('.product_id').html('');
                    $('.product_id').append('<option value="default" disabled selected>Select a Product</option>');
                    for(var q=0;q<data.data.length;q++){
                        $('.product_id').append('<option value="'+data.data[q].id+'">'+data.data[q].name+'<span style="display: none!important;">'+data.data[q].barcode+'</span></option>');
                    }
                },
                error:function (error) {
                    console.log(error.responseText);
                }
            });
            // alert('ho gya');
        });
        $('.employee').on('select2:select',function () {

            var id=$('.employee').val();
            $.ajax({
                url:'{{url('sale/fetch_employee_commission')}}',
                type: 'post',
                data:{'id':id,'_token':'{{csrf_token()}}'},
                success:function (data) {
                    console.log(data.data);
                    $('#commission_percentage').val(data.data.commission);
                    var total=$('#total').val();
                    var commission_rs=(parseFloat(data.data.commission)/100)*total;
                    $('#commission_rs').val(commission_rs);
                },
                error:function (error) {
                    console.log(error.responseText);
                }
            });
            // alert('ho gya');
        });






        $.ajax({
            url:'{{url('sale/randomnumber')}}',
            type: 'post',
            data:{'_token':'{{csrf_token()}}'},
            success:function (data) {
                console.log(data);
                var randomnumber = data.data;
                random = randomnumber;
                $('#invoice').val(random);
            },
            error:function (error) {
                console.log(error.responseText);
            }
        });

        var id=$(".account").val();
        var label = $('.account :selected').closest('optgroup').prop('label');
        // alert(label);

        if (id !== 'defaultsupplier'){
            $.ajax({
                url:'{{url('purchase/fetch_account_balance')}}',
                type: 'post',
                data:{'id':id ,'label':label,'_token':'{{csrf_token()}}'},
                success:function (data) {
                    console.log(data);
                    if (data.data !== null){
                        if (data.data.current_balance) {
                            $('#account_balance').val(data.data.current_balance);
                        }
                        else {
                            $('#account_balance').val(data.data.balance);

                        }
                    }
                },
                error:function (error) {
                    console.log(error.responseText);
                }
            });
        }

        $('.customer').change(function () {
            var id=$(".customer").val();
            var label=$(".customer :selected").closest('optgroup').prop('label');
            // alert(id);
            if (id !== 'defaultsupplier'){
                $.ajax({
                    url:'{{url('sale/fetch_customer_balance')}}',
                    type: 'post',
                    data:{'id':id ,'label':label , '_token':'{{csrf_token()}}'},
                    success:function (data) {
                        console.log(data);
                        if (data.data !== null){
                            $('#last_balance').val(data.data.balance);
                            $('#r_c_cnic').val(data.data.person_name);
                            $('#r_c_cnic').val(data.data.cnic);
                            $('#r_c_account_date').val(data.data.date);

                        }
                    },
                    error:function (error) {
                        console.log(error.responseText);
                    }
                });
                $.ajax({
                    url:'{{url('sale/fetch_customer_data')}}',
                    type: 'post',
                    data:{'id':id ,'_token':'{{csrf_token()}}'},
                    success:function (data) {
                        console.log(data);
                        if (data.data !== null){
                            //
                            $('#r_c_cnic').text(data.data.cnic);
                            $('#r_c_name').text(data.data.name);
                            $('#r_c_account_date').text(data.data.registration_date);
                            $('#r_c_account').text(data.data.id);
                            $('#r_c_residential_address').text(data.data.address);
                        }
                    },
                    error:function (error) {
                        console.log(error.responseText);
                    }
                });
            }
        });
        $('.account').change(function () {
            var id=$(".account").val();
            var label = $('.account :selected').closest('optgroup').prop('label');
            // alert(label);

            if (id !== 'defaultsupplier'){
                $.ajax({
                    url:'{{url('purchase/fetch_account_balance')}}',
                    type: 'post',
                    data:{'id':id ,'label':label,'_token':'{{csrf_token()}}'},
                    success:function (data) {
                        console.log(data);
                        if (data.data !== null){
                            if (data.data.current_balance) {
                                $('#account_balance').val(data.data.current_balance);
                            }
                            else {
                                $('#account_balance').val(data.data.balance);

                            }
                        }
                    },
                    error:function (error) {
                        console.log(error.responseText);
                    }
                });
            }
        });


        $('.zero_hide').css("display","none");
        $('#paid').keyup(function (e) {
            var zero_check=parseFloat($('#paid').val());
            if (zero_check > 0){
                $('.zero_hide').css("display","block");
            } else if (zero_check == 0){
                $('.zero_hide').css("display","none");
            }
        });
        // $('#qty').keyup(function (e) {
        //     var qty=parseFloat($('#qty').val());
        //     // alert(qty);
        //     var sale_price= parseFloat($('#s_price').val());
        //     $('.rate').val(qty*sale_price )
        // });
        // $('.rate').keyup(function (e) {
        //     var rate=parseFloat($('.rate').val());
        //     // alert(qty);
        //     var sale_price= parseFloat($('#s_price').val());
        //     $('#qty').val(rate/sale_price);
        // });


        //Add Product
        $(".saveproduct").click(function (e) {


            var name=$('#product').val();
            var sale_price=$('#insert_sale_price').val();
            var purchase_price=$('#insert_purchase_price').val();
            var vehicle=$('.insert_vehicle:checked').val();
            // var label=$('#sector_select :selected').parent().attr('label');
            //validation
            if (name == '' || name == null) {
                $('#product').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Product Name is Required.').addClass('text-danger').show();
            } else {
                $('#product').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            // if (company == 'default' || company == null) {
            //     $('.selectcompany').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Company is Required.').addClass('text-danger').show();
            // } else {
            //     $('.selectcompany').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            // }
            if (sale_price == '' || sale_price == null) {
                $('#insert_sale_price').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Purchase Price is Required.').addClass('text-danger').show();
            } else {
                $('#insert_sale_price').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            if (purchase_price == '' || purchase_price == null) {
                $('#insert_purchase_price').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Purchase Price is Required.').addClass('text-danger').show();
            } else {
                $('#insert_purchase_price').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            if ($('.is-invalid').length<1) {
                $.ajax({
                    url: '{{ url("product/insert_new_product") }}',
                    type: 'post',
                    data: {
                        'name': name,
                        'company': company,
                        'sale': sale_price,
                        'purchase': purchase_price,
                        'vehicle': vehicle,
                        '_token': '{{csrf_token()}}'
                    },
                    success: function (data) {
                        console.log(data);
                        $('#product').val('');
                        $('#insert_sale_price').val('');
                        $('#insert_purchase_price').val('');
                        $(".selectcompany").val("default").change();
                        $('#insert_sale_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#insert_purchase_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#product').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();


                    },
                    error: function (error) {
                        console.log(error.responseText);
                        //
                    }
                });
                $.ajax({
                    url: '{{ url("product/fetch_just_products") }}',
                    type: 'post',
                    data: {'_token': '{{csrf_token()}}'},
                    success: function (data) {
                        console.log(data);
                        $('.product_id').html('');
                        $('.product_id').append('<option value="default" selected disabled>Select a Product</option>');
                        for(var q=0;q<data.data.length;q++){
                            $('.product_id').append('<option value="'+data.data[q].id+'">'+data.data[q].name+'<span style="display: none!important;">'+data.data[q].barcode+'</span></option>');
                        }
                        $('#product').val('');
                        $('#insert_sale_price').val('');
                        $('#insert_purchase_price').val('');
                        $(".selectcompany").val("defaultcompany").change();
                        $('#insert_sale_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#insert_purchase_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#product').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();


                    },
                    error: function (error) {
                        console.log(error.responseText);
                        //
                    }
                });
            }
        });

        $("#product").keypress(function(e) {
            if(e.which == 13) {
                $(".saveproduct").click();
            }
        });
        $("#paid").keypress(function(e) {
            if(e.which == 13) {
                $("#submitcart").click();
            }
        });

        //Product Previous Data
        $('.product_id').change(function () {
            var id=$(".product_id").val();
            if (id !== "default" && id !== null){
                $.ajax({
                    url:'{{url('purchase/fetch_product_data')}}',
                    type: 'post',
                    data:{'id':id ,'_token':'{{csrf_token()}}'},
                    success:function (data) {
                        console.log(data);
                        if (data.data !== null){
                            if(data.data.unit == 'kg'){
                                $('.select_qty').parent().find('.change_qty_label').text('Kg');
                            }else{
                                $('.select_qty').parent().find('.change_qty_label').text('Quantity');
                            }
                            $('#s_price').val(data.data.sale_price);
                            // $('#total_qty').val(data.data.total_qty);
                            $('#total_qty').val(data.data.total_qty);
                            $('#avg_purchase_price').val((data.avg_purchase_price).toFixed(2));
                            $('#sale_percentage').val((data.data.sale_percentage).toFixed(2));
                            var rs_sale= (parseFloat(data.data.sale_percentage)/100) *parseFloat(data.avg_purchase_price);
                            $('#sale_rs').val(rs_sale);
                            // if(data.data.p_discount == 'null' || data.data.p_discount == ''){
                            // $('#p_discount').val(data.discount.p_discount);
                            // }
                        }
                    },
                    error:function (error) {
                        console.log(error.responseText);
                        //
                    }
                });


            }
        });


        //cart/Datatble
        editor =  new $.fn.DataTable.Editor({
            table: "#purchase",
            display: "bootstrap",
            idSrc:'id',
            fields: [
                // {label: "Sr:", name: "id",type : "readonly"},
                // {label: "product:", name: "product",type : "readonly" },
                // {label: "Purchase Price:", name: "purchase_price" },
                // {label: "Sale Price:", name: "sale_price" },
                // {label: "Qty:", name: "qty"},
                // {label: "p_discount:", name: "p_discount"},
                // {label: "Total Amount:", name: "amount",type : "readonly"}
            ]
        });

        var table=  $('#purchase').DataTable({
            dom: "Bfrtip",
            select: true,
            idSrc: 'id',
            bPaginate: false,
            bInfo: false,
            // aoColumnDefs: [{ "bVisible": false, "aTargets": [2,4,5,7,8,9,10,13] }],

            buttons: [
                { extend: "print",  editor: editor},
                // { extend: "edit",  editor: editor},
                { extend: "remove",  editor: editor}
            ],
            columns:[
                {data:'id',
                    render: function (data, type, row, meta) {
                        return meta.row + meta.settings._iDisplayStart + 1;

                    }},
                {data:'product'},
                // {data:'purchase_price'},
                {data:'sale_price'},
                {data:'qty'},
                // {data:'p_discount'},
                {data:'amount'},
            ]
        });


        // editor.field('sale_price').input().keyup(function (e) {
        //     var myData=table.row($(this).closest('tr')).data();
        //     var sale_price=$(this).val();
        //     var p_discount=myData.p_discount;
        //     var p_total=myData.qty*sale_price;
        //     var p_total_calculation=parseFloat(p_discount*p_total/100);
        //     var p_g_total=parseFloat(p_total-p_total_calculation);
        //     table.cell($(this).closest('tr'), 5).data(p_g_total);
        // });
        // editor.field('qty').input().keyup(function (e) {
        //     var myData=table.row($(this).closest('tr')).data();
        //     var qty=$(this).val();
        //     var p_discount=myData.p_discount;
        //     var p_total=myData.sale_price*qty;
        //     var p_total_calculation=parseFloat(p_discount*p_total/100);
        //     var p_g_total=parseFloat(p_total-p_total_calculation);
        //     table.cell($(this).closest('tr'), 5).data(p_g_total);
        // });
        // editor.field('p_discount').input().keyup(function (e) {
        //     var myData=table.row($(this).closest('tr')).data();
        //     var p_discount=$(this).val();
        //     var p_total=myData.sale_price*myData.qty;
        //     var p_total_calculation=parseFloat(p_discount*p_total/100);
        //     var p_g_total=parseFloat(p_total-p_total_calculation);
        //     table.cell($(this).closest('tr'), 5).data(p_g_total);
        // });
        //


        $('#purchase').on('click', 'tbody td:not(:first-child)', function (e) {
            editor.inline(this);
        });

        var productdata;

        //Add To Cart
        $('#addtocartbtn').click(function (e) {
            // cart variables
            var product_id=$(".product_id").val();
            var name=$( ".product_id option:selected" ).text();
            var s_price=parseFloat($("#s_price").val()) - parseFloat($('#sale_rs').val());
            var available_qty=parseFloat($("#total_qty").val());
            var qty=parseFloat($("#qty").val());
            // var p_discount=parseFloat($("#p_discount").val());
            //Validation for cart
            if (qty > available_qty){
                $('#qty').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Not enough stock available.').addClass('text-danger').show();
            }  else {
                $('#qty').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            if (product_id == 'default' || product_id == null) {
                $('.product_id').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Select a Product.').addClass('text-danger').show();
            } else {
                $('.product_id').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            if (s_price == '' || s_price == null) {
                $('#s_price').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Enter Sale price.').addClass('text-danger').show();
            } else {
                $('#s_price').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            // if (p_discount == '' || p_discount == null) {
            p_discount=0;
            // }
            if ($('.is-invalid').length<1) {
                var p_total= parseFloat(qty * s_price);
                // var p_total_calculation=parseFloat(p_discount*p_total/100);
                var p_g_total=parseFloat(p_total);
                table.row.add({
                    'id': product_id,
                    'product': name,
                    'sale_price': s_price,
                    'qty': qty,
                    // 'p_discount': p_discount,
                    'amount': (p_g_total),
                }).draw();
                var data1 = table
                    .rows()
                    .data().toArray();
                productdata=data1;
                $('#s_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                $('#total_qty').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                $('#qty').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                $("#s_price").val('');
                $("#sale_percentage").val('');
                $("#sale_rs").val('');
                $("#total_qty").val('');
                $("#p_discount").val(0);
                $(".product_id").val('default').change();
                $("#qty").val(1);
                $('.product_id').click();

            }


            // $('#ISr').text(product_id);
            // $('#IPName').text(product_name);
            // $('#Iqty').text(qty);
            // $('#IPrice').text(price);
            // var myTable='';
            // for(var i=0;i<data1.length;i++){
            //     myTable+='<tr><td>'+data1[i].product_id+'</td>';
            //     myTable+='<td>'+data1[i].product+'</td>';
            //     myTable+='<td>'+data1[i].qty+'</td>';
            //     myTable+='<td>'+data1[i].price+'</td><tr>';
            // }
            // $('.carttable1').html(myTable);
            // id=product_id;
            // dat=data1;
            // invice=invoice_no;
            // datee=datetime;
            // SR=sr;
            // sr++;
            // PAID=grandtotal;
            // REMAINING=grandtotal;
            // console.log(data1);
            // $('.diss').prop('disabled', true);
            // $('.empty').value ='';
        });
        //total calculations

        $(".triggeraddbutton").keypress(function(e) {
            if(e.which == 13) {
                $("#addtocartbtn").click();
            }
        });
        $('.account').val(1).change();
        console.log('')

        setInterval(function () {
            // var wages = parseFloat($('#wages').val());
            // var expenses = parseFloat($('#expenses').val());
            var data = table
                .rows()
                .data();
            var total=0;
            for (var i=0;i<data.length;i++){
                total+=data[i].amount;
            }
            var walkin = $('.customer').val();
            var discount=parseFloat($("#discount").val());
            var paid=parseFloat($("#paid").val());
            // var no_installments =parseFloat($("#no_install").val());
            if (discount > 0){
                // var grandtotal_calculation=parseInt(discount*total/100);
                var grandtotal=parseFloat(total-discount);
            } else {
                var grandtotal=parseFloat(total);
            }

            var commission_percentage=parseFloat($('#commission_percentage').val());
            var commission_rs=(parseFloat(commission_percentage)/100)*total;
            $('#commission_rs').val(commission_rs);


            var remaining=parseFloat(grandtotal-paid);
            // $('#paid').val(grandtotal);
            if (walkin == 1){
                $('#paid').attr('readonly',true);
                $('#paid').val(grandtotal);
            }else{
                $('#paid').attr('readonly',false);
            }
            var zero_check=parseFloat($('#paid').val());
            if (zero_check > 0){
                $('.zero_hide').css("display","block");
                // $(".account").val(2).change();
            } else if (zero_check == 0){
                $('.zero_hide').css("display","none");
            }
            // var installment_amount=parseFloat(remaining/no_installments);
            $('#total').val(parseFloat(total));
            // $('#nettotal').val(parseInt(nettotal));
            $('#grandtotal').val(parseFloat(grandtotal));
            $('#remaining').val(parseFloat(remaining));
            // $('#install_amt').val(parseInt(installment_amount));
        },300);
        // var receivedd=
        // $('#paid').val(grandtotal);
        //submit request
        $("#submitcart").click(function (event) {
            event.preventDefault();
            $('#submitcart').attr("disabled", true);
            $('#save_and_print').attr("disabled", true);
            $('#p_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#s_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#total_qty').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('.product_id').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            // Clearing Fields
            $("#p_price").val('');
            $("#s_price").val('');
            $(".product_id").val('default').change();
            $("#qty").val(1);
            $("#total_qty").val('');
            var customer_id=$(".customer").val();
            var employee_id=$(".employee").val();
            var employee_commission=$('#commission_rs').val();
            var customer_label=$(".customer :selected").closest('optgroup').prop('label');
            var s_invoice=$("#invoice").val();
            var s_date=$(".dop_dop").val();
            var s_products_data=productdata;
            var s_total=$("#total").val();
            var account=$(".account :selected").val();
            var account_label = $('.account :selected').closest('optgroup').prop('label');
            var s_grand_total=parseFloat($("#grandtotal").val());
            var s_discountper=$('#discount').val();
            // var s_discount=s_total*s_discountper/100;
            var s_discount=s_discountper;
            // var s_wages=$("#wages").val();
            // var s_expenses=$("#expenses").val();
            var s_paid=$("#paid").val();
            var s_remaining=$("#remaining").val();
            // if (employee_id == 'default' || employee_id == null) {
            //     $('.employee').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Please Select an Employee.').addClass('text-danger').show();
            //     $('#submitcart').attr("disabled", false);
            //     $('#save_and_print').attr("disabled", false);
            // } else {
            //     $('.employee').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            // }
            if (s_paid > s_grand_total){
                $('#grandtotal').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('You can not receive more than Grand Total.').addClass('text-danger').show();
                $('#submitcart').attr("disabled", false);
                $('#save_and_print').attr("disabled", false);
            }
            else if (s_paid > 0 ) {
                if (account == 'defaultaccount' || account == null){
                    $('.account').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Please Select Receiving Account.').addClass('text-danger').show();
                    $('#submitcart').attr("disabled", false);
                    $('#save_and_print').attr("disabled", false);
                } else {
                    $('.account').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                }
            } else {
                $('#grandtotal').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            if (table.data().length <= 0){
                $('#submitcart').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Cart is Empty.').addClass('text-danger').show();
                $('#submitcart').attr("disabled", false);
                $('#save_and_print').attr("disabled", false);
            }
            if ($('.is-invalid').length<1) {
                $.ajax({
                    url:'{{ url('sale/postsalecart') }}',
                    type: 'post',
                    data:{'data':s_products_data ,
                        'customer':customer_id,
                        'employee':employee_id,
                        'employee_commission':employee_commission,
                        'customer_label':customer_label,
                        'invoice':s_invoice,
                        'datetime':s_date,
                        'total':s_total,
                        'account':account,
                        'account_label':account_label,
                        'grand_total':s_grand_total,
                        'discount':s_discount,
                        'paid':s_paid,
                        'remaining':s_remaining,
                        // 'no_install':s_no_installment,
                        // 'install_amount':s_install_amount,
                        '_token':'{{csrf_token()}}'},
                    success:function (data) {
                        console.log("this is return data");
                        console.log(data);
                        $.notify('<strong>Saving</strong> Do not close this page...', {
                            type: 'success',
                            allow_dismiss: false,
                            showProgressbar: true,
                            timer: 700,
                            delay: 1000,
                        });
                        $('#invoice').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#grandtotal').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('.customer').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('.account').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#account_balance').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#submitcart').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#save_and_print').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#invoice').val('');
                        $('#account_balance').val('');
                        $('#paid').val(0);
                        $('#remaining').val(0);
                        $('#avg_purchase_price').val('');
                        // $('#no_install').val(1);
                        $('.customer').val(1).change();
                        $('.account').val(1).change();

                        $.ajax({
                            url:'{{url('sale/randomnumber')}}',
                            type: 'post',
                            data:{'_token':'{{csrf_token()}}'},
                            success:function (data) {
                                console.log(data);
                                var randomnumber = data.data;
                                random = randomnumber;
                                $('#invoice').val(random);
                            },
                            error:function (error) {
                                console.log(error.responseText);
                            }
                        });

                        $("#r_t_total_bill").text(s_total);
                        $("#r_t_date_of_sale").text(s_date);
                        $("#r_invoice").text(s_invoice);
                        $("#r_t_discount").text(s_discount);
                        $("#r_t_grand_total").text(s_grand_total);
                        $("#r_t_paid").text(s_paid);
                        $("#r_t_remaining").text(s_remaining);
                        var myTable= '';
                        for(var i = 0; i < s_products_data.length; i++){
                            myTable += '<tr><td style="padding:3px; text-align: left;">' + s_products_data[i].product + '</td>';
                            myTable += '<td style="padding: 3px; text-align: center;">' + s_products_data[i].sale_price + '</td>';
                            myTable += '<td style="padding: 3px; text-align: center;">' + s_products_data[i].qty + '</td>';
                            // myTable += '<td style="padding: 3px; text-align: center;">' + s_products_data[i].p_discount + '</td>';
                            myTable += '<td style="padding: 3px; text-align: center;">' + s_products_data[i].amount + '</td></tr>';
                        }
                        $('.carttable1').html(myTable);
                        //     var myTable = '';
                        //     for (var i = 0; i < data1.length; i++) {
                        //         myTable += '<tr><td>' + data1[i].product_id + '</td>';
                        //         myTable += '<td>' + data1[i].product + '</td>';
                        //         myTable += '<td>' + data1[i].qty + '</td>';
                        //         myTable += '<td>' + data1[i].price + '</td><tr>';
                        //     }
                        //     $('.carttable1').html(myTable);

                        // $('#print').click();
                        $('#resetallform').click();
                    },
                    error:function (error) {
                        console.log(error.responseText);
                    }
                });




            }


        });

        $("#save_and_print").click(function () {
            $('#submitcart').attr("disabled", true);
            $('#save_and_print').attr("disabled", true);
            $('#p_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#s_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#total_qty').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('.product_id').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            // Clearing Fields
            $("#p_price").val('');
            $("#s_price").val('');
            $(".product_id").val('default').change();
            $("#qty").val(1);
            $("#total_qty").val('');

            var customer_id=$(".customer").val();
            var employee_id=$(".employee").val();
            var employee_commission=$('#commission_rs').val();
            var customer_label=$(".customer :selected").closest('optgroup').prop('label');
            var s_invoice=$("#invoice").val();
            var s_date=$(".dop_dop").val();
            var s_products_data=productdata;
            var s_total=$("#total").val();
            var account=$(".account :selected").val();
            var account_label = $('.account :selected').closest('optgroup').prop('label');
            var s_grand_total=parseFloat($("#grandtotal").val());
            var s_discountper=$('#discount').val();
            var s_discount=s_discountper;
            var s_paid=$("#paid").val();
            var s_remaining=$("#remaining").val();
            // if (employee_id == 'default' || employee_id == null) {
            //     $('.employee').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Please Select an Employee.').addClass('text-danger').show();
            //     $('#submitcart').attr("disabled", false);
            //     $('#save_and_print').attr("disabled", false);
            // } else {
            //     $('.employee').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            // }
            if (s_paid > s_grand_total){
                $('#grandtotal').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('You can not receive more than Grand Total.').addClass('text-danger').show();
                $('#submitcart').attr("disabled", false);
                $('#save_and_print').attr("disabled", false);
            }
            else if (s_paid > 0 ) {
                if (account == 'defaultaccount' || account == null){
                    $('.account').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Please Select Receiving Account.').addClass('text-danger').show();
                    $('#submitcart').attr("disabled", false);
                    $('#save_and_print').attr("disabled", false);
                } else {
                    $('.account').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                }
            } else {
                $('#grandtotal').removeClass('is-invalid').addClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            }
            if (table.data().length <= 0){
                $('#save_and_print').addClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('Cart is Empty.').addClass('text-danger').show();
                $('#submitcart').attr("disabled", false);
                $('#save_and_print').attr("disabled", false);
            }
            if ($('.is-invalid').length<1) {
                $.ajax({
                    url:'{{ url('sale/postsalecart') }}',
                    type: 'post',
                    data:{'data':s_products_data ,
                        'customer':customer_id,
                        'employee':employee_id,
                        'employee_commission':employee_commission,
                        'customer_label':customer_label,
                        'invoice':s_invoice,
                        'datetime':s_date,
                        'total':s_total,
                        'account':account,
                        'account_label':account_label,
                        'grand_total':s_grand_total,
                        'discount':s_discount,
                        'paid':s_paid,
                        'remaining':s_remaining,
                        '_token':'{{csrf_token()}}'},
                    success:function (data) {
                        console.log(data);
                        $.notify('<strong>Saving</strong> Do not close this page...', {
                            type: 'success',
                            allow_dismiss: false,
                            showProgressbar: true,
                            timer: 700,
                            delay: 1000,
                        });
                        $('#invoice').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#grandtotal').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('.customer').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('.account').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#account_balance').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#submitcart').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#save_and_print').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
                        $('#invoice').val('');
                        $('#account_balance').val('');
                        $('#paid').val(0);
                        $('#remaining').val(0);
                        $('#avg_purchase_price').val('');
                        // $('#install_amt').val(0);
                        // $('#no_install').val(1);
                        $('.customer').val(1).change();
                        $('.account').val('defaultaccount').change();

                        $.ajax({
                            url:'{{url('sale/randomnumber')}}',
                            type: 'post',
                            data:{'_token':'{{csrf_token()}}'},
                            success:function (data) {
                                console.log(data);
                                var randomnumber = data.data;
                                random = randomnumber;
                                $('#invoice').val(random);
                            },
                            error:function (error) {
                                console.log(error.responseText);
                            }
                        });

                        $("#r_t_total_bill").text(parseInt(s_total));
                        $("#r_t_date_of_sale").text(s_date);
                        $("#r_invoice").text(s_invoice);
                        $("#r_t_discount").text(s_discount);
                        $("#r_t_grand_total").text(parseInt(s_grand_total));
                        $("#r_t_paid").text(parseInt(s_paid));
                        $("#r_t_remaining").text(parseInt(s_remaining));
                        var myTable= '';
                        for(var i = 0; i < s_products_data.length; i++){
                            myTable += '<tr><td style="padding:3px; text-align: left;">' + s_products_data[i].product + '</td>';
                            myTable += '<td style="padding: 3px; text-align: center;">' + s_products_data[i].sale_price + '</td>';
                            myTable += '<td style="padding: 3px; text-align: center;">' + s_products_data[i].qty + '</td>';
                            // myTable += '<td style="padding: 3px; text-align: center;">' + s_products_data[i].p_discount + '</td>';
                            myTable += '<td style="padding: 3px; text-align: center;">' + parseInt(s_products_data[i].amount) + '</td></tr>';
                        }
                        $('.carttable1').html(myTable);
                        //     var myTable = '';
                        //     for (var i = 0; i < data1.length; i++) {
                        //         myTable += '<tr><td>' + data1[i].product_id + '</td>';
                        //         myTable += '<td>' + data1[i].product + '</td>';
                        //         myTable += '<td>' + data1[i].qty + '</td>';
                        //         myTable += '<td>' + data1[i].price + '</td><tr>';
                        //     }
                        //     $('.carttable1').html(myTable);

                        $('#print').click();
                    },
                    error:function (error) {
                        console.log(error.responseText);
                    }
                });




            }
        });

        $('#print').click(function (e) {
            var html = $('.my_invoice').html();
            var myWindow = window.open("", '', 'width=900,height=800');
            {{--                    myWindow.document.write('<head><link href="{{asset('assets/css/demo10/style.bundle.css ')}}" rel="stylesheet" type="text/css" /></head>');--}}
            myWindow.document.write(html);
            // myWindow.print();
            // myWindow.close();
            $('#resetallform').click();

        });

        $("#resetallform").click(function (){
            $('#invoice').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#grandtotal').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#account_balance').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('.customer').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('.account').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('.customer').val(1).change();
            $('.account').val(1).change();
            $('.employee').val('default').change();
            $('#serial').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#chassis').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#total_qty').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#color').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#qty').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#p_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#s_price').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#vehicle').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#submitcart').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#save_and_print').removeClass('is-invalid').removeClass('is-valid').closest('div').children('.form-text').text('').addClass('text-danger').hide();
            $('#invoice').val('');
            $('#account_balance').val('');
            $('#sale_percentage').val('');
            $('#sale_rs').val('');
            $('#paid').val(0);
            $('#Withholding_tax').val(0);
            $('#remaining').val(0);
            $('#commission_rs').val(0);
            $('#commission_percentage').val(0);
            $("#p_price").val('');
            $("#s_price").val('');
            $("#serial").val('');
            $("#total_qty").val('');
            $("#modal").val('');
            $("#color").val('');
            $("#avg_purchase_price").val('');
            $("#companyname").val('');
            $(".product_id").val('default').change();
            $("#chassis").val('');
            $("#qty").val(1);
            table.clear().draw();
            $.ajax({
                url:'{{url('sale/randomnumber')}}',
                type: 'post',
                data:{'_token':'{{csrf_token()}}'},
                success:function (data) {
                    console.log(data);
                    var randomnumber = data.data;
                    random = randomnumber;
                    $('#invoice').val(random);
                },
                error:function (error) {
                    console.log(error.responseText);
                }
            });
            $('#submitcart').attr("disabled", false);
            $('#save_and_print').attr("disabled", false);


        });
    });
</script>

</html>
