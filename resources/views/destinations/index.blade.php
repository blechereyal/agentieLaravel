@extends('app')

@section('content')
<div class="col-md-12">
  <h4 class="page-head-line">Destinations</h4>
</div>

@if ( !$destinations->count() )
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-warning">
      There are no Destinations available at this time
    </div>
  </div>
</div>
@else

<div class="row">
  <div class="col-md-12">
    <!--    Hover Rows  -->
    <div class="panel panel-default">
      <div class="panel-heading">
        Destinations
      </div>
      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>#</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Username</th>
              </tr>
            </thead>
            <tbody>
              @foreach( $destinations as $destination )
              <tr>
                <td>{{ $destination->id }}</td>
                <td><a href="{{ route('destinations.show', $destination->slug) }}">{{ $destination->name }}</a></td>
                <td>{!! $destination->description !!}</td>
                <td><img src="{{asset('/uploads/destinations/detail/' . $destination->image)}}"></td>
              </tr>
              @endforeach
            </tbody>
          </table>
            {!! $destinations->render() !!}
        </div>
      </div>
    </div>
    <!-- End  Hover Rows  -->
  </div>
</div>

@endif


@endsection
