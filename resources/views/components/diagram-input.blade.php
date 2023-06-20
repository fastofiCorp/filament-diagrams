<x-dynamic-component :component="$getFieldWrapperView()" :id="$getId()" :label="$getLabel()" :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()"
    :hint="$getHint()" :hint-action="$getHintAction()" :hint-color="$getHintColor()" :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()">
    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}').defer }">
        <div id="{{ $getStatePath() }}-diagram">

        </div>
        <script src="https://unpkg.com/bpmn-js@13.2.0/dist/bpmn-modeler.development.js"></script>

        <script>
            var diagramUrl = 'https://cdn.staticaly.com/gh/bpmn-io/bpmn-js-examples/dfceecba/starter/diagram.bpmn';

            // modeler instance
            var bpmnModeler = new BpmnJS({
                container: '#{{ $getStatePath() }}-diagram',
                keyboard: {
                    bindTo: window
                }
            });
        </script>
    </div>
</x-dynamic-component>
