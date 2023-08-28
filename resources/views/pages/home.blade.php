@extends('layouts.website.main')



@section('content')

<main class="main-content">


    <section id="content">

        <div id="logo" class="px-3 mb-5">
            <img src="{{asset('imagess/pibytelogo.png')}}" alt="Logo">
        </div>


    <!-- <section class="banner-section">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Where Will This Journey Take You?</h1>
                    <a href="/careers">Start Exploring Careers</a>
                </div>
            </div>
        </div>
    </section>
    <section class="banner-tagline-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-7 col-sm-12 col-xs-12">
                    <h3>Personalized career exploration?</h3>
                </div>
                <div class="col-md-5 col-sm-12 col-xs-12">
                    <h4>Need some assistance?</h4>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="home-sec-2">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="left-sec">
                        <img src="{{asset('front/images/left-image.png')}}" alt="" class="video-sec-main-img" />
                        <div class="video-sec">
                            <img src="{{asset('front/images/video-img.png')}}" alt="" data-bs-toggle="modal"
                                data-bs-target="#exampleModal" class="video-image" />
                            <img src="{{asset('front/images/Rectangle 338.png')}}" alt="" class="border-img" />
                            
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog modal-dialog-centered">
                                    <div class="modal-content">
                                        <iframe src="https://www.youtube.com/embed/BHACKCNDMW8"
                                            title="YouTube video player" frameborder="0" height="380"
                                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                            allowfullscreen></iframe>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <div class="right-sec">
                        <img src="{{asset('front/images/whowearei.png')}}" alt="" />
                        <h1>Who We Are</h1>
                        <p>
                            We started Love Every Monday because we wanted to put an end
                            to living only for the weekends. We offer a personalized
                            career exploration experience to help you with discovering a
                            career that's right for you. Click below to find out more
                            about us.
                        </p>
                        <a href="/aboutus">About Us</a>
                    </div>
                </div>
            </div>
            <div class="custom-list-sec">
                <div class="row">
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h4>Self</h4>
                        <h2>Exploration</h2>
                        <div class="custom-box box-1">
                            <img src="{{asset('front/images/service.png')}}" alt="" />
                            <div class="img-box-c c1">
                                <p>
                                    Explore hundreds of careers. Take career and personality
                                    assessments. Read and watch videos of people's personal
                                    career stories. Personalize your search by using one of
                                    our many filters.
                                    <span>We offer both free and subscription options.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h4>Expert</h4>
                        <h2>Career Assistance</h2>
                        <div class="custom-box box-2">
                            <img src="{{asset('front/images/service2.png')}}" alt="" />
                            <div class="img-box-c c2">
                                <p>
                                    Our career experts can help if you require further
                                    guidance and assistance. Please see all of our services
                                    below.
                                    <span>Additional fees for these services apply.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-12 col-xs-12">
                        <h4>Outstanding</h4>
                        <h2>Customer Support</h2>
                        <div class="custom-box box-3">
                            <img src="{{asset('front/images/service3.png')}}" alt="" />
                            <div class="img-box-c c3">
                                <p>
                                    Our friendly customer support agents are here to assist
                                    you with any questions. <span>Contact us today.</span>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="home-sec-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h1>Premier Services</h1>
                    <ul>
                        <li>
                            <p>Personalized career guidance and assistance.</p>
                        </li>
                        <li>
                            <p>
                                Expert advice for course selections and extracurricular
                                activities related to career interests.
                            </p>
                        </li>
                        <li>
                            <p>
                                Information about colleges, technical schools, and trade
                                schools specializing in specific careers.
                            </p>
                        </li>
                        <li>
                            <p>
                                Expert advice for course selections and extracurricular
                                activities related to career interests.
                            </p>
                        </li>
                        <li>
                            <p>
                                Matching you with career mentors, job shadowing
                                opportunities, internships, and apprenticeships.
                            </p>
                        </li>
                        <li>
                            <p>
                                Assistance with applications for schools, financial aid, and
                                scholarships.
                            </p>
                        </li>
                        <li>
                            <p>
                                School subscriptions for all access to our website,
                                conferring with our career specialists, and managing career
                                fairs and career days.
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">&nbsp;</div>
            </div>
        </div>
    </section> -->
    <!-- <section class="home-sec-4">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6 col-sm-12 col-xs-12 custom-img-we">
                    <img src="{{asset('front/images/what-we-do.png')}}" alt="" />
                </div>
                <div class="col-md-6 col-sm-12 col-xs-12">
                    <h1>What We Do</h1>
                    <div class="text-box-cus">
                        <p>
                            We offer personalized career exploration services. Self
                            navigate our website for free or subscribe for an ad free,
                            full access experience.
                        </p>
                    </div>
                    <div class="text-box-cus">
                        <p>
                            Contact us to find out more about our premier services for
                            further career guidance and assistance.
                        </p>
                    </div>
                    <div class="text-box-cus">
                        <p>
                            We have separate subscriptions available for schools and
                            organizations. Contact us to find out more!
                        </p>
                    </div>
                    <a href="/contact_us">Premier Services Contact </a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="home-sec-5">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog And Podcast</h1>
                    <div class="blogs-list">
                        <div class="row">
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="blog-item">
                                    <img src="{{asset('front/images/blog-item-1.png')}}" alt="" />
                                    <h2>Lorem ipsum dolor</h2>
                                    <div class="tags">
                                        <div class="marvalewis">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.667" height="16.371"
                                                viewBox="0 0 22.667 16.371">
                                                <path id="bxs-crown"
                                                    d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                                                    transform="translate(-4.5 -3)" fill="#d8d7c6" />
                                            </svg>
                                            Marvalewis
                                        </div>
                                        <div class="comments">
                                            <svg id="chat-square-fill" xmlns="http://www.w3.org/2000/svg" width="21.667"
                                                height="20.764" viewBox="0 0 21.667 20.764">
                                                <path id="Path_6644" data-name="Path 6644"
                                                    d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                                                    fill="#d8d7c6" fill-rule="evenodd" />
                                            </svg>
                                            0 comments
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit aonsetetur sy eirnvidunt ut labore
                                        eaccusam justo duo dolores et ea rebum.
                                    </p>
                                    <a href="#">READ MORE</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="blog-item">
                                    <img src="{{asset('front/images/blog-item-2.png')}}" alt="" />
                                    <h2>Lorem ipsum dolor</h2>
                                    <div class="tags">
                                        <div class="marvalewis">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.667" height="16.371"
                                                viewBox="0 0 22.667 16.371">
                                                <path id="bxs-crown"
                                                    d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                                                    transform="translate(-4.5 -3)" fill="#d8d7c6" />
                                            </svg>
                                            Marvalewis
                                        </div>
                                        <div class="comments">
                                            <svg id="chat-square-fill" xmlns="http://www.w3.org/2000/svg" width="21.667"
                                                height="20.764" viewBox="0 0 21.667 20.764">
                                                <path id="Path_6644" data-name="Path 6644"
                                                    d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                                                    fill="#d8d7c6" fill-rule="evenodd" />
                                            </svg>
                                            0 comments
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit aonsetetur sy eirnvidunt ut labore
                                        eaccusam justo duo dolores et ea rebum.
                                    </p>
                                    <a href="#">READ MORE</a>
                                </div>
                            </div>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="blog-item">
                                    <img src="{{asset('front/images/blog-item-3.png')}}" alt="" />
                                    <h2>Lorem ipsum dolor</h2>
                                    <div class="tags">
                                        <div class="marvalewis">
                                            <svg xmlns="http://www.w3.org/2000/svg" width="22.667" height="16.371"
                                                viewBox="0 0 22.667 16.371">
                                                <path id="bxs-crown"
                                                    d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                                                    transform="translate(-4.5 -3)" fill="#d8d7c6" />
                                            </svg>
                                            Marvalewis
                                        </div>
                                        <div class="comments">
                                            <svg id="chat-square-fill" xmlns="http://www.w3.org/2000/svg" width="21.667"
                                                height="20.764" viewBox="0 0 21.667 20.764">
                                                <path id="Path_6644" data-name="Path 6644"
                                                    d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                                                    fill="#d8d7c6" fill-rule="evenodd" />
                                            </svg>
                                            0 comments
                                        </div>
                                    </div>
                                    <p>
                                        Lorem ipsum dolor sit aonsetetur sy eirnvidunt ut labore
                                        eaccusam justo duo dolores et ea rebum.
                                    </p>
                                    <a href="#">READ MORE</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <a href="" class="view-more-btn">View more Blogs</a>
                </div>
            </div>
        </div>
    </section> -->
    <!-- <section class="home-sec-6">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Donate</h1>
                    <p>
                        We want our full access website subscription plan and premier
                        services to be available for all, despite their ability to pay.
                        <br /><br />
                        <sapn>Would you please consider a donation?</sapn> Donations are
                        available for our full access website subscription, premier
                        services, scholarships for schools, or a general donation.
                        <br />
                        Any donation amount is appreciated.
                    </p>
                    <h2>
                        Thank you for your
                        <span class="custom-b-se">
                            <span class="custom-b-se1">generosity</span>
                            <img src="{{asset('front/images/Ellipse 7.png')}}" alt="" /></span>
                    </h2>
                    <a href="/contact_us">donate now</a>
                </div>
            </div>
        </div>
    </section> -->


        <section class="container" id="home">

            <div class="page-form mb-5">
                <h1>Search Evasion Techniques</h1>

                <p class="accent mt-3">Names, Techniques, Definitions, Keywords</p>

                <form method="GET" class="mt-4" action="/search/">
                    <div class="custom-file">
                        <input type="text" name="keyword" placeholder="Please enter a keyword, definition, rss etc..."
                            class="form-control" maxlength="100" minlength="2" required="" id="id_keyword">
                    </div>



                    <div class="text-center mt-3 buttons-min-width-200">
                        <button id="do-search" type="submit" class="btn btn-dark"><i class="fas fa-arrow-right"
                                aria-hidden="true"></i> Search</button>
                        <a href="#" id="btn-rand" class="btn btn-outline-default"><i
                                class="fas fa-question" aria-hidden="true"></i> I'm Feeling Lucky</a>
                    </div>
                </form>
            </div>

            <div class="darker rounded-16 p-3 mb-4">
                <div class="row">
                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <a href="#" class="card-counter pink">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M173.2 0c-1.8 0-3.5 .7-4.8 2C138.5 32.3 120 74 120 120c0 26.2 6 50.9 16.6 73c-22 2.4-43.8 9.1-64.2 20.5C37.9 232.8 13.3 262.4 .4 296c-.7 1.7-.5 3.7 .5 5.2c2.2 3.7 7.4 4.3 10.6 1.3C64.2 254.3 158 245.1 205 324s-8.1 153.1-77.6 173.2c-4.2 1.2-6.3 5.9-4.1 9.6c1 1.6 2.6 2.7 4.5 3c36.5 5.9 75.2 .1 109.7-19.2c20.4-11.4 37.4-26.5 50.5-43.8c13.1 17.3 30.1 32.4 50.5 43.8c34.5 19.3 73.3 25.2 109.7 19.2c1.9-.3 3.5-1.4 4.5-3c2.2-3.7 .1-8.4-4.1-9.6C379.1 477.1 324 403 371 324s140.7-69.8 193.5-21.4c3.2 2.9 8.4 2.3 10.6-1.3c1-1.6 1.1-3.5 .5-5.2c-12.9-33.6-37.5-63.2-72.1-82.5c-20.4-11.4-42.2-18.1-64.2-20.5C450 170.9 456 146.2 456 120c0-46-18.5-87.7-48.4-118c-1.3-1.3-3-2-4.8-2c-5 0-8.4 5.2-6.7 9.9C421.7 80.5 385.6 176 288 176S154.3 80.5 179.9 9.9c1.7-4.7-1.6-9.9-6.7-9.9zM240 272a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM181.7 417.6c6.3-11.8 9.8-25.1 8.6-39.8c-19.5-18-34-41.4-41.2-67.8c-12.5-8.1-26.2-11.8-40-12.4c-9-.4-18.1 .6-27.1 2.7c7.8 57.1 38.7 106.8 82.9 139.4c6.8-6.7 12.6-14.1 16.8-22.1zM288 64c-28.8 0-56.3 5.9-81.2 16.5c2 8.3 5 16.2 9 23.5c6.8 12.4 16.7 23.1 30.1 30.3c13.3-4.1 27.5-6.3 42.2-6.3s28.8 2.2 42.2 6.3c13.4-7.2 23.3-17.9 30.1-30.3c4-7.3 7-15.2 9-23.5C344.3 69.9 316.8 64 288 64zM426.9 310c-7.2 26.4-21.7 49.7-41.2 67.8c-1.2 14.7 2.2 28.1 8.6 39.8c4.3 8 10 15.4 16.8 22.1c44.3-32.6 75.2-82.3 82.9-139.4c-9-2.2-18.1-3.1-27.1-2.7c-13.8 .6-27.5 4.4-40 12.4z" />
                            </svg>

                            <span class="count-numbers">337</span>
                            <span class="count-name">Techniques</span>
                        </a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <a href="#" class="card-counter">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M502.285 159.704l-234-156c-7.987-4.915-16.511-4.96-24.571 0l-234 156C3.714 163.703 0 170.847 0 177.989v155.999c0 7.143 3.714 14.286 9.715 18.286l234 156.022c7.987 4.915 16.511 4.96 24.571 0l234-156.022c6-3.999 9.715-11.143 9.715-18.286V177.989c-.001-7.142-3.715-14.286-9.716-18.285zM278 63.131l172.286 114.858-76.857 51.429L278 165.703V63.131zm-44 0v102.572l-95.429 63.715-76.857-51.429L234 63.131zM44 219.132l55.143 36.857L44 292.846v-73.714zm190 229.715L61.714 333.989l76.857-51.429L234 346.275v102.572zm22-140.858l-77.715-52 77.715-52 77.715 52-77.715 52zm22 140.858V346.275l95.429-63.715 76.857 51.429L278 448.847zm190-156.001l-55.143-36.857L468 219.132v73.714z" />
                            </svg>

                            <span class="count-numbers">200</span>
                            <span class="count-name">Code Snippets</span>
                        </a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <a href="#" class="card-counter green">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M173.2 0c-1.8 0-3.5 .7-4.8 2C138.5 32.3 120 74 120 120c0 26.2 6 50.9 16.6 73c-22 2.4-43.8 9.1-64.2 20.5C37.9 232.8 13.3 262.4 .4 296c-.7 1.7-.5 3.7 .5 5.2c2.2 3.7 7.4 4.3 10.6 1.3C64.2 254.3 158 245.1 205 324s-8.1 153.1-77.6 173.2c-4.2 1.2-6.3 5.9-4.1 9.6c1 1.6 2.6 2.7 4.5 3c36.5 5.9 75.2 .1 109.7-19.2c20.4-11.4 37.4-26.5 50.5-43.8c13.1 17.3 30.1 32.4 50.5 43.8c34.5 19.3 73.3 25.2 109.7 19.2c1.9-.3 3.5-1.4 4.5-3c2.2-3.7 .1-8.4-4.1-9.6C379.1 477.1 324 403 371 324s140.7-69.8 193.5-21.4c3.2 2.9 8.4 2.3 10.6-1.3c1-1.6 1.1-3.5 .5-5.2c-12.9-33.6-37.5-63.2-72.1-82.5c-20.4-11.4-42.2-18.1-64.2-20.5C450 170.9 456 146.2 456 120c0-46-18.5-87.7-48.4-118c-1.3-1.3-3-2-4.8-2c-5 0-8.4 5.2-6.7 9.9C421.7 80.5 385.6 176 288 176S154.3 80.5 179.9 9.9c1.7-4.7-1.6-9.9-6.7-9.9zM240 272a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM181.7 417.6c6.3-11.8 9.8-25.1 8.6-39.8c-19.5-18-34-41.4-41.2-67.8c-12.5-8.1-26.2-11.8-40-12.4c-9-.4-18.1 .6-27.1 2.7c7.8 57.1 38.7 106.8 82.9 139.4c6.8-6.7 12.6-14.1 16.8-22.1zM288 64c-28.8 0-56.3 5.9-81.2 16.5c2 8.3 5 16.2 9 23.5c6.8 12.4 16.7 23.1 30.1 30.3c13.3-4.1 27.5-6.3 42.2-6.3s28.8 2.2 42.2 6.3c13.4-7.2 23.3-17.9 30.1-30.3c4-7.3 7-15.2 9-23.5C344.3 69.9 316.8 64 288 64zM426.9 310c-7.2 26.4-21.7 49.7-41.2 67.8c-1.2 14.7 2.2 28.1 8.6 39.8c4.3 8 10 15.4 16.8 22.1c44.3-32.6 75.2-82.3 82.9-139.4c-9-2.2-18.1-3.1-27.1-2.7c-13.8 .6-27.5 4.4-40 12.4z" />
                            </svg>

                            <span class="count-numbers">131</span>
                            <span class="count-name">Detection Rules</span>
                        </a>
                    </div>

                    <div class="col-12 col-sm-12 col-md-6 col-lg-3 col-xl-3">
                        <a href="#" class="card-counter orange">
                            <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 512 512">
                                <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                                <path
                                    d="M269.4 2.9C265.2 1 260.7 0 256 0s-9.2 1-13.4 2.9L54.3 82.8c-22 9.3-38.4 31-38.3 57.2c.5 99.2 41.3 280.7 213.6 363.2c16.7 8 36.1 8 52.8 0C454.7 420.7 495.5 239.2 496 140c.1-26.2-16.3-47.9-38.3-57.2L269.4 2.9zM144 221.3c0-33.8 27.4-61.3 61.3-61.3c16.2 0 31.8 6.5 43.3 17.9l7.4 7.4 7.4-7.4c11.5-11.5 27.1-17.9 43.3-17.9c33.8 0 61.3 27.4 61.3 61.3c0 16.2-6.5 31.8-17.9 43.3l-82.7 82.7c-6.2 6.2-16.4 6.2-22.6 0l-82.7-82.7c-11.5-11.5-17.9-27.1-17.9-43.3z" />
                            </svg>

                            <span class="count-numbers">25</span>
                            <span class="count-name">Contributors</span>
                        </a>
                    </div>
                </div>
            </div>

            <div class="card">
                <h5 class="card-header">
                    <svg xmlns="http://www.w3.org/2000/svg" height="1em" viewBox="0 0 576 512">
                        <!--! Font Awesome Free 6.4.2 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2023 Fonticons, Inc. -->
                        <path
                            d="M173.2 0c-1.8 0-3.5 .7-4.8 2C138.5 32.3 120 74 120 120c0 26.2 6 50.9 16.6 73c-22 2.4-43.8 9.1-64.2 20.5C37.9 232.8 13.3 262.4 .4 296c-.7 1.7-.5 3.7 .5 5.2c2.2 3.7 7.4 4.3 10.6 1.3C64.2 254.3 158 245.1 205 324s-8.1 153.1-77.6 173.2c-4.2 1.2-6.3 5.9-4.1 9.6c1 1.6 2.6 2.7 4.5 3c36.5 5.9 75.2 .1 109.7-19.2c20.4-11.4 37.4-26.5 50.5-43.8c13.1 17.3 30.1 32.4 50.5 43.8c34.5 19.3 73.3 25.2 109.7 19.2c1.9-.3 3.5-1.4 4.5-3c2.2-3.7 .1-8.4-4.1-9.6C379.1 477.1 324 403 371 324s140.7-69.8 193.5-21.4c3.2 2.9 8.4 2.3 10.6-1.3c1-1.6 1.1-3.5 .5-5.2c-12.9-33.6-37.5-63.2-72.1-82.5c-20.4-11.4-42.2-18.1-64.2-20.5C450 170.9 456 146.2 456 120c0-46-18.5-87.7-48.4-118c-1.3-1.3-3-2-4.8-2c-5 0-8.4 5.2-6.7 9.9C421.7 80.5 385.6 176 288 176S154.3 80.5 179.9 9.9c1.7-4.7-1.6-9.9-6.7-9.9zM240 272a48 48 0 1 1 96 0 48 48 0 1 1 -96 0zM181.7 417.6c6.3-11.8 9.8-25.1 8.6-39.8c-19.5-18-34-41.4-41.2-67.8c-12.5-8.1-26.2-11.8-40-12.4c-9-.4-18.1 .6-27.1 2.7c7.8 57.1 38.7 106.8 82.9 139.4c6.8-6.7 12.6-14.1 16.8-22.1zM288 64c-28.8 0-56.3 5.9-81.2 16.5c2 8.3 5 16.2 9 23.5c6.8 12.4 16.7 23.1 30.1 30.3c13.3-4.1 27.5-6.3 42.2-6.3s28.8 2.2 42.2 6.3c13.4-7.2 23.3-17.9 30.1-30.3c4-7.3 7-15.2 9-23.5C344.3 69.9 316.8 64 288 64zM426.9 310c-7.2 26.4-21.7 49.7-41.2 67.8c-1.2 14.7 2.2 28.1 8.6 39.8c4.3 8 10 15.4 16.8 22.1c44.3-32.6 75.2-82.3 82.9-139.4c-9-2.2-18.1-3.1-27.1-2.7c-13.8 .6-27.5 4.4-40 12.4z" />
                    </svg>
                    Latest Techniques
                </h5>

                <div class="card-body">



                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th scope="col" class="text-center">Technique Name</th>
                                    <th scope="col" class="text-center">Technique ID's</th>




                                    <th scope="col" class="text-center">Has Snippet(s)</th>



                                    <th scope="col" class="text-center">Has Rules(s)</th>



                                </tr>
                            </thead>

                            <tbody>

                                <tr>
                                    <td class="align-middle"><a
                                            href="#">Right-to-Left
                                            Override (RLO) Extension Spoofing</a></td>

                                    <td class="align-middle text-center">





                                        <a href="#" class="badge badge-primary">U1010</a>



                                    </td>




                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-check-double greenify"></i>

                                    </td>



                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-xmark opacify"></i>

                                    </td>



                                </tr>

                                <tr>
                                    <td class="align-middle"><a href="#">DLL Unhooking</a></td>

                                    <td class="align-middle text-center">





                                        <a href="#" class="badge badge-primary">U0522</a>



                                    </td>




                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-check-double greenify"></i>

                                    </td>



                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-xmark opacify"></i>

                                    </td>



                                </tr>

                                <tr>
                                    <td class="align-middle"><a href="#">Shikata Ga Nai
                                            (SGN)</a></td>

                                    <td class="align-middle text-center">





                                        <a href="#" class="badge badge-primary">U0708</a>



                                    </td>




                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-check-double greenify"></i>

                                    </td>



                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-check-double greenify"></i>

                                    </td>



                                </tr>

                                <tr>
                                    <td class="align-middle"><a href="#">C2 via FTP(S)</a></td>

                                    <td class="align-middle text-center">





                                        <a href="#" class="badge badge-primary">U0910</a>



                                    </td>




                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-check-double greenify"></i>

                                    </td>



                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-xmark opacify"></i>

                                    </td>



                                </tr>

                                <tr>
                                    <td class="align-middle"><a href="#">Evasion
                                            using direct Syscalls</a></td>

                                    <td class="align-middle text-center">





                                        <a href="#" class="badge badge-primary">U0521</a>



                                    </td>




                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-check-double greenify"></i>

                                    </td>



                                    <td class="align-middle text-center">

                                        <i class="fa-solid fa-xmark opacify"></i>

                                    </td>



                                </tr>

                            </tbody>
                        </table>
                    </div>

                </div>

                <div class="card-footer p-3">
                    <a href="#" class="btn btn-outline-default"><i class="fa-solid fa-plus"></i> More</a>
                </div>
            </div>

            <div class="row mt-5">
                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6 mb-5">
                    <div class="card">
                        <h5 class="card-header">
                            Latest Code Snippets
                        </h5>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">


                                    <tbody>

                                        <tr>
                                            <td class="align-middle"><a
                                                    href="#">Right-to-Left
                                                    Override (RLO) Extension Spoofing</a></td>
                                            <td class="align-middle text-center">
                                                <a href="#">PowerShell</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a
                                                    href="#">Virtualization/Sandbox
                                                    Evasion: Time Based Evasion</a></td>
                                            <td class="align-middle text-center">
                                                <a href="#">Golang</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a href="#">DLL
                                                    Unhooking</a></td>
                                            <td class="align-middle text-center">
                                                <a href="#">C++</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a href="#">Shikata
                                                    Ga Nai (SGN)</a></td>
                                            <td class="align-middle text-center">
                                                <a href="#">bash</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a href="#">Process
                                                    Reimaging</a></td>
                                            <td class="align-middle text-center">
                                                <a href="#">C++</a>
                                            </td>




                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer p-3">
                            <a href="#" class="btn btn-outline-default"><i class="fa-solid fa-plus"></i>
                                More</a>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-sm-12 col-md-12 col-lg-6 col-xl-6">
                    <div class="card">
                        <h5 class="card-header">
                            Latest Detection Rules
                        </h5>

                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-striped">


                                    <tbody>

                                        <tr>
                                            <td class="align-middle"><a
                                                    href="#">Hunting_Rule_ShikataGaNai</a>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="#">YARA</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a
                                                    href="#">CAPA_Unhook-FreeLibrary</a>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="#">CAPA</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a
                                                    href="#">YARA_Detect_createthreadpoolwait</a>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="#">YARA</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a
                                                    href="#">YARA_Detect_XOR</a></td>

                                            <td class="align-middle text-center">
                                                <a href="#">YARA</a>
                                            </td>




                                        </tr>

                                        <tr>
                                            <td class="align-middle"><a
                                                    href="#">YARA_Detect_ShortcutHiding</a>
                                            </td>

                                            <td class="align-middle text-center">
                                                <a href="#">YARA</a>
                                            </td>




                                        </tr>

                                    </tbody>
                                </table>
                            </div>
                        </div>

                        <div class="card-footer p-3">
                            <a href="#" class="btn btn-outline-default"><i class="fa-solid fa-plus"></i>
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </section>
</main>




@endsection

@section('script')


@endsection