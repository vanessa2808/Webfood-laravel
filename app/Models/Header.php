<?php

namespace App\Models;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Model;

class Header extends Model
{
    protected $table = 'header';
    protected $fillable = ['title','description','image','created_at','updated_at'];
    protected const RETURN_NUM_ZERO = 0;
    protected const RETURN_NUM_ONE = 1;
    protected const RETURN_STR_ZERO = "0";
    protected const RETURN_STR_ONE = "1";

    public function getAllHeader() {
        return $this->all();
    }
    public function addNewHeader($request) {
        $newHeader = new Header();
        $newHeader->title= $request->title;
        $newHeader->description = $request->description;
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('upload/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("upload/products", $Hinh);
            $newHeader ->image= "upload/products/".$Hinh;
        }
        $newHeader->created_at = Carbon::now();
        if(! $newHeader->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $newHeader;

    }
    public function getHeaderById($id){
        return $this->find($id);
    }
    public function updateHeader($request,$id){
        $idHeader = $this->find($id);
        $idHeader->title = $request->title;
        $idHeader->description= $request->description;
        if($request -> hasFile('image'))
        {
            $file = $request->file('image');
            $name = $file -> getClientOriginalName();
            $Hinh = str_random(4)."_".$name;
            while(file_exists('upload/products'.$Hinh))
            {
                $Hinh = str_random(4)."_".$name;
            }
            $file->move("upload/products", $Hinh);
            $idHeader ->image= "upload/products/".$Hinh;
        }        $idHeader->updated_at = Carbon::now();
        if(! $idHeader ->save()) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeader;

    }
    public function deleteHeader($id) {
        $idHeader = $this->find($id);
        if(! $idHeader->destroy($id)) {
            return self::RETURN_STR_ZERO;
        }
        return $idHeader;
    }



}
