{{-- resources/views/templates/utenti-corsi.blade.php --}}

<!-- Page Content -->
<div class='lista-corsi'>
    <!-- <h1><?php echo strtoupper($_SERVER['SERVER_NAME']); ?> - Lista Corsi/Utenti.</h1> -->

    <?php
    $records_data = lista_corsi();
    $rec_count = 0; ?>


    <?php  // FOREACH COURSES
    foreach ($records_data as $record) { ?>

    <?php $rec_count++; ?>

    <div class="card-corso">

        <!--  COURSES HEADING -->
        <div class="heading-corsi">
            <div class="row">

                <div class="col">
                    <p>ROW</p>
                </div>

                <div class="col">
                    <p>COURSE ID</p>
                </div>

                <div class="col">
                    <p>SHORT TITLE</p>
                </div>

                <div class="col">
                    <p>COURSE TITLE</p>
                </div>

                <div class="col">
                    <p>IDENTIF.</p>
                </div>

                <div class="col">
                    <p>VISIBLE</p>
                </div>

            </div>
        </div>

        <!--  COURSES RECORDS DETAILS -->
        <div class="records-corsi">
            <div class="row">

                <div class="col">
                    <!-- <p><?php echo $rec_count; ?></p> -->
                    <p><?php echo str_pad($rec_count, 3, '0', STR_PAD_LEFT); ?></p>

                </div>

                <div class="col">
                    <!-- <p><?php echo $record->id; ?></p> -->
                    <p><?php echo str_pad($record->id, 3, '0', STR_PAD_LEFT); ?></p>

                </div>

                <div class="col">
                    <p><?php echo $record->shortname; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $record->fullname; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $record->idnumber; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $record->visible; ?></p>
                </div>

            </div>

        </div>

        <!-- <br> -->

        <!-- USERS HEADINGS -->
        <div class="heading-utenti">
            <div class="row">

                <div class="col">
                    <p>ROW</p>
                </div>

                <div class="col">
                    <p>USER ID</p>
                </div>

                <div class="col">
                    <p>USERNAME</p>
                </div>

                <div class="col">
                    <p>EMAIL</p>
                </div>

                <div class="col">
                    <p>FIRST NAME</p>
                </div>

                <div class="col">
                    <p>LAST NAME</p>
                </div>

                <div class="col">
                    <p>CITY</p>
                </div>

                <div class="col">
                    <p>COUNTRY</p>
                </div>

            </div>
        </div>

        <?php
            $utenti_corsi = lista_utenti_corsi($record->id);
            $user_count = 0;

            // FOREACH USERS by COURSE
            foreach ($utenti_corsi as $utente_corso) { ?>

        <?php $user_count++; ?>

        <!--  USERS DETAILS -->
        <div class="records-utenti">
            <div class="row">

                <div class="col">
                    <!-- <p><?php echo $user_count; ?></p> -->
                    <p><?php echo str_pad($user_count, 3, '0', STR_PAD_LEFT); ?></p>

                </div>

                <div class="col">
                    <!-- <p><?php echo $utente_corso->id; ?></p> -->
                    <p><?php echo str_pad($utente_corso->id, 3, '0', STR_PAD_LEFT); ?></p>

                </div>

                <div class="col">
                    <p><?php echo $utente_corso->username; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $utente_corso->email; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $utente_corso->firstname; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $utente_corso->lastname; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $utente_corso->city ?? 'null'; ?></p>
                </div>

                <div class="col">
                    <p><?php echo $utente_corso->country ?? 'null'; ?></p>
                </div>

            </div>

        </div>


        <?php } ?>


    </div>

    <?php } ?>
    <!-- END FOREACH records_data -->

    <div class="totale">
        <?php echo "TOTAL COURSES : $rec_count"; ?>
    </div>

</div>

<pre>
    <!-- <?php print_r($utente_corso); ?> -->
 </pre>