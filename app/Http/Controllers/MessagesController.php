<?php

namespace App\Http\Controllers;

//use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;

class MessagesController extends Controller

{
    public function store()

    {
    	request()->validate([
    	'name' => 'required',
    	'email' => 'required|email',
    	'subject' => 'required',
    	'content' => 'required|min:5',
    
    ],[

    	'name.required'=> 'Necesito tu Nombre'
    ]);

        //Enviado de Email.

       // Mail::too

    	return 'Datos validados correcta mente!';
    }
}
