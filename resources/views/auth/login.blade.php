@extends('layouts.user')

@section('content')
<div class="w-full h-screen bg-[url('https://scontent.fbkk22-8.fna.fbcdn.net/v/t1.6435-9/133857525_1896428583846168_2080736520192577908_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=dd63ad&_nc_eui2=AeFsvf6uv8HsTRt1Z6PewWwyBfTh9sC6C5QF9OH2wLoLlDFs9g1tH6S1P4WGz3YipcHesz0mIMF2APm_R-7maxuO&_nc_ohc=lBm9PL8L2ogAX-LfSBo&_nc_ht=scontent.fbkk22-8.fna&oh=00_AfAYwaGZWz_n8vY9HYVHdRSh6GdgG08nxpu2SExkRAqpmg&oe=65FC2575')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
<div class="">
    <div class=" mt-[15rem] border-2 p-4 w-1/3 mx-auto bg-[#a3a3a3]/80">
        <div class="">
            <div class="">
                <div class="text-center text-[30px] text-black">เข้าสู่ระบบ</div>
                <div class="flex justify-center">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="mt-4 ">
                            <label for="email" class=" text-black">อีเมลผู้ใช้</label>

                            <div class="">
                                <input id="email" type="email" class="rounded p-1 text-gray-500 @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class=" text-black">รหัสผ่าน</label>

                            <div class="">
                                <input id="password" type="password" class="rounded p-1 text-gray-500  @error('password') is-invalid @enderror " name="password" required autocomplete="current-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="mt-4">
                            <div class="">
                                <div class="form-check">
                                    <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                    <label class="form-check-label text-black" for="remember">
                                        {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="">
                            <div class="">
                                <button type="submit" class="hover:text-rose-500 text-black">
                                    เข้าสู่ระบบ
                                </button>

                                @if (Route::has('password.request'))
                                    <a class="ml-10 hover:text-rose-500 text-black" href="{{ route('password.request') }}">
                                        ลืมรหัสผ่าน?
                                    </a>
                                @endif
                                <a href="{{ url('/register') }}"><div class="hover:text-rose-500 text-black"><h1>ลงทะเบียนผู้ใช้</h1></div></a>
                            </div>
                        </div>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
</div>
</div>
@endsection
