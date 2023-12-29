@extends('admin.layout')

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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{__('Users')}} </h1>
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
                            <li class="breadcrumb-item text-muted"> {{__('Users')}}</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">

                        <!--begin::Primary button-->
                        @if(checkGate('users','is_add'))
                        <a href="{{ route('add_user') }}" class="btn btn-primary">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                            <span class="svg-icon svg-icon-2">
                                <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24px" height="24px" viewBox="0 0 24 24" version="1.1">
                                    <rect fill="#000000" x="4" y="11" width="16" height="2" rx="1" />
                                    <rect fill="#000000" opacity="0.5" transform="translate(12.000000, 12.000000) rotate(-270.000000) translate(-12.000000, -12.000000)" x="4" y="11" width="16" height="2" rx="1" />
                                </svg>
                            </span>
                            <!--end::Svg Icon-->{{ __('Add New User') }}
                        </a>
                        @endif


                        <a href="javascript:;" class="btn btn-success exportFile">
                            <!--begin::Svg Icon | path: icons/duotone/Navigation/Plus.svg-->
                            <span class="svg-icon svg-icon-2">

                            </span>
                            <!--end::Svg Icon-->{{ __('Export to CSV') }}
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
                            <form method="get" action="{{ route('filter-users')}}"    class="form">

                                <div class="row">
                                    <div class="row col-5">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('Users') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="users" id="name" class="form-control form-control-lg form-control-solid" placeholder="{{ __('Users') }}" value="{{(isset($filter_data))?$filter_data->users:''}}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>
                                    
                                    <div class="row col-5">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('phone') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="phone"  class="form-control form-control-lg form-control-solid" placeholder="{{ __('phone') }}" value="{{(isset($filter_data))?$filter_data->phone:''}}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    <div class="row col-5">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('user type') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            {{-- <input type="text" name="user_type"  class="form-control form-control-lg form-control-solid" placeholder="user or vendor" value="{{(isset($filter_data))?$filter_data->user_type:''}}" /> --}}
                                            <select name="user_type" aria-label="{{ __('user type') }}" data-control="select2" data-placeholder="{{ __('user type') }}.." class="form-select form-select-solid form-select-lg">
                                                <option value=""></option>
                                                <option value="user" >{{ __('user') }}</option>
                                                <option value="vendor" >{{ __('vendor') }}</option>
                
                                            </select>
                                        </div>
                                        <!--end::Col-->
                                    </div>


                                    <div class="row col-5 mt-3">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('Birthdate') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="birthdate" id="birthdate" class="form-control form-control-lg form-control-solid kt_datepicker"   placeholder="{{ __('Birthdate') }}" value="{{(isset($filter_data))?$filter_data->birthdate:''}}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                    
                                    <div class="row col-5 mt-3">
                                        <!--begin::Label-->
                                        <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('email') }}</label>
                                        <!--end::Label-->
                                        <!--begin::Col-->
                                        <div class="col-lg-8 fv-row">
                                            <input type="text" name="email"  class="form-control form-control-lg form-control-solid "   placeholder="{{ __('email') }}" value="{{(isset($filter_data))?$filter_data->email:''}}" />
                                        </div>
                                        <!--end::Col-->
                                    </div>

                                     <div class="row col-2 mt-3">
                                        <button class="btn btn-primary ">{{ __('Search') }} </button>
                                    </div>
                                    <div class="row col-2 mt-3">
                                        {{-- @if(isset($filter_data)) --}}
                                        <a href="{{ route('users') }}" class="btn btn-danger m-btn m-btn--icon m-btn--wide">
                                            <span>
                                                <i class="la la-warning"></i>
                                                <span>{{ __('Cancel search') }}</span>
                                            </span>
                                        </a>
                                        {{-- @endif --}}
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
                                <th class="min-w-50px">{{ __('ID') }}</th>
                                <th class="min-w-125px">{{ __('user') }}</th>
                                <th class="min-w-125px">{{ __('Name') }}</th>
                                <th class="min-w-125px">{{ __('Phone') }}</th>
                                <th class="min-w-125px">{{ __('Birthdate') }}</th>
                                <th class="min-w-125px">{{ __('Status') }}</th>
                                <th class="min-w-125px">{{ __('Joined Date') }}</th>
                                <th class="text-end min-w-100px">{{ __('Actions') }}</th>
                            </tr>
                            <!--end::Table row-->
                        </thead>
                        <!--end::Table head-->
                        <!--begin::Table body-->
                        <tbody class="text-gray-600 fw-bold">

                            <!--begin::Table row-->
                            @foreach($users as $user)
                            <tr>
                                <td>{{ $user->id }}</td>

                                <td class="d-flex align-items-center">
                                    <div class="symbol symbol-circle symbol-50px overflow-hidden me-3">
                                        <a href="{{ route('show_user', $user->id) }}">
                                            <div class="symbol-label">
                                                <img src="{{$user->getImageAttribute($user->image)}}"  class="w-100" />
                                            </div>
                                        </a>
                                    </div>

                                  
                                </td>
                                <td>{{$user->name }}</td>
                                <td>{{ $user->phone }}</td>
                               
                                <td>{{ $user->birthdate }}</td>
                               
                                <td>
                                    @if($user->status == 'active')
                                    <div class="badge badge-light-success fw-bolder">{{ __('Active') }}</div>
                                    @elseif($user->status == 'not_active')
                                    <div class="badge badge-light-warning fw-bolder">{{ __('Not Active') }}</div>
                                    @else
                                    <div class="badge badge-light-danger fw-bolder">{{ __('Banned') }}</div>
                                    @endif
                                </td>


                                <td>{{date('d-m-Y', strtotime($user->created_at))}}</td>
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
                                            <a href="{{ route('show_user', $user->id) }}" class="menu-link px-3">{{ __('Show') }}</a>
                                        </div>
                                        
                                        @if($user->status == 'not_active')
                                        <div class="menu-item px-3">
                                            <a href="{{ route('activation', $user->id) }}" class="menu-link px-3">{{ __('active') }}</a>
                                        </div>
                                        @else
                                        <div class="menu-item px-3">
                                            <a href="{{ route('activation', $user->id) }}" class="menu-link px-3">{{ __('deactive') }}</a>
                                        </div>
                                        @endif

                                        @if(checkGate('users','is_edit'))
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="{{ route('edit_user', $user->id) }}" class="menu-link px-3">{{ __('Edit') }}</a>
                                        </div>
                                        <!--end::Menu item-->
                                        @endif

                                        @if(checkGate('users','is_delete'))
                                        <!--begin::Menu item-->
                                        <div class="menu-item px-3">
                                            <a href="#" class="menu-link px-3 delete_alert" data-id="{{$user->id}}">{{ __('Delete') }}</a>
                                        </div>
                                        <!--end::Menu item-->
                                        @endif

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
                        {{$users->appends(Request::all())->links('admin.partials.paginate')}}
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
                    url: "{{ route('delete_user') }}",
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

  
    $(document).on('click', '.exportFile', function() {

        document.location.href= "{{url('admin/export_users/xls')}}?name="+ $("#name").val() + "&email="+ $("#email").val() + "&phone="+ $("#phone").val() + "&birthdate="+ $("#birthdate").val() + "&last_purchase="+ $("#last_purchase").val() + "&total_purchased="+ $("#total_purchased").val();
    });
</script>
@endpush
