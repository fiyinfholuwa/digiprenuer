<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\ActivationCode;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Notifications\Action;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class UserRegister extends Controller
{
    //
    public function index()
    {
        return view('user.auth.pre-register');
    }

    public function pre_register(Request $request, $referral = null)
    {
        return view('user.auth.pre-register', ['referral' => $referral]);
    }

    public function complete_register(Request $request)
    {
        return view('user.auth.complete-register');
    }

    public function activation(Request $request)
    {
        return view('user.auth.activation');
    }


    // POST REQUEST FOR REGISTRATION

    public function pregister(Request $request)
    {
        // dd($request->all());
        $request->validate([
            'fullname'      => 'required|string|max:255',
            'email'         => 'required|string|max:255|unique:users',
            'age'           => 'required|integer|max:255',
            'gender'        => 'required|string|max:12',
            'profession'    => 'required|string|max:31',
            'country'       => 'required|string|max:55',
            'state'         => 'required|string|max:55',
            'referral'      => 'sometimes|nullable|string|max:55',
            'username'      => 'required|string|max:55',
            'password'      => ['required', 'confirmed', 'string', 'max:255', 'min:8', Rules\Password::defaults()],
        ]);



        // Avatar::create($fullname)->toBase64(); Avatar::create($fullname)->save(storage_path(path: 'Avatars/avatar-' . $request->lastname[0] . $request->firstname . '.png'));
        $fullname = $request->fullname;
        $path = public_path('Avatars/avatar-');
        $ProfileImage = 'wdefefefe'; //Avatar::create($fullname)->tosvg();

        $Create                 = new User();
        $Create->fullname      = $request->fullname;
        $Create->email          = $request->email;
        $Create->age            = $request->age;
        $Create->gender         = $request->gender;
        $Create->username       = $request->username;
        $Create->profession     = $request->profession;
        $Create->country        = $request->country;
        $Create->state          = $request->state;
        $Create->referralCode   = $request->referral;
        $Create->profileImage   = $ProfileImage;
        $Create->password       = Hash::make($request->password);
        $Create->save();

        if ($Create->save()) {

            return redirect('complete_registration')->with(['userId' => $Create->id]);
        } else {

            return back()->with('fail', 'Error Occurred, try Later');
        }
    }

    public function cregister(Request $request)
    {
        $request->validate([
            'accountNumber' => 'required|string|max:255',
            'accountName'   => 'required|string|max:255',
            'bankName'      => 'required|string|max:255',
        ]);

        $userId = $request->user_id;

        if (empty($userId)) {
            return back()->with('fail', 'Error Occurred, Start Afresh');
        } else {

            $updateUser = User::whereId($userId)
                ->update([
                    'accountNumber' => $request->accountNumber,
                    'accountName' => $request->accountName,
                    'bankName' => $request->bankName,
                ]);

            if ($updateUser) {

                return redirect('account_activation')->with(['userId' => $userId]);
            } else {

                return back()->with('fail', 'Error Occurred, try Later');
            }
        }
    }

    public function activate(Request $request)
    {
        $request->validate([
            'activationCode' => 'required|string|max:255',
        ]);

        $actCode = ActivationCode::where('activationCode', $request->activationCode)->where('status', 1)->first();

        if (!empty($actCode)) {
            $userId = $request->user_id;

            $activateUser = User::whereId($userId)
                ->update([
                    'activationCode' => $request->activationCode,
                    'is_active' => 1,
                ]);

            ActivationCode::where('activationCode', $request->activationCode)
                ->update([
                    'used_by' => $userId,
                    'status'  => 0,
                ]);

            if ($activateUser) {
                
                Auth::attempt($request->only('username', 'password'));

                return redirect('dashboard')->with('success', 'Account Successfully Created, Now Login');
                
            } else {

                return back()->with('fail', 'Error Occurred, try Later');
            }
        } else {
            return redirect('pre_register')->with('fail', 'Invalid Activation Code');
        }
    }
}
