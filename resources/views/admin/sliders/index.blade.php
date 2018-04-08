@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Sliders List</h4>
        <p class="category">Here is Sliders List</p>
    </div>
    <div class="card-content table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>Id</th>
                <th>Title</th>
                <th>Sub Title</th>
                <th>Image</th>
                <th>Created At</th>
                <th>Edit</th>
                <th>Remove</th>
            </thead>
            <tbody>
                @if(count($sliders) > 0)
                   @foreach($sliders as $key => $slider)
                    <tr>
                        <td>{{ $slider->id }}</td>
                        <td>{{ $slider->title }}</td>
                        <td>{{ $slider->sub_title }}</td>
                        <td><img src="{{ asset($slider->image) }}" alt="" style="width:70px !important;"></td>
                        <td>{{ $slider->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('sliders.edit', ['id' => $slider->id]) }}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="{{ route('sliders.destroy', ['id' => $slider->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ method_field('DELETE') }}
                                <button type="submit" class="btn btn-danger">Remove</button>
                            </form>
                        </td>
                    </tr>
                    @endforeach
                @endif
            </tbody>
        </table>
    </div>
</div>




@endsection


@push('javascript')
@endpush