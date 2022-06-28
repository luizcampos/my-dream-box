@extends('layouts.main')
@section('title', 'Editar meta - myDreamBox')

@section('content')

    <h1>Editar meta - "{{$event->goal_title}}"</h1>
    
    <form action="/events/update/{{ $event->id }}" method="POST">
        @csrf
        @method('PUT')
        <fieldset>
            <label>
                Título<br/>
                <input 
                    id="goal_title"
                    name="goal_title"
                    type="text" 
                    placeholder="Viagem para Salvador" 
                    class="form-control"
                    value="{{$event->goal_title}}"
                    required
                />
            </label>
            <br/>
            <label>
                Total necessário (R$)
                <br/>
                <input 
                    id="goal_cash_total"
                    name="goal_cash_total"
                    type="number" 
                    placeholder="R$"
                    class="form-control"
                    value="{{$event->goal_cash_total}}"
                    required
                />
            </label>
            <br/>
            <label>
                Data para realização
                <br/>
                <input 
                    id="goal_date"
                    name="goal_date"
                    type="text" 
                    maxlength="10"
                    placeholder="dd/mm/aaaa"
                    class="form-control"
                    onkeypress="formatar('##/##/####', this)"
                    value="{{$event->goal_date}}"
                    required
                />
            </label>
            <br/>
            <label>
                Quanto você já possui reservado? (R$)
                <br/>
                <input 
                    id="goal_cash_today"
                    name="goal_cash_today"
                    type="number" 
                    placeholder="R$"
                    value="{{$event->goal_cash_today}}"
                    required
                />
            </label>
            <br/>
            <input type="submit" class="btn btn-primary" value="Editar">
        </fieldset>
    </form>
    
@endsection