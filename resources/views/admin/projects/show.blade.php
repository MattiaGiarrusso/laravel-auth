@extends('layouts.admin')

@section('content')

<section>
    <div class="bg-body-secondary rounded d-flex align-items-center">
        <div class="px-2">
            <h3 class="text-uppercase">{{ $project->name }}</h3>
        </div>
    </div>
    <div class="bg-body-secondary rounded p-2 mt-4">
        <div class="mt-1">
            <h5>Slug: {{ $project->slug }}</h5>
        </div>
        <div class="mt-1">
            <h5>Cliente: {{ $project->client_name }}</h5>
        </div>
    </div>

    <div class="bg-body-secondary rounded p-2 mt-4">
        <div>
            <h6>Riepilogo</h6>
        </div>
        <div>
            {{ $project->summary }}
        </div>     
    </div>

</section>
    
@endsection