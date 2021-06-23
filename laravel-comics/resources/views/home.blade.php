@extends('layouts.app')

@section('main')
<main>
  <section class="container-fluid bg-gray">

    <div class="container-center card-container">

      @foreach ($comics as $index => $comic)
        <div class="card pt-50">
          <a href="{{ route('detail', ['id' => $index]) }}">
            <img class="cover" src="{{ $comic['thumb'] }}" alt="thumb">
          </a>
          <h4 class="upper title pt-20"><a href="#">{{ $comic['series'] }}</a></h4>
        </div>
      @endforeach
    </div>
    
    <div class="button-container container-fluid">
      <button class="button button1">
        <a class="upper" href="#">load more</a>
      </button>
    </div>
  </section>
</main>
@endsection