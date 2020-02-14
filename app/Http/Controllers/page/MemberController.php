<?php

namespace App\Http\Controllers\page;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;


class MemberController extends Controller
{
    protected $member;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function __construct(Member $_member = null)
    {
        $this->member= $_member;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listMember = $this->member->getAllMember();
        return view('page.member',[
            'listMember' => $listMember
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddMember()
    {
        return view('page.member');

    }

    public function postAddMember(MemberRequest $request)
    {
        $newMember = $this->member->addNewMember($request);
        if($newMember == self::RETURN_STR_ZERO) {
            return redirect('page/member');
        }
        return redirect('page/home');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */


    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function get_addUsers() {
        return view('page.member');
    }
    public function post_addUSers(MemberRequest $request) {
        $name = $request->name;
        $role_id = 1;
        $email = $request->email;
        $phone = $request->phone;

        $password =  Hash::make($request->password);
        $created_at = date('Y-m-d h:i:s');
        $avatar = 'default.png';
        if ($request->hasfile('avatar')){
            $file = $request->avatar;
            $avatar = $file->getClientOriginalName();
            $file->move('/uploads/members', $avatar);
        }

        DB::insert('INSERT INTO users (name,role_id,avatar, email,phone,password, created_at) values (?, ?, ?, ?, ?,?,?)', [$name,$role_id,$avatar, $email, $phone,$password, $created_at]);
        return redirect('/home');

    }

}
