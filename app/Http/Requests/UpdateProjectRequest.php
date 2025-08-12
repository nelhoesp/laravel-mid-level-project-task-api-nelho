<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateProjectRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, \Illuminate\Contracts\Validation\ValidationRule|array<mixed>|string>
     */
    public function rules(): array
    {
        $method = $this->method();

        if ($method == 'PUT') {
            return [
                'name' => 'required|string|min:3|max:100',
                'description' => 'required|nullable|string',
                'status' => 'required|in:active,inactive',
            ];
        } else {
            return [
                'name' => 'sometimes|required|string|min:3|max:100',
                'description' => 'sometimes|required|nullable|string',
                'status' => 'sometimes|required|in:active,inactive',
            ];
        }
    }
}
