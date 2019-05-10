<?php

use Illuminate\Database\Seeder;

class tourSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    	DB::table('tours')->insert([
            ['name' => 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng (Khách sạn 3*. Tặng Show Ký Ức Hội An. Tour Tiêu Chuẩn)','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => 'trongnuoc.jpg','flight_id' => '1', 'price_id' => "1", 'category_id' => '1', 'status' => '0'],
            ['name' => 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng (Khách sạn 3*. Tặng Show Ký Ức Hội An. Tour Tiêu Chuẩn)','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => 'trongnuoc.jpg','flight_id' => '2', 'price_id' => "2", 'category_id' => '2', 'status' => '0'],
            ['name' => 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng (Khách sạn 3*. Tặng Show Ký Ức Hội An. Tour Tiêu Chuẩn)','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => 'trongnuoc.jpg','flight_id' => '3', 'price_id' => "3", 'category_id' => '3', 'status' => '0'],
            ['name' => 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng (Khách sạn 3*. Tặng Show Ký Ức Hội An. Tour Tiêu Chuẩn)','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => 'trongnuoc.jpg','flight_id' => '4', 'price_id' => "4", 'category_id' => '4', 'status' => '0'],
            ['name' => 'Đà Nẵng - Bà Nà - Cầu Vàng - Sơn Trà - KDL Thần Tài - Hội An - Đà Nẵng (Khách sạn 3*. Tặng Show Ký Ức Hội An. Tour Tiêu Chuẩn)','departure_location' => 'Đà nẵng',  'end_location' => "Sơn trà", 'departure_day' => '2019-06-23 11:46:05','concentrate_place' => 'Sân bay đà nẵng','time' => '4 ngày',  'quantity_tourist' => "12", 'description' => '- Bán đảo Sơn Trà, viếng Chùa Linh Ứng - Nơi đây có tượng Phật Quan Thế Âm cao nhất Việt Nam, đứng nơi đây, Quý khách sẽ được chiêm ngưỡng toàn cảnh thành phố, núi rừng và biển đảo Sơn Trà một cách hoàn hảo nhất. 
            - Phố Cổ Hội An - Chùa Cầu, Nhà Cổ Phùng Hưng, Hội Quán Phước Kiến, Cơ sở Thủ Công Mỹ Nghệ,…
            - Tặng Show Ký Ức Hội An - Vở diễn thực cảnh ngoài trời với số lượng diễn viên đạt kỷ lục Việt Nam, tái hiện nhịp nhàng sinh động miền ký ức đa văn hóa: Champa, Bồ Đào Nha, Nhật, Trung… chứng kiến cuộc sống thôn quê bình dị bên dòng sông Hoài, khoảnh khắc hùng tráng trong lịch sử, nét hoàng kim của cảng thị một thời... và Công Viên Ấn tượng Hội An - Tái hiện Hội An của quá khứ, một cảng thị quốc tế sầm uất với sự hiện diện của các nền văn hóa Á, Âu, tìm hiểu nghề nuôi tằm ươm tơ, quay tơ dệt lụa bằng khung cửi, làm bánh đậu xanh Hội An, thưởng thức trà đạo phong cách Nhật Bản … Đoàn quay về lại Đà Nẵng, tự do nghỉ ngơi. Nghỉ đêm tại Đà Nẵng','image' => 'trongnuoc.jpg','flight_id' => '5', 'price_id' => "5", 'category_id' => '1', 'status' => '0'],
            
        ]);
    }
}
