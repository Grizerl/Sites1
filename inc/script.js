document.addEventListener('DOMContentLoaded', function () {
    // Змінна для посилання на елемент select
    var countrySelect = document.getElementById('connection');

    // Список країн (ви можете замінити його на реальний список країн)
    var countries = ['Відкрити список', 'Маю власні авто', 'Хочу інвестувати'];

    // Додавання кожної країни до випадаючого списку
    countries.forEach(function (country) {
        var option = document.createElement('option');
        option.value = country;
        option.text = country;
        countrySelect.add(option);
    });
});

document.addEventListener('DOMContentLoaded', function () {
    // Змінна для посилання на елемент select
    var countrySelect = document.getElementById('country');

    // Список країн (ви можете замінити його на реальний список країн)
    var countries = ['Відкрити список', 'Киев ', 'Ха́рьков', 'Днепр ', 'Оде́сса','Львов', 'Запоро́жье ', 'Ро́вно', 'Луцк ', 
    'Ни́кополь','У́жгород', 'Крамато́рск ', 'Керчь  ', 'Терно́поль','Кропивни́цкий', 'Ива́но-Франко́вск  ', 'Су́мы ', 'Жито́мир '];

    // Додавання кожної країни до випадаючого списку
    countries.forEach(function (country) {
        var option = document.createElement('option');
        option.value = country;
        option.text = country;
        countrySelect.add(option);
    });
});

