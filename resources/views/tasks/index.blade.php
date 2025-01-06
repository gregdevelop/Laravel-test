@forelse ($tareas as $tarea)
    <li class="list-group-item">
        <div class="card" style="width: 18rem;">
            <div class="card-body">
                <h5 class="card-title text-muted">Titulo: {{ $tarea->title }}</h5>
                <p class="card-text text-muted">Estatus: {{ $tarea->status ? 'Completada' : 'Por hacer' }}</p>

                @if (!$tarea->status)
                    <a href="{{ route('task.update', $tarea->id) }}" class="btn btn-primary aprobar-tarea">Marcar como completada</a>
                @endif
                
                <a href="{{ route('task.destroy', $tarea->id) }}" class="btn btn-danger eliminar-tarea">Eliminar</a>
            </div>
        </div>
    </li>
@empty
    <p>No hay tareas</p>
@endforelse


<script>
        $(function() {

            $('.aprobar-tarea').click(function(e){
                e.preventDefault();

                jQuery.ajax({
                    url: $(this).attr("href"),
                    method: 'PATCH',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function(result){
                        if (result.success) {
                            $('.list-group-item').remove();
                            $('.list-group').append(result.html);
                        }
                    }
                });
            })

            $('.eliminar-tarea').click(function(e){
                e.preventDefault();

                jQuery.ajax({
                    url: $(this).attr("href"),
                    method: 'DELETE',
                    data: {
                        _token: "{{ csrf_token() }}",
                    },
                    dataType: 'json',
                    success: function(result){
                        if (result.success) {
                            $('.list-group-item').remove();
                            $('.list-group').append(result.html);
                        }
                    }
                });
            })
        })
    </script>