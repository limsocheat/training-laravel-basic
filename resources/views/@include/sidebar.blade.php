<div class="nav flex-column nav-pills" id="v-pills-tab" role="tablist" aria-orientation="vertical">
    <a class="nav-link {{ Route::currentRouteName() == 'dashboard.index' ? 'active' : null }}"  href="{{ route('dashboard.index') }}" role="tab">Dashboard</a>
    <a class="nav-link {{ Route::currentRouteName() == 'dashboard.listing.create' ? 'active' : null }}" href="{{ route('dashboard.listing.create') }}" role="tab">New Listing</a>
</div>