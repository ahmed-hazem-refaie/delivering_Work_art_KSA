<?php

namespace App\Http\Controllers\API;

use App\Http\Requests\API\CreatePaletteAPIRequest;
use App\Http\Requests\API\UpdatePaletteAPIRequest;
use App\Models\Palette;
use App\Repositories\PaletteRepository;
use Illuminate\Http\Request;
use App\Http\Controllers\AppBaseController;
use App\Models\Artist;
use App\Models\Review;
use App\Models\Paletteimage;
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
    public function index()
    {
        $artists = Artist::all();
        $palettesSlider = Palette::all();
        return response()->json(['artists' => $artists,'palettesSlider' =>$palettesSlider]);
       
    }
    public function getReviews(){
        return Review::latest()->paginate(3);
        // return response()->json(['review' => $review]);
    }
    public function Palettes(Request $request){
        

        $palettesArtists = Palette::where('artist_id',$request->id)->limit(3)->get();
        $artists = Artist::all();
        $palettes = Palette::where('artist_id',$request->id)->limit(6)->get();     
        return response()->json([ 'palettesArtists' =>$palettesArtists,'palettes' =>$palettes,'artists' => $artists]);
    }
    public function viewMinPalettes(Request $request){
        
        $palettes = Palette::where('id',$request->id)->get(); 
        $minPalettes = Paletteimage::where('palatte_id',$request->id)->limit(6)->get(); 
        return response()->json(['minPalettes' => $minPalettes,'palettes' =>$palettes]);
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
    public function show(Request $request)
    {
        $palettes = Palette::where('artist_id',$request->id)->get();     
        return response()->json(['palettes' =>$palettes]);     
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
