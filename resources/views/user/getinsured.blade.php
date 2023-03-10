@include('inc.header');
@include('inc.topbar');
@include('inc.nav')

<div>
    <div class="container-fluid page-header-get-Insured py-5 mb-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4 text-center">Get Insured</h1>


        </div>
    </div>

    <div class="container-xxl py-5 background-color">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">
                    <h1 class="display-6 mb-5">
                        Get Insured By . . . . . . .
                    </h1>
                    <p class="mb-4">
                        Providing your personal details bellow
                    </p>
                    <br />

                    <form action="{{ route('insured') }}" method="POST">
                        @csrf
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="First Name"
                                        name="fname" />
                                    <label for="name"></label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Last Name"
                                        name="lname" />
                                    <label for="email">Last Name </label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control text-area-style" placeholder="Email"
                                        id="email" name="email">
                                    <label for="message">Email</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="phone"
                                        class="form-control text-area-style"placeholder="Phone"id="phone"name="phone" />
                                    <label for="message">Phone</label>
                                </div>
                            </div>


                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control text-area-style" placeholder="Address"
                                        id="Address" name="address">
                                    <label for="message">Address</label>
                                </div>
                            </div>
                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="Country" placeholder="Country"
                                        name="country" />
                                    <label for="subject">Country</label>
                                </div>
                            </div>

                            <div class="col-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control text-area-style" placeholder="Age"
                                        id="Age" name="age">
                                    <label for="message">Age</label>
                                </div>
                            </div>
                            <div class="col-12">

                                <select id="insurer" class="form-select" name="insurer">
                                    <option>Choose Insurer</option>
                                    {{-- {data.map((insurer) => ( --}}
                                    <option class="text-area-style">name</option>
                                </select>
                            </div>


                            <p class="mb-4">
                                Samnel Insurance Brokers LTD
                            </p>
                            <div class="col-12 ">
                                <button class="btn bg-secondary py-3 px-5 col-6 " type="submit">
                                    {{-- {isLoading ? 'Sending...' : 'Submit'} --}} Submit
                                </button>

                            </div>
                        </div>
                    </form>
                    <br />
                    <div class="mb-4">
                        {{-- {isSuccess && <p> We will get Back to you soon with an email thanks </p>}
                        {isError && <p>Oops, something went wrong.</p>} --}}
                    </div>


                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">
                    <div class="position-relative rounded overflow-hidden h-100">

                        <img src="/img/getInsured.jpg" alt=''
                            class='img-fluid mb-4 w-70 rounded h-70 h-70 position-absolute top-50 start-50 translate-middle' />
                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('inc.footer')
