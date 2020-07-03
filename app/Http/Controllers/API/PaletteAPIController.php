<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePaletteAPIRequest;
use App\Http\Requests\API\UpdatePaletteAPIRequest;
use App\Models\Palette;
use App\Repositories\PaletteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\Artist;
use Response;

/**
 * Class PaletteController
 * @package App\Http\Controllers\API
 */

class PaletteAPIController extends AppBaseController
{
    /** @var  PaletteRepository */
    private $paletteRepository;

    public function __construct(PaletteRepository $paletteRepo)
    {
        $this->paletteRepository = $paletteRepo;
    }

    /**
     * Display a listing of the Palette.
     * GET|HEAD /palettes
     *
     * @param Request $request
     * @return Response
     */
    public function index(Request $request)
    {
        $palettes = Palette::all();
        $artists = Artist::all();
        return response()->json(['palettes' => $palettes,'artists' => $artists]);
    }

    /**
     * Store a newly created Palette in storage.
     * POST /palettes
     *
     * @param CreatePaletteAPIRequest $request
     *
     * @return Response
     */
    public function store(CreatePaletteAPIRequest $request)
    {
        $input = $request->all();

        $palette = $this->paletteRepository->create($input);

        return $this->sendResponse($palette->toArray(), 'Palette saved successfully');
    }

    /**
     * Display the specified Palette.
     * GET|HEAD /palettes/{id}
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        /** @var Palette $palette */
        $palette = $this->paletteRepository->find($id);

        if (empty($palette)) {
            return $this->sendError('Palette not found');
        }

        return $this->sendResponse($palette->toArray(), 'Palette retrieved successfully');
    }

    /**
     * Update the specified Palette in storage.
     * PUT/PATCH /palettes/{id}
     *
     * @param int $id
     * @param UpdatePaletteAPIRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaletteAPIRequest $request)
    {
        $input = $request->all();

        /** @var Palette $palette */
        $palette = $this->paletteRepository->find($id);

        if (empty($palette)) {
            return $this->sendError('Palette not found');
        }

        $palette = $this->paletteRepository->update($input, $id);

        return $this->sendResponse($palette->toArray(), 'Palette updated successfully');
    }

    /**
     * Remove the specified Palette from storage.
     * DELETE /palettes/{id}
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        /** @var Palette $palette */
        $palette = $this->paletteRepository->find($id);

        if (empty($palette)) {
            return $this->sendError('Palette not found');
        }

        $palette->delete();

        return $this->sendSuccess('Palette deleted successfully');
    }
}
