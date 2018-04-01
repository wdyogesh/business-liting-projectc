@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">{{$listing->name}} <a  href="/" class="pull-right btn-default btn btn-xs">Go Back</a></div>
                <div class="panel-body">
                    <ul class="list-group">
                    	<li class="list-group-item">Address :  {{$listing->address}}</li>
                    	<li class="list-group-item">website : {{$listing->website}}</li>
                    	<li class="list-group-item">Email: {{$listing->emamil}}</li>
                    	<li class="list-group-item">Phone: {{$listing->phone}}</li>
                    </ul>
                    <div class="well">{{$listing->bio}}</div>
                </div>
            </div>
        </div>
    </div>
@endsection