<?php

namespace App\Http\Controllers\Panel\Admin\User;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\User\PasswordRequest;
use App\User;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    private $user;
    public function __construct(User $user)
    {
        $this->user = $user;
    }

    public function index()
    {
        return view('panel.admin.pages.user.password');
    }

    public function update(PasswordRequest $request)
    {
        $data = $this->user->find(auth()->user()->id);
        $data->update([
            'password' => Hash::make($request->get('password'))
        ]);
        return redirect()->back()->with('success', 'Senha atualizada com sucesso!');
    }
}
