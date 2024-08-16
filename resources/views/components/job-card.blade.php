<x-card class="mb-4">
    <div class="mb-4 flex justify-between">
        <h2 class="text-lg font-medium">{{$job->title}}</h2>
        <div class="text-slate-500">₹{{number_format($job->salary)}}</div>
    </div>

    <div class="mb-4 flex justify-between items-center text-sm text-slate-500">
        <div class="flex space-x-4">
            <div>Company Name</div>
            <div>{{$job->location}}</div>
        </div>
        <div class="flex space-x-1 text-xs">
            <x-tag class="rounded-md border px-2 py-1">{{Str::ucfirst($job->experience)}}</x-tag>
            <x-tag class="rounded-md border px-2 py-1">{{$job->category}}</x-tag>
        </div>
    </div>

    <p class="text-sm text-slate-500 mb-4">
        {!! nl2br(e($job->description)) !!}
    </p>

    {{$slot}}
</x-card>