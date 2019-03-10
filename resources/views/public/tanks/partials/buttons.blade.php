@auth
@can('wank', $tank)
<a href="/tanks/{{ $tank->id }}/edit" class="btn btn-warning btn-sm mr-2 float-right">Edit</a>
<form action="/tanks/{{ $tank->id }}" method="post" class="mr-2 float-right">
    @csrf
    @method('delete')
    <button type="submit" class="btn btn-danger btn-sm">Delete Tank</button>
</form>
@endcan
@endauth
