<x-frontend.layouts.master>
    <div id="carouselExampleCaptions" class="carousel slide">
        <div class="carousel-indicators">
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
          <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
        </div>
        <div class="carousel-inner">
          <div class="carousel-item active">
            <img src="{{ asset('image/admin/carsol1.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Best Quality Food</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/admin/cursol2.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Well Dedication</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
          <div class="carousel-item">
            <img src="{{ asset('image/admin/silder3.jpg') }}" class="d-block w-100" alt="...">
            <div class="carousel-caption ">
              <h5>Testy & Jussy</h5>
              <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry</p>
              <p><a href="#" class="btn btn-warning mt3">Show More</a></p>
            </div>
          </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
          <span class="carousel-control-prev-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
          <span class="carousel-control-next-icon" aria-hidden="true"></span>
          <span class="visually-hidden">Next</span>
        </button>
      </div>

      <section id="about" class="about section-padding">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-12 col-12">
                    <div class="about-img">
                        <img src="{{asset('image/admin/about.jpg')}}" alt="" class="img-fluid">
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-12 ps-lg-5 mt-md-5">
                    <div class="about-text">
                        <h2>We Provide Best Quality <br> Services Ever</h2>
                        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries</p>
                        <a href="#" class="btn btn-warning">Learn More</a>

                    </div>
                </div>
            </div>
        </div>
      </section>
    
      <section id="productlist" class="productlist section-padding">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="section-header text-center pb-5">
                        <h2>Our Product</h2>
                        <p>Lorem ipsum dolor sit amet consectetur<br> adipisicing elit. Ipsum, sit officia? </p>


                    </div>
                </div>
            </div>

            <div class="row">
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/corn.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Corn</h3>
                    <p class="lead text-danger">10$</p>
                    <a href="{{ url('product-details') }}" class="btn bg-warning text-dark">See More</a>
                  </div>
                </div>
              </div>
    
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/nasos.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Nasos</h3>
                    <p class="lead text-danger">20$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
    
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/salad.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Salad</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
              
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/rice.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Rice</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
            
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/fruits.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Fruits</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>
              <div class="col-12 col-md-12 col-lg-4 gy-4">
                <div class="card  text-center bg-white pb-2">
                  <div class="card-body text-dark">
                    <div class="img-area mb-4">
                      <img src="{{ asset('image/admin/donat.jpg') }}" alt=""  width="100%" height="100%">
                    </div>
                    <h3 class="card-title">Donat</h3>
                    <p class="lead text-danger">15$</p>
                    <button class="btn bg-warning text-dark">See More</button>
                  </div>
                </div>
              </div>      
          </div>
      </section>


</x-frontend.layouts.master>
