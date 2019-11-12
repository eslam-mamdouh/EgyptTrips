@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.trips-distination.actions.edit', ['name' => $tripsDistination->name]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <trips-distination-form
                :action="'{{ $tripsDistination->resource_url }}'"
                :data="{{ $tripsDistination->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.trips-distination.actions.edit', ['name' => $tripsDistination->name]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.trips-distination.components.form-elements')
                    </div>
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </trips-distination-form>

        </div>
    
</div>

@endsection