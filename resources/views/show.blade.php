@extends('../layouts/main')

@section('titulo', 'Eliminar usuario')

@section('contenido')
<div class="container">
    <div class="row">
        <div class="col">
            <h3>Eliminar usuario</h3>
            
            <table class="table table-hover table-bordered">
                <thead>
                    <tr>
                        <th>Usuario</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>{{ $item->name }}</td>
                    </tr>
                </tbody>
            </table>
            <hr>
            <form action="{{ route('users.destroy', $item->id) }}" method="POST">
                @csrf
                @method('DELETE')
                <button class="btn btn-danger">Eliminar</button>
            </form>
        </div>
    </div>
</div>
@endsection