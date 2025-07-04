@extends('layouts.app')

@section('title', 'About')

@section('content')

  <!-- About Section -->
    <section class="py-5 mt-5">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-5 mb-4 mb-lg-0">
                    <img src="{{ asset('assets/images/sathi.jpg') }}" alt="About Me" class="img-fluid rounded-circle">
                </div>
                <div class="col-lg-7">
                    <h2 class="display-5 mb-4">About Me</h2>
                    <p class="lead">I'm a passionate web developer with over 3 years of experience creating beautiful and functional websites.</p>
                    <p>My journey in web development began when I was studying computer science at university. Since then, I've worked with numerous clients from various industries, helping them establish their online presence.</p>
                    <p>I specialize in front-end development using modern technologies like HTML5, CSS3, JavaScript, and frameworks like Bootstrap and React. I also have experience with back-end technologies including Node.js and PHP.</p>
                    <div class="row mt-4">
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Name:</strong>Sathi Islam</li>
                                <li class="mb-2"><strong>Email:</strong> sathiislam783@gmail.com</li>
                                <li class="mb-2"><strong>Phone:</strong> 01937385141</li>
                            </ul>
                        </div>
                        <div class="col-md-6">
                            <ul class="list-unstyled">
                                <li class="mb-2"><strong>Experience:</strong> 2+ Years</li>
                                <li class="mb-2"><strong>Location:</strong> Dhaka, Bangladesh</li>
                                <li class="mb-2"><strong>Freelance:</strong> Available</li>
                            </ul>
                        </div>
                    </div>
                    <a href="contact.html" class="btn btn-primary mt-3">Contact Me</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Skills Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <h2 class="text-center mb-5">My Skills</h2>
            <div class="row">
                <div class="col-md-6 mb-4">
                    <h5>HTML5</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 95%">95%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>CSS3</h5>
                    <div class="progress">
                        <div class="progress-bar bg-success" style="width: 90%">90%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>JavaScript</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 85%">85%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Bootstrap</h5>
                    <div class="progress">
                        <div class="progress-bar bg-info" style="width: 90%">90%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>React</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 80%">80%</div>
                    </div>
                </div>
                <div class="col-md-6 mb-4">
                    <h5>Node.js</h5>
                    <div class="progress">
                        <div class="progress-bar bg-warning" style="width: 75%">75%</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    @endsection
