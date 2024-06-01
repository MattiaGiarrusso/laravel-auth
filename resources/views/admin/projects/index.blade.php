@extends('layouts.admin')

@section('content')
    <h1>Lista Progetti</h1>

    <table class="table table-striped">
        <thead>
          <tr>
            <th scope="col">ID</th>
            <th scope="col">Nome</th>
            <th scope="col">Cliente</th>
            <th scope="col">Slug</th>
            <th scope="col">Data creazione</th>
            <th scope="col">Ultimo aggiornamento</th>
          </tr>
        </thead>
        <tbody>
          @foreach($projects as $project)
          <tr>
            <td>{{ $project->id }}</td>
            <td>{{ $project->name }}</td>
            <td>{{ $project->client_name }}</td>
            <td>{{ $project->slug }}</td>
            <td>{{ $project->created_at }}</td>
            <td>{{ $project->update_at }}</td>
          </tr>              
          @endforeach  
        </tbody>
      </table>
@endsection