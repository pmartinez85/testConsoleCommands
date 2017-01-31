<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SendWelcomeEmailController extends Controller
{
    //
    /**
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */

    public $email;

    public function __construct(SendWelcomeEmail $email)
    {
        parent::__construct();
        $this->email = $email;
    }


    public function handler()
    {
        $this->email->send();

    }

}
