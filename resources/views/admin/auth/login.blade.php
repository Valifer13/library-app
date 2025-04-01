<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login Page</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    @fluxAppearance
</head>

<body>
    <section class="w-full h-screen grid place-content-center">
        <div class="min-w-sm min-h-3xl p-5 rounded-xl">
            <form action="/admin/login" method="post" class="grid gap-5">
                @csrf
                <legend class="text-2xl font-medium text-center">Admin Login</legend>
                <flux:input label="Email" type="email" name="email" required />
                <flux:input label="Password" type="password" name="password"  description:trailing="Must be at least 8 characters." icon="key" required />
                <flux:button variant="primary" icon:trailing="arrow-right" type="submit">Submit</flux:button>
            </form>
        </div>
    </section>

    @fluxScripts
</body>

</html>