   {{-- resources/views/templates/metodi-iscrizione.blade.php --}}

   <!-- Page Content -->
   <div class='lista-corsi'>
       <!-- <h1><?php echo strtoupper($_SERVER['SERVER_NAME']); ?> - Metodi Iscrizione.</h1> -->


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
           <div class="heading-metodi">
               <div class="row">

                   <div class="col">
                       <p>SEQ</p>
                   </div>

                   <!-- <div class="col">
                       <p>COURSE ID</p>
                   </div> -->

                   <div class="col">
                       <p>TYPE</p>
                   </div>

                   <div class="col">
                       <p>NAME</p>
                   </div>

                   <div class="col">
                       <p>STATUS</p>
                   </div>


               </div>
           </div>

           <?php
                $metodi = metodi($record->id);
                $metodi_count = 0;

                // FOREACH USERS by COURSE
                foreach ($metodi as $metodo) { ?>

           <?php $metodi_count++; ?>

           <!--  USERS DETAILS -->
           <div class="records-metodi">
               <div class="row">

                   <div class="col">
                       <!-- <p><?php echo $metodi_count; ?></p> -->
                       <p><?php echo str_pad($metodi_count, 3, '0', STR_PAD_LEFT); ?></p>

                   </div>

                   <!-- <div class="col">
                       <p><?php echo $metodo->courseid; ?></p>
                       <p><?php echo str_pad($metodo->courseid, 3, '0', STR_PAD_LEFT); ?></p>
                   </div> -->

                   <div class="col">
                       <p><?php echo $metodo->type; ?></p>
                   </div>

                   <div class="col">
                       <p><strong><?php echo $metodo->name; ?></strong></p>
                   </div>

                   <div class="col">
                       <p><?php echo $metodo->status; ?></p>
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
        <!-- <?php print_r($metodi); ?> -->
    </pre>