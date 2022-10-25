@extends('admin.layouts.app')
@section('title') @if (isset($pageTitle)) {{ $pageTitle }} @endif @endsection
@section('panel')
    <!-- Start page title -->
    <div class="qz-page-title">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="d-flex justify-content-between align-items-center">
                        <h2>@if (isset($pageTitle)) {{ $pageTitle }} @endif</h2>
                        <span class="sidebarToggler">
                            <i class="fa fa-bars d-lg-none d-block"></i>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End page title -->
    @include('layouts.message')
    <!-- Start content area  -->
    <div class="qz-content-area">
        <div class="card qz-profile-area">
            <div class="card-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-xl-5">
                            <div class="qz-profile-card text-center">
                                <div class="qz-profile-user-avater">
                                    <img @if(isset($user->photo)) src="{{ asset(path_user_image().$user->photo)}}" @else src="{{asset('assets/images/avater.jpg')}}" @endif alt="" class="img-fluid">
                                </div>
                                <div class="qz-user-info">
                                    <h4>{!! __($user->name) !!}</h4>
                                    <p>{!! __($user->email) !!}</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-7">
                            <div class="qz-user-profile-from">
                                Missing
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End content area  -->
@endsection

@section('script')
@endsection