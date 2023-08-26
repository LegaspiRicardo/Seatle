<?php

namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use App\Providers\RouteServiceProvider;


class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return false;
    }


    public function store(LoginRequest $request)
    {
        // Validar las credenciales del usuario
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        // Intentar autenticar al usuario
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            // Si la autenticación es exitosa, regenera la sesión
            $request->session()->regenerate();

            // Redirigir al usuario a la página de inicio
            return redirect()->intended(RouteServiceProvider::HOME);
        }

        // Si la autenticación falla, vuelve a la página de inicio de sesión con errores
        return back()->withErrors(['email' => 'Las credenciales proporcionadas son incorrectas.'])->withInput($request->only('email'));
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array<string, mixed>
     */
    public function rules()
    {
        return [
            //
        ];
    }
}
