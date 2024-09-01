<!DOCTYPE html>
<html>

<head>
    <title>Master Mindz</title>
</head>

<body>
    Dear Master Mindz,<br />

    <p>You have received new message via websiet contact form.</p>

    <p>Name: {{ $data->name }}</p>
    <p>Contact number: {{ $data->mobile }}</p>
    <p>Email: {{ $data->email }}</p>
    <p>Subject: {{ $data->subject }}</p>
    <p>Message: {{ $data->message }}</p>


    Best Regards,<br />
    Team Master Mindz.
</body>

</html>