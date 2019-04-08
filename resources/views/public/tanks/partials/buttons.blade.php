@auth
@can('wank', $tank)
{{--<!-- //action="/tanks/{{ $tank->id }}" --> --}}
<a href="/tanks/{{ $tank->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
<form id="formulario" data-accion="deletus" data-tank="{{ $tank->id }}" method="post" class="mr-2 float-right">
    @csrf
    @method('delete')
    <button type="submit" data-target="#modalError" data-target="#modalEliminar" class="btn btn-danger btn-sm">Delete Tank</button>
</form>
<div class="modal fade" id="modalEliminar" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                You are going to eliminate a tank. Are you sure?
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form id="formulario" data-accion="deletus" data-tank="{{ $tank->id }}" action="" method="post">
                    <button id="deletus" type="submit" data-dismiss="modal" aria-label="Close" class="btn btn-danger btn-sm">Yes</button>
                </form>
                <button type="submit" data-dismiss="modal" aria-label="Close" class="btn btn-primary btn-sm">
                    No
                </button>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="modalError" tabindex="-1" role="dialog" aria-labelledby="modalLabel" aria-hidden="true">
    <div class="modal-dialog bg-danger" role="document">
        <div class="modal-content">
            <div class="modal-header bg-danger">
                <h5 class="modal-title text-white" id="modalLabel">There is an error</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
        </div>
    </div>
</div>

@endcan
@endauth