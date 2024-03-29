<form wire:submit.prevent="save" class="max-w-sm mx-auto">
    <div class="mb-5">
        <label for="name" class="block mb-2 text-sm font-medium text-gray-900">Name</label>
        <input wire:model="form.name" type="text" id="name" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" wire:model="name">
        @error('form.name')
            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
        @enderror 
    </div>
    <div class="mb-5">
        <label for="email" class="block mb-2 text-sm font-medium text-gray-900">Email</label>
        <input wire:model="form.email" type="email" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" wire:model="email">
        @error('form.email')
            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
        @enderror 
    </div>
    <div class="mb-5">
        <label for="password" class="block mb-2 text-sm font-medium text-gray-900">Password</label>
        <input wire:model="form.password" type="password" id="password" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" wire:model="password">
        @error('form.password')
            <p class="mt-2 text-xs text-red-600">{{ $message }}</p>
        @enderror 
    </div>
    <button type="submit" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm w-full sm:w-auto px-5 py-2.5 text-center">Submit</button>
</form>