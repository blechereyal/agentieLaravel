@extends('app')

@section('content')
<div class="col-md-12">
  <h4 class="page-head-line">Offers for {{$destination->name}}</h4>
</div>

<div class="row">
    <div class="col-md-12">{!! $offers->render() !!}</div>
</div>
@if ( !$offers->count() )
<div class="row">
  <div class="col-md-12">
    <div class="alert alert-warning">
      There are no Offers for {{$destination->name}} available at this time
    </div>
  </div>
</div>
@else
@foreach (array_chunk($offers->all(), 4) as $offersRow)
<div class="row">
  @foreach ($offersRow as $offer)
  <div class="col-md-3 col-sm-3 col-xs-6">
    <div class="panel panel-primary">
        <div class="panel-heading">
            {{$offer->name}}
        </div>
        <div class="panel-body">
            <p>{!! $offer->description !!}</p>
            <div class="help-block text-danger">
                Expires in {{\Carbon\Carbon::parse($offer->expires_at)->diffForHumans()}}
            </div>

            {!! link_to_route('destinations.offers.subscriptions.create', "Reserve Now!!", [$destination->slug, $offer->slug], array('class' => 'btn btn-danger')) !!}
            {!! link_to_route('destinations.offers.show', "See Details!", [$destination->slug, $offer->slug], array('class' => 'btn btn-default')) !!}

        </div>
        <div class="panel-footer">
          Places Remaining: {{ $offer->places }}
        </div>
    </div>
  </div>
  @endforeach
</div>
@endforeach
@endif



@endsection
