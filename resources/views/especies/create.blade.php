<x-app-layout>
    <div class="major container">
        <br>
        <form action="{{ route('especies.store') }}" method="post">
            @csrf
            @include('especies.form-fields')

        </form>
    </div>
</x-app-layout>