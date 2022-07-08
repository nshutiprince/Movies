<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/tailwindcss/2.2.19/tailwind.min.css">
    <title>Add Movie</title>
</head>
<body>
<div class="relative flex h-full w-full">
  <div class="h-screen w-1/2 bg-black">
    <div class="mx-auto flex h-full w-2/3 flex-col justify-center text-white xl:w-1/2">
      {{-- <div>
        <p class="text-2xl">Login|</p>
        <p>please login to continue|</p>
      </div> --}}
      {{-- <div class="my-6">
        <button class="flex w-full justify-center rounded-3xl border-none bg-white p-1 text-black hover:bg-gray-200 sm:p-2"><img src="https://freesvg.org/img/1534129544.png" class="mr-2 w-6 object-fill" />Sign in with Google</button>
      </div>
      <div>
        <fieldset class="border-t border-solid border-gray-600">
          <legend class="mx-auto px-2 text-center text-sm">Or login via our secure system</legend>
        </fieldset>
      </div> --}}
      <div class="mt-10">
        
          {{-- <div>
            <label class="mb-2.5 block font-extrabold" for="email">Email</label>
            <input type="email" id="email" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow placeholder:opacity-30" placeholder="mail@user.com" />
          </div> --}}
          {{-- <div class="mt-4">
            <label class="mb-2.5 block font-extrabold" for="email">Password</label>
            <input type="password" id="email" class="inline-block w-full rounded-full bg-white p-2.5 leading-none text-black placeholder-indigo-900 shadow" />
          </div> --}}
          {{-- <div class="mt-4 flex w-full flex-col justify-between sm:flex-row">
            <!-- Remember me -->
            <div><input type="checkbox" id="remember" /><label for="remember" class="mx-2 text-sm">Remember me</label></div>
            <!-- Forgot password -->
            <div>
              <a href="#" class="text-sm hover:text-gray-200">Forgot password</a>
            </div>
          </div> --}}
          <div class="my-50">
           
            <input
            class="movie"
            id="title"
            name="title"
            type="text"
            placeholder="Movie title" required


{{--        
          <select
          
          class="movie" id="language" name="language" required>
            <option value=""></option>
            <option value="english">English</option>
            <option value="french">frenc</option>
            <option value="kinyarwanda">kinyarwanda</option>
            <option value="kiswahili">kiswahili</option>
          </select> --}}

          <div class="add_movie">
          <form action="/action_page.php"  class="form">
            @csrf
            @method('POST')
            <label class="block mb-50 text-sm leading-tight text-black-700" for="title"> </label>
          <br><br>
            <select class="movie" id="language" name="language" required>
              Language
              <option value=""></option>
              <option value="english">English</option>
              <option value="french">frenc</option>
              <option value="kinyarwanda">kinyarwanda</option>
              <option value="kiswahili">kiswahili</option>
            </select>
            <br><br>
            <form action="/url" method="GET">
              <p>Please enter Describition:</p>
              <input type="text" name="name" placeholder="Commando">
          </form>
          <br><br>
              <input type="file" id="myFile" name="filename">
              {{-- <input type="submit"> --}}
              <button type="submit">Submit</button>
            {{-- <button class="w-full rounded-full bg-orange-600 p-5 hover:bg-orange-800">Submit</button> --}}
          </form>
          </div>
      </div>
    </div>
  </div>
  <div class="h-screen w-1/2 bg-blue-600">
    <img src="https://images.pexels.com/photos/2523959/pexels-photo-2523959.jpeg" class="h-full w-full" />
  </div>
</div>
</body>
</html>