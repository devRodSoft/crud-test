<?php
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\EmployeeModel;
  

class Employee extends Component
{

    public $employees, $employeeSelected, $code, $name, $salaryDollar, $salaryMx, $address, $state, $city, $telephone, $email, $active;
    public $isOpen = 0;
    public $detailOpen = 0;

    public $detailEmployee;
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function render()
    {
        $this->employees = EmployeeModel::where('deleted', 0)->get();
        
        return view('livewire.employee');
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function create()
    {
        $this->resetInputFields();
        $this->openModal();
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function detailOpenModal()
    {
        $this->detailOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function detailCloseModal()
    {
        $this->detailOpen = false;
    }

    public function openModal()
    {
        $this->isOpen = true;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function closeModal()
    {
        $this->isOpen = false;
    }
  
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    private function resetInputFields(){
        $this->code = '';
        $this->name = '';
        $this->salaryDollar = '';
        $this->salaryDollar = '';
        $this->salaryMx = '';
        $this->address = '';
        $this->state = '';
        $this->city = '';
        $this->telephone = '';
        $this->email = '';
        $this->active = '';
    }
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function store()
    {
        $this->validate([
            'code'=> 'required',
            'name'=> 'required',
            'salaryDollar'=> 'required',
            'salaryMx'=> 'required',
            'address'=> 'required',
            'state'=> 'required',
            'city'=> 'required',
            'telephone'=> 'required',
            'email'=> 'required',
        ]);
        
        EmployeeModel::updateOrCreate(['id' => $this->id], [
            'id' => $this->id,
            'code'=> $this->code,
            'name'=> $this->name,
            'salaryDollar'=> $this->salaryDollar,
            'salaryMx'=> $this->salaryMx,
            'address'=> $this->address,
            'state'=> $this->state,
            'city'=> $this->city,
            'telephone'=> $this->telephone,
            'email'=> $this->email
        ]);
  
        session()->flash('message', 
            $this->id ? 'Employee Updated Successfully.' : 'Employee Created Successfully.');
  
        $this->closeModal();
        $this->resetInputFields();
    }
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function edit($id)
    {
        $employees = EmployeeModel::findOrFail($id);
        $this->id = $id;
        $this->code = $employees->code;
        $this->name = $employees->name;
        $this->salaryDollar = $employees->salaryDollar;
        $this->salaryMx = $employees->salaryMx;
        $this->address = $employees->address;
        $this->state = $employees->state;
        $this->city = $employees->city;
        $this->telephone = $employees->telephone;
        $this->email = $employees->email;
        $this->active = $employees->active;
    
        $this->openModal();
    }

        /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function detail($id)
    {
        $employeeSelected = EmployeeModel::findOrFail($id);
        $this->id = $id;
        $this->code = $employeeSelected->code;
        $this->name = $employeeSelected->name;
        $this->salaryDollar = $employeeSelected->salaryDollar;
        $this->salaryMx = $employeeSelected->salaryMx;
        $this->address = $employeeSelected->address;
        $this->state = $employeeSelected->state;
        $this->city = $employeeSelected->city;
        $this->telephone = $employeeSelected->telephone;
        $this->email = $employeeSelected->email;
        $this->active = $employeeSelected->active;
    
        $this->detailOpenModal();
    }
    
    
     
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    public function delete($id)
    {
        $employee = EmployeeModel::findOrFail($id);
        $employee->deleted = 1;
        $employee->save();
        session()->flash('message', 'Employee Deleted Successfully.');
    }
}