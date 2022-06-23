<?php

namespace App\Repositories;

use App\Models\Properties;
use App\Repositories\BaseRepository;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

/**
 * Class PostRepository
 * @package App\Repositories
 */

class PropertyRepository extends BaseRepository
{
    /**
     * @var array
     */
    protected $fieldSearchable = [
        'name',
        'image_url'
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
        return Properties::class;
    }

    public function createProperty(Request $request){
        $file = $request->file('images');
        $input = $request->all();
        $property = $this->create($input);

        $property->addMedia($file)->toMediaCollection();
    }
}
