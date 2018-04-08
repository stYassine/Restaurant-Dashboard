@if(count($errors) > 0)
    <div class="alert alert-danger">
        <strong>Whoops Something Went Wrong</strong>
        <ul>
            @foreach($errors as $key => $error)
                <li>{{ $key.''.$error }}</li>
            @endforeach
        </ul>
    </div>
@endif


<!-- Sessions -->


<!-- Categories -->
@if(Session::has('category_created'))
    <div class="alert alert-success">{{ Session::get('category_created') }}</div>
@endif
@if(Session::has('category_updated'))
    <div class="alert alert-warning">{{ Session::get('category_updated') }}</div>
@endif
@if(Session::has('category_deleted'))
    <div class="alert alert-danger">{{ Session::get('category_deleted') }}</div>
@endif


<!-- Items -->
@if(Session::has('item_created'))
    <div class="alert alert-success">{{ Session::get('item_created') }}</div>
@endif
@if(Session::has('item_updated'))
    <div class="alert alert-warning">{{ Session::get('item_updated') }}</div>
@endif
@if(Session::has('item_deleted'))
    <div class="alert alert-danger">{{ Session::get('item_deleted') }}</div>
@endif


<!-- Reservations -->
@if(Session::has('reservation_created'))
    <div class="alert alert-success">{{ Session::get('reservation_created') }}</div>
@endif
@if(Session::has('reservation_updated'))
    <div class="alert alert-warning">{{ Session::get('reservation_updated') }}</div>
@endif
@if(Session::has('reservation_deleted'))
    <div class="alert alert-danger">{{ Session::get('reservation_deleted') }}</div>
@endif




<!-- Sliders -->
@if(Session::has('slider_created'))
    <div class="alert alert-success">{{ Session::get('slider_created') }}</div>
@endif
@if(Session::has('slider_updated'))
    <div class="alert alert-warning">{{ Session::get('slider_updated') }}</div>
@endif
@if(Session::has('slider_deleted'))
    <div class="alert alert-danger">{{ Session::get('slider_deleted') }}</div>
@endif