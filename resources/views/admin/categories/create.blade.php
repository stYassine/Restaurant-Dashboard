@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Create New Category</h4>
        <p class="category">Here You Can Create New Category</p>
    </div>
    <div class="card-content table-responsive">
        
        <form action="{{ route('categories.store') }}" method="post">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-success">Create</button>
            </div>
            
        </form>
        
    </div>
</div>




@endsection


@push('javascript')
@endpush