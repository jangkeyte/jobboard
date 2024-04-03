<?php

namespace App\Repositories\Candidate;

use App\Models\Candidate;
use App\Filters\CandidateFilter;
use App\Repositories\BaseRepository;

use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Auth;

class CandidateRepository extends BaseRepository implements CandidateRepositoryInterface
{
    /**
     * @var Candidate
     */
    protected $model;

    /**
     * CandidateRepository constructor.
     *
     * @param Candidate $model
     */
    public function __construct(Candidate $model)
    {
        parent::__construct($model);
    }

    // Cập nhật thông tin Ứng viên theo Mã Ứng viên
    public function createCandidate($request)
    {
        return $candidate = Candidate::create(
            array(

            )
        );
    }

    // Cập nhật thông tin Ứng viên theo Mã Ứng viên
    public function updateCandidateByID($id, $request)
    {
        
    }

    // Xóa Ứng viên theo Mã Ứng viên
    public function deleteCandidateByID($id)
    {
        
    }
}