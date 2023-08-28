@extends('layouts.website.main')
@section('content')

<main class="main-content">
    <section class="single-page-banner">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Assessment</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="assessment-sec">
      <div class="container">
        <div class="row">
          <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="col-height">
              <h1>Why Should I Take Assessments?</h1>
              <div class="assessments-list">
                <ul>
                  <li>
                    There are several reasons to consider your career
                    exploration journey by taking one or several di
                  </li>
                  <li>
                    Assessments may help you to discover things about yourself
                    that you may not already know or realize.
                  </li>
                  <li>
                    Career assessments may help you to understand the types of
                    careers you would like to start exploring.
                  </li>
                  <li>
                    Personality assessments may help you to discover more
                    about the characteristics and qualities that form who you
                    are.
                  </li>
                  <li>
                    Strength and Interest assessments may help you when you
                    are unsure of where your talents and interests lie.
                  </li>
                  <li>
                    After taking some of these assessments, explore our
                    careers and filter by some of your findings. This will
                    narrow your search and help with your career exploration.
                  </li>
                  <li>
                    Before you begin, please make sure that you have enough
                    time to take each assessment. Sit back, have fun, and
                    enjoy learning about yourself!
                  </li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="assessment-img">
              <img src="{{asset('front/images/NoPath - Copy (56).png')}}" alt="" />
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="assessment-sec2">
      <div class="container">
        <div class="row">
          <div class="self-heading">
            <h1>Free Self-Directed Assessments</h1>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="assessments-heading">
              <img src="{{asset('front/images/Self-Directed icon 1.svg')}}" alt="" />
              <h2>Career Assessments</h2>
              <div class="assesments-list-2">
                <ul>
                  <li><p>123 career test</p></li>
                  <li><p>Pathsoucre</p></li>
                  <li><p>PrinceTown Review Cnter Quiz</p></li>
                  <li>
                    <p>
                      MAPP- Motivational Assessment <br />
                      Of Personal Potentional
                    </p>
                  </li>
                  <li><p>Rasmussen Career Aptitude Test</p></li>
                  <li><p>Dewey olor System</p></li>
                </ul>
              </div>
            </div>
          </div>

          <div class="col-md-6 col-sm-12 col-xs-12">
            <div class="main-column">
              <div class="personal-assessment">
                <img src="{{asset('front/images/Self-Directed icon 2.svg')}}" alt="" />
                <h2>Personality Assessments</h2>
                <div class="assesments-list-3">
                  <ul>
                    <li><p>HOLLAND CODES (RIASEC) TEST</p></li>
                    <li><p>THE TYPEFINDER® PERSONALITY TEST</p></li>
                    <li><p>Jung Typology Test</p></li>
                  </ul>
                </div>
              </div>

              <div class="interest-assessment">
                <img src="{{asset('front/images/Self-Directed icon 3.svg')}}" alt="" />
                <h2>Interests Assessments</h2>
                <div class="assesments-list-4">
                  <ul>
                    <li><p>O*NET Interest Profiler</p></li>
                    <li><p>The MnCareers Interest Assessment</p></li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="assessment-sec3">
      <div class="container">
        <div class="row">
          <div class="professional-heading">
            <h1>
              Fee Based And/Or Professionally <br />
              Admininsterd Assessment
            </h1>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="career-assessment-1">
              <img src="{{asset('front/images/Self-Directed icon 1.svg')}}" alt="" />
              <h2>Career Assessment</h2>
              <div class="assesments-list-5">
                <ul>
                  <li>
                    <p>
                      MAPP- Motivational <br />
                      Assessment Of Personal<br />
                      Potentional
                    </p>
                  </li>
                  <li><p>Career Key</p></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="career-assessment-2">
              <img src="{{asset('front/images/Self-Directed icon 2.svg')}}" alt="" />
              <h2>Personality Assessments</h2>
              <div class="assesments-list-6">
                <ul>
                  <li><p>The Myers-Briggs Type Indicator (MBTI)</p></li>
                  <li><p>Keirsey Temperament Sorter</p></li>
                  <li><p>DiSC Profile</p></li>
                </ul>
              </div>
            </div>
          </div>
          <div class="col-md-4 col-sm-12 col-xs-12">
            <div class="career-assessment-3">
              <img src="{{asset('front/images/Self-Directed icon 3.svg')}}" alt="" />
              <h2>Strength Assessments</h2>
              <div class="assesments-list-7">
                <ul>
                  <li><p>The Clifton StrengthsFinder</p></li>
                  <li><p>Strong Strength Inventory</p></li>
                </ul>
              </div>
            </div>
          </div>
        </div>
        <!-- <button type="submit" class="btn btn-primary">Contact Us</button> -->
        <a href="/contact_us" class="btn btn-primary">Contact Us</a>
      </div>
    </section>
  </main>

  

    
@endsection
@section('script')
@endsection
