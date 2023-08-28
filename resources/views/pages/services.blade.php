@extends('layouts.website.main')
@section('content')

<main class="main-content">
    <section
      class="single-page-banner"
      style="background-image: url('{{asset('front/images/services-banner.png')}}')"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Services</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="services-page-sec-1">
      <div class="container">
        <div class="services-page-posts">
          <h1>Our Services</h1>
          <h4>We Make your Career Search Personal</h4>
        </div>
      </div>
    </section>
    <section class="services-page-sec-2">
      <div class="container">
        <div class="row">
          <div class="services-box col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('front/images/NoPath - Copy (65).png')}}" alt="" />
            <div class="services-box-content">
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="92"
                height="92"
                viewBox="0 0 92 92"
              >
                <g
                  id="Group_3480"
                  data-name="Group 3480"
                  transform="translate(-415 -1158)"
                >
                  <circle
                    id="Ellipse_797"
                    data-name="Ellipse 797"
                    cx="46"
                    cy="46"
                    r="46"
                    transform="translate(415 1158)"
                    fill="#4a8b8c"
                  />
                  <g
                    id="Group_1060"
                    data-name="Group 1060"
                    transform="translate(437.912 1181.531)"
                  >
                    <path
                      id="Path_7433"
                      data-name="Path 7433"
                      d="M140.315,51.5a14.426,14.426,0,0,0-4.342-10.319V26.171A2.173,2.173,0,0,0,133.8,24H104.855a2.173,2.173,0,0,0-2.171,2.171V36.3H96.17A2.173,2.173,0,0,0,94,38.473V55.842a5.8,5.8,0,0,0,5.789,5.789h15.734a14.431,14.431,0,0,0,8.871,4.269v7.491a1.447,1.447,0,0,0,2.895,0V65.9a14.493,14.493,0,0,0,13.026-14.4ZM96.894,55.842V39.2h5.789V55.842a2.895,2.895,0,0,1-5.789,0Zm7.9,2.895a5.746,5.746,0,0,0,.783-2.895V26.895h27.5v12.09a14.448,14.448,0,0,0-19.752,19.752Zm21.046,4.342a11.591,11.591,0,1,1,8.184-3.4A11.577,11.577,0,0,1,125.841,63.078Z"
                      transform="translate(-94 -24)"
                      fill="#fbfcfd"
                    />
                    <path
                      id="Path_7434"
                      data-name="Path 7434"
                      d="M269.2,89.448A1.448,1.448,0,0,0,267.751,88h-12.3a1.447,1.447,0,0,0,0,2.895h12.3a1.448,1.448,0,0,0,1.447-1.447Z"
                      transform="translate(-239.528 -82.211)"
                      fill="#fbfcfd"
                    />
                  </g>
                </g>
              </svg>
              <h2>Self-Exploration</h2>
              <p>
                Navigate different careers on your own. Take career and
                personality assessments. Customizable career search functions.
              </p>
            </div>
          </div>
          <div class="services-box col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('front/images/NoPath - Copy (87).png')}}" alt="" />
            <div
              class="services-box-content"
              style="
                background-image: url('{{asset('front/images/noun-stories-4026111.png')}}');
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="92"
                height="92"
                viewBox="0 0 92 92"
              >
                <g
                  id="Group_3479"
                  data-name="Group 3479"
                  transform="translate(-1017 -1158)"
                >
                  <circle
                    id="Ellipse_798"
                    data-name="Ellipse 798"
                    cx="46"
                    cy="46"
                    r="46"
                    transform="translate(1017 1158)"
                    fill="#4a8b8c"
                  />
                  <g
                    id="noun-stories-4026111"
                    transform="translate(907.006 1161.436)"
                  >
                    <path
                      id="Path_7438"
                      data-name="Path 7438"
                      d="M167.595,103.27H144.849a4.781,4.781,0,0,0-4.855,4.7v24.345a4.781,4.781,0,0,0,4.855,4.7h22.745a4.779,4.779,0,0,0,4.854-4.7V107.972A4.779,4.779,0,0,0,167.595,103.27Zm-22.745,2.7h22.745a2.078,2.078,0,0,1,2.149,2v24.345a2.078,2.078,0,0,1-2.149,2H144.849a2.08,2.08,0,0,1-2.151-2V107.972A2.08,2.08,0,0,1,144.849,105.975Z"
                      transform="translate(0 -74.47)"
                      fill="#fff"
                    />
                    <path
                      id="Path_7439"
                      data-name="Path 7439"
                      d="M192.662,22.866a4.953,4.953,0,0,1,6.671,4.2l.009.3v2.784a1.352,1.352,0,0,1-2.692.184l-.012-.184V27.369a2.227,2.227,0,0,0-2.839-2.026l-.224.069L176.81,31.425a1.352,1.352,0,0,1-1.082-2.472l.168-.074Z"
                      transform="translate(-32.302)"
                      fill="#fff"
                    />
                  </g>
                </g>
              </svg>

              <h2>Read And Listen To Personal Career Stories</h2>
              <p>
                Read stories and watch videos of real people who are working
                in the job field. Gain insight and increase your knowledge
                about different careers. Learn more about what it took for
                someone to get where they are in their career.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services-page-sec-3">
      <div class="container">
        <div class="row">
          <div class="services-box col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('front/images/NoPath - Copy (88).png')}}" alt="" />
            <div
              class="services-box-content"
              style="
                background-image: url('{{asset('front/images/noun-phone-support-1351298.png')}}');
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="92"
                height="92"
                viewBox="0 0 92 92"
              >
                <g
                  id="Group_3480"
                  data-name="Group 3480"
                  transform="translate(-414 -1886)"
                >
                  <circle
                    id="Ellipse_799"
                    data-name="Ellipse 799"
                    cx="46"
                    cy="46"
                    r="46"
                    transform="translate(414 1886)"
                    fill="#4a8b8c"
                  />
                  <g
                    id="noun-phone-support-1351298"
                    transform="translate(343.364 1902.4)"
                  >
                    <path
                      id="Path_7440"
                      data-name="Path 7440"
                      d="M136.681,25.5v-.355a19.542,19.542,0,0,0-39.084,0V25.5a4.97,4.97,0,0,0-2.961,4.52v5.576a4.964,4.964,0,0,0,3.908,4.831l2.438.518a3.331,3.331,0,0,0,4.032-3.267V25.117a12.127,12.127,0,0,1,24.254,0V39.65a8.685,8.685,0,0,1-7.94,8.661,4.382,4.382,0,1,0,0,2.467,11.163,11.163,0,0,0,10.338-9.9,3.175,3.175,0,0,0,1.624.069l2.438-.518a4.965,4.965,0,0,0,3.908-4.831V30.017a4.97,4.97,0,0,0-2.956-4.52Zm-19.542,26a1.91,1.91,0,1,1,1.35-.559A1.909,1.909,0,0,1,117.139,51.493ZM102.547,37.676a.848.848,0,0,1-.32.671.839.839,0,0,1-.72.173L99.068,38a2.468,2.468,0,0,1-1.974-2.418V30.017A2.468,2.468,0,0,1,99.068,27.6l3.479-.745Zm14.592-27.141a14.611,14.611,0,0,0-14.573,13.817l-2.5.494a17.069,17.069,0,0,1,34.134,0l-2.5-.533a14.611,14.611,0,0,0-14.568-13.778Zm20.03,25.059a2.467,2.467,0,0,1-1.974,2.418l-2.438.523a.863.863,0,0,1-1.026-.858V26.82l3.479.745h0a2.467,2.467,0,0,1,1.974,2.418Z"
                      fill="#fff"
                    />
                  </g>
                </g>
              </svg>
              <h2>Expert Customer Support</h2>
              <p>
                Contact one of our customer support agents to find out more
                about our specialized services and what's the right fit for
                you.
              </p>
            </div>
          </div>
          <div class="services-box col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('front/images/NoPath - Copy (89).png')}}" alt="" />
            <div
              class="services-box-content"
              style="
                background-image: url('{{asset('front/images/noun-career-1549878.png')}}');
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="92"
                height="92"
                viewBox="0 0 92 92"
              >
                <g
                  id="Group_3482"
                  data-name="Group 3482"
                  transform="translate(-1016 -1886)"
                >
                  <circle
                    id="Ellipse_800"
                    data-name="Ellipse 800"
                    cx="46"
                    cy="46"
                    r="46"
                    transform="translate(1016 1886)"
                    fill="#4a8b8c"
                  />
                  <g
                    id="noun-career-1549878"
                    transform="translate(950.778 1895.904)"
                  >
                    <path
                      id="Path_7437"
                      data-name="Path 7437"
                      d="M165.333,11.106a1.544,1.544,0,0,0-.916.45L160.3,15.669a1.543,1.543,0,1,0,2.186,2.169l1.51-1.51V21.9a1.543,1.543,0,1,0,3.085,0V16.393l1.446,1.446a1.543,1.543,0,1,0,2.186-2.169L166.6,11.556a1.542,1.542,0,0,0-1.269-.45Zm-4.58,14.4a1.543,1.543,0,0,0-1.382,1.543V58.928a1.543,1.543,0,0,0,1.543,1.543h9.256a1.542,1.542,0,0,0,1.542-1.543V27.046A1.542,1.542,0,0,0,170.17,25.5h-9.256a1.5,1.5,0,0,0-.161,0Zm1.7,3.085h6.17v28.8h-6.17Zm-15.587,3.6a1.543,1.543,0,0,0-1.382,1.543v25.2a1.543,1.543,0,0,0,1.543,1.543h9.256a1.543,1.543,0,0,0,1.543-1.543v-25.2a1.543,1.543,0,0,0-1.543-1.543h-9.256a1.5,1.5,0,0,0-.161,0Zm1.7,3.085h6.171V57.385h-6.171Zm-10.8.514a5.133,5.133,0,0,0-3.214,9.143A6.2,6.2,0,0,0,131.6,50.2v8.725a1.542,1.542,0,0,0,1.542,1.543H142.4a1.543,1.543,0,0,0,1.543-1.543V50.2a6.2,6.2,0,0,0-2.957-5.271,5.133,5.133,0,0,0-3.214-9.143Zm0,3.085a2.057,2.057,0,1,1-2.057,2.057A2.034,2.034,0,0,1,137.774,38.873Zm0,8.227a3.051,3.051,0,0,1,3.085,3.1v7.183h-6.17V50.2a3.051,3.051,0,0,1,3.085-3.1Z"
                      transform="translate(-40.382 0)"
                      fill="#fff"
                    />
                  </g>
                </g>
              </svg>

              <h2>Personalized Career Guidance And Assistance</h2>
              <p>
                Get connected with one of our career guidance experts who may
                help you to further explore your career choices. Get matched
                with a career mentor, job shadowing, internships, or an
                apprenticeship. Our experts can advise you on which schools
                specialize in certain fields. We offer assistance with
                college, financial aid, and scholarship applications.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="services-page-sec-4">
      <div class="container">
        <div class="row align-items-center">
          <div class="services-box col-md-6 col-sm-12 col-xs-12">
            <img src="{{asset('front/images/NoPath - Copy (91).png')}}" alt="" />
            <div
              class="services-box-content"
              style="
                background-image: url('{{asset('front/images/noun-career-2170009.png')}}');
              "
            >
              <svg
                xmlns="http://www.w3.org/2000/svg"
                width="92"
                height="92"
                viewBox="0 0 92 92"
              >
                <g
                  id="Group_3483"
                  data-name="Group 3483"
                  transform="translate(-413 -2614)"
                >
                  <circle
                    id="Ellipse_801"
                    data-name="Ellipse 801"
                    cx="46"
                    cy="46"
                    r="46"
                    transform="translate(413 2614)"
                    fill="#4a8b8c"
                  />
                  <path
                    id="noun-career-2170009"
                    d="M141.475,33.6a10.458,10.458,0,0,0-10.153,9.067A8.05,8.05,0,0,0,126,50.328a7.924,7.924,0,0,0,7.739,8.055H138.9V75.9h-2.9a1.549,1.549,0,1,0,0,3.1h6V73.835h9.287V79h6a1.549,1.549,0,1,0,0-3.1h-2.9V58.383h5.159a8.062,8.062,0,0,0,0-16.111h-.006a7.511,7.511,0,0,0-.761.14,7.818,7.818,0,0,0-7.487-6.1h-.005a7.43,7.43,0,0,0-2.535.508,10.079,10.079,0,0,0-7.265-3.22Zm-.005,3.1h.005a7.06,7.06,0,0,1,5.635,2.875,1.547,1.547,0,0,0,2,.415,4.4,4.4,0,0,1,2.167-.579,4.7,4.7,0,0,1,4.53,3.882,7.782,7.782,0,0,0-2.408,2.133h0a1.549,1.549,0,1,0,2.49,1.841,4.732,4.732,0,0,1,1.97-1.54,1.522,1.522,0,0,0,.151-.071,4.373,4.373,0,0,1,1.526-.282,4.967,4.967,0,0,1,0,9.913h-5.154V51.63h0a1.548,1.548,0,1,0-3.1,0v3.654h-9.287V51.631h0a1.548,1.548,0,1,0-3.1,0v3.654h-5.164a4.786,4.786,0,0,1-4.643-4.956h0a4.879,4.879,0,0,1,3.848-4.91,4.36,4.36,0,0,1,3.117.586h0a1.549,1.549,0,1,0,1.623-2.638,7.516,7.516,0,0,0-3.173-1.076,7.294,7.294,0,0,1,6.965-5.593Zm.521,21.687h9.287v2.027h-9.287Zm0,5.124h9.287v2.066h-9.287Zm0,5.164h9.287v2.066h-9.287Z"
                    transform="translate(312.001 2603.403)"
                    fill="#fff"
                  />
                </g>
              </svg>

              <h2>School Career Fairs And Speaking Engagements</h2>
              <p>
                Middle schools, High schools, and colleges- we can organize
                and host a career fair at your school. Interested in
                scheduling speakers for your Career Day? Leave the planning to
                us! We offer school subscriptions for all access to our
                website, conferring with our career specialists, and managing
                career fairs and career days.
              </p>
            </div>
          </div>
          <div class="services-box col-md-6 col-sm-12 col-xs-12">
            <div class="text-134132">
              <h3>
                Where Will<br />
                Your <span>Journey</span><br />
                Take You?
              </h3>
              <a href="/contact_us">
                CONTACT US
                <svg
                  xmlns="http://www.w3.org/2000/svg"
                  width="32.166"
                  height="9.255"
                  viewBox="0 0 32.166 9.255"
                >
                  <g
                    id="arrow-up"
                    transform="translate(37.79 -10.123) rotate(90)"
                  >
                    <path
                      id="Path_7435"
                      data-name="Path 7435"
                      d="M17.536,7.875a.661.661,0,0,1,.661.661V38.057a.661.661,0,0,1-1.322,0V8.536A.661.661,0,0,1,17.536,7.875Z"
                      transform="translate(-2.785 -0.929)"
                      fill="#011627"
                      fill-rule="evenodd"
                    />
                    <path
                      id="Path_7436"
                      data-name="Path 7436"
                      d="M14.282,5.818a.661.661,0,0,1,.936,0l3.966,3.966a.662.662,0,1,1-.936.936l-3.5-3.5-3.5,3.5a.662.662,0,1,1-.936-.936l3.966-3.966Z"
                      transform="translate(0)"
                      fill="#011627"
                      fill-rule="evenodd"
                    />
                  </g>
                </svg>
              </a>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
 

    
@endsection
@section('script')
@endsection
