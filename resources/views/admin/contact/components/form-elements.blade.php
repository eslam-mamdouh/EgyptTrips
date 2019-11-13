<div class="form-group row align-items-center" :class="{'has-danger': errors.has('name'), 'has-success': this.fields.name && this.fields.name.valid }">
    <label for="name" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.name') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.name" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('name'), 'form-control-success': this.fields.name && this.fields.name.valid}" id="name" name="name" placeholder="{{ trans('admin.contact.columns.name') }}">
        <div v-if="errors.has('name')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('name') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('email'), 'has-success': this.fields.email && this.fields.email.valid }">
    <label for="email" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.email') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.email" v-validate="'required|email'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('email'), 'form-control-success': this.fields.email && this.fields.email.valid}" id="email" name="email" placeholder="{{ trans('admin.contact.columns.email') }}">
        <div v-if="errors.has('email')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('email') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('subject'), 'has-success': this.fields.subject && this.fields.subject.valid }">
    <label for="subject" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.subject') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <input type="text" disabled v-model="form.subject" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('subject'), 'form-control-success': this.fields.subject && this.fields.subject.valid}" id="subject" name="subject" placeholder="{{ trans('admin.contact.columns.subject') }}">
        <div v-if="errors.has('subject')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('subject') }}</div>
    </div>
</div>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('comment'), 'has-success': this.fields.comment && this.fields.comment.valid }">
    <label for="comment" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.comment') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <textarea disabled v-model="form.comment" v-validate="'required'" @input="validate($event)" class="form-control" :class="{'form-control-danger': errors.has('comment'), 'form-control-success': this.fields.comment && this.fields.comment.valid}" id="comment" name="comment"></textarea>
        <div v-if="errors.has('comment')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('comment') }}</div>
    </div>
</div>

<p class="alert alert-warning" style="text-align:center">Send a Reply</p>

<div class="form-group row align-items-center" :class="{'has-danger': errors.has('reply'), 'has-success': this.fields.reply && this.fields.reply.valid }">
    <label for="reply" class="col-form-label text-md-right" :class="isFormLocalized ? 'col-md-4' : 'col-md-2'">{{ trans('admin.contact.columns.reply') }}</label>
        <div :class="isFormLocalized ? 'col-md-4' : 'col-md-9 col-xl-8'">
        <div>
            <wysiwyg v-model="form.reply" v-validate="''" id="reply" name="reply" :config="mediaWysiwygConfig"></wysiwyg>
        </div>
        <div v-if="errors.has('reply')" class="form-control-feedback form-text" v-cloak>@{{ errors.first('reply') }}</div>
    </div>
</div>


