<br>
<li class="{{ Request::is('admin*') ? 'active' : '' }}">
    <a href="{{ route('admin.index') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>
<br>
<li class="{{ Request::is('artists*') ? 'active' : '' }}">
    <a href="{{ route('artists.index') }}"><i class="fa fa-edit"></i><span>Artists</span></a>
</li>

<li class="{{ Request::is('appliedartists*') ? 'active' : '' }}">
    <a href="{{ route('appliedartists.index') }}"><i class="fa fa-edit"></i><span>Appliedartists</span></a>
</li>

<li class="{{ Request::is('reviews*') ? 'active' : '' }}">
    <a href="{{ route('reviews.index') }}"><i class="fa fa-edit"></i><span>Reviews</span></a>
</li>

<li class="{{ Request::is('palettes*') ? 'active' : '' }}">
    <a href="{{ route('palettes.index') }}"><i class="fa fa-edit"></i><span>Palettes</span></a>
</li>

<li class="{{ Request::is('paletteimages*') ? 'active' : '' }}">
    <a href="{{ route('paletteimages.index') }}"><i class="fa fa-edit"></i><span>Paletteimages</span></a>
</li>

<li class="{{ Request::is('discounts*') ? 'active' : '' }}">
    <a href="{{ route('discounts.index') }}"><i class="fa fa-edit"></i><span>Discounts</span></a>
</li>

