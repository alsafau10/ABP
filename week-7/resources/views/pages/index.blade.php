@extends('layouts.app')

@section('content')
    <div class="container">
        <h3 align="center" class="mt-5">Pokemons Management</h3>
        <div class="row">
            <div class="col-md-2">
            </div>
            <div class="col-md-8">
            <div class="shadow-lg card bg-warning" style="--bs-bg-opacity: .4;">
                <h3 class="card-title text-white text-center">Input Pokemon</h3>
                <form method="POST" action="{{ route('pokemons.store') }}">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <label>Pokemon Name</label>
                            <input type="text" class="form-control" name="name">
                        </div>
                        <div class="col-md-6">
                            <label>Pokemon Element</label>
                            <input type="text" class="form-control" name="element">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12">
                            <label>Attack Power</label>
                            <input type="text" class="form-control" name="attPower">
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-12 mt-3">
                            <input type="submit" class="btn btn-info" value="Register">
                        </div>
                    </div>
                </form>
            </div>
                <table class="table mt-5">
                    <thead>
                      <tr>
                        <th scope="col">#</th>
                        <th scope="col">Pokemon Name</th>
                        <th scope="col">Element</th>
                        <th scope="col">Attack Power</th>
                        <th scope="col">Action</th>
                      </tr>
                    </thead>
                    <tbody>
                        @foreach ( $pokemons as $key => $pokemon )
                        <tr>
                            <td scope="col">{{ ++$key }}</td>
                            <td scope="col">{{ $pokemon->name }}</td>
                            <td scope="col">{{ $pokemon->element }}</td>
                            <td scope="col">{{ $pokemon->attPower }}</td>
                            <td scope="col">
                            <a href="{{  route('pokemons.edit', $pokemon->id) }}">
                            <button class="btn btn-primary btn-sm">
                            <i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit
                            </button>
                            </a>
                            
                            <form action="{{ route('pokemons.destroy', $pokemon->id) }}" method="POST" style ="display:inline">
                             @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Delete</button>
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
@push('css')
    <style>
        .bi-trash-fill{
            color:red;
            font-size: 18px;
        }
        .bi-pencil{
            color:green;
            font-size: 18px;
            margin-left: 20px;
        }
        tr:nth-child(even){
            background-color: gray;
            color: white;
        }
    </style>
@endpush