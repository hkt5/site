@extends('layouts.auth')
@section('content')
    <div class="panel card-sign">
        <div class="card-title-sign mt-3 text-right">
            <h2 class="title text-uppercase font-weight-bold m-0"><i class="fas fa-user mr-1"></i> {{ __('verify.card.header') }}</h2>
        </div>
        <div class="card-body">
            <form action="{{ route('verification.resend') }}" method="post">
                @csrf
                <div class="form-group mb-3">
                    @if (session('resent'))
                        <div class="alert alert-success" role="alert">
                            {{ __('verify.card.texts.resend_email') }}
                        </div>
                    @endif

                    {{ __('verify.card.texts.before') }}
                    {{ __('verify.card.texts.after') }},
                </div>

                <div class="row">
                    <div class="col-sm-4 text-right">
                        <button type="submit" class="btn btn-primary mt-2">{{ __('verify.card.form.buttons.submit') }}</button>
                    </div>
                </div>


            </form>
        </div>
    </div>
@endsection

