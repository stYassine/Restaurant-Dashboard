@extends('admin.dashboard')


@push('css')
@endpush


@section('content')

@include('admin.includes.errors')


<div class="card">
    <div class="card-header" data-background-color="purple">
        <h4 class="title">Contacts List</h4>
        <p class="category">Here is a subtitle for this table</p>
    </div>
    <div class="card-content table-responsive">
        <table class="table">
            <thead class="text-primary">
                <th>Id</th>
                <th>Name</th>
                <th>Email</th>
                <th>Subject</th>
                <th>Message</th>
                <th>Remove</th>
            </thead>
            <tbody>
                @if(count($contacts) > 0)
                   @foreach($contacts->all() as $contact)
                    <tr>
                        <td>{{ $contact->id }}</td>
                        <td>{{ $contact->name }}</td>
                        <td>{{ $contact->subject }}</td>
                        <td>{{ $contact->email }}</td>
                        <td>{{ $contact->message }}</td>
                        <td>
                            <form action="{{ route('contacts.destroy', ['id' => $contact->id]) }}" method="post">
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