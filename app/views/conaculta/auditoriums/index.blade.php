<recintos>
    @foreach ($auditoriums as $auditorium)
        @include('conaculta.auditoriums.show', ['auditorium' => $auditorium])
    @endforeach
</recintos>