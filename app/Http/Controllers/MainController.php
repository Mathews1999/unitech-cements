<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Company;
use App\Models\Customer;
use Illuminate\Support\Facades\Hash;

class MainController extends Controller
{
    function login()
    {
        return view('auth.login');
    }
    function customerview()
    {
        $data=Customer::all();
        return view('company.customerview',['data'=>$data]);
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
        'password'=>'required|min:5|max:12'
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
        $data=Customer::table('customers')->where('id',$request->input('id'))->update([
        'name'=>$request->input('name'),
        'Address'=>$request->input('Address'),
        'phone'=>$request->input('phone'),
        'email'=>$request->input('email')
        ]);
        return redirect('customer.profile1');
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

    
}
