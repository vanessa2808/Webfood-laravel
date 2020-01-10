<?php

namespace App\Http\Controllers\page;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\HeaderRequest;
use App\Models\Header;
use phpDocumentor\Reflection\Types\Self_;

class HeaderController extends Controller
{
    protected $header;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO ="0";
    protected const RETURN_STR_ONE= "1";
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function __construct(Header $_header = null)
    {
        $this->middleware('auth');
        $this->header= $_header;
    }
    public function index() {
        $listHeader = $this->header->getAllHeader();
        return view('page.home',[
            'listHeader' => $listHeader
        ], compact('listHeader'),['listHeader'=>$listHeader]);
    }






    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

}
