<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\Createtipo_documentosAPIRequest;
use App\Http\Requests\API\Updatetipo_documentosAPIRequest;
use App\Models\tipo_documentos;
use App\Repositories\tipo_documentosRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class tipo_documentosController
 * @package App\Http\Controllers\API
 */

class tipo_documentosAPIController extends AppBaseController
{
    /** @var  tipo_documentosRepository */
    private $tipoDocumentosRepository;

    public function __construct(tipo_documentosRepository $tipoDocumentosRepo)
    {
        $this->tipoDocumentosRepository = $tipoDocumentosRepo;
    }

    /**
     * Display a listing of the tipo_documentos.
     * GET|HEAD /tipoDocumentos
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $tipoDocumentos = $this->tipoDocumentosRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($tipoDocumentos->toArray(), 'Tipo Documentos retrieved successfully');
    }

    /**
     * Store a newly created tipo_documentos in storage.
     * POST /tipoDocumentos
     *
     * @param Createtipo_documentosAPIRequest $request
     *
     * @return Response
     */
    public function store(Createtipo_documentosAPIRequest $request)
    {
        $input = $request->all();

        $tipoDocumentos = $this->tipoDocumentosRepository->create($input);

        return $this->sendResponse($tipoDocumentos->toArray(), 'Tipo Documentos saved successfully');
    }

    /**
     * Display the specified tipo_documentos.
     * GET|HEAD /tipoDocumentos/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var tipo_documentos $tipoDocumentos */
        $tipoDocumentos = $this->tipoDocumentosRepository->find($id);

        if (empty($tipoDocumentos)) {
            return $this->sendError('Tipo Documentos not found');
        }

        return $this->sendResponse($tipoDocumentos->toArray(), 'Tipo Documentos retrieved successfully');
    }

    /**
     * Update the specified tipo_documentos in storage.
     * PUT/PATCH /tipoDocumentos/{id}
     *
     * @param int $id
     * @param Updatetipo_documentosAPIRequest $request
     *
     * @return Response
     */
    public function update($id, Updatetipo_documentosAPIRequest $request)
    {
        $input = $request->all();

        /** @var tipo_documentos $tipoDocumentos */
        $tipoDocumentos = $this->tipoDocumentosRepository->find($id);

        if (empty($tipoDocumentos)) {
            return $this->sendError('Tipo Documentos not found');
        }

        $tipoDocumentos = $this->tipoDocumentosRepository->update($input, $id);

        return $this->sendResponse($tipoDocumentos->toArray(), 'tipo_documentos updated successfully');
    }

    /**
     * Remove the specified tipo_documentos from storage.
     * DELETE /tipoDocumentos/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var tipo_documentos $tipoDocumentos */
        $tipoDocumentos = $this->tipoDocumentosRepository->find($id);

        if (empty($tipoDocumentos)) {
            return $this->sendError('Tipo Documentos not found');
        }

        $tipoDocumentos->delete();

        return $this->sendSuccess('Tipo Documentos deleted successfully');
    }
}
