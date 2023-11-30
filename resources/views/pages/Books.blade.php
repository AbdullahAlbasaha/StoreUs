@extends('layout.app')
@section('title')
{{ $writer->name }}
@endsection
@section('content')
<header class="ex-header bg-gray">
    <div class="container px-4 sm:px-8 xl:px-4">

        <h1 class="xl:ml-24">Display ({{ $writer->name }}) Books</h1>
    </div> <!-- end of container -->
</header> <!-- end of ex-header -->
<!-- end of header -->

  <!-- Features -->
  <div id="features" class="cards-1 " style="margin-bottom: 29rem">
    <div class="container px-4 sm:px-8 xl:px-4">
        @forelse ($books as $book)
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
        @empty
        <h3  >Ooops..Writer Not Has Any Books</h3>
        @endforelse



    </div> <!-- end of container -->
</div> <!-- end of cards-1 -->
<!-- end of features -->
@endsection
