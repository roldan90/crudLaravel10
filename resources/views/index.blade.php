@extends('../layouts/main')

@section('titulo', 'Crud con laravel 10')

@section('contenido')
    <div class="container">
        <div class="row">
            <div class="col">
                <h2>Crud de usuarios</h2>
                <a href="{{ route('users.create') }}" class="btn btn-primary">Agregar</a>
                <hr>
                <table class="table table-hover table-bordered">
                    <thead>
                        <tr>
                            <th>Usuario</th>
                            <th>Edit</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($items as $item)
                            <tr>
                                <td>{{ $item->name }}</td>
                                <td>
                                    <a href="{{ route('users.edit', $item->id ) }}" class="btn btn-warning">
                                        Edit
                                    </a>
                                </td>
                                <td>
                                    <a href="{{ route('users.show', $item->id ) }}" class="btn btn-danger">
                                        Delete
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection