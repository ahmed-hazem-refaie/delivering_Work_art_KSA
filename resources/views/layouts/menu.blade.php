<li class="{{ Request::is('artists*') ? 'active' : '' }}">
    <a href="{{ route('artists.index') }}"><i class="fa fa-edit"></i><span>Artists</span></a>
</li>

<li class="{{ Request::is('appliedartists*') ? 'active' : '' }}">
    <a href="{{ route('appliedartists.index') }}"><i class="fa fa-edit"></i><span>Appliedartists</span></a>
</li>

<li class="{{ Request::is('reviews*') ? 'active' : '' }}">
    <a href="{{ route('reviews.index') }}"><i class="fa fa-edit"></i><span>Reviews</span></a>
</li>

