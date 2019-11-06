@extends('layouts.auth')
@section('content')
    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> {{ __('login.card.header') }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('login') }}" method="post">
                <div class="form-group mb-3">
                    <label>{{ __('login.card.form.inputs.email.label') }}</label>
                    <div class="input-group">
                        <input name="email" type="email"
                               class="form-control form-control-lg @error('email') alert alert-danger @enderror"
                               placeholder="{{ __('login.card.form.inputs.email.placeholder') }}" required/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-envelope"></i>
                            </span>
                        </span>
                    </div>
                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label class="float-left">{{ __('login.card.form.inputs.password.label') }}</label>
                        <a href="{{ route('password.request') }}" class="float-right"
                           title="{{ __('login.card.form.links.lost_password.alt') }}">
                            {{ __('login.card.form.links.lost_password.text') }}
                        </a>
                    </div>
                    <div class="input-group">
                        <input name="password" type="password"
                               class="form-control form-control-lg @error('password') alert alert-danger @enderror"
                               placeholder="{{ __('login.card.form.inputs.password.placeholder') }}" required/>
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
                    <div class="col-sm-8">

                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary mt-2">{{ __('login.card.form.buttons.submit.label') }}</button>
                    </div>
                </div>

                <p class="text-center">
                    {{ __('login.card.form.texts.do_not_have_account') }}
                    <a href="{{ route('register') }}" title="{{ __('login.card.form.links.sign_up.alt') }}">
                        {{ __('login.card.form.links.sign_up.text') }}
                    </a>
                </p>

            </form>
        </div>
    </div>
@endsection

