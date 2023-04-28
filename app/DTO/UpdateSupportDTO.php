<?php

namespace App\DTO;

use App\Enums\SupportStatus;
use App\Http\Requests\SupportRequest;

class UpdateSupportDTO
{

    public function __construct(
        public string|int $id,
        public string $subject,
        public SupportStatus $status,
        public string $body
    ) {
    }

    public static function makeFromRequest(SupportRequest $request): self
    {
        return new self(
            $request->id,
            $request->subject,
            SupportStatus::A,
            $request->body
        );
    }
}
