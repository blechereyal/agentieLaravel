@extends('app')

@section('content')
<div class="col-md-12">
  <h4 class="page-head-line">Destinations</h4>
</div>
<div class="col-md-12">
    {!! Form::open(array('route' => 'destinations.index','method' => 'get'))  !!}
    <div class="input-group">
        <span class="input-group-btn">
         {!! Form::submit('Search!',array('class' => 'btn btn-primary')); !!}
        </span>
        {!! Form::text('q',null,array('class' => 'form-control')) !!}
    </div>
    {!! Form::token() !!}

    {!! Form::close() !!}
</div><br/>

@if ( !$destinations->count() )

  <div class="col-md-12">
    <div class="alert alert-warning">
      There are no Destinations available at this time
    </div>
  </div>

@else


  <div class="col-md-12">
    <!--    Hover Rows  -->
    <div class="panel panel-default">
      {{--<div class="panel-heading">--}}
        {{--Destinations--}}
      {{--</div>--}}

      <div class="panel-body">
        <div class="table-responsive">
          <table class="table table-hover">
            <thead>
              <tr>
                <th>Destination</th>
                <th>Description</th>
                <th></th>
              </tr>
            </thead>
            <tbody>
              @foreach( $destinations as $destination )
              <tr>
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


@endif


@endsection
