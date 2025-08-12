<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return [
            'id' => $this->id,
            'title' => $this->title,
            'description' => $this->description,
            'status' => $this->status,
            'priority' => $this->priority,
            'dueDate' => $this->due_date,
            'project' => $this->whenLoaded('project', function () {
                return [
                    'name' => $this->project->name,
                    'description' => $this->project->description,
                    'status' => $this->project->status,
                ];
            }),
        ];
    }
}
