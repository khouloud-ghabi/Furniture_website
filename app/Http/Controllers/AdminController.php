<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Contact;

use Mail;
class AdminController extends Controller
{
    public function product(){
        return view('admin.product');
    }

    public function showproduct(){

        $data=product::all();

        return view('admin.showproduct',compact('data'));

    }


    public function uploadproduct(Request $request){

        $data=new product;

      $image=$request->file;

    $imagename=time().'.'.$image->getClientOriginalExtension();
   $request->file->move('productimage',$imagename);
    $data->image=$imagename;

        $data->title=$request->title;
        $data->price=$request->price;
        $data->description=$request->des;
        $data->quantity=$request->quantity;



    $data->save();

    return redirect()->back()->with('message','Product Added Successfully');

    }

    public function deleteproduct($id)

    {
        $data=product::find($id);
        $data->delete();
        return redirect()->back()->with('message','Product Delete Successfully');

    }

    public function updateview($id)
{
   $data=product::find($id);
   return view('admin.updateview',compact('data'));}


   public function updateproduct(Request $request ,$id)
   {
      $data=product::find($id);

      $image=$request->file;

      if($image){

      $imagename=time().'.'.$image->getClientOriginalExtension();
     $request->file->move('productimage',$imagename);
      $data->image=$imagename;
      }
          $data->title=$request->title;
          $data->price=$request->price;
          $data->description=$request->des;
          $data->quantity=$request->quantity;



      $data->save();

      return redirect()->back()->with('message','Product Update Successfully');


    }


    public function contact(){
        return view('admin.contact');
    }

    //public function sendEmail(Request $request){
       // $data=new contact;

        //$data->name=$request->name;
        //$data->subject=$request->subject;
        //$data->email=$request->email;
       // $data->message=$request->message;
        //$data->save();

    // return back()->with('message', 'Your Message has been sent successfully!');
       // }

}
