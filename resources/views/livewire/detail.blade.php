<div class="fixed z-10 inset-0 overflow-y-auto ease-out duration-400">
  <div class="flex items-end justify-center min-h-screen pt-4 px-4 pb-20 text-center sm:block sm:p-0">
      
    <div class="fixed inset-0 transition-opacity">
      <div class="absolute inset-0 bg-gray-500 opacity-75"></div>
    </div>
  
    <!-- This element is to trick the browser into centering the modal contents. -->
    <span class="hidden sm:inline-block sm:align-middle sm:h-screen"></span>​
  
    <div class="inline-block align-bottom bg-white rounded-lg text-left overflow-hidden shadow-xl transform transition-all sm:my-8 sm:align-middle sm:max-w-lg sm:w-full" role="dialog" aria-modal="true" aria-labelledby="modal-headline">
        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">  
            <div class="grid grid-cols-2 gap-4">
              <div> <span class="font-bold">Code:</span> {{ $code }} </div>
              <div> <span class="font-bold">Name:</span> {{ $name }} </div>
              <div> <span class="font-bold">Salary Dollar:</span> {{ $salaryDollar }} </div>
              <div> <span class="font-bold">Salary Mx:</span> {{ $salaryMx }} </div>
              <div> <span class="font-bold">Address:</span> {{ $address }} </div>
              <div> <span class="font-bold">State:</span> {{ $state }} </div>
              <div> <span class="font-bold">City:</span> {{ $city }} </div>
              <div> <span class="font-bold">Telephone:</span> {{ $telephone }} </div>
              <div> <span class="font-bold">E-mail:</span> {{ $email }} </div>
            </div>       
        </div>  
      
        

        <div class="bg-white px-4 pt-5 pb-4 sm:p-6 sm:pb-4">
          <div class="mb-4">
              <label for="city" class="block text-gray-700 text-sm font-bold mb-2">Porcent Salary:</label>
              <input type="number" wire:model="porcent" class="shadow appearance-none border rounded w-full py-2 px-3 text-gray-700 leading-tight focus:outline-none focus:shadow-outline">
          </div>
          <table class="container">
                  <thead>
                      <tr class="bg-gray-100">
                          <th class="px-4 py-2">Month</th>
                          <th class="px-4 py-2">salaryDollar</th>
                          <th class="px-4 py-2">SalaryMx</th>
                          
                      </tr>
                  </thead>
                  <tbody>
                      @foreach([1,2,3,4,5,6] as $m)

                        @php 
                          $newMx = number_format(($newMx * $porcent / 100) + $newMx, 2, '.', '');
                          $newDollar = number_format(($newDollar * $porcent / 100) + $newDollar, 2, '.', '');
                        @endphp

                      <tr>
                          <td class="border">{{ $m }}</td>
                          <td class="border">{{ $newDollar }}</td>
                          <td class="border">{{ $newMx }} </td>
                      </tr>
                      @endforeach
                  </tbody>
              </table>
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