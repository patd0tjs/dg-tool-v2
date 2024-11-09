@extends('auth.template')

@section('content')
    <form method="POST" class="ps-5 pe-5" action="{{ route('password.email') }}">
        @csrf

        {{-- email input --}}
        <div class="row mb-3 text-start input-container">
            <div class="col-12">
                <label class="fs-5">Email</label>
                <input type="email" class="form-control border-primary" name="email" required>
            </div>
        </div>

        {{-- submit button --}}
        <button type="submit" class="btn btn-primary fs-6 mt-2 ps-4 pe-4">Send Code</button>
    </form>
@endsection
