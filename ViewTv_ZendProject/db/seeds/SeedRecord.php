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
            ],
            [
                'type_client_title'=>'Apple',
                'type_client_description'=>'Production from Vinamilk'
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
        $dataTypeAcc=[
            [
                'type_acc_title'=>'Nomal',
                'type_acc_description'=>'Acount use by nomal'
            ],
            [
                'type_acc_title'=>'Publisher',
                'type_acc_description'=>'Acount use by publisher'
            ],
            [
                'type_acc_title'=>'Team',
                'type_acc_description'=>'Acount use by Team'
            ],
            [
                'type_acc_title'=>'Developer',
                'type_acc_description'=>'Acount use by Developer'
            ]
        ];
        $dataTypeVideo=[
            [
                'type_video_title'=>'Teen',
                'type_video_description'=>'list video ....'
            ],
            [
                'type_video_title'=>'Society',
                'type_video_description'=>'list video ....'
            ],
            [
                'type_video_title'=>'Politic',
                'type_video_description'=>'list video ....'
            ],
            [
                'type_video_title'=>'Normal life',
                'type_video_description'=>'list video ....'
            ],
        ];

        $dataListVideo=[
            [
                'type_video_title'=>'Series PHP',
                'type_video_description'=>'learn php',
                'type_video_status'=>'1',
                'type_video_user_id'=>'1',
                'type_video_created'=>date('Y-m-d H:i:s')
            ],
            [
                'type_video_title'=>'Series Java',
                'type_video_description'=>'learn java',
                'type_video_status'=>'1',
                'type_video_user_id'=>'1',
                'type_video_created'=>date('Y-m-d H:i:s')
            ],
            [
                'type_video_title'=>'Series C#',
                'type_video_description'=>'learn C#',
                'type_video_status'=>'0',
                'type_video_user_id'=>'1',
                'type_video_created'=>date('Y-m-d H:i:s')
            ],
            [
                'type_video_title'=>'Series C++',
                'type_video_description'=>'learn C++',
                'type_video_status'=>'0',
                'type_video_user_id'=>'1',
                'type_video_created'=>date('Y-m-d H:i:s')
            ],
            [
                'type_video_title'=>'Series Python',
                'type_video_description'=>'learn Python',
                'type_video_status'=>'1',
                'type_video_user_id'=>'1',
                'type_video_created'=>date('Y-m-d H:i:s')
            ],
            [
                'type_video_title'=>'Series Javascript',
                'type_video_description'=>'learn Javascript',
                'type_video_status'=>'1',
                'type_video_user_id'=>'1',
                'type_video_created'=>date('Y-m-d H:i:s')
            ]
        ];

        $dataPromotional=[
            [
                'Promotional_title' => 'vinamilk',
                'Promotional_price' => '2000000',
                'Promotional_long' => '100',
                'Promotional_data' => '3000',
                'Promotional_client_id' => 1,
                'Promotional_created' => date('Y-m-d H:i:s'),
            ],
            [
                'Promotional_title' => 'Oppo',
                'Promotional_price' => '200000',
                'Promotional_long' => '100',
                'Promotional_data' => '3000',
                'Promotional_client_id' => 2,
                'Promotional_created' => date('Y-m-d H:i:s'),
            ],
            [
                'Promotional_title' => 'samsung',
                'Promotional_price' => '200000',
                'Promotional_long' => '100',
                'Promotional_data' => '3000',
                'Promotional_client_id' => 3,
                'Promotional_created' => date('Y-m-d H:i:s'),
            ],
            [
                'Promotional_title' => 'Apple',
                'Promotional_price' => '100',
                'Promotional_long' => '3000',
                'Promotional_data' => '4',
                'Promotional_client_id' => 4,
                'Promotional_created' => date('Y-m-d H:i:s'),
            ],

        ];

        $dataUser=[
            [
                'user_name'=>'huy1',
                'user_img' =>'img1.img',
                'user_address'=>'hn',
                'user_phone'=>'0123456789',
                'user_email'=>'huy1@gmail.com',
                'user_username'=>'huy1',
                'user_userpass'=>'huy1',
                'user_typeacc_id'=>'1',
                'user_status'=>'1',
                'user_created'=>date('Y-m-d H:i:s')
            ],
            [
                'user_name'=>'huy2',
                'user_img' =>'img2.img',
                'user_address'=>'hn',
                'user_phone'=>'0123456789',
                'user_email'=>'huy2@gmail.com',
                'user_username'=>'huy2',
                'user_userpass'=>'huy2',
                'user_typeacc_id'=>'1',
                'user_status'=>'1',
                'user_created'=>date('Y-m-d H:i:s')
            ],
            [
                'user_name'=>'huy3',
                'user_img' =>'img3.img',
                'user_address'=>'hn',
                'user_phone'=>'0123456789',
                'user_email'=>'huy3@gmail.com',
                'user_username'=>'huy3',
                'user_userpass'=>'huy3',
                'user_typeacc_id'=>'2',
                'user_status'=>'1',
                'user_created'=>date('Y-m-d H:i:s')
            ],
            [
                'user_name'=>'huy4',
                'user_img' =>'img4.img',
                'user_address'=>'hn',
                'user_phone'=>'0123456789',
                'user_email'=>'huy4@gmail.com',
                'user_username'=>'huy4',
                'user_userpass'=>'huy4',
                'user_typeacc_id'=>'1',
                'user_status'=>'1',
                'user_created'=>date('Y-m-d H:i:s')
            ],
            [
                'user_name'=>'huy5',
                'user_img' =>'img1.img',
                'user_address'=>'hn',
                'user_phone'=>'0123456789',
                'user_email'=>'huy1@gmail.com',
                'user_username'=>'huy5',
                'user_userpass'=>'huy5',
                'user_typeacc_id'=>'1',
                'user_status'=>'1',
                'user_created'=>date('Y-m-d H:i:s')
            ],
            [
                'user_name'=>'huy6',
                'user_img' =>'img6.img',
                'user_address'=>'hn',
                'user_phone'=>'0123456789',
                'user_email'=>'huy6@gmail.com',
                'user_username'=>'huy6',
                'user_userpass'=>'huy6',
                'user_typeacc_id'=>'1',
                'user_status'=>'1',
                'user_created'=>date('Y-m-d H:i:s')
            ],
        ];

        $dataVideo=[
            [
                'video_name'=> 'PHP #1',
                'video_url'=>'video1.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video1.img',
                'video_description'=>'video php 1',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #2',
                'video_url'=>'video2.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video2.img',
                'video_description'=>'video php 2',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #3',
                'video_url'=>'video3.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video3.img',
                'video_description'=>'video php 3',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #4',
                'video_url'=>'video4.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video4.img',
                'video_description'=>'video php 4',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #5',
                'video_url'=>'video5.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video5.img',
                'video_description'=>'video php 5',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #6',
                'video_url'=>'video6.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video6.img',
                'video_description'=>'video php 6',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #7',
                'video_url'=>'video7.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video7.img',
                'video_description'=>'video php 7',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #8',
                'video_url'=>'video8.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video8.img',
                'video_description'=>'video php 8',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #9',
                'video_url'=>'video9.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video9.img',
                'video_description'=>'video php 9',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #10',
                'video_url'=>'video10.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video10.img',
                'video_description'=>'video php 10',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #11',
                'video_url'=>'video11.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video11.img',
                'video_description'=>'video php 11',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'PHP #12',
                'video_url'=>'video12.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video12.img',
                'video_description'=>'video php 12',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'1',
                'video_type_video'=>'1',
                'video_list_id'=>'1'
            ],
            [
                'video_name'=> 'Java #1',
                'video_url'=>'video1.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video1.img',
                'video_description'=>'video Java 1',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'2',
                'video_type_video'=>'1',
                'video_list_id'=>'2'
            ],
            [
                'video_name'=> 'Java #2',
                'video_url'=>'video2.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video2.img',
                'video_description'=>'video Java 2',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'2',
                'video_type_video'=>'1',
                'video_list_id'=>'2'
            ],
            [
                'video_name'=> 'Java #3',
                'video_url'=>'video3.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video3.img',
                'video_description'=>'video Java 3',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'3',
                'video_type_video'=>'1',
                'video_list_id'=>'3'
            ],
            [
                'video_name'=> 'Java #4',
                'video_url'=>'video4.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video4.img',
                'video_description'=>'video Java 4',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'4',
                'video_type_video'=>'1',
                'video_list_id'=>'4'
            ],
            [
                'video_name'=> 'Java #5',
                'video_url'=>'video5.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video5.img',
                'video_description'=>'video Java 5',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'5',
                'video_type_video'=>'1',
                'video_list_id'=>'5'
            ],
            [
                'video_name'=> 'Java #6',
                'video_url'=>'video6.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video6.img',
                'video_description'=>'video Java 6',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'6',
                'video_type_video'=>'1',
                'video_list_id'=>'6'
            ],
            [
                'video_name'=> 'Java #7',
                'video_url'=>'video7.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video7.img',
                'video_description'=>'video Java 7',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'7',
                'video_type_video'=>'1',
                'video_list_id'=>'7'
            ],
            [
                'video_name'=> 'Java #8',
                'video_url'=>'video8.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video8.img',
                'video_description'=>'video Java 8',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'8',
                'video_type_video'=>'1',
                'video_list_id'=>'8'
            ],
            [
                'video_name'=> 'Java #9',
                'video_url'=>'video9.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video9.img',
                'video_description'=>'video Java 9',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'9',
                'video_type_video'=>'1',
                'video_list_id'=>'9'
            ],
            [
                'video_name'=> 'Java #10',
                'video_url'=>'video10.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video10.img',
                'video_description'=>'video Java 10',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'10',
                'video_type_video'=>'1',
                'video_list_id'=>'10'
            ],
            [
                'video_name'=> 'Java #11',
                'video_url'=>'video11.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video11.img',
                'video_description'=>'video Java 11',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'11',
                'video_type_video'=>'1',
                'video_list_id'=>'11'
            ],
            [
                'video_name'=> 'Java #12',
                'video_url'=>'video12.mp4',
                'video_long'=>'320',
                'video_data'=>'32000',
                'video_image'=>'video12.img',
                'video_description'=>'video Java 12',
                'video_view'=>'0',
                'video_status'=>'1',
                'video_dateposted'=>date('Y-m-d H:i:s'),
                'video_user_id'=>'12',
                'video_type_video'=>'1',
                'video_list_id'=>'12'
            ],

        ];

        $this->table('admin')->insert($dataAdmin)->save();
        $this->table('type_client')->insert($dataTypeClient)->save();
        $this->table('client')->insert($dataClient)->save();
        $this->table('type_acc')->insert($dataTypeAcc)->save();
        $this->table('type_video')->insert($dataTypeVideo)->save();
        $this->table('list_video')->insert($dataListVideo)->save();
        $this->table('promotional')->insert($dataPromotional)->save();
        $this->table('user')->insert($dataUser)->save();
        $this->table('video')->insert($dataVideo)->save();
    }
}
