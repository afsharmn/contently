<?php

namespace Afsharmn\Contently;

use Afsharmn\Contently\Helpers\Json;
use InvalidArgumentException;

class ContentlyManager
{
    public function render(string|null $data = null): string
    {
        if (empty($data))
            return (new ContentRenderer())->render();

        if (Json::isJson($data))
            return (new ContentRenderer($data))->render();

        throw new InvalidArgumentException('Contently::render() received invalid JSON.');

    }
}
