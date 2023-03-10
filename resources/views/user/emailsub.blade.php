<div class="col-lg-8" data-aos="fade-up" data-aos-delay="200">
    <p>Here are the details of the submission:</p>
    <ul>
        <li>Name: {{ $data['name'] }}</li>
        <li>Email: {{ $data['email'] }}</li>
        <li>Subject: {{ $data['subject'] }}</li>
        <li>Message: {{ $data['message'] }}</li>
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
