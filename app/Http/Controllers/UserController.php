<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $users = User::paginate(10);

        $query = $request->query("name");

        if ($query){
            $users = User::where("name", "like", "%{$query}%")->paginate(10);
        }

        return view("superuser_view", compact("users"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("superuser.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required"
        ]);

        $request["password"]=Hash::make($request["password"]);

        User::create($request->all());

        return redirect()->route("superuser");
    }

    /**
     * Display the specified resource.
     */
    public function show(User $user)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user, $id)
    {
        $item = $user->find($id);
        return view("superuser.edit", compact("item"));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user, $id)
    {
        $item = $user->find($id);
        $request->validate([
            "name"=>"required",
            "email"=>"required",
            "password"=>"required"
        ]);

        if (isset($request['password'])) {
            $request['password'] = Hash::make($request['password']);
        }

        $item->update($request->all());

        return redirect()->route("superuser");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(User $user, $id)
    {
        $item = $user->find($id);
        $user->delete($item);
        return redirect()->route("superuser");
    }
}
