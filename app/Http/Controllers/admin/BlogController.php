<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\BlogRequest;
use App\Models\Blog;


class BlogController extends Controller
{
    protected $blog;
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function __construct(Blog $_blog = null)
    {
        $this->middleware('auth');
        $this->blog= $_blog;

    }
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $listBlog = $this->blog->getAllBlog();
        return view('admin.blog.list_blog',[
            'listBlog' => $listBlog
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function getAddBlog()
    {
        return view('admin.blog.add_blog');

    }

    public function postAddBlog(BlogRequest $request)
    {
        $newBlog = $this->blog->addNewBlog($request);
        if($newBlog == self::RETURN_STR_ZERO) {
            return redirect('/admin/blog/add_blog');
        }
        return redirect('/admin/blog/list_blog');
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
    public function getEditBlog($id)
    {
        $idBlog = $this->blog->getBlogById($id);
        return view('admin.blog.edit_blog',[
            'idBlog' => $idBlog
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function postEditBlog(BlogRequest $request, $id)
    {
        $idBlog = $this->blog->updateBlog($request, $id);
        if($idBlog == self::RETURN_STR_ZERO) {
            return redirect()->back();

        }
        return redirect('/admin/blog/list_blog');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function delete($id)
    {
        $idBlog = $this->blog->deleleBlog($id);
        if($idBlog == self::RETURN_STR_ZERO) {
            return redirect()->back();
        }
        return redirect('/admin/blog/list_blog');
    }
}
