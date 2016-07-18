<?php

namespace Introcept\Http\Controllers;

use Introcept\Http\Requests\ClientsRequest;
use Illuminate\Http\Request;
use Introcept\Services\CSVService;

class ClientsController extends Controller
{
    protected $csvService;

    public function __construct(CSVService $csvService)
    {
    	$this->csvService = $csvService;
    }

    public function index()
    {

        $allData = $this->csvService->getAllData(getCSVFile());

        return view('clients.index', compact('allData'));
    }

    public function create()
    {
        return view('clients.create');
    }


    public function store(ClientsRequest $request)
    {
        $clientsInfo = $request->all();

        $this->csvService->storeData($clientsInfo);

        return redirect()->route('clients.index')->with('message', 'Successfully added the data.');

    }

    public function show($id)
    {
        $details = $this->csvService->getDetail($id);

        if ($details) {
            return view('clients.show', compact('details'));
        }

        return redirect()->route('clients.index')->with('message', 'Sorry Could not get fetch the data');

    }
}
