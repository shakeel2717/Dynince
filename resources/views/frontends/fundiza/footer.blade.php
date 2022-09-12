@if ($sections[4]->status == 1)
    <footer id="footer" class="light notopmargin">
        <div class="container">
            <div class="footer-widgets-wrap nobottommargin nobottompadding clearfix">
                <div class="container">
                    <div class="col_full">


                        <div class="col_one_third nomargin">

                            <img src="{{ getImage(imagePath()['logoIcon']['path'] . '/logo.png') }}" alt=""
                                class="footer-logo">
                        </div>
                        <div class="col_two_third col_last tright nomargin">
                            <div class="fright clearfix">

                                <ul class="list-inline nobottommargin uppercase footer-menu">
                                    <li><a
                                            href="{{ $sections[4]->content->btn1link }}">{{ $sections[4]->content->btn1 }}</a>
                                    </li>
                                    <li><a
                                            href="{{ $sections[4]->content->btn2link }}">{{ $sections[4]->content->btn2 }}</a>
                                    </li>
                                    <li><a
                                            href="{{ $sections[4]->content->btn3link }}">{{ $sections[4]->content->btn3 }}</a>
                                    </li>
                                    <li><a
                                            href="{{ $sections[4]->content->btn4link }}">{{ $sections[4]->content->btn4 }}</a>
                                    </li>

                                </ul>
                                <ul class="list-inline bottommargin-sm uppercase footer-menu" style="opacity: 0.7;">


                                    <li><img src="{{ asset($images[7]->image) }}">
                                    </li>
                                    <li><img src="{{ asset($images[8]->image) }}">
                                    </li>
                                </ul>

                            </div>
                        </div>

                    </div>
                    <div class="col_full">




                        <div class="line line-sm line-light hidden-xs hidden-sm  "></div>
                        <div class="bottommargin-xs topmargin-xs" id="risk-warning-container">

                            <p><b>About the Company</b><br />{{ $sections[4]->content->aboutcompany }}</p>
                            <p><b>Risk Warning</b></u><br /> {{ $sections[4]->content->riskwarning }}
                                <br /><Br />{{ $sections[4]->content->riskwarning2 }}
                            </p>


                            <p>{{ $sections[4]->content->address }}
                                <br />{{ $sections[4]->content->phone }}

                                <br />Email: <a href="mailto:{{ $sections[4]->content->email }}" class="footer-email"
                                    target="_blank">
                                    {{ $sections[4]->content->email }}</a>
                            </p>
                            <p class="nobottommargin">© 2022 {{ siteName() }} </p>
                            <div class="line line-sm line-light hidden-xs hidden-sm nopadding "></div>

                            <div class="col-md-8 nopadding">
                                <ul class="list-inline footer-terms">
                                    <li><a target="_blank" href="{{ $sections[4]->content->terms_link }}">Terms &
                                            Conditions</a></li>
                                    <li><a target="_blank" href="{{ $sections[4]->content->Order_link }}">Order
                                            Execution
                                            Policy</a></li>
                                    <li><a target="_blank" href="{{ $sections[4]->content->kyc_link }}">AML/KYC
                                            Policy</a>
                                    </li>
                                    <li><a target="_blank"
                                            href="{{ $sections[4]->content->complaints_link }}">Complaints &
                                            Dispute Resolution Policy</a>
                                    </li>
                                    <li><a target="_blank" href="{{ $sections[4]->content->refund_link }}">Refund
                                            Policy</a>
                                    </li>
                                    <li><a target="_blank" href="{{ $sections[4]->content->privacy_link }}">Privacy
                                            Policy</a>
                                    </li>
                                    <li><a target="_blank" href="{{ $sections[4]->content->conflict_link }}">Conflict
                                            of
                                            Interests</a></li>
                                    <li><a target="_blank" href="{{ $sections[4]->content->risk_link }}">Risk
                                            Disclosure</a>
                                    </li>
                                </ul>

                            </div>

                        </div>









                    </div>


                </div>
            </div>




    </footer>
@endif
