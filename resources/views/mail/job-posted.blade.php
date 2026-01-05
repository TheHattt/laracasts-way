{{--Mail page  with tailwindcss--}}

<div class="bg-gray-100 p-6 min-h-screen flex items-center justify-center">
    <div class="max-w-2xl mx-auto bg-white p-6 rounded-lg shadow-md">
        <h1 class="text-2xl font-bold mb-4 text-gray-800">New Job Posted: {{ $job->title }}</h1>
        <p class="text-gray-700 mb-4">A new job has been posted that might interest you.</p>
        <div class="mb-4">
            <h2 class="text-xl font-semibold text-gray-800">Job Details:</h2>
            <div class="list-disc list-inside text-gray-700">
                <p><strong>Title:</strong> {{ $job->title }}</p>
            </div>
        </div>
        <a href="{{ url("/jobs/" . $job->id) }}" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Apply Now</a>
    </div>
</div>
