<?php

namespace App\Repositories;

use App\Models\Palette;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
/**
 * Class PaletteRepository
 * @package App\Repositories
 * @version June 17, 2020, 3:53 pm UTC
*/

class PaletteRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'img',
        'palette_copies',
        'avalible_copies',
        'S_copies',
        'S_avalible',
        'S_price',
        'M_copies',
        'M_avalible',
        'M_price',
        'L_copies',
        'L_avalible',
        'L_price',
        'sizing_details',
        'print_material',
        'print_ink',
        'print_finish',
        'frame_material',
        'frame_finish'
    ];

    /**
     * Return searchable fields
     *
     * @return array
     */
    public function getFieldsSearchable()
    {
        return $this->fieldSearchable;
    }

    /**
     * Configure the Model
     **/
    public function model()
    {
        return Palette::class;
    }
    public function createPalette(Request $request){
        $file = $request->file('img');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'images/'.uniqid().'.'.$extension;
        $img = Image::make($file);
        $img->save(public_path($path));
        $input = $request->all();
        $input['img'] = $path;

        return $this->create($input);
    }
}
