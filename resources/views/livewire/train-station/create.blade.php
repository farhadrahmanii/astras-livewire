<div class="shadow-sm bg-white rounded-lg">
    <!-- Include Tailwind CSS -->
    {{-- <script src="https://cdn.tailwindcss.com"></script> --}}
    <div class="border-b px-6 py-4">
        <h3 class="text-lg font-semibold">Create Train Station</h3>
    </div>
    <div class="p-6">
        <form wire:submit.prevent="store">
            <!-- Station Details Section -->
            <div class="border rounded-lg mb-6">
                <div class="bg-gray-50 px-6 py-4 border-b">
                    <h4 class="font-bold">Station Details</h4>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block font-semibold mb-2">Product Type <span class="text-red-500">*</span></label>
                            <select class="w-full rounded-lg border-gray-300" wire:model="product_type_id" data-control="select2" data-placeholder="Select Product Type">
                                <option></option>
                                <option value="1">Product Type 1</option>
                                <option value="2">Product Type 2</option>
                            </select>
                            @error('product_type_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block font-semibold mb-2">Transport Type <span class="text-red-500">*</span></label>
                            <select class="w-full rounded-lg border-gray-300" wire:model="transport_type_id" data-control="select2" data-placeholder="Select Transport Type">
                                <option></option>
                                <option value="1">Transport Type 1</option>
                                <option value="2">Transport Type 2</option>
                            </select>
                            @error('transport_type_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-semibold mb-2">Company <span class="text-red-500">*</span></label>
                            <select class="w-full rounded-lg border-gray-300" wire:model="company_id" data-control="select2" data-placeholder="Select Company">
                                <option></option>
                                <option value="1">Company 1</option>
                                <option value="2">Company 2</option>
                            </select>
                            @error('company_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block font-semibold mb-2">Product <span class="text-red-500">*</span></label>
                            <select class="w-full rounded-lg border-gray-300" wire:model="product_id" data-control="select2" data-placeholder="Select Product">
                                <option></option>
                                <option value="1">Product 1</option>
                                <option value="2">Product 2</option>
                            </select>
                            @error('product_id') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>
                </div>
            </div>

            <!-- Route Information Section -->
            <div class="border rounded-lg mb-6">
                <div class="bg-gray-50 px-6 py-4 border-b">
                    <h4 class="font-bold">Route Information</h4>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-semibold mb-2">Origin Country <span class="text-red-500">*</span></label>
                            <select class="w-full rounded-lg border-gray-300" wire:model="country_from_id" data-control="select2" data-placeholder="Select Origin Country">
                                <option></option>
                                <option value="1">Country 1</option>
                                <option value="2">Country 2</option>
                            </select>
                        </div>
                        <div>
                            <label class="block font-semibold mb-2">Destination Country <span class="text-red-500">*</span></label>
                            <select class="w-full rounded-lg border-gray-300" wire:model="country_to_id" data-control="select2" data-placeholder="Select Destination Country">
                                <option></option>
                                <option value="1">Country 1</option>
                                <option value="2">Country 2</option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Cargo Details Section -->
            <div class="border rounded-lg mb-6">
                <div class="bg-gray-50 px-6 py-4 border-b">
                    <h4 class="font-bold">Cargo Details</h4>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <div>
                            <label class="block font-semibold mb-2">Number of Wagons <span class="text-red-500">*</span></label>
                            <input type="number" class="w-full rounded-lg border-gray-300" wire:model="number_of_wagon" placeholder="Enter number of wagons">
                            @error('number_of_wagon') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                        <div>
                            <label class="block font-semibold mb-2">Weight (tons) <span class="text-red-500">*</span></label>
                            <input type="number" step="0.01" class="w-full rounded-lg border-gray-300" wire:model="weight" placeholder="Enter weight in tons">
                            @error('weight') <span class="text-red-500 text-sm">{{ $message }}</span> @enderror
                        </div>
                    </div>

                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-semibold mb-2">Number of Bars <span class="text-red-500">*</span></label>
                            <input type="number" class="w-full rounded-lg border-gray-300" wire:model="number_of_bar" placeholder="Enter number of bars">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Schedule Section -->
            <div class="border rounded-lg mb-6">
                <div class="bg-gray-50 px-6 py-4 border-b">
                    <h4 class="font-bold">Schedule</h4>
                </div>
                <div class="p-6">
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <div>
                            <label class="block font-semibold mb-2">Departure Date <span class="text-red-500">*</span></label>
                            <input type="date" class="w-full rounded-lg border-gray-300" wire:model="date_of_out">
                        </div>
                        <div>
                            <label class="block font-semibold mb-2">Arrival Date <span class="text-red-500">*</span></label>
                            <input type="date" class="w-full rounded-lg border-gray-300" wire:model="date_of_in">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action buttons -->
            <div class="flex justify-end gap-3">
                <button type="button" class="px-4 py-2 bg-red-50 text-red-600 rounded-lg hover:bg-red-100" wire:click="cancel">
                    <i class="ki-duotone ki-cross-square text-lg mr-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    Cancel
                </button>
                <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">
                    <i class="ki-duotone ki-check-square text-lg mr-1">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    Create
                </button>
            </div>
        </form>
    </div>
</div>
