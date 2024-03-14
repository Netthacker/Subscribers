<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class SubscriberResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */

    public function toArray(Request $request): array
    {
        $subscriber = 'no';
        if ($this->subscribed) {
            $subscriber = 'yes';
        }

        return [
            'id' => $this->id,
            'nome' => $this->nome,
            'email' => $this->email,
            'subscribed' => $subscriber,
            'created_at' => $this->created_at,
            'updated_at' => $this->updated_at,
        ];
    }
}
