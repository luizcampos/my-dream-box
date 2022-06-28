@extends('layouts.main')
@section('title', 'Criar meta - myDreamBox')

@section('content')

    <h1>Nova meta</h1>
    
    <form action="/events" method="POST">
        @csrf
        <fieldset>
            <label>
                Título<br/>
                <input 
                    id="title"
                    name="title"
                    type="text" 
                    placeholder="Viagem para Salvador" 
                    class="form-control"
                    required
                />
            </label>
            <br/>
            <label>
                Total necessário (R$)
                <br/>
                <input 
                    id="total"
                    name="total"
                    type="number" 
                    placeholder="R$"
                    class="form-control"
                    required
                />
            </label>
            <br/>
            <label>
                Data para realização
                <br/>
                <input 
                    id="dateGoal"
                    name="dateGoal"
                    type="text" 
                    maxlength="10"
                    placeholder="dd/mm/aaaa"
                    class="form-control"
                    onkeypress="formatar('##/##/####', this)"
                    required
                />
            </label>
            <br/>
            <label>
                Quanto você já possui reservado? (R$)
                <br/>
                <input 
                    id="cash"
                    name="cash"
                    type="number" 
                    placeholder="R$"
                    required
                />
            </label>
            <br/>
            <input type="submit" class="btn btn-success" value="Criar">
        </fieldset>
    </form>
    
@endsection