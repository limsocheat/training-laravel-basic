Contact: {{ $contact->contact }}
<br>
Customer: {{ $contact->customer ? $contact->customer->name: null }}
<br>
Listing:: {{ $contact->customer && $contact->customer->listing ? $contact->customer->listing->title : null }}