<div class="form-group row align-items-center" :class="{'has-danger': errors.has('trip'), 'has-success': this.fields.trip && this.fields.trip.valid }">
    <label for="trip" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.review.columns.trip') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.trip" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('trip'), 'form-control-success': this.fields.trip && this.fields.trip.valid}" id="trip" name="trip" placeholder="{{ trans('admin.review.columns.trip') }}">
        <div v-if="errors.has('trip')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('trip') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('rate'), 'has-success': this.fields.rate && this.fields.rate.valid }">
    <label for="rate" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.review.columns.rate') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.rate" v-validate="'required|integer'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('rate'), 'form-control-success': this.fields.rate && this.fields.rate.valid}" id="rate" name="rate" placeholder="{{ trans('admin.review.columns.rate') }}">
        <div v-if="errors.has('rate')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('rate') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('comment'), 'has-success': this.fields.comment && this.fields.comment.valid }">
    <label for="comment" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.review.columns.comment') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <textarea disabled row="6" v-model="form.comment" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('comment'), 'form-control-success': this.fields.comment && this.fields.comment.valid}" id="comment" name="comment" placeholder="{{ trans('admin.review.columns.comment') }}"></textarea>
        <div v-if="errors.has('comment')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('comment') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.review.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.review.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('country'), 'has-success': this.fields.country && this.fields.country.valid }">
    <label for="country" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.review.columns.country') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.country" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('country'), 'form-control-success': this.fields.country && this.fields.country.valid}" id="country" name="country" placeholder="{{ trans('admin.review.columns.country') }}">
        <div v-if="errors.has('country')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('country') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('message'), 'has-success': this.fields.message && this.fields.message.valid }">
    <label for="message" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.review.columns.message') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <textarea disabled row="5" v-model="form.message" v-validate="''" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('message'), 'form-control-success': this.fields.message && this.fields.message.valid}" id="message" name="message" placeholder="{{ trans('admin.review.columns.message') }}"></textarea>
        <div v-if="errors.has('message')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('message') }}</div>
    </div>
</div>


