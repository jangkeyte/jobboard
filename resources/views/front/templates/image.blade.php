@if(isset($image) && file_exists(public_path() . '/uploads/' . $image))
    <img src="{{ asset('uploads/' . $image) }}" alt="{{ $name ?? '' }}" @isset($class) class="{{ $class }}" @endif>
@else
    <img src="{{ asset('assets/images/default.jpg') }}" alt="{{ $name ?? '' }}">
@endif