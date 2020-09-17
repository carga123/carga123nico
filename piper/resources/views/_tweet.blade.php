<div class="flex p-4 {{$loop->last ? '' : 'border-b border-b-gray-400'}}">

    <div class="mr-2 flex-strink-0">

        <a href="{{ $tweet->user->path() }}">

            <img src="{{ auth()->user()->avatar }}" height="40" width="40" class="rounded-full mr-3">
        </a>
    </div>

    <div>


        <h5 class="font-bold mb-4">

            <a href="{{ $tweet->user->path() }}">

                {{ $tweet->user->name }}

            </a>

        </h5>



        <p class="text-sm mb-2">

            {{ $tweet->body}}

        </p>

        <div class="flex">

            <form method="POST" action="/tweets/{{ $tweet->id}}/like">

                @csrf
                <div class="flex items-center mr-4 {{ $tweet->isLikedBy(current_user()) ? 'text-blue-500': 'text-grey-600'}}">
                    <img src="https://cdn.icon-icons.com/icons2/688/PNG/128/like-thumbs-up-hand-social-media_icon-icons.com_61429.png" class="fill-current text-gray-500 mr-1 w-3" data-original="https://cdn.icon-icons.com/icons2/688/PNG/128/like-thumbs-up-hand-social-media_icon-icons.com_61429.png" title="Descarga Icono gusta, pulgar, arriba, mano, social, medios de comunicacion   Gratis" alt="Icono Gusta, pulgar, arriba, mano, social, medios de comunicacion">

                    <button type="submit" class="text-xs">

                        {{$tweet->likes ?: 0}}

                    </button>
                </div>
            </form>
            
            <form method="POST" action="/tweets/{{ $tweet->id }}/like">
            
                @csrf
                @method('DELETE')

                <div class="flex items-center {{ $tweet->isDislikedBy(current_user()) ? 'text-blue-500': 'text-grey-600'}}">
                    <img src="https://cdn.icon-icons.com/icons2/688/PNG/128/thumbs-down-hand-social-media-dislike_icon-icons.com_61424.png" class="fill-current text-gray-500 mr-1 w-3" data-original="https://cdn.icon-icons.com/icons2/688/PNG/128/thumbs-down-hand-social-media-dislike_icon-icons.com_61424.png" title="Descarga Icono pulgares hacia abajo, la mano, social, medios de comunicacion, no les gusta   Gratis" alt="Icono Pulgares hacia abajo, la mano, social, medios de comunicacion, no les gusta">

                    <button type="submit" class="text-xs">

                     {{$tweet->dislikes ?: 0}}

                    </button>
                </div>
            </form>

            

        </div>
    </div>
</div>