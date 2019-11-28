<div class="form-group row align-items-center" :class="{'has-danger': errors.has('title'), 'has-success': this.fields.title && this.fields.title.valid }">
    <label for="title" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.trip.columns.title') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.title" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('title'), 'form-control-success': this.fields.title && this.fields.title.valid}" id="title" name="title" placeholder="{{ trans('admin.trip.columns.title') }}">
        <div v-if="errors.has('title')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('title') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('trips'), 'has-success': this.fields.trips && this.fields.trips.valid }">
    <label for="image" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.slider.columns.image') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">

            @include('brackets/admin-ui::admin.includes.media-uploader', [
                'mediaCollection' => app(App\Models\Trip::class)->getMediaCollection('trips'),
            ])
        <div v-if="errors.has('trips')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('trips') }}</div>
    </div>
</div>


<div class="form-group row align-items-center" :class="{'has-danger': errors.has('description'), 'has-success': this.fields.description && this.fields.description.valid }">
    <label for="description" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.trip.columns.description') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.description" v-validate="'required'" id="description" name="description" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('description')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('description') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('price'), 'has-success': this.fields.price && this.fields.price.valid }">
    <label for="price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.trip.columns.price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.price" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('price'), 'form-control-success': this.fields.price && this.fields.price.valid}" id="price" name="price" placeholder="{{ trans('admin.trip.columns.price') }}">
        <div v-if="errors.has('price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('child_price'), 'has-success': this.fields.child_price && this.fields.child_price.valid }">
    <label for="child_price" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.trip.columns.child_price') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.child_price" v-validate="'required|decimal'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('child_price'), 'form-control-success': this.fields.child_price && this.fields.child_price.valid}" id="child_price" name="child_price" placeholder="{{ trans('admin.trip.columns.child_price') }}">
        <div v-if="errors.has('child_price')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('child_price') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('distination_id'), 'has-success': this.fields.distination_id && this.fields.distination_id.valid }">
    <label for="distination_id" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.trip.columns.distination_id') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <select type="text" v-model="form.distination_id" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('distination_id'), 'form-control-success': this.fields.distination_id && this.fields.distination_id.valid}" id="distination_id" name="distination_id" placeholder="{{ trans('admin.trip.columns.distination_id') }}">
            @foreach ($distinations as $dist )
                <option value="{{$dist->id}}">{{$dist->name}}</option>
            @endforeach
        </select>
        <div v-if="errors.has('distination_id')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('distination_id') }}</div>
    </div>
</div>


