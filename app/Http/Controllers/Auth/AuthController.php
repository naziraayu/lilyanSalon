<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Customer;
use App\Models\User;
use Illuminate\Database\QueryException;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class AuthController extends Controller
{
    private $response = [
        'message' => null,
        'data' => null
    ];

    public function register(Request $req){
        $req->validate([
            'email' => 'required|email|unique:customer,email',
            'no_telp' => 'required',
            'nama_lengkap' => 'required',
            'password' => 'required',
            'pertanyaan_keamanan' => 'required',
            'jawaban' => 'required',
        ]);
        $data = [
            'email' => $req->email,
            'no_telp' => $req->no_telp,
            'nama_lengkap' => $req->nama_lengkap,
            'password' => Hash::make($req->password),
            'pertanyaan_keamanan' => $req->pertanyaan_keamanan,
            'jawaban' => $req->jawaban,
        ];
        try {
            $user = Customer::create($data);
            $this->response['data'] = $user;
            $this->response['message'] = 'success';
            return response()->json($this->response, 200);
        } catch (QueryException $e) {
            $this->response['message'] = 'User registration Failed: ' .$e->getMessage();
            return response() -> json($this->response, 500);
        }
    }

    public function login(Request $req){
        $req->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);

        $user = Customer::where('email', $req->email)->first();

        if (!$user || ! Hash::check($req->password, $user->password)) {
            return response() -> json([
                'message' => "Email or Password is Incorrect"
            ], 401);
        }

        $this->response['message'] = "success";
        $this->response['data'] = ['token' => $user -> createToken('')->plainTextToken];
        return response() -> json($this->response, 200);
    }

    public function me(){
        $user = Auth::guard('sanctum')->user();
        $this->response['message'] = "success";
        $this->response['data'] = $user;
        return response() -> json($this->response, 200);
    }

    public function logout(){
        $user = Auth::user();
        $user->tokens->each(function ($token) {
            $token->delete();
        });
        $this->response['message'] = "success";
        return response() -> json($this->response, 200);
    }
}
