@extends('layouts.app')

@section('content')

<div class="bg-white p-8 rounded-xl shadow-md border border-gray-200">

    {{-- HERO HEADER --}}
    <div class="flex items-center gap-6 mb-8">
        <img src="/images/profile.jpeg"
            class="w-28 h-28 rounded-full border-4 border-blue-200 shadow-lg object-cover">

        <div>
            <h1 class="text-4xl font-extrabold text-gray-900">
                {{ $profile->name }}
            </h1>
            <p class="text-lg text-gray-600">
                {{ $profile->title }}
            </p>
        </div>
    </div>

    <hr class="my-6 border-gray-300">


    {{-- SUMMARY --}}
    <p class="text-gray-700 leading-relaxed mb-8">
        {{ $profile->summary }}
    </p>

    {{-- CONTACTS --}}
    <div class="mb-8">
        <h3 class="text-xl font-semibold text-gray-900 mb-3">Contacts</h3>

        @php $contacts = json_decode($profile->contacts, true); @endphp

        <ul class="space-y-2">
            <li>
                <span class="font-semibold">Email:</span> {{ $contacts['email'] }}
            </li>
            <li>
                <span class="font-semibold">Phone:</span> {{ $contacts['phone'] }}
            </li>
            <li>
                <span class="font-semibold">Location:</span> {{ $contacts['location'] }}
            </li>
        </ul>
    </div>

    {{-- SKILLS --}}
    <div class="mb-8">
        <h3 class="text-xl font-semibold text-gray-900 mb-3">Skills</h3>

        @php $skills = json_decode($profile->skills, true); @endphp

        <div class="flex flex-wrap gap-2">
            @foreach($skills as $skill)
                <span class="px-3 py-1 bg-blue-100 text-blue-700 rounded-full text-sm font-medium shadow">
                    {{ $skill }}
                </span>
            @endforeach
        </div>
    </div>

    {{-- EDUCATION --}}
    <div class="mb-8">
        <h3 class="text-xl font-semibold text-gray-900 mb-3">Education</h3>

        @php $education = json_decode($profile->education, true); @endphp

        @foreach($education as $e)
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 mb-3">
                <p class="font-bold text-gray-900">{{ $e['school'] }}</p>
                <p class="text-gray-700">{{ $e['degree'] }}</p>
                <p class="text-gray-600 text-sm">{{ $e['year'] }}</p>
            </div>
        @endforeach
    </div>

    {{-- WORK EXPERIENCE --}}
    <div class="mb-4">
        <h3 class="text-xl font-semibold text-gray-900 mb-3">Work Experience</h3>

        @php $work = json_decode($profile->work_experience, true); @endphp

        @foreach($work as $job)
            <div class="p-4 bg-gray-50 rounded-lg border border-gray-200 mb-3">
                <p class="font-bold text-gray-900">{{ $job['company'] }}</p>
                <p class="text-gray-700">{{ $job['title'] }}</p>
                <p class="text-gray-600 text-sm">{{ $job['period'] }}</p>
                <p class="text-gray-700 text-sm mt-2">{{ $job['description'] }}</p>
            </div>
        @endforeach
    </div>

</div>

@endsection
