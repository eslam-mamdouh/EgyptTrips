<div class="sidebar">
    <nav class="sidebar-nav">
        <ul class="nav">
            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.content') }}</li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/sliders') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.slider.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/trips-distinations') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.trips-distination.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/trips') }}"><i class="nav-icon icon-graduation"></i> {{ trans('admin.trip.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/offers') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.offer.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/galleries') }}"><i class="nav-icon icon-globe"></i> {{ trans('admin.gallery.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/contacts') }}"><i class="nav-icon icon-drop"></i> {{ trans('admin.contact.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/admin-users') }}"><i class="nav-icon icon-compass"></i> {{ trans('admin.admin-user.title') }}</a></li>
           <li class="nav-item"><a class="nav-link" href="{{ url('admin/reviews') }}"><i class="nav-icon icon-plane"></i> {{ trans('admin.review.title') }}</a></li>
           {{-- Do not delete me :) I'm used for auto-generation menu items --}}

            <li class="nav-title">{{ trans('brackets/admin-ui::admin.sidebar.settings') }}</li>
            {{-- Do not delete me :) I'm also used for auto-generation menu items --}}
            <li class="nav-item"><a class="nav-link" href="{{ url('admin/translations') }}"><i class="nav-icon icon-settings"></i> {{ __('Translations') }}</a></li>
        </ul>
    </nav>
    <button class="sidebar-minimizer brand-minimizer" type="button"></button>
</div>
