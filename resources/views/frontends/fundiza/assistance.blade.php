@extends('frontends.index')
@section('content')
    <div class="section nobg">

        <div class="container clearfix">

            <div class="heading-block center">
                <h2>Get Assisted By Our Technical Support Department 24/5</h2>
                <span>Never worry about encountering any issues with your account or trading activity.</span>
            </div>

            <div class="col_full bottommargin-lg">

                <img data-animate="fadeIn" class="aligncenter fadeIn animated"
                    src="https://d3dbozvmzinox3.cloudfront.net/images/fz/contact.jpg" alt="contact">

            </div>

            <div class="col_half nobottommargin">

                <h4>Contact us through phone, email, or live chat</h4>


                <p>Our technical support department is available round-the-clock to address all your concerns and to assist
                    you in whatever trouble you might face. Receive answers to all your questions anytime through live chat,
                    calls, or email.</p>

                <p>No other investment firms offer the best in-house support and services like {{ siteName() }}. No
                    matter where you
                    are in the world, our technical support team will always be ready to address all your issues to help you
                    make the best of your investment.
                </p>
            </div>



            <div class="col_one_third nobottommargin col_last">

                <div class="promo promo-border promo-mini">
                    <h3>Call us today at <a
                            href="tel:{{ $sections[4]->content->phone }}">{{ $sections[4]->content->phone }}</a> or Email us
                        at <a
                            href="mailto:{{ $sections[4]->content->email }}"><span>{{ $sections[4]->content->email }}</span></a>
                    </h3>
                    <a href="#" onclick="LC_API.open_chat_window();return false;"
                        class="button button-second button-rounded button-fill button-large  nobottommargin"><i
                            class="icon-comment"></i> Chat Now</a>
                </div>

            </div>

        </div>

    </div>
@endsection
