<ul>
    <li>
        <a class="font-bold text.lg mb-4 block" href="{{ route('home') }}">
            HOME</a></li>
    <li>
        <a class="font-bold text.lg mb-4 block" href="{{ route('profile', auth()->user())}}">
            PROFILE</a></li>
    <li>
        <a class="font-bold text.lg mb-4 block" href="/explore">
            EXPLORE</a></li>

            <li>
                <form method="POST" action="/logout">
                @csrf
                <button class="font-bold text-lg">LOGOUT</button>
            </form>
        
            </li>
  
</ul>