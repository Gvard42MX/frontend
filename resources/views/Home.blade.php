@extends('layouts.app')

@section('title', 'Dashboard - Project Management')

@section('content')
    <!-- Upcoming Projects Section -->
    <section class="bg-white shadow-md rounded-lg p-6">
        <h2 class="text-xl font-bold mb-4">Upcoming Projects</h2>
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
            <!-- Project Card 1 -->
            <div class="bg-gray-200 rounded-lg p-4">
                <h3 class="text-lg font-bold mb-2">Project A</h3>
                <p class="text-gray-600 mb-2">Due: 2024-05-15</p>
                <div class="flex justify-between items-center">
                    <span class="bg-green-500 text-white px-2 py-1 rounded-full text-sm">In Progress</span>
                    <a href="#" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>

            <!-- Project Card 2 -->
            <div class="bg-gray-200 rounded-lg p-4">
                <h3 class="text-lg font-bold mb-2">Project B</h3>
                <p class="text-gray-600 mb-2">Due: 2024-06-30</p>
                <div class="flex justify-between items-center">
                    <span class="bg-yellow-500 text-white px-2 py-1 rounded-full text-sm">Pending</span>
                    <a href="#" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>

            <!-- Project Card 3 -->
            <div class="bg-gray-200 rounded-lg p-4">
                <h3 class="text-lg font-bold mb-2">Project C</h3>
                <p class="text-gray-600 mb-2">Due: 2024-07-31</p>
                <div class="flex justify-between items-center">
                    <span class="bg-red-500 text-white px-2 py-1 rounded-full text-sm">Delayed</span>
                    <a href="#" class="text-blue-500 hover:underline">View Details</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Recent Activity Section -->
    <section class="bg-white shadow-md rounded-lg p-6 mt-8">
        <h2 class="text-xl font-bold mb-4">Recent Activity</h2>
        <ul class="space-y-4">
            <!-- Activity Item 1 -->
            <li class="flex items-center">
                <div class="bg-blue-500 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 6v6m0 0v6m0-6h6m-6 0H6"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-bold">New Project Added</h3>
                    <p class="text-gray-600">Project D added by John Doe</p>
                </div>
            </li>

            <!-- Activity Item 2 -->
            <li class="flex items-center">
                <div class="bg-green-500 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-bold">Task Completed</h3>
                    <p class="text-gray-600">Task A in Project B completed by Jane Smith</p>
                </div>
            </li>

            <!-- Activity Item 3 -->
            <li class="flex items-center">
                <div class="bg-yellow-500 text-white p-2 rounded-full">
                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"></path>
                    </svg>
                </div>
                <div class="ml-4">
                    <h3 class="text-lg font-bold">Deadline Approaching</h3>
                    <p class="text-gray-600">Project C due in 7 days</p>
                </div>
            </li>
        </ul>
    </section>
@endsection

@section('scripts')
<script>
    // Add any JavaScript you need here
</script>
@endsection