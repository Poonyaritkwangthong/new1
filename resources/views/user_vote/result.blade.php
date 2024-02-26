@extends('layouts.admin')

@section('content')
<div class="w-full h-screen bg-[url('https://i.ibb.co/hZpdbkY/248479853-2133515060137518-4885646735485668126-n.jpg')] bg-cover bg-center">
    <div class="w-full h-full flex flex-col backdrop-blur-sm">
        <div>
            <h1 class="mt-10 text-[30px] text-center">ผลโหวด</h1>
        </div>
<div class="mt-10 shadow-inner bg-gray-200 w-1/3 mx-auto p-2 border-2 border-black shadow-xl text-[20px]">
    <div>
    ชื่อหัวข้อ
    {{ $result->suggestion->topic_name }}
</div>
<div>
    ชื่อหัวข้อ
    {{ $result->suggestion->s_detail }}
</div>
<div>
    เห็นด้วย
    {{ $agree }}
</div>
<div>
    ไม่เห็นด้วย
    {{ $disagree }}
</div>
</div>
<div class="mt-[15rem] ml-[4rem] hover:text-rose-500 text-[20px] font-bold ">
    <a href="{{ url('user_vote') }}" class="bg-gray-200 p-2 rounded">back</a>
</div>
</div>
</div>
@endsection
