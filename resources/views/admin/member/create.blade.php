@extends('admin')
@section('title') Add New Member - {{ $common['appShort'] }} @stop

@section("content")
    <section class="content-header">
        <h1><i class="fa fa-plus"></i> Add New Member</h1>
        <ol class="breadcrumb">
            <li><a href="{{ url('/admin') }}"><i class="fa fa-user"></i> Admin</a></li>
            <li class="">
                <a href="{{ url('/admin/member/list') }}">Member</a>
            </li>
            <li class="active">
                Add New
            </li>
        </ol>
    </section>

    <section id="createBook" class="content book-form">
        <div class="row">
            <div class="col-lg-8 col-md-12 col-sm-12">
                <div class="box">
                    <div class="box-header with-border">
                    <h3 class="box-title">Member Details</h3>
                    </div>
                    <form method="post" action="{{ url('/').'/admin/member' }}" enctype="multipart/form-data">
                    <input type="hidden" name="_token" value="{{ csrf_token() }}">

                        <div class="box-body">
                            @if (count($errors) > 0)
                                <div class="">
                                    <div class="alert alert-danger">
                                        <ul>
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                            @endif
                            <div class="row">
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="form-group">
                                        <label for="mFirstName">First Name</label>
                                        <input type="text" class="form-control input-lg" id="mFirstName" placeholder="First Name"
                                               name="firstName" value="{{ old('firstName') }}" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-5 col-sm-12">
                                    <div class="form-group">
                                        <label for="mLastName">Last Name</label>
                                        <input type="text" class="form-control input-lg" id="mLastName" placeholder="Last Name"
                                               name="lastName" value="{{ old('lastName') }}" maxlength="50" required>
                                    </div>
                                </div>
                                <div class="col-lg-2 col-md-2 col-sm-12">
                                    <div class="form-group">
                                        <label for="">Type</label>
                                        <select required class="form-control input-lg" name="type">
                                            <option>Member</option>
                                            <option>Admin</option>
                                        </select>
                                    </div>
                                </div>

                            </div>
                            <div class="row">
                                <div class="col-lg-3 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label for="mGender">Gender</label>
                                        <select required class="form-control input-lg" name="gender" id="mGender">
                                            <option>Male</option>
                                            <option>Female</option>
                                            <option>Other</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label id="" for="mDOB">Date of Birth</label>
                                        <div class="input-group">
                                            <input type="text" class="form-control input-lg date-picker" id="mDOB"
                                                   placeholder="Date of Birth" maxlength="30" name="dateOfBirth"
                                                   value="{{ old('dateOfBirth') }}" required>
                                            <span class="input-group-addon"><i class="glyphicon glyphicon-th"></i></span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-8 col-md-6 col-sm-12">
                                    <div class="form-group">
                                    <label for="mTitle">Profile Title</label>
                                    <input type="text" class="form-control input-lg" id="mTitle" placeholder="Profile Title" maxlength="100"
                                           autocomplete="off" name="profileTitle" value="{{ old('profileTitle') }}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label id="" for="mEmail">Email</label>
                                        <input type="email" class="form-control input-lg" id="mEmail"
                                               placeholder="Email" maxlength="50" name="email" required >
                                    </div>
                                </div>
                                <div class="col-lg-6 col-md-6 col-sm-12">
                                    <div class="form-group">
                                        <label id="" for="">Password</label>
                                        <p class="form-control input-lg">
                                            <span class="text-warning"><i class="fa fa-warning"></i> Email Address will be used as initial password.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <div class="box-footer">
                            <p class="text-right">
                                <button class="btn btn-primary btn-flat" type="submit">Save</button>
                            </p>
                        </div>
                    </form>
                </div>
            </div>

        </div>
    </section>
@stop