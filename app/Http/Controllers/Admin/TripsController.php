<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Trip\DestroyTrip;
use App\Http\Requests\Admin\Trip\IndexTrip;
use App\Http\Requests\Admin\Trip\StoreTrip;
use App\Http\Requests\Admin\Trip\UpdateTrip;
use App\Models\Trip;
use App\Models\TripsDistination;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TripsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTrip $request
     * @return Response|array
     */
    public function index(IndexTrip $request)
    {
        // create and AdminListing instance for a specific model and
        
        $data = AdminListing::create(Trip::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'title', 'price', 'distination_id'],

            // set columns to searchIn
            ['id', 'title', 'description']
        );

        // dd($data[0]);
        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.trip.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.trip.create');
        $distinations = TripsDistination::all();
        // dd($distinations);
        return view('admin.trip.create' , ["distinations"=>$distinations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTrip $request
     * @return Response|array
     */
    public function store(StoreTrip $request)
    {
        // Sanitize input
        $sanitized = $request->validated();
        $sanitized['slug'] = $sanitized['title']."-".rand(1 , 100);

        // Store the Trip
        $trip = Trip::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/trips'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/trips');
    }

    /**
     * Display the specified resource.
     *
     * @param Trip $trip
     * @throws AuthorizationException
     * @return void
     */
    public function show(Trip $trip)
    {
        $this->authorize('admin.trip.show', $trip);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Trip $trip
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Trip $trip)
    {
        $this->authorize('admin.trip.edit', $trip);

        $distinations = TripsDistination::all();
        return view('admin.trip.edit', [
            'trip' => $trip,
            'distinations' =>$distinations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTrip $request
     * @param Trip $trip
     * @return Response|array
     */
    public function update(UpdateTrip $request, Trip $trip)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Trip
        $trip->update($sanitized);
        if ($request->ajax()) {
            return [
                'redirect' => url('admin/trips'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/trips');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTrip $request
     * @param Trip $trip
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyTrip $request, Trip $trip)
    {
        $trip->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyTrip $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyTrip $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Trip::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
