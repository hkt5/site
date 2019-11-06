@extends('layouts.auth')
@section('content')
    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> {{ __('confirm.card.header') }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('password.confirm') }}" method="post">
                @csrf

                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label class="float-left">{{ __('confirm.card.form.password.label') }}</label>
                        @if (Route::has('password.request'))
                            <a class="float-lg-right" href="{{ route('password.request') }}">
                                {{ __('confirm.card.texts.forgot') }}
                            </a>
                        @endif
                    </div>
                    <div class="input-group">
                        <input name="password" type="password"
                               class="form-control form-control-lg @error('password') alert alert-danger @enderror"
                               placeholder="{{ __('confirm.card.form.password.placeholder') }}" required/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                    </div>
                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary mt-2">{{ __('confirm.card.buttons.submit') }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
