<!DOCTYPE html>
<html>
<body>

<?php
$data = [
    'Мастера' => [
        [
            'Никнейм'  => 'Nick',
            'Город'    => 'Москва',
            'Доставка' => 'Да'
        ],
        [
            'Никнейм'  => 'Чебурашка',
            'Город'    => 'Челябинск',
            'Доставка' => 'Нет'
        ],
        [
            'Никнейм'  => 'Black',
            'Город'    => 'Казань',
            'Доставка' => 'Нет'
        ]
    ],
    'Товары'  => [
        [
            'Наименование' => 'Бетон',
            'Цена'         => 100,
            'Мастер'       => 'Nick'
        ],
        [
            'Наименование' => 'Герб',
            'Цена'         => 150,
            'Мастер'       => 'Nick'
        ],
        [
            'Наименование' => 'Квадрат',
            'Цена'         => 799,
            'Мастер'       => 'Black'
        ]
    ]
];
?>

</body>
</html>
