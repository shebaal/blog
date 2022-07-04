<form class="my-4">



    <!--create -->
    <div
        class="flex flex-col p-4 relative items-center justify-center bg-gray-800 border border-gray-800 shadow-lg  rounded-2xl">
        <div class="w-full">
            <div class="text-center p-5 flex-auto justify-center">
                <div class="mb-6">
                    <label for="title" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter
                        Title</label>
                    <input type="text" id="exampleFormControlInput1"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        id="exampleFormControlInput1" placeholder="Enter Title" wire:model="title" required>
                    @error('title')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="mb-6">
                    <label for="password" class="block mb-2 text-sm font-medium text-gray-900 dark:text-gray-300">Enter
                        Description</label>
                    <textarea type="password" id="exampleFormControlInput2" wire:model="description" placeholder="Enter description"
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500"
                        required>
                    </textarea>
                    @error('description')
                        <span class="text-danger">{{ $message }}</span>
                    @enderror
                </div>
            </div>
            <div class="p-3  mt-2 text-center space-x-4 md:block">

                <button wire:click.prevent="store()"
                    class="bg-green-400 hover:bg-green-500 px-5  py-2 text-sm shadow-sm hover:shadow-lg font-medium tracking-wider border-2 border-green-300 hover:border-green-500 text-white rounded-full transition ease-in duration-300">Add</button>
            </div>
        </div>
    </div>



</form>
