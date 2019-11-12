

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('galleries'), 'has-success': this.fields.image && this.fields.image.valid }">
    <label for="galleries" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.slider.columns.image') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">

            @include('brackets/admin-ui::admin.includes.media-uploader', [
                'mediaCollection' => app(App\Models\Gallery::class)->getMediaCollection('galleries'),
            ])
        <div v-if="errors.has('galleries')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('galleries') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('distination_id'), 'has-success': this.fields.distination_id && this.fields.distination_id.valid }">
    <label for="distination_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.gallery.columns.distination_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
            <select type="text" v-model="form.distination_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('distination_id'), 'form-control-success': this.fields.distination_id && this.fields.distination_id.valid}" id="distination_id" name="distination_id" placeholder="{{ trans('admin.trip.columns.distination_id') }}">
                @foreach ($distinations as $dist )
                    <option value="{{$dist->id}}">{{$dist->name}}</option>
                @endforeach
            </select>
        <div v-if="errors.has('distination_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('distination_id') }}</div>
    </div>
</div>


