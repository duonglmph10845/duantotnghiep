<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\SendMail;

class Tesmail extends Controller
{
    //
    public function Tesmail(){
    $data = [
        'name' => 'mr.brow',
        'sp' => 'kkk',
    ];
    Mail::to('duonglmph10845@fpt.edu.vn')->send(new SendMail($data));
    return 'email send';
}

}
