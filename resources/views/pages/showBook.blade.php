@extends('layout.app')
@section('title')
{{ $book->name }}
@endsection
@section('content')
  <!-- Header -->
  <header class="ex-header bg-gray">
    <div class="container px-4 sm:px-8 xl:px-4">
        <h1 class="xl:ml-24">{{ $book->name }}</h1>
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

<!-- Basic -->
<div class="ex-basic-1 py-12">
    <div class="container px-4 sm:px-8">
        <img class="inline mt-12 mb-4" src="https://img.freepik.com/free-photo/yellow-book-cover_1101-1118.jpg?4&w=740&t=st=1701282521~exp=1701283121~hmac=ae9d754952ad7ead1a2aea54a749ee673065a151be12bb3c7b17e4247bbce395" alt="alternative" />
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of basic -->

<!-- Basic -->
<div class="ex-basic-1 pt-4">
    <div class="container px-4 sm:px-8 xl:px-32">
        <p class="mb-4"> Are you looking for ways to grow the user base for your mobile application? Then you have arrived at the right place. Here you will find a curated collection of landing page HTML templates that will help you build an engaging online presentation for your mobile app and convince visitors to become loyal paying users.</p>
        <p class="mb-12"> All templates in the roundup are premium which means you need to pay for them but we're talking small amounts of money which won't break your bank account but will help authors make a living. In return you get a high quality, updated item together with high quality and very prompt technical support.</p>

        <h2 class="mb-4">Advantages of working with this template</h2>
        <p class="mb-4">Besides buying the template you need some basic web skills in order to customize it. Nothing too fancy HTML/CSS will do just fine and a little bit of image editing. You can always hire a web designer to help with the customization work while you provide the template and the content that is the most important.</p>
        <p class="mb-6">Riga is a landing page HTML template made with Tailwind CSS to help you showcase your mobile app online and persuade visitors to download it from the app stores. The author used Tailwind CSS to build the template and integrated a nice animated navigation that slides from outside the screen.</p>
    </div> <!-- end of container -->
</div> <!-- end of ex-basic-1 -->
<!-- end of basic -->

<!-- Cards -->
<div class="ex-cards-1 py-4">
    <div class="container px-4 sm:px-8">

    </div> <!-- end of container -->
</div> <!-- end of ex-cards-1 -->
<!-- end of cards -->



@stop
