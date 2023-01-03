<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body>
    
    <div>
        <div>
            <form action="{{url('sert')}}" method="post">
                @csrf
            <input type="text" maxlength="30" class="rounded-lg ring-1 border outline-border hover:ring-sky-400 " name="nama">
            <button class="px-5 py-2 bg-blue-500 rounded-full">tes</button>
        </form>
        </div>
    </div>
</body>
</html>