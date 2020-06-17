<?php

namespace App\Repositories;

use App\Models\Artist;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
/**
 * Class ArtistRepository
 * @package App\Repositories
 * @version June 17, 2020, 4:00 am UTC
*/

class ArtistRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'Plates_description',
        'email',
        'artist_img',
        'cover_img'
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
        return Artist::class;
    }
    
    public function createArtist(Request $request){
        $file = $request->file('artist_img');
        $originalName = $file->getClientOriginalName();
        $extension = $file->getClientOriginalExtension();

        $path = 'images/'.uniqid().'.'.$extension;
        $img = Image::make($file);
        $img->save(public_path($path));
        $input = $request->all();
        $input['artist_img'] = $path;
        $input['cover_img'] = $path;

        return $this->create($input);
    }
}
