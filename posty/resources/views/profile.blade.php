@extends('layouts.app')

@section('content')
    <div class="d-flex justify-content-center my-5">
        <div class="p-5 bg-white rounded">
            {{auth()->user()->name}}
        </div>
    </div>
@endsection