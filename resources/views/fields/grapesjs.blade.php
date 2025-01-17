<x-filament-forms::field-wrapper
    :id="$getId()"
    :label="$getLabel()"
    :label-sr-only="$isLabelHidden()"
    :helper-text="$getHelperText()"
    :hint="$getHint()"
    :hint-icon="$getHintIcon()"
    :required="$isRequired()"
    :state-path="$getStatePath()"
>

<div class="panel__top">
    <div class="panel__basic-actions"></div>
</div>

<div
    wire:ignore
    class="filament-grapesjs"
    x-data="grapesjs({
            container: '#gjs_{{$getId()}}',
            state: $wire.{{ $applyStateBindingModifiers('entangle(\'' . $getStatePath() . '\')') }},
            statePath: '{{ $getStatePath() }}',
            readOnly: {{ $isDisabled() ? 'true' : 'false' }},
            tools: @js($getTools()),
            plugins: @js($getPlugins()),
            settings: @js($getSettings()),
            minHeight: @js($getMinHeight())
        })"
>

    <div
        id='gjs_{{$getId()}}'
        class="grapesjs-wrapper"
    >
        {!! $getHtmlData() !!}
    </div>

</div>

<div id="blocks"></div>
</x-filament-forms::field-wrapper>
