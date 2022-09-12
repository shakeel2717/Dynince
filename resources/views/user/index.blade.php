@extends('layouts.app')

@section('content')
    <div id="app"></div>
@endsection

@section('page-script')
    <script async src="{{ asset(mix('js/index.js')) }}"></script>
    <script type="text/javascript" src="{{ mix('/vendors/js/ccxt.js') }}"></script>
    <script>
        window.gnl = @json(getGen());
        window.cors = gnl.cors;
        window.plat = @json(getPlatforms());
        window.ext = @json(getExts());
        const config = {
            enableRateLimit: true,
            //verbose: true,
            proxy: gnl.cors,
            'options': {
                'tradesLimit': 10,
            }
        }
        window.provider = '{{ $provider }}';
        window.exchange = new ccxt.{{ $provider ?? 'kucoin' }}(config);
        window.charting = new ccxt.{{ $provider ?? 'kucoin' }}(config);
    </script>
    <script src="https://unpkg.com/moralis-v1@1.11.0/dist/moralis.js"></script>
    <script async type="text/javascript" src="{{ mix('/vendors/js/web3-provider.min.js') }}"></script>
@endsection
