<?php

namespace Afsharmn\Contently;

use Afsharmn\Contently\Helpers\Json;
use InvalidArgumentException;

class ContentlyManager
{
    private array $configs = [];
    private string $data = '';

    public function config(array $configs): self
    {
        $this->configs = array_merge($this->configs, $configs);
        return $this;
    }

    public function data(string $data): self
    {
        if (!Json::isJson($data))
            throw new InvalidArgumentException('Contently::render() received invalid JSON.');

        $this->data = $data;
        return $this;
    }

    public function render(string|null $data = null): string
    {
        $contentRenderer = new ContentRenderer(
            $this->configs,
            $this->data
        );

        return $contentRenderer->render();
    }
}
