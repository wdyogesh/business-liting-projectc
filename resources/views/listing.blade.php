@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Latest Business Listings </div>
                <div class="panel-body">
                    <h3>Listings</h3>
                    @forelse ($listings as $listing)
                        <ul class="list-group">
                        	<li class="list-group-item"><a href="/listing/{{$listing->id}}">{{$listing->name}}</a></li>
                        </ul>
                    @empty
                        <p>NO listing Found here...</p>
                    @endforelse
                </div>
            </div>
        </div>
    </div>
@endsection