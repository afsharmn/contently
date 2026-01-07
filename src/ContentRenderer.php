<?php

namespace Afsharmn\Contently;

use Illuminate\Support\Facades\View;

class ContentRenderer
{

    private array $configs;
    private string $data;

    public function __construct($configs , $data)
    {
        $this->configs = $configs;
        $this->data = $data;
    }

    public function render()
    {
        return View::make('contently::builder', [
            'data' => $this->data,
        ])->render();
    }


}
