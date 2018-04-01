@extends('layouts.app')

@section('content')
    <div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">Dashboard <span class="pull-right"><a href="/listing/create" class="btn btn-success btn-xs" >Add New</a></span></div>
                <div class="panel-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                    <h3>Your Listings</h3>
                        <table class="table table-hover">
                        	<thead>
                        		<tr>
                        			<th>Company Name</th>
                        			<th>Email</th>
                        			<th>Contact</th>
                        		</tr>
                        	</thead>
                        	<tbody>
                               @forelse ($listings as $listing)
                                   <tr>
                                       <td>{{$listing->name}}</td>
                                       <td>{{$listing->emamil}}</td>
                                       <td>{{$listing->phone}}</td>
                                       <td><a class="btn btn-default btn-xs" href="/listing/{{$listing->id}}/edit">Edit</a></td>
                                       <td>
                                           {!! Form::open(['action' => ['ListingController@update',$listing->id], 'method' => 'post','class'=>'pull-right', 'onsubmit'=>'return confirm("Are you sure want to delete !!")']) !!}
                                           {{Form::bsHidden('_method','DELETE')}}
                                           {{Form::bsSubmit('delete','Delete',['class'=>'btn btn-danger btn-xs'])}}
                                           {!! Form::close() !!}
                                   </tr>
                               @empty
                               @endforelse
                            </tbody>
                        </table>
                </div>
            </div>
        </div>
    </div>
@endsection
