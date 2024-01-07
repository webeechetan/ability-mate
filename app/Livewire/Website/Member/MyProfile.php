<?php

namespace App\Livewire\Website\Member;

use Livewire\Component;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Disability;
use App\Models\DisabilityCategory;
use App\Models\Country;
use App\Models\State;
use App\Models\City;
use Livewire\Attributes\Validate;

class MyProfile extends Component
{
    public $user;

    public $disability_categories;
    public $disabilities;

    #[Validate('required', as: 'Disability')]
    public $disability_category_id;
    #[Validate('required', as: 'Disability Type')]
    public $disability_id;

    public  $countries;
    public  $states;
    public  $cities;
    
    #[Validate('required', as: 'Country')]
    public  $country_id;
    #[Validate('required', as: 'State')]
    public  $state_id;
    #[Validate('required', as: 'City')]
    public  $city_id;

    public $address;
    public $bio;
    public $occupation;


    public function mount()
    {
        $this->disability_categories = DisabilityCategory::all();
        $this->disabilities = Disability::all();
        $this->countries = Country::all();
        $this->states = [];
        $this->cities = [];
        if(auth()->user()->detail){
            $this->disability_category_id = auth()->user()->detail->disability_category_id;
            $this->disability_id = auth()->user()->detail->disability_id;
            $this->country_id = auth()->user()->detail->country_id;
            $this->states = State::where('country_id', auth()->user()->detail->country_id)->get();
            $this->state_id = auth()->user()->detail->state_id;
            $this->cities = City::where('state_id', auth()->user()->detail->state_id)->get();
            $this->city_id = auth()->user()->detail->city_id;
            $this->address = auth()->user()->detail->address;
        }

    }

    public function render()
    {
        return view('livewire.website.member.my-profile')->title('My Profile - '.env('APP_NAME'));
    }

    // public function updatedCategoryId($value)
    // {
    //     $this->subcategories = SubCategory::where('category_id', $value)->get();
    // }

    public function updatedDisabilityCategoryId($value)
    {
        $this->disabilities = Disability::where('disability_category_id', $value)->get();
    }

    public function updatedCountryId($value)
    {
        $this->states = State::where('country_id', $value)->get();
    }

    public function updatedStateId($value)
    {
        $this->cities = City::where('state_id', $value)->get();
    }

    public function saveChanges(){

        // dd($this->disability_category_id, $this->disability_id, $this->country_id, $this->state_id, $this->city_id);
        $this->validate([
            'disability_category_id' => 'required',
            'disability_id' => 'required',
            'country_id' => 'required',
            'state_id' => 'required',
            'city_id' => 'required',
        ]);

        if(!auth()->user()->detail){
            auth()->user()->detail()->create([
                'disability_category_id' => $this->disability_category_id,
                'disability_id' => $this->disability_id,
                'country_id' => $this->country_id,
                'state_id' => $this->state_id,
                'city_id' => $this->city_id,
                'address' => 'address',
            ]);
        }else{
            auth()->user()->detail()->update([
                'disability_category_id' => $this->disability_category_id,
                'disability_id' => $this->disability_id,
                'country_id' => $this->country_id,
                'state_id' => $this->state_id,
                'city_id' => $this->city_id,
                'address' => 'address',
            ]);
        }

        session()->flash('success', 'Profile updated successfully.');

    }


}
