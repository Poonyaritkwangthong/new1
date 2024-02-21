<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <script src="https://cdn.tailwindcss.com"></script>
    <title>Document</title>
</head>
<body>
    <div class="shadow-inner bg-blue-700 w-5/6 mx-auto">
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
<div>
    <a href="{{ url('user_vote') }}">back</a>
</div>
</body>
</html>
