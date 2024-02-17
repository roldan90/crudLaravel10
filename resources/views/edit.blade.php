@extends('../layouts/main')

@section('titulo', 'Editar usuario')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col mt-3">
            <h3>Actualizar usuario</h3>
            <form action="{{ route('users.update', $item->id) }}" method="POST">
                @csrf
                @method('PUT')
                <label for="name">Usuario</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $item->name }}">
                <button class="btn btn-warning mt-3">Actualizar</button>
            </form>
        </div>
    </div>
</div>
@endsection