@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                        {{-- <input type="button" value="Add" name="addbtn"> --}}
                        <a href="{{ url('/form') }}" class="btn btn-xs btn-info pull-right">Edit</a>
                        {{ $emp_id }}
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
