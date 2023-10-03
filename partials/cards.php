<?php foreach($district->current_legislators as $legislator): ?>
    <div class="max-w-sm rounded overflow-hidden shadow-lg p-10 m-2">
        <p style="font-size:24px"><b><?=$legislator->bio->first_name ?? 'N/A'?> <?=$legislator->bio->last_name ?? 'N/A' ?></b></p>
        <p><i><?= ucfirst($legislator->type) ?? 'N/A' ?> - <?= $legislator->bio->party ?? 'N/A' ?></i></p>
        <br />
        <p><?= "<b>Birthday: </b>" . $legislator->bio->birthday ?? 'N/A' ?></p>
        <?php if ($legislator->bio->gender === "M"): ?>
            <p><b>Gender:</b> Male</p>
        <?php elseif ($legislator->bio->gender === "F"): ?>
            <p><b>Gender:</b> Female</p>
        <?php else: ?>
            <p><b>Gender:</b> N/A</p>
        <?php endif ?> 
        <br />
        <p><?= "<b>Address: </b><br/>" . $legislator->contact->address ?></p>
        <br />
        <?= "<b>Phone: </b>" . $legislator->contact->phone ?>
        <br />
        <br />
        <div class="flex flex-col space-y-4">
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full"><a href=<?= $legislator->contact->url ?>>Website</a></button>
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full"><a href=<?= "https://www.twitter.com/" . $legislator->social->twitter ?>>Twitter</a></button>
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full"><a href=<?= "https://www.facebook.com/" . $legislator->social->facebook ?>>Facebook</a></button>
            <button class="bg-gray-500 hover:bg-gray-700 text-white font-bold py-2 px-4 rounded-full"><a href=<?= "https://www.youtube.com/channel/" . $legislator->social->youtube_id ?>>Youtube</a></button>
        </div>
    </div>
    <br />
    <br /> 
<?php endforeach; ?>
