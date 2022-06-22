<?php
 namespace App\Http\Controllers;
 use Illuminate\Http\Request;
 use App\Models\User;
 use Illuminate\Support\Facades\Auth;
 use Illuminate\Support\Facades\Hash;
 
 
class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view ('users.index')->with('users', $users);
    }
 
    
    public function create()
    {
        return view('users.create');
    }
 
   
    public function store(Request $request)
    {
        $input = $request->all();
        User::create($input);
        return redirect('user')->with('flash_message', 'User Addedd!');  
    }
 
    
    public function show($userID)
    {
        $user = User::find($userID);
        return view('users.show')->with('users', $user);
    }
 
    
    public function edit($userID)
    {
        $user = User::find($userID);
        return view('users.edit')->with('users', $user);
    }
 
  
    public function update(Request $request, $userID)
    {
        $user = User::find($userID);
        $input = $request->all();
        $user->update($input);
        return redirect('user')->with('flash_message', 'user Updated!');  
    }
 
   
    public function destroy($userID)
    {
        User::destroy($userID);
        return redirect('user')->with('flash_message', 'User deleted!');  
    }

    public function register()
    {
        $user['title'] = 'Register';
        return view('users.register', $user);
    }

    
    public function register_action(Request $request)
    {
        $request->validate([
            'userName' => 'required|unique:users',
            'email' => 'required',
            'phone' => 'required',
            'game' => 'required',
            'status' => 'required',
            'roleID' => 'required',
            'password' => 'required',
        ]);

        $user = new User([
            'userName' => $request->userName,
            'email' => $request->email,
            'phone' => $request->phone,
            'game' => $request->game,
            'status' => $request->status,
            'roleID' => $request->roleID,
            'password' => Hash::make($request->password),
        ]);
        $user->save();

        return redirect()->route('login')->with('success', 'Registration success. Please login!');
    }

    
    public function login()
    {
        $user['title'] = 'Login';
        return view('users.login', $user);
    }

    public function login_action(Request $request)
    {
        $request->validate([
            'userName' => 'required',
            'password' => 'required',
        ]);
        if (Auth::attempt(['userName' => $request->userName, 'password' => $request->password])) {
            $request->session()->regenerate();
            return redirect()->intended('/index');
        }

        return back()->withErrors([
            'password' => 'Wrong username or password',
        ]);
    }
}