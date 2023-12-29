
<select name="city_id" aria-label="{{ __('Select a City') }}" data-control="select2" data-placeholder="{{ __('Select a City') }}.." class="form-select form-select-solid form-select-lg select_citiy">
    <option value="">{{ __('Select a City') }}..</option>

    @foreach($cities as $city)
    <option value="{{ $city->id }}">
        <b>{{ $city->name_ar }} | {{ $city->name_en }}</b>
    </option>
    @endforeach

</select>

<script>
$(document).ready(function() {
    $('.select_citiy').select2();
});

</script>

