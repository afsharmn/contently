<?php

namespace Afsharmn\Contently;

use Illuminate\Support\Facades\View;

class ContentRenderer
{
    private string|null $data;

    public function __construct($data = null)
    {
        $this->data = $data;
    }

    public function render()
    {
        return View::make('contently::builder', [
            'data' => $this->data,
        ])->render();
    }


}
