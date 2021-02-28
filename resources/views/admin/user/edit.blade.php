@extends('layouts.master')

@section('content')
    <div class="container">
        <div class="row">

            <div class="col-md-9">
                <div class="panel panel-default">
                    <div class="card">
                        <div class="card-header"> <div class="alert alert-primary">Edit user {{ $user->name }}</div> </div>
                            <div class="card-body">
                                <div class="panel-body">
                                    <a href="{{ url('/admin/user') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                                    <br />
                                    <br />
            
                                    @if ($errors->any())
                                        <ul class="alert alert-danger">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    @endif
            
                                    {!! Form::model($user, [
                                        'method' => 'PATCH',
                                        'url' => ['/admin/user', $user->id],
                                        'class' => 'form-horizontal',
                                        'files' => true
                                    ]) !!}
            
                                    @include ('admin.user.form', ['submitButtonText' => 'Update'])
            
                                    {!! Form::close() !!}
            
                                </div>
                           
                        </div>
                    </div>
                   
                    
                </div>
            </div>
        </div>
    </div>
@endsection


