@extends('frontend.master.master')
@section('title', $metaSettings->title ?? 'Aim World - Protfolios')
@section('meta_description', $metaSettings->meta_description ?? 'Protfolios' )
@section('meta_title', $metaSettings->meta_title ?? 'Aim World - Protfolios' )
@section('meta_tag', $metaSettings->meta_tag ?? 'Protfolios' )
@section('content')

<!--===== CASE AREA STARTS =======-->
<div class="case-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-4 m-auto">
                <div class="case-header text-center heading2">
                    <h5>Protfolio</h5>
                    <h2>Our Protfolio</h2>
                </div>
                <div class="space50 d-lg-block d-none"></div>
                <div class="space30 d-lg-none d-block"></div>
            </div>
        </div>

        <div class="row">
            {{-- <div class="col-lg-7 m-auto">
                <div class="tabs-area text-center">
                    @php
                        $uniqueProjectTypes = $portfolios->unique('project_type');
                    @endphp
                    <ul class="nav nav-pills" id="pills-tab" role="tablist" >
                        <li class="nav-item" role="presentation" >
                            <button class="nav-link active" id="pills-email-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home" aria-selected="false">All</button>
                        </li>
                        @foreach ($uniqueProjectTypes as $portfolio)

                            <li class="nav-item" role="presentation" >
                                <button class="nav-link" id="pills-{{ $portfolio->project_type }}-tab" data-bs-toggle="pill" data-bs-target="#pills-{{ $portfolio->project_type }}" type="button" role="tab" aria-controls="pills-{{ $portfolio->project_type }}" aria-selected="true">{{ $portfolio->project_type }}</button>
                            </li>
                        @endforeach
                    </ul>
                  </div>
            </div> --}}
            <div class="col-lg-12">
                <div class="tabs-content-area">
                    <div class="tab-content" id="pills-tabContent" >
                      <div class="tab-pane fade active show" id="pills-home" role="tabpanel"  >
                        <div class="tabs-contents">
                          <div class="row align-items-center">
                            @foreach ($portfolios as $portfolio)
                                <div class="col-lg-4">
                                    <div class="case-inner-box">
                                        <div class="img1 image-anime">
                                            <img src="{{ asset('uploads/protfolio') }}/{{ $portfolio->preview_image }}" alt="{{ $portfolio->preview_image }}">
                                        </div>
                                        <div class="content-area">
                                        <div class="link-area">
                                            <a href="#" class="tags">#{{ $portfolio->project_type }}</a>
                                            <a href="#" class="head">{{ $portfolio->title }}</a>
                                        </div>
                                        <div class="arrow">
                                            <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                          </div>
                        </div>
                      </div>


                      {{-- @foreach ($uniqueProjectTypes as $projecttype)
                        <div class="tab-pane fade" id="pills-{{ str_replace(' ', '', $projecttype->project_type) }}" role="tabpanel" aria-labelledby="pills-{{ str_replace(' ', '', $projecttype->project_type) }}-tab" >
                            <div class="tabs-contents" >
                                <div class="row align-items-center" >
                                @foreach ($portfolios as $portfolio)
                                    <div class="col-lg-4">
                                        <div class="case-inner-box">
                                            <div class="img1 image-anime">
                                                <img src="{{ asset('uploads/protfolio') }}/{{ $portfolio->preview_image }}" alt="{{ $portfolio->preview_image }}">
                                            </div>
                                            <div class="content-area">
                                            <div class="link-area">
                                                <a href="#" class="tags">#{{ $portfolio->project_type }}</a>
                                                <a href="#" class="head">{{ $portfolio->title }}</a>
                                            </div>
                                            <div class="arrow">
                                                <a href="#"><i class="fa-solid fa-arrow-right"></i></a>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                @endforeach
                                </div>
                            </div>
                        </div>
                      @endforeach --}}
                    </div>
                   </div>
            </div>
            {{-- <div class="col-lg-12">
              <div class="pagination-area">
                <nav aria-label="Page navigation example">
                  <ul class="pagination justify-content-center">
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fa-solid fa-angle-left"></i></a>
                    </li>
                    <li class="page-item"><a class="page-link active" href="#">1</a></li>
                    <li class="page-item"><a class="page-link" href="#">2</a></li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#"><i class="fa-solid fa-angle-right"></i></a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div> --}}
        </div>
    </div>
</div>
<!--===== CASE AREA ENDS =======-->

@endsection
