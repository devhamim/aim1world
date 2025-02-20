@extends('frontend.master.master')
@section('title', $metaSettings->title ?? 'Aim World - Services')
@section('meta_description', $metaSettings->meta_description ?? 'Services' )
@section('meta_title', $metaSettings->meta_title ?? 'Aim World - Services' )
@section('meta_tag', $metaSettings->meta_tag ?? ' Services' )
@section('content')

<!--===== HERO AREA STARTS =======-->
<div class="about-header-area" style="background-image: url({{ asset('frontend') }}/img/bg/inner-header.png); background-repeat: no-repeat; background-size: cover; background-position: center;">
    <img src="{{ asset('frontend') }}/img/elements/elements1.png" alt="" class="elements1 aniamtion-key-1">
    <img src="{{ asset('frontend') }}/img/elements/star2.png" alt="" class="star2 keyframe5">
    <div class="container">
        <div class="row">
            <div class="col-lg-5 m-auto">
                <div class="about-inner-header heading9 text-center">
                    <h1>Our Best Services</h1>
                    <a href="{{ url('/') }}">Home <i class="fa-solid fa-angle-right"></i> <span>Services</span></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!--===== HERO AREA ENDS =======-->

<!--===== SERVICE AREA STARTS =======-->
<div class="service1-section-area sp2">
    <div class="container">
      <div class="row">
        <div class="col-lg-12">
          <div class="service-all-boxes-area1">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="service-boxarea">
                        <a href="#">Search Engine Optimization ( SEO)</a>
                        <div class="space40"></div>
                        <img src="{{ asset('frontend') }}/img/icons/service-icon1.svg" alt="">
                        <div class="space40"></div>
                        <p>Enhance your online visibility & drive organic traffic with our advanced SEO techniques. We optimize your website to rank higher.</p>
                      </div>
                </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="#">Graphics Design</a>
                    <div class="space40"></div>
                    <img src="{{asset('frontend')}}/img/icons/service-icon2.svg" alt="">
                    <div class="space40"></div>
                    <p>Transform your vision into reality with our creative design solutions. We craft visually stunning graphics that enhance your brand's identity and leave a lasting impression.</p>
                  </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="#">Social Media Marketing</a>
                    <div class="space66"></div>
                    <img src="{{ asset('frontend') }}/img/icons/service-icon3.svg" alt="">
                    <div class="space40"></div>
                    <p>Build a strong brand presence and engage with your audience on social media platforms. We create strategic social media campaigns </p>
                  </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="#">Website Design and Development</a>
                    <div class="space40"></div>
                    <img src="{{ asset('frontend') }}/img/icons/service-icon4.svg" alt="">
                    <div class="space40"></div>
                    <p>Make a lasting impression with a professionally designed and user-friendly website. Our web design and development services ensure.</p>
                  </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="service-boxarea">
                    <a href="#">Content Marketing</a>
                    <div class="space40"></div>
                    <img src="{{ asset('frontend') }}/img/icons/service-icon15.svg" alt="">
                    <div class="space40"></div>
                    <p>We craft compelling content that educates, entertains, and inspires your audience, driving engagement and building brand loyalty. </p>
                  </div>
            </div>

        <div class="col-lg-3 col-md-6">
            <div class="service-boxarea">
                <a href="#">Email Marketing</a>
                <div class="space40"></div>
                <img src="{{ asset('frontend') }}/img/icons/service-icon16.svg" alt="">
                <div class="space40"></div>
                <p>We design and implement effective email marketing campaigns to nurture leads, promote products or services, and drive conversions.</p>
              </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="service-boxarea">
                <a href="#">Analytics And Reporting</a>
                <div class="space40"></div>
                <img src="{{ asset('frontend') }}/img/icons/service-icon17.svg" alt="">
                <div class="space40"></div>
                <p>We track and measure the performance of your digital marketing campaigns using advanced analytics tools. </p>
              </div>
        </div>

        <div class="col-lg-3 col-md-6">
            <div class="service-boxarea">
                <a href="#">One Page SEO Optimization</a>
                <div class="space40"></div>
                <img src="{{ asset('frontend') }}/img/icons/service-icon18.svg" alt="">
                <div class="space40"></div>
                <p>We optimize key on-page elements of your website, including title tags, meta descriptions, headers, and content with your target keywords.</p>
              </div>
        </div>
          </div>
        </div>
        </div>
      </div>
    </div>
  </div>
<!--===== SERVICE AREA ENDS =======-->

<!--===== WORK AREA STARTS =======-->
<div class="works-inner-section-area sp1">
    <div class="container">
        <div class="row">
            <div class="col-lg-6">
                <div class="works-header-area heading2">
                    <h5>Why Choose Us</h5>
                    <h2>Experience the Advantage Why We're the Right Choice</h2>
                    <p>Choose us for unmatched expertise, personalized solutions, and a proven track record of success. We’re dedicated to delivering results that drive your business forward.</p>
                    <div class="space32"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{ asset('frontend') }}/img/icons/works-icons7.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Proven Result</a>
                            <p>Achieve measurable success with our tailored strategies and solutions. We deliver consistent, impactful outcomes that drive growth and exceed expectations.</p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{ asset('frontend') }}/img/icons/works-icons8.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Customized Solutions</a>
                            <p>We offer personalized strategies designed to meet your unique needs. Our tailored solutions ensure maximum impact, helping you achieve your specific business goals effectively.</p>
                        </div>
                    </div>
                    <div class="space20"></div>
                    <div class="works-content-box">
                        <div class="icons">
                            <img src="{{ asset('frontend') }}/img/icons/works-icons9.svg" alt="">
                        </div>
                        <div class="content">
                            <a href="#">Dedicated Support</a>
                            <p>Our team is committed to providing you with continuous, reliable support. We are here to assist you at every step, ensuring your success with prompt, personalized service whenever you need it.</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6">
                <div class="about-all-images-area">
                    <img src="{{ asset('frontend') }}/img/elements/elements14.png" alt="" class="elements12 keyframe5">
                    <img src="{{ asset('frontend') }}/img/elements/elements15.png" alt="" class="elements13 keyframe5">
                    <div class="row">
                      <div class="col-lg-6 col-md-6">
                        <div class="img1 image-anime">
                            <div class="space100"></div>
                          <img src="{{ asset('frontend') }}/img/all-images/about-img6.png" alt="">
                        </div>
                      </div>
                      <div class="col-lg-6 col-md-6">
                        <div class="img2 image-anime">
                          <img src="{{ asset('frontend') }}/img/all-images/about-img5.png" alt="">
                        </div>
                      </div>
                    </div>
                  </div>
            </div>
        </div>
    </div>
</div>
<!--===== WORK AREA ENDS =======-->

<!--===== SKILLS AREA STARTS =======-->
<div class="skills-section-area sp2">
    <img src="{{ asset('frontend') }}/img/bg/cta-bg1.png" alt="" class="cta-bg1 aniamtion-key-2">
    <img src="{{ asset('frontend') }}/img/bg/cta-bg2.png" alt="" class="cta-bg2 aniamtion-key-1">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 m-auto">
                <div class="skills-header text-center heading2">
                    <h5>Skills</h5>
                    <h2>Our Skills</h2>
                </div>
            </div>
        </div>
        <div class="col-lg-10 m-auto">
          <div class="circle-progress-area">
            <div class="row">
              <div class="col-lg-3 col-md-6">
                <div class="progresbar">
                  <div class="progressbar">
                     <div class="circle" data-percent="100">
                      <canvas></canvas>
                         <div>100%</div>
                    </div>
                  </div>
                  <p>Web</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="progresbar">
                  <div class="progressbar">
                    <div class="circle two" data-percent="100">
                      <canvas></canvas>
                        <div>100%</div>
                   </div>
                 </div>
                 <p>Graphics Design</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="progresbar">
                  <div class="progressbar">
                    <div class="circle three" data-percent="100">
                      <canvas></canvas>
                       <div>100%</div>
                    </div>
                   </div>
                   <p>SEO</p>
                </div>
              </div>

              <div class="col-lg-3 col-md-6">
                <div class="progresbar">
                  <div class="progressbar">
                    <div class="circle four" data-percent="100">
                      <canvas></canvas>
                       <div>100%</div>
                    </div>
                   </div>
                   <p>Digital Marketing</p>
                </div>
              </div>
          </div>
          </div>
        </div>
    </div>
</div>
<!--===== SKILLS AREA ENDS =======-->

<!--===== TEAM AREA STARTS =======-->
{{-- <div class="team-inner-section-area sp2">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 m-auto">
                <div class="team2-header-area text-center heading2">
                    <h5>Our Team</h5>
                    <h2>Meet With Our Expert Team</h2>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="{{ asset('frontend') }}/img/all-images/team-img1.png" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/facebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/instagram.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/linkedin.svg" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{ asset('frontend') }}/img/icons/youtube.svg" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">John Doe</a>
                        <p>CEO & Founder</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="{{ asset('frontend') }}/img/all-images/team-img2.png" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/facebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/instagram.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/linkedin.svg" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{ asset('frontend') }}/img/icons/youtube.svg" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">Jane Smith</a>
                        <p>Digital Marketing Officer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea">
                    <div class="img1">
                        <img src="{{ asset('frontend') }}/img/all-images/team-img3.png" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/facebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/instagram.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/linkedin.svg" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{ asset('frontend') }}/img/icons/youtube.svg" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">Sarah Thompson </a>
                        <p>Web Designer</p>
                    </div>
                </div>
            </div>

            <div class="col-lg-3 col-md-6">
                <div class="team-boxarea m-0">
                    <div class="img1">
                        <img src="{{ asset('frontend') }}/img/all-images/team-img4.png" alt="">
                    </div>
                    <ul>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/facebook.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/instagram.svg" alt=""></a></li>
                        <li><a href="#"><img src="{{ asset('frontend') }}/img/icons/linkedin.svg" alt=""></a></li>
                        <li><a href="#" class="m-0"><img src="{{ asset('frontend') }}/img/icons/youtube.svg" alt=""></a></li>
                    </ul>
                    <div class="content">
                        <a href="team.html">David Garcia</a>
                        <p>Content Writer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div> --}}

<!--===== TEAM AREA ENDS =======-->

@endsection

