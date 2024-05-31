<?php

namespace App\Http\Controllers;

use App\Http\Requests\CheckUserRequest;
use App\Http\Requests\RegisterStoreRequest;
use App\Models\Announcement;
use App\Models\Communication;
use App\Models\Service;
use App\Models\User;
use Illuminate\Contracts\Auth\StatefulGuard;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserCheckController extends Controller
{
    /**
     * The guard implementation.
     *
     * @var \Illuminate\Contracts\Auth\StatefulGuard
     */
    protected $guard;

    /**
     * Create a new controller instance.
     *
     * @param \Illuminate\Contracts\Auth\StatefulGuard $guard
     * @return void
     */
    public function __construct(StatefulGuard $guard)
    {
        $this->guard = $guard;
    }
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
    }
    public function checkUser(CheckUserRequest $request)
    {
       $credentials = $request->validate([
            'email' => ['required', 'email'],
            'password' => ['required'],
        ]);
        $user = User::where('email', $request->email)->first();
        if (Auth::attempt($credentials)) {
            $request->session()->regenerate();
            if($user->role==='admin'){
                $messages = Communication::count();
                $hizmetler= Service::count();
                $users= User::count();
                $anounce= Announcement::count();
                return redirect('/admin/')
                    ->with('books', $hizmetler)
                    ->with('users', $users)
                    ->with('duyurular', $anounce);
            }
            else{
                $messages = Communication::where('from_user_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
                $data= Announcement::all();
                return view('user.index', compact('messages', 'data'));
            }

        }
        return back()->withErrors([
            'email' => 'The provided credentials do not match our records.',
        ])->onlyInput('email');

    }

    public function registerStore(RegisterStoreRequest $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->password = Hash::make($request->password);
        $user->save();
        return view('admin/login');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function logout(Request $request)
    {
        $this->guard->logout();

        if ($request->hasSession()) {
            $request->session()->invalidate();
            $request->session()->regenerateToken();
        }

        return redirect('/login');
    }
}
