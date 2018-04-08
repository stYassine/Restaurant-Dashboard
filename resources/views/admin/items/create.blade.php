@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Create New Item</h4>
        <p class="category">Here You Can Create New Item</p>
    </div>
    <div class="card-content table-responsive">
        
        
        <form action="{{ route('items.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ old('name') }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                        <option value="">Choose</option>
                    @foreach($categories->all() as $category)
                        <option value="{{ $category->id }}">{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" value="{{ old('number') }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control">{{ old('description') }}</textarea>
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