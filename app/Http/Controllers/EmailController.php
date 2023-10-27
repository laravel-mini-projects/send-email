<?php

namespace App\Http\Controllers;

use App\Jobs\SendEmailJob;
use Illuminate\Http\Request;

class EmailController extends Controller
{
    //

    public function sendEmaill(){
        SendEmailJob::dispatch('knahar12bd@gmail.com');

        return "Mail has been sent.";
    }
}
