<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class QrevController extends Controller
{
    /**
     * Landing page QR code
     *
     * @param null $ident
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function landing($ident = null)
    {
        $session = str_random(16);
        $key = str_random(16);

        if ($ident !== null) {
            if (strlen($ident) != 32) abort(404);
            $session = substr($ident, 0, 16);
            $key = substr($ident, 16, 16);
        }

        return view('landing')->with(compact('session', 'key'))->with('share', $ident !== null);
    }

    /**
     * Demo page QR code
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function demo()
    {
        $session = "0B8qt43gkyP32l6u";
        $key = "P3c788gcEa8l480H";

        return view('landing')->with(compact('session', 'key'))->with('share', false);
    }

    /**
     * Demo page QR code
     *
     * @return \Illuminate\Contracts\View\Factory|\Illuminate\View\View
     */
    public function demoShare()
    {
        $session = "0B8qt43gkyP32l6u";
        $key = "P3c788gcEa8l480H";

        return view('landing')->with(compact('session', 'key'))->with('share', true);
    }

}