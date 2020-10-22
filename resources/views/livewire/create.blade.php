<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
  
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
      <form>
      <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
        <div class="">
              <div class="mb-4">
                  <label for="code" class="block text-gray-700 text-sm font-bold mb-2">Code:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Code" wire:model="code">
                  @error('code') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="name" class="block text-gray-700 text-sm font-bold mb-2">Name:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Name" wire:model="name">
                  @error('name') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="salaryDollar" class="block text-gray-700 text-sm font-bold mb-2">Salary Dollar:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Salary Dollar" wire:model="salaryDollar">
                  @error('salaryDollar') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="salaryMx" class="block text-gray-700 text-sm font-bold mb-2">Salary Mx:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Salary Mx" wire:model="salaryMx">
                  @error('salaryMx') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="address" class="block text-gray-700 text-sm font-bold mb-2">Address:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Address" wire:model="address">
                  @error('address') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="state" class="block text-gray-700 text-sm font-bold mb-2">State:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter State" wire:model="state">
                  @error('state') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="city" class="block text-gray-700 text-sm font-bold mb-2">City:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter City" wire:model="city">
                  @error('city') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="telephone" class="block text-gray-700 text-sm font-bold mb-2">Telephone:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Telephone" wire:model="telephone">
                  @error('telephone') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="email" class="block text-gray-700 text-sm font-bold mb-2">Email:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Email" wire:model="email">
                  @error('email') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
              <div class="mb-4">
                  <label for="active" class="block text-gray-700 text-sm font-bold mb-2">Active:</label>
                  <input type="text" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline" id="exampleFormControlInput1" placeholder="Enter Active" wire:model="active">
                  @error('active') <span class="text-red-500">{{ $message }}</span>@enderror
              </div>
        </div>
      </div>
  
      <div class="bg-gray-50 px-4 py-3 sm:px-6 sm:flex sm:flex-row-reverse">
        <span class="flex w-full rounded-md shadow-sm sm:ml-3 sm:w-auto">
          <button wire:click.prevent="store()" type="button" class="inline-flex justify-center w-full rounded-md border border-transparent px-4 py-2 bg-green-600 text-base leading-6 font-medium text-white shadow-sm hover:bg-green-500 focus:outline-none focus:border-green-700 focus:shadow-outline-green transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Save
          </button>
        </span>
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
            
          <button wire:click="closeModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Cancel
          </button>
        </span>
        </form>
      </div>
        
    </div>
  </div>
</div>