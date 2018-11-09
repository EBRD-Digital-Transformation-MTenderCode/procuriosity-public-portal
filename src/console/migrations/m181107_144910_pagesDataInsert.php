<?php

use yii\db\Schema;
use yii\db\Migration;

class m181107_144910_pagesDataInsert extends Migration
{

    public function init()
    {
        $this->db = 'db';
        parent::init();
    }

    public function safeUp()
    {
        $this->batchInsert('{{%pages}}',
                           ["id", "slug", "title_ro", "title_en", "title_ru", "body_ro", "body_en", "body_ru", "meta_title_ro", "meta_title_en", "meta_title_ru", "meta_description_ro", "meta_description_en", "meta_description_ru", "menu", "content_en", "content_ro", "content_ru"],
                            [
    [
        'id' => 16,
        'slug' => 'accreditation',
        'title_ro' => 'Comisia de acreditare',
        'title_en' => 'Accreditation Committee',
        'title_ru' => 'Комиссия по аккредитации',
        'body_ro' => '',
        'body_en' => '',
        'body_ru' => '',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '',
        'content_ro' => '',
        'content_ru' => '',
    ],
    [
        'id' => 18,
        'slug' => 'faq',
        'title_ro' => 'Întrebări frecvente',
        'title_en' => 'FAQ',
        'title_ru' => 'Вопросы-ответы',
        'body_ro' => '',
        'body_en' => '',
        'body_ru' => '',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '',
        'content_ro' => '',
        'content_ru' => '',
    ],
    [
        'id' => 19,
        'slug' => 'main-page',
        'title_ro' => '',
        'title_en' => 'main page',
        'title_ru' => '',
        'body_ro' => '',
        'body_en' => '',
        'body_ru' => '',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 0,
        'content_en' => '',
        'content_ro' => '',
        'content_ru' => '',
    ],
    [
        'id' => 13,
        'slug' => 'legal-framework',
        'title_ro' => 'Legislația',
        'title_en' => 'Legal framework',
        'title_ru' => 'Законодательство',
        'body_ro' => '<h3>Legi</h3>

<ul style="list-style-type:none">
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=360122" target="_blank">Legea privind achizițiilor publice;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377584" target="_blank">Regulamentului privind acreditarea platformelor electronice de achiziții &icirc;n cadrul Sistemului informațional automatizat &bdquo;Registrul de stat al achizițiilor publice&rdquo; (MTender);</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377585" target="_blank">Regulamentul privind modul de ținere a Registrului de stat al achizițiilor publice format de Sistemul informațional automatizat;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377586" target="_blank">Regulamentul privind achiziția bunurilor și serviciilor prin cererea ofertelor de prețuri;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377587" target="_blank">Documentației standard pentru realizarea achizițiilor publice de bunuri;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377588" target="_blank">Documentației standard pentru realizarea achizițiilor publice de servicii;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377590" target="_blank">Documentației standard pentru realizarea achizițiilor publice de lucrări;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377589" target="_blank">Documentației standard pentru realizarea achizițiilor publice de bunuri și servicii prin cererea ofertelor de prețuri;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377591" target="_blank">Formularul Standard al Documentului Unic de Achizitii European (DUAE).</a></li>
</ul>

<h3>Termenii de utilizare a MTender</h3>

<ul>
	<li><a href="/docs/ro_terms-of-use.pdf" target="_blank">Termenii de utilizare a MTender</a></li>
	<li><a href="/docs/ro_minimum-declaration.pdf" target="_blank">Declarația cu privire la conformarea cu cerințelor obligatorii minime</a></li>
	<li><a href="/docs/ro_ESPD.pdf" target="_blank">MTender Declarația DUAE - depusă numai de c&acirc;știgător</a></li>
</ul>
',
        'body_en' => '<h3>Laws</h3>

<ul style="list-style-type:none">
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=365891&amp;lang=1" target="_blank">Law on public procurement;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377584" target="_blank">The Regulation on NEPP accreditation within the SIA RSAP (MTender system);</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377585" target="_blank">The Regulation on the use of the SIA RSAP MTender system;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377586" target="_blank">The Regulation on procurement of goods and services through request for price quotation;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377587" target="_blank">Standard Bidding Documents for public procurement of Goods;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377588" target="_blank">Standard Bidding Documents for public procurement of services;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377590" target="_blank">Standard Bidding Documents for public procurement of works;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377589" target="_blank">Standard Bidding Documents for public procurement through request for price quotation;</a></li>
	<li><a href="http://lex.justice.md/index.php?action=view&amp;view=doc&amp;lang=1&amp;id=377591" target="_blank">The standard template of the European Single Procurement Document (ESPD).</a></li>
</ul>

<h3>Terms of use of the MTender</h3>

<ul style="list-style-type:none">
	<li><a href="https://mtender.gov.md/docs/en_terms-of-use.pdf" target="_blank">Terms of use of the MTender</a></li>
	<li><a href="https://mtender.gov.md/docs/en_minimum-declaration.pdf" target="_blank">Template declaration on compliance with mandatory minimum requirements for economic operators</a></li>
	<li><a href="https://mtender.gov.md/docs/en_ESPD.pdf" target="_blank">Template MTender ESPD Declaration - to be submitted by the winner of the tender</a></li>
</ul>
',
        'body_ru' => '<h3>Законы</h3>

<ul>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=360122&amp;lang=2" target="_blank">Закон о государственных закупках;</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377584&amp;lang=2" target="_blank">Положения об аккредитации электронных платформ закупок в рамках Автоматизированной информационной системы &laquo;Государственный регистр государственных закупок&raquo; (MTender);</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377585&amp;lang=2" target="_blank">Положения о порядке ведения Государственного регистра государственных закупок, созданного Автоматизированной информационной системой &laquo;Государственный регистр государственных закупок&raquo; (MTender);</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377586&amp;lang=2" target="_blank">Положения о закупке товаров и услуг путем запроса ценовых оферт;</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377587&amp;lang=2" target="_blank">Стандартная документация для проведения государственных закупок товаров;</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377588&amp;lang=2" target="_blank">Стандартная документация для проведения государственных закупок услуг;</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377590&amp;lang=2" target="_blank">Стандартной документация для проведения государственных закупок работ;</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377589&amp;lang=2" target="_blank">Стандартная документация для проведения государственных закупок товаров и услуг путем запроса ценовых оферт;</a></li>
	<li><a href="http://lex.justice.md/viewdoc.php?action=view&amp;view=doc&amp;id=377591&amp;lang=2" target="_blank">Стандартный формуляр Единого европейского документа закупок.</a></li>
</ul>

<h3>&nbsp;</h3>
',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '',
        'content_ro' => '',
        'content_ru' => '',
    ],
    [
        'id' => 15,
        'slug' => 'join-mtender',
        'title_ro' => 'Aderă la MTender',
        'title_en' => 'Join the MTender',
        'title_ru' => 'Присоединяйтесь к MTender',
        'body_ro' => '<p>MTender este un parteneriat &icirc;ntre Ministerul Finanțelor și platformele electronice din sectorul privat creat pentru a furniza &icirc;n colaborare servicii de achiziții publice electronice către cumpărătorii din sectorul public și privat din Moldova.</p>

<p>Serviciul MTender susține licitațiile desfășurate electronic și contractele online. &Icirc;n viitor (aproapiat) va oferi cumpărături online și plăți online securizate.</p>

<p>MTender este, de asemenea, o comunitate de părți interesate - conectează &icirc;ntreprinderile, societatea civilă și guvernul &icirc;n cadrul activității de cooperare pentru a furniza servicii publice de calitate cetățenilor din Moldova.</p>
',
        'body_en' => '<p>The MTender service is a partnership between the Ministry of Finance and commercial electronic platforms formed to provide collaboratively digital procurement services to public sector and commercial buyers in Moldova.</p>

<p>The MTender service supports electronic tendering and online contracts. In the (near) future it will offer an online shopping and secure online payments.</p>

<p>MTender is also a community of stakeholders &ndash; it connects business, the civil society and the government within cooperative work to deliver quality public services to citizens of Moldova.</p>
',
        'body_ru' => '<p>MTender является партнерством между Министерством Финансов и частными электронными платформами закупок созданными для предоставления совместных цифровых услуг по закупкам государственному сектору и частным покупателям в Молдове.</p>

<p>Услуга MTender поддерживает электронные торги и онлайн-договора. В (ближайшем) будущем он будет предлагать онлайн-покупки (online shopping) и безопасные онлайн-платежи.</p>

<p>MTender также является сообществом участников рынка - оно объединяет бизнес, гражданское общество и правительство в рамках совместной работы по предоставлению качественных государственных услуг гражданам Молдовы.</p>
',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '<div class="el-container">
<div class="static-join__cards">
<div class="static-join__card">
<div class="static-join__img static-join__img_ico1">&nbsp;</div>

<div class="static-join__title">Become a buyer</div>

<div class="static-join__text">The MTender digital service is available free of charge to public sector and commercial buyers in Moldova. Commercial buyers may use the MTender services for any type of purchase and when they want to sign an online contract. public sector entities referred to in the Public Procurement Law No 131 starting from 1 October 2018 are required to use the MTender to conduct electronic public procurement and sign electronic contracts.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico2">&nbsp;</div>

<div class="static-join__title">Become a supplier</div>

<div class="static-join__text">It is easy to bid online! Register on the MTender and bid for contracts. Instruction how to register is provided by each MTender networking platform. Any economic operator who successfully registered on the MTender and accepted the terms of use is eligible to bid in any online commercial tender. To bid for public contracts the economic operators are required to register on the MTender, accept the terms of use and confirm that they comply with mandatory minimum requirements for economic operators.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico3">&nbsp;</div>

<div class="static-join__title">Become a MTender networking platform</div>

<div class="static-join__text">The MTender is open to new partners! Any interested e-commerce operator should contact the Ministry of Finance, find out about digital service quality and security requirements and complete the certification process to offer digital procurement services on the MTender.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico4">&nbsp;</div>

<div class="static-join__title">Become a MTender watchdog</div>

<div class="static-join__text">Passionate about quality of public services? Want to understand how government spends money and monitor quality of public services purchased by the government? Join the MTender civil society network and become the MTender watchdog. The European Union Delegation to Moldova, the EBRD Civil Society Unit, the UNDP and the World Bank offer regular grants to support civil society initiatives.</div>
</div>
</div>
</div>
',
        'content_ro' => '<div class="el-container">
<div class="static-join__cards">
<div class="static-join__card">
<div class="static-join__img static-join__img_ico1">&nbsp;</div>

<div class="static-join__title">Deveniți cumpărător</div>

<div class="static-join__text">Serviciul digital MTender este disponibil gratuit pentru cumpărătorii din sectorul public și privat din Moldova. Cumpărătorii din sectorul privat pot utiliza serviciile MTender pentru orice tip de cumpărare și atunci c&acirc;nd doresc să semneze un contract online. Autorități contractante &icirc;ncep&acirc;nd cu 1 octombrie 2018 sunt obligate să utilizeze MTender pentru a efectua achiziții publice electronice și pentru a semna contracte electronice</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico2">&nbsp;</div>

<div class="static-join__title">Deveniți Furnizor</div>

<div class="static-join__text">Este ușor să participi la achiziții publice online! &Icirc;nregistrați-vă pe MTender și licitați pentru contracte. Instrucțiunile de &icirc;nregistrare sunt furnizate de fiecare platformă electronica de achiziție MTender.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico3">&nbsp;</div>

<div class="static-join__title">Deveniți o Platformă Electronică de Achiziții MTender</div>

<div class="static-join__text">MTender este deschisă noilor parteneri! Orice operator de comerț electronic interesat trebuie să contacteze Ministerul Finanțelor, să afle despre nivelul necesar pentru dezvoltarea serviciului electronic și cerințele de securitate și să finalizeze cu succes procesul de acreditare cu succes pentru a oferi servicii de achiziții electronice pe MTender.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico4">&nbsp;</div>

<div class="static-join__title">Deveniți observator MTender</div>

<div class="static-join__text">Pasionați de calitatea serviciilor publice? Doriți să &icirc;nțelegeți modul &icirc;n care guvernul cheltuie banii și să monitorizați calitatea serviciilor publice achiziționate de guvern? Alăturați-vă rețelei societății civile MTender și deveniți observatorul MTender. Delegația Uniunii Europene &icirc;n Moldova, Unitatea Societății Civile a BERD, PNUD și Banca Mondială oferă granturi periodice pentru a sprijini inițiativele societății civile.</div>
</div>
</div>
</div>
',
        'content_ru' => '<div class="el-container">
<div class="static-join__cards">
<div class="static-join__card">
<div class="static-join__img static-join__img_ico1">&nbsp;</div>

<div class="static-join__title">Станьте покупателем</div>

<div class="static-join__text">Электронная услуга MTender предоставляется бесплатно государственному сектору и частным покупателям в Молдове. Частные покупатели могут использовать услуги MTender для любого типа покупки и когда они хотят подписать онлайн-договора. Закупающие органы, упомянутые в Законе о государственных закупках но. 131 с 03.07.2015, начиная с 1 октября 2018 года, должны использовать MTender для проведения электронных государственных закупок и для того чтобы подписывать электронные договора государственных закупках.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico2">&nbsp;</div>

<div class="static-join__title">Станьте поставщиком</div>

<div class="static-join__text">Легко участвовать в государственных закупках онлайн! Зарегистрируйтесь на MTender и предложите оферту в одном из объявленных торгов. Инструкции по регистрации предоставляются каждой электронной платформой закупок MTender. Чтобы подать оферту на государственные договора, экономические операторы должны зарегистрироваться на MTender и дать согласие на условия использования и обязательные минимальные требования для экономических операторов.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico3">&nbsp;</div>

<div class="static-join__title">Станьте электронной платформой закупок MTender</div>

<div class="static-join__text">MTender открыт для новых партнеров! Любой заинтересованный оператор электронной коммерции должен связаться с Министерством Финансов, узнать о требованиях к качеству и безопасности цифровых услуг и завершить процесс аккредитации, чтобы предлагать услуги электронных закупок на MTender.</div>
</div>

<div class="static-join__card">
<div class="static-join__img static-join__img_ico4">&nbsp;</div>

<div class="static-join__title">Стать наблюдателем MTender</div>

<div class="static-join__text">Заинтересованы по поводу качества общественных услуг? Хотите понять, как правительство тратит деньги и контролировать качество государственных услуг, приобретаемых правительством? Присоединитесь к сети гражданского общества MTender и станьте наблюдателем MTender. Делегация Европейского союза в Молдове, Группа гражданского общества ЕБРР, ПРООН и Всемирный банк предлагают регулярные гранты для поддержки инициатив гражданского общества.</div>
</div>
</div>
',
    ],
    [
        'id' => 12,
        'slug' => 'register',
        'title_ro' => 'Înregistrare',
        'title_en' => ' Register',
        'title_ru' => 'Регистрация',
        'body_ro' => '<p>Operatorii economici se &icirc;nregistrează &icirc;n SIA RSAP MTender pentru a participa și să c&acirc;știge contracte &icirc;n licitații desfășurate electronic, iar cumpărătorii din sectorul public și privat se &icirc;nregistrează pentru publicarea oportunităților de achiziții și atribuirea contractelor.</p>

<p><u>&Icirc;ncep&acirc;nd cu data de 1 octombrie 2018 </u>instituțiile din sectorul public din Moldova sunt obligate să planifice achiziții, să selecteze furnizori, să semneze și să execute contracte electronice folosind procedurile online de pe MTender.</p>

<p>&Icirc;nregistrarea și utilizarea sistemului MTender este gratuită pentru autorități contractante.</p>

<p>Vă rugăm să vă &icirc;nregistrați pe orice platforme electronice de achiziții conectată la Unitatea de dtae centrală a SIA RSAP MTender: <a href="https://achizitii.md/" target="_blank">Achizitii</a>, <a href="https://e-licitatie.md/" target="_blank">E-licitatie</a> și <a href="https://yptender.md/" target="_blank">YPTender</a>. Toate platformele electronice de achiziții MTender furnizează un serviciu de asistență (help desk) pentru a asista cumpărătorii și furnizorii interesați de oportunitățile de achiziții.</p>

<p>Puteți utiliza diferite platforme electronice MTender pentru fiecare licitație pe care o publicați sau la care participați. Pentru a utiliza serviciul electronic al MTender este suficient să vă &icirc;nregistrați și să acceptați termenii de utilizare a serviciului.</p>
',
        'body_en' => '<p>The economic operators register on the MTender to participate and win contracts in electronic tenders, and public sector and commercial buyers register to advertise procurement opportunities and award contracts.</p>

<p><u>Starting from 1 October 2018</u> public sector bodies in Moldova are required to plan procurement, select suppliers, sign and execute electronic contracts using online procedures on the MTender.</p>

<p>Registration and use of the MTender is free of charge for buyers.</p>

<p>Please register on any electronic platform networking with the MTender: <a href="https://achizitii.md/" target="_blank">Achizitii</a>, <a href="https://e-licitatie.md/" target="_blank">E-licitatie</a> and <a href="https://yptender.md/" target="_blank">YPTender</a>.</p>

<p>All MTender networking platforms are providing a help desk to assist buyers and suppliers interested in procurement opportunities.</p>

<p>You may use different MTender electronic platform for each tender you advertise or participate in. To use digital service of the MTender it is enough to register and accept terms of use of the service.</p>
',
        'body_ru' => '<p>Экономические операторы регистрируются в АИС ГРГЗ MTender для участия и заключения договоров в электронных закупках, а государственные и частные покупатели регистрируются для объявления возможностей закупок и заключения договоров.</p>

<p><u>С 1 октября 2018 года </u>органы государственного сектора в Молдове обязаны планировать закупки, выбирать поставщиков, подписывать и выполнять электронные договора с использованием онлайн-процедур на MTender.</p>

<p>Регистрация и использование MTender бесплатно для закупающих органов.</p>

<p>Пожалуйста, зарегистрируйтесь на любой электронной платформе закупок MTender: <a href="https://achizitii.md/" target="_blank">Achizitii</a>, <a href="https://e-licitatie.md/" target="_blank">E-licitatie</a> и <a href="https://yptender.md/" target="_blank">YPTender</a>. Все электронные платформы закупок MTender предоставляют справочную службу (help desk), чтобы помочь покупателям и поставщикам, заинтересованным в возможностях закупок.</p>

<p>Вы можете использовать любую другую платформу MTender для каждого торга которого вы опубликуете или участвуете. Для использования электронной услуги MTender достаточно зарегистрироваться и дать согласие на условия использования услуги.</p>
',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '',
        'content_ro' => '',
        'content_ru' => '',
    ],
    [
        'id' => 17,
        'slug' => 'for-civil',
        'title_ro' => 'Pentru Societatea Civilă',
        'title_en' => 'For Civil Society',
        'title_ru' => 'Для гражданского общества',
        'body_ro' => '<p>&Icirc;ntr-o economia de piață concurența, accesul egal și transparența procedurilor de achiziții publice conduc la scăderea prețurilor, creșterea calității și la prestarea de servicii publice de o calitate mai bună. Presiunea ridicată asupra guvernelor de a folosi eficient banii contribuabililor pentru prestarea de servicii publice prin reducerea cheltuielilor publice reprezintă un aspect cheie al achizițiilor publice. De asemenea, este important ca ofițerii de achiziții responsabili cu achiziționarea de bunuri, servicii și lucrări pentru sectorul public să respecte banii contribuabililor și să &icirc;și &icirc;ndeplinească sarcinile astfel &icirc;nc&acirc;t cetățenii să poată avea &icirc;ncredere &icirc;n profesionalismul și onestitatea lor &icirc;n cheltuirea fondurilor publice.</p>
',
        'body_en' => '<p>In marker Become a buyer economy competition, equal access and transparent procurement procedures result in lower prices and higher quality and provide better quality public services. With high pressure on governments to efficiently use taxpayers&rsquo; money for delivering public services reducing the cost of public spending is a key aspect of public procurement. It is also important that procurement officers responsible for purchasing goods, services and works for public sector respect taxpayers&rsquo; money and execute their duties in such a way that citizens can trust their professionalism and honesty in spending public funds.</p>
',
        'body_ru' => '<p>В конкурентной борьбе рыночной экономики равный доступ и прозрачные процедуры закупок приводят к снижению цен и повышению качества и, следовательно, к повышению эффективности затрат за счет предоставления своевременных и качественных государственных услуг.</p>
',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '<div class="el-container">
<div class="static-for-civil">
<p>Civil Society has the power to influence political, economic or public interest decisions, serving to monitor the work of government and public institutions and to take an attitude towards policies that are contrary to the citizen interests or in case of power abuse.</p>

<p>Every citizen and civil society organization shall be given an unrestricted access to public procurement information. Transparency of public procurement information can be easily and inexpensively achieved by implementing digital public procurement systems that by default use Open Data to provide an open access to public procurement information.</p>

<p>Building on global best practice, the MTender System is developed to satisfy <a href="https://www.open-contracting.org/" target="_blank">(Advanced Open Contracting Data Standards, opencontracting.org)</a>&nbsp;and enables open access to public procurement information to all citizens of Moldova and local Civil Society organizations.</p>

<p>Thanks to this approach, every citizen is able to use information provided by the MTender System to monitor how government is undertaking public duties and whether principles of fair competition and value for money in public procurement are respected in Moldova.</p>

<p>Upon its completion, the MTender System will provide the Civil Society with dedicated monitoring portal to provide feedback to Contracting Authorities, discuss specific procurements, assess quality of public contract delivery and submit a review request to enforcement bodies when necessary.</p>

<p><strong>Recognizing the value of electronic procurement for civil society in Moldova, piloting of the MTender System is supported by the following non-governmental organizations:</strong></p>

<div class="organizations">
<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAMAAAAAoCAMAAACfFQXaAAABxVBMVEX///+/Hzu8EzG+Gzi7ES++Gja/HTq9FzS7EC26DiwqKirz8/P99fa9FTL//v7+/f0nJyfJQFf77/H34uU8PDzEMErq6uq6Cym5CCZUVFT99vjFM0xERERAQEAkJCT39/fn5+f++vr45ejvx83ZeIlRUVH8/Pzrt8DGNk/Nzc3PVWqurq7AIj719fX56exkZGQ0NDT5+fn019zkoKzdiJfXcYJ4eHhgYGDBJkA5OTkwMDC1tbXMSmBcXFwhISHs7OzhlqJKSkr66+323+PR0dEyMjLf39/GxsapqaltbW02Njb88vR0dHRpaWnHOVHDLUfw8PDk5OTNTmMtLS3u7u7a2trz1NnuwMjBwcHjm6eWlpZxcXHRXXFXV1caGhr12t7U1NTxzdPps7zorbd9fX3UZHfCKUTy0NbvxMvJycnmpK/chZSEhITWbH7IO1ROTk6+vr7nqLPgkp+cnJyAgIC3AyL23OHX19fwytDsvMTfjZvYdYVmZmbDLEaSkpLVaHvc3NygoKDei5nbgI/LRl3KQ1raeorSYHPOU2ikpKT45+rDw8O5ubn77O/Z2dmNjY2JiYnQWW7h4eHgj5yMjIzafIyPj48s8/YJAAAMsUlEQVRYw9SVi2tSURjAv/O851RXc2b34iJSI23ZKh9xWVY2e49cWMwKa23mA2WSo8V0jEDXtoqgiP7fPPfqUltQEUE/wef13O93vseBEQILzXSzMgf/K9UCF0KQXPw9/I8srnBJeO8hqGd1Gv435r6UBeNYRxrtvdDJRBD+NYFZb3AC/pB8TjKky7fx9dpn1nurSV/69fgNat3EHvUvf7nOvPGdSLns6Vb/qHqSnCIiyu1pFWd+JSoI0oSvG4NhDqXW5B5rpAJ/ysd0+kseRmlmhdSZhiVJ/nbuJxKbghFBNjLg4F5IWlQjurDCIwJTAiENOxjozwUWsFxLwghtirm9NNHMt174LUINoSGMp0ZyF/vqk5ibOz8INHIpm7e7r+FPiXEmTo7uP+6FkD2ZXt3hDBklN/wGS2WBkJ6tBcbLqtOgNA6PXpy58F2A8XDgkIP/Z3fxu2AIt3+8k9wQQ4R2YYj3EYzwG3vja1HCWQh+gf7CczkDIS27X9aCxar/ycyzw5eGBfJDsdXq7c6C7dqux12H4on6ujteSO2eXBrco7mSSxVWg3ahptv1CoRWPI+VAEutdjIw4LFEeGsObDZMvLZtr5nwwno9WYFwvZO2fywmEvEAeNudxHSwu5v63FELhylHSM/Bvty/c/zBzLN3wwLDm1MzhJmagEDBNEQTpiOmuVEyTAMLnnbZtZ7CwjCE8LUAIBMVa80il2sbsIgIYli29nZiF3O9Nsh8olMvAiwb2Mh/YYbZhJU1adkbvGuakUNQxQZue0xTYuHLAyQpQoizfVv/9LXjN2au3Dv6XYDwx5UlhzmAQFJyows1SmQXYNqDkSW0yU3MGW6qkCOS6b5JxnC0p+2dZ6RUxmIt6QhIMwx9ZucJ2xxrqbCGoiWiUaMJScF8dngFrHkOQQixaFRGIxZGwrcIKYY44Vw2mi4Y4/aRw+cfHPh0cKSJrbKliFoqFd4IJlYtq+O3E44Azi6/jiUIp9kgBFYMVo4vZpZ9RGwd6gkQRKiv9KamSoh4km8W9qYS4ppHlbRr2hu0cSsBRLDlaYR/FCCIFpYylRJGxleIoN5nXecYT63DMA8vHn5w4/iRM2NTiBpSYRp2MyzrnPTgVbAFCArZZSwILkIF6axol66OcNgWoLnXbpfdxHjb5XLBYrjVCnshRPpF7C5Yvh5lz6wtQAuxubnAPgJaY0IlbgvrDZhE2lZodV4SRNFGDPa4/lSVz+XnMCbgy0YUkxFHd5sijugqOAJiyh4NVcRkt9eZrLy8Hgqthy1OTyoBEq1AD3sKbdv/NjE20rDOkZ5yK4Etk1KN4XlbQGvMQo99BEQdFKuYo55Ab3GIJRlGRG62J8DhjF0+r67CqABBTW/Gwe8cqlsY0V1/X0A60/31pC5KgW2pugupJ0I/KwH8GfYE7Cu/Gpom05CxCIuoYF2lzUjW4mxSCdiB7S+Ai6BYZoT3BcBVzWGd68KzrFrh7KcDB24cvnvbDWMCjFdhBG9Wc4awI9Dtf6mLgn9DqtAV0ag2pQToyTGBTL5azQfB79GIM58npqdnU9pAIP0TAYaXQdEipJ8BRSAekRrCrAVw89zxmZnjl6/DEOPngENghyKG6E6gL7DisgOc1+QbV12yzVZsoUfGmwnuKzCglyy6MtiSMvmZwNReCcVBUdR4PwMO3roluJGGl8cOn585PCifE0eHBVAIholTRFRzPnYE9OxHp2uJbEMRD65earUy4wLbMMQSYoQ4QfnfYDQmsCGd5pnNarojQEv9BiSWIzCgMsXefrx14/j5Aw+enAKbD8eOvfwuwPnJ+GOH1WIAFud1zZdvYL0c64/RtrpRjjKWh4wP4x11guYtRsNjAnjH7XLBAHfSRBrvVj7Orpd0xscEEhLhjjqvdd4X4KiltDc1kftWnZkwJw1EcfwpRdqkHGqIpE1IqoLGEAGrYIiAUe6CgoAiCDKKB4qCguJRsZ3R8ar38XndQFA8x3FGHf/TErLZ67fZt/ve8iUALOyZzTrsHguzpiWY3KFQUBwDTLnG3ijakA6aTOdmdFOLaC3VTZ9aGAIYph8tHnxgXLfl9RzAnS16w4Pri3f3G23H5hDAhnFLN9HO4zrw+NaEKT2wbdCtX2e1bjAa9KM3oHdpAKqzoHOd23tOb3B92gdc7y9dthp0WxY1gAkJlihG9UGT149ZKFwDOGbTG8bacm4OTqLt/sqcumMZt1xWAfQP52/MTKN6N55W3ax9Mwh0esq45eFh1EfEcXc8Eja9bkrbiTWmXcj5RSaP4pLrV233DsGZKb3tuubuH7Nt2IA88Ku71s8cGQLojm24MT2lN9juL30D4EzbA6kmTAJUcdCm5/kjOzVZDzyFzQ+t8we2quN3wDo/f+E5MuJ9x0+hLdE1cixhbvHhOuN6/b3tT1XX8OH8+b3jAb9/1OVyfbGgLS0+QCWn9AdOwD4XcrBuW4+cXxy7R691RqPu2J6D96yPNSPecdWw3nB07xJ8AyBWMazq/S6AaWnTZ80BzO5Gl1FPN23aPaeuQvdh4fiZHTfNn+z++I4zF5+O5vmokFbVoZunNy+ApnHeM4uXbs2qtS2ZYGEy+wKq5sIceoCeDAFOwqZtZ2+jir8FwB0Y5oavAX5FKsC5BfjjUgE06/gFAJP71wGuztge/QWAi3qjbQJgo874+CcApDIyYk39boKEL2VymjSneJf13vYRAB7JfZ0rVvRGVsBsBpafeBarsxN5+jH4uWIvnGj1vLrznhY8mNHtlel1G06afwSAVzBPKDhuxPvBgtlTCfhC9UxzPFNnx9Fkufb1W3Mut0lHD540nCRThk9aTq1MTFc6Y4afalkpDKPUWa2d1YYIJ4w6neHKze8DhDP2aB4TQFOiluafMSEeoB9xgpdz5iIsdGplFg9DMcyJwHJD1ixlz5fARIpZXn1fK80YmJcVvFks+D19bzwGQPI5DSCGF9gISgEuklUyJgg3OdRuFh+W9PJFAJx0vuib0JUPZxAAyyPmbNjcfwGQDNTBfNem083Mn/0eAOkORbGAoOGCSEkFgMiHvuhjiOVwUcm080lvPJCSVymf54mSgJLEA1IHexlogJgJBqN0hG0QDuadM9Mm/YOXKU+wXl0FgSGkslkFkHIvHZlUSgCZINxSBdYUhk5Aq+2XmA6sBAniFch0kgmUIeJIBWkHHqEY4h2sKkki0IWepQqwdGXKiCKafVu/AeCCqP9RGcYiU24nqHoXiPMBXzFP1X12vokN2Fc1v/DM0gW59kydyz7CmU4VWCr/TLC33vjlsD+fTbY5okJmmHoOG6zYK7GWtDIE4HyhJ7zHXSCqLxJ2Xy7V49KWFyitqDA5f3tFCK3JtUa9zZBBz7NmtEq2qVgiVOrWXvYVOtsgmsPDBSvycaaPnPkK4IXD4sGkDnxSmKkiAFIu+qV0WqKaqTLIlhKPCdDK12HFsgpr9rgKnnLIvZrMUkHI0hWIv/LRRBgBMGlI0yIZ6CbsPJg4VgNgsuAPxvMJMCs+GfOng3bZp7CQsAuMw5e0DGQsDi0iIvkAkhQfpVBauRstQoMgGww52sevoEPdKcPd3ZMAdcWO+l+aNMQKahhaNTlDd0pyh48OAZoWBCC9gSICkEMIADXNMDSWYSk/hOlGE2vFK57CCKBCswhAQNm4LqcB0GEEwOdXkRH71iyDUieRq9A4dO0ykSyVEnUBAfSYPpEEcFN8oILS+mXPEMBHF7QF7Jp1Bp2W7Tz7GYCnkU9HxGFSEU+glwxR7BNsdU3pFu0DEGqdSChYbGErwEWVJ9UaKuBViGKhkA5FHBSQkk+oCU0aI900l0qCL1QuWl5yUUqmPKoZB/O5ikQCpWQpKdGrJcOMO95ocw17T0g5CmlCXqV5oVYCX57z2curoXbBz6x16frA0od0gOyFXoKmPbtmDMhvubzEjgDqKCawSHH4UvGgh6gUwfuKISrhWFWAEtUU04SQ8HPg7BJKSw2CclRZNWSH0GtANjMgM4Q/7efeVcKZAcQdjrr/CTyjUu3hu235yUEmC720N0JJycw7aFKSIkCaqRBUBLgkQQzMHfSt6ye5pBSspMXYMkGUIRGMQdld4NEYjTV73YWiYtvbEQDPoP4zcfha3lhuZN/o4sS96N8J5jDrxc1qYhjQLXiz6APMuCiKYMJFVAZH6axowlkAPOxULyJKU8XiJvQHomgC/A04Re3JMp3NDTPkSFQfqpRFDZjfoCpMYHpDwvBeLYgXJsOiYzPGG/eRMxdgWmj87e06/Cu13Dj8hmavz2+8BY1QKqCeCFEx+GdyOk3wW1J/4eE9lqgnGgrm4H9Vx8HQdCsL/4c+AkjomgAAFyuCAAAAAElFTkSuQmCC" /></div>

<div class="organizations-item__name">
<p>Centrul Analitic Independent &bdquo;Expert-Grup&rdquo;</p>
</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 2" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">IDIS &ldquo;Viitorul&rdquo;</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Asociaţia pentru Guvernare Eficientă şi Responsabilă (AGER)</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Agenţia pentru Dezvoltare Regională &ldquo;Habitat&rdquo;</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Transparency International-Moldova</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="https://mtender.gov.md/img/6.png" /></div>

<div class="organizations-item__name">Initiativa Pozitiza</div>
</div>
</div>
</div>
</div>
',
        'content_ro' => '<div class="el-container">
<div class="static-for-civil">
<p>Societatea civilă are puterea de a influența deciziile politice, economice sau de interes public, care servesc la monitorizarea activității guvernului și a instituțiilor publice și de a lua atitudine &icirc;n caz de abuzuir de putere sau față de politicile care contravin intereselor cetățenilor.</p>

<p>&Icirc;n contextul achizițiilor publice, fiecare cetățean și organizație a societății civile &icirc;n special trebuie să beneficieze de un acces nelimitat la informațiile privind achizițiile publice. Transparența informațiilor privind achizițiile publice poate fi realizată cu ușurință și fără costuri prin implementarea sistemelor electronice de achiziții publice care folosesc &icirc;n mod implicit Date Deschise (Open Data) pentru a oferi un acces deschis la informațiile privind achizițiile publice.</p>

<p>Baz&acirc;ndu-se pe cele mai bune practici la nivel mondial, sistemul MTender este dezvoltat pentru a satisface standardele avansate privind datele contractuale deschise <a href="https://www.open-contracting.org/" target="_blank"> (mai multe informații la: opencontracting.org) </a>și permite accesul nerestricționat la informațiile privind achizițiile publice pentru toți cetățenii Republicii Moldova și organizațiile societății civile.</p>

<p>Datorită acestei abordări, fiecare cetățean este capabil să folosească informațiile furnizate de sistemul MTender pentru a monitoriza modul &icirc;n care guvernul &icirc;și &icirc;ndeplinește obligațiile publice și dacă principiile concurenței loiale și raportul valoare pentru bani &icirc;n achizițiile publice sunt respectate &icirc;n Moldova.</p>

<p>La finalizarea sa, sistemul MTender va pune la dispoziția Societății Civile un portal de monitorizare dedicat pentru a oferi un feedback autorităților contractante, a discuta achizițiile specifice, a evalua calitatea livrării făcute &icirc;n temeiul contractului de achiziții publice și a trimite o cerere de verificare organelor de drept atunci c&acirc;nd este necesar.</p>

<p><strong>Recunosc&acirc;nd valoarea achizițiilor electronice pentru societatea civilă din Moldova, pilotarea sistemului MTender este susținută de următoarele organizații neguvernamentale: </strong></p>

<div class="organizations">
<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">
<p>Centrul Analitic Independent &bdquo;Expert-Grup&rdquo;</p>
</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 2" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">IDIS &ldquo;Viitorul&rdquo;</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Asociaţia pentru Guvernare Eficientă şi Responsabilă (AGER)</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Agenţia pentru Dezvoltare Regională &ldquo;Habitat&rdquo;</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Transparency International-Moldova</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="https://mtender.gov.md/img/6.png" /></div>

<div class="organizations-item__name">Initiativa Pozitiza</div>
</div>
</div>
</div>
</div>
',
        'content_ru' => '<div class="el-container">
<div class="static-for-civil">Учитывая значительное давление на правительства с целью эффективно использовать средства налогоплательщиков для предоставления государственных услуг, сокращение государственных расходов является ключевым аспектом государственных закупок. Важно также, чтобы должностные лица, отвечающие за закупки товаров, услуг и работ для государственного сектора, относились бережно к деньгам налогоплательщиков и выполняли свои обязанности таким образом, чтобы граждане могли доверять их профессионализму и честности в расходовании государственных средств. Гражданское общество имеет возможности влиять на решения в политической, экономической или общественной сферах, оказывая помощь в мониторинге работы государственных учреждений и занимая определенную позицию по отношению к политике, противоречащей интересам граждан или в случае злоупотребления властью.
<p>В том, что касается государственных закупок, каждому гражданину и организациям гражданского общества в частности предоставляется неограниченный доступ к информации о государственных закупках. Прозрачность информации относительно государственных закупок может быть легко и без больших финансовых затрат достигнута путем внедрения электронных систем закупок, которые по умолчанию используют концепцию открытых данных для обеспечения открытого доступа к информации о государственных закупках.</p>

<p>Основываясь на мировой передовой практике, система MTender разработана для удовлетворения Передовых стандартов данных открытых закупок&nbsp;<a href="https://www.open-contracting.org/" target="_blank">(Advanced Open Contracting Data Standards, opencontracting.org)</a>&nbsp;и обеспечит открытый доступ к информации о государственных закупках всем гражданам Республики Молдова и местным организациям гражданского общества.</p>

<p>Благодаря такому подходу каждый гражданин сможет использовать информацию, предоставляемую системой MTender, для контроля того, как Закупающие органы выполняют свои публично-правовые обязанности и соблюдаются ли принципы добросовестной конкуренции и наилучшего соотношение цены и качества в государственных закупках.</p>

<p>После того, как система MTender будет полностью завершена, представители гражданского общества на специальном мониторинговом портале будут иметь возможность, обеспечить обратную связь с Закупающими органами, обсудить конкретные закупки, оценить качество государственных контрактов на поставку и отправить запрос на пересмотр в соответствующие органы, при необходимости.</p>

<p><strong>Осознавая полезность электронных закупок в Молдове для гражданского общества, пилотирование системы MTender поддерживается следующими неправительственными организациями:</strong></p>

<div class="organizations">
<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">
<p>Centrul Analitic Independent &bdquo;Expert-Grup&rdquo;</p>
</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 2" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">IDIS &ldquo;Viitorul&rdquo;</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Asociaţia pentru Guvernare Eficientă şi Responsabilă (AGER)</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Agenţia pentru Dezvoltare Regională &ldquo;Habitat&rdquo;</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="data:image/png;base64,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" /></div>

<div class="organizations-item__name">Transparency International-Moldova</div>
</div>

<div class="organizations-item">
<div class="organizations-item__img"><img alt="organization 1" src="https://mtender.gov.md/img/6.png" /></div>

<div class="organizations-item__name">Initiativa Pozitiza</div>
</div>
</div>
</div>
</div>
',
    ],
    [
        'id' => 11,
        'slug' => 'about',
        'title_ro' => 'Despre SIA RSAP MTender',
        'title_en' => 'About MTender',
        'title_ru' => 'Об АИС ГРГЗ MTender',
        'body_ro' => '<p>Ministerul Finanțelor al Republicii Moldova conduce o tranziție la achizițiile publice electronice pentru a asigura o utilizare mai transparentă și mai eficientă a bugetului de stat al Republicii Moldova.</p>

<p>Noul serviciu guvernamental digital - MTender - va sprijini achizițiile publice de la planificarea achiziției p&acirc;nă la plata pentru contractele de achiziții publice. Acesta va scurta timpul pentru licitații pentru instituțiile publice și timpul de așteptare pentru plăți pentru furnizori și contractori.</p>

<p><button class="static-banner__button" id="learnMore">Aflați mai multe</button></p>
',
        'body_en' => '<p>The Ministry of Finance of the Republic of Moldova is leading a transition to digital public procurement to ensure more transparent and efficient spending of the state budget of the Republic of Moldova.</p>

<p>New digital government service &ndash; MTender - will support public procurement from planning the purchase to payment for public contracts. It will shorten time for tendering for public bodies and waiting time for payment for suppliers and contractors.</p>

<p>&nbsp;</p>

<p><button class="static-banner__button" id="learnMore">Learn more</button></p>
',
        'body_ru' => '<p>Министерство Финансов Республики Молдова проводит переход на электронные государственные закупки с целью обеспечения более прозрачных и эффективных расходов национального бюджета Республики Молдова.</p>

<p>Новая электронная государственная услуга - MTender - покрывает государственные закупки от планирования до оплаты договоров о государственных закупках. Это сократит время проведения торгов для государственных органов и время ожидания оплаты для поставщиков и подрядчиков</p>

<p><button class="static-banner__button" id="learnMore">Узнать больше</button></p>
',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '<div class="el-container">
<div class="static-about__cards" id="more">
<div class="static-about__card">
<div class="static-about__img static-about__img_ico1">&nbsp;</div>

<div class="static-about__text">With MTender digital service, all public tenders are accessible online and every procurement decision transparently published online in real time. Citizens can watch government procurement decisions and how taxpayers money are spent on public services.</div>
</div>

<div class="static-about__card">
<div class="static-about__img static-about__img_ico2">&nbsp;</div>

<div class="static-about__text">On account of online and easy to participate tenders, the new fully digital procurement service will offer better access to opportunities in public procurement for business community, in particular local small and medium-sized enterprises.</div>
</div>

<div class="static-about__card">
<div class="static-about__img static-about__img_ico3">&nbsp;</div>

<div class="static-about__text">For public bodies, new digital service will also bring improved planning of spending, quicker purchases and better-quality as a result of &lsquo;zero paper&rsquo; electronic bidding procedures.</div>
</div>
</div>
</div>

<div class="static-about-description">
<div class="el-container">
<div class="static-about__sub-title">The MTender is a multi-platform networking digital procurement service it, comprise a government-operated web portal and the Open Data central database unit and is networking with several commercial electronic platforms certified to support electronic tendering procedures for public sector and commercial clients.</div>

<div class="static-about__sub-text">The MTender networking electronic procurement platform is a commercial electronic platform, authorised and certified for networking with the MTender and providing digital electronic tendering services to public sector clients as well as commercial buyers. Each MTender networking platform is providing a help desk service to buyers and economic operators registered on this platform to access digital services of the MTender.</div>

<div class="static-about-partners">
<div class="static-about__title">Presently the MTender is networking with the following platforms:</div>

<div class="static-about__links"><a href="https://yptender.md/" target="_blank"><img alt="yptender" src="/img/yptender.png" /> </a> <a href="https://e-licitatie.md/" target="_blank"> <img alt="e-lici" src="/img/e-lici.png" /> </a> <a href="https://achizitii.md/" target="_blank"> <img alt="achizitii" src="/img/achizitii.md.png" /> </a></div>
</div>

<hr />
<div class="static-about-procurement">
<div class="static-about__title">Digital Public Procurement</div>

<div class="static-about__items">
<div class="static-about__item_left item1">
<div class="static-about__item-date date_left">30 November 2016</div>

<div class="static-about__item-title_accent">Memorandum</div>

<div class="static-about__item-text">The Ministry of Finance, eGovernment Centre, Public Procurement Agency, business associations, NGOs, and IT companies signed a Memorandum to work collaboratively to develop a new digital procurement system for Moldova.</div>
</div>

<div class="static-about__item_right item2">
<div class="static-about__item-date date_right">April 2017</div>

<div class="static-about__item-title">Pilot</div>

<div class="static-about__item-text">A pilot of the MTender &ndash; a partnership between the Ministry of Finance and three commercial electronic platforms &ndash; achizitii.md, e-licitatie.md, and YPTender.md - was launched. Supported by the European Bank for Reconstruction and Development, the MTender pilot attracted public and commercial buyers and successfully tested brand new concept of cooperative delivery of digital procurement service based on Open Government values of transparency, accountability and engagement with market stakeholders.</div>
</div>

<div class="static-about__item_left item3">
<div class="static-about__item-date date_left">Since March 2018</div>

<div class="static-about__item-title">e-Contracting</div>

<div class="static-about__item-text">Economic operators of Republic of Moldova are able to use the MTender for signing online any contract, public or commercial. Public bodies funded from the state budget may use the MTender for signing any public contract and registering it in the Treasury of the Republic</div>
</div>

<div class="static-about__item_right item4">
<div class="static-about__item-date date_right">July 2018</div>

<div class="static-about__item-title_accent">Law</div>

<div class="static-about__item-text">Public procurement law [] of the Republic of Moldova has been changed to introduce electronic tendering procedures as a standard for all public sector entities in Moldova</div>
</div>

<div class="static-about__item_left item5">
<div class="static-about__item-date date_left">From 15 October 2018</div>

<div class="static-about__item-title">RfQ&amp;Open-Tender</div>

<div class="static-about__item-text">New types of electronic tendering procedures are becoming available on the MTender, to suit different types of contracts and serve different public and commercial buyers, including state-owned enterprises. First available are electronic public procurement procedures of request for quotation, negotiated procedure without publication and open tender.</div>
</div>

<div class="static-about__item_right item6">
<div class="static-about__item-date date_right">From 26 October 2018</div>

<div class="static-about__item-title_accent">Go live</div>

<div class="static-about__item-text">From 26 October 2018, transparent but easy-to-use online bidding procedures, with lowest price and price and non-price selection criteria, will be available to interested state-owned enterprises and commercial clients.</div>
</div>
</div>

<div class="static-about__text">The EU Delegation to Moldova offered to support the Ministry of Finance and further development of the MTender - more modern purchasing tools, including dynamic purchasing system and innovative partnership will become available <strong>in 2019-2020</strong>.</div>
</div>
</div>
</div>
',
        'content_ro' => '<div class="el-container">
<div class="static-about__cards" id="more">
<div class="static-about__card">
<div class="static-about__img static-about__img_ico1">&nbsp;</div>

<div class="static-about__text">Cu serviciul digital MTender, toate licitațiile publice sunt accesibile online și fiecare decizie de achiziție publică este publicată &icirc;n mod transparent online &icirc;n timp real. Cetățenii pot urmări deciziile privind achizițiile publice și modul &icirc;n care sunt cheltuiți banii plătitorilor de impozite.</div>
</div>

<div class="static-about__card">
<div class="static-about__img static-about__img_ico2">&nbsp;</div>

<div class="static-about__text">Noul serviciu de achiziții publice complet electronic va oferi un acces mai bun la oportunitățile pentru comunitatea de afaceri, &icirc;n special &icirc;ntreprinderile mici și mijlocii locale.</div>
</div>

<div class="static-about__card">
<div class="static-about__img static-about__img_ico3">&nbsp;</div>

<div class="static-about__text">Pentru instituțiile publice, noul serviciu digital va aduce, de asemenea, o planificare &icirc;mbunătățită a cheltuielilor, achiziții mai rapide și mai calitative, ca urmare a procedurilor electronice de licitare care implică &rdquo;zero h&acirc;rtie&rdquo;.</div>
</div>
</div>
</div>

<div class="static-about-description">
<div class="el-container">
<div class="static-about__sub-title">Sistemul MTender este un sistem electronic online de achiziții electronice cu multiple platforme, alcătuit dintr-un portal web și o Unitate Centrală de Date de date de tip deschis (Open Data) și o rețea cu mai multe platforme din sectorul privat acreditate pentru a sprijini licitațiile desfășurate electronic pentru clienții din sectorul public și sectorul privat.</div>

<div class="static-about__sub-text">Platforma electronica de achiziții este o platformă comercială electronică de achiziții publice, acreditată pentru conectarea cu MTender și oferă servicii de licitație electronică digitală at&acirc;t clienților din sectorul public, c&acirc;t și cumpărătorilor din sectorul privat. Fiecare platformă de achiziții MTender oferă un serviciu de asistență pentru cumpărători și operatori economici &icirc;nregistrați pe această platformă pentru a accesa serviciile electronice ale MTender.</div>

<div class="static-about-partners">
<div class="static-about__title">In prezent, la MTender sunt conectate următoarele platforme:</div>

<div class="static-about__links"><a href="https://yptender.md/" target="_blank"><img alt="yptender" src="/img/yptender.png" />&nbsp;</a><a href="https://e-licitatie.md/" target="_blank"><img alt="e-lici" src="/img/e-lici.png" />&nbsp;</a><a href="https://achizitii.md/" target="_blank"><img alt="achizitii" src="/img/achizitii.md.png" /></a></div>
</div>

<hr />
<div class="static-about-procurement">
<div class="static-about__title">Achiziții Publice Electronice</div>

<div class="static-about__items">
<div class="static-about__item_left item1">
<div class="static-about__item-date date_left">30 noiembrie 2016</div>

<div class="static-about__item-title_accent">Memorandum</div>

<div class="static-about__item-text">Ministerul Finanțelor, Centrul de Guvernare Electronică, Agenția Achizițiilor Publice, asociațiile de afaceri, ONG-urile și companiile IT au semnat un Memorandum de colaborare pentru dezvoltarea unui nou sistem electronic de achiziții publice &icirc;n Moldova.</div>
</div>

<div class="static-about__item_right item2">
<div class="static-about__item-date date_right">April 2017</div>

<div class="static-about__item-title">Pilot</div>

<div class="static-about__item-text">a fost lansat un pilot al sistemului MTender - un parteneriat &icirc;ntre Ministerul Finanțelor și trei platforme electronice din sectorul privat- achiziții.md, e-licitatie.md și YPTender.md. Sprijinit de Banca Europeană pentru Reconstrucție și Dezvoltare, pilotul MTender a atras cumpărători din sectrorul public și privat și a testat cu succes noul concept de livrare prin cooperare a serviciului de achiziții electronice, bazat pe valorile unei Guvernări Deschise ca transparență, responsabilitate și interacțiunea cu părțile interesate din piață.</div>
</div>

<div class="static-about__item_left item3">
<div class="static-about__item-date date_left">&Icirc;ncep&acirc;nd cu luna Iunie 2018</div>

<div class="static-about__item-title">e-Contractare</div>

<div class="static-about__item-text">Operatorii economici &icirc;nregistrați &icirc;n Republica Moldova pot utiliza MTender pentru semnarea online a oricărui contract, public sau din sectorul privat.Instituțiile publice finanțate de la bugetul de stat pot utiliza MTender pentru semnarea și &icirc;nregistrarea la Trezoreria Reginala a Ministreului Finanțelor a oricărui contract public.</div>
</div>

<div class="static-about__item_right item4">
<div class="static-about__item-date date_right">Iulie 2018</div>

<div class="static-about__item-title_accent">Lege</div>

<div class="static-about__item-text">Legea privind achizițiile publice nr. 131 din 03.07.2015 din Republica Moldova a fost modificată pentru a introduce licitația desfășurată electronic ca standard pentru toate entitățile din sectorul public din Moldova.</div>
</div>

<div class="static-about__item_left item5">
<div class="static-about__item-date date_left">&Icirc;ncep&acirc;nd cu 17 octombrie 2018</div>

<div class="static-about__item-title">RfQ&amp;Open-Tender</div>

<div class="static-about__item-text">Noi tipuri de licitații desfășurate electronic devin disponibile pe MTender. Primele disponibile sunt procedurile electronice de achiziții publice - cererea ofertelor de prețuri, negocierea fără publicarea prealabilă a unui anunț de participare și licitația deschisă.</div>
</div>

<div class="static-about__item_right item6">
<div class="static-about__item-date date_right">&Icirc;ncep&acirc;nd cu 26 octombrie 2018</div>

<div class="static-about__item-title_accent">Go live</div>

<div class="static-about__item-text">Procedurile de licitare online transparente, dar ușor de utilizat, cu cele mai mici prețuri și criterii de selecție bazate pe preț sau pe alte criterii nelegate de preț, vor fi disponibile &icirc;ntreprinderilor de stat și clienților din sectorul privat interesați.</div>
</div>
</div>

<div class="static-about__text">Delegația UE &icirc;n Moldova s-a oferit să sprijine Ministerul Finanțelor și să dezvolte pe viitor sistemul MTender - instrumente mai moderne de achiziție, inclusiv sistemul dinamic de achiziție și parteneriatul pentru inovare - vor fi disponibile&nbsp;<strong>&icirc;n perioada 2019-2020.</strong></div>
</div>
</div>
</div>
',
        'content_ru' => '<div class="el-container">
<div class="static-about__cards" id="more">
<div class="static-about__card">
<div class="static-about__img static-about__img_ico1">&nbsp;</div>

<div class="static-about__text">При использовании электронной услуги MTender все публичные торги доступны в режиме онлайн, и каждое решение о закупках публикуется в режиме реального времени. Граждане могут наблюдать за государственными закупками и как деньги налогоплательщиков расходуются на государственные услуги.</div>
</div>

<div class="static-about__card">
<div class="static-about__img static-about__img_ico2">&nbsp;</div>

<div class="static-about__text">Новая полностью электронная услуга закупок будет предлагать более широкий доступ к возможностям государственным закупок для делового сообщество, в частности местных малых и средних предприятий.</div>
</div>

<div class="static-about__card">
<div class="static-about__img static-about__img_ico3">&nbsp;</div>

<div class="static-about__text">Для государственных органов новая электронная услуга также будет способствовать более эффективному планированию расходов, более быстрым покупкам и повышению качества в результате проведения электронных торгов по принципу &rdquo;без бумаги&rdquo;.</div>
</div>
</div>
</div>

<div class="static-about-description">
<div class="el-container">
<div class="static-about__sub-title">MTender - это мульти-платформенная электронная услуга закупок, состоящая из государственного веб-портала и центральной базы данных которая использует данные открытого типа (Open Data) и несколько частных электронных платформам, аккредитованы для поддержки и проведения электронных процедур торгов для государственных и частных клиентов.</div>

<div class="static-about__sub-text">Электронная платформа закупок представляет собой коммерческую электронную платформу для закупок, аккредитованная для взаимодействия с MTender и предоставляющую электронные цифровые торги для клиентов государственного сектора, а также для частных покупателей. Каждая электронная платформа закупок MTender предоставляет справочную службу покупателям и экономическим операторам, зарегистрированным на этой платформе, для доступа к электронным услугам MTender.</div>

<div class="static-about-partners">
<div class="static-about__title">В настоящее время MTender работает со следующими платформами:</div>

<div class="static-about__links"><a href="https://yptender.md/" target="_blank"><img alt="yptender" src="/img/yptender.png" /> </a> <a href="https://e-licitatie.md/" target="_blank"> <img alt="e-lici" src="/img/e-lici.png" /> </a> <a href="https://achizitii.md/" target="_blank"> <img alt="achizitii" src="/img/achizitii.md.png" /> </a></div>
</div>

<hr />
<div class="static-about-procurement">
<div class="static-about__title">Электронные государственные закупки</div>

<div class="static-about__items">
<div class="static-about__item_left item1">
<div class="static-about__item-date date_left">30 ноября 2016</div>

<div class="static-about__item-title_accent">Меморандум</div>

<div class="static-about__item-text">Министерство Финансов, Агенство электронного правления, Агентство государственных закупок, бизнес-ассоциации, НПО и ИТ-компании подписали Меморандум о совместной работе по разработке новой цифровой системы закупок для Молдовы.</div>
</div>

<div class="static-about__item_right item2">
<div class="static-about__item-date date_right">В апреле 2017</div>

<div class="static-about__item-title">Пилот</div>

<div class="static-about__item-text">Был запущен пилот MTender партнерство между Министерством Финансов и тремя частными электронными платформами - achiziții, e-licitatie și YPTender.При поддержке Европейского банка реконструкции и развития, пилот MTender привлек публичных и частных покупателей и успешно протестировал новую концепцию доставки путем сотрудничества услуг электронных закупок на основе ценностей Открытого Правления (Open Government) как прозрачности, ответственности и взаимодействие с участниками рынка.</div>
</div>

<div class="static-about__item_left item3">
<div class="static-about__item-date date_left">С июня 2018</div>

<div class="static-about__item-title">e-Contracting</div>

<div class="static-about__item-text">Экономические операторы, зарегистрированные в Республике Молдова, могут использовать MTender для подписания онлайн любого договора, государственного или частного. Государственные органы, финансируемые из государственного бюджета, могут использовать MTender для подписания договора государственных закупок и его регистрации в государственном казначействе.</div>
</div>

<div class="static-about__item_right item4">
<div class="static-about__item-date date_right">В июле 2018</div>

<div class="static-about__item-title_accent">Закон</div>

<div class="static-about__item-text">В Законе о государственных закупках Республики Молдова № 131 от 03.07.2015 были внесены поправки, предусматривающие внедрение электронных закупок в качестве стандарта для всех организации государственного сектора в Молдове.</div>
</div>

<div class="static-about__item_left item5">
<div class="static-about__item-date date_left">Начиная с 17 октября 2018</div>

<div class="static-about__item-title">RfQ&amp;Open-Tender</div>

<div class="static-about__item-text">На MTender становятся доступными новые типы электронных закупок, которые соответствуют различным видам контрактов и обслуживают различных государственных и частных покупателей, включая государственные предприятия. Первые доступные электронные процедуры государственных закупок это запрос ценовых оферт, переговоры без предварительного опубликования объявления на участие и открытые торги.</div>
</div>

<div class="static-about__item_right item6">
<div class="static-about__item-date date_right">С 26 октября 2018</div>

<div class="static-about__item-title_accent">Go live</div>

<div class="static-about__item-text">Прозрачный, но легкий в использовании онлайн-торгов с критериями присуждения: самая низкая цена и другие неценовые критерия отбора будут доступны заинтересованным государственным предприятиям и частным клиентам.</div>
</div>
</div>

<div class="static-about__text">Делегация ЕС в Молдове предложила поддержать Министерство Финансов и дальнейшее развитие MTender - <strong>в 2019-2020</strong> годах станут доступны более современные инструменты закупок, включая динамичную систему закупок и инновационное партнерство.</div>
</div>
</div>
</div>
',
    ],
    [
        'id' => 14,
        'slug' => 'security-and-confidentiality',
        'title_ro' => 'Securitatea',
        'title_en' => 'Security',
        'title_ru' => 'Безопасность',
        'body_ro' => '<p>Instituția Publică &ldquo;Centrul de Tehnologii Informaţionale &icirc;n Finanţe&rdquo; &icirc;n calitate de Operatorul MTender se angajează să protejeze securitatea informațiilor și a confidențialității utilizatorilor și vizitatorilor MTender.</p>

<p>MTender aplică măsuri de securitate pentru a proteja &icirc;mpotriva pierderii, utilizării neautorizate și modificării informațiilor sub supravegherea Operatorului MTender și a platformelor electronice de achiziții MTender.</p>
',
        'body_en' => '<p>The electronic public procurement system MTender is based on the principles of open data, but we take the demands of the confidentiality, integrity and data availability very seriously. While the public procurement tender information is available on the MTender web portal free and without any registration, the integrity and security of the system are built into its data architecture. A number of measures are constantly undertaken and processes are put in place to guarantee information security, specifically to protect sensitive data from unauthorized access, to secure the integrity of the central database and to maintain open and unrestricted access to open data. The central database unit is hosted within secured government cloud service MCloud.</p>
',
        'body_ru' => '<p>Государственное учреждение «Центр информационных технологий в финансах» в качестве Оператора MTender обязуется защищать безопасность информации и конфиденциальность пользователей и посетителей MTender.</p>
<p>MTender применяет меры безопасности для защиты от потери, неправильного использования и изменения информации, находящейся под контролем оператора MTender и электронной платформы закупок MTender.</p>',
        'meta_title_ro' => '',
        'meta_title_en' => '',
        'meta_title_ru' => '',
        'meta_description_ro' => '',
        'meta_description_en' => '',
        'meta_description_ru' => '',
        'menu' => 1,
        'content_en' => '<div class="el-container">
<div class="static-security">
<h1>The authorization procedure for the electronic procurement platforms consists of the following steps</h1>

<ol class="static-security__steps">
	<li>
	<p>Step</p>
	The development of the technical specification as it is required by the Regulation on NEPP accreditation approved through Government Decree nr. 17 from 10.10.2018 and the MTender Technical Concept approved through Government Decree nr. 705/2018.</li>
	<li>
	<p>Step</p>
	The MTender Operator shall run the accreditation testing in order to ensure that the NEPP has complied with the technical specifications and the developed functionalities are in line with the level accreditation sought by the NEPP operator.</li>
	<li>
	<p>Step</p>
	Approval of the test report and the accreditation of the NEPP by the Accreditation Committee.</li>
	<li>
	<p>Step</p>
	Based on the accreditation received the MTender Operator hands over within five days the product key.</li>
</ol>

<p>The MTender Operator is responsible for the oversight of the technical aspects of the comprehensive information security management practice by each of the participating NEPPs. Currently, the participating NEPP are at the following level of accreditation:</p>

<h3>Information System Data Security</h3>

<p>As the Operator of the electronic public procurement system MTender in Moldova, Public Institution &bdquo;Centre of Financial Informational Technologies&rdquo; (CTIF) is mandated with the mission to ensure information security management compliance among all of the participants of the electronic procurement system.</p>

<p>&ldquo;A sufficient information security management process within the cloud-based electronic system of public procurement will be considered such that is certified according to the international code of practice for information security management based on ISO/IEC 27001 or in accordance with applicable standards which replace them.</p>

<h3>Information Security Management System</h3>

<p>The electronic system of public procurement must create and maintain a comprehensive information security management practice in accordance with the applicable legal requirements pertaining to information security. The specific requirements are to be defined by the MTender Operator in accordance to the applicable legal requirements pertaining to information security. NEPPs, prior to joining the MTender electronic public procurement system, must be accredited by the Accreditation Committee as to meeting the documented requirements of having a comprehensive information security management system in place.</p>

<p>In accordance with the law, information security requirements for the commercial online platforms on joining the electronic public procurement system have been and are implemented and are updated on a regular basis.</p>

<h3>Interaction of the MTender Operator and the NEPP operators</h3>

<p>Contractual obligations relating to information security in the system of electronic public procurement</p>

<p>Approved updated rules for interaction between the MTender Operator and the NEPP operators in the part of information security as part of an exemplary agreement between the MTender Operator and the NEPP operators.</p>

<p>Information security requirements that are part of the contract with the NEPP operators are as follows:</p>

<p>During the execution of this agreement, the Parties undertake to comply with the legislation of Republic of Moldova in the field of technical and cryptographic protection of information, the Procedure, and requirements established in the documentation of the integrated system of information security of the MTender.</p>

<p>The NEPP operator is required to configure the site security services (identification and authentication, access control, logging, encryption, etc.) in accordance with the requirements and recommendations of the manufacturer of the equipment or software.</p>

<p>The Parties are obliged to provide full assistance to the state authorities, the other Party and its representatives in case of investigations into cases of information security.</p>

<p>Means of cryptographic protection of information, including means of electronic digital signature, used in the work of the site, should have valid expert conclusions or certificates of conformity on the results of state expertise in the field of cryptographic protection of information.</p>

<p>The NEPP operator is required to conduct, in accordance with the Regulation on NEPP accreditation, audits of information security in order to assess the compliance of processes and procedures, security measures and the state of the information systems with the requirements of the NEPPs information security policies and rules, legislative and contractual requirements, as well as recommendations of international standards. The results of the audit should be presented in the form of a report, which should contain information on the status of compliance with the above requirements, recommendations and plans for eliminating identified non-conformities and take into account the results of previous audits.</p>

<p>The NEPP operator must carry out the specified audit in accordance with art. 25 from the Regulation on NEPP accreditation, as a result of which the report, certified by signatures of the authorized persons of the site, shall be submitted by official letter to the MTender Operator.</p>

<p>In case of incidents involving information security on the site, the NEPP Operator must send to the MTender Operator e-mail as soon as possible the moment the incident is detected to send a report, which must include: the name of the accredited NEPP, the date and time of occurrence of the incident, the description of the incident (the possibility of deployment), violation of the property of information (integrity, confidentiality, accessibility), external or internal intervention, possible causes, criticality, place (system module), occurrence, action taken and that other important information. After giving the specified preliminary report, the NEPP Operator must conduct a detailed investigation of the incident, prepare a detailed report and provide it to the MTender Operator.</p>

<p>The NEPP operator is required to conduct a scan (external and internal) of its site for the presence of vulnerabilities and report to the MTender Operator in accordance with art. 24 from the Regulation on NEPP accreditation. The report should include an area of action and scan goals, generalized guidance information, a list of necessary actions to address vulnerabilities, and detailed information for technical experts. Following the scan results, the NEPP Operator needs to make a plan to eliminate the identified vulnerabilities and provide it to the MTender Operator.</p>

<p>The MTender Operator has the right to conduct an external site scan for vulnerabilities and to check the reliability of the reports provided by the sites.</p>

<p>In case of incidents related to information security, the MTender Operator within three working day shall submit the corresponding report for consideration by the Accreditation Committee. The Accreditation Committee reviews the report within five working days and takes one of the following decisions:</p>

<ol class="static-security__decisions">
	<li>elimination by the NEPP operator of the detected violations in the period specified by the Accreditation Committee. In this case, the commission requires from the NEPP Operator to carry out an audit of the system of internal control and information security by the appropriate certified specialists in order to confirm the violation, the results of which are considered at the meeting of the commission and take appropriate follow-up decisions;</li>
	<li>he suspension of the NEPP accreditation providing the timing and conditions for the expiry of the suspension</li>
	<li>withdrawal of accreditation to operate within the MTender electronic public procurement system.</li>
</ol>
</div>
</div>
',
        'content_ro' => '<div class="el-container">
<div class="static-security">
<p>Protecția informațiilor ofertei, a informațiilor confidențiale și a datelor personale &icirc;mpotriva accesului neautorizat &icirc;mpotriva scurgerii, distrugerii, blocării sau &icirc;ncălcării integrității datelor este asigurată de către MTender &icirc;n conformitate cu cerințele de securitate pentru operatorul MTender și platformele electronice de achiziție MTender.</p>

<p>Operațiunile și activitățile efectuate &icirc;n cadrul MTender de către toți Utilizatorii &Icirc;nregistrați sunt &icirc;nregistrate &icirc;n fișierele de jurnal generate de sisteme &icirc;n care sunt indicate ziua și ora fiecărui acces și activitate. Datele &icirc;nregistrate &icirc;n fișierele jurnalului MTender sunt raportate &icirc;n timp real serviciului guvernamental MPass MLog pentru a asigura acuratețea și confidențialitatea datelor. Evidența MTender pe MLog constituie o dovadă completă și exclusivă &icirc;ntre Clienți, Operatorii Economici și instituțiile publice relevante ale Republicii Moldova, cu privire la conținutul și timpul schimburilor de documente electronice și comunicărilor trimise, cum ar fi, dar fără a se limita la, cererile de participare și ofertele depuse, anunțurile de participare publicate, precum și deciziile de evaluare completate de Client.</p>

<p>Platformele electronice de achiziții MTender asigură confidențialitatea, controlul accesului și validarea informațiilor furnizate de cumpărători și operatorii economici &icirc;n timpul &icirc;nregistrării &icirc;n scopuri de identificare și autentificare, precum și integritatea și disponibilitatea tuturor informațiilor de &icirc;nregistrare care sunt procesate pentru MTender.</p>
</div>
</div>
',
        'content_ru' => '<div class="el-container">
<div class="static-security">
<p>Защита информации о оферты, конфиденциальной информации и персональных данных от несанкционированного доступа к утечке, уничтожению, блокировке или нарушению целостности данных обеспечивается MTender в соответствии с требованиями безопасности для оператора MTender и электронных платформ закупок MTender, предписанных в Приказе Министерства Финансов.</p>

<p>Операции и действия, выполняемые в MTender всеми зарегистрированными пользователями, записываются в журналы, генерирован системой, в которых указаны день и время каждого доступа и активности. Данные, записанные в журналах MTender, должны сообщаться в реальном времени в государственную службу MPass и MLog для обеспечения точности и конфиденциальности данных. Запись MTender на MLog представляет собой полное и эксклюзивное свидетельство между Клиентами, Экономическими операторами и соответствующими правоохранительными органами Республики Молдова о содержании и времени обмена электронными документами и отправленных сообщениях, таких как, но не ограничиваясь ими, заявки на участие и поданная оферта, опубликованные объявления на участие, а также решения по оценке, выполненные Клиентом.</p>

<p>Электронные платформы закупок MTender обеспечивают конфиденциальность, контроль доступа и проверку информации, предоставляемой покупателями и экономическими операторами при регистрации для целей идентификации и аутентификации, а также целостность и доступность всей информации регистрации, которая обрабатывается для MTender.</p>
</div>
</div>',
    ],
]
        );



        $this->execute('ALTER SEQUENCE pages_id_seq RESTART WITH 22;');
    }

    public function safeDown()
    {
        //$this->truncateTable('{{%pages}} CASCADE');
    }
}
