
<!-- include in partials folder -->
@extends('layouts.main')
    @section('content')
      <div class="flex-center position-ref full-height">
        <h1 class="homeric"><span>Home </span><span>Game</span><span> Advantage</span></h1>
    </div>
    <section class="full-height">
        <div style="background-color:red;flex">
            <h3>arsenals last home games</h3>
            <table>
                <thead>Gooners Home Game record</thead>
                <tbody>
                    <tr>
                        <th>Teams</th>
                        <td>Chelsea</td>
                        <td>Man United</td>
                        <td>Tottenham</td>
                        <td>Everton</td>
                        <td>Manchester City</td>
                    </tr>
                    <tr>
                        <th>Wins</th>
                        <td>{{ $numberOfWins }}</td>
                    </tr>
                    <tr>
                        <th>Losses</th>
                    </tr>
                </tbody>
                
            </table>
        </div>
        <div>
            <h3>Arsenals last away games</h3>
        </div>
    </section>
    @stop