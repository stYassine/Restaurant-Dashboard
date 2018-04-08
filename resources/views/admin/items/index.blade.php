@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Items List</h4>
        <p class="category">Here is Items List</p>
    </div>
    <div class="card-content table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Image</th>
                <th>Price</th>
                <th>Created At</th>
                <th>Edit</th>
                <th>Remove</th>
            </thead>
            <tbody>
                @if(count($items) > 0)
                   @foreach($items as $key => $category)
                    <tr>
                        <td>{{ $item->id }}</td>
                        <td>{{ $item->name }}</td>
                        <td>{{ $item->image }}</td>
                        <td>{{ $item->price }}</td>
                        <td>{{ $item->created_at->diffForHumans() }}</td>
                        <td><a href="{{ route('items.edit', ['id' => $item->id]) }}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="{{ route('items.destroy', ['id' => $item->id]) }}" method="post">
                                {{ csrf_field() }}
                                {{ mthod_field('DELETE') }}
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