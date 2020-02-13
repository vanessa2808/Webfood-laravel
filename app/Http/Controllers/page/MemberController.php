<?php

namespace App\Http\Controllers\page;

use App\Http\Requests\MemberRequest;
use App\Models\Member;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

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

}
