<?php

use yii\db\Schema;
use yii\db\Migration;

class m181107_144652_messageDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%message}}',
                           ["id", "language", "translation"],
                            [
    [
        'id' => 1,
        'language' => 'en',
        'translation' => 'English',
    ],
    [
        'id' => 3,
        'language' => 'en',
        'translation' => 'Русский',
    ],
    [
        'id' => 1,
        'language' => 'ro',
        'translation' => 'English',
    ],
    [
        'id' => 3,
        'language' => 'ro',
        'translation' => 'Русский',
    ],
    [
        'id' => 1,
        'language' => 'ru',
        'translation' => 'English',
    ],
    [
        'id' => 3,
        'language' => 'ru',
        'translation' => 'Русский',
    ],
    [
        'id' => 9,
        'language' => 'ru',
        'translation' => 'Автоматизированная информационая система «Государственный регистр государственных закупок» MTender - это мульти-платформенная электронная система закупок, состоящая из государственного веб-портала и центральной базы данных которая использует данные открытого типа (Open Data) и несколько частных электронных платформам, аккредитованы для поддержки и проведения электронных процедур торгов для государственных и частных клиентов.',
    ],
    [
        'id' => 4,
        'language' => 'en',
        'translation' => 'What is MTender',
    ],
    [
        'id' => 4,
        'language' => 'ro',
        'translation' => 'Ce este MTender',
    ],
    [
        'id' => 4,
        'language' => 'ru',
        'translation' => 'Что такое MTender',
    ],
    [
        'id' => 5,
        'language' => 'ro',
        'translation' => 'Ministerul Finanțelor al Republicii Moldova conduce o tranziție la achizițiile publice electronice pentru a asigura o utilizare mai transparentă și mai eficientă a bugetului de stat al Republicii Moldova. Noul serviciu guvernamental digital - MTender - va sprijini achizițiile publice de la planificarea achiziției până la plata pentru contractele de achiziții publice. Acesta va scurta timpul pentru licitații pentru instituțiile publice și timpul de așteptare pentru plăți pentru furnizori și contractori.',
    ],
    [
        'id' => 5,
        'language' => 'en',
        'translation' => 'The Ministry of Finance of the Republic of Moldova is leading a transition to digital public
                procurement to ensure more transparent and efficient spending of the state budget of the Republic of
                Moldova. New digital government service – MTender - will support public procurement from planning
                the purchase to payment for public contracts. It will shorten time for tendering for public bodies
                and waiting time for payment for suppliers and contractors.',
    ],
    [
        'id' => 5,
        'language' => 'ru',
        'translation' => 'Министерство Финансов Республики Молдова проводит переход на электронные государственные закупки с целью обеспечения более прозрачных и эффективных расходов национального бюджета Республики Молдова. Новая электронная государственная услуга - MTender - покрывает государственные закупки от планирования до оплаты договоров о государственных закупках. Это сократит время проведения торгов для государственных органов и время ожидания оплаты для поставщиков и подрядчиков.',
    ],
    [
        'id' => 7,
        'language' => 'ro',
        'translation' => 'Noul serviciu de achiziții publice complet electronic va oferi un acces mai bun la oportunitățile pentru comunitatea de afaceri, în special întreprinderile mici și mijlocii locale.',
    ],
    [
        'id' => 7,
        'language' => 'en',
        'translation' => 'On account of online and easy to participate tenders, the new fully digital procurement
                        service will offer better access to opportunities in public procurement for business
                        community, in particular local small and medium-sized enterprises.',
    ],
    [
        'id' => 7,
        'language' => 'ru',
        'translation' => 'Новая полностью электронная услуга закупок будет предлагать более широкий доступ к возможностям государственным закупок для делового сообщество, в частности местных малых и средних предприятий.',
    ],
    [
        'id' => 6,
        'language' => 'ro',
        'translation' => 'Cu serviciul digital MTender, toate licitațiile publice sunt accesibile online și fiecare decizie de achiziție publică este publicată în mod transparent online în timp real. Cetățenii pot urmări deciziile privind achizițiile publice și modul în care sunt cheltuiți banii plătitorilor de impozite.',
    ],
    [
        'id' => 6,
        'language' => 'en',
        'translation' => 'With MTender digital service, all public tenders are accessible online and every procurement
                        decision transparently published online in real time. Citizens can watch government
                        procurement decisions and how taxpayers money are spent on public services.',
    ],
    [
        'id' => 6,
        'language' => 'ru',
        'translation' => 'При использовании электронной услуги MTender все публичные торги доступны в режиме онлайн, и каждое решение о закупках публикуется в режиме реального времени. Граждане могут наблюдать за государственными закупками и как деньги налогоплательщиков расходуются на государственные услуги.',
    ],
    [
        'id' => 8,
        'language' => 'ro',
        'translation' => 'Pentru instituțiile publice, noul serviciu digital va aduce, de asemenea, o planificare îmbunătățită a cheltuielilor, achiziții mai rapide și mai calitative, ca urmare a procedurilor electronice de licitare care implică ”zero hârtie”.',
    ],
    [
        'id' => 8,
        'language' => 'en',
        'translation' => 'For public bodies, new digital service will also bring improved planning of spending,
                        quicker purchases and better-quality as a result of ‘zero paper’ electronic bidding
                        procedures.',
    ],
    [
        'id' => 8,
        'language' => 'ru',
        'translation' => 'Для государственных органов новая электронная услуга также будет способствовать более эффективному планированию расходов, более быстрым покупкам и повышению качества в результате проведения электронных торгов по принципу ”без бумаги”.',
    ],
    [
        'id' => 9,
        'language' => 'ro',
        'translation' => 'Sistemul informaţional automatizat “Registrul de stat al achiziţiilor publice” MTender este un sistem de achiziții electronice, alcătuit dintr-un portal web și o Unitate Centrală de Date de date de tip deschis (Open Data) și platformele acreditate din sectorul privat pentru a sprijini licitațiile desfășurate electronic pentru utilizatori și din sectorul public și din sectorul privat.',
    ],
    [
        'id' => 9,
        'language' => 'en',
        'translation' => 'The MTender is a multi-platform networking digital procurement service it, comprise a
                government-operated web portal and the Open Data central database unit and is networking with
                several commercial electronic platforms certified to support electronic tendering procedures for
                public sector and commercial clients.',
    ],
    [
        'id' => 2,
        'language' => 'ro',
        'translation' => 'Română',
    ],
    [
        'id' => 2,
        'language' => 'en',
        'translation' => 'Română',
    ],
    [
        'id' => 2,
        'language' => 'ru',
        'translation' => 'Română',
    ],
    [
        'id' => 10,
        'language' => 'ro',
        'translation' => 'Platforma electronica de achiziții este o platformă comercială electronică de achiziții publice, acreditată pentru conectarea cu MTender și oferă servicii de licitație electronică digitală atât clienților din sectorul public, cât și cumpărătorilor din sectorul privat. Fiecare platformă de achiziții MTender oferă un serviciu de asistență (Help Desk) pentru autorități contractante și operatori economici înregistrați pe această platformă pentru a accesa serviciile electronice ale MTender.',
    ],
    [
        'id' => 10,
        'language' => 'en',
        'translation' => ' The MTender networking electronic procurement platform is a commercial electronic platform,
                authorised and certified for networking with the MTender and providing digital electronic tendering
                services to public sector clients as well as commercial buyers. Each MTender networking platform is
                providing a help desk service to buyers and economic operators registered on this platform to access
                digital services of the MTender.',
    ],
    [
        'id' => 10,
        'language' => 'ru',
        'translation' => 'Электронная платформа закупок представляет собой коммерческую электронную платформу для закупок, аккредитованная для взаимодействия с MTender и предоставляющую электронные цифровые торги для клиентов государственного сектора, а также для частных покупателей. Каждая электронная платформа закупок MTender предоставляет справочную службу (help desk) закупающим органам и экономическим операторам, зарегистрированным на этой платформе, для доступа к электронным услугам MTender.',
    ],
    [
        'id' => 11,
        'language' => 'ro',
        'translation' => 'În prezent, la MTender sunt conectate următoarele platforme:',
    ],
    [
        'id' => 11,
        'language' => 'en',
        'translation' => 'Presently the MTender is networking with the following platforms:',
    ],
    [
        'id' => 11,
        'language' => 'ru',
        'translation' => 'В настоящее время MTender работает со следующими платформами:',
    ],
    [
        'id' => 12,
        'language' => 'ro',
        'translation' => 'Noutăți',
    ],
    [
        'id' => 12,
        'language' => 'en',
        'translation' => 'News',
    ],
    [
        'id' => 12,
        'language' => 'ru',
        'translation' => 'Новости',
    ],
    [
        'id' => 13,
        'language' => 'ro',
        'translation' => 'Conducerea prin exemplu',
    ],
    [
        'id' => 13,
        'language' => 'en',
        'translation' => 'Leading by example',
    ],
    [
        'id' => 13,
        'language' => 'ru',
        'translation' => 'Cледуя примеру',
    ],
    [
        'id' => 16,
        'language' => 'ro',
        'translation' => 'Proceduri',
    ],
    [
        'id' => 16,
        'language' => 'en',
        'translation' => 'Active',
    ],
    [
        'id' => 16,
        'language' => 'ru',
        'translation' => 'Активных',
    ],
    [
        'id' => 17,
        'language' => 'ro',
        'translation' => 'Active',
    ],
    [
        'id' => 17,
        'language' => 'en',
        'translation' => 'Procedures',
    ],
    [
        'id' => 17,
        'language' => 'ru',
        'translation' => 'Процедур',
    ],
    [
        'id' => 18,
        'language' => 'ro',
        'translation' => 'Încheiate',
    ],
    [
        'id' => 18,
        'language' => 'en',
        'translation' => 'Concluded',
    ],
    [
        'id' => 18,
        'language' => 'ru',
        'translation' => 'Заключенных',
    ],
    [
        'id' => 19,
        'language' => 'ro',
        'translation' => 'Contracte',
    ],
    [
        'id' => 19,
        'language' => 'en',
        'translation' => 'Contracts',
    ],
    [
        'id' => 19,
        'language' => 'ru',
        'translation' => 'Контрактов',
    ],
    [
        'id' => 20,
        'language' => 'ro',
        'translation' => 'Autorități',
    ],
    [
        'id' => 20,
        'language' => 'en',
        'translation' => 'Contractin',
    ],
    [
        'id' => 20,
        'language' => 'ru',
        'translation' => 'Закупающих',
    ],
    [
        'id' => 21,
        'language' => 'ro',
        'translation' => 'Contractante',
    ],
    [
        'id' => 21,
        'language' => 'en',
        'translation' => 'Entities',
    ],
    [
        'id' => 21,
        'language' => 'ru',
        'translation' => 'Организаций',
    ],
    [
        'id' => 22,
        'language' => 'ro',
        'translation' => 'Agenți',
    ],
    [
        'id' => 22,
        'language' => 'en',
        'translation' => 'Economic',
    ],
    [
        'id' => 22,
        'language' => 'ru',
        'translation' => 'Экономических',
    ],
    [
        'id' => 23,
        'language' => 'ro',
        'translation' => 'Economici',
    ],
    [
        'id' => 23,
        'language' => 'en',
        'translation' => 'Operators',
    ],
    [
        'id' => 23,
        'language' => 'ru',
        'translation' => 'Агентов',
    ],
    [
        'id' => 24,
        'language' => 'ro',
        'translation' => 'Economiile',
    ],
    [
        'id' => 24,
        'language' => 'en',
        'translation' => 'Total',
    ],
    [
        'id' => 24,
        'language' => 'ru',
        'translation' => 'Общая',
    ],
    [
        'id' => 25,
        'language' => 'ro',
        'translation' => 'Totale',
    ],
    [
        'id' => 25,
        'language' => 'en',
        'translation' => 'savings',
    ],
    [
        'id' => 25,
        'language' => 'ru',
        'translation' => 'Экономия',
    ],
    [
        'id' => 26,
        'language' => 'ro',
        'translation' => 'Alătura',
    ],
    [
        'id' => 26,
        'language' => 'en',
        'translation' => 'Join',
    ],
    [
        'id' => 26,
        'language' => 'ru',
        'translation' => 'Присоединиться',
    ],
    [
        'id' => 27,
        'language' => 'ro',
        'translation' => 'Planificarea Achizițiilor',
    ],
    [
        'id' => 27,
        'language' => 'en',
        'translation' => ' Procurement Planning',
    ],
    [
        'id' => 27,
        'language' => 'ru',
        'translation' => 'Планирование закупок',
    ],
    [
        'id' => 28,
        'language' => 'ro',
        'translation' => 'Buletinul Achizițiilor Publice',
    ],
    [
        'id' => 28,
        'language' => 'en',
        'translation' => 'Public Procurement Bulletin',
    ],
    [
        'id' => 28,
        'language' => 'ru',
        'translation' => 'Бюллетень государственных закупок',
    ],
    [
        'id' => 29,
        'language' => 'ro',
        'translation' => 'Registru Contractelor',
    ],
    [
        'id' => 29,
        'language' => 'en',
        'translation' => 'Contract Register',
    ],
    [
        'id' => 29,
        'language' => 'ru',
        'translation' => 'Реестр договоров',
    ],
    [
        'id' => 30,
        'language' => 'ro',
        'translation' => 'Toate drepturile rezervate',
    ],
    [
        'id' => 30,
        'language' => 'en',
        'translation' => 'All rights reserved',
    ],
    [
        'id' => 30,
        'language' => 'ru',
        'translation' => 'Все права защищены',
    ],
    [
        'id' => 31,
        'language' => 'ro',
        'translation' => 'Linia info',
    ],
    [
        'id' => 31,
        'language' => 'en',
        'translation' => 'Info Line',
    ],
    [
        'id' => 31,
        'language' => 'ru',
        'translation' => 'Информационная линия',
    ],
    [
        'id' => 32,
        'language' => 'ro',
        'translation' => 'Linia info',
    ],
    [
        'id' => 32,
        'language' => 'en',
        'translation' => 'Info Line',
    ],
    [
        'id' => 32,
        'language' => 'ru',
        'translation' => 'Информационная линия',
    ],
    [
        'id' => 35,
        'language' => 'ro',
        'translation' => 'meniul',
    ],
    [
        'id' => 35,
        'language' => 'en',
        'translation' => 'menu',
    ],
    [
        'id' => 35,
        'language' => 'ru',
        'translation' => 'меню',
    ],
    [
        'id' => 36,
        'language' => 'en',
        'translation' => 'Back',
    ],
    [
        'id' => 36,
        'language' => 'ru',
        'translation' => 'Назад',
    ],
    [
        'id' => 37,
        'language' => 'ro',
        'translation' => 'Principală',
    ],
    [
        'id' => 37,
        'language' => 'en',
        'translation' => 'Main',
    ],
    [
        'id' => 37,
        'language' => 'ru',
        'translation' => 'Главная',
    ],
    [
        'id' => 36,
        'language' => 'ro',
        'translation' => 'Înapoi',
    ],
]
        );
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%message}} CASCADE');
    }
}
