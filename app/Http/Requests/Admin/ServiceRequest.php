<?php

namespace App\Http\Requests\Admin;

use Illuminate\Foundation\Http\FormRequest;

class ServiceRequest extends FormRequest
{
    public function authorize(): bool
    {
        return true;
    }

    public function rules(): array
    {
        return [
            'service_category_id' => ['required', 'exists:service_categories,id'],
            'title' => ['required', 'string', 'max:255'],
            'summary' => ['nullable', 'string'],
            'details' => ['nullable', 'string'],
            'duration' => ['nullable', 'string', 'max:255'],
            'price' => ['nullable', 'numeric', 'min:0'],
            'metadata' => ['nullable', 'array'],
            'metadata.*' => ['nullable', 'string'],
            'status' => ['sometimes', 'boolean'],
            'priority' => ['nullable', 'integer', 'between:1,100'],
            'starts_at' => ['nullable', 'date'],
            'ends_at' => ['nullable', 'date', 'after_or_equal:starts_at'],
        ];
    }

    protected function prepareForValidation(): void
    {
        $this->merge([
            'status' => $this->boolean('status', true),
        ]);
    }
}
