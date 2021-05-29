<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\company;
use DB;
use App\Models\order;
use App\Models\Customer;
use App\Models\OrderModel;
use Carbon\Carbon;
use App\Models\PaymentModel;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login()
    {
        return view('auth.login');
    }
    function list()
    {
        $data=company::all();
        return view('companyview',['data'=>$data]);
    }
    function custlogin()
    {
        return view('auth.custlogin');
    }

    function custregister()
    {
        return view('auth.custregister');
    }
    function compregister()
    {
        return view('auth.compregister');
    }


    function save(Request $request)
    {
       //validate request
        $request->validate([
        'companyname'=>'required',
        'companyid'=>'required',
        'Address'=>'required',
        'phone'=>'required',
        'email'=>'required|email|unique:companies',
        'password'=>'required|min:4|max:12'
        ]);
        $company=new Company;
        $company->companyname=$request->companyname;
        $company->companyid=$request->companyid;
        $company->Address=$request->Address;
        $company->phone=$request->phone;
        $company->email=$request->email;
        $company->password=Hash::make($request->password);
        $save=$company->save();

        if($save){
            return back()->with('success','New User added to Database');
        }else{
            return back()->with('fail','Something went Wrong!!');
        }
    }
    function check(Request $request)
    {
        //validate request
         $request->validate([

         'email'=>'required|email|',
         'password'=>'required|min:5|max:12'
         ]);;
         $userInfo=Company::where('email','=',$request->email)->first();
         if(!$userInfo){
            return back()->with('fail','Cannot recognize the email');
        }else{
            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                  return redirect('company/comphome');
            }else{
                return back()->with('fail','Incorrect Password!!');
            }
        }
    }

    function save1(Request $request)
    {
       //validate request
        $request->validate([
        'name'=>'required',
        'Address'=>'required',
        'phone'=>'required',
        'email'=>'required|email|unique:companies',
        'password'=>'required|min:5|max:12'
        ]);
        $customer=new Customer;
        $customer->name=$request->name;
        $customer->Address=$request->Address;
        $customer->phone=$request->phone;
        $customer->email=$request->email;
        $customer->password=Hash::make($request->password);
        $save=$customer->save();

        if($save){
            return back()->with('success','New User added to Database');
        }else{
            return back()->with('fail','Something went Wrong!!');
        }
    }function check1(Request $request)
    {
        //validate request
         $request->validate([

         'email'=>'required|email|',
         'password'=>'required|min:5|max:12'
         ]);;
         $userInfo=Customer::where('email','=',$request->email)->first();
         if(!$userInfo){
            return back()->with('fail','Cannot recognize the email');
        }else{
            if(Hash::check($request->password,$userInfo->password)){
                $request->session()->put('LoggedUser',$userInfo->id);
                  return redirect('customer/custhome');
            }else{
                return back()->with('fail','Incorrect Password!!');
            }
        }
    }

    function dashboard()
    {
       return view('dashboard');
    }

    function aboutus()
    {
       return view('aboutus');
    }

    function contact()
    {
       return view('contact');
    }

    function product()
    {
       return view('product');
    }

    function product1()
    {
       return view('customer.product1');
    }

    function custhome()
    {
       return view('customer.custhome');
    }

    function experts()
    {
       return view('customer.experts');
    }
    function comphome()
    {
       return view('company.comphome');
    }
    function profile1()
    {
        $data=['LoggedUserInfo'=>Customer::where('id','=',session('LoggedUser'))->first()];
        return view('customer.profile1',$data);
    }

    function fupdate(Request $request)
    {
        // $data=Customer::find($request->id);
        // $data->name=$request->name;
        // $data->Address=$request->Address;
        // $data->phone=$request->phone;
        // $data->email=$request->email;
        // $data->save();
         

        $updating=DB::table('customers')->where('id',$request->input('id'))->update([
            'name'=>$request->input('name'),
            'Address'=>$request->input('Address'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email')
            ]);
            return redirect('customer/profile1');
    }


    function aupdate(Request $request)
    {
        // $company=company::find(request('id'));
        // $company->companyname=request('companyname');
        // $company->companyid=$request->companyid;
        // $company->Address=$request->Address;
        // $company->phone=$request->phone;
        // $company->email=$request->email;
        // $company->save();

        $updating=DB::table('companies')->where('id',$request->input('id'))->update([
            'companyname'=>$request->input('companyname'),
            'companyid'=>$request->input('companyid'),
            'Address'=>$request->input('Address'),
            'phone'=>$request->input('phone'),
            'email'=>$request->input('email')
        ]);

        return redirect('company/profile');
    }




    function profile()
    {
        $data=['LoggedUserInfo'=>Company::where('id','=',session('LoggedUser'))->first()];
        return view('company.profile',$data);
    }
    function logout()
    {
        if(session()->has('LoggedUser')){
            session()->pull('LoggedUser');
            return redirect('/dashboard');
        }
    }
    function order(Request $request)
    {
        return view('customer/order');
    }
    function payment_cement(Request $request)
    {
        $data=Customer::where('id','=',session('LoggedUser'))->first();

        $quantity=$request->c_quantity;
        $price=$quantity*390;
        $product="Cement";
        $ordermodel=new OrderModel();
        $ordermodel->name=$data->name;
        $ordermodel->address=$data->Address;
        $ordermodel->email=$data->email;
        $ordermodel->product=$product;
        $ordermodel->quantity=$quantity;
        $ordermodel->price=$price;
        $ordermodel->save();

        return redirect('customer/order');
    }
    function payment_wcement(Request $request)
    {
        $data=Customer::where('id','=',session('LoggedUser'))->first();

        $quantity=$request->wc_quantity;
        $price=$quantity*500;
        $product="White Cement";

        $order_model=new OrderModel();
        $order_model->name=$data->name;
        $order_model->address=$data->Address;
        $order_model->email=$data->email;
        $order_model->product=$product;
        $order_model->quantity=$quantity;
        $order_model->price=$price;
        $order_model->save();

        return redirect('customer/order');
    }
    /*function payment_save(Request $request)
    {
        $data=OrderModel::where('id','=',session('LoggedUser'))->first();

        $status="Payed";
        $date=Carbon::now();
        $pay_date=$date->toDateString();
        $paymentmodel=new PaymentModel();
        $paymentmodel->name=$request->name;
        $paymentmodel->email=$data->email;
        $paymentmodel->product=$data->product;
        $paymentmodel->card_no=$request->card_no;
        $paymentmodel->amt=$data->price;
        $paymentmodel->status=$status;
        $paymentmodel->pay_date=$pay_date;

        $paymentmodel->save();

        return view('payment_save');
    }*/
    function payment_save(Request $request)
    {
        return view('payment_save');
    }

    function paymentlist()
    {
        $order=Order::all();
        return view ('vieworders',compact('order'));
    }
    function cartList()
    {
        
       $data=Customer::where('id','=',session('LoggedUser'))->first();

        //$ordermodel= OrderModel::all();
        $ordermodel = DB::table('order_models')->where('email',$data['email'])->get();

        $sum= DB::table('order_models')
        ->where('email', $data['email'])
        ->sum('price');
        return view('cartlist',compact('ordermodel'),['sum'=>$sum]);
        
    }
    function cartdelete($id)
    {
        $delete=DB::table('order_models')->where('id',$id)->delete();
        
        return redirect('cartlist')->with('done','Removed Successfully !');
    }
    function payment()
    {
        return view('payment');
    }
    function orderplace(Request $req)
{
    $data=Customer::where('id','=',session('LoggedUser'))->first();
    $allCart=OrderModel::where('email', $data['email'])->get();
    foreach($allCart as $cart)
  {
    $order= new order;
    $order->product=$cart['product'];
    $order->name=$cart['name']; 
    $order->address=$cart['address'];
    $order->email=$cart['email'];
    $order->quantity=$cart['quantity'];
    $order->price=$cart['price'];
    $order->paymentmethod=$req->payment; 
    $order->orderstatus="pending"; 
    $order->save();
  } 
      OrderModel::where('email', $data['email'])->delete();
      if($req->payment=='cod')
      {
        return redirect('/customer/custhome')->with('success','Thank you for your order');
      }
      else 
      { 
         return redirect('/payment');

      }
     
}
function paymentoption()
{    
    $data=Customer::where('id','=',session('LoggedUser'))->first();
    $sum= DB::table('order_models')
    ->where('email', $data['email'])
    ->sum('price');
    return view('paymentoption',['sum'=>$sum]);
}
}
