<?php

namespace App\Http\Controllers;

use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Validation\Rule;
use Inertia\Inertia;

class SettingsController extends Controller
{
    public function index()
    {
        return Inertia::render('Settings/Index');
    }

    public function updateEmailSettings(Request $request)
    {
        $user = $request->user();
        $input = $request->all();

        Validator::make($input, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'email', 'max:255', Rule::unique('users')->ignore($user->id)],
            'imaphost' => ['required', 'string', 'max:255'],
            'imapport' => ['required', 'string', 'max:255'],
            'imapusername' => ['required', 'string', 'max:255'],
            'imappassword' => ['required'],
            'smtphost' => ['required', 'string', 'max:255'],
            'smtpport' => ['required', 'string', 'max:255'],
            'smtpusername' => ['required', 'string', 'max:255'],
            'smtppassword' => ['required'],
        ])->validateWithBag('updateEmailSettings');

        $user->forceFill([
            'name' => $input['name'],
            'email' => $input['email'],
        ])->save();


        return $request->wantsJson() ? new JsonResponse('', 200) : back()->with('status', 'email-settings-updated');
    }
}
