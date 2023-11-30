@extends('layout.app')
@section('title')
Home
@endsection
@section('content')
        <!-- Header -->
        <header id="header" class="header py-28 text-center md:pt-36 lg:text-left xl:pt-44 xl:pb-32">
            <div class="container px-4 sm:px-8 lg:grid lg:grid-cols-2 lg:gap-x-8">


            </div> <!-- end of container -->
        </header> <!-- end of header -->
        <!-- end of header -->


        <!-- Introduction -->
        <div class="pt-4 pb-14 text-center">
            <div class="container px-4 sm:px-8 xl:px-4">
                <p class="mb-4 text-gray-800 text-3xl leading-10 lg:max-w-5xl lg:mx-auto">Our Books    </div> <!-- end of container -->
        </div>
        <!-- end of introduction -->


        <!-- Features -->
        <div id="features" class="cards-1">
            <div class="container px-4 sm:px-8 xl:px-4">
                @foreach ($books as $book)
                      <!-- Card -->
                <div class="card">
                    <div class="card-image">
                        <img src="{{ asset('images/book-4986.svg') }}" alt="alternative" />
                    </div>
                    <div class="card-body">
                        <a href="{{ route('showBook',$book) }}">
                            <h5 class="card-title">{{ $book->name }}</h5>
                        {{-- <p class="mb-4 ">by:{{ $book->writer->name }}</p> --}}
                        </a>
                    </div>
                </div>
                <!-- end of card -->
                @endforeach



            </div> <!-- end of container -->
        </div> <!-- end of cards-1 -->
        <!-- end of features -->


        <!-- Statistics -->
        <div class="counter">
            <div class="container px-4 sm:px-8">


            </div> <!-- end of container -->
        </div> <!-- end of counter -->
        <!-- end of statistics -->


        <!-- Testimonials -->
        <div class="slider-1 py-32 bg-gray">
            <div class="container px-4 sm:px-8">
                <h2 class="mb-12 text-center lg:max-w-xl lg:mx-auto">Writers</h2>

                <!-- Card Slider -->
                <div class="slider-container">
                    <div class="swiper-container card-slider">
                        <div class="swiper-wrapper">
                            @foreach ($writers as $writer)
                            <!-- Slide -->
                            <div class="swiper-slide">
                                <div class="card">
                                    <img class="card-image" src="{{ asset('images/testimonial-1.jpg') }}" alt="alternative" />
                                    <div class="card-body">

                                        <p class="testimonial-author">{{ $writer->name }}</p>
                                        <a href="{{ route('writerBooks',$writer) }}">
                                            <p class="mb-4 ">Show Books</p>
                                        </a>

                                    </div>
                                </div>
                            </div> <!-- end of swiper-slide -->
                            <!-- end of slide -->
                            @endforeach



                        </div> <!-- end of swiper-wrapper -->

                        <!-- Add Arrows -->
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                        <!-- end of add arrows -->

                    </div> <!-- end of swiper-container -->
                </div> <!-- end of slider-container -->
                <!-- end of card slider -->

            </div>
             <!-- end of container -->
        </div> <!-- end of slider-1 -->
        <!-- end of testimonials -->


        <!-- Pricing -->
        <div id="pricing" class="cards-2">
            <div class="absolute bottom-0 h-40 w-full bg-white"></div>
            <div class="container px-4 pb-px sm:px-8">
                <h2 class="mb-2.5 text-white lg:max-w-xl lg:mx-auto">Articles</h2>

                @foreach ($articles as $article)
                <!-- Card-->
                <div class="card">
                    <div class="card-body">
                        <div class="card-title">    {{ Str::limit($article->name, 10) }}</div>
                        <div class="price"><span class="value">{{ $article->wordCount }}</span><span>words</span></div>
                        @if ($article->status == 'unpublished')
                        <div class="button-wrapper">
                            <a class="btn-solid-reg page-scroll" href="#download">Publish Article</a>
                        </div>
                        @endif
                    </div>
                </div> <!-- end of card -->
                @endforeach
                <!-- end of card -->

            </div> <!-- end of container -->
        </div> <!-- end of cards-2 -->
        <!-- end of pricing -->



@endsection
