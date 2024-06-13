@extends('master.layout')

@section('content')

<!-- ======= Restaurant Detail Page======= -->
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
                    Restaurant Details
                  </h5>
                  <div class="text-right mb-3">
                    <a href="add-restaurant" class="btn btn-primary">Add Restaurant</a>
                  </div>
                  <div class="col-md-12">
                    <div style="overflow-x: auto; margin-top: 70px;">
                      <table style="border-collapse: collapse; width: 100%; border: 1px solid black;">
                        <thead>
                          <tr>
                            <th scope="col" style="border: 1px solid black;">Restaurant ID</th>
                            <th scope="col" style="border: 1px solid black;">Name</th>
                            <th scope="col" style="border: 1px solid black;">Address</th>
                            <th scope="col" style="border: 1px solid black;">Phone Number</th>
                            <th scope="col" style="border: 1px solid black;">Cuisine Type</th>
                            <th scope="col" style="border: 1px solid black;">Price</th>
                            <th scope="col" style="border: 1px solid black;">Actions</th>
                          </tr>
                        </thead>
                        <tbody>
                          @foreach ($restaurants as $restaurant)
                            <tr>
                              <td scope="row" style="border: 1px solid black;">{{$restaurant->restaurant_id}}</td>
                              <td scope="row" style="border: 1px solid black;">{{$restaurant->name}}</td>
                              <td scope="row" style="border: 1px solid black;">{{$restaurant->address}}</td>
                              <td scope="row" style="border: 1px solid black;">{{$restaurant->phone}}</td>
                              <td scope="row" style="border: 1px solid black;">{{$restaurant->cuisine_type}}</td>
                              <td scope="row" style="border: 1px solid black;">{{$restaurant->price}}</td>
                              <td style="border: 1px solid black;">
                                {{-- <a href="/edit-restaurant/{{$restaurant->restaurant_id}}" class="btn btn-info">Edit</a> --}}
                                <form action="/delete-restaurant/{{$restaurant->restaurant_id}}" method="post" style="display: inline-block;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-danger">Delete</button>

                                </form>
                              </td>
                            </tr>
                          @endforeach
                        </tbody>
                      </table>
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
</section><!-- End Restaurant Detail Page -->

@endsection
