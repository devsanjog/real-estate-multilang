<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Properties;
use App\Repositories\PropertyRepository;
use Carbon\Carbon;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\ValidationException;

/**
 *
 */
class PropertyController extends Controller
{
    protected $propertyRepository;

    public function __construct(PropertyRepository $repository)
    {
        $this->propertyRepository = $repository;
    }

    public function show()
    {
        $allProperties = $this->propertyRepository->all();
        return view('web.index', compact(['allProperties']));
    }

    /**
     * @param Properties $properties
     * @return Application|Factory|View
     */
    public function index()
    {
        $allProperties = $this->propertyRepository->all();
        return view('properties.index', compact(['allProperties']));
    }

    /**
     * @param Request $request
     * @return RedirectResponse
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|max:50',
            'price' => 'required|integer',
        ]);

        $this->propertyRepository->createProperty($request);
        return redirect()->route('property')->with('success', 'Property created successfully');
    }

    /**
     * Remove the specified property
     * @param int $id
     * @throws \Exception
     */
    public function destroy($id)
    {
        $post = $this->propertyRepository->find($id);
        if (empty($post)) {
//            Flash::error('Property not found');
            return redirect(route('property'))->with(
                'error',
                'Property not found'
            );
        }
        $this->propertyRepository->delete($id);
//        Flash::success('Property deleted successfully.');

        return redirect(route('property'))->with(
            'success',
            'Property deleted successfully'
        );;
    }
}
