<?php

declare(strict_types=1);

namespace Dotswan\FilamentGrapesjs\Fields;

use Filament\Forms\Components\Field;
use Filament\Forms\Concerns\HasStateBindingModifiers;
use Dotswan\FilamentGrapesjs\Fields\Concerns\InteractsWithTools;

class GrapesJs extends Field
{
    use HasStateBindingModifiers;

    use InteractsWithTools;
    protected string $view = 'filament-grapesjs::fields.grapesjs';

    protected array | Closure $tools = [

    ];
    protected string $htmlData;

    protected int | Closure | null $minHeight = 768;

    public function minHeight(int | Closure | null $minHeight): static
    {
        $this->minHeight = $minHeight;

        return $this;
    }

    public function getMinHeight(): ?int
    {
        return $this->evaluate($this->minHeight);
    }

    public function getHtmlData()
    {
        return $this->evaluate($this->getState());
    }
}
