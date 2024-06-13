<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <style>
        .box {
            display: flex;
            justify-content: center;
            align-items: center;
            width: 500px;
            height: 500px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 5px 5px 10px #e1e1e3;
            min-height: 100%;
        }
    </style>

</head>

<body class="bg-slate-200 w-full h-full flex justify-center items-center min-h-screen">


    <div class="box">
        <form class="max-w-sm mx-auto" action="{{ route('login') }}" method="POST">
            @csrf
					<h2 class="font-medium text-slate-800 text-3xl text-center pb-3 -mt-3">Connectez-vous ?</h2>
            <div class="mb-5">
                <x-input label="Votre identifiant" name="email" type="email" />
            </div>
            <div class="mb-5">
                <x-input label="Votre mot de passe" name="password" type="password" />
            </div>

            <div class="flex items-start mb-5">
                <div>
                    <div class="flex items-center h-5">
                        <input id="remember" type="checkbox" value="" name="remember"
                            class="w-4 h-4 border border-gray-300 rounded bg-gray-50 focus:ring-3 focus:ring-blue-300 dark:bg-gray-700 dark:border-gray-600 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800" />
                        <label for="remember" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                            Se souvenir de moi ?
                        </label>
                    </div>
                </div>
            </div>
            <button type="submit"
                class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-3 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                Se connecter
            </button>

            <label for="terms" class="ms-2 text-sm font-medium text-gray-900 dark:text-gray-300">
                <a href="#" class="text-blue-600 hover:underline dark:text-blue-500">Mot de passe oublie ?</a>
            </label>

        </form>
    </div>


</body>

</html>
