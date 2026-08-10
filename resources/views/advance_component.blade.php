<x-card color="blue">
@push('scripts')
    <script src="{{ asset('js/java-script.js') }}"></script>
@endpush
<x-slot:title>
    {{ $component->formatAlert('server error') }}
</x-slot:title>
somethings went wrong!

    <x-card.header>
        User Information
    </x-card.header>

    <x-card.footer>
        Save
    </x-card.footer>
<form action="{{ route('first_day') }}" method="get">
    @csrf
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
<a href="{{ route('form_delete') }}">Delete</a>
</x-card>

