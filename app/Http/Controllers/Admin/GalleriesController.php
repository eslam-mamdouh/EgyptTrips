<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Gallery\DestroyGallery;
use App\Http\Requests\Admin\Gallery\IndexGallery;
use App\Http\Requests\Admin\Gallery\StoreGallery;
use App\Http\Requests\Admin\Gallery\UpdateGallery;
use App\Models\Gallery;
use App\Models\TripsDistination;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class GalleriesController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexGallery $request
     * @return Response|array
     */
    public function index(IndexGallery $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Gallery::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'slug'],

            // set columns to searchIn
            ['id', 'slug']
        );

        // dd($data);

        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.gallery.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.gallery.create');
        $distinations = TripsDistination::all();

        return view('admin.gallery.create',["distinations"=>$distinations]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreGallery $request
     * @return Response|array
     */
    public function store(StoreGallery $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        $distSlug = TripsDistination::find($sanitized['distination_id'])->slug;
        $sanitized['slug'] = $distSlug;
        // Store the Gallery

        $gallery = Gallery::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/galleries'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/galleries');
    }

    /**
     * Display the specified resource.
     *
     * @param Gallery $gallery
     * @throws AuthorizationException
     * @return void
     */
    public function show(Gallery $gallery)
    {
        $this->authorize('admin.gallery.show', $gallery);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Gallery $gallery
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Gallery $gallery)
    {
        $this->authorize('admin.gallery.edit', $gallery);

        $distinations = TripsDistination::all();

        return view('admin.gallery.edit', [
            'gallery' => $gallery,
            'distinations'=>$distinations
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateGallery $request
     * @param Gallery $gallery
     * @return Response|array
     */
    public function update(UpdateGallery $request, Gallery $gallery)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();
        $distSlug = TripsDistination::find($sanitized['distination_id'])->slug;
        $sanitized['slug'] = $distSlug;
        // Update changed values Gallery
        $gallery->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/galleries'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/galleries');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyGallery $request
     * @param Gallery $gallery
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyGallery $request, Gallery $gallery)
    {
        $gallery->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyGallery $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyGallery $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Gallery::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
