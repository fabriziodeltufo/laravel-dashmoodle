{{-- resources/views/templates/lista-corsi.blade.php --}}

<!-- Page Content -->
<div class='lista-corsi'>
    <!-- <h1><?php echo strtoupper($_SERVER['SERVER_NAME']); ?> - Lista Corsi.</h1> -->

    <div class="card-corso">

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

        <?php
        $records_data = lista_corsi();
        $rec_count = 0;

        // FOREACH
        foreach ($records_data as $record) { ?>

        <?php $rec_count++; ?>


        <!--  RECORDS DETAILS -->
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

        <?php } ?>
        <!-- END FOREACH -->

    </div>


    <div class="totale">
        <?php echo "TOTAL COURSES : $rec_count"; ?>
    </div>


</div>
<pre>
    <!-- <?php print_r($records_data); ?> -->
</pre>