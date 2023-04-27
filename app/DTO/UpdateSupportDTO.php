<?php

namespace App\DTO;

use App\Http\Requests\SupportRequest;

class UpdateSupportDTO
{

    public function __construct(
        public $id,
        public $subjet,
        public $status,
        public $body
    ) {
    }

    public static function makeFromRequest(SupportRequest $request)
    {
        return new self(
            $request->id,
            $request->subjet,
            'a',
            $request->body
        );
    }
}
