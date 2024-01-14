<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Wiki</title>
    <!-- Include Tailwind CSS from CDN -->
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
</head>

<body class="flex items-center justify-center flex-col h-screen bg-gray-100">
<h1 class="text-3xl font-bold mb-4">Add a New Wiki</h1>
<div class="w-[50%] mx-auto"> <form action="../../../public/index.php?action=insert" method="post" class="max-w-md bg-white p-6 rounded-md shadow-md">
        <!-- Form fields for adding a new Wiki -->
        <div class="mb-4">
            <label for="title" class="block text-gray-600 text-sm font-semibold mb-2">Title</label>
            <input type="text" name="title" id="title" class="w-full p-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="content" class="block text-gray-600 text-sm font-semibold mb-2">Content</label>
            <input type="text" name="content" id="content" class="w-full p-2 border rounded-md" required>
        </div>

        <div class="mb-4">
            <label for="user_id" class="block text-gray-600 text-sm font-semibold mb-2">User ID</label>
            <input type="text" name="user_id" id="user_id" class="w-full p-2 border rounded-md" required>
        </div>

        <input type="submit" value="Add Wiki" class="bg-blue-500 text-white p-2 rounded-md cursor-pointer">
    </form></div>
   

    <!-- Include your JavaScript or any additional scripts if needed -->
</body>
</html>
