@extends('layouts.user')

@section('content')
<div class="w-full h-screen bg-[url('https://scontent.fbkk22-8.fna.fbcdn.net/v/t1.6435-9/133857525_1896428583846168_2080736520192577908_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=dd63ad&_nc_eui2=AeFsvf6uv8HsTRt1Z6PewWwyBfTh9sC6C5QF9OH2wLoLlDFs9g1tH6S1P4WGz3YipcHesz0mIMF2APm_R-7maxuO&_nc_ohc=lBm9PL8L2ogAX-LfSBo&_nc_ht=scontent.fbkk22-8.fna&oh=00_AfAYwaGZWz_n8vY9HYVHdRSh6GdgG08nxpu2SExkRAqpmg&oe=65FC2575')] bg-cover bg-center">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
<div class="w-1/3 mx-auto border-2 mt-[15rem] bg-gray-200/90 p-4 border-black shadow-xl">
    <div class="">
        <div class="">
            <div class="">
                <div class="text-center text-[30px] mt-4">ลงทะเบียนเข้าใช้งาน</div>

                <div class="mt-4 flex justify-center">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="">
                            <label for="name" class="">ชื่อ</label>

                            <div class="">
                                <input id="name" type="text" class=" @error('name') is-invalid @enderror" name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="email" class="">อีเมล</label>

                            <div class="">
                                <input id="email" type="email" class=" @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password" class="">รหัสผ่าน</label>

                            <div class="">
                                <input id="password" type="password" class=" @error('password') is-invalid @enderror" name="password" required autocomplete="new-password">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="">
                            <label for="password-confirm" class="">ยืนยันรหัสผ่าน</label>

                            <div class="">
                                <input id="password-confirm" type="password" class="" name="password_confirmation" required autocomplete="new-password">
                            </div>
                        </div>

                        <div class="">
                            <div class="mt-2">
                                <button type="submit" class="hover:text-rose-500">
                                    สมัครสมาชิก
                                </button>
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
