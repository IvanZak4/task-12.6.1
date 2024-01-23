<?php
$example_persons_array = [
    [
        'fullname' => 'Иванов Иван Иванович',
        'job' => 'tester',
    ],
    [
        'fullname' => 'Степанова Наталья Степановна',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Пащенко Владимир Александрович',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Громов Александр Иванович',
        'job' => 'fullstack-developer',
    ],
    [
        'fullname' => 'Славин Семён Сергеевич',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Цой Владимир Антонович',
        'job' => 'frontend-developer',
    ],
    [
        'fullname' => 'Быстрая Юлия Сергеевна',
        'job' => 'PR-manager',
    ],
    [
        'fullname' => 'Шматко Антонина Сергеевна',
        'job' => 'HR-manager',
    ],
    [
        'fullname' => 'аль-Хорезми Мухаммад ибн-Муса',
        'job' => 'analyst',
    ],
    [
        'fullname' => 'Бардо Жаклин Фёдоровна',
        'job' => 'android-developer',
    ],
    [
        'fullname' => 'Шварцнегер Арнольд Густавович',
        'job' => 'babysitter',
    ],
];

echo '<ol>';

function getPartsFromFullname(){
    global $example_persons_array;
    for ($i = 0; $i < 11; $i++) {
        $stringToArray = explode(' ', $example_persons_array[$i]['fullname']);
        $keys = ['surname', 'name', 'patronomyc'];
        $b = array_combine($keys, $stringToArray);
        echo "<li>";
        print_r($b);
    };
};

getPartsFromFullname();

echo '</ol>';
echo "<br>";

echo '<ol>';

function getFullnameFromParts(){
    global $example_persons_array;
    for ($i = 0; $i < 11; $i++) {
        $stringToArray = explode(' ', $example_persons_array[$i]['fullname']);
        $c = $stringToArray[0] . ' '. $stringToArray[1] .' '. $stringToArray[2];
        echo "<li>";
        print_r($c);
    };
}

getFullnameFromParts();

echo '</ol>';
echo "<br>";

echo '<ol>';
function getShortName(){
    global $example_persons_array;
    for ($i = 0; $i < 11; $i++) {
        $stringToArray = explode(' ', $example_persons_array[$i]['fullname']);
        $surname = mb_strcut($stringToArray[0],0,3);
        $c = $stringToArray[1] .' '. $surname . '.';
        echo "<li>";
        print_r($c);
};
}

getShortName();

// оставшиеся функции будут доработаны