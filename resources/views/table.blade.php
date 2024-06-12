@extends('master.layout')
@section('content')


   <section id="contact" class="php-email-form" >
      <div class="overlay-mf"></div>
      <div class="container">
        <div class="row">

          <div class="col-sm-12">
            <div class="contact-mf">
              <div id="contact" class="box-shadow-full">
                <div class="row">
                  <div class="col-md-12">
                    <div class="title-box-2">

                        <!-- <h5 class="container section-title">
                        <p>Booking list</p>
                        </h5>

                    </div>

             <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <div class="text-center"> <button onclick="document.location='/book-table'" type='submit' > Book A Table </button></div>
            </div> -->
            <div class="row">
            <div class="col-lg-6">
            <h5 class="container section-title">
                        <p>Booking list</p>
                        </h5>
            </div>
            <div class="col-lg-6">
            <div class="d-flex mt-4" data-aos="fade-up" data-aos-delay="300">
              <div class="text-center"> <button onclick="document.location='/book-table'" type='submit' class='azam'> Book</button></div>
            </div>
            </div>

            @if (session('success'))

            <div class="sent-message">Your booking request was sent. We will call back or send an Email to confirm your reservation. Thank you!</div>
    </div>



@endif


<div>

<table class="table table-striped">
  <!-- <thead>

    <tr>

      <th scope="col">Name</th>
      <th scope="col">Email</th>
      <th scope="col">Phone</th>
      <th scope="col">Date</th>
      <th scope="col">Time</th>
      <th scope="col">People</th>
      <th scope="col">Message</th>

    </tr>
  </thead> -->
  <tbody>






                      <!-- <div class="row"> -->
        <!-- <div class="col-lg-4" data-aos="fade-right">
          <img src="assets/img/me.jpg" class="img-fluid" alt="">
        </div> -->
        <!-- <div class="col-lg-8 pt-4 pt-lg-0 content" data-aos="fade-left"> -->
          <!-- <h3>UI/UX &amp; Graphic Designer</h3>
          <p class="fst-italic">
            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore
            magna aliqua.
          </p> -->
          @foreach ($tables as $table)
          <div class="box">

            <div class="col-lg-6">
              <ul>
                <li> <i class=" bi-chevron-right"></i> <strong>Name :</strong> <span>{{$table->name}}</span></li>
                <li> <i class=" bi-chevron-right"></i><strong>Email :</strong> <span>{{$table->email}}</span></li>
                <li> <i class=" bi-chevron-right"></i><strong>Phone :</strong> <span>{{$table->phone}}</span></li>
                <li> <i class=" bi-chevron-right"></i><strong>Date :</strong> <span>{{$table->date}}</span></li>
                <li> <i class=" bi-chevron-right"></i><strong>Time :</strong> <span>{{$table->time}}</span></li>
                <li> <i class=" bi-chevron-right"></i><strong>People :</strong> <span>{{$table->people}}</span></li>
                <li> <i class=" bi-chevron-right"></i><strong>Message :</strong> <span>{{$table->message}}</span></li>
                {{-- <button href="{{ url('delete/'.$table->email)}}"  class='delete'>cancel</button>  --}}
              </ul>

            </div>



            <!-- <i class="bi bi-chevron-right"></i> -->

            <!-- <div class="col-lg-6">
              <ul>
                <li><i class="bi bi-chevron-right"></i> <strong>Age:</strong> <span>30</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Degree:</strong> <span>Master</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>PhEmailone:</strong> <span>email@example.com</span></li>
                <li><i class="bi bi-chevron-right"></i> <strong>Freelance:</strong> <span>Available</span></li>
              </ul>
            </div> -->
          </div>
          @endforeach
          <!-- <p>
            Officiis eligendi itaque labore et dolorum mollitia officiis optio vero. Quisquam sunt adipisci omnis et ut. Nulla accusantium dolor incidunt officia tempore. Et eius omnis.
            Cupiditate ut dicta maxime officiis quidem quia. Sed et consectetur qui quia repellendus itaque neque. Aliquid amet quidem ut quaerat cupiditate. Ab et eum qui repellendus omnis culpa magni laudantium dolores.
          </p> -->
        <!-- </div>
      </div> -->


    <!-- <tr>

      <td>225169</td>
      <td>Aman</td>
      <td>Said</td>
      <td>Aman@gmail.com</td>
      <td>0125678453</td>
    </tr>
    <tr>

      <td>221345</td>
      <td>Danish</td>
      <td>Hadi</td>
      <td>Danish@gmail.com</td>
      <td>0198765432</td>
    </tr>
    <tr>

      <td>226785</td>
      <td>Kasim</td>
      <td>Ibrahim</td>
      <td>Kasim@gmail.com</td>
      <td>0116784325</td>
    </tr>
    <tr>

      <td>220956</td>
      <td>Azim</td>
      <td>Zain</td>
      <td>Azim@gmail.com</td>
      <td>0277885344</td>
    </tr>
    <tr>

      <td>229800</td>
      <td>Kamal</td>
      <td>Fitri</td>
      <td>Kamal@gmail.com</td>
      <td>0120215678</td>
    </tr> -->

  </tbody>
</table>




<!-- <div class="text-center"> <button onclick="document.location='/book-table'" type='submit' > Book A Table </button></div> -->

</div>



                    </div>


                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section><!-- End Contact Section -->



    @endsection
