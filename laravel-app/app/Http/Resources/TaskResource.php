<?php

namespace App\Http\Resources;

use Illuminate\Http\Resources\Json\JsonResource;

class TaskResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return array|\Illuminate\Contracts\Support\Arrayable|\JsonSerializable
     */
    public function toArray($request)
    {
        return [
            'id' => $this->id,
            'name' => $this->name,
            'cate' => $this->cate,
            'status' => $this->status,
            'amount' => $this->amount,
            'start_contact_date' => $this->start_contact_date,
            'start_implement_date' => $this->start_implement_date,
            'finished_date' => $this->finished_date,
            'last_update_date' => $this->last_update_date,
            'receive_payment_date' => $this->receive_payment_date,
            'tag' => $this->tag,
            'remark' => $this->remark,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
