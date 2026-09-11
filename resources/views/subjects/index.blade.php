@extends('layouts.app')

@section('title', 'My Subjects List')

@section('content')

    <table class="table table-striped table-bordered">
        <tr>
            <th>#</th>
            <th>ID</th>
            <th>Code</th>
            <th>Title</th>
            <th>Units</th>
        </tr>

        @forelse ($subjects as $subj)
        <tr>
            <td>{{ $loop->iteration }}</td>
            <td>{{ $subj['id'] }}</td>
            <td>
                <a href="{{ route('subjects.show', $subj['id']) }}">
                    {{ $subj['code'] }}
                </a>
            </td>
            <td>{{ $subj['title'] }}</td>
            <td>
                @if ($subj['units'] >= 3)
                    <strong>{{ $subj['units'] }} (Heavy Load)</strong>
                @else
                    {{ $subj['units'] }}
                @endif
            </td>
        </tr>
        @empty
        <tr>
            <td colspan="5">No subjects have been added yet. Check back once some are added.</td>
        </tr>
        @endforelse
    </table>
@endsection