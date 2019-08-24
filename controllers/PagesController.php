<?php

class PagesController
{
    public function Home()
    {
        return view('index');
    }

    public function about()
    {
        $company = 'Andela';

        return view('about', ['company' => $company]);
    }

    public function contact()
    {
        return view('contact');
    }
}
