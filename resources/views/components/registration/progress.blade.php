<div id="progressTracker">
    @php($progressTexts = [
        1 => 'Înregistrare',
        2 => 'Activează și descarcă',
        3 => 'Instalează și joacă-te',
    ])

    @for ($i = 1; $i <= 3; $i++)
        <div id="progress{{ $i }}" @class([
            'inactive' => $step < $i,
            'active' => $step == $i,
            'passed' => $step > $i,
        ])>
            <div class="step">{{ $i }}</div>
            <p class="progress-text">{{ $progressTexts[$i] }}</p>
        </div>
    @endfor
</div>
