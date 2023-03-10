<!DOCTYPE html>
<html lang="en">
@include('inc.header');
@include('inc.topbar');
@include('inc.nav')

<div>
    <div class="container-fluid page-header-contact py-5  wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <h1 class="display-4 animated slideInDown mb-4 text-center">Contact Us</h1>
        </div>
    </div>

    <div class="container-xxl py-5 background-color">
        <div class="container">
            <div class="row g-5">
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.1s">

                    <p class="mb-4">
                        If you have any questions or concerns regarding our insurance policies, please do not hesitate
                        to contact us. Our customer service representatives are available to assist you in any way
                        possible.
                    </p>
                    <hr />
                    <p class="mb-4 text-center">
                        We will respond as soon as possible
                    </p>
                    <hr />
                    <form onSubmit={handleSubmit}>
                        <div class="row g-3">
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="name" placeholder="Your Name"
                                        value="name" />
                                    <label for="name">Name</label>
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div class="form-floating">
                                    <input type="email" class="form-control" id="email" placeholder="Your Email"
                                        value="email" />
                                    <label for="email">Email</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <input type="text" class="form-control" id="subject" placeholder="Subject"
                                        value="subject " />
                                    <label for="subject">Subject</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <div class="form-floating">
                                    <textarea class="form-control text-area-style" placeholder="Leave a message here" id="message" value="message"></textarea>
                                    <label for="message">Message</label>
                                </div>
                            </div>
                            <div class="col-12">
                                <button class="btn btn-primary py-3 px-5" type="submit" disabled={isLoading}>
                                    Send
                                </button>

                            </div>
                        </div>
                    </form>


                </div>
                <div class="col-lg-6 wow fadeIn" data-wow-delay="0.5s">


                    <div class="position-relative rounded overflow-hidden h-100">
                        <iframe
                            src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3988.816805924231!2d36.819152226953115!3d-1.2838040999999851!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x182f10d671900001%3A0x90f5e610e51dce23!2sKimathi%20House!5e0!3m2!1sen!2ske!4v1678173654016!5m2!1sen!2ske"
                            class="position-relative w-100 h-100 map-iframe" frameborder="0" allowfullscreen=""
                            aria-hidden="false" tabindex="0" loading="lazy"
                            referrerpolicy="no-referrer-when-downgrade">
                        </iframe>

                    </div>
                </div>
            </div>
        </div>
    </div>

</div>

@include('inc.footer')


</html>
