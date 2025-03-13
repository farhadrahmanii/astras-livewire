<div class="container mx-auto p-4 bg-gray-200 rounded-lg shadow-lg">
    @if (session()->has('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <form wire:submit.prevent="submit" class="bg-white shadow-md rounded px-8 pt-6 pb-8 mb-4">
        <div class="grid grid-cols-1 md:grid-cols-2 gap-4">
            <div class="mb-4">
                <label for="country" class="block text-gray-700 text-sm font-bold mb-2">Country</label>
                <input type="text" id="country" wire:model="country"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('country') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="amwal_type" class="block text-gray-700 text-sm font-bold mb-2">Amwal Type</label>
                <input type="text" id="amwal_type" wire:model="amwal_type"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('amwal_type') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="Tkhlaya_Az_tareq" class="block text-gray-700 text-sm font-bold mb-2">Tkhlaya Az
                    Tareq</label>
                <input type="text" id="Tkhlaya_Az_tareq" wire:model="Tkhlaya_Az_tareq"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('Tkhlaya_Az_tareq') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="bar_ba" class="block text-gray-700 text-sm font-bold mb-2">Bar Ba</label>
                <input type="text" id="bar_ba" wire:model="bar_ba"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('bar_ba') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="company_name" class="block text-gray-700 text-sm font-bold mb-2">Company Name</label>
                <input type="text" id="company_name" wire:model="company_name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('company_name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="number_act" class="block text-gray-700 text-sm font-bold mb-2">Number Act</label>
                <input type="text" id="number_act" wire:model="number_act"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('number_act') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="number_car" class="block text-gray-700 text-sm font-bold mb-2">Number Car</label>
                <input type="text" id="number_car" wire:model="number_car"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('number_car') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="number_code" class="block text-gray-700 text-sm font-bold mb-2">Number Code</label>
                <input type="text" id="number_code" wire:model="number_code"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('number_code') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="date" class="block text-gray-700 text-sm font-bold mb-2">Date</label>
                <input type="text" id="date" wire:model="date"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="product_type" class="block text-gray-700 text-sm font-bold mb-2">Product Type</label>
                <input type="text" id="product_type" wire:model="product_type"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('product_type') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="product_name" class="block text-gray-700 text-sm font-bold mb-2">Product Name</label>
                <input type="text" id="product_name" wire:model="product_name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('product_name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="maoda" class="block text-gray-700 text-sm font-bold mb-2">Maoda</label>
                <input type="text" id="maoda" wire:model="maoda"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('maoda') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="morawaga" class="block text-gray-700 text-sm font-bold mb-2">Morawaga</label>
                <input type="text" id="morawaga" wire:model="morawaga"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('morawaga') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="wigth_by_kg" class="block text-gray-700 text-sm font-bold mb-2">Wigth by Kg</label>
                <input type="text" id="wigth_by_kg" wire:model="wigth_by_kg"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('wigth_by_kg') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="wigth_tan" class="block text-gray-700 text-sm font-bold mb-2">Wigth Tan</label>
                <input type="text" id="wigth_tan" wire:model="wigth_tan"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('wigth_tan') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="price_by_kg" class="block text-gray-700 text-sm font-bold mb-2">Price by Kg</label>
                <input type="text" id="price_by_kg" wire:model="price_by_kg"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('price_by_kg') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="takhlaya_date" class="block text-gray-700 text-sm font-bold mb-2">Takhlaya Date</label>
                <input type="text" id="takhlaya_date" wire:model="takhlaya_date"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('takhlaya_date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="representativ_name" class="block text-gray-700 text-sm font-bold mb-2">Representativ
                    Name</label>
                <input type="text" id="representativ_name" wire:model="representativ_name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('representativ_name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="bar_chalany" class="block text-gray-700 text-sm font-bold mb-2">Bar Chalany</label>
                <input type="text" id="bar_chalany" wire:model="bar_chalany"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('bar_chalany') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="bar_nama_number" class="block text-gray-700 text-sm font-bold mb-2">Bar Nama Number</label>
                <input type="text" id="bar_nama_number" wire:model="bar_nama_number"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('bar_nama_number') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="send_date" class="block text-gray-700 text-sm font-bold mb-2">Send Date</label>
                <input type="text" id="send_date" wire:model="send_date"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('send_date') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="driver_name" class="block text-gray-700 text-sm font-bold mb-2">Driver Name</label>
                <input type="text" id="driver_name" wire:model="driver_name"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('driver_name') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="send_number_car" class="block text-gray-700 text-sm font-bold mb-2">Send Number Car</label>
                <input type="text" id="send_number_car" wire:model="send_number_car"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('send_number_car') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="send_maoda" class="block text-gray-700 text-sm font-bold mb-2">Send Maoda</label>
                <input type="text" id="send_maoda" wire:model="send_maoda"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('send_maoda') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="send_morawaga" class="block text-gray-700 text-sm font-bold mb-2">Send Morawaga</label>
                <input type="text" id="send_morawaga" wire:model="send_morawaga"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('send_morawaga') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="send_wigth_by_kg" class="block text-gray-700 text-sm font-bold mb-2">Send Wigth by
                    Kg</label>
                <input type="text" id="send_wigth_by_kg" wire:model="send_wigth_by_kg"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('send_wigth_by_kg') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>

            <div class="mb-4">
                <label for="send_wigth_tan" class="block text-gray-700 text-sm font-bold mb-2">Send Wigth Tan</label>
                <input type="text" id="send_wigth_tan" wire:model="send_wigth_tan"
                    class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
                @error('send_wigth_tan') <span class="text-red-500 text-xs italic">{{ $message }}</span> @enderror
            </div>
        </div>

        <div class="flex items-center justify-between">
            <button type="submit"
                class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline">
                Submit
            </button>
        </div>
    </form>
</div>