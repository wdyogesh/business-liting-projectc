@extends('layouts.app')
@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Create Listing <a  href="/dashboard" class="pull-right btn-default btn btn-xs">Go Back</a> </div>
                <div class="panel-body">
                    <h3>Create Listing</h3>
                    {!! Form::open(['action' => 'ListingController@store', 'method' => 'post']) !!}
                        {{Form::bsText('name','',['placeholder'=>'Enter Company Name'])}}
                        {{Form::bsText('address','',['placeholder'=>'Enter Address'])}}
                        {{Form::bsText('website','',['placeholder'=>'Enter Website Name'])}}
                        {{Form::bsText('emamil','',['placeholder'=>'Enter Email Name'])}}
                        {{Form::bsText('phone','',['placeholder'=>'Enter Phone Number'])}}
                        {{Form::bsTextArea('bio','',['placeholder'=>'Enter Bio Details'])}}
                        {{Form::bsSubmit('Submit')}}
                    {!! Form::close() !!}
                </div>
            </div>
        </div>
    </div>
@endsection