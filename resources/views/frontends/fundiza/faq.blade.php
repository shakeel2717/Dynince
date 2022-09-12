@extends('frontends.index')
@section('content')
    <div class="content-wrap nobottompadding content-page">








        <div class="container clearfix" style="z-index: 1;">
            <div class="col_full">

                <div class="heading-block">
                    <h2>Frequently Asked Questions</h2>
                    <span>Get answers to the most commonly asked questions.</span>
                </div>
                <div class="accordion accordion-border clearfix" data-state="closed">

                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>How do I avail the services of {{ siteName() }}?</div>
                    <div class="acc_content clearfix" style="display: none;">
                        Clients are asked to select assets or financial instruments to invest in and will be assisted in the
                        overall trading process with the help of our professional brokers and experts to further increase
                        the value of your investment.
                    </div>

                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>How do I open a real account?</div>
                    <div class="acc_content clearfix" style="display: none;">Upon registration, an account will be assigned
                        to you where you can perform your financial and trading activities.</div>



                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>How do I fund my account?</div>
                    <div class="acc_content clearfix" style="display: none;">A live trading can be funded through several
                        ways including using your Visa or MasterCard. Skrill and Neteller among other payment systems can
                        also be used in making deposits.</div>

                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>How do I withdraw my funds?</div>
                    <div class="acc_content clearfix" style="display: none;">In your account, you can find Withdraw Funds in
                        the menu and enter the amount to be withdrawn and other information. The request will then be
                        processed by the system.</div>


                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>How long will it take to receive my funds?</div>
                    <div class="acc_content clearfix" style="display: none;">Withdrawals usually take around three to four
                        business days to be processed, but can take faster or longer depending on certain cases.</div>

                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>Will I be charged for utilizing your support center?
                    </div>
                    <div class="acc_content clearfix" style="display: none;">There would be no additional fees charged to
                        the client should they decide to call our customer support.</div>

                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>How long will it take before bonuses and rewards be
                        reflected in my account?</div>
                    <div class="acc_content clearfix" style="display: none;">Bonuses, rewards, and even profits will be
                        adjusted automatically and appear on the client’s account as long as the system is online and that
                        there are no pressing issues with the account’s documents and funding.</div>


                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>Is there a way for a complaint or a pending request
                        status to be checked or tracked?</div>
                    <div class="acc_content clearfix" style="display: none;">The client’s personal questions and requests
                        will be worked on by the support who received the call and will be given a call-back regarding the
                        status of their complaint or inquiry.</div>


                    <div class="acctitle"><i class="acc-closed icon-question-sign"></i><i
                            class="acc-open icon-question-sign"></i>How do I change information on my account?</div>
                    <div class="acc_content clearfix" style="display: none;">The account information can only be changed
                        prior to verification. However, certain information such as the email address, contact number, and
                        home address can be changed under the circumstances. The client will be required to submit specific
                        documents in order to verify the accuracy of the information given.</div>

                </div>





            </div>
        </div>


        <div class="section nobottommargin bottompadding-lg">
            <div class="container clearfix">

                <div class="col_half nobottommargin topmargin-lg">

                    <img src="https://d3dbozvmzinox3.cloudfront.net/images/fz/platform.png" alt="{{ siteName() }}Trader"
                        class="center-block">

                </div>

                <div class="col_half  topmargin-lg  col_last">

                    <div class="heading-block">
                        <h2>Relish your trading potential with {{ siteName() }}Trader</h2>
                        <span>An all-in-one platform for trading currencies, stocks and derivatives.</span>
                    </div>
                    <p>{{ siteName() }}Trader is an institutional multi-asset platform offering exceptional trading
                        possibilities and
                        technical analysis tools. Access hundreds of assets and trade in multiple markets with optimal
                        control.</p>






                    <a href="/trading/platform"
                        class="button button-border button-rounded button-large button-dark noleftmargin">More About
                        {{ siteName() }}Trader</a>


                </div>

            </div>
        </div>














    </div>
@endsection
