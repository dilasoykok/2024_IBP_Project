<?php

namespace App\Http\Controllers\UserPanel;

use App\Http\Controllers\Controller;
use App\Http\Requests\MessageStoreRequest;
use App\Http\Requests\updateUserPassRequest;
use App\Models\Announcement;
use App\Models\Communication;
use App\Models\Service;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //Standar kullanıcı anasayfası
    public function index()
    {
        if (Auth::check()) {
            if (Auth::user()->role === 'admin') {
                $notice = Announcement::count();
                $services = Service::count();
                $users = User::count();
                $messages = Communication::count();
                return view('admin.index', compact('notice', 'services', 'users', 'messages'));
            } else {
                $messages = Communication::where('from_user_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
                $data = Announcement::orderBy('created_at', 'desc')->get();
                return view('user.index', compact('messages', 'data'));
            }
        }else{
            return view('admin/login');
        }
    }

    public function services()
    {
        $data = Service::all();
        return view('user.services.services', compact('data'));
    }

    //Hizmet arama sayfası
    public function searchServices(Request $request)
    {
        //$messages = Message::where('sender_id', Auth::user()->id)->orderBy('created_at', 'desc')->take(3)->get();
        $query = $request->input('query');

        // Kitaplarda anahtar kelimeye göre arama yap
        $data = Service::where('title', 'like', "%{$query}%")
            ->orWhere('keyword', 'like', "%{$query}%")
            ->orWhere('description', 'like', "%{$query}%")
            ->get();

        return view('user.services.services', compact('data'));
    }
    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }
    //Yeni mesaj oluşturma
    public function messageStore(MessageStoreRequest $request)
    {
        $data=new Communication();
        $data->from_user_id = Auth::user()->id;
        $data->giden_message=$request->sendedMessage;
        $data->save();
        return redirect('/user/message');
    }

    //Mesajlar sayfası
    public function messages()
    {
        $data = Communication::where('from_user_id', Auth::user()->id)->get();
        return view('user.messages.message', compact('data'));
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

    // Hizmet detay sayfası
    public function showService($id)
    {
        $data = Service::find($id);
        return view('user.services.showService', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        return view('user.updateUserPass');
    }

    public function updateUserPass(updateUserPassRequest $request,$id)
    {

        $data = User::find($id);
        $data->password = Hash::make($request->newPass);
        $data->save();
        return view('user.alert');
//        if($data->password === Hash::make($request->currentPass)){
//            $data->password = Hash::make($request->currentPass)
//            return redirect('/user/');
//        }else{
//            return redirect()->back()->with('error','Şifre yanlış');
//        }

    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {

    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        //
    }



}
