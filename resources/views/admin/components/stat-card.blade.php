@props([
    'label',
    'value',
    'description' => null,
    'icon' => null,
    'color' => 'indigo',
])

<div class="rounded-2xl border border-slate-100 bg-white p-5 shadow-sm">
    <div class="flex items-center justify-between">
        <div>
            <p class="text-xs uppercase tracking-wide text-slate-400">{{ $label }}</p>
            <p class="text-2xl font-semibold text-slate-900">{{ $value }}</p>
        </div>
        @if ($icon)
            <span class="inline-flex h-10 w-10 items-center justify-center rounded-full bg-{{ $color }}-100 text-{{ $color }}-500">
                {!! $icon !!}
            </span>
        @endif
    </div>
    @if ($description)
        <p class="mt-3 text-xs text-slate-500">{{ $description }}</p>
    @endif
</div>
