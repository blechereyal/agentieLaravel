@extends('app')

@section('content')
    <h2>
        {!! link_to_route('destinations.show', $destination->name, [$destination->slug]) !!} -
        {{ $offer->name }}
    </h2>

    {{ $offer->description }}
@endsection
