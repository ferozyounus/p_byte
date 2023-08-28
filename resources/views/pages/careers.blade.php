@extends('layouts.website.main')
@section('content')

<main class="main-content">
    <section
      class="single-page-banner"
      style="background-image: url('{{asset('front/images/career_bg.png')}}')"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Careers</h1>
          </div>
        </div>
      </div>
    </section>

    <section class="career_main_sec_1">
          <div class="container">
              <div class="hd_style_h1 hd_style_h4">
                  <h4>Career Highlight</h4>
                  <h1>Popular Careers</h1>
              </div>
          </div>
    </section>
    
    <section class="career_main_sec_2">
      <div class="container">
          <div class="main_career_box">
              <div class="main_careerhead_box">
                  <div class="filter_btn">
                      <!-- <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="23.883" height="13.566" viewBox="0 0 23.883 13.566">
                              <g id="filter" transform="translate(0 0)">
                                <path id="Path_7482" data-name="Path 7482" d="M23.881,10.832H2.334a1.2,1.2,0,0,1,0-2.394H23.881a1.2,1.2,0,0,1,0,2.394Z" transform="translate(-1.166 -8.438)" fill="#011627"/>
                                <path id="Path_7483" data-name="Path 7483" d="M21.526,18.707H7.959a1.2,1.2,0,0,1,0-2.394H21.526a1.2,1.2,0,0,1,0,2.394Z" transform="translate(-2.801 -10.727)" fill="#011627"/>
                                <path id="Path_7484" data-name="Path 7484" d="M18.7,26.582h-3.99a1.2,1.2,0,0,1,0-2.394H18.7a1.2,1.2,0,0,1,0,2.394Z" transform="translate(-4.763 -13.016)" fill="#011627"/>
                              </g>
                          </svg>                              
                          FILTER
                      </a> -->
                      <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="11.117" height="13.896" viewBox="0 0 11.117 13.896">
                              <path id="bx-sort" d="M8.779,12.728H6L10.169,16.9V3H8.779Zm4.169-7.643V16.9h1.39V7.169h2.779L12.948,3Z" transform="translate(-6 -3)" fill="#011627"/>
                          </svg>                                                           
                          SORT
                      </a>
                      <a href="#">
                          <svg id="Group_3472" data-name="Group 3472" xmlns="http://www.w3.org/2000/svg" width="11.35" height="2.837" viewBox="0 0 11.35 2.837">
                              <path id="bx-dots-horizontal" d="M10.256,15h2.837v2.837H10.256Zm4.256,0H17.35v2.837H14.512ZM6,15H8.837v2.837H6Z" transform="translate(-6 -15)" fill="#011627"/>
                          </svg>                              
                      </a>                        
                  </div>
                  <div class="career_search_btn">
                      <button class="career_openBtn" onclick="openSearch()">Search <svg xmlns="http://www.w3.org/2000/svg" width="14.397" height="14.397" viewBox="0 0 14.397 14.397">
                          <path id="search" d="M17.552,16.328l-3.264-3.264a6.067,6.067,0,1,0-1.225,1.225l3.264,3.264a.867.867,0,0,0,1.225-1.225ZM5.107,9.436a4.329,4.329,0,1,1,4.329,4.329A4.329,4.329,0,0,1,5.107,9.436Z" transform="translate(-3.375 -3.375)" fill="#011627"/>
                        </svg>
                        </button>

                      <div id="career_myOverlay" class="career_overlay">
                          <span class="career_closebtn" onclick="closeSearch()" title="Close Overlay">×</span>
                          <div class="career_overlay-content">
                            <form action="#">
                              <input type="text" placeholder="Search.." name="search">
                              <button type="submit"><i class="fa fa-search"></i></button>
                            </form>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="main_careercenter_box">
                  <div class="row">
                        @forelse ($occupations as $data)   
                            <div class="col-md-4">
                                <div class="career_main_box">
                                    <div class="car_inn">
                                        <h3>{{ $data->title }}</h3>
                                        <h4>Description</h4>
                                        @php
                                            $str = substr(strip_tags($data->description), 0, 120) . '...';
                                        @endphp
                                        <p> {{ $str }}</p>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                      
                  </div>
              </div>
              <div class="main_careerfoot_box">
                  <div class="airtable">
                      <a href="#"><img src="{{asset('front/images/Airtable_Logo.png')}}" alt="Airtable_Logo"></a>
                  </div>
                  <!-- <div class="dowload_btn">
                      <a href="#">
                      <svg xmlns="http://www.w3.org/2000/svg" width="20" height="16" viewBox="0 0 20 16">
                          <g id="bx-download" transform="translate(-3 -6)">
                              <path id="Path_7485" data-name="Path 7485" d="M16,18l4-5H17V6H15v7H12Z" transform="translate(-3)" fill="#011627"/>
                              <path id="Path_7486" data-name="Path 7486" d="M21,23.5H5v-7H3v7a2,2,0,0,0,2,2H21a2,2,0,0,0,2-2v-7H21Z" transform="translate(0 -3.5)" fill="#011627"/>
                          </g>
                      </svg>
                      DOWNLOAD CSV
                      </a>
                      <a href="#">
                          <svg xmlns="http://www.w3.org/2000/svg" width="17.002" height="17.002" viewBox="0 0 17.002 17.002">
                              <g id="noun-maximize-4664254" transform="translate(-110.003 -40)">
                                <path id="Path_7487" data-name="Path 7487" d="M371.679,40.708a.708.708,0,0,1,.708-.708h5.532a1.254,1.254,0,0,1,1.2,1.194v5.473a.708.708,0,1,1-1.417,0v-4.2l-5.118,5.118a.708.708,0,0,1-1-1l5.167-5.167h-4.362a.708.708,0,0,1-.708-.708Z" transform="translate(-252.115)" fill="#011627" fill-rule="evenodd"/>
                                <path id="Path_7488" data-name="Path 7488" d="M117.443,307.084a.708.708,0,0,1-.708.708H111.2A1.254,1.254,0,0,1,110,306.6v-5.473a.708.708,0,0,1,1.417,0v4.2l5.118-5.118a.708.708,0,0,1,1,1l-5.167,5.167h4.362a.708.708,0,0,1,.708.708Z" transform="translate(0 -250.79)" fill="#011627" fill-rule="evenodd"/>
                              </g>
                            </svg>                              
                          VIEW LARGER VERSION
                      </a>
                  </div> -->
              </div>
          </div>
      </div>
</section>

  </main>
 

    
@endsection
@section('script')
@endsection
