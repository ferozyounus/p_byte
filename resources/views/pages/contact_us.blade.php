@extends('layouts.website.main')
@section('content')

<main class="main-content">
    <section
      class="single-page-banner"
      style="background-image: url('{{asset('front/images/contact-banner.png')}}')"
    >
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h1>Contact Us</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-page-sec-1">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <h4>Fill the form</h4>
            <h1>It's Easy</h1>
          </div>
        </div>
      </div>
    </section>
    <section class="contact-page-sec-2">
      <div class="container">
        <div class="row">
          <div class="col-md-12">
            <ul class="nav nav-tabs" id="easyTab" role="tablist">
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link active"
                  id="home-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#home"
                  type="button"
                  role="tab"
                  aria-controls="home"
                  aria-selected="true"
                >
                  career story / apply to<br />
                  become a mentor / apprentice
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="profile-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#profile"
                  type="button"
                  role="tab"
                  aria-controls="profile"
                  aria-selected="false"
                >
                  make suggestions<br />
                  to add any careers
                </button>
              </li>
              <li class="nav-item" role="presentation">
                <button
                  class="nav-link"
                  id="contact-tab"
                  data-bs-toggle="tab"
                  data-bs-target="#contact"
                  type="button"
                  role="tab"
                  aria-controls="contact"
                  aria-selected="false"
                >
                  request to speak to an agent<br />
                  about full-service options
                </button>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
              <div
                class="tab-pane fade show active"
                id="home"
                role="tabpanel"
                aria-labelledby="home-tab"
              >
                <form id="contact-custom-form" class="row g-4">
                  <div class="col-md-6">
                    <label for="inputName" class="form-label"
                      >First Name</label
                    >
                    <input
                      type="text"
                      class="form-control cus-input"
                      id="inputName"
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="inputLastName" class="form-label"
                      >Last Name</label
                    >
                    <input
                      type="text"
                      class="form-control cus-input"
                      id="inputLastName"
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="inputEmail4" class="form-label"
                      >Email Address</label
                    >
                    <input
                      type="email"
                      class="form-control cus-input"
                      id="inputEmail4"
                    />
                  </div>
                  <div class="col-md-6">
                    <label for="inputPhone" class="form-label"
                      >Phone Number</label
                    >
                    <input
                      type="tel"
                      class="form-control cus-input"
                      id="inputPhone"
                    />
                  </div>

                  <div class="col-md-12">
                    <h4>Submit For</h4>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio1"
                        value="Career Story"
                        checked=""
                      />
                      <label class="form-check-label" for="inlineRadio1"
                        >Career Story</label
                      >
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio2"
                        value="Become A Mentor"
                      />
                      <label class="form-check-label" for="inlineRadio2"
                        >Become A Mentor</label
                      >
                    </div>
                    <div class="form-check form-check-inline">
                      <input
                        class="form-check-input"
                        type="radio"
                        name="inlineRadioOptions"
                        id="inlineRadio3"
                        value="Apprentice"
                      />
                      <label class="form-check-label" for="inlineRadio3"
                        >Apprentice</label
                      >
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="inputCardholder" class="form-label"
                      >Upload Your CV</label
                    >
                    <div class="res-div">
                      <label
                        class="upload-resume"
                        style="border-color: rgb(160, 160, 160)"
                        ><input
                          type="file"
                          name="file2"
                          size="60"
                          accept=".pdf,.doc,.docx,jpg,.png,.jpeg"
                        />
                        <h3>
                          <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="44.682"
                            height="32.767"
                            viewBox="0 0 44.682 32.767"
                          >
                            <g
                              id="Group_1055"
                              data-name="Group 1055"
                              transform="translate(-8226 -1069.999)"
                            >
                              <path
                                id="Path_7429"
                                data-name="Path 7429"
                                d="M112.784,55.478h.046A10.432,10.432,0,0,1,123.256,65.9a1.49,1.49,0,0,0,1.489,1.489,4.468,4.468,0,0,1,0,8.936h-8.936a1.489,1.489,0,0,0,0,2.979h8.936a7.447,7.447,0,0,0,1.422-14.757A13.414,13.414,0,0,0,112.873,52.5h-.043a13.394,13.394,0,0,0-11.169,5.995,7.289,7.289,0,0,0-.746-.037,7.453,7.453,0,0,0-7.322,6.084,7.447,7.447,0,0,0,1.364,14.767h8.936a1.489,1.489,0,0,0,0-2.979H94.958a4.468,4.468,0,0,1,0-8.936A1.49,1.49,0,0,0,96.447,65.9a4.469,4.469,0,0,1,5.585-4.327,1.491,1.491,0,0,0,1.674-.719,10.429,10.429,0,0,1,9.078-5.38Z"
                                transform="translate(8138.489 1017.5)"
                                fill="#4a8b8c"
                                fill-rule="evenodd"
                              />
                              <path
                                id="Path_7430"
                                data-name="Path 7430"
                                d="M268.465,197.585v14.277a1.489,1.489,0,1,0,2.979,0V197.585L274.859,201a1.489,1.489,0,0,0,2.106-2.106l-5.958-5.958a1.487,1.487,0,0,0-2.106,0l-5.958,5.958A1.489,1.489,0,1,0,265.05,201Z"
                                transform="translate(7978.386 889.414)"
                                fill="#4a8b8c"
                                fill-rule="evenodd"
                              />
                            </g>
                          </svg>
                          Drag And Drop
                        </h3>
                        <h5>or <span>Browser Files</span></h5></label
                      >
                    </div>
                  </div>

                  <div class="col-md-12">
                    <label for="inputCardholder" class="form-label"
                      >Career Story / Additional Description</label
                    >
                    <textarea
                      name="brief"
                      id=""
                      cols="30"
                      rows="10"
                      class="form-control cus-textarea"
                    ></textarea>
                  </div>
                  <div class="col-md-12">
                    <button type="submit" class="btn btn-primary">
                      SUBMIT NOW
                    </button>
                  </div>
                </form>
              </div>
              <div
                class="tab-pane fade"
                id="profile"
                role="tabpanel"
                aria-labelledby="profile-tab"
              >
                ...
              </div>
              <div
                class="tab-pane fade"
                id="contact"
                role="tabpanel"
                aria-labelledby="contact-tab"
              >
                ...
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </main>
  

    
@endsection
@section('script')
@endsection
