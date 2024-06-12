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
                    Add Restaurant
                  </h5>
                </div>
                <div>
                  <form action="{{ route('addrestaurant.store') }}" method="post" role="form" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="restaurant_id" class="form-control" id="restaurant_id" placeholder="Restaurant ID" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="name" class="form-control" id="name" placeholder="Name" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="address" class="form-control" id="address" placeholder="Address" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone Number" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="cuisine_type" class="form-control" id="cuisine_type" placeholder="Cuisine Type" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="text" name="price" class="form-control" id="price" placeholder="Price" required>
                        </div>
                      </div>
                      <div class="col-md-12 mb-3">
                        <div class="form-group">
                          <input type="file" name="image" class="form-control-file" id="image" required>
                        </div>
                      </div>
                      <div class="col-md-12 text-center">
                        <button type="submit" class="btn btn-primary">Submit</button>
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
</section><!-- End Restaurant Detail Page -->

@endsection
