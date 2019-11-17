<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\Review\DestroyReview;
use App\Http\Requests\Admin\Review\IndexReview;
use App\Http\Requests\Admin\Review\StoreReview;
use App\Http\Requests\Admin\Review\UpdateReview;
use App\Models\Review;
use Brackets\AdminListing\Facades\AdminListing;
use Exception;
use Illuminate\Auth\Access\AuthorizationException;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\DB;

class ReviewsController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @param IndexReview $request
     * @return Response|array
     */
    public function index(IndexReview $request)
    {
        // create and AdminListing instance for a specific model and
        $data = AdminListing::create(Review::class)->processRequestAndGet(
            // pass the request with params
            $request,

            // set columns to query
            ['id', 'trip', 'rate', 'name', 'country','created_at'],

            // set columns to searchIn
            ['id', 'trip', 'comment', 'name', 'country', 'message']
        );

        
        if ($request->ajax()) {
            if ($request->has('bulk')) {
                return [
                    'bulkItems' => $data->pluck('id')
                ];
            }
            return ['data' => $data];
        }

        return view('admin.review.index', ['data' => $data]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @throws AuthorizationException
     * @return Response
     */
    public function create()
    {
        $this->authorize('admin.review.create');

        return view('admin.review.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param StoreReview $request
     * @return Response|array
     */
    public function store(StoreReview $request)
    {
        // Sanitize input
        $sanitized = $request->validated();

        // Store the Review
        $review = Review::create($sanitized);

        if ($request->ajax()) {
            return ['redirect' => url('admin/reviews'), 'message' => trans('brackets/admin-ui::admin.operation.succeeded')];
        }

        return redirect('admin/reviews');
    }

    /**
     * Display the specified resource.
     *
     * @param Review $review
     * @throws AuthorizationException
     * @return void
     */
    public function show(Review $review)
    {
        $this->authorize('admin.review.show', $review);

        // TODO your code goes here
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param Review $review
     * @throws AuthorizationException
     * @return Response
     */
    public function edit(Review $review)
    {
        $this->authorize('admin.review.edit', $review);


        return view('admin.review.edit', [
            'review' => $review,
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param UpdateReview $request
     * @param Review $review
     * @return Response|array
     */
    public function update(UpdateReview $request, Review $review)
    {
        // Sanitize input
        $sanitized = $request->getSanitized();

        // Update changed values Review
        $review->update($sanitized);

        if ($request->ajax()) {
            return [
                'redirect' => url('admin/reviews'),
                'message' => trans('brackets/admin-ui::admin.operation.succeeded'),
            ];
        }

        return redirect('admin/reviews');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param DestroyReview $request
     * @param Review $review
     * @throws Exception
     * @return Response|bool
     */
    public function destroy(DestroyReview $request, Review $review)
    {
        $review->delete();

        if ($request->ajax()) {
            return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
        }

        return redirect()->back();
    }

    /**
     * Remove the specified resources from storage.
     *
     * @param DestroyReview $request
     * @throws Exception
     * @return Response|bool
     */
    public function bulkDestroy(DestroyReview $request) : Response
    {
        DB::transaction(static function () use ($request) {
            collect($request->data['ids'])
                ->chunk(1000)
                ->each(static function ($bulkChunk) {
                    Review::whereIn('id', $bulkChunk)->delete();

                    // TODO your code goes here
                });
        });

        return response(['message' => trans('brackets/admin-ui::admin.operation.succeeded')]);
    }
}
