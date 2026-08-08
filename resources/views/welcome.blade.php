
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

</head>
<body>
                @php
    $message = "این یک پیام تست است";
    $color = "red";
@endphp
<x-buttom type="error" :message="$message" :color="$color">
    <strong>هشدار!</strong> مشکلی پیش آمد!
</x-buttom>

<x-forms.input type="error" :message="$message" class="mt-4" />

<x-named_slot>

    <x-slot:title>
        خطای سرور
    </x-slot:title>

    هشدار! مشکلی پیش آمد!

</x-named_slot>
</body>
</html>