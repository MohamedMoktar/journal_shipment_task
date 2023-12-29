@extends('admin.layout')

@section('content')
<style>
.pagination svg
{
    width:50px !important;
}
   /* a.items-center
    {
        border-radius: 50%;
        border: 0px !important;
        background-color: none !important;
    }
    .border
    {
        border: 0px !important;
        border-color: none !important;
    }
    .border-gray-300
    {
        border: 0px !important;
        border-color: none !important;
    }
    span.items-center
    {
        z-index: 3;
        color: #FFFFFF;
        background-color: #009EF7;
        border-color: transparent;
    }
    */
</style>
    <!--begin::Post-->

    <!--begin::Toolbar-->
							<div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
								<!--begin::Toolbar container-->
								<div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
									<!--begin::Page title-->
									<div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
										<!--begin::Title-->
										<h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{__('User Orders')}} : {{$user->name}} </h1>
										<!--end::Title-->
										<!--begin::Breadcrumb-->
										<ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted">
												<a href="{{route('dashboard')}}" class="text-muted text-hover-primary">{{__('Dashboard')}}</a>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item">
												<span class="bullet bg-gray-400 w-5px h-2px"></span>
											</li>
											<!--end::Item-->
											<!--begin::Item-->
											<li class="breadcrumb-item text-muted"> {{__('Orders')}}</li>
											<!--end::Item-->
										</ul>
										<!--end::Breadcrumb-->
									</div>
									<!--end::Page title-->
									<!--begin::Actions-->
									<div class="d-flex align-items-center gap-2 gap-lg-3">

										<!--begin::Primary button-->
										<a href="{{route('users')}}" class="btn btn-sm fw-bold btn-primary">{{__('Back to')}} {{__('Users')}}</a>
										<!--end::Primary button-->
									</div>
									<!--end::Actions-->
								</div>
								<!--end::Toolbar container-->
							</div>
							<!--end::Toolbar-->

    <div class="post d-flex flex-column-fluid"  >











        <!--begin::Container-->


        <div   class="container">


            <div class="row g-5 g-xl-8">

                <div class="col-xl-1"></div>
                <div class="col-xl-2">
                    <!--begin::Statistics Widget 5-->
                    <div class="card bg-primary  card-xl-stretch mb-xl-8">

                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart-pie.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3" />
                                        <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-inverse-dark fw-bolder fs-2 mb-2 mt-5"> {{ $user->totalOrders() }} </div>
                            <div class="fw-bold text-inverse-dark fs-7">{{ __('Total Orders') }}</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-2">
                    <!--begin::Statistics Widget 5-->
                    <div class="card bg-success  card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart-pie.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3" />
                                        <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-inverse-dark fw-bolder fs-2 mb-2 mt-5"> {{ $user->doneOrders() }} </div>
                            <div class="fw-bold text-inverse-dark fs-7">{{ __('Done Orders') }}</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 5-->
                </div>


                <div class="col-xl-2">
                    <!--begin::Statistics Widget 5-->
                    <div class="card bg-danger  card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart-pie.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3" />
                                        <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-inverse-dark fw-bolder fs-2 mb-2 mt-5"> {{ $user->canceledOrders() }} </div>
                            <div class="fw-bold text-inverse-dark fs-7">{{ __('Canceled Orders') }}</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-2">
                    <!--begin::Statistics Widget 5-->
                    <div class="card bg-info  card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart-pie.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3" />
                                        <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-inverse-dark fw-bolder fs-2 mb-2 mt-5"> {{ $user->totalPurchased() }} </div>
                            <div class="fw-bold text-inverse-dark fs-7">{{ __('Total purchased') }}</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 5-->
                </div>

                <div class="col-xl-2">
                    <!--begin::Statistics Widget 5-->
                    <div class="card bg-success  card-xl-stretch mb-xl-8">
                        <!--begin::Body-->
                        <div class="card-body">
                            <!--begin::Svg Icon | path: icons/duotone/Shopping/Chart-pie.svg-->
                            <span class="svg-icon svg-icon-white svg-icon-3x ms-n1">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                        <rect x="0" y="0" width="24" height="24" />
                                        <path d="M4.00246329,12.2004927 L13,14 L13,4.06189375 C16.9463116,4.55399184 20,7.92038235 20,12 C20,16.418278 16.418278,20 12,20 C7.64874861,20 4.10886412,16.5261253 4.00246329,12.2004927 Z" fill="#000000" opacity="0.3" />
                                        <path d="M3.0603968,10.0120794 C3.54712466,6.05992157 6.91622084,3 11,3 L11,11.6 L3.0603968,10.0120794 Z" fill="#000000" />
                                    </g>
                                </svg>
                            </span>
                            <!--end::Svg Icon-->
                            <div class="text-inverse-dark fw-bolder fs-2 mb-2 mt-5"> {{ $user->totalProfits() }} </div>
                            <div class="fw-bold text-inverse-dark fs-7">{{ __('Total profits') }}</div>
                        </div>
                        <!--end::Body-->
                    </div>
                    <!--end::Statistics Widget 5-->
                </div>
            </div>










            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">
                        <!--begin::Search-->
                        <div class="d-flex align-items-center   my-1">
                            <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                            <form method="get" action="{{ route('filter-orders')}}"    class="form">

                                <div class="row">
                                    <div class="row col-5">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('Order Number') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="order_number" class="form-control form-control-lg form-control-solid" placeholder="{{ __('Order Number') }}" value="{{(isset($filter_data))?$filter_data->order_number:''}}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row col-5">
                                        <!--begin::Label-->

                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('Order Status') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->


                                        <div class="col-lg-8 fv-row">
                                            <select name="status" aria-label="{{ __('Order Status') }}" data-control="select2" data-placeholder="{{ __('Order Status') }}" class="form-select form-select-solid"    >
                                                <option value=""></option>
                                                <option value="pending" {{ ( isset($filter_data) && $filter_data->status == 'pending') ? 'selected' : '' }}>{{ __('Pending') }}</option>

                                                <option value="accepted" {{ ( isset($filter_data) && $filter_data->status == 'accepted') ? 'selected' : '' }}>{{ __('Accepted') }}</option>
                                                <option value="accepted_by_runner" {{ ( isset($filter_data) && $filter_data->status == 'accepted_by_runner') ? 'selected' : '' }}>{{ __('Accepted by runner') }}</option>
                                                <option value="ready" {{ ( isset($filter_data) && $filter_data->status == 'ready') ? 'selected' : '' }}>{{ __('Ready') }}</option>
                                                <option value="on_way" {{ ( isset($filter_data)  && $filter_data->status == 'on_way') ? 'selected' : '' }}>{{ __('On Way') }}</option>
                                                <option value="arrived" {{ ( isset($filter_data)  && $filter_data->status == 'arrived') ? 'selected' : '' }}>{{ __('Arrived') }}</option>
                                                <option value="delivered" {{ ( isset($filter_data) && $filter_data->status == 'delivered') ? 'selected' : '' }}>{{ __('Delivered') }}</option>
                                                <option value="canceled" {{ ( isset($filter_data)  && $filter_data->status == 'canceled') ? 'selected' : '' }}>{{ __('Canceled') }}</option>
                                                <option value="payment_failed" {{ ( isset($filter_data) && $filter_data->status == 'payment_failed') ? 'selected' : '' }}>{{ __('Payment Failed') }}</option>
                                            </select>
                                        </div>

                                        <!--end::Col-->
                                    </div>





                                    <div class="row col-5 mt-3">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('Date From') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="date_from" class="form-control form-control-lg form-control-solid" id="kt_datepicker_date_from" placeholder="{{ __('Date From') }}" value="{{(isset($filter_data))?$filter_data->date_from:''}}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row col-5 mt-3">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('Date To') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="date_to" class="form-control form-control-lg form-control-solid"  id="kt_datepicker_date_to" placeholder="{{ __('Date To') }}" value="{{(isset($filter_data))?$filter_data->date_to:''}}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>


                                    <input type="hidden" name="filter" value="all">
                                    <input type="hidden" name="user_id" value="{{(isset($user_id)) ? $user_id : 0}}">
                                    <div class="row col-2 mt-3">
                                        <button class="btn btn-primary ">{{ __('Search') }} </button>
                                    </div>
                                    <div class="row col-2 mt-3">
                                        @if(isset($filter_data))
                                        <a href="{{ (isset($user_id)) ? route('user_orders', $user_id)  : route('orders') }}" class="btn btn-danger m-btn m-btn--icon m-btn--wide">
                                            <span>
                                                <i class="la la-warning"></i>
                                                <span>{{ __('Cancel search') }}</span>
                                            </span>
                                        </a>
                                        @endif
                                    </div>

                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
<br>

    <div class="post d-flex flex-column-fluid" id="kt_post">
        <!--begin::Container-->
        <div id="kt_content_container" class="container">
            <!--begin::Card-->
            <div class="card">
                <!--begin::Card header-->
                <div class="card-header border-0 pt-6">
                    <!--begin::Card title-->
                    <div class="card-title">

                    </div>
                    <!--begin::Card title-->

                </div>
                <!--end::Card header-->
                <!--begin::Card body-->
                <div class="card-body pt-0 table-responsive">
                    <!--begin::Table-->
                    <table class="table align-middle table-row-dashed fs-6 gy-5   " id="kt_table_users">
                        <!--begin::Table head-->
                        <thead>
                            <!--begin::Table row-->
                            <tr class="text-muted fw-bolder fs-7 text-uppercase gs-0">
                                <th class="min-w-50px">{{ __('ID') }}</th>
                                {{--  <th class="min-w-125px">{{ __('Vendor') }}</th>
                                <th class="min-w-125px">{{ __('Product') }}</th>  --}}
                                <th class="min-w-125px">{{ __('Status') }}</th>
                                <th class="min-w-125px">{{ __('Date') }}</th>
                                <th class="min-w-125px">{{ __('Quantity') }}</th>
                                <th class="min-w-125px">{{ __('Profits') }}</th>
                                <th class="min-w-125px">{{ __('Total price') }}</th>
                                <th class="text-end min-w-100px">{{ __('Actions') }}</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">

                            <!--begin::Table row-->
                            @foreach($orders as $order)
                            <tr>
                                <td>


                                    <a href="{{ route('show_order', $order->id) }}" >
                                        {{ $order->id }}
                                    </a>

                                </td>

                                <td>
                                    @if($order->status == 'new')
                                    <div class="badge badge-light-warning fw-bolder">{{ __('New') }}</div>
                                    @elseif($order->status == 'approved')
                                    <div class="badge badge-light-info fw-bolder">{{ __('Approved') }}</div>
                                    @elseif($order->status == 'canceled')
                                    <div class="badge badge-light-dangar fw-bolder">{{ __('Canceled') }}</div>
                                    @elseif($order->status == 'refunded')
                                    <div class="badge badge-light-dangar fw-bolder">{{ __('Refunded') }}</div>
                                    @elseif($order->status == 'shipping')
                                    <div class="badge badge-light-primary fw-bolder">{{ __('shipping') }}</div>
                                    @elseif($order->status == 'done')
                                    <div class="badge badge-light-success fw-bolder">{{ __('done') }}</div>
                                    @else
                                    <div class="badge badge-light-danger fw-bolder">{{ __('Payment Failed') }}</div>
                                    @endif
                                </td>

                                <td>{{date('d-m-Y H:i', strtotime($order->created_at))}}</td>




                                <td>{{ $order->quantity }}</td>
                                <td>{{ $order->profits }}</td>
                                <td>{{ $order->total_price }}</td>

                                <td class="text-end">
                                    <a href="#" class="btn btn-light btn-active-light-primary btn-sm" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end" data-kt-menu-flip="top-end">{{ __('Actions') }}
                                    <!--begin::Svg Icon | path: icons/duotone/Navigation/Angle-down.svg-->
                                    <span class="svg-icon svg-icon-5 m-0">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                            <g stroke="none" stroke-width="1" fill="none" fill-rule="evenodd">
                                                <polygon points="0 0 24 0 24 24 0 24" />
                                                <path d="M6.70710678,15.7071068 C6.31658249,16.0976311 5.68341751,16.0976311 5.29289322,15.7071068 C4.90236893,15.3165825 4.90236893,14.6834175 5.29289322,14.2928932 L11.2928932,8.29289322 C11.6714722,7.91431428 12.2810586,7.90106866 12.6757246,8.26284586 L18.6757246,13.7628459 C19.0828436,14.1360383 19.1103465,14.7686056 18.7371541,15.1757246 C18.3639617,15.5828436 17.7313944,15.6103465 17.3242754,15.2371541 L12.0300757,10.3841378 L6.70710678,15.7071068 Z" fill="#000000" fill-rule="nonzero" transform="translate(12.000003, 11.999999) rotate(-180.000000) translate(-12.000003, -11.999999)" />
                                            </g>
                                        </svg>
                                    </span>
                                    <!--end::Svg Icon--></a>
                                    <!--begin::Menu-->
                                    <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-bold fs-7 w-125px py-4" data-kt-menu="true">
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            @if($order->order_type == 'takeaway')
                                            <a href="{{ route('show_pickup_order', $order->id) }}" class="menu-link px-3">{{ __('Show') }}</a>
                                            @elseif($order->order_type == 'delivery')
                                            <a href="{{ route('show_place_order', $order->id) }}" class="menu-link px-3">{{ __('Show') }}</a>
                                            @elseif($order->order_type == 'sree3')
                                            <a href="{{ route('show_sree3_order', $order->id) }}" class="menu-link px-3">{{ __('Show') }}</a>
                                            @elseif($order->order_type == 'sree3_mart')
                                            <a href="{{ route('show_mart_order', $order->id) }}" class="menu-link px-3">{{ __('Show') }}</a>
                                            @else
                                            <a href="{{ route('show_sree3_place_order', $order->id) }}" class="menu-link px-3">{{ __('Show') }}</a>
                                            @endif
                                        </div>
                                        <!--end::Menu item-->
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            @if($order->order_type == 'takeaway')
                                            <a href="{{ route('edit_pickup_order', $order->id) }}" class="menu-link px-3">{{ __('Edit') }}</a>
                                            @elseif($order->order_type == 'delivery')
                                            <a href="{{ route('edit_place_order', $order->id) }}" class="menu-link px-3">{{ __('Edit') }}</a>
                                            @elseif($order->order_type == 'sree3')
                                            <a href="{{ route('edit_sree3_order', $order->id) }}" class="menu-link px-3">{{ __('Edit') }}</a>
                                            @elseif($order->order_type == 'sree3_mart')
                                            <a href="{{ route('edit_mart_order', $order->id) }}" class="menu-link px-3">{{ __('Edit') }}</a>
                                            @else
                                            <a href="{{ route('edit_sree3_place_order', $order->id) }}" class="menu-link px-3">{{ __('Edit') }}</a>
                                            @endif
                                        </div>
                                        <!--end::Menu item-->
                                    </div>
                                    <!--end::Menu-->
                                </td>
                                <!--end::Action=-->
                            </tr>
                            @endforeach
                            <!--end::Table row-->

                        </tbody>
                        <!--end::Table body-->
                    </table>
                    <!--end::Table-->
                    <ul class="pagination pagination-circle">


                        {{-- $orders->appends(Request::all())->links('admin.partials.paginate') --}}

                        @if(!isset($user_id)) {!! $orders->appends(Request::all())->links() !!} @endif

                    </ul>
                </div>
                <!--end::Card body-->
            </div>
            <!--end::Card-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection




@push('scripts')
<script>
    $("#kt_datepicker_date_from").flatpickr();

    $("#kt_datepicker_date_to").flatpickr();
</script>
@endpush
