@extends('layout')

@section('content')
   <!--begin::Post-->
   <div class="post d-flex flex-column-fluid" id="kt_post">
    <!--begin::Container-->
    <div id="kt_content_container" class="container">

        <!--begin::Toolbar-->
        <div id="kt_app_toolbar" class="app-toolbar py-3 py-lg-6">
            <!--begin::Toolbar container-->
            <div id="kt_app_toolbar_container" class="app-container container-xxl d-flex flex-stack">
                <!--begin::Page title-->
                <div class="page-title d-flex flex-column justify-content-center flex-wrap me-3">
                    <!--begin::Title-->
                    <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">Shipments </h1>
                    <!--end::Title-->
                    <!--begin::Breadcrumb-->
                    <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                        
                        <!--begin::Item-->
                        <li class="breadcrumb-item">
                            <span class="bullet bg-gray-400 w-5px h-2px"></span>
                        </li>
                        <!--end::Item-->
                        <!--begin::Item-->
                        <li class="breadcrumb-item text-muted"> Shipments</li>
                        <!--end::Item-->
                    </ul>
                    <!--end::Breadcrumb-->
                </div>
                <!--end::Page title-->
                <!--begin::Actions-->
                <div class="d-flex align-items-center gap-2 gap-lg-3">

                    <!--begin::Primary button-->
                   
                    <a href="{{route('addShipment')}}" class="btn btn-primary">
                        <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                        <span class="svg-icon svg-icon-2">
                            <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                <rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
                            </svg>
                        </span>
                        <!--end::Svg Icon-->{{ __('Add New Shipment') }}
                    </a>
                  
                    <!--end::Primary button-->
                </div>
                <!--end::Actions-->
            </div>
            <!--end::Toolbar container-->
        </div>
        <!--end::Toolbar-->
        <div class="card">
            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">
                    <!--begin::Search-->
                    <div class="d-flex align-items-center   my-1">
                        <!--begin::Svg Icon | path: icons/duotone/General/Search.svg-->
                        <form method="get" action="{{route('filterShipment')}}"    class="form">

                            <div class="row">
                                
                                
                                <div class="row col-5">
                                    <!--begin::Label-->
                                    <label class="col-lg-4 col-form-label  fw-bold fs-6">Status</label>
                                    <!--end::Label-->
                                    <!--begin::Col-->
                                    <div class="col-lg-8 fv-row">
                                       
                                        <select name="status" aria-label="Shiper" data-control="select2" data-placeholder="Shiper" class="form-select form-select-solid form-select-lg">
                                            <option value=""></option>
                                            <option value="Pending" >Pending</option>
                                            <option value="Progress" >Progress</option>
                                            <option value="Done" >Done</option>
            
                                        </select>
                                    </div>
                                    <!--end::Col-->
                                </div>

                                <div class="row col-5">
                                    <!--begin::Label-->
                                    <a href="{{ route('groupShipment') }}" class="btn btn-success m-btn m-btn--icon m-btn--wide">
                                        <span>
                                            <span>{{ __('Group By Shipper') }}</span>
                                        </span>
                                    </a>
                                    <!--end::Col-->
                                </div>
                                <div class="row">
                                 <div class="row col-3 mt-5" >
                                    <button class="btn btn-primary ">{{ __('Search') }} </button>
                                </div>
                                <div class="row col-3 mt-5">
                                   
                                    <a href="{{ route('shipments') }}" class="btn btn-danger m-btn m-btn--icon m-btn--wide">
                                        <span>
                                            <i class="la la-warning"></i>
                                            <span>{{ __('Cancel search') }}</span>
                                        </span>
                                    </a>
                                   
                                </div>
                            </div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    {{-- </br> --}}
        <!--begin::Card-->
        <div class="card">

            <!--begin::Card header-->
            <div class="card-header border-0 pt-6">
                <!--begin::Card title-->
                <div class="card-title">

                </div>
                <!--begin::Card title-->

                <!--begin::Card toolbar-->
                <div class="card-toolbar">


                </div>
                <!--end::Card toolbar-->
            </div>
            <!--end::Card header-->
            <!--begin::Card body-->
            <div class="card-body pt-0 table-responsive">
                <!--begin::Table-->
                <table class="table align-middle table-row-dashed fs-6 gy-5 " id="kt_table_users">
                    <!--begin::Table head-->
                    <thead>
                        <!--begin::Table row-->
                        <tr class="text-muted fw-bolder fs-7 text-uppercase gs-0">
                            <th class="min-w-125px">Code</th>
                            <th class="min-w-50px">Image</th>
                           
                            <th class="min-w-125px">Shipper</th>
                            <th class="min-w-125px">weight</th>
                            <th class="min-w-125px">Description</th>
                            <th class="min-w-125px">Price</th>
                            <th class="min-w-125px">Status</th>
                            <th class="text-end min-w-100px">{{ __('Actions') }}</th>
                        </tr>
                        <!--end::Table row-->
                    </thead>
                    <!--end::Table head-->
                    <!--begin::Table body-->
                    <tbody class="text-gray-600 fw-bold">

                        <!--begin::Table row-->
                        @foreach($shipments as $shipment)
                        <tr>
                            <td>{{ $shipment->code }}</td>

                            <td class="d-flex align-items-center">
                                <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                    <a href="">
                                        <div class="symbol-label">
                                            <img src="{{ asset('public/images/shipments/' . $shipment->image) }}"  class="w-100" />
                                        </div>
                                    </a>
                                </div>
                            </td>
                           
                            <td>{{ $shipment->shipper }}</td>
                            <td>{{ $shipment->weight }}</td>
                            <td>{{ $shipment->description }}</td>
                            <td>{{ $shipment->price }}</td>
                            <td>{{ $shipment->status }}</td>
                            
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
                                        <a href="{{route('editShipment',$shipment->id)}}" class="menu-link px-3">Edit</a>
                                    </div>
                                    <!--end::Menu item-->
                                                                   
                                    <!--begin::Menu item-->
                                    <div class="menu-item px-3">
                                        <a href="#" class="menu-link px-3 delete_alert" data-id="{{$shipment->id}}">Delete</a>
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
                    {{$shipments->appends(Request::all())->links('partials.paginate')}}
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
    "use strict"
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });

    $(".kt_datepicker").flatpickr({
        enableTime: false,
        dateFormat: "Y-m-d",
    });

    $(document).on('click', '.delete_alert', function() {
        var user_id = $(this).data('id');
        Swal.fire({
            text: "{{ __('Are you sure to delete this user ?') }}",
            icon: "success",
            buttonsStyling:!1,
            showCloseButton: true,
            showCancelButton: true,
            confirmButtonText:"{{ __('Yes') }}",
            cancelButtonText: "{{ __('No') }}",
            customClass:{
                confirmButton:"btn btn-primary",
                cancelButton:"btn btn-danger"
            }
        }).then((function(e){
            e.isConfirmed&&(
                // location.reload()
                $.ajax({
                    type: "POST",
                    url: "{{ route('deleteShipment') }}",
                    data: {'id': user_id},
                    dataType: 'json',
                    success: function(data){
                        if(data.status_code == 200) {
                            location.reload();
                        } else {
                            Swal.fire({
                                text: data.message,
                                icon: "error",
                                buttonsStyling: false,
                                confirmButtonText:"{{ __('Ok, got it!') }}",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            });
                        }
                    },
                    error: function(data){
                        Swal.fire({
                            text:"{{ __('Sorry, looks like there are some errors detected, please try again.') }}",
                            icon: "error",
                            buttonsStyling: false,
                            confirmButtonText:"{{ __('Ok, got it!') }}",
                            customClass: {
                                confirmButton: "btn font-weight-bold btn-light-primary"
                            }
                        });
                    }
                })
            )
        }))
    })

  
   
</script>
@endpush
