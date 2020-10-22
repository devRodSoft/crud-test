<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
  
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">  
            <h2>Employee Detail</h2>
            <p class="mb-4">{{ $code }} </p>
            <p class="mb-4">{{ $name }} </p>
            <p class="mb-4">{{ $salaryDollar }} </p>
            <p class="mb-4">{{ $salaryMx }} </p>
            <p class="mb-4">{{ $address }} </p>
            <p class="mb-4">{{ $state }} </p>
            <p class="mb-4">{{ $city }} </p>
            <p class="mb-4">{{ $telephone }} </p>
            <p class="mb-4">{{ $email }} </p>
            <p class="mb-4">{{ $active }} </p>
            <p class="mb-4">{{ $dollar }} </p>
        </div>  
        <span class="mt-3 flex w-full rounded-md shadow-sm sm:mt-0 sm:w-auto">
          <button wire:click="detailCloseModal()" type="button" class="inline-flex justify-center w-full rounded-md border border-gray-300 px-4 py-2 bg-white text-base leading-6 font-medium text-gray-700 shadow-sm hover:text-gray-500 focus:outline-none focus:border-blue-300 focus:shadow-outline-blue transition ease-in-out duration-150 sm:text-sm sm:leading-5">
            Close
          </button>
        </span>
    </div>
        
    </div>
  </div>
</div>