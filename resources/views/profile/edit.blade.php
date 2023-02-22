<x-app-layout>  
    @foreach ($documents as $doc)
        <img src="../documents/{{ str_replace(' ', '', Auth::user()->name) }}/{{ $doc }}" style="max-height: 200px;">
        <p>{{ $doc }}</p>
    @endforeach
</x-app-layout>
