@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')

<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Simple Table</h4>
        <p class="category">Here is a subtitle for this table</p>
    </div>
    <div class="card-content table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Edit</th>
                <th>Remove</th>
            </thead>
            <tbody>
                @if(count($categories) > 0)
                   @foreach($categories as $key => $category)
                    <tr>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->name }}</td>
                        <td><a href="{{ route('categories.edit', ['id' => $category->id]) }}" class="btn btn-info">Edit</a></td>
                        <td>
                            <form action="{{ route('categories.destroy', ['id' => $category->id]) }}" method="post">
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