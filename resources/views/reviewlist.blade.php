@extends('master.layout')
@section('content')
<main class="main" style="padding-top: 60px;">

    <div class="overlay-mf"></div>
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="review-mf">
                    <div id="contact" class="box-shadow-full">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="title-box-2">
                                    <h5 class="title-left" style="margin-top: 50px;">Reviews</h5>
                                    <div class="reviews-list">
                                        <div class="row">
                                            @foreach ($reviews as $index => $review)
                                                <div class="col-md-4">
                                                    <div class="review-item border p-3"> <!-- Added border and padding classes -->
                                                        <h2>{{ $review->restaurant_name }}</h2>
                                                        <p>"{{ $review->review }}"</p>
                                                        <p>Rating: {{ $review->rating }}</p>
                                                        <hr>
                                                    </div>
                                                </div>
                                                @if (($index + 1) % 3 == 0)
                                                    </div><div class="row">
                                                @endif
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
@endsection
