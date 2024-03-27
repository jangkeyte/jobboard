<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Banner;

class AdminBannerController extends Controller
{
    public function index()
    {
        $banner_data = Banner::where('id', 1)->first();
        return view('admin.banner', compact('banner_data'));
    }

    public function update(Request $request)
    {
        $obj = Banner::where('id', 1)->first() ?? new Banner();

        $obj->banner_job_listing = $this->upload_image($request, 'banner_job_listing', $obj?->banner_job_listing) ?? $obj?->banner_job_listing;
        $obj->banner_job_detail = $this->upload_image($request, 'banner_job_detail', $obj?->banner_job_detail) ?? $obj?->banner_job_detail;
        $obj->banner_job_categories = $this->upload_image($request, 'banner_job_categories', $obj->banner_job_categories) ?? $obj?->banner_job_categories;
        $obj->banner_company_listing = $this->upload_image($request, 'banner_company_listing', $obj?->banner_company_listing) ?? $obj?->banner_company_listing;
        $obj->banner_company_detail = $this->upload_image($request, 'banner_company_detail', $obj->banner_company_detail) ?? $obj?->banner_company_detail;
        $obj->banner_pricing = $this->upload_image($request, 'banner_pricing', $obj?->banner_pricing) ?? $obj?->banner_pricing;
        $obj->banner_blog = $this->upload_image($request, 'banner_blog', $obj?->banner_blog) ?? $obj?->banner_blog;
        $obj->banner_faq = $this->upload_image($request, 'banner_faq', $obj?->banner_faq) ?? $obj?->banner_faq;
        $obj->banner_post = $this->upload_image($request, 'banner_post', $obj?->banner_post) ?? $obj?->banner_post;
        $obj->banner_contact = $this->upload_image($request, 'banner_contact', $obj?->banner_contact) ?? $obj?->banner_contact;
        $obj->banner_terms = $this->upload_image($request, 'banner_terms', $obj?->banner_terms) ?? $obj?->banner_terms;
        $obj->banner_privacy = $this->upload_image($request, 'banner_privacy', $obj?->banner_privacy) ?? $obj?->banner_privacy;
        $obj->banner_signup = $this->upload_image($request, 'banner_signup', $obj?->banner_signup) ?? $obj?->banner_signup;
        $obj->banner_login = $this->upload_image($request, 'banner_login', $obj?->banner_login) ?? $obj?->banner_login;
        $obj->banner_forget_password = $this->upload_image($request, 'banner_forget_password', $obj?->banner_forget_password) ?? $obj?->banner_forget_password;
        $obj->banner_company_panel = $this->upload_image($request, 'banner_company_panel', $obj?->banner_company_panel) ?? $obj?->banner_company_panel;
        $obj->banner_candidate_panel = $this->upload_image($request, 'banner_candidate_panel', $obj?->banner_candidate_panel) ?? $obj?->banner_candidate_panel;
        $obj->update();

        return redirect()->back()->with('success', 'Data is update successfully.');
    }

    public function upload_image(Request $request, $image_name, $image_old)
    {        
        if($request->hasFile($image_name)) {
            $request->validate([
                $image_name => 'image|mimes:jpg,jpeg,png,gif',
            ]);

            if(file_exists(public_path('uploads/' . ($image_old ?? 'default_banner_upload') ))) {
                unlink(public_path('uploads/' . $image_old));
            }

            $ext = $request->file($image_name)->extension();
            $final_name = $image_name . '.' . $ext;

            $request->file($image_name)->move(public_path('uploads/'), $final_name);

            return $final_name;
        } 
        return null;
    }
}
