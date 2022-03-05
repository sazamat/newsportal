<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://unpkg.com/tailwindcss@^2/dist/tailwind.min.css">
    <title>News</title>
</head>
<body>
<div style="width: 900px" class="container max-w-full mx-auto pt-4">
    <form method="post" action="/news">

        @csrf
        <div class="mb-4">
            <label class="text-bold text-gray-800" for="title" >Title:</label>
            <input class="h-10 bg-white border border-gray-300 rounded
            py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="title" name="title"
                   >
        </div>
        <div class="mb-4">
            <label class="text-bold text-gray-800" for="autor_id" >Author id:</label>
            <input class="h-10 bg-white border border-gray-300 rounded
            py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="author_id" name="author_id"
            >
        </div>
        <div class="mb-4">
            <label class="text-bold text-gray-800" for="autor_id" >Preview</label>
            <input class="h-10 bg-white border border-gray-300 rounded
            py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="preview" name="preview"
            >
        </div>

        <div class="mb-4">
            <label class="text-bold text-gray-800" for="content" > Content:</label>
            <textarea class="h-12 bg-white border border-gray-300 rounded
            py-4 px-3 mr-4 w-full text-gray-600 text-sm focus:outline-none focus:border-gray-400 focus:ring-0" id="content" name="content"
            >
            </textarea>
        </div>
        <button class="bg-blue-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Create</button>
        <a href="/news" class="bg-gray-500 tracking-wide text-white px-6 py-2 inline-block mb-6 shadow-lg rounded hover:shadow">Cancel</a>
    </form>
</div>
</body>
</html>
