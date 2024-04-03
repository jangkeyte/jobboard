<?php

namespace App\Repositories\Job;

use App\Models\Job;
use App\Filters\JobFilter;
use App\Repositories\BaseRepository;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class JobRepository extends BaseRepository implements JobRepositoryInterface
{
    /**
     * @var Job
     */
    protected $model;

    /**
     * JobRepository constructor.
     *
     * @param Job $model
     */
    public function __construct(Job $model)
    {
        parent::__construct($model);
    }

    // Cập nhật thông tin Việc làm theo Mã Việc làm
    public function createJob($request)
    {
        return $job = Job::create(
            array(
            )
        );
    }

    // Cập nhật thông tin Việc làm theo Mã Việc làm
    public function updateJobByID($id, $request)
    {

    }

    // Xóa Việc làm theo Mã Việc làm
    public function deleteJobByID($id)
    {
        
    }
}