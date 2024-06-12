@extends('master.layout')
@section('content')

<main class="main" style="padding-top: 60px;">
<section id="review" class="review section">
    <div class="overlay-mf"></div>
    <div class="container">
      <div class="row">
        <div class="col-sm-12">
          <div class="review-mf">
            <div id="contact" class="box-shadow-full">
              <div class="row">
                <div class="col-md-12">
                <div class="title-box-2">
            <h5 class="title-left" style="margin-top: 50px;">Leave a Review</h5>
            <form action="reviews" method="POST" class="php-email-form" data-aos="fade-up" data-aos-delay="200" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label for="restaurant_id">Restaurant</label>
                    <select name="restaurant_id" id="restaurant_id" class="form-control" required>
                        @foreach($restaurants as $restaurant)
                            <option value="{{ $restaurant->restaurant_id }}">{{ $restaurant->name }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <label for="review">Review</label>
                    <textarea name="review" id="review" class="form-control" rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label for="rating">Rating</label>
                    <select name="rating" id="rating" class="form-control" required>
                        <option value="1">1</option>
                        <option value="2">2</option>
                        <option value="3">3</option>
                        <option value="4">4</option>
                        <option value="5">5</option>
                    </select>
                </div>

                <button class="rev2">Submit</button>
            </form>
        </div>
       </div>
      </div>
     </div>
    </div>
   </div>
  </div>
</section>
</main>
@endsection
