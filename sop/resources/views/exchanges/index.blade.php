@extends('layouts.app')

@section('content')
    <div class="row mb-2">
        <div class="col-md-6">
            <h3>Control Exchange Program</h3>
        </div>
        <div class="col-md-6 text-end">
           <a href='{{ url("/exchanges/create") }}' class="btn btn-primary">Add Exchange Program Detail</a>
        </div>
    </div>
    
    @if (count($exchanges) > 0)
        @foreach ($exchanges as $exchange)
            <a href='{{ url("/exchanges/$exchange->id") }}'>
                <div class="card p-3 mb-2">
                   <p>Brand: {{ $exchange->brand }}</p>
                   <p>Model: {{ $exchange->model }}</p>
                  <p>Serial Number: {{ $exchange->serial_no }}</p>
                   <small>Created at: {{ $exchange->created_at }}</small>
                </div>
            </a>
        @endforeach
        {{ $exchanges->links() }}
    @else
        <p>No exchanges found.</p>
    @endif
@endsection
