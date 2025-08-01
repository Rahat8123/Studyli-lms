<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
class AdminController extends Controller
{
      public function AdminDashboard()
   {
       return view('admin.index');
   }
      public function AdminLogout(Request $request) {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        // $notification = array(
        //     'message' => 'Logout Successfully',
        //     'alert-type' => 'info'
        // );

        // return redirect('/admin/login')->with($notification);
         return redirect('/admin/login');
    } // End Method


        public function AdminLogin(){
        return view('admin.admin_login');
    } // End Method
   public function AdminProfile(){






        $id = Auth::user()->id;


        $profileData = User::find($id);


        return view('admin.admin_profile_view',compact('profileData'));


    }// End Method
     public function BecomeInstructor(){






        return view('frontend.instructor.reg_instructor');




    }// End Method

public function InstructorRegister(Request $request){






        $request->validate([


            'name' => ['required','string','max:255'],


            'email' => ['required', 'string','unique:users'],


        ]);





        User::insert([


            'name' => $request->name,


            'username' => $request->username,


            'email' => $request->email,


            'phone' => $request->phone,


            'address' => $request->address,


            'password' =>  Hash::make($request->password),


            'role' => 'instructor',


            'status' => '0',


        ]);





        $notification = array(


            'message' => 'Instructor Registed Successfully',


            'alert-type' => 'success'


        );


        return redirect()->route('instructor.login')->with($notification);





    }// End Method
    public function AllInstructor(){






        $allinstructor = User::where('role','instructor')->latest()->get();


        return view('admin.backend.instructor.all_instructor',compact('allinstructor'));


    }// End Method

 public function UpdateUserStatus(Request $request){






        $userId = $request->input('user_id');


        $isChecked = $request->input('is_checked',0);





        $user = User::find($userId);


        if ($user) {


            $user->status = $isChecked;


            $user->save();


        }





        return response()->json(['message' => 'User Status Updated Successfully']);





    }// End Method


}
