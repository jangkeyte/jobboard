@if(isset($image) && file_exists(public_path() . '/uploads/' . $image))
    <img style="width: 100%; height:100%;" src="{{ asset('uploads/' . $image) }}" alt="{{ $name ?? '' }}">
@else
    <img style="width: 100%; height:100%;" src="{{ asset('assets/images/default.jpg') }}" alt="{{ $name ?? '' }}">
@endif