@extends('layouts.app')
@section('content')
    <style>
        body{
            background-color: #fff;
        }
        .hero{
            display: none;
        }
    </style>

    <div class="container" style="margin-top: 9rem;">
        <div class="row">
            <div class="col-md-offset-3 col-md-6 register_col">
                <div class="panel panel-default" >
                    <div class="panel-heading">
                        <h3 class="panel-title">Forget Password </h3>
                    </div>
                    <div class="panel-body">
                        <form action="{{ url('retrive-password') }}" method="post" role="form">
                            {{ csrf_field() }}
                            @if(count($errors))
                                <div class="form-group">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{$error}}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            @if(session()->has('message'))
                                <div class="row">
                                    <div class="alert alert-danger">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                                        <strong>Message:</strong>{{session()->get('message')}}
                                    </div>
                                </div>
                            @endif


                            <div class="row">
                                <div class="col-xs-12 col-sm-12 col-md-12">
                                    <div class="form-group">
                                        <input type="email" name="email" id="email" class="form-control input-sm" placeholder="enter email" required>
                                    </div>
                                </div>
                            </div>

                            <input type="submit" value="Reset Password" class="btn btn-success btn-block" style="margin-bottom: 20px;">

                        </form>
                    </div>
                </div>


            </div>
        </div>
    </div>

@endsection