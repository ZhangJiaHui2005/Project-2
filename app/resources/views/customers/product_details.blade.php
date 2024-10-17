<!doctype html>
<html lang="en">
<head>
    @include('includes.head')
</head>
<body class="sub_page">
    <div class="hero_area">
        @include('includes.header')

        <section class="layout_padding">
            <div class="container">
                <div class="heading_container mb-5">
                    <h2>{{$product->name->name}}</h2>
                </div>

                <div class="row d-flex justify-content-center align-items-center">
                    <div class="col-md-5">
                        <img src="{{asset('images/f1.png')}}" alt="{{$product->name->name}}">
                    </div>

                    <div class="col-md-7">
                        <p class="text-center" style="font-size: 30px">Price: <span class="text-danger ml-2" style="font-weight: bold">{{$product->price}}VND</span></p>

                        <div class="d-flex">
                            <a href="" class="btn btn-danger w-75 d-flex justify-content-center align-items-center">
                                <p style="font-size: 18px">Buy Now <br> (Ship in 2 hours)</p>
                            </a>

                            <a href="" class="btn btn-outline-danger px-4 w-20 ml-2 d-flex justify-content-center align-items-center">
                                <i class='bx bx-cart-alt fs-2'></i>
                            </a>
                        </div>

                    </div>
                </div>

                <form action="{{route('customers.product_comment', $product->id)}}" method="post" class="mb-5 shadow rounded p-5">
                    @csrf

                    <input type="hidden" value="{{$product->id}}" name="product_id">

                    <legend class="mb-5">Review Product</legend>

                    <div class="form-group">
                        <label for="comment">Comment's content</label>
                        <textarea name="comment" class="form-control" placeholder="Add content"></textarea>
                        @error('comment') <span class="text-danger">{{$message}}</span> @enderror
                    </div>

                    <button class="btn btn-primary">Send Review</button>
                </form>

                <div class="row">
                    @foreach($product->comment as $comment)
                        <div class="media mb-3 shadow p-5">
                            <img src="{{asset('images/anime_wallpaper.jpeg')}}" alt="wallpaper" class="mr-3" width="60">
                            <div class="media-body">
                                <h5>{{$comment->user->name}}</h5>

                                <p>{{$comment->content}}</p>

                                @if(auth('web')->user()->can('change_comment', $comment))
                                    <a href="{{route('customers.delete_comment', $comment->id)}}" class="btn btn-outline-warning">Delete</a>
                                @endif
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>

        @include('includes.info')
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
