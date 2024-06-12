@extends('master.layout')
@section('content')


 <!-- Book A Table Section -->

 <section id="book-a-table" class="book-a-table section" >


<!-- Section Title -->
<div class="container section-title" data-aos="fade-up">
  <h2>RESERVATION</h2>
  <p>Book a Table</p>
</div>
<!-- End Section Title -->

<div class="container">



   <form action="booktable" method="post" role="form" class="php-email-form" >
  @csrf
    <div class="row gy-4">
      <div class="col-lg-4 col-md-6">
        <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
      </div>
      <div class="col-lg-4 col-md-6">
        <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
      </div>
      <div class="col-lg-4 col-md-6">
        <input type="text" class="form-control" name="phone" id="phone" placeholder="Your Phone" required="">
      </div>
      <div class="col-lg-4 col-md-6">
        <input type="date" name="date" class="form-control" id="date" placeholder="Date" required="">
      </div>
      <div class="col-lg-4 col-md-6">
        <input type="time" class="form-control" name="time" id="time" placeholder="Time" required="">
      </div>
      <div class="col-lg-4 col-md-6">
        <input type="number" class="form-control" name="people" id="people" placeholder="# of people" required="">
      </div>
    </div>
    <div class="form-group mt-3">
      <textarea class="form-control" name="message" rows="5" placeholder="Message"></textarea>
    </div>
    <!-- <div class="mb-3">
      <div class="loading">Loading</div>
      <div class="error-message"></div>
      <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
    </div> -->
    <div class="text-center"><button type="submit" >Book a Table</button></div>
  </form>

</div>


</section><!-- /Book A Table Section -->

@endsection
