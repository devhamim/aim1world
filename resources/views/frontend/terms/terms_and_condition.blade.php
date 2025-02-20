@extends('frontend.master.master')
@section('title', $metaSettings->title ?? 'Aim World - Terms Conditions')
@section('meta_description', $metaSettings->meta_description ?? 'Terms Conditions' )
@section('meta_title', $metaSettings->meta_title ?? 'Aim World - Terms Conditions' )
@section('meta_tag', $metaSettings->meta_tag ?? ' Terms Conditions' )
@section('content')

<div class="case-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="case-header text-center heading2">
                    <h5>Terms and Conditions</h5>
                </div>
                <div class="space50 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>

        <div class="row">
            <div class="col-12">
                {!! $terms->first()->terms_conditions !!}
            </div>
        </div>
    </div>
</div>
@endsection
