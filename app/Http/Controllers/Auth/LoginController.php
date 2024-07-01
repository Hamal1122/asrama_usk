<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use GuzzleHttp\Client;
use Ramsey\Uuid\Uuid;
use App\Models\User;
use Illuminate\Support\Facades\Hash;

class LoginController extends Controller
{
    use AuthenticatesUsers;

    /**
     * Ke mana harus mengarahkan pengguna setelah login.
     *
     * @var string
     */
    protected $redirectTo = '/beranda_admin';

    /**
     * Membuat instance controller baru.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request)
    {
        // Validasi input
        $this->validate($request, [
            'nim' => 'required',
            'password' => 'required',
        ]);

        $nim = $request->input('nim');
        $password = $request->input('password');

        // Coba login dengan data lokal
        if (Auth::attempt(['nim' => $nim, 'password' => $password])) {
            // Periksa peran pengguna dan arahkan ke halaman yang sesuai
            $userRole = auth()->user()->role;
            if ($userRole == 'admin') {
                return redirect()->route('beranda_admin');
            } elseif ($userRole == 'mahasiswa') {
                return redirect()->route('beranda');
            }
        } else {
                $localUser = User::where('nim', $nim)->first();
                if ($localUser) {
                    return redirect()->route('login')->with('error', 'NIM atau Password yang anda masukkan salah');
                }

                    $url = env('WEBSERVICE_URL');
                    $key = env('WEBSERVICE_KEY');
                    $client = new Client();
                    $response = $client->request('GET', $url . $nim . $key);
                    $body = $response->getBody()->getContents();
                    $xml = simplexml_load_string($body);

                    if ($xml->npm == $nim) {
                        $user = new User();
                        $user->nim = (string)$xml->npm;
                        $user->password = bcrypt("password");
                        $user->name = (string)$xml->nama;
                        $user->email = (string)$xml->email;
                        $user->no_hp = (string)$xml->no_tlp_mhs;
                        $user->role = 1;

                        
                        $user->save();

                        Auth::Login($user);

                        $request->session()->regenerate();
                        return redirect()->route('beranda')->with('success', 'Anda telah berhasil login');
                    } else {
                        return redirect()->back()->withErrors('Tidak dapat mengidentifikasi email/NIP/NIM atau password anda salah')->withInput();
                    }
            
        }

        return redirect()->route('login')->with('error', 'NIM atau Password yang anda masukkan salah');
    }
}
