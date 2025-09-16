@extends('layouts.app')

@section('title', 'Daftar Lomba')

@section('content')
    <h1 class="text-4xl font-bold text-center mb-8 text-sky-800">Daftar Lomba</h1>

    @if($competitions->isEmpty())
        <p class="text-center text-gray-500">Belum ada lomba yang tersedia.</p>
    @else
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @foreach($competitions as $competition)
                <div
                    class="bg-white rounded-lg shadow-lg overflow-hidden transform hover:-translate-y-2 transition-transform duration-300 border-t-4 border-sky-500">
                    <div class="p-6">
                        <h2 class="text-2xl font-bold mb-2 text-sky-700">{{ $competition->title }}</h2>
                        <p class="text-gray-600 mb-4 h-24">{{ $competition->description }}</p>
                        <div class="text-sm text-gray-500 border-t border-gray-100 pt-4 mt-4">
                            <p><strong>Start:</strong> {{ \Carbon\Carbon::parse($competition->start_date)->format('d F Y') }}</p>
                            <p><strong>End:</strong> {{ \Carbon\Carbon::parse($competition->end_date)->format('d F Y') }}</p>
                        </div>
                    </div>
                </div>
            @endforeach
        </div>
    @endif
@endsection