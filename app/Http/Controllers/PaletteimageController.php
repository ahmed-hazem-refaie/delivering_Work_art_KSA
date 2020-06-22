<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreatePaletteimageRequest;
use App\Http\Requests\UpdatePaletteimageRequest;
use App\Repositories\PaletteimageRepository;
use App\Http\Controllers\AppBaseController;
use Illuminate\Http\Request;
use Flash;
use Response;
use App\Models\Paletteimage;

class PaletteimageController extends AppBaseController
{
    /** @var  PaletteimageRepository */
    private $paletteimageRepository;

    public function __construct(PaletteimageRepository $paletteimageRepo)
    {
        $this->paletteimageRepository = $paletteimageRepo;
    }

    /**
     * Display a listing of the Paletteimage.
     *
     * @param Request $request
     *
     * @return Response
     */
    public function index(Request $request)
    {
        $paletteimages = $this->paletteimageRepository->all();

        return view('paletteimages.index')
            ->with('paletteimages', $paletteimages);
    }

    /**
     * Show the form for creating a new Paletteimage.
     *
     * @return Response
     */
    public function create()
    {
        return view('paletteimages.create');
    }

    /**
     * Store a newly created Paletteimage in storage.
     *
     * @param CreatePaletteimageRequest $request
     *
     * @return Response
     */
    public function store(CreatePaletteimageRequest $request)
    {
        $input = $request->all();
        request()->validate([
            'img.*' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        if ($files = $request->file('img')) {
            // Define upload path
            // $destinationPath = public_path('/images/'); // upload path
            foreach ($files as $img) {
                // Upload Orginal Image           
                // $profileImage = $img->getClientOriginalName();
                // $img->move($destinationPath, $profileImage);
                // Save In Database
                // $imagemodel = new Paletteimage();
                // $imagemodel->img = "$profileImage";
                // dd($request->all());
                // $imagemodel->palatte_id=$request->palatte_id;
                // $imagemodel->save();
                // $input["img"]="$profileImage";

                // dd($input);
                $paletteimage = $this->paletteimageRepository->createPalatteImages($request,$img);
            }
        }
        // return back()->with('success', 'Image Upload successfully');
        // orginal
        // $paletteimage = $this->paletteimageRepository->create($input);
        // Flash::success('Paletteimage saved successfully.');
        // return back()->with('success', 'Image Upload successfully');
        return redirect(route('paletteimages.index'));
    }

    /**
     * Display the specified Paletteimage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function show($id)
    {
        $paletteimage = $this->paletteimageRepository->find($id);

        if (empty($paletteimage)) {
            Flash::error('Paletteimage not found');

            return redirect(route('paletteimages.index'));
        }

        return view('paletteimages.show')->with('paletteimage', $paletteimage);
    }

    /**
     * Show the form for editing the specified Paletteimage.
     *
     * @param int $id
     *
     * @return Response
     */
    public function edit($id)
    {
        $paletteimage = $this->paletteimageRepository->find($id);

        if (empty($paletteimage)) {
            Flash::error('Paletteimage not found');

            return redirect(route('paletteimages.index'));
        }

        return view('paletteimages.edit')->with('paletteimage', $paletteimage);
    }

    /**
     * Update the specified Paletteimage in storage.
     *
     * @param int $id
     * @param UpdatePaletteimageRequest $request
     *
     * @return Response
     */
    public function update($id, UpdatePaletteimageRequest $request)
    {
        $paletteimage = $this->paletteimageRepository->find($id);

        if (empty($paletteimage)) {
            Flash::error('Paletteimage not found');

            return redirect(route('paletteimages.index'));
        }

        $paletteimage = $this->paletteimageRepository->update($request->all(), $id);

        Flash::success('Paletteimage updated successfully.');

        return redirect(route('paletteimages.index'));
    }

    /**
     * Remove the specified Paletteimage from storage.
     *
     * @param int $id
     *
     * @throws \Exception
     *
     * @return Response
     */
    public function destroy($id)
    {
        $paletteimage = $this->paletteimageRepository->find($id);

        if (empty($paletteimage)) {
            Flash::error('Paletteimage not found');

            return redirect(route('paletteimages.index'));
        }

        $this->paletteimageRepository->delete($id);

        Flash::success('Paletteimage deleted successfully.');

        return redirect(route('paletteimages.index'));
    }
}
