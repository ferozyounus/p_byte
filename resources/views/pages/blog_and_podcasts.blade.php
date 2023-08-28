@extends('layouts.website.main')
@section('content')

<main class="main-content">
    <section
      class="single-page-banner"
      style="background-image: url('{{asset('front/images/Group\ 3480.png')}}')"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Blog And Podcasts</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="single-blog-sec-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <img
              src="{{asset('front/images/NoPath - Copy (102).png')}}"
              class="main-img"
              alt=""
            />
            <div class="cus-content">
              <h1>Lorem ipsum dolor</h1>
              <div class="s-tags">
                <div class="s-marvalewis">
                  <svg
                    xmlns="http://www.w3.org/2000/svg"
                    width="31.434"
                    height="22.703"
                    viewBox="0 0 31.434 22.703"
                  >
                    <path
                      id="bxs-crown"
                      d="M35.934,3,27.2,11.732,20.217,3l-6.985,8.732L4.5,3V25.7H35.934Z"
                      transform="translate(-4.5 -3)"
                      fill="#d8d7c6"
                    />
                  </svg>

                  Marvalewis
                </div>
                <div class="s-date">
                  <svg
                    id="calendar3-event-fill"
                    xmlns="http://www.w3.org/2000/svg"
                    width="28.226"
                    height="28.226"
                    viewBox="0 0 28.226 28.226"
                  >
                    <path
                      id="Path_7481"
                      data-name="Path 7481"
                      d="M3.528,0A3.528,3.528,0,0,0,0,3.528H28.226A3.528,3.528,0,0,0,24.7,0Zm24.7,5.292H0V24.7a3.528,3.528,0,0,0,3.528,3.528H24.7A3.528,3.528,0,0,0,28.226,24.7ZM24.7,10.585A1.764,1.764,0,1,1,22.933,8.82,1.764,1.764,0,0,1,24.7,10.585Z"
                      fill="#d8d7c6"
                      fill-rule="evenodd"
                    />
                  </svg>
                  22/ JULY/ 2022
                </div>
                <div class="s-comments">
                  <svg
                    id="chat-square-fill"
                    xmlns="http://www.w3.org/2000/svg"
                    width="30.047"
                    height="28.795"
                    viewBox="0 0 30.047 28.795"
                  >
                    <path
                      id="Path_6644"
                      data-name="Path 6644"
                      d="M3.756,0A3.756,3.756,0,0,0,0,3.756V18.78a3.756,3.756,0,0,0,3.756,3.756H8.451a1.878,1.878,0,0,1,1.5.751l3.568,4.757a1.878,1.878,0,0,0,3,0l3.568-4.757a1.878,1.878,0,0,1,1.5-.751h4.695a3.756,3.756,0,0,0,3.756-3.756V3.756A3.756,3.756,0,0,0,26.291,0Z"
                      fill="#d8d7c6"
                      fill-rule="evenodd"
                    />
                  </svg>

                  0 comments
                </div>
              </div>
              <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
                diam nonumy eirmod tempor invidunt ut labore et dolore magna
                aliquyam erat, sed diam voluptua. At vero eos et accusam et
                justo duo dolores et ea rebum. Stet clita kasd gubergren, no
                sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem
                ipsum doloro eos et accusam et justo duo dolores et ea rebum.
                Stet clita kasd gubergren, no sea takimata sanctus est Lorem
                ipsum dolor sit amet.
                <br /><br />
                Lorem ipsum dolor sielitr, sed diam nonumy eirmod tempor
                invidunt ut labore et dolore magna aliquyam erat, sed diam
                voluptua. At vero eos et accusam et justo duo dolores et ea
                rebum. Stet clita kasd gubergren, no sea takimata sanctus est
                Lorem
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="single-blog-sec-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Vitae cursus adipiscing <br />tellus vitae at justo</h1>
            <p>
              Lorem ipsum dolor sielitr, sed diam nonumy eirmod tempor
              invidunt ut labore et dolore magna aliquyam erat, sed diam
              voluptua. At vero eos et accusam et justo duo dolores et ea
              rebum. Stet clita kasd gubergren, no sea takimata sanctus est
              Lorem
            </p>
            <div class="vitae-post">
              <div class="row">
                <div class="col-md-6">
                  <img src="{{asset('front/images/NoPath - Copy (104).png')}}" alt="" />
                  <p>
                    Stet clita kasd gubergren, no sea takimata sanctus est
                    Lorem ipsum dolor sit amet. Lorem ipsum d et accusam et
                    justo duo dolores et ea rebum. Stet clita ka no sea
                    takimata sanctus est Lorem ipsum dolor sit amet.
                  </p>
                </div>
                <div class="col-md-6">
                  <img src="{{asset('front/images/NoPath - Copy (103).png')}}" alt="" />
                  <p>
                    Stet clita kasd gubergren, no sea takimata sanctus est
                    Lorem ipsum dolor sit amet. Lorem ipsum d et accusam et
                    justo duo dolores et ea rebum. Stet clita ka no sea
                    takimata sanctus est Lorem ipsum dolor sit amet.
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="single-blog-sec-3">
      <div class="container">
        <div class="row align-items-center">
          <div class="col-md-6">
            <img src="{{asset('front/images/Group 3482.png')}}" alt="" />
          </div>
          <div class="col-md-6">
            <h1>Males pellentesque porta urna</h1>
            <p>
              Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed
              diam nonumy eirmod tempor invidunt ut labore et dolore magna
              aliquyam m doloro eos et accusam et justo duo dolores et ea
              rebum. Stet clita kasd gubergren, no sea takimata sanctus est
              Lorem ipsum dolor sit amet. <br /><br />
              Lorem ipsum dolor sielitr, sed diam nonumy eirmod tempor
              invidunt ut labore et dolore magna aliquyam erat, sed diam
              voluptua. At vero eos et accusam et justo duo dolores et ea
              rebum. Stet clita kasd gubergren, no sea takimata sanctus est
              Lorem
            </p>
          </div>
        </div>
      </div>
    </section>
  </main>
    
@endsection
@section('script')
@endsection
