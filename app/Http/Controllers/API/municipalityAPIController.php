<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatemunicipalityAPIRequest;
use App\Http\Requests\API\UpdatemunicipalityAPIRequest;
use App\Models\municipality;
use App\Repositories\municipalityRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use Response;

/**
 * Class municipalityController
 * @package App\Http\Controllers\API
 */

class municipalityAPIController extends AppBaseController
{
    /** @var  municipalityRepository */
    private $municipalityRepository;

    public function __construct(municipalityRepository $municipalityRepo)
    {
        $this->municipalityRepository = $municipalityRepo;
    }

    /**
     * Display a listing of the municipality.
     * GET|HEAD /municipalities
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $municipalities = $this->municipalityRepository->all(
            $request->except(['skip', 'limit']),
            $request->get('skip'),
            $request->get('limit')
        );

        return $this->sendResponse($municipalities->toArray(), 'Municipalities retrieved successfully');
    }

    /**
     * Store a newly created municipality in storage.
     * POST /municipalities
     *
     * @param CreatemunicipalityAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatemunicipalityAPIRequest $request)
    {
        $input = $request->all();

        $municipality = $this->municipalityRepository->create($input);

        return $this->sendResponse($municipality->toArray(), 'Municipality saved successfully');
    }

    /**
     * Display the specified municipality.
     * GET|HEAD /municipalities/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var municipality $municipality */
        $municipality = $this->municipalityRepository->find($id);

        if (empty($municipality)) {
            return $this->sendError('Municipality not found');
        }

        return $this->sendResponse($municipality->toArray(), 'Municipality retrieved successfully');
    }

    /**
     * Update the specified municipality in storage.
     * PUT/PATCH /municipalities/{id}
     *
     * @param int $id
     * @param UpdatemunicipalityAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatemunicipalityAPIRequest $request)
    {
        $input = $request->all();

        /** @var municipality $municipality */
        $municipality = $this->municipalityRepository->find($id);

        if (empty($municipality)) {
            return $this->sendError('Municipality not found');
        }

        $municipality = $this->municipalityRepository->update($input, $id);

        return $this->sendResponse($municipality->toArray(), 'municipality updated successfully');
    }

    /**
     * Remove the specified municipality from storage.
     * DELETE /municipalities/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var municipality $municipality */
        $municipality = $this->municipalityRepository->find($id);

        if (empty($municipality)) {
            return $this->sendError('Municipality not found');
        }

        $municipality->delete();

        return $this->sendSuccess('Municipality deleted successfully');
    }
}
