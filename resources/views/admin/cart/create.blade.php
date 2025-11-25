@extends('layout.app')
 @section('title',$title)
 @section('description',$description)
 @section('content')
 <div class="container-fluid">
 <div class="row">
        <div class="col-lg-12">
            <div class="breadcrumb-main">
                <h4 class="text-capitalize breadcrumb-title">{{ trans('menu.table-data') }}</h4>
                <div class="breadcrumb-action justify-content-center flex-wrap">
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="#"><i class="las la-home"></i>{{ trans('menu.table-menu-title') }}</a></li>
                            <li class="breadcrumb-item"><a href="#">Apps</a></li>
                            <li class="breadcrumb-item active" aria-current="page">{{ trans('menu.table-data') }}</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</div>
 @endsection
