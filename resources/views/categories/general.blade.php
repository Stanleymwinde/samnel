@include('inc.header');
@include('inc.topbar');
@include('inc.nav')


<div>
    <div class="container-fluid page-header-general py-5 mb-3 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4 text-center" style="color:white"> General Insurance </h1>
        </div>
    </div>
    <?php
    $generalData = config('general');
    ?>
    <div class="container-xxl py-5">
        <div class="container">
            <div class="text-center mx-auto container-div-style">
                <h1 class="display-6 mb-5">
                    We Provide professional General Insurance Services
                </h1>
            </div>
            <div class="row g-4 justify-content-center">
                @foreach ($generalData as $general)
                    <div class="col-lg-4 col-md-6 wow fadeInUp" data-wow-delay="0.1s" key={service.id}>
                        <div class="service-item rounded h-100 p-5">
                            <div class="d-flex align-items-center ms-n5 mb-4">
                                <div class="service-icon flex-shrink-0 back-ground rounded-end me-4">
                                    <img className="img-fluid" src="{{ $general['image'] }}" alt="image" />

                                </div>
                                <h4 class="mb-0">{{ $general['name'] }}</h4>
                            </div>
                            <p class="mb-4">{{ $general['info'] }}</p>
                            <a href="" className="btn btn-light px-3">
                                Read More
                            </a>

                            <a href="{{ route('getinsured', ['id' => $general['id']]) }}" class="btn  btn-light m-1"
                                style="width'100px">
                                GetInsured
                            </a>
                        </div>
                    </div>
                @endforeach

            </div>

        </div>
        <hr />
    </div>

</div>
@include('user.facts')
@include('inc.footer')
