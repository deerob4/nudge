<h1>You've been nudged!</h1>
<h2>Hi {{ $user->name }},</h2>
<img src={{ $nudger->photo_url }} alt={{ $nudger->name }} />
<p>It looks like {{ $nudger->name }} has taken an interest in you. Visit {{ $nudger->facebook_link }} to find out more!</p>
<h3>Thanks, <br> The nudj Team</h3>