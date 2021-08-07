<section class="breadcrumb-area">
    <div class="banner-bg-img"></div>
    <div class="banner-shape-1"><img src="{{asset('assets/img/banner/shape-1.png')}}" alt="img"></div>
    <div class="banner-shape-2"><img src="{{asset('assets/img/banner/shape-2.png')}}" alt="img"></div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6 align-self-center">
                <div class="banner-inner text-center">
                    <h3>{{$title}}
                    </h3>
                    <h1>{{$name}}</h1>
                    <nav aria-label="breadcrumb">
                        <ul class="breadcrumb">
                          <li class="breadcrumb-item"><a href="{{route('index')}}">Home</a></li>
                          <li class="breadcrumb-item active" aria-current="page">{{$name}}</li>
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    </div>
</section>


