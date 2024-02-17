@extends('../layouts/main')

@section('titulo', 'Agregar nuevo usuario')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col mt-3">
                <h3>Agregar usuario</h3>
                <form action="{{ route('users.store') }}" method="POST">
                    @csrf
                    <label for="name">Usuario</label>
                    <input type="text" class="form-control" id="name" name="name">
                    <button class="btn btn-primary mt-3">Guardar</button>
                </form>
            </div>
        </div>
    </div>
@endsection