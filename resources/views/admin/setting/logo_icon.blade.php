@extends('layouts.app')
@section('content')
    <form action="" method="POST" enctype="multipart/form-data">
        @csrf
        <div class="row mb-none-30">
            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>White Logo</h5>
                        <div class="col-md-6 mb-1">
                            <div class="img-fluid"
                                style="height:80px;background-size: cover;background-image: url({{ getImage(imagePath()['logoIcon']['path'] . '/logo.png', '?' . time()) }})">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="file" id="logo" accept=".png, .jpg, .jpeg"
                                    name="logo">
                                <label class="input-group-text" for="logo">{{ __('locale.Select Logo') }}</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Dark Logo</h5>
                        <div class="col-md-6 mb-1">
                            <div class="img-fluid bg-dark"
                                style="height:80px;background-size: cover;background-image: url({{ getImage(imagePath()['logoIcon']['path'] . '/logo-dark.png', '?' . time()) }})">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="file" id="logo-dark" accept=".png, .jpg, .jpeg"
                                    name="logo_dark">
                                <label class="input-group-text" for="logo-dark">{{ __('locale.Select Logo') }}</label>
                            </div>
                        </div>
                        <small class="ms-1 text-danger"><code>350px x 75px</code></small>
                    </div>
                </div>
            </div>
        </div>
        <div class="row mb-none-30">

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>White Favicon</h5>
                        <div class="col-md-6 mb-1">
                            <div class="img-fluid"
                                style="height:80px;width:80px;background-size: cover;background-image: url({{ getImage(imagePath()['logoIcon']['path'] . '/favicon.png', '?' . time()) }})">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="file" id="favicon" accept=".png" name="favicon">
                                <label for="favicon" class="input-group-text">{{ __('locale.Select Favicon') }}</label>
                            </div>
                        </div>
                        <small class="ms-1 text-danger"><code>64px x 64px</code></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-6 col-md-6 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <h5>Dark Favicon</h5>
                        <div class="col-md-6 mb-1">
                            <div class="img-fluid bg-dark"
                                style="height:80px;width:80px;background-size: cover;background-image: url({{ getImage(imagePath()['logoIcon']['path'] . '/favicon-dark.png', '?' . time()) }})">
                            </div>
                        </div>
                        <div class="col">
                            <div class="input-group input-group-merge">
                                <input class="form-control" type="file" id="favicon-dark" accept=".png"
                                    name="favicon_dark">
                                <label for="favicon-dark" class="input-group-text">{{ __('locale.Select Favicon') }}</label>
                            </div>
                        </div>
                        <small class="ms-1 text-danger"><code>64px x 64px</code></small>
                    </div>
                </div>
            </div>

            <div class="col-lg-12 col-md-12 col-sm-12">
                <div class="card">
                    <div class="card-body">
                        <button type="submit" class="btn btn-primary btn-lg">{{ __('locale.Update') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </form>
@endsection

@push('style')
    <style type="text/css">
        .logoPrev {
            background-size: 100%;
        }

        .iconPrev {
            background-size: 100%;
        }
    </style>
@endpush
