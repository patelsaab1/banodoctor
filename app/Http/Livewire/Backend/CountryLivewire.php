<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\Country;
class CountryLivewire extends Component
{
   
   public  $name;
   public   $alertMessage;
   protected $CountryList=array();
    protected $rules = [
        'name' => 'required|string|min:3',
       
    ];
    
   
    public function render()
    {
        
        $ContryList=Country::latest()->get();
        return view('livewire.backend.country-livewire',compact('ContryList'));
    }
    
    public function save()
    {
        $this->validate();
        
        Country::create([
            "name"=>$this->name 
            ]);
         $this->alertMessage="Country Added Successfully";
         $this->resetForm();
    }
    
    public function resetForm()
    {
        $this->name="";
        
    }
}
