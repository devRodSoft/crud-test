<?php
namespace App\Http\Livewire;
  
use Livewire\Component;
use App\Models\EmployeeModel;
use GuzzleHttp\Client;
  

class Employee extends Component
{

    public $employees, $employeeSelected, $code, $name, $salaryDollar, $salaryMx, $address, $state, $city, $telephone, $email, $active;
    public $isOpen = 0;
    public $detailOpen = 0;
    public $detailEmployee;
    private $banxicoUrl = "https://www.banxico.org.mx/SieAPIRest/service/v1/series/SF43718/datos?token=bcd495b79af85fb63dc275bf08817cbab8d215046b8e5040db8bc29262ab54e9";
    public $dollar;
    public $porcent = 3;
    public $newMx = 0;
    public $newDollar = 0;
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
        $client = new Client();
        $res = $client->request('GET', $this->banxicoUrl, []);
        $data = json_decode($res->getBody());
        $this->dollar = end($data->bmx->series[0]->datos)->dato;
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
        $this->id = '';
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
            'code'=> 'required|unique:employees',
            'name'=> 'required',
            'salaryDollar'=> 'required',
            'address'=> 'required',
            'state'=> 'required',
            'city'=> 'required',
            'telephone'=> 'required|max:10',
            'email'=> 'required|email',   
        ]);
        
        EmployeeModel::updateOrCreate(['id' => $this->id], [
            'id' => $this->id,
            'code'=> $this->code,
            'name'=> $this->name,
            'salaryDollar'=> $this->salaryDollar,
            'salaryMx'=> $this->salaryDollar * $this->dollar,
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
        $this->salaryMx = $employees->salaryDollar * $this->dollar;
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

        $this->newDollar = $this->salaryDollar;
        $this->newMx = $this->salaryMx;

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

    public function activate($id) {
        $employee = EmployeeModel::findOrFail($id);

        $active = $employee->active ? 0 : 1;

        $employee->active = $active;
        $employee->save();

        session()->flash('message', 
        $active ? 'Employee Active Successfully.' : 'Employee disable Successfully.');
    }
}