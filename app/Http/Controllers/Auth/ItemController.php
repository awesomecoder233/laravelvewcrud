<?php

namespace App\Http\Controllers\Auth;
use App\Http\Controllers\Controller;
use App\Models\Item;
use Illuminate\Http\Request;
use DB;

class ItemController extends Controller
{
    //
    public function itemsList(Request $request)
    {
        return response()->json(Item::get());
    }

    public function itemById($id)
    {
        return response()->json(DB::table('items')->find($id));
    }

    public function itemsAdd(Request $request)
    {
        $data = request()->all();
        $item = $data['item'];
        $email = $data['email'];
        $datefrom = $data['datefrom'];
        $dateto = $data['dateto'];
        $query = array(
            array('item'=>$item, 'email'=>$email, 'process_from'=>$datefrom, 'process_to'=>$dateto),
        );
        Item::insert($query);
    }

    public function itemUpdate(Request $request)
    {
        $data = request()->all();
        $id = $data['id'];
        $item =  $data['item'];
        $email = $data['email'];
        $datefrom = $data['datefrom'];
        $dateto = $data['dateto'];
        DB::table('items')
            ->where('id', $id)
            ->update(['item' => $item, 'email' => $email, 'process_from' => $datefrom, 'process_to' => $dateto]);
    }
    public function itemsDelete (Request $request)
    {
        $data = request()->all();
        $id = $data['id'];
        DB::table('items')->where('id', '=', $id)->delete();
    }
}
