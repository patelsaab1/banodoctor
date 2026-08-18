<?php

namespace App\Http\Livewire\Backend;

use Livewire\Component;
use App\Models\State;
use App\Models\Country;

class StateLivewire extends Component
{
    
    
    
   protected $countryList=array();
   protected $stateList=array();
   public $name;
   public $country_id;
   public $alertMessage;
 

    public function render()
    {  
        $countryList=Country::get();
        $stateList=State::select('states.*','country.name as country')->leftJoin('country','country.id','=','states.country_id')->latest()->get();
        
        return view('livewire.backend.state-livewire',
        compact('countryList','stateList')
        );
     }
    
    public function save()
    {
        $validatedData=$this->validate( [
        'name' => 'required|string|min:3',
        'country_id' => 'required',
       
        ]);
        
        State::create(["name"=>$this->name,
        "country_id"=>$this->country_id]);
        
         
        $this->alertMessage="State Added Successfully";

         //return back();
    }
    
    public function resetForm()
    {
        $this->name="";
        $this->country_id="";
    }
    
    
   
    
}
