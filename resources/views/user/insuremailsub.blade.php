<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
    <p>Here are the details of the submission:</p>
    <ul>
        <li>First Name: {{ $info['fname'] }}</li>
        <li>Last Name: {{ $info['lname'] }}</li>
        <li>Email: {{ $info['email'] }}</li>
        <li>Subject:Get insured</li>
        {{-- <li>Message: {{ $info['message'] }}</li> --}}
    </ul>
    {{-- @component('mail::message')
                        # New Contact Form Submission

                        **Name:** {{ $data['name'] }}<br>
                        **Email:** {{ $data['email'] }}<br>
                        **Subject:** {{ $data['subject'] }}<br>
                        **Message:**<br>
                        {{ $data['message'] }}
                    @endcomponent --}}
</div>
