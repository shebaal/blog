<div>
  


    @if (session()->has('message'))
      
        <div class="flex my-4 p-4 text-sm text-gray-700 bg-gray-100 rounded-lg dark:bg-gray-700 dark:text-gray-300" role="alert">
            <svg class="inline flex-shrink-0 mr-3 w-5 h-5" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path fill-rule="evenodd" d="M18 10a8 8 0 11-16 0 8 8 0 0116 0zm-7-4a1 1 0 11-2 0 1 1 0 012 0zM9 9a1 1 0 000 2v3a1 1 0 001 1h1a1 1 0 100-2v-3a1 1 0 00-1-1H9z" clip-rule="evenodd"></path></svg>
            <div>
              <span class="font-medium">
                {{ session('message') }}    
            </span> 
            </div>
          </div>
    @endif
  
    
    @if($updateMode)

    <div class="grid gap-4 grid-cols-1 md:grid-cols-2">
        @include('livewire.update')
   
    @else
  
    <div class="grid gap-4 grid-cols-1 md:grid-cols-2">
        @include('livewire.create')

    
    @endif

    {{-- @foreach($posts as $post)
    <div class="my-4 h-16 flex flex-col p-4 bg-gray-800 border-gray-800 shadow-md hover:shodow-lg rounded-2xl cursor-pointer transition ease-in duration-500  transform hover:scale-105">

        <div class="flex items-center justify-between">
          <div class="flex items-center mr-auto">

            <div class="flex flex-col ml-3">
              <div class="font-medium leading-none text-gray-100">{{ $post->title }}</div>
              <p class="text-sm text-gray-500 leading-none mt-1">{{ $post->description }}</p>
            </div>
          </div>
          <button wire:click="edit({{ $post->id }})"  class="flex-no-shrink text-xs  font-medium tracking-wider  text-gray-400 hover:text-green-400 transition ease-in duration-300 mr-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
        </button>
          <button wire:click="delete({{ $post->id }})"  class="flex-no-shrink text-xs  font-medium tracking-wider  text-gray-400 hover:text-red-400 transition ease-in duration-300 ml-2">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
        </button>
        </div>
      </div>
    </div>

    @endforeach --}}


    <div class="my-4 relative overflow-x-auto shadow-md sm:rounded-lg">
        <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        No
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Title
                    </th>
                    <th scope="col" class="px-6 py-3">
                        description
                    </th>
                  
                    <th scope="col" class="px-6 py-3">
                        <span class="sr-only">Edit</span>
                    </th>
                </tr>
            </thead>
            <tbody>
                
            @foreach($posts as $post)
                <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 dark:text-white whitespace-nowrap">
                        {{ $post->id }}
                    </th>
                    <td class="px-6 py-4">
                        {{ $post->title }}
                    </td>
                    <td class="px-6 py-4">
                        {{ $post->description }}
                    </td>
                    <td class="px-6 py-4">
                        <button wire:click="edit({{ $post->id }})"  class="flex-no-shrink text-xs  font-medium tracking-wider  text-gray-400 hover:text-green-400 transition ease-in duration-300 mr-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M11 5H6a2 2 0 00-2 2v11a2 2 0 002 2h11a2 2 0 002-2v-5m-1.414-9.414a2 2 0 112.828 2.828L11.828 15H9v-2.828l8.586-8.586z"></path></svg>
                        </button>
                          <button wire:click="delete({{ $post->id }})"  class="flex-no-shrink text-xs  font-medium tracking-wider  text-gray-400 hover:text-red-400 transition ease-in duration-300 ml-2">
                            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"></path></svg>
                        </button>
                    </td>
                  
                </tr>
              
            @endforeach
            </tbody>
        </table>
    </div>
</div>
    

    {{-- <table class="table table-bordered mt-5">
        <thead>
            <tr>
                <th>No.</th>
                <th>Title</th>
                <th>description</th>
                <th width="150px">Action</th>
            </tr>
        </thead>
        <tbody>
            @foreach($posts as $post)
            <tr>
                <td>{{ $post->id }}</td>
                <td>{{ $post->title }}</td>
                <td>{{ $post->description }}</td>
                <td>
                <button wire:click="edit({{ $post->id }})" class="btn btn-primary btn-sm">Edit</button>
                    <button wire:click="delete({{ $post->id }})" class="btn btn-danger btn-sm">Delete</button>
                </td>
            </tr>
            @endforeach
        </tbody>
    </table>  --}}
