<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Document</title>
</head>
<body>
<div style="width: 900px" class="container max-w-full mx-auto pt-4">
    <h1 class="text-2xl font-bold mb-4">News</h1>
    <a href="/news/create" class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow my-4">Add Post</a>

@foreach($news  as $new)
    <article class="mb-2">
        <a href="/news/{{ $new->id }}/edit" class="text-xl font-bold  text-blue-500">{{$new->title}}</a>

        <p text-md text-gray-600>{{$new->preview}}</p>
        <p text-md text-gray-600>{{$new->content}}</p>

        <hr class="mt-2">
    </article>
    @endforeach
</div>
</body>
</html>
