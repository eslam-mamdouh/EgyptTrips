@extends('brackets/admin-ui::admin.layout.default')

@section('title', trans('admin.slider.actions.edit', ['name' => $slider->id]))

@section('body')

    <div class="container-xl">
        <div class="card">

            <slider-form
                :action="'{{ $slider->resource_url }}'"
                :data="{{ $slider->toJson() }}"
                v-cloak
                inline-template>
            
                <form class="form-horizontal form-edit" method="post" @submit.prevent="onSubmit" :action="this.action" novalidate>


                    <div class="card-header">
                        <i class="fa fa-pencil"></i> {{ trans('admin.slider.actions.edit', ['name' => $slider->id]) }}
                    </div>

                    <div class="card-body">
                        @include('admin.slider.components.form-elements')
                    </div>
                    
                    
                    <div class="card-footer">
                        <button type="submit" class="btn btn-primary" :disabled="submiting">
                            <i class="fa" :class="submiting ? 'fa-spinner' : 'fa-download'"></i>
                            {{ trans('brackets/admin-ui::admin.btn.save') }}
                        </button>
                    </div>
                    
                </form>

        </slider-form>

        </div>
    
</div>

@endsection