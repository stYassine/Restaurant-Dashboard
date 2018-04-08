@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Edit Slider</h4>
        <p class="category">Here You Can Edit Slider</p>
    </div>
    <div class="card-content table-responsive">
        
        
        <form action="{{ route('sliders.update', ['id' => $slider->id]) }}" method="post" enctype="multipart/form-data">
            {{ csrf_field() }}
            {{ method_field('POST') }}
            
            <div class="form-group">
                <label for="">Title</label>
                <input type="text" name="title" value="{{ $slider->title }}" class="form-control">
            </div>
            
            <div class="form-group">
                <label for="">Sub Title</label>
                <input type="text" name="sub_title" value="{{ $slider->sub_title }}" class="form-control">
            </div>
            
            
            <div class="form-group">
                <img src="{{ asset($slider->image) }}" alt="">
            </div>
            <div class="form-group">
                <label for="">Image</label>
                <input type="file" name="image" class="form-control">
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