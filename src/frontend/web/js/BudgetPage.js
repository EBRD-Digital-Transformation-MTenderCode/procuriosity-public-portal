(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["BudgetPage","Error"],{"2d5b":function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticStyle:{display:"inline-block"},on:{copy:t.doCopy}},[t._v(t._s(t.ocid))])},a=[],s=(n("a481"),{name:"ProcedureId",computed:{ocid:function(){return this.$slots.default[0].text.toUpperCase()}},methods:{doCopy:function(t){t.clipboardData.setData("text/plain",t.target.textContent.toLowerCase().replace("md","MD")),t.preventDefault()}}}),o=s,r=n("2877"),c=Object(r["a"])(o,i,a,!1,null,null,null);e["a"]=c.exports},"5b0f":function(t,e,n){n("69d3"),t.exports=n("ccb9").f("asyncIterator")},a0f3:function(t,e,n){"use strict";e["a"]={goods:{en:"Goods",ro:"Bunuri",ru:"Товары"},services:{en:"Services",ro:"Servicii",ru:"Услуги"},works:{en:"Works",ro:"Lucrari",ru:"Работы"}}},af80:function(t,e,n){"use strict";n.r(e);var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"entity-wp"},[n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[t.loaded||t.error.status?t.loaded&&t.EI?n("div",{key:"info"},[n("div",{staticClass:"entity-main-info entity-main-info__budget "},[n("el-container",{attrs:{direction:"vertical"}},[n("el-row",[n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"entity-main-info__subtitle"},[n("procedure-id",[t._v(t._s(t.gd(t.EI,function(t){return t.ocid}).toUpperCase()))]),t._v(" "+t._s(t.$t("budget.from"))+"\n                "+t._s(t.fd(t.gd(t.EI,function(t){return t.date}),"DD.MM.YYYY, HH:mm"))+"\n              ")],1)]),n("el-col",{attrs:{xs:{span:24,offset:0},sm:{span:6,offset:2}}},[n("div",{staticClass:"entity-main-info__value entity-main-info__value_budget"},[t.gd(t.EI,function(t){return t.planning.budget},{}).hasOwnProperty("amount")?n("div",[n("div",[t._v(t._s(t.$t("budget.estimated_value_excluding_VAT")))]),n("span",{staticClass:"entity-main-info__amount"},[n("span",{staticClass:"whole",style:t.wholeAmount.length>8?"font-size: 26px":""},[t._v(t._s(t.wholeAmount)+"\n                    ")]),n("span",{staticClass:"fraction-currency_wp"},[n("span",{staticClass:"fraction",style:t.wholeAmount.length>8?"font-size: 14px":""},[n("span",{staticClass:"dot"},[t._v(".")]),t._v(t._s(t.fractionAmount))]),n("span",{staticClass:"entity-main-info__currency",style:t.wholeAmount.length>8?"font-size: 10px":""},[t._v("\n                        "+t._s(t.gd(t.EI,function(t){return t.planning.budget.amount.currency}))+"\n                      ")])])])]):n("div",{staticStyle:{height:"72px"}},[t._v("\n                  "+t._s(t.$t("budget.no_finances_sources"))+"\n                ")])])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"entity-main-info__title entity-main-info__title_budget"},[t._v("\n                "+t._s(t.gd(t.EI,function(t){return t.tender.title}))+"\n              ")])]),n("el-col",{attrs:{sm:24}},[n("div",{staticClass:"entity-main-info__description"},[t._v("\n                "+t._s(t.gd(t.EI,function(t){return t.tender.classification.description}))+"\n              ")])])],1),n("el-row",[n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"entity-main-info__additional"},[n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.buyer_name")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.buyer.name}))+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.buyer_id")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.getOrganizationObject(t.gd(t.EI,function(t){return t.parties},[]),"buyer"),function(t){return t.identifier.id}))+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.region")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.getOrganizationObject(t.gd(t.EI,function(t){return t.parties},[]),"buyer"),function(t){return t.address.addressDetails.region.description}))+"\n                  ")])])]),n("div",{staticClass:"entity-main-info__additional"},[n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.type_of_buyer")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.getTypeOfBuyer)+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.main_activity")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.getMainGeneralActivity)+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.sectoral_activity")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.getMainSectoralActivity)+"\n                  ")])])])]),n("el-col",{attrs:{xs:{span:24,offset:0},sm:{span:6,offset:2}}},[n("div",{staticClass:"entity-main-info__additional"},[n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.period_of_need")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.fd(t.gd(t.EI,function(t){return t.planning.budget.period.startDate}),"DD.MM.YYYY"))+" -\n                    "+t._s(t.fd(t.gd(t.EI,function(t){return t.planning.budget.period.endDate}),"DD.MM.YYYY"))+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.main_cpv")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.tender.classification.id}))+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.main_procurement_category")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.getMainProcurementCategory)+"\n                  ")])])])])],1)],1)],1),n("div",{staticClass:"entity-tabs entity-tabs_budget"},[n("el-container",{attrs:{direction:"vertical"}},[n("el-row",[n("el-col",{attrs:{xs:24}},[n("el-tabs",{on:{"tab-click":t.handleClick},model:{value:t.activeTab,callback:function(e){t.activeTab=e},expression:"activeTab"}},[n("el-tab-pane",{attrs:{name:"source-of-financing",lazy:""}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.source_of_financing"))},slot:"label"}),n("source-of-financing",{attrs:{FSs:t.FSs,buyer:t.getOrganizationObject(t.gd(t.EI,function(t){return t.parties},[]),"buyer")}})],1),n("el-tab-pane",{attrs:{name:"execution",lazy:"",disabled:!t.tabs.includes("execution")}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.execution"))},slot:"label"}),n("execution",{attrs:{getExecutionsId:t.getExecutionsId}})],1),n("el-tab-pane",{attrs:{name:"spending",lazy:"",disabled:""}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.spending"))},slot:"label"}),n("spending")],1)],1)],1)],1)],1)],1)]):n("el-container",{key:"error",staticClass:"error"},[n("error",{attrs:{message:t.error.message}})],1):n("el-container",{key:"loading"},[n("div",{staticClass:"loading"})])],1)],1)},a=[],s=(n("6b54"),n("7f7f"),n("cebc")),o=(n("a481"),n("7514"),n("96cf"),n("3b8d")),r=n("2f62"),c=n("4df7"),l=n("a0f3"),d=n("513d"),u=n("c00a"),_=n("5030"),f=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[t.loaded||t.error.status?t.loaded&&!t.error.status?n("div",{key:"info",staticClass:"info info_budget"},[t.needPagination?n("page-number",{attrs:{"current-page":t.currentPage,"elements-amount":t.itemsNumber,"page-size":t.pageSize}}):t._e(),n("el-collapse",{attrs:{accordion:"",value:t.getExecutionsId[0]},on:{change:t.changeActiveItem}},t._l(t.needPagination?t.procedures.filter(function(e,n){return n>=t.numberOfLastDisplayedProcedure-t.pageSize&&n<t.numberOfLastDisplayedProcedure}):t.procedures,function(e){return n("execution-item",{key:e.id,attrs:{activeItemId:t.activeItemId,procedure:e}})}),1),t.needPagination?n("list-pagination",{key:"pagination",attrs:{total:t.itemsNumber,pageCount:0,currentPage:t.currentPage,pageSize:t.pageSize,changePage:t.changePage,offsetTo:"contract-title"}}):t._e()],1):n("div",{key:"error",staticClass:"error"},[n("div",{staticClass:"error-message"},[t._v(t._s(t.error.message))]),n("button",{staticClass:"refresh-btn",on:{click:t.getProcedures}},[t._v("\n      "+t._s(t.$t("refresh"))+"\n    ")])]):n("div",{key:"loading"},[n("div",{staticClass:"loading"})])])},v=[],b=n("75fc"),g=(n("4917"),n("5d58")),m=n.n(g),p=n("d9a3"),k=n.n(p),C=n("67bb"),y=n.n(C);function h(t){var e;if("function"===typeof y.a){if(k.a&&(e=t[k.a],null!=e))return e.call(t);if(m.a&&(e=t[m.a],null!=e))return e.call(t)}throw new TypeError("Object is not async iterable")}var x=n("bc3a"),w=n.n(x),$=n("dc56"),I=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:t.gd(t.MS,function(t){return t.compiledRelease.ocid})}},[n("template",{slot:"title"},[n("div",{staticClass:"info-block accordion-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_process_id")))]),n("div",{staticClass:"info-block__value info-block__value_bold"},[n("procedure-id",[t._v(t._s(t.gd(t.MS,function(t){return t.compiledRelease.ocid},"")))])],1)]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_status")))]),n("div",{staticClass:"info-block__value info-block__value_bold"},[t._v("\n            "+t._s(t.$t("budget.contracting_state_"+t.gd(t.MS,function(t){return t.compiledRelease.tender.status},"")))+"\n          ")])]),t.EV?n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_status_detail")))]),n("div",{staticClass:"info-block__value info-block__value_bold"},[t._v(t._s(t.mapTenderStatus))])]):t._e()],1)],1)]),n("div",{staticClass:"info-blocks"},[t.PN?n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.prior_notice")))]),n("div",{staticClass:"info-block__value info-block__value"},[n("a",{attrs:{href:("ro"!==t.$i18n.locale?"/"+t.$i18n.locale:"")+"/plans/"+t.gd(t.MS,function(t){return t.compiledRelease.ocid}),target:"_blank"}},[t._v(t._s(t.gd(t.PN,function(t){return t.compiledRelease.ocid},"").toUpperCase()))])])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_publication_date")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.fd(t.procedure.publishedDate,"DD.MM.YYYY")))])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_last_update_date")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.fd(t.gd(t.PN,function(t){return t.compiledRelease.date}))))])])],1)],1):t._e(),t.EV?n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contract_notice")))]),n("div",{staticClass:"info-block__value info-block__value"},[n("a",{attrs:{href:("ro"!==t.$i18n.locale?"/"+t.$i18n.locale:"")+"/tenders/"+t.gd(t.MS,function(t){return t.compiledRelease.ocid}),target:"_blank"}},[t._v(t._s(t.gd(t.EV,function(t){return t.compiledRelease.ocid},"").toUpperCase()))])])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_publication_date")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.fd(t.gd(t.EV,function(t){return t.compiledRelease.tender.enquiryPeriod.startDate}),"DD.MM.YYYY"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_last_update_date")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.fd(t.gd(t.EV,function(t){return t.compiledRelease.date}))))])])],1)],1):t._e(),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.procuring_entity")))]),n("div",{staticClass:"info-block__value info-block__value"},[t._v("\n            "+t._s(t.gd(t.getOrganizationObject(t.gd(t.MS,function(t){return t.compiledRelease.parties}),"procuringEntity"),function(t){return t.name}))+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.registration_number")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.gd(t.getOrganizationObject(t.gd(t.MS,function(t){return t.compiledRelease.parties}),"procuringEntity"),function(t){return t.identifier.id}))+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:24}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_cpv")))]),n("div",{staticClass:"info-block__value info-block__value"},[t._v("\n            "+t._s(t.gd(t.MS,function(t){return t.compiledRelease.tender.classification.id}))+" -\n            "+t._s(t.gd(t.MS,function(t){return t.compiledRelease.tender.classification.description}))+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_method")))]),n("div",{staticClass:"info-block__value info-block__value"},[t._v("\n            "+t._s(t.selectProcedure(t.gd(t.MS,function(t){return t.compiledRelease.tender.mainProcurementCategory}),t.gd(t.MS,function(t){return t.compiledRelease.tender.value.amount},0)))+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_type")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.getMainProcurementCategory))])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_scope")))]),n("div",{staticClass:"info-block__value info-block__value"},[t._v(t._s(t.gd(t.MS,function(t){return t.compiledRelease.tender.title})))])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_amount")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.fa(t.gd(t.MS,function(t){return t.compiledRelease.tender.value.amount},0)))+"\n            "+t._s(t.gd(t.MS,function(t){return t.compiledRelease.tender.value.currency}))+"\n          ")])])],1)],1)]),t.ACs.length?n("div",{staticClass:"info-blocks"},[n("div",{staticClass:"info__sub-title"},[t._v(t._s(t.$t("budget.awarded_contracts")))]),t._l(t.ACs,function(e){return n("div",{key:t.gd(e,function(t){return t.compiledRelease.ocid}),staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.awarded_contracts_id")))]),n("div",{staticClass:"info-block__value info-block__value"},[t._v("\n            "+t._s(t.gd(e,function(t){return t.compiledRelease.ocid},"").toUpperCase())+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.awarded_contracts_amount")))]),n("div",{staticClass:"info-block__value"},[t.gd(e,function(t){return t.compiledRelease.contranst[0].value.amount})?[t._v("\n              "+t._s(t.fa(t.gd(e,function(t){return t.compiledRelease.contracts[0].value.amount},0)))+"\n              "+t._s(t.gd(t.MS,function(t){return t.compiledRelease.contracts[0].value.currency}))+"\n            ")]:[t._v("\n              Pending\n            ")]],2)]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budget.contracting_status")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.$t("budget.awarded_contracts_status_"+t.gd(e,function(t){return t.compiledRelease.contracts[0].status},"")))+"\n          ")])])],1)],1)})],2):t._e()],2)},O=[],S=n("025e"),E=n("2d5b"),P={name:"ExecutionItem",props:{procedure:{type:Object,required:!0},activeItemId:{type:String,required:!0}},components:{"procedure-id":E["a"]},computed:{MS:function(){return this.procedure.MS},PN:function(){return this.procedure.PN},EV:function(){return this.procedure.EV},ACs:function(){return this.procedure.ACs},mapTenderStatus:function(){var t=this.gd(this.EV,function(t){return t.compiledRelease.tender});return t?Object(S["i"])(t.status,t.statusDetails):""},getMainProcurementCategory:function(){return l["a"][this.gd(this.MS,function(t){return t.compiledRelease.tender.mainProcurementCategory})][this.$i18n.locale]}},methods:{gd:function(){return S["f"].apply(void 0,arguments)},fd:function(){return S["e"].apply(void 0,arguments)},fa:function(t){return Object(S["d"])(t)},getOrganizationObject:function(t,e){return Object(S["g"])(t,e)},selectProcedure:function(t,e){return Object(S["k"])(t,e)}}},j=P,B=n("2877"),R=Object(B["a"])(j,I,O,!1,null,null,null),M=R.exports,D=n("e7d0"),A=n("08b8"),z=n("b63b"),Y={name:"Execution",components:{"execution-item":M,"list-pagination":D["a"],"page-number":A["a"]},props:{getExecutionsId:{type:Array,required:!0}},data:function(){return{activeItemId:"",procedures:[],pageSize:25,numberOfLastDisplayedProcedure:25,currentPage:1,loaded:!1,error:{status:!1,message:""}}},computed:{needPagination:function(){return this.itemsNumber>this.pageSize},itemsNumber:function(){return this.procedures.length}},created:function(){this.getProcedures()},methods:{gd:function(){return S["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t},changePage:function(t){this.numberOfLastDisplayedProcedure=t*this.pageSize,this.currentPage=t},getProcedures:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){var e,n,i,a,o,r,c,l,d,u;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:this.loaded=!1,this.error={status:!1,message:""},e=!0,n=!1,t.prev=4,a=h(this.getExecutionsId);case 6:return t.next=8,a.next();case 8:return o=t.sent,e=o.done,t.next=12,o.value;case 12:if(r=t.sent,e){t.next=35;break}return c=r,t.prev=15,t.next=18,w()(Object($["i"])(z["b"],c));case 18:l=t.sent,d=l.data,u=d.records.reduce(function(t,e){return e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}$/)?Object(s["a"])({},t,{MS:e}):e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-PN-[0-9]{13}$/)?Object(s["a"])({},t,{PN:e}):e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-EV-[0-9]{13}$/)?Object(s["a"])({},t,{EV:e}):e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-AC-[0-9]{13}$/)?Object(s["a"])({},t,{ACs:[].concat(Object(b["a"])(t.ACs),[e])}):Object(s["a"])({},t)},{publishedDate:d.publishedDate,ACs:[]}),this.procedures=[].concat(Object(b["a"])(this.procedures),[u]),this.error={status:!1,message:""},t.next=29;break;case 25:return t.prev=25,t.t0=t["catch"](15),this.error={status:!0,message:t.t0.message},t.abrupt("break",35);case 29:return t.prev=29,this.loaded=!0,t.finish(29);case 32:e=!0,t.next=6;break;case 35:t.next=41;break;case 37:t.prev=37,t.t1=t["catch"](4),n=!0,i=t.t1;case 41:if(t.prev=41,t.prev=42,e||null==a.return){t.next=46;break}return t.next=46,a.return();case 46:if(t.prev=46,!n){t.next=49;break}throw i;case 49:return t.finish(46);case 50:return t.finish(41);case 51:case"end":return t.stop()}},t,this,[[4,37,41,51],[15,25,29,32],[42,,46,50]])}));function e(){return t.apply(this,arguments)}return e}()}},T=Y,L=Object(B["a"])(T,f,v,!1,null,null,null),q=L.exports,N=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"info"},[n("div",{staticClass:"info__title",attrs:{id:"contract-title"}},[t._v(t._s(t.$t("budget.spending")))]),n("div",{staticClass:"info-blocks"},[n("div",{staticClass:"info-block table-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            №\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.tender_id"))+"/"+t._s(t.$t("budget.contract_id"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.budget_project_id"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.amount"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.type"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.status"))+"\n          ")])])],1)],1)]),n("el-collapse",{attrs:{accordion:""},on:{change:t.changeActiveItem}},t._l(t.procedures,function(e,i){return n("spending-item",{key:e.id,attrs:{index:i,activeItemId:t.activeItemId,procedure:e}})}),1)],1)},F=[],V=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:1}},[n("template",{slot:"title"},[n("div",{staticClass:"info-blocks accordion-header"},[n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              "+t._s(t.index+1)+"\n            ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              1\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              2\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              3\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              4\n            ")])])],1)],1)])]),n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[n("div",{staticClass:"info-blocks"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            5\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            6\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            7\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            8\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            9\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            10\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            11\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            12\n          ")])])],1)],1)])],2)},U=[],G=(n("c5f6"),{name:"SpendingItem",props:{procedure:{type:Object,required:!0},index:{type:Number,required:!0},activeItemId:{type:String,required:!0}},methods:{gd:function(){return S["f"].apply(void 0,arguments)},fd:function(){return formatDate.apply(void 0,arguments)},fa:function(t){return Object(S["d"])(t)}}}),H=G,Z=Object(B["a"])(H,V,U,!1,null,null,null),J=Z.exports,W={name:"Spanding",components:{"spending-item":J},props:{},data:function(){return{activeItemId:"",procedures:[]}},methods:{gd:function(){return S["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t}}},K=W,Q=Object(B["a"])(K,N,F,!1,null,null,null),X=Q.exports,tt=function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.FSs.length?n("div",{staticClass:"info info_budget"},[t.needPagination?n("page-number",{attrs:{"current-page":t.currentPage,"elements-amount":t.elementsAmount,"page-size":t.pageSize}}):t._e(),n("el-collapse",{attrs:{accordion:"",value:t.mapFSs[0].ocid},on:{change:t.changeActiveItem}},t._l(t.mapFSs,function(e,i){return i>=t.numberOfLastDisplayedSource-t.pageSize&&i<t.numberOfLastDisplayedSource?n("budget-breakdown",{key:e.ocid,attrs:{budgetBreakdown:e}}):t._e()}),1),t.needPagination?n("list-pagination",{key:"pagination",attrs:{total:t.elementsAmount,pageCount:0,currentPage:t.currentPage,pageSize:t.pageSize,changePage:t.changePage,offsetTo:"contract-title"}}):t._e()],1):n("div",{staticClass:"info__no-data"},[t._v(t._s(t.$t("budget.no_finances_sources")))])},et=[],nt=n("d429"),it={name:"SourceItem",components:{"budget-breakdown":nt["a"],"list-pagination":D["a"],"page-number":A["a"]},props:{FSs:{type:Array,required:!0},buyer:{type:Object,required:!0}},data:function(){return{activeItemId:"",pageSize:25,numberOfLastDisplayedSource:25,currentPage:1}},computed:{needPagination:function(){return this.elementsAmount>this.pageSize},elementsAmount:function(){return this.FSs.length},mapFSs:function(){var t=this;return this.FSs.map(function(e){return{ocid:t.gd(e,function(t){return t.compiledRelease.ocid}),value:{amount:t.gd(e,function(t){return t.compiledRelease.planning.budget.amount.amount}),currency:t.gd(e,function(t){return t.compiledRelease.planning.budget.amount.currency})},sourceOfMoney:Object(S["h"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),t.gd(t.buyer,function(t){return t.id})),status:t.gd(e,function(t){return t.compiledRelease.planning.budget.verified}),budgetLineId:t.gd(e,function(t){return t.compiledRelease.planning.budget.id},t.$t("n/a")),description:t.gd(e,function(t){return t.compiledRelease.planning.budget.description},t.$t("n/a")),period:{startDate:t.gd(e,function(t){return t.compiledRelease.planning.budget.period.startDate}),endDate:t.gd(e,function(t){return t.compiledRelease.planning.budget.period.endDate})},project:t.gd(e,function(t){return t.compiledRelease.planning.budget.project},t.$t("n/a")),projectId:t.gd(e,function(t){return t.compiledRelease.planning.budget.projectID},t.$t("n/a")),buyer:{name:t.gd(t.buyer,function(t){return t.name}),id:t.gd(t.buyer,function(t){return t.identifier.id})},funder:{name:t.gd(Object(S["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"funder"),function(t){return t.name}),id:t.gd(Object(S["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"funder"),function(t){return t.identifier.id})},payer:{name:t.gd(Object(S["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"payer"),function(t){return t.name}),id:t.gd(Object(S["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"payer"),function(t){return t.identifier.id})}}})}},methods:{gd:function(){return S["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t},changePage:function(t){this.numberOfLastDisplayedSource=t*this.pageSize,this.currentPage=t}}},at=it,st=Object(B["a"])(at,tt,et,!1,null,null,null),ot=st.exports,rt=n("dda8"),ct={name:"BudgetPage",components:{spending:X,execution:q,"source-of-financing":ot,"procedure-id":E["a"],error:rt["default"]},data:function(){return{activeTab:"source-of-financing",tabs:["source-of-financing","execution","spending"]}},created:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){var e,n=this;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.getBudget();case 2:this.tabs=this.tabs.filter(function(t){return"execution"!==t||!!n.getExecutionsId.length}),e=this.$route.query,e.tab&&this.tabs.find(function(t){return e.tab===t})?this.activeTab=e.tab:(this.activeTab=this.tabs[0],this.$router.replace({query:{tab:this.tabs[0]}}));case 5:case"end":return t.stop()}},t,this)}));function e(){return t.apply(this,arguments)}return e}(),computed:Object(s["a"])({},Object(r["b"])({EI:function(t){return t.entities.budgets.currentEntity.entityData.EI.compiledRelease},FSs:function(t){return t.entities.budgets.currentEntity.entityData.FSs},loaded:function(t){return t.entities.budgets.loaded},error:function(t){return t.entities.budgets.error}}),{getTypeOfBuyer:function(){var t=this;return this.gd(this.gd(this.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}),function(t){return t.details.typeOfBuyer})?d["a"].find(function(e){return e.value===t.gd(t.gd(t.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}),function(t){return t.details.typeOfBuyer})}).name[this.$i18n.locale]:this.$t("n/a")},getMainGeneralActivity:function(){var t=this;return this.gd(this.gd(this.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}),function(t){return t.details.mainGeneralActivity})?u["a"].find(function(e){return e.value===t.gd(t.gd(t.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}),function(t){return t.details.mainGeneralActivity})}).name[this.$i18n.locale]:this.$t("n/a")},getMainSectoralActivity:function(){var t=this;return this.gd(this.gd(this.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}),function(t){return t.details.mainSectoralActivity})?_["a"].find(function(e){return e.value===t.gd(t.gd(t.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}),function(t){return t.details.mainSectoralActivity})}).name[this.$i18n.locale]:this.$t("n/a")},wholeAmount:function(){var t=this.gd(this.EI,function(t){return t.planning.budget.amount.amount},0).toString().replace(/\B(?=(\d{3})+(?!\d))/g," ");return/\./.test(t)?t.slice(0,t.indexOf(".")):t},fractionAmount:function(){var t=this.gd(this.EI,function(t){return t.planning.budget.amount.amount},0).toString();return/\./.test(t)?1===t.slice(t.indexOf(".")+1).length?t.slice(t.indexOf(".")+1)+"0":t.slice(t.indexOf(".")+1):"00"},getExecutionsId:function(){return this.gd(this.EI,function(t){return t.relatedProcesses},[]).filter(function(t){return t.relationship.find(function(t){return"x_execution"===t})}).map(function(t){return t.identifier})},getMainProcurementCategory:function(){return l["a"][this.gd(this.EI,function(t){return t.tender.mainProcurementCategory})][this.$i18n.locale]}}),methods:{getBudget:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.$store.dispatch(c["b"],{id:this.$route.params.id});case 2:case"end":return t.stop()}},t,this)}));function e(){return t.apply(this,arguments)}return e}(),getOrganizationObject:function(t,e){return Object(S["g"])(t,e)},gd:function(){return S["f"].apply(void 0,arguments)},fd:function(t,e){return Object(S["e"])(t,e)},handleClick:function(t){this.$router.replace({query:{tab:t.name}})}}},lt=ct,dt=Object(B["a"])(lt,i,a,!1,null,null,null);e["default"]=dt.exports},d429:function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:t.budgetBreakdown.ocid}},[n("template",{slot:"title"},[n("div",{staticClass:"info-block accordion-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.funding_source_id")))]),n("div",{staticClass:"info-block__value info-block__value_bold",staticStyle:{"user-select":"none"}},[t._v("\n            "+t._s(t.budgetBreakdown.ocid.toUpperCase())+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.amount")))]),n("div",{staticClass:"info-block__value info-block__value_bold"},[t._v("\n            "+t._s(t.fa(t.budgetBreakdown.value.amount))+"\n            "+t._s(t.budgetBreakdown.value.currency)+"\n          ")])]),null!==t.budgetBreakdown.status?n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.status")))]),n("div",{staticClass:"info-block__value info-block__value_bold"},[t._v("\n            "+t._s(t.budgetBreakdown.status?t.$t("budgetBreakdown.verified"):t.$t("budgetBreakdown.not_verified"))+"\n          ")])]):t._e()],1)],1)]),n("div",{staticClass:"info-blocks"},[n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budget_details_rationale")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.budgetBreakdown.description))])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.validity_period")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.fd(t.budgetBreakdown.period.startDate,"DD.MM.YYYY"))+"\n            -\n            "+t._s(t.fd(t.budgetBreakdown.period.endDate,"DD.MM.YYYY"))+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.source_of_money")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.budgetBreakdown.sourceOfMoney))])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budget_ID")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.budgetLineId)+"\n          ")])])],1)],1),t.budgetBreakdown.EIocid?n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.expenditure_item_name")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.budgetBreakdown.EIname))])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.expenditure_item_id")))]),n("div",{staticClass:"info-block__value"},[n("div",{staticClass:"info-block__value"},[n("a",{staticClass:"info-block__text_link",attrs:{href:("ro"!==t.$i18n.locale?"/"+t.$i18n.locale:"")+"/budgets/"+t.budgetBreakdown.EIocid,target:"_blank","data-link":""}},[t._v("\n                "+t._s(t.budgetBreakdown.EIocid.toUpperCase())+"\n              ")])])])])],1)],1):t._e(),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budget_project")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.project)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.project_ID")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.projectId)+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budget_owner")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.buyer.name)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.procuring_entity_identifier")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.buyer.id)+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.payer_entity")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.payer.name)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.procuring_entity_identifier")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.payer.id)+"\n          ")])])],1)],1),t.budgetBreakdown.funder.id?n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.funding_entity")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.funder.name)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.procuring_entity_identifier")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.funder.id)+"\n          ")])])],1)],1):t._e()])],2)},a=[],s=n("025e"),o={name:"SourceItem",props:{budgetBreakdown:{type:Object,required:!0}},methods:{fd:function(){return s["e"].apply(void 0,arguments)},fa:function(t){return Object(s["d"])(t)}}},r=o,c=n("2877"),l=Object(c["a"])(r,i,a,!1,null,null,null);e["a"]=l.exports},d9a3:function(t,e,n){t.exports=n("5b0f")},dda8:function(t,e,n){"use strict";n.r(e);var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"error"},[n("div",{staticClass:"error-message"},[t._v(t._s(t.message))]),n("button",{staticClass:"back-btn",on:{click:function(e){return t.$router.go(-1)}}},[t._v(t._s(t.$t("back")))])])},a=[],s={name:"Error",props:{message:{type:String,default:function(){return"404 Page not found"}}}},o=s,r=n("2877"),c=Object(r["a"])(o,i,a,!1,null,null,null);e["default"]=c.exports}}]);