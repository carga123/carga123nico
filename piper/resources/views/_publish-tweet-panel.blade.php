<div class="border border-blue-300 rounded-lg px-8 py-1 mb-8">
                    
    <form method="POST"  action="/tweets">
        @csrf
        <textarea   
                    
            name="body" 
            class="w-full"
            placeholder="Pp" 
            
                   
        > 
                
        </textarea>

        <hr class="my-4">

            <footer class="flex justify-between">

                        <img 

                        src="{{ auth()->user()->avatar }}" 
                        alt="your avatar"
                        class="rounded-full mr-2"
                        height="50"
                        width="50"
                                        
                      >

                <button type="submit" 
                        
                    class=" bg-blue-500 rounded-lg shadow py-2 px-2 text-white text-sm"> 

                    P!per now !

                </button>

            </footer>

               

    </form>

        @error('body')
            <p class="text-red-400 text-sm mt-2">{{ $message }}</p>
        @enderror
</div>
