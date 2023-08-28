@extends('layouts.website.main')
@section('content')

<main class="main-content">
            <div
            class="modal fade"
            id="exampleModal"
            tabindex="-1"
            aria-labelledby="exampleModalLabel"
            aria-hidden="true"
            >
            <div class="modal-dialog modal-dialog-centered">
                <div class="modal-content">
                <iframe
                    src="https://www.youtube.com/embed/BHACKCNDMW8"
                    title="YouTube video player"
                    frameborder="0"
                    height="380"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                    allowfullscreen
                ></iframe>
                </div>
            </div>
            </div>
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
            <section class="blog-page-sec-1">
            <div class="container">
                <div class="blog-page-posts">
                <div class="row">
                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <img src="{{asset('front/images/blog-item-1.png')}}" alt="" />
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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
                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <img src="{{asset('front/images/blog-item-2.png')}}" alt="" />
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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
                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <img src="{{asset('front/images/blog-item-3.png')}}" alt="" />
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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

                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <img src="{{asset('front/images/blog-item-4.png')}}" alt="" />
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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
                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <a
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        class="blog-video-image"
                        >
                        <img src="{{asset('front/images/blog-item-5.png')}}" alt="" />
                        </a>
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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
                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <img src="{{asset('front/images/blog-item-3.png')}}" alt="" />
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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

                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <a
                        data-bs-toggle="modal"
                        data-bs-target="#exampleModal"
                        class="blog-video-image"
                        >
                        <img src="{{asset('front/images/blog-item-7.png')}}" alt="" />
                        </a>
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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
                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <img src="{{asset('front/images/blog-item-8.png')}}" alt="" />
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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
                    <div class="blog-p-item col-md-4 col-sm-12 col-xs-12">
                    <div class="b-img-d">
                        <img src="{{asset('front/images/blog-item-9.png')}}" alt="" />
                        <div class="custom-date-b">
                        <h5>09</h5>
                        <h6>JUL</h6>
                        </div>
                    </div>
                    <h2>Lorem ipsum dolor</h2>
                    <div class="tags">
                        <div class="marvalewis">
                        <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="22.667"
                            height="16.371"
                            viewBox="0 0 22.667 16.371"
                        >
                            <path
                            id="bxs-crown"
                            d="M27.167,3l-6.3,6.3L15.833,3,10.8,9.3,4.5,3V19.371H27.167Z"
                            transform="translate(-4.5 -3)"
                            fill="#d8d7c6"
                            ></path>
                        </svg>
                        Marvalewis
                        </div>
                        <div class="comments">
                        <svg
                            id="chat-square-fill"
                            xmlns="http://www.w3.org/2000/svg"
                            width="21.667"
                            height="20.764"
                            viewBox="0 0 21.667 20.764"
                        >
                            <path
                            id="Path_6644"
                            data-name="Path 6644"
                            d="M2.708,0A2.708,2.708,0,0,0,0,2.708V13.542A2.708,2.708,0,0,0,2.708,16.25H6.094a1.354,1.354,0,0,1,1.083.542l2.573,3.43a1.354,1.354,0,0,0,2.167,0l2.573-3.43a1.354,1.354,0,0,1,1.083-.542h3.385a2.708,2.708,0,0,0,2.708-2.708V2.708A2.708,2.708,0,0,0,18.959,0Z"
                            fill="#d8d7c6"
                            fill-rule="evenodd"
                            ></path>
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
                <div class="pagination">
                    <div class="row">
                    <div class="col-md-12 d-flex align-items-center">
                        <div class="left-arrow">
                        <a href="#">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="51"
                            height="50"
                            viewBox="0 0 51 50"
                            >
                            <g
                                id="Group_3479"
                                data-name="Group 3479"
                                transform="translate(-772 -2775)"
                            >
                                <ellipse
                                id="bg"
                                cx="25.5"
                                cy="25"
                                rx="25.5"
                                ry="25"
                                transform="translate(772 2775)"
                                fill="#011627"
                                />
                                <path
                                id="Path_61"
                                data-name="Path 61"
                                d="M10.212,8.236,2.261.285a.979.979,0,0,0-1.382,0L.293.871a.979.979,0,0,0,0,1.382L6.97,8.93.285,15.614A.98.98,0,0,0,.285,17l.586.585a.979.979,0,0,0,1.382,0l7.958-7.958a.986.986,0,0,0,0-1.387Z"
                                transform="translate(802.443 2808.87) rotate(180)"
                                fill="#fff"
                                />
                            </g>
                            </svg>
                        </a>
                        </div>
                        <ul class="numbers">
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        </ul>
                        <div class="right-arrow">
                        <a href="#">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="51"
                            height="50"
                            viewBox="0 0 51 50"
                            >
                            <g
                                id="Group_3479"
                                data-name="Group 3479"
                                transform="translate(-1026 -2775)"
                            >
                                <ellipse
                                id="bg"
                                cx="25.5"
                                cy="25"
                                rx="25.5"
                                ry="25"
                                transform="translate(1026 2775)"
                                fill="#4a8b8c"
                                />
                                <path
                                id="Path_61"
                                data-name="Path 61"
                                d="M111.69,8.236,103.739.285a.979.979,0,0,0-1.382,0l-.586.585a.979.979,0,0,0,0,1.382l6.677,6.677-6.684,6.684a.98.98,0,0,0,0,1.382l.586.585a.979.979,0,0,0,1.382,0l7.958-7.958a.986.986,0,0,0,0-1.387Z"
                                transform="translate(946.14 2791.003)"
                                fill="#fff"
                                />
                            </g>
                            </svg>
                        </a>
                        </div>
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
