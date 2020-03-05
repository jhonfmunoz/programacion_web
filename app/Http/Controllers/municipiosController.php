<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatemunicipiosRequest;
use App\Http\Requests\UpdatemunicipiosRequest;
use App\Repositories\municipiosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class municipiosController extends AppBaseController
{
    /** @var  municipiosRepository */
    private $municipiosRepository;

    public function __construct(municipiosRepository $municipiosRepo)
    {
        $this->municipiosRepository = $municipiosRepo;
    }

    /**
     * Display a listing of the municipios.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $municipios = $this->municipiosRepository->paginate(10);

        return view('municipios.index')
            ->with('municipios', $municipios);
    }

    /**
     * Show the form for creating a new municipios.
     *
     * @return Response
     */
    public function create()
    {
        return view('municipios.create');
    }

    /**
     * Store a newly created municipios in storage.
     *
     * @param CreatemunicipiosRequest $request
     *
     * @return Response
     */
    public function store(CreatemunicipiosRequest $request)
    {
        $input = $request->all();

        $municipios = $this->municipiosRepository->create($input);

        Flash::success('Municipios saved successfully.');

        return redirect(route('municipios.index'));
    }

    /**
     * Display the specified municipios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $municipios = $this->municipiosRepository->find($id);

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        return view('municipios.show')->with('municipios', $municipios);
    }

    /**
     * Show the form for editing the specified municipios.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $municipios = $this->municipiosRepository->find($id);

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        return view('municipios.edit')->with('municipios', $municipios);
    }

    /**
     * Update the specified municipios in storage.
     *
     * @param int $id
     * @param UpdatemunicipiosRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemunicipiosRequest $request)
    {
        $municipios = $this->municipiosRepository->find($id);

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        $municipios = $this->municipiosRepository->update($request->all(), $id);

        Flash::success('Municipios updated successfully.');

        return redirect(route('municipios.index'));
    }

    /**
     * Remove the specified municipios from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $municipios = $this->municipiosRepository->find($id);

        if (empty($municipios)) {
            Flash::error('Municipios not found');

            return redirect(route('municipios.index'));
        }

        $this->municipiosRepository->delete($id);

        Flash::success('Municipios deleted successfully.');

        return redirect(route('municipios.index'));
    }
}
