##  Задание
Контроллеры:
 - [GroupController](/app/Http/Controllers/GroupController.php)
 - [StudentController](/app/Http/Controllers/StudentController.php)

Модели:
 - [Group](/app/Models/Group.php)
 - [Student](/app/Models/Student.php)

Миграции:
- [2021_04_10_141516_create_groups_table](/database/migrations/2021_04_10_141516_create_groups_table.php)
- [2021_04_10_141545_create_students_table](/database/migrations/2021_04_10_141545_create_students_table.php)

Сидеры:
- [GroupSeeder](/database/seeders/GroupSeeder.php)
- [StudentSeeder](/database/seeders/StudentSeeder.php)

## Вопросы
#### Для чего нужны миграции? Какую роль они играют или какую проблему решают?
  - Миграции нужны для того, чтобы создавать и изменять структуру таблиц в БД.
  - Миграции решают проблему совместимости между разными версиями БД.

#### Для чего нужен Eloquent ORM?
  - Eloquent ORM - это ORM, который предоставляет удобный человекопонятный интерфейс для работы с БД.
```php
$student = new Student(
    [
        'group_id' => $group,
        'surname' => $request->surname,
        'name' => $request->name,
    ]
);
$student->save();

$group_id = $request->group_id;
$students = Student::where('group_id', $group_id)
    ->orderBy('surname', 'asc')
    ->get();
$group = Group::find($group_id);
```