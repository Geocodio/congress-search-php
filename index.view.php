<?php require('partials/head.php') ?>
<?php require('partials/nav.php') ?>
    <main>
        <?php require('partials/form.php') ?>
            <?php if (! $district): ?>
                <?php require('partials/422.php') ?>
            <?php else: ?>
                <div>
                    <br />
                    <div class="flex items-center justify-center">
                        <p style="font-size:26px"><i><?= $output->input->formatted_address ?? "No input found." ?></i></p>
                    </div>
                    <div class="flex items-center justify-center">
                        <p style="font-size:30px"><b><?= $output->results[0]->address_components->state?> <?= $district->name ?? "No district found." ?></b></p>
                    </div>
                    <br />
                    <hr class="rounder" />
                    <br />
                    <div class="flex mb-4 flex items-center justify-center">
                        <?php require('partials/cards.php') ?>
                    </div>
                </div>
            <?php endif ?>
    </main>
<?php require('partials/foot.php') ?>