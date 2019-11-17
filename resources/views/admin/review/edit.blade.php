@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.review.actions.edit', ['name' => $review->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <review-form
                :action="'{{ $review->resource_url }}'"
                :data="{{ $review->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.review.actions.edit', ['name' => $review->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.review.components.form-elements')
                    </div>
                    
                </form>

        </review-form>

        </div>
    
</div>

@endsection