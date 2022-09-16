@extends('layouts.front')
@section('content')
    <section class="home" id="home">
        <div class="home-container container grid">
        </div>
    </section>
    <section class="story section container">
        <div class="story-container grid">
            <div class="story-data">
                <h1 class="story-title">
                    Enjoy learning without any pressure
                </h1>

                <p class="story-description">
                    Learn make something with real world project that help you increase creativity
                </p>
                <a href="#course" class="button btn-small">Discover</a>
            </div>
            <div class="story-images">
                <figure class="hero-banner">
                    <div class="img-holder one" style="--width: 270; --height: 300;">
                        <img src="./assets/images/hero-banner-1.jpg" width="270" height="300" alt="hero banner"
                            class="img-cover">
                    </div>

                    <div class="img-holder two" style="--width: 240; --height: 300;">
                        <img src="./assets/images/hero-banner-2.jpg" width="240" height="370" alt="hero banner"
                            class="img-cover">
                    </div>

                </figure>

            </div>
        </div>
    </section>

    <section class="testimonial section container">
                <h2 class="section-title">Resources</h2>
        <div class="testimonial grid">
            <div class="swiper testimonial-swipper">
                <div class="swiper-wrapper">
                           <div class="testimonial-card swiper-slide" style="text-align: center;">
                <p class="testimonial-description">
                 ipsum dolor sit amet consectetur adipisicing elit. In,
                  labore reiciendis laboriosam quos at eum, sed sequi tempore
                  perspiciatis magnam iste quas sit minima provident!
                </p>
                <h3 class="testimonial-date">March 27, 2021</h3>

                <div class="testimonial-profile" style="justify-content: center;flex-direction: column;row-gap: 1.4rem;">

                </div>
              </div>


                </div>

                <div class="swiper-button-next" style="right: 30%;left: initial;top:initial;bottom: 3rem;">
                    <i class="bx bx-right-arrow-alt"></i>
                </div>
                <div class="swiper-button-prev" style="right: initial;left: 30%;top:initial;bottom: 3rem;">
                    <i class="bx bx-left-arrow-alt"></i>
                </div>
            </div>
    </section>

    <section class="newsletter section container">
        <div class="newsletter-bg grid">
            <div>
                <h2 class="newsletter-title">
                    Subscribe Our <br />
                    Newsletter
                </h2>
                <p class="newsletter-description">
                    Be the first to know the new course and discount.
                </p>
            </div>

            <form action="" class="newsletter-subscribe">
                <input type="email" placeholder="Enter your email" class="newsletter-input" />
                <button class="button">BUTTON</button>
            </form>
        </div>
    </section>
@endsection
