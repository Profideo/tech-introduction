<?php
    if (!empty($_POST)) {
        $dataFile = 'js/store/client/loadItems.json';
        $jsonContent = file_get_contents($dataFile);

        $postedElement = isset($_POST['firstname']) ? 'firstname' : 'lastname';

        $items = json_decode($jsonContent, true);
        foreach ($items['items'] as $index => $item) {
            if ((int) $item['id'] === (int) $_POST['id']) {
                $item[$postedElement] = $_POST[$postedElement];
                $items['items'][$index] = $item;
            }
        }

        file_put_contents($dataFile, json_encode($items, JSON_PRETTY_PRINT));
    }
?>