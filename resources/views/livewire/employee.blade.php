<x-slot name="header">
    <h2 class="font-semibold text-xl text-gray-800 leading-tight">
        Manage Employees 
    </h2>
</x-slot>
<div class="py-12">
    <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
        <div class="bg-white overflow-hidden shadow-xl sm:rounded-lg px-4 py-4">
            @if (session()->has('message'))
                <div class="bg-teal-100 border-t-4 border-teal-500 rounded-b text-teal-900 px-4 py-3 shadow-md my-3" role="alert">
                  <div class="flex">
                    <div>
                      <p class="text-sm">{{ session('message') }}</p>
                    </div>
                  </div>
                </div>
            @endif
            <button wire:click="create()" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded my-3">Create New Employee</button>
            @if($detailOpen)
                @include('livewire.detail')
            @endif
            @if($isOpen)
                @include('livewire.create')
            @endif
            <table class="">
                <thead>
                    <tr class="bg-gray-100">
                        <th class="px-4 py-2 w-20">id</th>
                        <th class="px-4 py-2 w-20">Code</th>
                        <th class="px-4 py-2">name</th>
                        <th class="px-4 py-2">salaryDollar</th>
                        <th class="px-4 py-2">SalaryMx</th>
                        <th class="px-4 py-2">Address</th>
                        <th class="px-4 py-2">State</th>
                        <th class="px-4 py-2">City</th>
                        <th class="px-4 py-2">telephone</th>
                        <th class="px-4 py-2">email</th>
                        <th class="px-4 py-2">active</th>
                        <th class="px-4 py-2">Action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($employees as $employee)
                    <tr>
                        <td class="border">{{ $employee->id }}</td>
                        <td class="border">{{ $employee->code }}</td>
                        <td class="border">{{ $employee->name }} </td>
                        <td class="border">{{ $employee->salaryDollar }} </td>
                        <td class="border">{{ $employee->salaryMx }} </td>
                        <td class="border">{{ $employee->address }} </td>
                        <td class="border">{{ $employee->state }} </td>
                        <td class="border">{{ $employee->city }} </td>
                        <td class="border">{{ $employee->telephone }} </td>
                        <td class="border">{{ $employee->email }} </td>
                        <td class="border">{{ $employee->active }} </td>
                        <td class="border">
                        <button wire:click="detail({{ $employee->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">View</button>
                        <button wire:click="activate({{ $employee->id }})" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded">Active/Disable</button>
                        <button wire:click="edit({{ $employee->id }})" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Edit</button>
                        <button wire:click="delete({{ $employee->id }})" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded">Delete</button>
                        
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        
    </div>
</div>