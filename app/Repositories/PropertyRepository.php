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

    public function createProperty(Request $request)
    {
        $propertyFields = [
            'name' => $request->name,
            'price' => $request->price,
            'location' => $request->location,
            'city' => $request->city,
            'state' => $request->state,
            'country' => $request->country,
            'description' => $request->description,
            'latitude' => $request->latitude,
            'longitude' => $request->longitude,
        ];
        $property = $this->create($propertyFields);

        foreach ($request->file('images') as $image) {
            $property->addMedia($image)->toMediaCollection();
        }

//        $property->addMedia($file)->toMediaCollection();
    }
}
