@extends('admin.layouts.template-login')
@section('admin.content')

<section class="body-sign body-locked">

<style>


</style>

            <div class="center-sign">
                <div id="showalert"></div>
                <!--
                <a href="#" class="logo pull-left" >
                    <img src="assets/images/logo.png" height="100" alt="Porto Admin" />
                </a> -->

                <div class="panel panel-sign">


                    <div class="panel-body">


                        <div class="current-user text-center" style="margin-top: -5px;">
                            <img id="LockUserPicture" src="{{asset('./assets/image/head_10022560.png')}}" height="80px;">

                        </div>

                        <form  role="form" method="POST" action="{{ url('/login') }}">
                             {{ csrf_field() }}



                            <div class="form-group mb-lg">
                                <label>Email</label>
                                <div class="input-group input-group-icon">
                                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">

                                @if ($errors->has('email'))
                                    <span class="help-block text-danger">
                                        <strong style="padding-left: 10px;">*อีเมลของคุณไม่ถูกต้อง</strong>
                                    </span>
                                @endif
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-user"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="form-group mb-lg">
                                <div class="clearfix">
                                    <label class="pull-left">Password</label>
                                    <a href="#" class="pull-right">Lost Password?</a>
                                </div>
                                <div class="input-group input-group-icon">
                                    <input id="password" type="password" class="form-control" name="password">
                                     @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                                    <span class="input-group-addon">
                                        <span class="icon icon-lg">
                                            <i class="fa fa-lock"></i>
                                        </span>
                                    </span>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-sm-8">
                                    <div class="checkbox-custom ">
                                        <input  name="rememberme" id="remember" value=""  type="checkbox">

                                        <label for="RememberMe">จดจำฉันไว้ในระบบ</label>
                                    </div>
                                </div>
                                <div class="col-sm-4 text-right">

                                    <button type="submit" class="btn btn-primary">เข้าสู่ระบบ</button>
                                </div>
                            </div>

                            <span class="mt-lg mb-lg line-thru text-center text-uppercase">
              									<span>หรือ</span>
              							</span>


                            <div class="mb-xs text-center">
                								<a class="btn btn-facebook mb-md ml-xs mr-xs" href="{{url('register')}}">สร้างบัญชีผู้ใช้งาน</a>

                							</div>

                        </form>
                    </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. All Rights Reserved. </p>
            </div>
        </section>
@stop
