
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://unpkg.com/tailwindcss@0.3.0/dist/tailwind.min.css" rel="stylesheet">

</head>
<body class="h-screen   overflow-hidden flex items-center justify-center" style="background: #edf2f7;">
    <div class=" min-h-screen flex flex-col w-full"  >
            <div class="container max-w-sm mx-auto flex-1 flex flex-col items-center justify-center px-2">
                <div class="bg-white px-6 py-8 rounded shadow-md text-black w-full">
                    <h1 class="mb-8 text-3xl text-center">Login</h1>
                  <form method="post" action="{{ route('login') }}">
                    @csrf
                <input
                    type="text"
                    class="block border border-grey-light w-full p-3 rounded mt-4
                    @if ($errors->has('email'))
                    border-red
                    @endif
                    "
                    name="email"
                    placeholder="Email" required/>
                    <span class="text-red">{{ $errors->first('email') }}</span>
                <input
                    type="password"
                    class="block border border-grey-light w-full p-3 rounded mt-4
                    @if ($errors->has('password'))
                    border-red
                    @endif
                    "
                    name="password"
                    placeholder="Password" required/>
                    <span class="text-red">{{ $errors->first('password') }}</span>

                <button
                    type="submit"
                    class="w-full mt-2 text-center py-3 rounded bg-green text-white hover:bg-green-dark focus:outline-none my-1"
                >Login</button>
                  </form>

                    <div class="text-center text-sm text-grey-dark mt-4">
                        You Don't have an account?
                        <a class="no-underline border-b border-blue text-blue" href="{{ route('register') }}">
                           Sign up
                        </a>.
                    </div>
                </div>


            </div>
        </div>
</body>
</html>
