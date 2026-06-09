{{-- resources/views/templates/dashboard.blade.php --}}

{{-- # conta corsi moodle --}}
<?php
$records_data = conta_corsi();
$rec_count = 0;

// FOREACH
foreach ($records_data as $record) {
    $rec_count++;
}

?>

{{-- # conta utenti registrati in moodle con email --}}
<?php
$utenti_data = conta_utenti();
$utenti_count = 0;

// FOREACH
foreach ($utenti_data->users as $utente) {
    if ($utente->username !== 'guest') {
        $utenti_count++;
    }
}

?>

<div class="moodle-dashboard">

    {{-- ===== SEZIONE 1: INFO SITO MOODLE ===== --}}
    <section class="dash-section">
        <h2 class="section-title">Info Sito Moodle</h2>
        <div class="dash-grid">

            <div class="dash-card">
                <div class="card-inner">
                    <span class="card-icon">👥</span>
                    <h3 class="card-title">Utenti registrati in Moodle</h3>
                    <p class="card-value"><?php echo $utenti_count ?></p>
                </div>
            </div>

            <div class="dash-card">
                <div class="card-inner">
                    <span class="card-icon">📚</span>
                    <h3 class="card-title">Corsi registrati in Moodle</h3>
                    <p class="card-value">
                        <?php echo $rec_count ?>
                    </p>
                </div>
            </div>

        </div>
    </section>

    {{-- ===== SEZIONE 2: CANCELLA / INSERISCI UTENTE ===== --}}
    <section class="dash-section">
        <h2 class="section-title">Gestione Utenti Moodle</h2>
        <div class="dash-grid">

            {{-- Cancella utente --}}
            <div class="dash-card card-danger">
                <div class="card-inner">
                    <span class="card-icon">🗑️</span>
                    <h3 class="card-title">Cancella Utente da Moodle</h3>

                    @if(session('success_cancella'))
                    <p class="msg-success">✅ {{ session('success_cancella') }}</p>
                    @endif
                    @if(session('error_cancella'))
                    <p class="msg-error">❌ {{ session('error_cancella') }}</p>
                    @endif

                    <form method="POST" action="{{ route('moodle.cancella') }}" style="width: 100%;">
                        @csrf
                        <div class="form-group">
                            <input type="email" name="email_cancella" class="dash-input"
                                placeholder="email.utente@dominio.com" aria-label="Email utente da cancellare" />
                        </div>
                        <button type="submit" class="dash-btn btn-danger" style="margin-top: 0.75rem;">Cancella</button>
                    </form>

                </div>
            </div>

            {{-- Inserisci utente --}}
            <div class="dash-card card-success">
                <div class="card-inner">
                    <span class="card-icon">➕</span>
                    <h3 class="card-title">Inserisci Utente in Moodle</h3>
                    <div class="form-group">
                        <input type="email" class="dash-input" placeholder="email.utente@dominio.com"
                            aria-label="Email utente da inserire" />
                    </div>
                    <button class="dash-btn btn-success">
                        Inserisci
                    </button>
                </div>
            </div>

        </div>




    </section>

    {{-- ===== SEZIONE 3: INSERIMENTI IN BLOCCO CSV ===== --}}
    <section class="dash-section">
        <h2 class="section-title">Inserimenti in Blocco da CSV</h2>
        <div class="dash-grid">

            {{-- Carica utenti CSV --}}
            <div class="dash-card">
                <div class="card-inner">
                    <span class="card-icon">📤</span>
                    <h3 class="card-title">Carica blocco utenti su Moodle via CSV</h3>
                    <div class="form-group">
                        <label class="file-label">
                            <input type="file" accept=".csv" class="file-input"
                                aria-label="Seleziona file CSV con lista utenti" />
                            <span class="file-btn">📎 Seleziona file .csv</span>
                            <span class="file-name">Nessun file selezionato</span>
                        </label>
                    </div>
                    <button class="dash-btn btn-primary">
                        OK — Avvia caricamento
                    </button>
                </div>
            </div>

            {{-- Carica studenti su corso CSV --}}
            <div class="dash-card">
                <div class="card-inner">
                    <span class="card-icon">🎓</span>
                    <h3 class="card-title">Carica blocco studenti su corso Moodle via CSV</h3>
                    <div class="form-group">
                        <label class="file-label">
                            <input type="file" accept=".csv" class="file-input"
                                aria-label="Seleziona file CSV con lista studenti per corso" />
                            <span class="file-btn">📎 Seleziona file .csv</span>
                            <span class="file-name">Nessun file selezionato</span>
                        </label>
                    </div>
                    <button class="dash-btn btn-primary">
                        OK — Avvia caricamento
                    </button>
                </div>
            </div>

        </div>
    </section>

</div>

{{-- Script per mostrare il nome del file CSV selezionato --}}
<script>
document.querySelectorAll('.file-input').forEach(function(input) {
    input.addEventListener('change', function() {
        const nameSpan = this.closest('.file-label').querySelector('.file-name');
        nameSpan.textContent = this.files.length > 0 ? this.files[0].name : 'Nessun file selezionato';
    });
});
</script>