@extends('app')

@section('content')
    <div class="panel panel-default">
        <div class="panel-heading">
            <h3 class="panel-title">{!! link_to_route('destinations.show', $destination->name, [$destination->slug]) !!} - {{ $offer->name }}</h3>
        </div>
        <div class="panel-body">
            <div class="col-lg-12">

                <img src="{{asset('/uploads/offers/resize/' . $offer->image)}}"
                                           height="200" style="float:left;display:inline;margin-right:1em;">{{
                                           $offer->description }}



            </div>
        </div>
        <ul class="list-group">
            <li class="list-group-item">Only <strong class="text-info"><i class="fa fa-euro"></i>
                    {{$offer->price}}</strong></li>
            <li class="list-group-item">Places Remaining <strong class="text-info"><i class="fa fa-user"></i> {{
            $offer->places
            }}</strong></li>
            <li class="list-group-item">Expires in: <strong class="text-info"><i class="fa fa-clock-o"></i> {{ \Carbon\Carbon::parse($offer->expires_at)->diffForHumans()  }}</strong></li>
            <li class="list-group-item">Period: <strong class="text-info"><i class="fa fa-calendar"></i> {{
            \Carbon\Carbon::parse($offer->expires_at)->format('d/m/Y')  }} - {{ \Carbon\Carbon::parse($offer->ends_at)->format('d/m/Y')  }}</strong></li>
            <li class="list-group-item">
                @if (Auth::user())
                    {!! link_to_route('destinations.offers.subscriptions.create', "Reserve Now!!", [$destination->slug, $offer->slug], array('class' => 'btn btn-danger')) !!}
                @endif
                {!! link_to_route('contact', "Contact Us!!", null , array('class' => 'btn btn-default')) !!}
            </li>
        </ul>
    </div>


@endsection
