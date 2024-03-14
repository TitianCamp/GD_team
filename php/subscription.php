<?php

const SUBSCRIPTIONS_FILE = "../GD/storage/subscriptions.ser";
/**
* Дістає список із усіх підписок з файлу
* @return array
*/

function allSubscriptions() {
    $fileContent = file_get_contents(SUBSCRIPTIONS_FILE);
    $subscriptions = unserialize($fileContent);
    return $subscriptions ? $subscriptions : [];
}

/**
* Додає запис нової підписки у файл
* @param $params
*/

function addSubscription($params) {
    $subscriptions = allSubscriptions();
    $subscriptions[] = $params;
    if (file_put_contents(SUBSCRIPTIONS_FILE, serialize($subscriptions)) === false) {
        die("Помилка запису у файл");
    }
}
