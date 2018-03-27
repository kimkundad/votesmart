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
                  <h3 class="text-primary" style="margin-top: 0px;">เข้าร่วม VoteSmart วันนี้</h3>

                    <form  method="POST" action="{{ route('register') }}">
                        {{ csrf_field() }}



                        <div class="form-group{{ $errors->has('name') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 10px !important;">
                            <label>Name</label>

                            <div class="input-group input-group-icon">
                                <input id="name" type="text" class="form-control" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('email') ? ' has-error' : '' }} mb-lg" style="margin-bottom: 10px !important;">
                            <label>E-Mail Address</label>

                            <div class="input-group input-group-icon">
                                <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group{{ $errors->has('password') ? ' has-error' : '' }}" style="margin-bottom: 10px !important;">
                            <label >Password</label>

                            <div class="input-group input-group-icon">
                                <input id="password" type="password" class="form-control" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help-block">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group" style="margin-bottom: 10px !important;">
                            <label>Confirm Password</label>

                            <div class="input-group input-group-icon">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group" >
                            <div class="mb-xs text-center">
                                <button type="submit" class="btn btn-facebook mb-md ml-xs mr-xs">
                                    สร้างบัญชีใหม่
                                </button>
                            </div>
                        </div>
                        <style>
                        span{
                          color: #1c94e0;
                        }
                        </style>
                        <p style="color: #777;">การสมัครนี้จะถือว่าคุณยอมรับ <span>ข้อตกลงการใช้งาน</span>
                          และ <span>นโยบายความเป็นส่วนตัว</span>  รวมถึง <span>การใช้คุกกี้</span>  ผู้อื่นจะสามารถค้นหาคุณได้จากอีเมลหรือหมายเลขโทรศัพท์ หากมีการระบุ</p>
                        <span class="mt-lg mb-lg line-thru text-center text-uppercase">
          								<span>หรือ</span>
          							</span>

                        <p class="text-center" style="color: #777;">มีบัญชีแล้วหรือยัง? <a href="pages-signin.html">เข้าสู่ระบบ!</a></p>
                    </form>
                </div>
                </div>

                <p class="text-center text-muted mt-md mb-md">&copy; Copyright 2017. All Rights Reserved. </p>
            </div>
        </section>
@stop
