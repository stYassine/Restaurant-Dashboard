@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Create New Slider</h4>
        <p class="category">Here You Can Create New Slider</p>
    </div>
    <div class="card-content table-responsive">
        
        
        <form action="{{ route('sliders.store') }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{ old('title') }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Sub Title</label>
                <input type="text" name="sub_title" value="{{ old('sub_title') }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
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