<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Crystal Bridge - Game ON</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;700&display=swap" rel="stylesheet">

        <!-- Styles -->
        <style>
            /*! normalize.css v8.0.1 | MIT License | github.com/necolas/normalize.css */html{line-height:1.15;-webkit-text-size-adjust:100%}body{margin:0}a{background-color:transparent}[hidden]{display:none}html{font-family:system-ui,-apple-system,BlinkMacSystemFont,Segoe UI,Roboto,Helvetica Neue,Arial,Noto Sans,sans-serif,Apple Color Emoji,Segoe UI Emoji,Segoe UI Symbol,Noto Color Emoji;line-height:1.5}*,:after,:before{box-sizing:border-box;border:0 solid #e2e8f0}a{color:inherit;text-decoration:inherit}svg,video{display:block;vertical-align:middle}video{max-width:100%;height:auto}.bg-white{--bg-opacity:1;background-color:#fff;background-color:rgba(255,255,255,var(--bg-opacity))}.bg-gray-100{--bg-opacity:1;background-color:#f7fafc;background-color:rgba(247,250,252,var(--bg-opacity))}.border-gray-200{--border-opacity:1;border-color:#edf2f7;border-color:rgba(237,242,247,var(--border-opacity))}.border-t{border-top-width:1px}.flex{display:flex}.grid{display:grid}.hidden{display:none}.items-center{align-items:center}.justify-center{justify-content:center}.font-semibold{font-weight:600}.h-5{height:1.25rem}.h-8{height:2rem}.h-16{height:4rem}.text-sm{font-size:.875rem}.text-lg{font-size:1.125rem}.leading-7{line-height:1.75rem}.mx-auto{margin-left:auto;margin-right:auto}.ml-1{margin-left:.25rem}.mt-2{margin-top:.5rem}.mr-2{margin-right:.5rem}.ml-2{margin-left:.5rem}.mt-4{margin-top:1rem}.ml-4{margin-left:1rem}.mt-8{margin-top:2rem}.ml-12{margin-left:3rem}.-mt-px{margin-top:-1px}.max-w-6xl{max-width:72rem}.min-h-screen{min-height:100vh}.overflow-hidden{overflow:hidden}.p-6{padding:1.5rem}.py-4{padding-top:1rem;padding-bottom:1rem}.px-6{padding-left:1.5rem;padding-right:1.5rem}.pt-8{padding-top:2rem}.fixed{position:fixed}.relative{position:relative}.top-0{top:0}.right-0{right:0}.shadow{box-shadow:0 1px 3px 0 rgba(0,0,0,.1),0 1px 2px 0 rgba(0,0,0,.06)}.text-center{text-align:center}.text-gray-200{--text-opacity:1;color:#edf2f7;color:rgba(237,242,247,var(--text-opacity))}.text-gray-300{--text-opacity:1;color:#e2e8f0;color:rgba(226,232,240,var(--text-opacity))}.text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.text-gray-500{--text-opacity:1;color:#a0aec0;color:rgba(160,174,192,var(--text-opacity))}.text-gray-600{--text-opacity:1;color:#718096;color:rgba(113,128,150,var(--text-opacity))}.text-gray-700{--text-opacity:1;color:#4a5568;color:rgba(74,85,104,var(--text-opacity))}.text-gray-900{--text-opacity:1;color:#1a202c;color:rgba(26,32,44,var(--text-opacity))}.underline{text-decoration:underline}.antialiased{-webkit-font-smoothing:antialiased;-moz-osx-font-smoothing:grayscale}.w-5{width:1.25rem}.w-8{width:2rem}.w-auto{width:auto}.grid-cols-1{grid-template-columns:repeat(1,minmax(0,1fr))}@media (min-width:640px){.sm\:rounded-lg{border-radius:.5rem}.sm\:block{display:block}.sm\:items-center{align-items:center}.sm\:justify-start{justify-content:flex-start}.sm\:justify-between{justify-content:space-between}.sm\:h-20{height:5rem}.sm\:ml-0{margin-left:0}.sm\:px-6{padding-left:1.5rem;padding-right:1.5rem}.sm\:pt-0{padding-top:0}.sm\:text-left{text-align:left}.sm\:text-right{text-align:right}}@media (min-width:768px){.md\:border-t-0{border-top-width:0}.md\:border-l{border-left-width:1px}.md\:grid-cols-2{grid-template-columns:repeat(2,minmax(0,1fr))}}@media (min-width:1024px){.lg\:px-8{padding-left:2rem;padding-right:2rem}}@media (prefers-color-scheme:dark){.dark\:bg-gray-800{--bg-opacity:1;background-color:#2d3748;background-color:rgba(45,55,72,var(--bg-opacity))}.dark\:bg-gray-900{--bg-opacity:1;background-color:#1a202c;background-color:rgba(26,32,44,var(--bg-opacity))}.dark\:border-gray-700{--border-opacity:1;border-color:#4a5568;border-color:rgba(74,85,104,var(--border-opacity))}.dark\:text-white{--text-opacity:1;color:#fff;color:rgba(255,255,255,var(--text-opacity))}.dark\:text-gray-400{--text-opacity:1;color:#cbd5e0;color:rgba(203,213,224,var(--text-opacity))}.dark\:text-gray-500{--tw-text-opacity:1;color:#6b7280;color:rgba(107,114,128,var(--tw-text-opacity))}}}
        </style>

        <link href="{{ asset('css/app.css') }}" rel="stylesheet">

        <script src="{{ asset('js/app.js') }}"></script>

        <style>
            html {
                height: 100%;
            }
            body {
                font-family: 'Nunito', sans-serif;
            }
            #beggining {
                width: 15%;
                position: absolute;
                left: 0;
                top: 0;
                height: 100%;
                background: purple;
            }
            #steps {
                position: absolute;
                left: 15%;
                right: 15%;
                top: 0;
                bottom: 0;

                background: url('/images/bridge_bg.jpg');
                height: 100%;
                background-position: center;
                background-repeat: no-repeat;
                background-size: cover;
            }
            #finish {
                width: 15%;
                position: absolute;
                right: 0;
                top: 0;
                height: 100%;
                background: purple;
            }
            #player {
                position: absolute;
                top: calc(50% - 50px);
                left: calc(15% - 100px);
                height: 100px;
                width: 100px;
                background: red;
            }
            #player img {
                border-radius: 50%;
                height: 100px;
                width: 100px;
            }
            #reset {
                position: absolute;
                right: 10px;
                bottom: 10px;
            }
            .step {
                position: absolute;
                top: 30%;
                left: 10%;
                height: 100px;
                width: 100px;
                border: 1px solid white;
                background: rgba(255, 255, 255, 0.4);
            }
            #reset {
                background: white;
                padding: 1rem 2rem;
                display: none;
            }
        </style>
    </head>
    <body>
        <div id="board">
            <div id="beggining"></div>
            <div id="steps"></div>
            <div id="finish"></div>
            <div id="player">
                <img src="/images/player.png"/>
            </div>
        </div>
        <div id="reset">
            <a href="/">REINICIAR</a>
        </div>

        <script>
            let gameOn = true;
            const bets = {!! json_encode($round->bets) !!}
            let hoveredOption = 0;
            const numberSteps = {{ $round->number_steps }};
            const winningStep = numberSteps - 1;
            const stepsArray = [];

            const player = {
                currentStep: -1,
                currentStepOption: 0,
                div: document.querySelector('#player'),
            };

            const stepsStage = document.querySelector('#steps');
            const begginingStage = document.querySelector('#beggining');

            let ratioStep = stepsStage.offsetWidth / numberSteps;

            for (let step = 0; step < numberSteps; step++) {
                if (!stepsArray[step]) {
                    stepsArray.push([]);
                }

                const safeStep = determineSafeStep();

                for (let stepOption = 0; stepOption < 3; stepOption++) {
                    const stepObj = {
                        step,
                        stepOption,
                        div: positionStep(step, stepOption),
                        isSafe: stepOption === safeStep,
                    };
                    stepsArray[step].push(stepObj);
                }
            }

            console.log(stepsArray);

            function determineSafeStep() {
                const safeStepSeed = Math.random();
                let safeStep;
                if (safeStepSeed > 0.66) {
                    safeStep = 2;
                } else if (safeStepSeed > 0.33) {
                    safeStep = 1;
                } else {
                    safeStep = 0;
                }
                return safeStep;
            }

            function positionStep(x, y) {
                const stepDiv = document.createElement('div');
                stepDiv.className = 'step';
                stepDiv.id = `step_${x}_${y}`;
                stepDiv.style.left = `calc(${x * (100 / numberSteps)}% + 100px)`;
                stepDiv.style.top = `calc(${y * 33}% + 100px)`;
                stepsStage.appendChild(stepDiv);
                return stepDiv;
            }

            document.onkeydown = function (e) {
                if (!gameOn) {
                    return;
                }
                switch (e.keyCode) {
                    //down key
                    case 40:
                        if (hoveredOption === 2) {
                            hoveredOption = 0;
                        } else {
                            hoveredOption++;
                        }
                        break;
                    //up key
                    case 38:
                        if (hoveredOption === 0) {
                            hoveredOption = 2;
                        } else {
                            hoveredOption--;
                        }
                        break;
                    //spacebar
                    case 32:
                        advancePlayer();
                        break;
                }

                tickRules();
            }

            function advancePlayer() {
                player.currentStep++;
                player.currentStepOption = hoveredOption;
                const steppedStep = stepsArray[player.currentStep][player.currentStepOption];
                player.div.style.left = `${begginingStage.offsetWidth + ((player.currentStep) * ratioStep) + 100}px`;
                player.div.style.top = `calc(${player.currentStepOption * 33}% + 100px)`;;

                hoveredOption = 0;
            }

            function clearAllHovers() {
                stepsArray.forEach((step) => {
                    step.forEach((stepOption) => {
                        stepOption.div.style.border = '1px solid white';
                    })
                })
            }

            function tickRules() {
                clearAllHovers();
                if (player.currentStep > -1) {
                    const steppedStep = stepsArray[player.currentStep][player.currentStepOption];
                    if (!steppedStep.isSafe) {
                        steppedStep.div.style.display = 'none';
                        player.div.style.display = 'none';
                        return gameOver(false);
                    }
                }
                if (player.currentStep === winningStep) {
                    player.div.style.left = `${begginingStage.offsetWidth + ((player.currentStep + 1) * ratioStep) + 100}px`;
                    return gameOver();
                }
                stepsArray[player.currentStep + 1][hoveredOption].div.style.border = '5px solid red';
            }

            function gameOver(win = true) {
                gameOn = false;
                setTimeout(function () {
                    if (!win) {
                        alert('KKK O NOOB MORREU');
                    } else {
                        alert('O JOGADOR VENCEU!');
                    }
                    const winners = bets.filter((bet) => bet.player_stop_step === player.currentStep).map((bet) => bet.bettor_name);
                    const total = bets.reduce((sum, bet) => sum + parseFloat(bet.bet_amount), 0.0);

                    if (winners.length > 0) {
                        alert(winners.join(', ') + ' - Receberam: ' + total);
                    } else {
                        alert('Ninguém venceu a aposta. A gente fica com a grana toda KKKKK');
                    }

                    document.querySelector('#reset').style.display = 'block';
                }, 10);
            }

            tickRules();
        </script>
    </body>
</html>
