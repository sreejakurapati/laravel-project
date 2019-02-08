<?php 
	namespace App\Modules\module2\Models;
	use Illuminate\Database\Eloquent\Model;
	use DB;
    use View;
    class regModel{
		public function insert($insert){ 
            $insert  = DB::table('users')->insertGetId(array('username'=>$insert['username'],
                        'firstname'=>$insert['firstname'],
                        'lastname'=>$insert['lastname'],
                        'password'=>$insert['password'],
                        'gender'=>$insert['gender'],
                        'emailaddress'=>$insert['emailaddress'],
                        'phonenumber'=>$insert['phonenumber']));
            if($insert){
                return 1;
            }else{
                return 0;
            }
        }
        public function checklogin($data){
        	return $qry=DB::table('users')
            ->where('username',$data['username'])
            ->where('password',$data['password'])
            ->get()->toArray();
        }  
        public function delete($user_id){
            $delete = DB::table('users')
                  ->where('id',$user_id)
                  ->delete();
                if($delete){
                    return 1;
                }else{
                    return 0;
                }
        }
        public function edit($update){
            $user_id = $update['user_id'];
           $update=array('username'=>$update['username'] ,'firstname'=>$update['firstname'],'lastname'=>$update['lastname'],'gender'=>$update['gender'],'emailaddress'=>$update['email'],'phonenumber'=>$update['phonenumber']);

            $update = DB::table('users')
                ->where('id',$user_id)
                ->update($update);
            if($update){
                return 1;
            }else{
                return 0;
            }
        }
        public function newuser($insert){
             $insert  = DB::table('users')->insertGetId(array('username'=>$insert['username'],
                        'firstname'=>$insert['firstname'],
                        'lastname'=>$insert['lastname'],
                        'gender'=>$insert['gender'],
                        'emailaddress'=>$insert['emailaddress'],
                        'phonenumber'=>$insert['phonenumber']));
            if($insert){
                return 1;
            }else{
                return 0;
            }
        }
        public function logout($logout){
         return 1;
    
        }
	}
?>