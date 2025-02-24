<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
    <script src="https://unpkg.com/aos@2.3.4/dist/aos.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/vanilla-tilt/1.8.1/vanilla-tilt.min.js"
        integrity="sha512-wC/cunGGDjXSl9OHUH0RuqSyW4YNLlsPwhcLxwWW1CR4OeC2E1xpcdZz2DeQkEmums41laI+eGMw95IJ15SS3g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <script src="https://cdn.jsdelivr.net/npm/flowbite@2.5.2/dist/flowbite.min.js"></script>

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">





    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />
    <title></title>


</head>

<body>
    <div class="container">
        @if ($errors->any())
            <div class="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif
    </div>
    <div class="w-1/2 mx-auto my-4">
        <div class="flex justify-between items-center">
            <h3 class="text-3xl text-bold my-5">Listes Des Projets</h3>
            <a class="rounded-lg bg-blue-300 text-white p-4 hover:text-white" href="{{ route('projects.create') }}">Create</a>
        </div>
        <div>
            <table class="w-full">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>Image</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>

                    <tr>
                        @foreach ($projects as $project)
                            <td class="text-center">{{ $project->id }}</td>
                            <td  class="text-center">{{ $project->name }}</td>
                            <td class="text-center w-40 h-64"><img src="storage/{{ $project->image }}" /></td>
                        @endforeach
                    </tr>
                </tbody>
            </table>
        </div>


    </div>

</body>

</html>
