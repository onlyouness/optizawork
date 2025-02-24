<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ asset('css/custom.css') }}" />
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <title>Create project</title>
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
        <h3 class="text-3xl text-bold my-5">Ajouter Un Projet</h3>
        <form class="w-4/5 mx-auto " method="POST" enctype="multipart/form-data" action="{{ route('projects.store') }}">
            @csrf
            <div class="mb-6">
                <label for="name" class="block mb-2 text-sm font-medium text-gray-900 ">Project Name</label>
                <input type="text" value="{{old('name')}}" id="name" name="name" class="bg-gray-50 border border-gray-300 py-4 px-2 text-gray-900 text-sm rounded-lg focus:ring-blue-500 w-full "  required />
            </div> 
            <div>
                <label class="block mb-2 text-sm font-medium text-gray-900 " for="default_size">Image</label>
                <input
                    class="block w-full mb-5 text-sm text-gray-900 border border-gray-300 rounded-lg cursor-pointer bg-gray-50  focus:outline-none py-4 px-2 "
                    id="default_size" name="image" value="{{old('image')}}" type="file">
    
            </div>
            <button class="rounded-lg bg-blue-400 text-right py-3 px-5 text-lg text-white" type="submit">Submit</button>
        </form>
    
    </div>
    
</body>

</html>
