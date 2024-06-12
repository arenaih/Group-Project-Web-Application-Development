@extends('master.layout')

@section('content')
<!-- Reviews Section -->
<main class="main" style="padding-top: 60px;">
<section id="reviews" class="review section">

  <!-- Section Title -->
  <div class="container section-title" data-aos="fade-up">
    <h2>Restaurant Reviews</h2>
    <p>Read reviews and shared experience</p>
  </div><!-- End Section Title -->

  <div class="container" data-aos="fade-up" data-aos-delay="100">

    <form action="{{ route('reviews.index') }}" method="get" class="php-email-form" data-aos="fade-up" data-aos-delay="200">
      <div class="row gy-4">
        <div class="col-md-12">
          <label for="restaurant">Select Restaurant</label>
          <select name="restaurant_id" id="restaurant" class="form-control" required>
            <option value="">Select Restaurant</option>
            @foreach($restaurants as $restaurant)
              <option value="{{ $restaurant->restaurant_id }}" {{ $selectedRestaurant == $restaurant->restaurant_id ? 'selected' : '' }}>
                {{ $restaurant->name }}
              </option>
            @endforeach
          </select>
        </div>
        <div class="col-md-12 text-center mt-3">
          <button class="rev2">View Reviews</button>
        </div>
      </div>
    </form>

    @if($selectedRestaurant && $reviews->isEmpty())
      <div class="row gy-4 mt-4">
        <div class="col-md-12">
          <p>No reviews found for this restaurant.</p>
        </div>
      </div>
    @elseif($selectedRestaurant)
      <div class="row gy-4 mt-4">
        @foreach($reviews as $review)
          <div class="col-md-6">
            <div class="box" data-aos="fade-up" data-aos-delay="300">
              <h4>{{ $review->name }}</h4>
              <p>Rating: {{ $review->rating }} stars</p>
              <p>{{ $review->review }}</p>
              @if($review->image)
                <img src="{{ asset('storage/' . $review->image) }}" alt="Review Image" class="img-fluid">
              @endif
            </div>
          </div>
        @endforeach
      </div>
    @endif

  </div>

</section><!-- /Reviews Section -->
</main>
@endsection
