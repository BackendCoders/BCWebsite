@extends('layout.main')

@section('content')
<!-- Type -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>

    @php
        $selectedType = old('type', '');
    @endphp

    <select name="type"
        class="w-full border border-gray-300 rounded-lg px-4 py-2 focus:ring-2 focus:ring-[#FD5528]">

        <!-- Default option -->
        <option value="" {{ $selectedType === '' ? 'selected' : '' }}>
            No Type Selection
        </option>

        <!-- Dynamic types -->
        @foreach(\App\Models\MenuItem::getTypes() as $value => $label)
            <option value="{{ $value }}" {{ $selectedType === $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach

    </select>

    @error('type')
        <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
    @enderror
</div>

@endsection