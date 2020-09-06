@extends('layouts.admin-master')
@section('content')
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="card">
                        <div class="card-header">
                            <strong>Normal</strong> Form
                        </div>
                        <div class="card-body card-block">
                            <form action="{{route('user.update',$user->id)}}" method="post">
                                <div class="form-group">
                                    <label for="nf-name" class=" form-control-label">Kullanıcı Adı</label>
                                    <input type="name" id="nf-name" name="name" value="{{$user->name}}" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label for="nf-email" class=" form-control-label">Email</label>
                                    <input type="email" id="nf-email" name="email" value="{{$user->email}}" class="form-control">
                                </div>
                                @csrf
                            </form>
                        </div>
                        <div class="card-footer">
                            <button type="submit" class="btn btn-primary btn-sm">
                                <i class="fa fa-dot-circle-o"></i> Submit
                            </button>
                            <button type="reset" class="btn btn-danger btn-sm">
                                <i class="fa fa-ban"></i> Reset
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

