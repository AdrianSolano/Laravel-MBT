<h2> Mi perfil </h2>

<button id="idAlerta" type="submit" data-dismiss="modal" aria-label="Close" class="btn btn-primary">
    Alerta
</button>

<button type="button" class="btn btn-secondary"
        data-toggle="tooltip" title="Prueba de prueba"
        data-placement="right"
        data-template=@include('public.tanks.partials.toolTemplate')>Extreme Tool Tip
</button>

<button type="button" class="btn btn-secondary" data-container="body" data-toggle="popover" data-placement="right" data-content=@include('public.tanks.partials.toolTemplate')>
    Popover Derecha
</button>

@push('scripts')
    <script src="{{ mix('/js/misc/tool.js') }}" defer ></script>
@endpush