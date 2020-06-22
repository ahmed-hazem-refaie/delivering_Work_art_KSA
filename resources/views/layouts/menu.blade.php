<br>
<li class="{{ Request::is('admin*') ? 'active' : '' }}">
    <a href="{{ route('admin.index') }}"><i class="fa fa-tachometer"></i><span>Dashboard</span></a>
</li>
<br>
<li class="{{ Request::is('appliedartists*') ? 'active' : '' }}">
    <a href="{{ route('appliedartists.index') }}"><i class="fa fa-user-o" aria-hidden="true"></i>
        <span>Artists Requests</span></a>
</li>
<br> <br>
<li class="{{ Request::is('artists*') ? 'active' : '' }}">
    <a href="{{ route('artists.index') }}"><i class="fa fa-plus" aria-hidden="true"></i>
        <span>Artists</span></a>
</li>

<li class="{{ Request::is('palettes*') ? 'active' : '' }}">
    <a href="{{ route('palettes.index') }}"><i class="fa fa-picture-o" aria-hidden="true"></i>
        <span>Palettes</span></a>
</li>
<li class="{{ Request::is('paletteimages*') ? 'active' : '' }}">
    <a href="{{ route('paletteimages.index') }}"><i class="fa fa-picture-o" aria-hidden="true"></i><span>Palette Images</span></a>
</li>
<br>
<li class="{{ Request::is('reviews*') ? 'active' : '' }}">
    <a href="{{ route('reviews.index') }}"><i class="fa fa-comments-o" aria-hidden="true"></i>
        <span>Reviews</span></a>
</li>

<br>
<li class="{{ Request::is('discounts*') ? 'active' : '' }}">
    <a href="{{ route('discounts.index') }}"><i class="fa fa-minus" aria-hidden="true"></i>
</i><span>Discounts</span></a>
</li>