<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title', 'Project Management')</title>
    <script src="https://cdn.tailwindcss.com"></script>
    @yield('styles')
</head>
<body class="bg-gray-100">
    <!-- Header -->
    <header class="bg-blue-500 text-white py-4">
        <div class="container mx-auto flex justify-between items-center px-4">
            <h1 class="text-2xl font-bold">Project Management</h1>
            <nav>
                <ul class="flex space-x-4">
                    <li><a href="{{ route('home') }}" class="hover:underline">Dashboard</a></li>
                    <li><a href="#" class="hover:underline">Projects</a></li>
                    <li><a href="#" class="hover:underline">Clients</a></li>
                    <li><a href="#" class="hover:underline">Reports</a></li>
                </ul>
            </nav>
        </div>
    </header>

    <!-- Main Content -->
    <main class="container mx-auto my-8 px-4">
        @yield('content')
    </main>

    <!-- Footer -->
    <footer class="bg-blue-500 text-white py-4 mt-8">
        <div class="container mx-auto text-center">
            <p>&copy; 2024 Project Management. All rights reserved.</p>
        </div>
    </footer>

    @yield('scripts')
</body>
</html>