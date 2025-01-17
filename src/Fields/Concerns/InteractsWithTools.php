<?php

namespace Dotswan\FilamentGrapesjs\Fields\Concerns;

use Closure;

trait InteractsWithTools
{
    public function getTools(): array
    {
        return $this->evaluate($this->tools);
    }

    public function getPlugins(): array
    {
        return $this->evaluate($this->plugins);
    }

    public function getSettings(): array
    {
        return $this->evaluate($this->settings);
    }
}
