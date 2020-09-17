<h3 class="font-bold text-xl mb-4">FollowinG</h3>

<ul>
    @forelse (auth()->user()->follows as $user)
        <li class="mb-4">
            <div >
                <a href="{{ route('profile', $user) }}" class="flex items-center text-sm">
                    <img 
                        src="{{ $user->avatar }}" 
                        alt=""
                        class="rounded-full mr-3"
                        height="40"
                        width="40"
                    
                        >

                        {{ $user->name }}
                </a>
            </div>
        </li>

        @empty

        <li>No FrogS</li>

    @endforelse
    
</ul>