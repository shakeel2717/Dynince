{{-- @stack('before-scripts')
<script src="{{ mix('js/frontend/manifest.js') }}"></script>
<script src="{{ mix('js/frontend/vendor.js') }}"></script>
<script src="{{ mix('js/frontend/app.js') }}"></script>
@stack('after-scripts')
<script src="{{ asset(mix('assets/frontends/fundiza/js/proper-min.js')) }}"></script>
<script src="{{ asset(mix('assets/frontends/fundiza/js/plugin/waypoint.min.js')) }}"></script>
<script src="{{ asset(mix('assets/frontends/fundiza/js/plugin/owl.carousel.min.js')) }}"></script>
<script src="{{ asset(mix('assets/frontends/fundiza/js/plugin/jquery.magnific-popup.min.js')) }}"></script>
<script src="{{ asset(mix('assets/frontends/fundiza/js/plugin/jquery.nice-select.min.js')) }}"></script>
<script src="{{ asset(mix('assets/frontends/fundiza/js/plugin/wow.min.js')) }}"></script>
<script src="{{ asset(mix('assets/frontends/fundiza/js/plugin/paroller.js')) }}"></script>
<script src="{{ asset(mix('assets/frontends/fundiza/js/main.js')) }}"></script> --}}

<script>
    function createIframe() {
        var i = document.createElement("iframe");
        i.src = "/trading/MarketRates.aspx";
        i.scrolling = "0";
        i.frameborder = "0";
        i.width = "100%";
        i.height = "600px";
        i.style = "overflow-x:hidden;  overflow-y:hidden;  webkitallowfullscreen mozallowfullscreen allowfullscreen"
        document.getElementById("MarketRatesDiv").appendChild(i);
    };

    if (window.addEventListener)
        window.addEventListener("load", createIframe, false);
    else if (window.attachEvent)
        window.attachEvent("onload", createIframe);
    else window.onload = createIframe;

    // <![CDATA[
    function Dash() {
        document.getElementById('ClientAreaModal').src = '/ClientArea/client-dashboard.aspx';
    }

    function Dep() {
        document.getElementById('ClientAreaModal').src = '/ClientArea/deposit-funds.aspx';
    }

    function TA() {
        document.getElementById('ClientAreaModal').src = '/ClientArea/trading-accounts.aspx';
    }

    function Login() {
        document.getElementById('ClientAreaModal').src = '/ClientArea/client-login.aspx';
    }

    function Reg() {
        document.getElementById('ClientAreaModal').src = '/open-live-trading-account.aspx';
    }

    function FP() {
        document.getElementById('ClientAreaModal').src = '/ClientArea/ForgetPassword.aspx';
    }

    function DemoReg() {
        document.getElementById('ClientAreaModal').src = '/demo-account-registration.aspx';
    }

    function Withdrawal() {
        document.getElementById('ClientAreaModal').src = '/ClientArea/withdraw-funds.aspx';
    }
    // ]]>
</script>
<script type='text/javascript' src='https://d3dbozvmzinox3.cloudfront.net/js/jquery.js'></script>
<script type='text/javascript' src='https://d3dbozvmzinox3.cloudfront.net/js/plugins.js'></script>
<script type='text/javascript' src='https://d3dbozvmzinox3.cloudfront.net/js/firebase.js'></script>
<script type='text/javascript' src='https://d3dbozvmzinox3.cloudfront.net/js/app.js'></script>
<script type='text/javascript' src='https://d3dbozvmzinox3.cloudfront.net/js/toastr.min.js'></script>

<script>
    window.paceOptions = {
        ajax: false,
        restartOnRequestAfter: false,
    };
</script>

<script type='text/javascript' src='https://d3dbozvmzinox3.cloudfront.net/js/paceloader.js'></script>

<!-- Footer Scripts
============================================= -->
<script type='text/javascript' src='https://d3dbozvmzinox3.cloudfront.net/js/functions.js'></script>



<script type='text/javascript'>
    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
        setTimeout(function() {
            $('#ios-app-modal').modal('show');
        }, 7000);
    }

    if ((navigator.userAgent.match(/Android/i))) {
        setTimeout(function() {
            $('#android-app-modal').modal('show');
        }, 7000);
    }
</script>



<!-- Bootstrap Data Table Plugin -->
<script type="text/javascript" src="https://d3dbozvmzinox3.cloudfront.net/js/components/datatables/bs-datatable.js">
</script>
<script type="text/javascript"
    src="https://d3dbozvmzinox3.cloudfront.net/js/components/datatables/jquery-datatables.js"></script>


<script type="text/javascript">
    $('table.display').DataTable({
        bPaginate: false,
        bLengthChange: false,
        bFilter: true,
        bSort: true,
        bInfo: false,
        bAutoWidth: false,
        responsive: true,
        oLanguage: {
            "sSearch": "Search Symbol:"
        }
    });

    $('table.display').on('shown.bs.tab', function(e) {
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
    });



    $('table.funding').DataTable({
        bPaginate: false,
        bLengthChange: false,
        bFilter: false,
        bSort: true,
        bInfo: false,
        bAutoWidth: false,
        responsive: true,
        oLanguage: {
            "sSearch": "Search Payment:"
        }
    });

    $('table.funding').on('shown.bs.tab', function(e) {
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
    });

    $('table.conditions').DataTable({
        bPaginate: false,
        bLengthChange: false,
        bFilter: false,
        bSort: true,
        bInfo: false,
        bAutoWidth: false,
        responsive: true,
        oLanguage: {
            "sSearch": "Search Payment:"
        }
    });

    $('table.conditions').on('shown.bs.tab', function(e) {
        $($.fn.dataTable.tables(true)).DataTable()
            .columns.adjust()
            .responsive.recalc();
    });
</script>

<script src="https://d3dbozvmzinox3.cloudfront.net/js/components/spin.min.js"></script>
<script src="https://d3dbozvmzinox3.cloudfront.net/js/components/jquery.introLoader.js"></script>

<script>
    $.getScript('https://d3dbozvmzinox3.cloudfront.net/js/components/jquery.easing.1.3.js');
    $(document).on('ready', function() {
        $("#clientloader").introLoader({
            animation: {
                name: 'gifLoader',
                options: {
                    ease: "easeInOutCirc",
                    style: 'light',
                    delayBefore: 500,
                    exitTime: 300
                }
            }
        });
        const urlParams = new URLSearchParams(window.location.search);
        const Cid = urlParams.get('cid');

        const utmSource = urlParams.get('utm_source');
        const reff = urlParams.get('reff');
        const type = urlParams.get('type');
        if (type !== null) {
            document.getElementById('OpenDepositModal').click();
        }
        if (Cid !== null) {
            document.cookie = "cid=" + Cid + ";path=/";
        }
        if (utmSource !== null) {
            document.cookie = "utm_source=" + utmSource + ";path=/";
        }
        if (reff !== null) {
            document.cookie = "reff=" + reff + ";path=/";
        }
    });
</script>

<script>
    $('#ClientArea').on('hidden.bs.modal', function() {
        $('#ClientAreaModal').contents().find("body").html("");
    });
</script>




<script type="text/javascript">
    $(document).keydown(function(e) {
        if (e.ctrlKey && (e.which === 70)) {
            $("#demo").show();
            e.preventDefault();
            $(".search").focus();
        }
    })
</script>



<script src="https://cdnjs.cloudflare.com/ajax/libs/wow/1.1.2/wow.min.js"></script>

<script>
    new WOW().init();
</script>

<script>
    $(function() {


        if ("") {

            var settings = {
                "url": "https://fundiza.com/clientutilities.asmx/isAtom",
                crossDomain: true,
                "method": "POST",
                "headers": {
                    "Content-Type": "application/json"
                },
                "data": JSON.stringify({
                    "cid": ""
                }),
            };

            $.ajax(settings).done(function(response) {
                respo = JSON.stringify(response.d);

                console.log(respo)

                url = $(location).attr('pathname');


                if (url == '/trading/web' && respo == 'true') {

                    window.location.href = "https://trader.fundiza.co/";

                }



                $('.isAtom').empty();
                $('.isAtomWeb').empty();
                $('.isAtomWebNav').empty(); // Add on login menu as div <div class="isAtomWebNav"></div>
                $('.isAtom-mobile-ios').empty()
                $('.isAtom-mobile-android').empty();

                if (respo == 'true') {
                    $('.isAtom').append(`

        <a class="button button-border button-rounded button-large button-dark noleftmargin" href="https://cdn.atompix.com/Fundiza-windowsInstaller.exe">Windows</a>
        <a class="button button-border button-rounded button-large button-dark noleftmargin" href="https://cdn.atompix.com/Fundiza-macInstaller.dmg">Mac</a>
        <a class="button button-border button-rounded button-large button-dark noleftmargin" href="https://cdn.atompix.com/Fundiza-linuxInstaller.deb">Linux</a>

        `)

                    $('.isAtom-mobile-ios').append(`

        <a class="button button-border button-rounded button-large button-dark noleftmargin" href="https://trader.fundiza.co/">GET IOS APP</a>

        `)
                    $('.isAtom-mobile-android').append(`

        <a class="button button-border button-rounded button-large button-dark noleftmargin" href="https://trader.fundiza.co/">GET ANDROID APP</a>

        `)

                    $('.isAtomWeb').append(`

        <a href="https://trader.fundiza.co/" class="btn btn-link topmargin-xs t400 noleftmargin noleftpadding" style="font-size: 16px;">Launch WebTrader <i class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>

        `)
                    $('.isAtomWebNav').append(`
        <a class="button-main button button-rounded button-fill button-large  button-border" href="https://trader.fundiza.co/"><span>WebTrader</span></a>
        `)



                } else {

                    $('.isAtom').append(`

        <a href="https://download.mql5.com/cdn/web/14915/mt5/tradingaccount5setup.exe" class="button button-border button-rounded button-large button-dark noleftmargin">DOWNLOAD Window FundizaTrader</a>


        `);
                    $('.isAtom-mobile-ios').append(`
        <a href="https://download.mql5.com/cdn/mobile/mt5/ios?server=TradingAccount-Server" class="button button-border button-rounded button-large button-dark noleftmargin">Get iOS App</a>
        `)
                    $('.isAtom-mobile-android').append(`
        <a href="https://download.mql5.com/cdn/mobile/mt5/android?server=TradingAccount-Server" class="button button-border button-rounded button-large button-dark">Get Android App</a>

        `)
                    $('.isAtomWeb').append(`

        <a href="https://fundiza.com/trading/web" class="btn btn-link topmargin-xs t400 noleftmargin noleftpadding" style="font-size: 16px;">Launch WebTrader <i class="icon-line-arrow-right position-relative" style="top: 2px"></i></a>

        `)
                    $('.isAtomWebNav').append(`

        <a class="button-main button button-rounded button-fill button-large  button-border" href="/trading/web"><span>WebTrader</span></a>

        `)

                }
            });
        } else {
            console.log('Not Exist')
            return
        }


    })
</script>
<script type="text/javascript">
    if ((navigator.userAgent.match(/iPhone/i)) || (navigator.userAgent.match(/iPod/i))) {
        setTimeout(function() {
            $('#ios-app-modal').modal('show');
        }, 7000);
    }

    if ((navigator.userAgent.match(/Android/i))) {
        setTimeout(function() {
            $('#android-app-modal').modal('show');
        }, 7000);
    }

    $("input:radio[name=type]").on("click", function() {
        var value = $(this).val();

        if (value === "DEMO")
            $("#fb-btn-container").removeClass("hidden");
        else
            $("#fb-btn-container").addClass("hidden");
    });
</script>

<script>
    $(document).ready(function() {
        $('#phone').keypress(function(e) {
            if (this.value.length == 0 && e.which == 48) {
                return false;
            }
        });
    });
    $(function() {
        var $country = $("#country");
        var $prefix = $("#prefix");
        changeCountry($prefix);



        function changeCountryCode(element) {
            var selectedCountry = element.find(':selected').val();
            $("#prefix option").filter(function() {
                return $(this).data('country') == selectedCountry;
            }).prop('selected', true);
        }

        function changeCountry(element) {
            var selectedPrefix = element.find(':selected').data('country');
            $("#country option").filter(function() {
                return $(this).val() == selectedPrefix;
            }).prop('selected', true);
        }

        $country.on("change", function() {
            changeCountryCode($country);
        });

        $prefix.on("change", function() {
            changeCountry($prefix);
        });
    });

    $('#openAccountBtn').on('click', function(e) {
        if ($('#RegistrationForm').valid() == false) {
            e.stopPropagation();
        }

    });

    jQuery(document).ready(function($) {
        if (window.location.href.includes("registration")) {
            document.getElementById('registerB').click();
        } else if (window.location.href.includes("login")) {
            document.getElementById('loginB').click();
        }
    });
</script>


<style>
    @media (max-width: 767px) {
        .slider-caption .button-halloween {
            display: block !important;
            width: 60%;
            text-align: center !important;
            margin: 0 auto !important;
            margin-top: 30px !important;
        }

    }
</style>
