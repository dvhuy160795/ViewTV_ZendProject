<?php

use Phinx\Seed\AbstractSeed;

class SeedRecord extends AbstractSeed
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        $dataAdmin=[
            [
            'admin_name'=>'admin',
            'admin_pass'=>'123456',
            'created'=>date('Y-m-d H:i:s')
            ]
        ];

        $dataTypeClient=[
            [
                'type_client_title'=>'vinamilk',
                'type_client_description'=>'Production from Vinamilk'
            ],
            [
                'type_client_title'=>'Oppo',
                'type_client_description'=>'Production from Oppo'
            ],
            [
                'type_client_title'=>'Samsung',
                'type_client_description'=>'Production from Samsung'
            ]
        ];

        $dataClient=[
            [
                'client_name'=>'Đào Văn Huy',
                'client_address'=>'Hà Nội',
                'client_phone'=>'01676917695',
                'client_email'=>'dvhuy160795@gmail.com',
                'client_id_type_client'=>'1'
            ],
            [
                'client_name'=>'Phạm Quang Toàn',
                'client_address'=>'Thanh Hóa',
                'client_phone'=>'01676917658',
                'client_email'=>'quangtoan@gmail.com',
                'client_id_type_client'=>'2'
            ],
            [
                'client_name'=>'Quách Tuấn Nghĩa',
                'client_address'=>'Hà Nội',
                'client_phone'=>'0976917695',
                'client_email'=>'nghiaquach@gmail.com',
                'client_id_type_client'=>'1'
            ],
            [
                'client_name'=>'Nguyễn Tiến Lợi',
                'client_address'=>'Hà Nội',
                'client_phone'=>'01676917600',
                'client_email'=>'nguyentienloi@gmail.com',
                'client_id_type_client'=>'2'
            ],
            [
                'client_name'=>'Đinh Tiến Trung',
                'client_address'=>'Hà Nội',
                'client_phone'=>'01676917623',
                'client_email'=>'trungbeo@gmail.com',
                'client_id_type_client'=>'1'
            ]
        ];

        
        $this->table('admin')->insert($dataAdmin)->save();
    }
}
