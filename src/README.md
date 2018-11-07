php init

php yii migrate - Базовая миграция с создание таблицы user

php yii migrate --migrationPath=@yii/rbac/migrations/ - Создание таблиц для Rbac

php yii admin/create-role - Создание роли admin

php yii admin/create-user - Создание пользователя с ролью admin

php yii migrate - Остальные миграции

./yii migrate --migrationPath=@common/modules/i18n/migrations - Миграция создания таблиц переводов сообщений Yii::t()

./yii i18n/import @frontend/messages - Импорт переводов сайта