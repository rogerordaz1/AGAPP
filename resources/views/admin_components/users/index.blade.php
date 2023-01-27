@extends('panel_admin')

@section('contenido')

<h1>Listado de Usuarios</h1>

<a href="/users/create" type="button" class="btn btn-success">Crear Usuario</a>

<table class="table mt-3">
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

            <td>{{ $user->id}}</td>
            <td>{{ $user->name}}</td>
            <td>{{ $user->email}}</td>
            <td>{{ $user->role_id}}</td>
            <td>
              
              <form action="{{ route('users.destroy' , $user->id) }}" method="post">
                @csrf
                @method('DELETE')
                
                
                  <a href="/users/{{$user->id}}/edit"  type="button" class="btn btn-primary">Editar</a>
                  <button type="submit" class="btn btn-danger">Eliminar</button>
                </form>
                
            </td>
        </tr>
            
        @endforeach
     
    </tbody>
  </table>
@endsection