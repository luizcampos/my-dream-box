@extends('layouts.main')
@section('title', 'Editar meta - myDreamBox')

@section('content')

    <section class="centerElements">
        <h1>Editar meta - "{{$event->goal_title}}"</h1>
        <br/>
        <form action="/events/update/{{ $event->id }}" method="POST" class="formEdit container">
            @csrf
            @method('PUT')
            <fieldset class="row justify-content-center">
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
                <br/><br/><br/>
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
                <br/><br/><br/>
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
                <br/><br/><br/>
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    Quanto você já possui reservado? (R$)
                    <br/>
                    <input 
                        id="goal_cash_today"
                        name="goal_cash_today"
                        type="number" 
                        placeholder="R$"
                        class="form-control"
                        value="{{$event->goal_cash_today}}"
                        required
                    />
                </label>
            </fieldset>
            <br/>
            <input type="submit" class="btn btn-primary" value="Editar">
        </form>
    </section> 
@endsection