@extends('master.layout')

@section('content')
<section id="contact" class="paralax-mf footer-paralax bg-image sect-mt4 route" style="background-image: url(assets/img/overlay-bg.jpg)">
  <div class="overlay-mf"></div>
  <div class="container">
    <div class="row">
      <div class="col-sm-12">
        <div class="contact-mf">
          <div id="contact" class="box-shadow-full">
            <div class="row">
              <div class="col-md-12">
                <div class="title-box-2">
                  <h5 class="title-left" style="margin-top: 50px;">
                    Edit Restaurant
                  </h5>
                </div>
                <div>
                  <form action="/update-restaurant/{{ $restaurant->restaurant_id }}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    @method('PUT')
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="restaurant_id" class="form-control" id="restaurant_id" value="{{ $restaurant->restaurant_id }}" readonly>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" value="{{ $restaurant->name }}" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="address" class="form-control" id="address" value="{{ $restaurant->address }}" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="phone" class="form-control" id="phone" value="{{ $restaurant->phone }}" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="cuisine_type" class="form-control" id="cuisine_type" value="{{ $restaurant->cuisine_type }}" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="price" class="form-control" id="price" value="{{ $restaurant->price }}" required>
                        </div>
                      </div>
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Update</button>
                      </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section><!-- End Edit Restaurant Page -->

@endsection
