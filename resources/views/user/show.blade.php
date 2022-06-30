@extends('layouts.app')

@section('content')
    <div class="container" style="margin-top: 80px">
        <nav aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{ url('/shop') }}">Tienda</a></li>
                <li class="breadcrumb-item active" aria-current="page">Editar Usuario</li>
            </ol>
        </nav>
        @if(session()->has('success_msg'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                {{ session()->get('success_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(session()->has('alert_msg'))
            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                {{ session()->get('alert_msg') }}
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">×</span>
                </button>
            </div>
        @endif
        @if(count($errors) > 0)
            @foreach($errors0>all() as $error)
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ $error }}
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
            @endforeach
        @endif
        <div class="row justify-content-center">
            <div class="col-lg-7">
                <br>

                     <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form  method="post" action="{{ route('user.update') }}" accept-charset="UTF-8">
                        @csrf
                        
                        <input type="hidden" name="id"  value="{{ $user->id }}" >

                    <div class="form-group">
                        <label for="exampleFormControlInput1">Nombre</label>
                        <input id="nombre" name="nombre" class="form-control" value="{{ $user->name }}">
                    </div>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Precio</label>
                        <input id="email" name="email" class="form-control"  value="{{$user->email }}">
                    </div>
                           <button type="submit" class="btn btn-primary">Actualizar</button>
              
                   
                    </form>
                </div>


            </div>
           
        </div>
        <br><br>
    </div>



@endsection
