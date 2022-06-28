@extends('layouts.main')
@section('title', 'Home - myDreamBox')

@section('content')

    <section class="centerElements col-12">
        <h1>Olá, fulano!</h1>
        <h4>Essas são as suas metas:</h4>
    </section>

    <section class="cardsGoals">
        <div class="row">
                @foreach($goals as $goal)
                    <div class="card col-xs-12 col-sm-12 col-md-3 col-lg-3">
                        <header class="font-bolder my-header-card">
                            {{ $goal->goal_title }}
                            <div>
                                <a href="/events/pageEditGoal/{{ $goal->id}}" class="btnUpdate">
                                    <i class="ph-pencil-simple"></i>
                                </a>

                                <form action="/events/{{ $goal->id}}" method="POST" class="btnDelete"> 
                                    @csrf 
                                    @method('DELETE')
                                    <button type="submit" value="" class="btnDelete">    
                                        <i class="ph-trash"></i>
                                    </button>
                                </form>
                            </div>
                        </header>
                        <div class="card-body">
                            <p class="card-title">{{ $goal->goal_date}}</p>
                            <p class="card-title">Você tem R${{ $goal->goal_cash_today}}</p>
                            <p class="card-title">Você precisa de R${{ $goal->goal_cash_total}}</p>
                        </div>
                    </div>
                @endforeach
        </div>
    </section>
    
    <section class="centerElements col-12">
        <a href="/createGoal">
            <img src="/svg/iconAdd.svg" class="iconAdd"/>
        </a>
    </section>

@endsection