User: {{ $user->name }} <br>
Listings: {{ count($user->listings) }} <br>
<table>
    <tr>
        <td>Listing ID</td>
        <td>Gallery Count</td>
    </tr>
    @foreach($user->listings as $listing)
    <tr>
        <td>
            {{ $listing->id }}
        </td>
        <td>
            {{ count($listing->galleries) }}
        </td>
    </tr>
    @endforeach
</table>
Galleries: {{ count($user->galleries) }}