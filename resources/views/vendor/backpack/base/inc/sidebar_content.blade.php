<!-- This file is used to store sidebar items, starting with Backpack\Base 0.9.0 -->
<li><a href="{{ backpack_url('dashboard') }}"><i class="fa fa-dashboard"></i> <span>{{ trans('backpack::base.dashboard') }}</span></a></li>

@if (backpack_user()->hasRole(\App\Role::ADMIN))
	<li><a href="{{ backpack_url('user') }}"><i class="fa fa-users"></i> <span>{{ "Management User" }}</span></a></li>
@endif
<li><a href="{{ backpack_url('category') }}"><i class="fa fa-tags"></i> <span>{{ "Category" }}</span></a></li>
<li><a href="{{ backpack_url('product') }}"><i class="fa fa-cubes"></i> <span>{{ "Product" }}</span></a></li>

@if (backpack_user()->hasRole(\App\Role::PRODUCTION))
	<li><a href="{{ backpack_url('production') }}"><i class="fa fa-cogs"></i> <span>{{ "Production" }}</span></a></li>
@endif

<li><a href="{{ backpack_url('packing') }}"><i class="fa fa-dropbox"></i> <span>{{ "Packing" }}</span></a></li>
<li><a href="{{ backpack_url('good') }}"><i class="fa fa-th-large"></i> <span>{{ "Goods" }}</span></a></li>