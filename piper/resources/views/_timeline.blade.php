
<div class="border border-grey-300 rounded-lg">

    @forelse ($tweets as $tweet)
         @include('_tweet')
         @empty
         <p class="p-4">no tweets upps no  friends </p>
    @endforelse

</div>