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
                        <h1 class="page-heading d-flex text-dark fw-bold fs-3 flex-column justify-content-center my-0">{{__('Shipments')}} </h1>
                        <!--end::Title-->
                        <!--begin::Breadcrumb-->
                        <ul class="breadcrumb breadcrumb-separatorless fw-semibold fs-7 my-0 pt-1">
                            <!--begin::Item-->
                           
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item">
                                <span class="bullet bg-gray-400 w-5px h-2px"></span>
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="breadcrumb-item text-muted"> {{__('Shipments')}}</li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Breadcrumb-->
                    </div>
                    <!--end::Page title-->
                    <!--begin::Actions-->
                    <div class="d-flex align-items-center gap-2 gap-lg-3">

                        <!--begin::Primary button-->

                        <a href="{{ route('shipments') }}" class="btn btn-primary">

                            <!--end::Svg Icon-->{{ __('View Shipment') }}
                        </a>



                    </div>
                    <!--end::Actions-->
                </div>
                <!--end::Toolbar container-->
            </div>

            <!--end::Toolbar-->
            <!--begin::Basic info-->
            <div class="card mb-5 mb-xl-10">
                <!--begin::Card header-->
                <div class="card-header border-0 cursor-pointer" role="button" data-bs-toggle="collapse" data-bs-target="#kt_account_profile_details" aria-expanded="true" aria-controls="kt_account_profile_details">
                    <!--begin::Card title-->
                    <div class="card-title m-0">
                        <h3 class="fw-bolder m-0">Edit Shipment</h3>
                    </div>
                    <!--end::Card title-->
                </div>
                <!--begin::Card header-->
                <!--begin::Content-->
                <div id="kt_account_profile_details" class="collapse show">
                    <!--begin::Form-->
                    <form id="kt_account_profile_details_form" class="form" autocomplete='off'>
                        <!--begin::Card body-->
                        <div class="card-body border-top p-9">
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label fw-bold fs-6">{{ __('Image') }}</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8">
                                    <!--begin::Image input-->
                                    <div class="image-input image-input-outline" data-kt-image-input="true" style="background-image: url("{{ asset('public/assets/media/avatars/blank.png') }}")">
                                        <!--begin::Preview existing avatar-->
                                        <div class="image-input-wrapper w-125px h-125px" style="background-image: url('{{asset('/public/images/shipments/'. $shipment->image) }}')"></div>
                                        <!--end::Preview existing avatar-->
                                        <!--begin::Label-->
                                        <label class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="change" data-bs-toggle="tooltip" title="{{ __('Change avatar') }}">
                                            <i class="bi bi-pencil-fill fs-7"></i>
                                            <!--begin::Inputs-->
                                            <input type="file" name="image" accept=".png, .jpg, .jpeg" />
                                            <input type="hidden" name="avatar_remove" />
                                            <!--end::Inputs-->
                                        </label>
                                        <!--end::Label-->
                                        <!--begin::Cancel-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="cancel" data-bs-toggle="tooltip" title="{{ __('Cancel avatar') }}">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Cancel-->
                                        <!--begin::Remove-->
                                        <span class="btn btn-icon btn-circle btn-active-color-primary w-25px h-25px bg-body shadow" data-kt-image-input-action="remove" data-bs-toggle="tooltip" title="{{ __('Remove avatar') }}">
                                            <i class="bi bi-x fs-2"></i>
                                        </span>
                                        <!--end::Remove-->
                                    </div>
                                    <!--end::Image input-->
                                    <!--begin::Hint-->
                                    <div class="form-text">{{ __('Allowed file types: png, jpg, jpeg.') }}</div>
                                    <!--end::Hint-->
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->

                             <!--begin::Input group-->
                             <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-bold fs-6">Code</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="code" class="form-control form-control-lg form-control-solid" placeholder="Code" value="{{$shipment->code}}" />
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-bold fs-6">Shipper</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="shipper" class="form-control form-control-lg form-control-solid" placeholder="Shipper" value="{{$shipment->shipper}}" />
                                </div>
                                <!--end::Col-->
                            </div>

                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-bold fs-6">Weight</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="weight" class="form-control form-control-lg form-control-solid" placeholder="Weight" value="{{$shipment->weight}}" />
                                </div>
                                <!--end::Col-->
                            </div>
                            
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-bold fs-6">Description</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <input type="text" name="description" class="form-control form-control-lg form-control-solid" placeholder="Description" value="{{$shipment->description}}" />
                                </div>
                                <!--end::Col-->
                            </div>

                           
                            @if($shipment->status != 'Done')
                            <!--begin::Input group-->
                            <div class="row mb-6">
                                <!--begin::Label-->
                                <label class="col-lg-4 col-form-label  fw-bold fs-6">{{ __('Status') }}</label>
                                <!--end::Label-->
                                <!--begin::Col-->
                                <div class="col-lg-8 fv-row">
                                    <select name="status" aria-label="{{ __('Select an Status') }}" data-control="select2" data-placeholder="{{ __('Select an Status') }}.." class="form-select form-select-solid form-select-lg">
                                        <option value="Pending" {{ $shipment->status == 'Pending' ? 'selected' : ''}}>{{ __('Pending') }}</option>
                                        <option value="Progress" {{ $shipment->status == 'Progress' ? 'selected' : ''}}>{{ __('Progress') }}</option>
                                        <option value="Done" {{ $shipment->status == 'Done' ? 'selected' : ''}}>{{ __('Done') }}</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                           @endif
                          

                        </div>
                        <!--end::Card body-->
                        <!--begin::Actions-->
                        <div class="card-footer d-flex justify-content-end py-6 px-9">
                            <button type="submit" class="btn btn-primary" id="kt_account_profile_details_submit">
                                <span class="indicator-label">{{ __('Save Changes') }}</span>
                                <span class="indicator-progress">{{ __('Please wait') }}...
                                    <span class="spinner-border spinner-border-sm align-middle ms-2"></span>
                                </span>
                            </button>
                            <a href="{{ route('shipments') }}" class="btn btn-danger mx-2">{{ __('Back') }}</a>
                        </div>
                        <!--end::Actions-->
                    </form>
                    <!--end::Form-->
                </div>
                <!--end::Content-->
            </div>
            <!--end::Basic info-->

        </div>
        <!--end::Container-->
    </div>
    <!--end::Post-->
@endsection

@push('scripts')
<script>
    "use strict";
    $.ajaxSetup({
        headers: {
            'X-CSRF-Token': $('meta[name="csrf-token"]').attr('content')
        }
    });

  
    

    var KTAccountSettingsProfileDetails = function() {
        var e, t, formData, i;
        return {
            init: function() {
                e = document.getElementById("kt_account_profile_details_form"),
                i = document.querySelector("#kt_account_profile_details_submit"),
                t = FormValidation.formValidation(e, {
                   
                    plugins: {
                        trigger: new FormValidation.plugins.Trigger,
                        submitButton: new FormValidation.plugins.SubmitButton,
                        bootstrap: new FormValidation.plugins.Bootstrap5({
                            rowSelector: ".fv-row",
                            eleInvalidClass: "",
                            eleValidClass: ""
                        })
                    }
                }), i.addEventListener("click", (function(e) {
                    e.preventDefault(),
                    // console.log("click"),
                    t.validate().then((function(t) {
                        // console.log(t)
                        formData = new FormData(jQuery('#kt_account_profile_details_form')[0])
                        if(t == 'Valid') {
                            i.setAttribute("data-kt-indicator", "on"),
                            i.disabled = !0,
                            $.ajax({
                                type: "POST",
                                url: "{{ route('updateShipment', $shipment->id) }}",
                                data: formData,
                                processData: false,
                                contentType: false,
                                mimeType: "multipart/form-data",
                                dataType: 'json',
                                success: function(data){
                                    if(data.status_code == 200) {
                                        setTimeout((function(){
                                            i.removeAttribute("data-kt-indicator"),
                                            i.disabled = !1,
                                            Swal.fire({
                                                text: data.message,
                                                icon: "success",
                                                buttonsStyling:!1,
                                                confirmButtonText:"{{ __('Ok, got it!') }}",
                                                customClass:{
                                                    confirmButton:"btn btn-primary"
                                                }
                                            }).then((function(e){
                                                // e.isConfirmed&&(
                                                    location.reload()
                                                // )
                                            }))
                                        }),2e3)
                                    } else {
                                        i.removeAttribute("data-kt-indicator"),
                                        i.disabled = !1,
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
                                    i.removeAttribute("data-kt-indicator"),
                                    i.disabled = !1,
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
                        } else {
                            i.removeAttribute("data-kt-indicator"),
                            i.disabled = !1,
                            swal.fire({
                                text: "Sorry, looks like there are some errors detected, please try again.",
                                icon: "error",
                                buttonsStyling: !1,
                                confirmButtonText: "{{ __('Ok, got it!') }}",
                                customClass: {
                                    confirmButton: "btn font-weight-bold btn-light-primary"
                                }
                            })
                        }
                    }))
                }))
            }
        }
    }();
    KTUtil.onDOMContentLoaded((function() {
        KTAccountSettingsProfileDetails.init()
    }));



</script>

@endpush
