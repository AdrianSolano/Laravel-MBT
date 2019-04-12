@auth
@can('wank', $tank)
{{--<!-- //action="/tanks/{{ $tank->id }}" --> --}}
<a href="/tanks/{{ $tank->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
<!-- <form id="formulario" data-accion="deletus" data-tank="{{ $tank->id }}" method="post" class="mr-2 float-right"> -->
<button type="submit" data-accion="delete" data-tank="{{ $tank->id }}" class="btn btn-danger btn-sm mr-2 float-right">Delete Tank</button>
<!-- </form> -->
<!-- eliminar -->
@endcan
@endauth