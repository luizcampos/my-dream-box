@extends('layouts.main')
@section('title', 'Criar meta - myDreamBox')

@section('content')

    <section class="centerElements">
        <h1>Nova meta</h1>
        <br/>
        <form action="/events" method="POST" class="formEdit container">
            @csrf
            <fieldset class="row justify-content-center">
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
                <br/><br/><br/>
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
                <br/><br/><br/>
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
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
                <br/><br/><br/>
                <label class="col-xs-12 col-sm-12 col-md-6 col-lg-4">
                    Quanto você já possui reservado? (R$)
                    <br/>
                    <input 
                        id="cash"
                        name="cash"
                        type="number" 
                        placeholder="R$"
                        class="form-control"
                        required
                    />
                </label>
            </fieldset>
            
            <br/>
            <input type="submit" class="btn btn-success" value="Criar">
            
        </form>
    </section>
@endsection