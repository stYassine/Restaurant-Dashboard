@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')



name






<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Reservations List</h4>
        <p class="category">Here is a list of reservations</p>
    </div>
    <div class="card-content table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>Id</th>
                <th>status</th>
                <th>Name</th>
                <th>email</th>
                <th>phone</th>
                <th>date_and_time</th>
                <th>message</th>
                <th>Remove</th>
            </thead>
            <tbody>
                @if(count($reservations) > 0)
                   @foreach($reservations->all() as $reservation)
                    <tr>
                        <td>{{ $reservation->id }}</td>
                        <td>{{ $reservation->status }}</td>
                        <td>{{ $reservation->name }}</td>
                        <td>{{ $reservation->email }}</td>
                        <td>{{ $reservation->phone }}</td>
                        <td>{{ $reservation->date_and_time }}</td>
                        <td>{{ $reservation->message }}</td>
                        <td>
                            <form action="{{ route('reservation.destroy', ['id' => $reservation->id]) }}" method="post">
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