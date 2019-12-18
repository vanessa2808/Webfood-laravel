<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Carbon\Carbon;
class Blog extends Model
{
    protected $table = 'blog';
    protected $fillable = ['title','description','image','writer','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const DEFAULT_STATUS = "0";
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function addNewBlog($request){
        $newBlog = new blog();
        $newBlog->title = $request->title;
        $newBlog->description = $request->description;
        $newBlog->writer = $request->writer;
        $newBlog->created_at = Carbon::now();
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $nameImage = str_random(4)."_".$name;
            while(file_exists('uploads/blog'.$nameImage))
            {
                $nameImage = str_random(4)."_".$name;
            }
            $file->move("uploads/blog", $nameImage);
            $newBlog ->image= "uploads/blog/".$nameImage;
        }
        else
        {
            $newBlog ->image="";
        }
        if(!$newBlog->save()){
            return self::RETURN_STR_ZERO;
        }
        return $newBlog;
    }
    public function getAllBlog() {
        return $this->all();
    }
    public function deleleBlog($id) {
        $idBlog = $this->find($id);
        if(! $idBlog->destroy($id)){
            return self::RETURN_STR_ZERO;
        }
        return $idBlog;

    }
    public function getBlogById($id) {
        return $this->find($id);
    }
    public function updateBlog($request, $id) {
        $idBlog = $this->find($id);
        $idBlog->title = $request->title;
        $idBlog->description = $request->description;
        $idBlog->writer = $request->writer;
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $nameImage = str_random(4)."_".$name;
            while(file_exists('uploads/blog'.$nameImage))
            {
                $nameImage = str_random(4)."_".$name;
            }
            $file->move("uploads/blog", $nameImage);
            $idBlog ->image= "uploads/blog/".$nameImage;
        }
        $idBlog->updated_at = Carbon::now();
        if(! $idBlog->save()){
            return self::RETURN_STR_ZERO;
        }
        return $idBlog;
    }




}
