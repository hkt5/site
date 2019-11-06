@extends('layouts.auth')
@section('content')
    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> {{ __('register.card.title') }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('register') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    <label>{{ __('register.form.inputs.username.label') }}</label>
                    <div class="input-group">
                        <input name="name" type="text"
                               class="form-control form-control-lg @error('name') alert alert-danger @enderror"
                               placeholder="{{ __('register.form.inputs.username.placeholder') }}" required/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-user"></i>
                            </span>
                        </span>
                    </div>
                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="form-group mb-3">
                    <label>{{ __('register.form.inputs.email.label') }}</label>
                    <div class="input-group">
                        <input name="email" type="text"
                               class="form-control form-control-lg @error('email') alert alert-danger @enderror"
                               placeholder="{{ __('register.form.inputs.email.placeholder') }}" required />
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
                        <label>{{ __('register.form.inputs.password.label') }}</label>
                    </div>
                    <div class="input-group">
                        <input name="password" type="password"
                               class="form-control form-control-lg @error('password') alert alert-danger @enderror"
                               placeholder="{{ __('register.form.inputs.password.placeholder') }}" required/>
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

                <div class="form-group mb-3">
                    <div class="clearfix">
                        <label>{{ __('register.form.inputs.confirm_password.label') }}</label>
                    </div>
                    <div class="input-group">
                        <input name="password_confirmation" type="password"
                               class="form-control form-control-lg @error('password_confirmation') alert alert-danger @enderror"
                               placeholder="{{ __('register.form.inputs.confirm_password.placeholder') }}" required/>
                        <span class="input-group-append">
                            <span class="input-group-text">
                                <i class="fas fa-lock"></i>
                            </span>
                        </span>
                    </div>
                    @error('password_confirmation')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>

                <div class="row">
                    <div class="col-sm-8">
                        <div class="checkbox-custom checkbox-default">
                            <input id="is_candidate" name="is_candidate" type="checkbox" @error('is_candidate')
                            class="alert alert-danger" @enderror />
                            <label for="is_candidate">{{ __('register.form.inputs.candidate.label') }}</label>
                        </div>
                        @error('is_candidate')
                            <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                        @enderror
                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary mt-2">{{ __('register.form.buttons.submit') }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection
