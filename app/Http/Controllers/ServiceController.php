<?php


namespace App\Http\Controllers;


use App\Repositories\RequestRepository;
use Illuminate\View\View;

class ServiceController extends Controller
{

    public function services() : View
    {

        return view('services');
    }

    public function php() : View
    {

        return view('php');
    }

    public function talents() : View
    {

        return view('talents');
    }

    public function candidates() : View
    {

        $requestRepository = new RequestRepository();
        return view('candidates')->with('data', $requestRepository->getDataToForm());
    }

    public function outsourcing() : View
    {

        $requestRepository = new RequestRepository();
        return view('outsourcing')->with('data', $requestRepository->getDataToForm());
    }
}
