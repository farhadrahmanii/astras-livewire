<div class="bg-white rounded-lg shadow-sm">
    <div class="px-6 py-4 border-b border-zinc-200">
        <h3 class="text-lg font-semibold text-zinc-900">Create Train Station</h3>
    </div>
    <div class="p-6">
        <form wire:submit.prevent="store">
            <!-- Station Details Section -->
            <div class="rounded-lg mb-6 border border-zinc-200">
                <div class="bg-zinc-50 px-6 py-4 border-b border-zinc-200">
                    <h4 class="font-bold text-zinc-800">Station Details</h4>
                </div>
                <div class="p-6">
                    <!-- Full width important field -->
                    <div class="mb-6">
                        <x-flux::select
                            label="Company"
                            wire:model="company_id"
                            placeholder="Select Company"
                            required
                        >
                            <option value="1">Company 1</option>
                            <option value="2">Company 2</option>
                        </x-flux::select>
                    </div>
                    
                    <!-- Two fields in one row -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-6">
                        <x-flux::select
                            label="Product Type"
                            wire:model="product_type_id"
                            placeholder="Select Product Type"
                            required
                        >
                            <option value="1">Product Type 1</option>
                            <option value="2">Product Type 2</option>
                        </x-flux::select>

                        <x-flux::select
                            label="Product"
                            wire:model="product_id"
                            placeholder="Select Product"
                            required
                        >
                            <option value="1">Product 1</option>
                            <option value="2">Product 2</option>
                        </x-flux::select>
                    </div>

                    <!-- Single field in one row -->
                    <div class="mb-6">
                        <x-flux::select
                            label="Transport Type"
                            wire:model="transport_type_id"
                            placeholder="Select Transport Type"
                            required
                        >
                            <option value="1">Transport Type 1</option>
                            <option value="2">Transport Type 2</option>
                        </x-flux::select>
                    </div>
                </div>
            </div>

            <!-- Route Information Section -->
            <div class="rounded-lg mb-6 border border-zinc-200">
                <div class="bg-zinc-50 px-6 py-4 border-b border-zinc-200">
                    <h4 class="font-bold text-zinc-800">Route Information</h4>
                </div>
                <div class="p-6">
                    <!-- Two fields side by side -->
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6">
                        <x-flux::select
                            label="Origin Country"
                            wire:model="country_from_id"
                            placeholder="Select Origin Country"
                            required
                        >
                            <option value="1">Country 1</option>
                            <option value="2">Country 2</option>
                        </x-flux::select>

                        <x-flux::select
                            label="Destination Country"
                            wire:model="country_to_id"
                            placeholder="Select Destination Country"
                            required
                        >
                            <option value="1">Country 1</option>
                            <option value="2">Country 2</option>
                        </x-flux::select>
                    </div>
                </div>
            </div>

            <!-- Cargo Details Section -->
            <div class="rounded-lg mb-6 border border-zinc-200">
                <div class="bg-zinc-50 px-6 py-4 border-b border-zinc-200">
                    <h4 class="font-bold text-zinc-800">Cargo Details</h4>
                </div>
                <div class="p-6">
                    <!-- Three fields in one row -->
                    <div class="grid grid-cols-1 md:grid-cols-3 gap-6">
                        <x-flux::input
                            type="number"
                            label="Number of Wagons"
                            wire:model="number_of_wagon"
                            placeholder="Enter number"
                            required
                        />

                        <x-flux::input
                            type="number"
                            label="Number of Bars"
                            wire:model="number_of_bar"
                            placeholder="Enter number"
                            required
                        />

                        <x-flux::input
                            type="number"
                            step="0.01"
                            label="Weight (tons)"
                            wire:model="weight"
                            placeholder="Enter weight"
                            required
                        />
                    </div>
                </div>
            </div>

            <!-- Schedule Section -->
            <div class="rounded-lg mb-6 border border-zinc-200">
                <div class="bg-zinc-50 px-6 py-4 border-b border-zinc-200">
                    <h4 class="font-bold text-zinc-800">Schedule</h4>
                </div>
                <div class="p-6">
                    <!-- Two fields side by side with a visual separator -->
                    <div class="flex flex-col md:flex-row gap-6 items-center">
                        <div class="w-full md:w-1/2">
                            <x-flux::input
                                type="date"
                                label="Departure Date"
                                wire:model="date_of_out"
                                required
                            />
                        </div>
                        
                        <div class="hidden md:block">
                            <div class="w-8 h-8 rounded-full bg-zinc-100 flex items-center justify-center">
                                <x-flux::icon name="arrow-right" class="h-4 w-4 text-zinc-500" />
                            </div>
                        </div>
                        
                        <div class="w-full md:w-1/2">
                            <x-flux::input
                                type="date"
                                label="Arrival Date"
                                wire:model="date_of_in"
                                required
                            />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Action buttons -->
            <div class="flex justify-end gap-3">
                <x-flux::button color="red" wire:click="cancel" outline>
                    <x-flux::icon name="x-mark" class="mr-1" />
                    Cancel
                </x-flux::button>
                
                <x-flux::button type="submit" color="primary">
                    <x-flux::icon name="check" class="mr-1" />
                    Create
                </x-flux::button>
            </div>
        </form>
    </div>
</div>
