<?php



namespace App\Http\Controllers;


class PagesController extends Controller {

    public function getIndex(){

    }
    public function getContact(){
        $first = 'yochanand';
        $last = 'dahan';
        $email = 'yochanan@mail.com';
        $full = $first . " " . $last;
        $data = [];
        $data['email'] = $email;
        $data['fulname'] = $full;
        return view('pages.contact')->withData($data);
    }
}




