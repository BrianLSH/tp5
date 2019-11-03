<?php
    /**
     * Created by PhpStorm.
     * User: admin
     * Date: 2019/11/3
     * Time: 11:53
     */

    namespace app\admin\controller;
    use think\Controller;
    use app\admin\model\Region;
    use think\Db;
    use think\Request;

    class Province extends Controller
    {
        private $regionModel = '';

        public function __construct()
        {
            parent::__construct();
            $this->regionModel = new Region();

        }


        public function index(Request $request)
        {

            return $this->fetch('province/index');
        }

        public function getProvince(Request $request)
        {
            $data = $request->param();

            $res = $this->getProInfo($data);
            $arr = [];
            $arr['res'] = $res;
            //echoPre($arr);exit;
            return json($res);

        }

        private function getProInfo($data)
        {
            //
            //$ress = Db::table('dsc_region')->where('parent_id', $data['parent_id'])->where('region_type', $data['type'])->column('parent_id', 'region_name', 'region_type');
            $ress = Db::table('dsc_region')->field('region_id, parent_id, region_name')->where('parent_id', $data['parent_id'])->where('region_type', $data['type'])->select();


                return $ress;
            }



    }