<form action="{{ $action }}" method="post">

    @csrf
    @if($method === 'PUT')
        @method('PUT')
    @endif
    <div>
        <x-label for="name" :value="__('Nombre:')"/>
        <x-input id="name" class="block mt-1 w-full" type="text" name="name" value="{{ $teacher->name ?? '' }}"
                 required autofocus/>

        <x-label for="teaching_hours_id" :value="__('Horas de Enseñanza:')"/>
    </div>
    @if(isset($teachingHours) && !$teachingHours->isEmpty())
        @php
            $options = [];
            foreach ($teachingHours as $teachingHour) {
                $options[$teachingHour->id] = $teachingHour->job_title . ' - ' . $teachingHour->dedication_time;
            }
        @endphp

        <x-select id="teaching_hours_id" class="block mt-1 w-full" name="teaching_hours_id" :options="$options"
                  required/>
    @else
        <p>Error: No se encontraron horas de enseñanza disponibles.</p>
    @endif
    <x-button class="mt-4">
        {{ __('Guardar') }}
    </x-button>
</form>


