Gallery: {{ $gallery->url }} <br>
Listing: {{ $gallery->listing ? $gallery->listing->title : null }} <br>
User: {{ $gallery->listing && $gallery->listing->user ? $gallery->listing->user->name: null }}