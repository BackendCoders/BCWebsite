@extends('layout.main')

@section('content')

<!-- Type -->
<div>
    <label class="block text-sm font-medium text-gray-700 mb-1">Type</label>

    @php
        $selectedType = old('type', $menu_item->type ?? '');
    @endphp

    <select name="type"
        class="w-full border border-gray-300 rounded-lg px-4 py-2">

        <!-- Default option -->
        <option value="" {{ $selectedType === '' ? 'selected' : '' }}>
            No Type Selection
        </option>

        @foreach(\App\Models\MenuItem::getTypes() as $value => $label)
            <option value="{{ $value }}" {{ $selectedType === $value ? 'selected' : '' }}>
                {{ $label }}
            </option>
        @endforeach

    </select>
</div>

@endsection