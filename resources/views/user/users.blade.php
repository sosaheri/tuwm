@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Usuarios</li>
            </ol>
        </nav>
        <div class="row justify-content-center">
            <div class="col-lg-12">
                <div class="row">
                    <div class="col-lg-7">
                        <h4>Usuarios</h4>
                    </div>
                </div>
                <hr>
                    <table class="table">
                        <thead>
                            <tr>
                            <th scope="col">#</th>
                            <th scope="col">Nombre</th>
                            <th scope="col">Correo</th>
                            <th scope="col"></th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach($users as $user)

                            <tr>
                            <th scope="row"> {{ $user->id }} </th>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td> 

                                <a href="{{ route('user.show', $user->id ) }}" class="btn btn-outline-primary" role="button">Editar</a>

                                <form style="display: inline !important;" action="{{ route('user.delete', $user->id)}}" method="post">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-danger" type="submit">Eliminar</button>
                                </form>
                                
                            </td>
                            </tr>                            
                                
                            @endforeach

                            


                        </tbody>
                    </table>
                    
                    
            </div>
        </div>
    </div>
@endsection
