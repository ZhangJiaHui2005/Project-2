<section class="furniture_section layout_padding">
    <div class="container">
      <div class="heading_container">
        <h2>
          Our Furniture
        </h2>
        <p>
          which don't look even slightly believable. If you are going to use a passage of Lorem Ipsum, you need to be sure there isn't an
        </p>
      </div>
      <div class="row">
        @foreach ($products as $product)
            <div class="col-md-6 col-lg-4">
              <div class="box">
                <div class="img-box">
                  <img src="{{asset($product->image)}}}}" alt="{{$product->name}}">
                </div>

                <div class="detail-box">
                  <h5>
                    {{$product->name}}
                  </h5>
                  <div class="price_box">
                    <h6 class="price_heading">
                      <span>$</span> {{$product->price}}
                    </h6>
                    <a href="" class="btn">
                      View More
                    </a>
                  </div>
                </div>
              </div>
            </div>
        @endforeach
        
        <div class="mt-5">
          {{$products->links('pagination::bootstrap-5')}}
        </div>
      </div>
    </div>
  </section>
