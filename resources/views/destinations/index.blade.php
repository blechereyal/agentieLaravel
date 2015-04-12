@extends('app')
 
@section('content')
    <h2>Destinations</h2>
 
    @if ( !$destinations->count() )
        You have no Destinations
    @else
        <ul>
            @foreach( $destinations as $destination )
                <li><a href="{{ route('destinations.show', $destination->slug) }}">{{ $destination->name }}</a></li>
            @endforeach
        </ul>
    @endif
@endsection