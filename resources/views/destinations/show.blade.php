@extends('app')

@section('content')
<h2>Offers</h2>

@if ( !$offers->count() )
  You have no offers
@else
  <ul>
    @foreach( $offers as $offer )
      <li><a href="{{ route('destinations.offers.show', [$destination->slug, $offer->slug]) }}">{{ $offer->name }}</a></li>
    @endforeach
  </ul>
@endif

@endsection
