<x-dynamic-component :component="$getFieldWrapperView()" :id="$getId()" :label="$getLabel()" :label-sr-only="$isLabelHidden()" :helper-text="$getHelperText()"
    :hint="$getHint()" :hint-action="$getHintAction()" :hint-color="$getHintColor()" :hint-icon="$getHintIcon()" :required="$isRequired()" :state-path="$getStatePath()">

    <div x-data="{ state: $wire.entangle('{{ $getStatePath() }}') }" @mouseleave="
        $wire.set('{{ $getStatePath() }}', $refs . diagram . innerHTML);">
        <div wire:ignore>
            <ap-menu id="menu"></ap-menu>
            <ap-menu-shape id="menu-shape"></ap-menu-shape>
            <div id="tip"
                style="position: fixed; left: 50%; top: 30%; transform: translate(-50%, -30%); min-width: 1px;">

            </div>

            <svg id="diagram" x-ref="diagram" class='w-full' tabindex="0"
                style="touch-action: none; height:500px; background-color: #fff; display:block; user-select: none; -webkit-user-select: none; -webkit-touch-callout: none; pointer-events: none;">
                <style type="text/css">
                    text {
                        white-space: pre-wrap;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        font-size: 16px;
                        color: rgb(73, 80, 87);
                    }

                    textarea {
                        text-align: center;
                        border: none;
                        padding: 10px;
                        padding-top: 0.8em;
                        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
                        font-size: 16px;
                        background-color: transparent;
                        color: transparent;
                        outline: none;
                        overflow: hidden;
                        resize: none;
                        line-height: 1em;
                        caret-color: #fff;
                    }

                    [data-connect] {
                        display: none;
                    }

                    .select path[data-key="selected"],
                    .select .path-end,
                    .select [data-connect],
                    .highlight-e [data-key="end"] .path-end,
                    .highlight-s [data-key="start"] .path-end,
                    .hover [data-connect] {
                        display: unset;
                        opacity: 0.51;
                        stroke: rgb(108 187 247);
                        fill: rgb(108 187 247);
                    }

                    [data-connect].hover {
                        stroke-width: 25px;
                    }

                    .select path[data-key="selected"] {
                        fill: none;
                    }

                    .highlight [data-key="main"] {
                        paint-order: stroke;
                        stroke-width: 10px;
                        stroke: rgb(108 187 247 / 51%);
                    }

                    .shpath [data-key="end"] .path,
                    .shpath [data-key="start"] .path {
                        display: none;
                    }

                    .shpath.arw-e [data-key="end"] .path,
                    .shpath.arw-s [data-key="start"] .path {
                        display: unset;
                    }

                    .shpath.dash [data-key="path"] {
                        stroke-dasharray: 5;
                    }

                    @media (pointer: coarse) {
                        circle.path-end {
                            r: 20px;
                        }

                        .ative-elem {
                            stroke: rgb(108 187 247 / 51%);
                            stroke-width: 70px;
                        }

                        [data-connect] {
                            stroke-width: 15px;
                        }

                        [data-connect].hover {
                            stroke-width: 70px;
                        }
                    }


                    /* rect, text shape */
                    .shrect.ta-1 text,
                    .shtxt.ta-1 text {
                        text-anchor: start;
                    }

                    .shrect.ta-2 text,
                    .shtxt.ta-2 text {
                        text-anchor: middle;
                    }

                    .shrect.ta-3 text,
                    .shtxt.ta-3 text {
                        text-anchor: end;
                    }

                    .shrect.ta-1 textarea,
                    .shtxt.ta-1 textarea {
                        text-align: left;
                    }

                    .shrect.ta-2 textarea,
                    .shtxt.ta-2 textarea {
                        text-align: center;
                    }

                    .shrect.ta-3 textarea,
                    .shtxt.ta-3 textarea {
                        text-align: right;
                    }

                    .shtxt textarea {
                        caret-color: rgb(73, 80, 87);
                    }

                    .shtxt text {
                        fill: rgb(73, 80, 87);
                    }

                    .shtxt [data-key="main"] {
                        fill: transparent;
                        stroke: transparent;
                    }

                    .shtxt.select [data-key="main"],
                    .shtxt.highlight [data-key="main"] {
                        stroke: rgb(108 187 247 / 51%);
                        stroke-width: 2px;
                    }

                    /* rhomb shape */
                    .shrhomb.highlight [data-key="border"] {
                        stroke-width: 28px;
                        stroke: rgb(108 187 247 / 51%);
                    }

                    .shrhomb.highlight [data-key="main"] {
                        stroke-width: 18px;
                        stroke: #1D809F;
                    }

                    /* shape settings styles */
                    .cl-red [data-key="main"] {
                        fill: #E74C3C;
                    }

                    .cl-red .path {
                        stroke: #E74C3C;
                    }

                    .cl-orange [data-key="main"] {
                        fill: #ff6600;
                    }

                    .cl-orange .path {
                        stroke: #ff6600;
                    }

                    .cl-green [data-key="main"] {
                        fill: #19bc9b;
                    }

                    .cl-green .path {
                        stroke: #19bc9b;
                    }

                    .cl-blue [data-key="main"] {
                        fill: #1aaee5;
                    }

                    .cl-blue .path {
                        stroke: #1aaee5;
                    }

                    .cl-dblue [data-key="main"] {
                        fill: #1D809F;
                    }

                    .cl-dblue .path {
                        stroke: #1D809F;
                    }

                    .cl-dgray [data-key="main"] {
                        fill: #495057;
                    }

                    .cl-dgray .path {
                        stroke: #495057;
                    }

                    .shtxt.cl-red [data-key="main"] {
                        fill: transparent;
                    }

                    .shtxt.cl-red text {
                        fill: #E74C3C;
                    }

                    .shtxt.cl-orange [data-key="main"] {
                        fill: transparent;
                    }

                    .shtxt.cl-orange text {
                        fill: #ff6600;
                    }

                    .shtxt.cl-green [data-key="main"] {
                        fill: transparent;
                    }

                    .shtxt.cl-green text {
                        fill: #19bc9b;
                    }

                    .shtxt.cl-blue [data-key="main"] {
                        fill: transparent;
                    }

                    .shtxt.cl-blue text {
                        fill: #1aaee5;
                    }

                    .shtxt.cl-dblue [data-key="main"] {
                        fill: transparent;
                    }

                    .shtxt.cl-dblue text {
                        fill: #1D809F;
                    }

                    .shtxt.cl-dgray [data-key="main"] {
                        fill: transparent;
                    }

                    .shtxt.cl-dgray text {
                        fill: #495057;
                    }

                    .shrhomb.cl-red [data-key="main"] {
                        stroke-width: 18px;
                        stroke: #E74C3C;
                    }

                    .shrhomb.cl-orange [data-key="main"] {
                        stroke-width: 18px;
                        stroke: #ff6600;
                    }

                    .shrhomb.cl-green [data-key="main"] {
                        stroke-width: 18px;
                        stroke: #19bc9b;
                    }

                    .shrhomb.cl-blue [data-key="main"] {
                        stroke-width: 18px;
                        stroke: #1aaee5;
                    }

                    .shrhomb.cl-dblue [data-key="main"] {
                        stroke-width: 18px;
                        stroke: #1D809F;
                    }

                    .shrhomb.cl-dgray [data-key="main"] {
                        stroke-width: 18px;
                        stroke: #495057;
                    }
                </style>
                <g id="canvas">

                </g>
            </svg>
        </div>

    </div>

</x-dynamic-component>
