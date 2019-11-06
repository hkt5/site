@extends('layouts.auth')
@section('content')
    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> {{ __('email.card.header') }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('password.email') }}" method="post">
                @csrf
                @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                @endif
                <div class="form-group mb-3">
                    <label>{{ __('email.card.form.inputs.email.label') }}</label>
                    <div class="input-group">
                        <input name="email" type="email"
                               class="form-control form-control-lg @error('email') alert alert-danger @enderror"
                               placeholder="{{ __('email.card.form.inputs.email.placeholder') }}" required/>
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

                <div class="row">
                    <div class="col-sm-8">
                    </div>
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary mt-2">{{ __('email.card.form.buttons.submit') }}</button>
                    </div>
                </div>

            </form>
        </div>
    </div>
@endsection

