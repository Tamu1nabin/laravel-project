@extends('user.layout.master')
@section('title','Ecommerce-User-Signup')
@section('content-section')


 <section id="breadcrumbs" class="breadcrumbs">
      <div class="container">

        <ol>
          <li><a href="#">Home</a></li>
          <li>signup</li>
        </ol>
        <h2>Signup</h2>

      </div>
    </section><!-- End Breadcrumbs -->

  <div class="col-lg-6 offset-md-3 p-5 shadow-lg mb-3">

  	      @if(Session::has('msg'))
  	      <div class="alert alert-success">
  	      	{{Session::get('msg')}}
  	      </div>
  	      @endif
            <form action="{{route('storecustomer')}}" method="post">
            	@csrf
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="pass" id="pass" placeholder="Password" required>
              </div>
              <div class="form-group mt-3">
                <input type="password" class="form-control" name="cpass" id="pass" placeholder="Confirm Password" required>
              </div>
              
              <div class="text-center"><button type="submit">Signup</button></div>
            </form>
          </div>



@endsection