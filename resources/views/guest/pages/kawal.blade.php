@extends('vendor.lapdu.templates.alpha.templatealt')

@section('title', 'Pengaduan Masyarakat')

@section('judulhalaman', 'KEJAKSAAN AGUNG')

@section('subjudul', 'REPUBLIK INDONESIA')

@section('content')
    <header>
        <h2>Login</h2>
        <p>Laporan Pengaduan Masyarakat</p>
    </header>

    <div class="box">
        <form method="post" action="{{ route('login') }}">
            {{ csrf_field() }}

            <div class="row uniform 50%">
                {{--  {{ $errors->has('email') ? ' has-error' : '' }}  --}}

                <div class="6u 12u(mobilep)">
                    <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}" required autofocus placeholder="Masukkan Surel">

                    {{--  @if ($errors->has('email'))
                    <span class="help-block">
                        <strong>{{ $errors->first('email') }}</strong>
                    </span>
                    @endif  --}}
                </div>

                <div class="6u 12u(mobilep) {{-- $errors->has('password') ? ' has-error' : '' --}}">
                    <input id="password" type="password" class="form-control" name="password" required placeholder="Masukkan Kata Sandi">

                    {{--  @if ($errors->has('password'))
                    <span class="help-block">
                        <strong>{{ $errors->first('password') }}</strong>
                    </span>
                    @endif  --}}
                </div>
            </div>


            {{--  <div class="row uniform 50%">
                <div class="12u">
                    <input type="text" name="subject" id="subject" value="" placeholder="Cantumkan nomor Laporan Pengaduan" />
                </div>
            </div>  --}}

            <div class="row uniform 50%">
                <div class="6u 12u(narrower)">
                    <input type="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}>
                    <label for="copy">Ingat Saya</label>
                </div>

                <div class="6u 12u(narrower)">
                    <a class="btn btn-link" href="{{ route('password.request') }}">
                    Lupa Kata Sandi?
                </a>
                </div>
            </div>


            <div class="row uniform">
                <div class="12u">
                    <ul class="actions align-center">
                        <li><input type="submit" value="Masuk" /></li>
                    </ul>
                </div>
            </div>
        </form>


    </div>
@endsection
