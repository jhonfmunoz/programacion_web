<?php

namespace App\Http\Controllers;

use App\Http\Requests\Createtipo_documentosRequest;
use App\Http\Requests\Updatetipo_documentosRequest;
use App\Repositories\tipo_documentosRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class tipo_documentosController extends AppBaseController
{
    /** @var  tipo_documentosRepository */
    private $tipoDocumentosRepository;

    public function __construct(tipo_documentosRepository $tipoDocumentosRepo)
    {
        $this->tipoDocumentosRepository = $tipoDocumentosRepo;
    }

    /**
     * Display a listing of the tipo_documentos.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoDocumentos = $this->tipoDocumentosRepository->paginate(10);

        return view('tipo_documentos.index')
            ->with('tipoDocumentos', $tipoDocumentos);
    }

    /**
     * Show the form for creating a new tipo_documentos.
     *
     * @return Response
     */
    public function create()
    {
        return view('tipo_documentos.create');
    }

    /**
     * Store a newly created tipo_documentos in storage.
     *
     * @param Createtipo_documentosRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_documentosRequest $request)
    {
        $input = $request->all();

        $tipoDocumentos = $this->tipoDocumentosRepository->create($input);

        Flash::success('Tipo Documentos saved successfully.');

        return redirect(route('tipoDocumentos.index'));
    }

    /**
     * Display the specified tipo_documentos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $tipoDocumentos = $this->tipoDocumentosRepository->find($id);

        if (empty($tipoDocumentos)) {
            Flash::error('Tipo Documentos not found');

            return redirect(route('tipoDocumentos.index'));
        }

        return view('tipo_documentos.show')->with('tipoDocumentos', $tipoDocumentos);
    }

    /**
     * Show the form for editing the specified tipo_documentos.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $tipoDocumentos = $this->tipoDocumentosRepository->find($id);

        if (empty($tipoDocumentos)) {
            Flash::error('Tipo Documentos not found');

            return redirect(route('tipoDocumentos.index'));
        }

        return view('tipo_documentos.edit')->with('tipoDocumentos', $tipoDocumentos);
    }

    /**
     * Update the specified tipo_documentos in storage.
     *
     * @param int $id
     * @param Updatetipo_documentosRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_documentosRequest $request)
    {
        $tipoDocumentos = $this->tipoDocumentosRepository->find($id);

        if (empty($tipoDocumentos)) {
            Flash::error('Tipo Documentos not found');

            return redirect(route('tipoDocumentos.index'));
        }

        $tipoDocumentos = $this->tipoDocumentosRepository->update($request->all(), $id);

        Flash::success('Tipo Documentos updated successfully.');

        return redirect(route('tipoDocumentos.index'));
    }

    /**
     * Remove the specified tipo_documentos from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $tipoDocumentos = $this->tipoDocumentosRepository->find($id);

        if (empty($tipoDocumentos)) {
            Flash::error('Tipo Documentos not found');

            return redirect(route('tipoDocumentos.index'));
        }

        $this->tipoDocumentosRepository->delete($id);

        Flash::success('Tipo Documentos deleted successfully.');

        return redirect(route('tipoDocumentos.index'));
    }
}
