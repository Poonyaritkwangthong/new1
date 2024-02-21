@extends('layouts.user')

@section('title')
Report Page
@endsection

@section('content')
<div class="w-full h-screen bg-[url('https://scontent.fbkk22-8.fna.fbcdn.net/v/t1.6435-9/133857525_1896428583846168_2080736520192577908_n.jpg?_nc_cat=110&ccb=1-7&_nc_sid=dd63ad&_nc_eui2=AeFsvf6uv8HsTRt1Z6PewWwyBfTh9sC6C5QF9OH2wLoLlDFs9g1tH6S1P4WGz3YipcHesz0mIMF2APm_R-7maxuO&_nc_ohc=lBm9PL8L2ogAX-LfSBo&_nc_ht=scontent.fbkk22-8.fna&oh=00_AfAYwaGZWz_n8vY9HYVHdRSh6GdgG08nxpu2SExkRAqpmg&oe=65FC2575')] bg-cover bg-center text-white">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
@if ($message = Session::get('success'))
<div class="bg-[#3abd55]/90 p-2 text-[14px] rounded font-bold">
    <p>{{ $message }}</p>
</div>
@endif
  <div class="my-4 mx-10 ">
        <h1 class="text-[60px] font-heading font-bold ml-10">เเจ้งปัญหาออนไลน์ในหมู่บ้าน</h1>
        <a href="{{ route('report.create') }}">
        <div class="bg-[#e69100] flex items-center gap-4 p-4 my-4 ml-4 w-1/4 hover:bg-[#dd5f22] rounded drop-shadow-xl">
            <div>
                <i class="text-2xl fa-regular fa-paper-plane"></i>
            </div>
            <div>
                <h2 class="text-[30px] font-bold">เเจ้งปัญหาออนไลน์</h2>
            </div>
        </div>
        </a>
        <div class="bg-[#31ad82] flex items-center gap-4 p-4 my-4 ml-4 w-1/4 rounded drop-shadow-xl">
            <div>
                <i class="text-2xl fa-solid fa-mobile-screen-button"></i>
            </div>
                 <div>
                    <h2 class="text-[30px] font-bold">โทร 089-250-4424</h2>
                </div>
            </div>
    </div>
  </div>
</div>
</div>


@endsection
