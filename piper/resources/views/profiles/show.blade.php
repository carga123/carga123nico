<x-app>
    <header class="mb-6 relative">
        <div class="relative">
            <img src="/images/biografia.jpg" 
                alt="" 
                class="mb-2 rounded-full border border-gray-300"
                >


            <img src="{{ $user->avatar }}" 
                alt="" 
                class="rounded-full mr-2 absolute bottom-0 trasnform -translate-x-1/2    " 
                style="left: 40% "
                width="150"
               >
        </div>
        <div class="flex justify-between items-center mb-6">
            <div>

                <h2 class="font-bold text-2xl ">{{ $user->name }}</h2>

                <p class="text.sm">Joined {{$user->created_at->diffForHumans() }}</p>

            </div>


            <div class="flex">

            @can ('edit', $user)
                <a href="{{ $user->path('edit')}}" 
                    class=" rounded-full border border-gray-300 py-2 px-4 text-black text-xs mr-2">
                    Edit Profile
                </a>
             @endcan   

                <x-follow-button :user="$user"></x-follow-button>



            </div>




        </div>


        <p class="text-sm">
            isdkjfhn sjkdahf nsdjalhfnño sdjlahfñosdjlhf ñjsdhafño sdjahjsaf sdjahjsafaousdhfñ
            spdifj ñosdialkfj ñok ñodo ljafjñ

        </p>




    </header>

    @include ('_timeline',[

    'tweets' => $user->tweets

    ])

</x-app>