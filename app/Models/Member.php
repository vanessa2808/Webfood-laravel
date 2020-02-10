<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
    protected $table = 'member';
    protected $fillable = ['name','role_id','avatar','email','phone','password','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllMember() {
        return $this->all();
    }
    public function addNewMember($request) {
        $newMember = new Member();
        if($request -> hasFile('avatar'))
        {
            $file = $request->file('avatar');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('upload/members'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("uploads/members", $Hinh);
            $newMember ->avatar= "uploads/members/".$Hinh;
        }
        $newMember->name= $request->name;
        $newMember->role_id = 1;
        $newMember->email = $request->email;
        $newMember->phone = $request->phone;
        $newMember->password = $request->password;



        $newMember->created_at = Carbon::now();
        if(! $newMember->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newMember;

    }
    public function getMemberById($id){
        return $this->find($id);
    }

}
