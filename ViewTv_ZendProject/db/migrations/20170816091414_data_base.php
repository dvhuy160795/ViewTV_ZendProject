<?php

use Phinx\Migration\AbstractMigration;

class DataBase extends AbstractMigration
{
    /**
     * Change Method.
     *
     * Write your reversible migrations using this method.
     *
     * More information on writing migrations is available here:
     * http://docs.phinx.org/en/latest/migrations.html#the-abstractmigration-class
     *
     * The following commands can be used in this method and Phinx will
     * automatically reverse them when rolling back:
     *
     *    createTable
     *    renameTable
     *    addColumn
     *    renameColumn
     *    addIndex
     *    addForeignKey
     *
     * Remember to call "create()" or "update()" and NOT "save()" when working
     * with the Table class.
     */
    public function change()
    {
        $tableAdmin=$this-> table('admin');
        $tableAdmin
                ->addColumn('admin_name','string',array('limit'=>20))
                ->addColumn('admin_pass','string',array('limit'=>20))
                ->addColumn('created','date')
                ->save();

        $tableGroupUser=$this ->table('group_user');
        $tableGroupUser
                ->addColumn('group_user_name','string',array('limit'=>100))
                ->addColumn('group_user_number','integer')
                ->addColumn('group_user_type','string',array('limit'=>30))
                ->save();

        $tableTypeAcc=$this ->table('type_acc');
        $tableTypeAcc
                ->addColumn('type_acc_title','string',array('limit'=>20))
                ->addColumn('type_acc_description','string',array('limit'=>100))
                ->save();

        $tableTypeClient=$this->table('type_client');
        $tableTypeClient
                ->addColumn('type_client_title','string',array('limit'=>20))
                ->addColumn('type_client_description','string',array('limit'=>100))
                ->save();

        $tableClient=$this->table('client');
        $tableClient
                ->addColumn('client_name','string',array('limit'=>32))
                ->addColumn('client_address','text',array('limit'=>100))
                ->addColumn('client_phone','string',array('limit'=>11))
                ->addColumn('client_email','string',array('limit'=>50))
                ->addColumn('client_id_type_client','integer')
                ->save();

        $tablePromotional=$this->table('promotional')
                ->addColumn('promotional_title','string',array('limit'=>32))
                ->addColumn('promotional_price','integer')
                ->addColumn('promotional_long','integer')
                ->addColumn('promotional_data','integer')
                ->addColumn('promotional_client_id','integer')
                ->addColumn('promotional_created','date')
                ->save();

        $tableUser=$this->table('user')
                ->addColumn('user_name','string',array('limit'=>32))
                ->addColumn('user_img','string',['limit'=>100])
                ->addColumn('user_address','text',['limit'=>200])
                ->addColumn('user_phone','string',['limit'=>11])
                ->addColumn('user_email','string',['limit'=>50])
                ->addColumn('user_username','string',['limit'=>32])
                ->addColumn('user_userpass','string',['limit'=>64])
                ->addColumn('user_typeacc_id','integer')
                ->addColumn('user_status','integer')
                ->addColumn('user_created','date')
                ->save();

        $tableUser_Join_Group=$this->table('user_join_group')
                ->addColumn('user_join_group_id_group','integer')
                ->addColumn('user_join_group_id_user','integer')
                ->addColumn('user_join_group_created','date')
                ->save();

        $tableTypeVideo=$this->table('type_video')
                ->addColumn('type_video_title','string',array('limit'=>20))
                ->addColumn('type_video_description','string',array('limit'=>100))
                ->save();

        $tableListVideo=$this->table('list_video')
                ->addColumn('type_video_title','string',array('limit'=>20))
                ->addColumn('type_video_description','string',array('limit'=>100))
                ->addColumn('type_video_status','integer')
                ->addColumn('type_video_user_id','integer')
                ->addColumn('type_video_created','date')
                ->save();

        $tableVideo=$this->table('video')
                ->addColumn('video_name','string',array('limit'=>200))
                ->addColumn('video_url','string',['limit'=>300])
                ->addColumn('video_long','integer')
                ->addColumn('video_data','integer')
                ->addColumn('video_image','string',['limit'=>300])
                ->addColumn('video_description','string',['limit'=>400])
                ->addColumn('video_view','integer')
                ->addColumn('video_status','integer')
                ->addColumn('video_dateposted','date')
                ->addColumn('video_user_id','integer')
                ->addColumn('video_type_video','integer')
                ->addColumn('video_list_id','integer')
                ->save();
        $tableKeyWord=$this->table('keyword')
                ->addColumn('keyword','string',array('limit'=>32))
                ->addColumn('keyword_id','integer')
                ->save();

    }
}
