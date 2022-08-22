<?php

namespace App\Http\Controllers;


use Carbon\Carbon;
use Illuminate\Http\Request;
use DB;
use App\Models\Books;



class BooksController extends Controller
{
    //insert book
    public function insert(Request $req) {

        $req->validate([
            'name' => 'required|string|max:255'
        ]);

        $book = new Books;
        $book->name = $req->name;
        $result = $book -> save();
        
        if($result){
            return response('Data has been saved', 200);
        }
        else{
            return response('Fail', 500);
            
        }
    }

    //update book
    public function update(Request $req){

        $req->validate([
            'name' => 'required|string|max:255'
        ]);

        $id = $req->id;
        $new_name = $req->name;

        $current_date_time = Carbon::now()->toDateTimeString();

        DB::table('books')->where('id', $id)->update(['name' => $new_name, 'updated_at' =>  $current_date_time]);

        return response('Data has been updated', 200);
        
    }

    //delete book
    public function delete($id){

        DB::table('books')->delete($id);
        return response('row deleted', 200);
        
    }
    
    //show data
    public function show(){
        $books = DB::table('books')->get();

       
        return response()->json($books);
    
        
    }
    
    //show specific book
    public function show_name($name){

        $book = DB::table('books')->where('name', $name)->get();
        return response()->json($book);
        
    }
}
