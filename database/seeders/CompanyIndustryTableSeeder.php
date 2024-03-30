<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CompanyIndustryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $data = array('An Ninh / Bảo Vệ', 'An toàn lao động', 'Bán hàng / Kinh doanh', 'Bán lẻ / Bán sỉ', 'Bảo hiểm', 'Bất động sản', 'Biên phiên dịch', 'Bưu chính viễn thông', 'Chăn nuôi / Thú y', 'Chứng khoán', 'CNTT  Phần cứng / Mạng', 'CNTT  Phần mềm', 'Công nghệ sinh học', 'Công nghệ thực phẩm / Dinh dưỡng', 'Cơ khí / Ô tô / Tự động hóa', 'Dầu khí', 'Dệt may / Da giày / Thời trang', 'Dịch vụ khách hàng', 'Du lịch', 'Dược phẩm', 'Điện / Điện tử / Điện lạnh', 'Đồ gỗ', 'Giải trí', 'Giáo dục / Đào tạo', 'Hàng gia dụng / Chăm sóc cá nhân', 'Hàng hải', 'Hàng không', 'Hành chính / Thư ký', 'Hóa học', 'In ấn / Xuất bản', 'Kế toán / Kiểm toán', 'Khoáng sản', 'Kiến trúc', 'Lao động phổ thông', 'Lâm Nghiệp', 'Luật / Pháp lý', 'Môi trường', 'Mới tốt nghiệp / Thực tập', 'Mỹ thuật / Nghệ thuật / Thiết kế', 'Ngân hàng', 'Nhà hàng / Khách sạn', 'Nhân sự', 'Nội ngoại thất', 'Nông nghiệp', 'Phi chính phủ / Phi lợi nhuận', 'Quản lý chất lượng (QA/QC', 'Quản lý điều hành', 'Quảng cáo / Đối ngoại / Truyền Thông', 'Sản xuất / Vận hành sản xuất', 'Tài chính / Đầu tư', 'Thống kê', 'Thu mua / Vật tư', 'Thủy lợi', 'Thủy sản / Hải sản', 'Thư viện', 'Thực phẩm &amp; Đồ uống', 'Tiếp thị / Marketing', 'Tiếp thị trực tuyến', 'Tổ chức sự kiện', 'Trắc địa / Địa Chất', 'Truyền hình / Báo chí / Biên tập', 'Tư vấn', 'Vận chuyển / Giao nhận /  Kho vận', 'Xây dựng', 'Xuất nhập khẩu', 'Y tế / Chăm sóc sức khỏe', 'Bảo trì / Sửa chữa', 'Ngành khác'); 
        foreach($data as $item) {
            \App\Models\CompanyIndustry::factory()->create([     
                'name' => $item,
            ]);
        }
    }
}
