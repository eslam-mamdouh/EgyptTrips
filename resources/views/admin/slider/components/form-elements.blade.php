<div class="form-group row align-items-center" :class="{'has-danger': errors.has('sliders'), 'has-success': this.fields.image && this.fields.image.valid }">
    <label for="sliders" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.slider.columns.image') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">

            @include('brackets/admin-ui::admin.includes.media-uploader', [
                'mediaCollection' => app(App\Models\Slider::class)->getMediaCollection('sliders'),
                'label' => 'Slider Image',
            ])
        <div v-if="errors.has('sliders')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('sliders') }}</div>
    </div>
</div>
<div class="form-check row" :class="{'has-danger': errors.has('enabled'), 'has-success': this.fields.enabled && this.fields.enabled.valid }">
    <div class="ml-md-auto" :class="isFormLocalized ? 'col-md-8' : 'col-md-10'">
        <input class="form-check-input" id="enabled" type="checkbox" checked v-model="form.enabled" v-validate="''" data-vv-name="enabled"  name="enabled_fake_element">
        <label class="form-check-label" for="enabled">
            {{ trans('admin.slider.columns.enabled') }}
        </label>
        <input type="hidden" name="enabled" :value="form.enabled">
        <div v-if="errors.has('enabled')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('enabled') }}</div>
    </div>
</div>


