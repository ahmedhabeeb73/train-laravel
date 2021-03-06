<nav class="flex justify-between bg-white  p-6">
  <ul class="flex items-center">
      <li><a class="p-3" href="#">Home</a></li>

  </ul>

    <ul class="flex items-center">
        @auth
        <li><a class="p-3" href="{{route('home')}}">{{auth()->user()->name}}</a></li>
            <li><a href="{{route('dashboard')}}">Dashboard</a></li>
            <li>
                <form class="p-3 inline" action="{{route('logout')}}" method="post">
                    @csrf
                  <button type="submit">Logout</button>
                </form>
            </li>
        @endauth

        @guest
        <li><a class="p-3" href="{{route('login')}}">Login</a></li>
        <li><a class="p-3" href="{{route('register')}}">Register</a></li>
            @endguest

    </ul>
</nav>
