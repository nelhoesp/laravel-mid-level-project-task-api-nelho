<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;

class UpdateTaskRequest extends FormRequest
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
                'title' => 'required|string|min:3|max:100',
                'description' => 'required|nullable|string',
                'status' => 'required|in:pending,in_progress,done',
                'priority' => 'required|in:low,medium,high',
                'dueDate' => 'required|date',
                'projectId' => 'required',
            ];
        } else {
            return [
                'title' => 'sometimes|required|string|min:3|max:100',
                'description' => 'sometimes|required|nullable|string',
                'status' => 'sometimes|required|in:pending,in_progress,done',
                'priority' => 'sometimes|required|in:low,medium,high',
                'dueDate' => 'sometimes|required|date',
                'projectId' => 'sometimes|required',
            ];
        }
    }

    protected function prepareForValidation()
    {
        if ($this->dueDate){
            $this->merge([
                'due_date' => $this->dueDate,
            ]);
        }

        if ($this->projectId) {
            $this->merge([
                'project_id' => $this->projectId,
            ]);
        }      
    }
}
