<?php

namespace Afsharmn\Contently;

class ContentlyManager
{
    public function render(?string $content = null): string
    {
        // For now: super simple output.
        // Later: load blocks from DB, render different versions, etc.
        $content ??= '<div>Contently is working ✅</div>';

        return $content;
    }
}
