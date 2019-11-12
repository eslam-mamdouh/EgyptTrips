<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\TripsDistination\DestroyTripsDistination;
use App\Http\Requests\Admin\TripsDistination\IndexTripsDistination;
use App\Http\Requests\Admin\TripsDistination\StoreTripsDistination;
use App\Http\Requests\Admin\TripsDistination\UpdateTripsDistination;
use App\Models\TripsDistination;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class TripsDistinationsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexTripsDistination $request
     * @return Response|array
     */
    public function index(IndexTripsDistination $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(TripsDistination::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'name'],

            // set columns to searchIn
            ['id', 'name']
        );

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.trips-distination.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.trips-distination.create');

        return view('admin.trips-distination.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreTripsDistination $request
     * @return Response|array
     */
    public function store(StoreTripsDistination $request)
    {
        // Sanitize input
        $sanitized = $request->validated();
        $sanitized['slug'] = $sanitized['name']."-".rand(1 , 100);
        // Store the TripsDistination
        $tripsDistination = TripsDistination::create($sanitized);
        if ($request->ajax()) {
            return ['redirect' => url('admin/trips-distinations'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/trips-distinations');
    }

    /**
     * Display the specified resource.
     *
     * @param TripsDistination $tripsDistination
     * @throws AuthorizationException
     * @return void
     */
    public function show(TripsDistination $tripsDistination)
    {
        $this->authorize('admin.trips-distination.show', $tripsDistination);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param TripsDistination $tripsDistination
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(TripsDistination $tripsDistination)
    {
        $this->authorize('admin.trips-distination.edit', $tripsDistination);


        return view('admin.trips-distination.edit', [
            'tripsDistination' => $tripsDistination,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateTripsDistination $request
     * @param TripsDistination $tripsDistination
     * @return Response|array
     */
    public function update(UpdateTripsDistination $request, TripsDistination $tripsDistination)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $tripsDistination->update($sanitized);
        if ($request->ajax()) {
            return [
                'redirect' => url('admin/trips-distinations'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/trips-distinations');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyTripsDistination $request
     * @param TripsDistination $tripsDistination
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyTripsDistination $request, TripsDistination $tripsDistination)
    {
        $tripsDistination->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyTripsDistination $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyTripsDistination $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    TripsDistination::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
