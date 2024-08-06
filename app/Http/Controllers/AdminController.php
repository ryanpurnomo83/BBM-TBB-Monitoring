<?php

namespace App\Http\Controllers;
use App\Models\Monitoring;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;
use Illuminate\Http\Request;


class AdminController extends Controller
{
    public function SignUp()
    {   
        $data = 0;
        return view('ADMIN/check-status', ['data' => $data]);
        //return view('ADMIN/signup');
    }

    public function SignIn()
    {
        $data = 1;
        return view('ADMIN/check-status', ['data' => $data]);
    }

    public function SignUpSave(Request $request)
    {   
        $user = new User;
        $user->name = $request->input('username');
        $user->email = $request->input('email');
        $user->password = $request->input('psw');
        $user->save();
        return redirect()->route('dashboard');
        //return $this->Dashboard();
    }

    public function SignInChecker(Request $request)
    {
        $user = new User;
        $email = $request->input('email');
        $password = $request->input('psw');
        
        $user = User::where('email', $email)->first();
        if($user && $user->password == $password){
            return redirect()->route('dashboard');
            //return $this->Dashboard();
        }else{
            return back()->withErrors(['login' => "Invalid Email or password"]);
        }
    }

    public function Status(Request $request)
    {
        $status = $request->input('status');
        if($status == '0'){
            return $this->SignUpSave($request);
        }else{
            return $this->SignInChecker($request);
        }
    }

    public function Dashboard()
    {
        return view('ADMIN/dashboard');
    }

    public function Users()
    {
        return view('ADMIN/users');
    }

    public function Message()
    {
        return view('ADMIN/message');
    }

    public function DetailMessage()
    {
        return view('ADMIN/detail-message');
    }

    public function Monitoring2()
    {
        return view('ADMIN/monitoring');
    }

    public function Monitoring()
    {
        $monitoring = Monitoring::orderBy('id', 'desc')->limit(10)->offset(0)->get();
        $sortedMonitoring = $this->Sort($monitoring);
        //echo implode(', ', $sortedMonitoring->pluck('jarak')->toArray());
        /*
        foreach ($monitoring as $m) {
            echo $m->jarak; // atau lakukan sesuatu dengan nilai 'jarak'
        }*/
        return view('ADMIN/monitoring', ['monitoring' => $monitoring]);
    }

    public function Sort($m)
    {
        $simpanMonitoring = new Monitoring();
        $v2 = null;
        foreach ($m as $mntr) {
            $v1 = $mntr->level;
            if($v1 == 100){
                //$simpanMonitoring->jarak = $v1;
                $v2 = $v1;
            }else if($v2 !== null && $v1 > $v2){
                //$simpanMonitoring->jarak = $v2;
            }else{
                $v2 = $v1;
            }
        }
        //echo implode(', ', $m->pluck('jarak')->toArray());
        //return $m->sortBy('jarak');
    }

    public function Orders()
    {
        return view('ADMIN/orders');
    }

    public function Settings()
    {
        return view('ADMIN/settings');
    }
}

?>