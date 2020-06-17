<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaletteRequest;
use App\Http\Requests\UpdatePaletteRequest;
use App\Repositories\PaletteRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;

class PaletteController extends AppBaseController
{
    /** @var  PaletteRepository */
    private $paletteRepository;

    public function __construct(PaletteRepository $paletteRepo)
    {
        $this->paletteRepository = $paletteRepo;
    }

    /**
     * Display a listing of the Palette.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $palettes = $this->paletteRepository->all();

        return view('palettes.index')
            ->with('palettes', $palettes);
    }

    /**
     * Show the form for creating a new Palette.
     *
     * @return Response
     */
    public function create()
    {
        return view('palettes.create');
    }

    /**
     * Store a newly created Palette in storage.
     *
     * @param CreatePaletteRequest $request
     *
     * @return Response
     */
    public function store(CreatePaletteRequest $request)
    {
        // $input = $request->all();

        $palette = $this->paletteRepository->createPalette($request);

        Flash::success('Palette saved successfully.');

        return redirect(route('palettes.index'));
    }

    /**
     * Display the specified Palette.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $palette = $this->paletteRepository->find($id);

        if (empty($palette)) {
            Flash::error('Palette not found');

            return redirect(route('palettes.index'));
        }

        return view('palettes.show')->with('palette', $palette);
    }

    /**
     * Show the form for editing the specified Palette.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $palette = $this->paletteRepository->find($id);

        if (empty($palette)) {
            Flash::error('Palette not found');

            return redirect(route('palettes.index'));
        }

        return view('palettes.edit')->with('palette', $palette);
    }

    /**
     * Update the specified Palette in storage.
     *
     * @param int $id
     * @param UpdatePaletteRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaletteRequest $request)
    {
        $palette = $this->paletteRepository->find($id);

        if (empty($palette)) {
            Flash::error('Palette not found');

            return redirect(route('palettes.index'));
        }

        $palette = $this->paletteRepository->update($request->all(), $id);

        Flash::success('Palette updated successfully.');

        return redirect(route('palettes.index'));
    }

    /**
     * Remove the specified Palette from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $palette = $this->paletteRepository->find($id);

        if (empty($palette)) {
            Flash::error('Palette not found');

            return redirect(route('palettes.index'));
        }

        $this->paletteRepository->delete($id);

        Flash::success('Palette deleted successfully.');

        return redirect(route('palettes.index'));
    }
}
