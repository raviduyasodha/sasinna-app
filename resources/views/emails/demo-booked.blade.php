<h2>New Demo Booking Received</h2>

<p><strong>Name:</strong> {{ $booking->name }}</p>
<p><strong>Email:</strong> {{ $booking->email }}</p>
<p><strong>Phone:</strong> {{ $booking->phone ?? 'N/A' }}</p>
<p><strong>Company:</strong> {{ $booking->company ?? 'N/A' }}</p>
<p><strong>Product:</strong> {{ $booking->product ?? 'N/A' }}</p>

<p><strong>Message:</strong></p>
<p>{{ $booking->message ?? 'No message provided' }}</p>
