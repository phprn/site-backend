<?php

namespace App\Http\Controllers\Api;

use App\Mail\SendContato;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Mail;

class MailController extends Controller
{
    public function index(Request $request)
    {
        Mail::send('mail.index',
            array(
                'nome' => $request->get('nome'),
                'email' => $request->get('email'),
                'mensagem' => $request->get('mensagem')
            ), function ($message) {
                $message->from('contato@phprn.org');
                $message->to('contato@phprn.org', 'Formulário')->subject('Formulário de Contato');
            });
    }
}
