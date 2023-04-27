<?php

namespace App\DTO;

use App\Http\Requests\SupportRequest;

class CreateSupportDTO
{

    public function __construct(
        public $subjet,
        public $status,
        public $body
    ) {
    }

    public static function makeFromRequest(SupportRequest $request)
    {
        return new self(
            $request->subjet,
            'a',
            $request->body
        );
    }
}
