<?php
namespace App\Repositories\Company;

use App\Repositories\RepositoryInterface;

interface CompanyRepositoryInterface extends RepositoryInterface
{
    
    // Cập nhật thông tin Khách hàng theo Mã Khách hàng
    public function updateCompany($request);
}