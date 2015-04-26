@extends('app')

@section('content')
  <div class="col-md-12">
    <h4 class="page-head-line">Reservation for {{ $offer->name}} in {{ $destination->name }}</h4>
  </div>
  <div class="col-md-12">
  @if ($errors->any())
    <div class="alert alert-danger" role="alert">
      @foreach ($errors->all() as $error)
        <i class="fa fa-times"></i> {{ $error }} 
      @endforeach
    </div>
  @endif
  {!! Form::open(array('route' => array('destinations.offers.subscriptions.store', $destination->slug, $offer->slug)))  !!}
    <div class="form-group">
      {!! Form::label('name','Full name') !!}
      {!! Form::text('name',null,array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('email','E-mail Address') !!}
      {!! Form::email('email',null,array('class' => 'form-control')) !!}
    </div>
    <div class="form-group">
      {!! Form::label('people','People') !!}
      {!! Form::selectRange('people', 0, $offer->places ,null,array('class' => 'form-control')) !!}
      <span class="help-block">We need to know how many places you want</span>
    </div>
    <div class="form-group">
      {!! Form::label('phone','Phone number') !!}
      {!! Form::text('phone',null,array('class' => 'form-control')) !!}
    </div>
    {!! Form::submit('Reserve!',array('class' => 'btn btn-primary')); !!}
  {!! Form::close() !!}
  </div>
@endsection
