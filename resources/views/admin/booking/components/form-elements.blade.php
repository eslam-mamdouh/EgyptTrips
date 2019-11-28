<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.booking.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': this.fields.email && this.fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': this.fields.email && this.fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.booking.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('country'), 'has-success': this.fields.country && this.fields.country.valid }">
    <label for="country" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.country') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.country" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('country'), 'form-control-success': this.fields.country && this.fields.country.valid}" id="country" name="country" placeholder="{{ trans('admin.booking.columns.country') }}">
        <div v-if="errors.has('country')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('country') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('phone'), 'has-success': this.fields.phone && this.fields.phone.valid }">
    <label for="phone" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.phone') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.phone" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('phone'), 'form-control-success': this.fields.phone && this.fields.phone.valid}" id="phone" name="phone" placeholder="{{ trans('admin.booking.columns.phone') }}">
        <div v-if="errors.has('phone')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('phone') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('date'), 'has-success': this.fields.date && this.fields.date.valid }">
    <label for="date" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.date') }}</label>
    <div :class="isFormLocalized ? 'col-md-4' : 'col-sm-8'">
        <div class="input-group input-group--custom">
            <div class="input-group-addon"><i class="fa fa-calendar"></i></div>
            <datetime v-model="form.date" :config="datePickerConfig" v-validate="'required|date_format:yyyy-MM-dd HH:mm:ss'" class="flatpickr" :class="{'form-control-danger': errors.has('date'), 'form-control-success': this.fields.date && this.fields.date.valid}" id="date" name="date" placeholder="{{ trans('brackets/admin-ui::admin.forms.select_a_date') }}"></datetime>
        </div>
        <div v-if="errors.has('date')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('date') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('trip'), 'has-success': this.fields.trip && this.fields.trip.valid }">
    <label for="trip" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.trip') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.trip" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('trip'), 'form-control-success': this.fields.trip && this.fields.trip.valid}" id="trip" name="trip" placeholder="{{ trans('admin.booking.columns.trip') }}">
        <div v-if="errors.has('trip')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('trip') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('adults'), 'has-success': this.fields.adults && this.fields.adults.valid }">
    <label for="adults" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.adults') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.adults" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('adults'), 'form-control-success': this.fields.adults && this.fields.adults.valid}" id="adults" name="adults" placeholder="{{ trans('admin.booking.columns.adults') }}">
        <div v-if="errors.has('adults')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('adults') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('children'), 'has-success': this.fields.children && this.fields.children.valid }">
    <label for="children" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.children') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.children" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('children'), 'form-control-success': this.fields.children && this.fields.children.valid}" id="children" name="children" placeholder="{{ trans('admin.booking.columns.children') }}">
        <div v-if="errors.has('children')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('children') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('location'), 'has-success': this.fields.location && this.fields.location.valid }">
    <label for="location" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.booking.columns.location') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" v-model="form.location" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('location'), 'form-control-success': this.fields.location && this.fields.location.valid}" id="location" name="location" placeholder="{{ trans('admin.booking.columns.location') }}">
        <div v-if="errors.has('location')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('location') }}</div>
    </div>
</div>


