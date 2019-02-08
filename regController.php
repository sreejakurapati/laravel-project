<?php 
    namespace App\Modules\module2\Controllers;
    use App\Modules\module2\Models\regModel;
    use DB;
    use view;
    use Session;
    use Illuminate\Http\Request;
    use Illuminate\Http\Response;
    class regController{
        public function __construct() {
            $this->reg= new regModel();
        }
        public function new(){
          return view('module2::reg');
        }
        public function insert(){
        $this->reg->insert();
        }

        public function login(){
            return view('module2::login');
        }
        public function data(){
        $this->reg->data();
        }
        public function registerajax(Request $request){
            try {
                $insert= $request->input();
                $check =  $this->reg->insert($insert);
                if($check){
                    return response()->json(array("status"=>200,"data"=>[],"message"=>"successfully regsitered"));
                }else{
                    return response()->json([0]);
                }
            } catch (Exception $e) {
                Log::info($e->message);
                return response()->json(array("status"=>200,"data"=>[],"message"=>"Server Error"));
            }
        }
        public function loginajax(Request $request){
            try{
                $data= $request->input();
                $check =  $this->reg->checklogin($data);
                $check1=json_decode(json_encode($check),1);
                if(!empty($check[0])){
                    session::put("id",$check[0]->id);
                    session::save();
                    $res = DB::table('users')->get();
                    return response()->json(array("status"=>100,"data"=>[]));
                }else{
                    return response()->json([2]);
                }
            }catch (Exception $e) {
                Log::info($ex->message);
                return response()->json(array("status"=>100,"data"=>[],"message"=>"Server Error"));
            }
        }
        public function homepage(){  
            $id=session::get('id');
            if($id) {
             $res = DB::table('users')->get();
             return View('module2::homepage', ['res' => $res]);
            }else{
             return view('module2::login');
            }
        }
        public function deleteajax(Request $request)
        {
            $delete=$request->input();
            $delete = $this->reg->delete($delete);
             return response()->json(["s"]);
        }
        public function editajax(Request $request){
            $update= $request->input();
            $check =  $this->reg->edit($update);
            return response()->json([1]);
        }
        public function newuserajax(Request $request){
            $insert= $request->input();
            $check =  $this->reg->newuser($insert);
            if($check){
                return response()->json([1]);
            }else{
                return response()->json([0]);
            }
        } 
        public function logoutajax(Request $request){
              $logout= $request->input();
              $check =  $this->reg->logout($logout);
               Session::flush(); 
               return response()->json([1]);
        }
    }
?>




    