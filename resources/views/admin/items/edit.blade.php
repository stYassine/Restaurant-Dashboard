@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Edit Item</h4>
        <p class="category">Here You Can Edit Item</p>
    </div>
    <div class="card-content table-responsive">
        
        
        <form action="{{ route('items.update', ['id' => $item->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            
            <div class="form-group">
                <label for="">Name</label>
                <input type="text" name="name" value="{{ $item->name }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Category</label>
                <select name="category_id" class="form-control">
                        <option value="">Choose</option>
                    @foreach($categories->all() as $category)
                        <option value="{{ $category->id }}" {{ $item->category_id == $category->id ? 'selected' : '' }}>{{ $category->name }}</option>
                    @endforeach
                </select>
            </div>
            
            <div class="form-group">
                <label for="">Price</label>
                <input type="number" name="price" value="{{ $item->price }}" class="form-control">
            </div>
            
            
            <div class="form-group">
                <img src="{{ asset($item->image) }}" alt="">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Description</label>
                <textarea name="description" class="form-control">{{ $item->description }}</textarea>
            </div>
            
            <div class="form-group">
                <button type="submit" class="btn btn-info">Update</button>
            </div>
            
        </form>
        
    </div>
</div>




@endsection


@push('javascript')
@endpush