@extends('user.layout.master')
@section('title','Ecommerce-Homepage')
@section('content-section')

<style type="text/css">
  .img{
    height: 350px;
    width: 500px;
  }
</style>

  <main id="main">

   <section class="mt-5">
      <div class="sidebar-item search-form">
                <form action="{{route('searchproduct')}}">
                  @csrf
                  <input type="text" name="search" placeholder="search product here" required="">
                  <button type="submit"><i class="bi bi-search"></i></button>
                </form>
              </div>
      
    </section>

    <!-- ======= Portfolio Section ======= -->
    <section id="portfolio" class="portfolio mt-5">
      <div class="container">

       

        <div class="row portfolio-container">

          @foreach($result as $s)
          
          <div class="col-lg-4 col-md-6 portfolio-item filter-web">
            <div class="portfolio-wrap">
              <img src="{{asset('admin/upload/products')}}/{{$s->product_image}}" class="img-fluid img" alt="">
              <div class="portfolio-info">

                <a href="{{route('productdetail',$s->id)}}"><h4>{{$s->product_name}}</h4></a>
                
                <div class="portfolio-links">
                  <a href="{{asset('admin/upload/products')}}/{{$s->product_image}}" data-gallery="portfolioGallery" class="portfolio-lightbox" title="{{$s->product_name}}"><i class="bx bx-plus"></i></a>

                  <a href="{{route('productdetail',$s->id)}}" title="More Details"><i class="bx bx-link"></i></a>
                </div>
              </div>
            </div>
          </div>
          @endforeach

        </div>

      </div>
    </section><!-- End Portfolio Section -->

    <!-- ======= Clients Section ======= -->
 
  </main><!-- End #main -->




@endsection