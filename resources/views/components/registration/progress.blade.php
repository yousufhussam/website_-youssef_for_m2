<div id="progressTracker">
    @php($progressTexts = [
        1 => __('app/register.progress-texts.register'),
        2 => __('app/register.progress-texts.activate-download'),
        3 => __('app/register.progress-texts.install-play'),
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
