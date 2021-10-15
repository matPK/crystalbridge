<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crystal Bridge</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>

        <style>
            body {
                font-family: 'Nunito', sans-serif;
            }
        </style>
    </head>
    <body class="antialiased">
        <div class="relative flex items-top justify-center min-h-screen bg-gray-100 dark:bg-gray-900 sm:items-center py-4 sm:pt-0">
            <div class="max-w-6xl mx-auto sm:px-6 lg:px-8">
                <div class="flex justify-center pt-8 sm:justify-center sm:pt-0">
                    <img style="max-width: 75%; width: 100%;" src="{{ asset('images/squids.jpg') }}"/>
                </div>

                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            Configurações do Jogo
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div class="form-group">
                                        <label for="number_steps">Passos:</label>
                                        <input type="range" id="number_steps" name="number_steps" min="1" max="12" class="form-control" required value="{{ $round->number_steps }}"/>
                                        <span id="number_steps_span">{{ $round->number_steps }}</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="mt-8 bg-white dark:bg-gray-800 overflow-hidden shadow sm:rounded-lg">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="p-6">
                            Apostas
                            <div class="ml-12">
                                <div class="mt-2 text-gray-600 dark:text-gray-400 text-sm">
                                    <div class="form-group">
                                        <label for="number_steps">Nome:</label>
                                        <input id="bettor_name" name="bettor_name" class="form-control" style="text-transform: uppercase;" required/>
                                    </div>
                                    <div class="form-group">
                                        <label for="player_stop_step">Passo que o Jogador Irá Parar:</label>
                                        <input type="range" id="player_stop_step" name="player_stop_step" min="1" max="12" class="form-control" required value="3"/>
                                        <span id="player_stop_step_span">3</span>
                                    </div>
                                    <div class="form-group">
                                        <label for="bet_amount">Valor Apostado:</label>
                                        <input type="number" step="1.00" id="bet_amount" name="bet_amount" min="1" max="1000000" class="form-control" required value="100.00"/>
                                    </div>

                                    <button onclick="registerBet(this)">Registrar Aposta</button>
                                </div>
                            </div>
                        </div>
                        <div class="p-6">
                            Registradas
                            <ul id="bets-list"></ul>
                            Os vencedores levam: <span id="bets-total">0.00</span>
                        </div>
                    </div>
                </div>
                <div class="mt-8 flex justify-center">
                    <a href="{{ route('game', ['round' => $round]) }}">COMEÇAR O JOGO PONTE DE CRISTAL!</button>
                </div>
            </div>
        </div>
        <script>
            const number_steps = document.querySelector('#number_steps');

            number_steps.addEventListener('input', function (e) {
                document.querySelector('#number_steps_span').innerHTML = e.target.value;
            });

            number_steps.addEventListener('change', async function (e) {
                e.target.disabled = true;
                await axios.put('{{ route('rounds.update', ['round' => $round]) }}', {
                    number_steps: number_steps.value,
                }).catch((error) => {
                    Object.values(error.response.data.errors).forEach(error_array => {
                        error_array.forEach(error_message => alert(error_message));
                    });
                });
                e.target.disabled = false;
            });

            const bettor_name = document.querySelector('#bettor_name');
            const player_stop_step = document.querySelector('#player_stop_step');
            const bet_amount = document.querySelector('#bet_amount');

            player_stop_step.addEventListener('input', function (e) {
                document.querySelector('#player_stop_step_span').innerHTML = e.target.value;
            });

            player_stop_step.addEventListener('change', async function (e) {
                if (e.target.value > number_steps.value) {
                    player_stop_step.value = number_steps.value;
                    document.querySelector('#player_stop_step_span').innerHTML = number_steps.value;
                    alert('Não pode apostar num passo maior do que o configurado');
                }
            });

            async function registerBet(btn) {
                btn.disabled = true;
                toggleBlockBetForm();
                
                const response = await axios.post('{{ route('bets.store') }}', {
                    round_id: {{ $round->id }},
                    bettor_name: bettor_name.value,
                    player_stop_step: player_stop_step.value,
                    bet_amount: bet_amount.value,
                }).catch((error) => {
                    Object.values(error.response.data.errors).forEach(error_array => {
                        error_array.forEach(error_message => alert(error_message));
                    });
                    return false;
                }).finally(() => {
                    toggleBlockBetForm();
                    btn.disabled = false;
                });

                if (!response) {
                    return;
                }

                addBetToList(response.data);
                alert('Aposta Registrada!');
                cleanBetForm();
            }

            function toggleBlockBetForm() {
                bettor_name.disabled = !bettor_name.disabled;
                player_stop_step.disabled = !player_stop_step.disabled;
                bet_amount.disabled = !bet_amount.disabled;
            }

            function cleanBetForm() {
                bettor_name.value = '';
                player_stop_step.value = 3;
                bet_amount.value = 100.00;
            }

            function addBetToList(bet) {
                const bets_list = document.querySelector('#bets-list');
                const li = document.createElement('li');
                li.textContent = `${bet.bettor_name} - ${bet.player_stop_step} - ${bet.bet_amount}`
                bets_list.appendChild(li);
                updateTotalBet(bet.bet_amount);
            }

            function updateTotalBet(new_bet_amount) {
                const bets_total = document.querySelector('#bets-total');
                let total_so_far = parseFloat(bets_total.innerHTML);
                bets_total.innerHTML = total_so_far + parseFloat(new_bet_amount);
            }
        </script>
    </body>
</html>
