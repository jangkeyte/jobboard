<?php

namespace App\Repositories\Company;

use App\Models\Company;
use App\Filters\CompanyFilter;
use App\Repositories\BaseRepository;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CompanyRepository extends BaseRepository implements CompanyRepositoryInterface
{
    /**
     * @var Company
     */
    protected $model;

    /**
     * CompanyRepository constructor.
     *
     * @param Company $model
     */
    public function __construct(Company $model)
    {
        parent::__construct($model);
    }

    // Cập nhật thông tin Công ty theo Mã Công ty
    public function createCompany($request)
    {
        return $customer = Company::create(
            array(
            )
        );
    }

    // Cập nhật thông tin Công ty theo Mã Công ty
    public function updateCompany($request)
    {
        $obj = Company::where('id', Auth::guard('company')->user()->id)->first();

        if($request->hasFile('logo')) {
            $request->validate([
                'logo' => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            if(Auth::guard('company')->user()->logo != '') {
                if(file_exists(public_path('uploads/' . $obj->logo))) {
                    unlink(public_path('uploads/' . $obj->logo));
                }
            }           

            $ext = $request->file('logo')->extension();
            $final_name = 'company_logo_' . time() . '.' . $ext;

            $request->file('logo')->move(public_path('uploads/'), $final_name);

            $obj->logo = $final_name;
        }

        $obj->company_name = $request->company_name;
        $obj->person_name = $request->person_name;
        $obj->username = $request->username;
        $obj->email = $request->email;
        $obj->phone = $request->phone;
        $obj->address = $request->address;
        $obj->company_location_id = $request->company_location_id;
        $obj->company_industry_id = $request->company_industry_id;
        $obj->company_size_id = $request->company_size_id;
        $obj->founded_on = $request->founded_on;
        $obj->website = $request->website;
        $obj->description = $request->description;
        $obj->oh_mon = $request->oh_mon;
        $obj->oh_tue = $request->oh_tue;
        $obj->oh_web = $request->oh_web;
        $obj->oh_thu = $request->oh_thu;
        $obj->oh_fri = $request->oh_fri;
        $obj->oh_sat = $request->oh_sat;
        $obj->oh_sun = $request->oh_sun;
        $obj->map_code = $request->map_code;
        $obj->facebook = $request->facebook;
        $obj->twitter = $request->twitter;
        $obj->linkedin = $request->linkedin;
        $obj->instagram = $request->instagram;
        $obj->update();

        return redirect()->back()->with('success', __('Profile is updated successfully.'));
    }

    // Xóa Công ty theo Mã Công ty
    public function deleteCompany($id)
    {
        return Company::where('id', $id)->delete();
    }
}