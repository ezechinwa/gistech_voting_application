<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>Gistech Voting</title>

        <!-- Fonts -->
        <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;600;700&display=swap">

        <!-- Styles -->
        <link rel="stylesheet" href="{{ asset('css/app.css') }}">

        <!-- Scripts -->
        <script src="{{ asset('js/app.js') }}" defer></script>
    </head>
    <body class="font-sans bg-gray-background text-gray-900 text-sm ml-8 mr-8 ">
      <header class="flex items-center justify-between px-8 py-4 flex-nowrap">

          <a href="#" class=" ml-4"><img src="{{ asset('img/logo.svg') }}" alt=""></a>

          <div class="flex justify-center items-center mr-4 	">
              @if (Route::has('login'))
                  <div class=" flex items-center px-6 py-4 sm:block ">
                      @auth
                          <form method="POST" action="{{ route('logout') }}">
                              @csrf

                              <a :href="route('logout')"
                                               onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                  {{ __('Log Out') }}
                              </a>
                          </form>
                      @else
                          <a href="{{ route('login') }}" class="text-sm text-gray-700 dark:text-gray-500 underline">Log in</a>

                          @if (Route::has('register'))
                              <a href="{{ route('register') }}" class="ml-4 text-sm text-gray-700 dark:text-gray-500 underline">Register</a>
                          @endif
                      @endauth
                  </div>
              @endif

                  <div class="mr-4 ml-4">
                      <a href="#">
                          <img src="https://www.gravatar.com/avatar/00000000000000000000000000000000?d=mp" alt="avatar"  class="w-10 h-10 rounded-full">
                      </a>
                  </div>
          </div>


      </header>


    <main class="container mx-auto max-w-custom  flex" >
        <div class="w-70 mr-5">
            <div class="border border-2 border-gray-200 rounded-xl mt-16 bg-white  ">
                  <div class="text-center py-2 px-6 mt-6">
                    <h3 class="font-semibold text-base">Add an Idea</h3>
                     <p class="text-xs mt-4">Let us know what you would like and we'll take a look over!</p>
                  </div>

                <form action="#" method="POST" class="space-y-4 px-4 py-6">
                    <div>
                        <input type="text" class="w-full bg-gray-100 text-sm rounded-xl border-none placeholder-gray-900 px-4 py-2 mb-4"
                        placeholder="Your idea">
                    </div>


                    <div>
                        <select name="category_add" id="category_add" class="w-full bg-gray-100 text-sm rounded-xl border-none  px-4 py-2 text-xs ">
                            <option value="Category One">Category One </option>
                            <option value="Category Two">Category Two </option>
                            <option value="Category Three">Category Three </option>
                        </select>
                    </div>

                    <div>
                        <textarea name="idea"
                                  id="idea"
                                  cols="30"
                                  rows="4" class="w-full bg-gray-100 border-none rounded-xl placeholder-gray-900 text-sm px-4 py-2"
                                  placeholder="Describe your idea">

                        </textarea>
                    </div>

                    <div class="flex items-center justify-between space-x-3">
                        <button class="flex items center justify-center  w-1/2 h-11 text-xs bg-gray-200 hover:bg-gray-400 hover:text-white font-semibold rounded-xl border border-gray-200    transition
 duration-150 ease-in px-6 py-3">
                            <svg class="w-4 " fill="currentColor"
                                 viewBox="0 0 20 20">
                                <path fill-rule="evenodd" d="M8 4a3 3 0 00-3 3v4a5 5 0 0010 0V7a1 1 0 112 0v4a7 7 0 11-14 0V7a5 5 0 0110 0v4a3 3 0 11-6 0V7a1 1 0 012 0v4a1 1 0 102 0V7a3 3 0 00-3-3z" clip-rule="evenodd">
                                </path>
                            </svg>
                            <span class="ml-2">Attach</span>

                        </button>


                        <button class="flex items center justify-center  w-1/2 h-11 text-xs text-white bg-blue-500 hover:bg-blue-hover hover:text-white font-semibold rounded-xl border border-gray-200    transition
 duration-150 ease-in px-6 py-3">

                            <span class="">Submit</span>

                        </button>



                    </div>
                </form>




             </div>

        </div>
{{--        --}}

        <div class="w-175">
          <nav class="flex items-center justify-between text-xs">
              <ul class="flex uppercase font-semibold   pb-3 space-x-10">
                  <li><a href="#" class="border-b-4 pb-3 border-blue-500">ALL  IDEAS (87)</a></li>
                  <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">CONSIDERING (6)</a></li>
                  <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">IN PROGRESS (1)</a></li>
              </ul>

              <ul class="flex uppercase font-semibold  pb-3 space-x-10">
                  <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">IMPLEMENTED (10)</a></li>
                  <li><a href="#" class="text-gray-400 transition duration-150 ease-in border-b-4 pb-3 hover:border-blue-500">CLOSED (1)</a></li>
              </ul>

          </nav>

          <div class="mt-8">
              {{ $slot }}
          </div>

        </div>
    </main>

    </body>
</html>
