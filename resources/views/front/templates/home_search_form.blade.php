<div class="container">
    <form action="{{ route('job_listing') }}" mothod="get">
        <div class="inner">
            <div class="row">
                <div class="col-lg-6 col-md-8 mt-2">
                    <div class="form-group">
                        <input type="text" name="title" class="form-control" placeholder="{{ $home_page_data->job_title }}">
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="form-group">
                        <select name="location" class="form-select select2">
                            <option value="">{{ $home_page_data->job_location }}</option>
                            @foreach ($all_job_locations as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>                                                    
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="form-group">
                        <select name="category" class="form-select select2">
                            <option value="">{{ $home_page_data->job_category }}</option>
                            @foreach ($all_job_categories as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>                                                    
                            @endforeach
                        </select>
                    </div>
                </div>
                
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="form-group">
                        <select name="type" class="form-select select2">
                            <option value="">{{ $home_page_data->job_type ?? __('Job Type') }}</option>
                            @foreach ($all_job_types as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>                                                    
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="form-group">
                        <select name="experience" class="form-select select2">
                            <option value="">{{ $home_page_data->job_experience ?? __('Job Experience') }}</option>
                            @foreach ($all_job_experiences as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>                                                    
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 mt-2">
                    <div class="form-group">
                        <select name="salary_range" class="form-select select2">
                            <option value="">{{ $home_page_data->job_salary_range ?? __('Job Salary Range') }}</option>
                            @foreach ($all_job_salary_ranges as $item)
                                <option value="{{ $item->id }}">{{ $item->name }}</option>                                                    
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-sm-6 d-grid gap-2 mt-2">
                    <button type="submit" class="btn text-white" style="width: 100%;margin: 0;height: 42px;background: orange;border: none;"><i class="fas fa-search"></i> {{ $home_page_data->search }}</button>
                </div>
            </div>
        </div>
    </form>
</div>