<?php

use yii\db\Schema;
use yii\db\Migration;

class m181107_144938_newsDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%news}}',
                           ["id", "slug", "date", "image", "title_en", "title_ro", "title_ru", "body_ro", "body_en", "body_ru", "meta_title_ro", "meta_title_en", "meta_title_ru", "meta_description_ro", "meta_description_en", "meta_description_ru"],
                            [
    [
        'id' => 3,
        'slug' => 'news3',
        'date' => '2018-11-06',
        'image' => '5be1d2a9120ef.jpg',
        'title_en' => 'News3',
        'title_ro' => 'news1',
        'title_ru' => 'news1',
        'body_ro' => '<p>
În perioada 22-26 octombrie 2018, Ministerul Finanțelor al Republicii Moldova și Președintele Parlamentulu al Republicii Moldova găzduiesc Seminarul Regional al Organizației Mondiale a Comerțului pentru Părțile Acordul privind achizițiile publice (AAP) și Guvernele cu Statut de Observator AAP din Europa Centrală, Balcanii de Vest, Caucaz și Asia Centrală, inclusiv o sesiune pe tema achizițiile publice digitale în Republica Moldova. Înregistrați-vă pentru a participa la ședința PNUD privind Guvernarea Deschisă și Cheltuielile Publice din 22 octombrie.
</p>',
        'body_en' => '<p>On 22-26 October 2018, the Ministry of Finance of Moldova and the Speaker of the Parliament of Moldova are hosting the WTO Regional Seminar for GPA Parties and Observer Governments from Central Europe, Western Balkans, Caucasus and Central Asia, including a session on digital public procurement in Moldova. Register to attend the UNDP Open Government and Public Spending session on 22 October.</p>
',
        'body_ru' => '<p>
22-26 октября 2018 года Министерство Финансов Республики Молдова и Председатель Парламента Республики Молдовы проводят Региональный семинар Всемирной торговой организации для Сторон Соглашения о государственных закупках ВТО и правительств стран-наблюдателей из Центральной Европы, Западных Балкан, Кавказа и Центральной Азии, включая сессию по электронным государственным закупкам в Молдове. Зарегистрируйтесь для участия в сессии ПРООН об открытом правлений и общественных расходах 22 октября.
</p>',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
    ],
    [
        'id' => 2,
        'slug' => 'news2',
        'date' => '2018-11-06',
        'image' => '5be1d27da8ebd.jpg',
        'title_en' => 'News2',
        'title_ro' => 'News2',
        'title_ru' => 'News2',
        'body_ro' => '<p>În perioada 22-26 octombrie 2018, Ministerul Finanțelor al Republicii Moldova și Președintele Parlamentulu al Republicii Moldova găzduiesc Seminarul Regional al Organizației Mondiale a Comerțului pentru Părțile Acordul privind achizițiile publice (AAP) și Guvernele cu Statut de Observator AAP din Europa Centrală, Balcanii de Vest, Caucaz și Asia Centrală, inclusiv o sesiune pe tema achizițiile publice digitale în Republica Moldova. Înregistrați-vă pentru a participa la ședința PNUD privind Guvernarea Deschisă și Cheltuielile Publice din 22 octombrie.</p>',
        'body_en' => '<p>On 22-26 October 2018, the Ministry of Finance of Moldova and the Speaker of the Parliament of Moldova are hosting the WTO Regional Seminar for GPA Parties and Observer Governments from Central Europe, Western Balkans, Caucasus and Central Asia, including a session on digital public procurement in Moldova. Register to attend the UNDP Open Government and Public Spending session on 22 October.</p>
',
        'body_ru' => '<p>
22-26 октября 2018 года Министерство Финансов Республики Молдова и Председатель Парламента Республики Молдовы проводят Региональный семинар Всемирной торговой организации для Сторон Соглашения о государственных закупках ВТО и правительств стран-наблюдателей из Центральной Европы, Западных Балкан, Кавказа и Центральной Азии, включая сессию по электронным государственным закупкам в Молдове. Зарегистрируйтесь для участия в сессии ПРООН об открытом правлений и общественных расходах 22 октября.
</p>',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
    ],
    [
        'id' => 1,
        'slug' => 'news1',
        'date' => '2018-11-06',
        'image' => '5be1d256b9a34.jpg',
        'title_en' => 'news1',
        'title_ro' => 'news1',
        'title_ru' => 'news1',
        'body_ro' => '<p>
Ministerul Finanțelor al Republicii Moldova introduce primele proceduri electronice de achiziții publice de licitație deschisă, cererea ofertelor de prețuri, negocierea fără publicarea prealabilă a unui anunț de participare. Ghidurile privind procedurile electronice de achiziții publice vor fi disponibile în scurt timp de la Agenția Achizițiilor Publice.
</p>',
        'body_en' => '<p>New types of electronic tendering procedures are becoming available on the MTender, to suit different types of contracts and serve different public and commercial buyers, including state-owned enterprises. The Ministry of Finance of Moldova is first introducing electronic public procurement procedures of open tender, request for quotation, and negotiated procedure without publication of contract notice.</p>
',
        'body_ru' => '<p>Министерство Финансов Республики Молдова первым вводит процедуру электронных государственных закупок для следующих процедур: открытые торги, запрос ценовых оферт, переговоры без предварительного опубликования объявления на участие. Руководство по электронным процедурам государственных закупок будут доступны в ближайшее время от Агентства Государственных Закупок.</p>',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
    ],
]
        );

        $this->execute('ALTER SEQUENCE news_id_seq RESTART WITH 6;');
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%news}} CASCADE');
    }
}
