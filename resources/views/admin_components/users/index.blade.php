@extends('panel_admin')

@section('contenido')
    <h1>Listado de Usuarios</h1>

    <a href="/users/create" type="button" class="btn btn-success mb-3">Crear Usuario</a>

    <table id="users" class="table pt-3">
        <thead>
            <tr>
                <th scope="col">id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Email</th>
                <th scope="col">Rol Id</th>
                <th scope="col">Utilidad</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($users as $user)
                <tr>

                    <td>{{ $user->id }}</td>
                    <td>{{ $user->name }}</td>
                    <td>{{ $user->email }}</td>
                    <td>{{ $user->role_id }}</td>
                    <td>

                        <form action="{{ route('users.destroy', $user->id) }}" method="post">
                            @csrf
                            @method('DELETE')


                            <a href="/users/{{ $user->id }}/edit" type="button" class="btn btn-primary">Editar</a>

                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-danger" data-toggle="modal"
                                data-target="#modal1{{ $user->id }}">
                                Eliminar
                            </button>

                            <!-- Modal -->
                            <div class="modal fade" id="modal1{{ $user->id }}" tabindex="-1" role="dialog"
                                aria-labelledby="modalLabel" aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="modalLabel">Borrar Usuario</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            Estas seguro que desea borrar el usuario: {{ $user->name }}
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-dismiss="modal">Cancelar</button>
                                            <button type="submit" class="btn btn-primary">Confirmar</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </form>

                    </td>
                </tr>
            @endforeach

        </tbody>
    </table>
@endsection

@section('css')
    
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap4.min.css">
@endsection

@section('js')
    <script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap4.min.js"></script>


    <script>
      $(document).ready(function () {
    $('#users').DataTable();
});
    </script>
@endsection
