(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["BudgetPage"],{c34e:function(t,e,n){"use strict";n.r(e);var a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n(t.component,{tag:"component"})},i=[],s=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"entity-wp"},[n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[t.loaded||t.error.status?t.loaded&&Object.keys(t.EI).length?n("div",{key:"info"},[n("div",{staticClass:"entity-main-info entity-main-info__budget "},[n("el-container",{attrs:{direction:"vertical"}},[n("el-row",[n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"entity-main-info__title"},[t._v("\n                "+t._s(t.gd(t.EI,function(t){return t.tender.title}))+"\n              ")]),n("div",{staticClass:"entity-main-info__description"},[t._v("\n                "+t._s(t.gd(t.EI,function(t){return t.tender.classification.description}))+"\n              ")]),n("div",{staticClass:"entity-main-info__timeline"})]),n("el-col",{attrs:{xs:22,sm:6,offset:2}},[n("div",{staticClass:"entity-main-info__value"},[t.gd(t.EI,function(t){return t.planning.budget},{}).hasOwnProperty("amount")?n("div",[n("div",[t._v(t._s(t.$t("budget.estimated_value_excluding_VAT")))]),n("span",{staticClass:"entity-main-info__amount"},[n("span",{staticClass:"whole"},[t._v(t._s(t.wholeAmount)+" ")]),n("span",{staticClass:"fraction"},[n("span",{staticClass:"dot"},[t._v(".")]),t._v(t._s(t.fractionAmount))]),n("span",{staticClass:"entity-main-info__currency"},[t._v("\n                      "+t._s(t.gd(t.EI,function(t){return t.planning.budget.amount.currency}))+"\n                    ")])])]):n("div",[t._v("\n                  "+t._s(t.$t("budget.no_finances_sources"))+"\n                ")])]),n("div",{staticClass:"entity-main-info__additional"},[n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.buyer_name")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.buyer.name}))+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.region")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}).address.addressDetails.region.description)+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.number_of_notice")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.ocid}))+"\n                  ")])])])])],1)],1)],1),n("div",{staticClass:"entity-tabs entity-tabs_budget"},[n("el-container",{attrs:{direction:"vertical"}},[n("el-row",[n("el-col",{attrs:{xs:24}},[n("el-tabs",{model:{value:t.activeTab,callback:function(e){t.activeTab=e},expression:"activeTab"}},[n("el-tab-pane",{key:"sourceOfFinancing",attrs:{name:"sourceOfFinancing",lazy:""}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.source_of_financing"))},slot:"label"}),n("source-of-financing",{attrs:{FSs:t.FSs,buyer:t.gd(t.EI,function(t){return t.buyer})}})],1),n("el-tab-pane",{key:"execution",attrs:{name:"execution",lazy:"",disabled:!t.getExecutionsId.length}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.execution"))},slot:"label"}),n("execution",{attrs:{getExecutionsId:t.getExecutionsId}})],1),n("el-tab-pane",{key:"spending",attrs:{name:"spending",lazy:"",disabled:""}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.spending"))},slot:"label"}),n("spending")],1)],1)],1)],1)],1)],1)]):n("el-container",{key:"error",staticClass:"error"},[n("div",{staticClass:"error-message"},[t._v(t._s(t.error.message))]),n("button",{staticClass:"refresh-btn",on:{click:t.getBudget}},[t._v("\n        "+t._s(t.$t("refresh"))+"\n      ")]),n("button",{staticClass:"back-btn",on:{click:function(e){return t.$router.go(-1)}}},[t._v(t._s(t.$t("back")))])]):n("el-container",{key:"loading"},[n("div",{staticClass:"loading"})])],1)],1)},r=[],o=(n("96cf"),n("1da1")),c=(n("7514"),n("6b54"),n("a481"),n("be94")),l=n("2f62"),d=n("4df7"),u=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[t.loaded||t.error.status?t.loaded&&!t.error.status?n("div",{key:"info",staticClass:"info info_budget"},[t.needPagination?n("page-number",{attrs:{"current-page":t.currentPage,"elements-amount":t.elementsAmount,"page-size":t.pageSize}}):t._e(),n("el-collapse",{attrs:{accordion:"",value:t.getExecutionsId[0]},on:{change:t.changeActiveItem}},t._l(t.procedures,function(e,a){return a>=t.numberOfLastDisplayedProcedure-t.pageSize&&a<t.numberOfLastDisplayedProcedure?n("execution-item",{key:e.id,attrs:{index:a,activeItemId:t.activeItemId,procedure:e}}):t._e()}),1),t.needPagination?n("list-pagination",{key:"pagination",attrs:{total:t.elementsAmount,pageCount:0,currentPage:t.currentPage,pageSize:t.pageSize,changePage:t.changePage,offsetTo:"contract-title"}}):t._e()],1):n("div",{key:"error",staticClass:"error"},[n("div",{staticClass:"error-message"},[t._v(t._s(t.error.message))]),n("button",{staticClass:"refresh-btn",on:{click:t.getProcedures}},[t._v("\n      "+t._s(t.$t("refresh"))+"\n    ")])]):n("div",{key:"loading"},[n("div",{staticClass:"loading"})])])},_=[],f=n("2909");n("4917");function g(t){var e;if("function"===typeof Symbol){if(Symbol.asyncIterator&&(e=t[Symbol.asyncIterator],null!=e))return e.call(t);if(Symbol.iterator&&(e=t[Symbol.iterator],null!=e))return e.call(t)}throw new TypeError("Object is not async iterable")}var b=n("bc3a"),v=n.n(b),m=n("dc56"),p=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:t.gd(t.ms,function(t){return t.ocid})}},[n("template",{slot:"title"},[n("div",{staticClass:"info-blocks accordion-header"},[n("div",{staticClass:"info-block accordion-table"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.cpv")}},[t._v("\n              "+t._s(t.gd(t.ms,function(t){return t.tender.classification.id}))+",\n              "+t._s(t.gd(t.ms,function(t){return t.tender.classification.description}))+"\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.method")}},[t._v("\n              "+t._s(t.selectProcedure(t.gd(t.ms,function(t){return t.tender.mainProcurementCategory}),t.gd(t.ms,function(t){return t.tender.value.amount})))+"\n            ")])]),n("el-col",{attrs:{sm:5}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.current_status")}},[t._v("\n              "+t._s(t.mapProcedureStatus)+"\n            ")])]),n("el-col",{attrs:{sm:5}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.expected_value")}},[t._v("\n              "+t._s(t.fa(t.gd(t.ms,function(t){return t.tender.value.amount})))+" "+t._s(t.gd(t.ms,function(t){return t.tender.value.currency}))+"\n            ")])])],1)],1)])]),n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[n("div",{staticClass:"info-blocks"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.procedure_id"))+"\n          ")])]),n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[n("a",{staticClass:"info-block__text_link",attrs:{href:("ro"!==t.$i18n.locale?"/"+t.$i18n.locale:"")+"/"+t.getEntityName+"/"+t.gd(t.ms,function(t){return t.ocid}),target:"_blank","data-link":""}},[t._v("\n              "+t._s(t.gd(t.ms,function(t){return t.ocid}))+"\n            ")])])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.title"))+"\n          ")])]),n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.ms,function(t){return t.tender.title}))+"\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.procuring_entity"))+"\n          ")])]),n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.getOrganizationObject(t.gd(t.ms,function(t){return t.parties},[]),"procuringEntity"),function(t){return t.name}))+"\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.payer_entity"))+"\n          ")])]),n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.getOrganizationObject(t.gd(t.ms,function(t){return t.parties},[]),"payer"),function(t){return t.name}))+"\n          ")])])],1)],1)])],2)},k=[],h=(n("7f7f"),n("c5f6"),n("025e")),y=n("ade8"),x={name:"ExecutionItem",props:{procedure:{type:Object,required:!0},index:{type:Number,required:!0},activeItemId:{type:String,required:!0}},computed:{ms:function(){return this.gd(this.procedure.MS,function(t){return t.compiledRelease})},activeStage:function(){return this.procedure.hasOwnProperty("EV")?this.gd(this.procedure,function(t){return t.EV}):this.gd(this.procedure,function(t){return t.PN})},mapProcedureStatus:function(){if(this.activeStage.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-PN-[0-9]{13}$/))return y["a"].plans.find(function(t){return"planning notice"===t.value}).name[this.$i18n.locale];var t="".concat(this.activeStage.compiledRelease.tender.status,".").concat(this.activeStage.compiledRelease.tender.statusDetails);switch(t){case"active.clarification":return y["a"].tenders.find(function(t){return"clarification"===t.value}).name[this.$i18n.locale];case"active.tendering":return y["a"].tenders.find(function(t){return"tendering"===t.value}).name[this.$i18n.locale];case"active.auction":return y["a"].tenders.find(function(t){return"auction"===t.value}).name[this.$i18n.locale];case"unsuccessful.empty":return y["a"].tenders.find(function(t){return"unsuccessful"===t.value}).name[this.$i18n.locale];case"active.awarding":return y["a"].tenders.find(function(t){return"awarding"===t.value}).name[this.$i18n.locale];case"active.awardedContractPreparation":return y["a"].tenders.find(function(t){return"awarded"===t.value}).name[this.$i18n.locale];case"active.suspended":return y["a"].tenders.find(function(t){return"suspended"===t.value}).name[this.$i18n.locale];case"complete.empty":return y["a"].tenders.find(function(t){return"complete"===t.value}).name[this.$i18n.locale];case"cancelled.empty":return y["a"].tenders.find(function(t){return"cancelled"===t.value}).name[this.$i18n.locale]}},getEntityName:function(){return this.activeStage.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-PN-[0-9]{13}$/)?"plans":"tenders"}},methods:{gd:function(){return h["f"].apply(void 0,arguments)},fa:function(t){return Object(h["d"])(t)},getOrganizationObject:function(t,e){return Object(h["g"])(t,e)},selectProcedure:function(t,e){return Object(h["j"])(t,e)}}},C=x,w=n("2877"),$=Object(w["a"])(C,p,k,!1,null,null,null);$.options.__file="ExecutionItem.vue";var I=$.exports,O=n("e7d0"),S=n("08b8"),P=n("b63b"),j={name:"Execution",components:{"execution-item":I,"list-pagination":O["a"],"page-number":S["a"]},props:{getExecutionsId:{type:Array,required:!0}},data:function(){return{activeItemId:"",procedures:[],pageSize:25,numberOfLastDisplayedProcedure:25,currentPage:1,loaded:!1,error:{status:!1,message:""}}},computed:{needPagination:function(){return this.elementsAmount>this.pageSize},elementsAmount:function(){return this.procedures.length}},created:function(){this.getProcedures()},methods:{gd:function(){return h["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t},changePage:function(t){this.numberOfLastDisplayedProcedure=t*this.pageSize,this.currentPage=t},getProcedures:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){var e,n,a,i,s,r,o,l,d,u;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:this.loaded=!1,this.error={status:!1,message:""},e=!0,n=!1,t.prev=4,i=g(this.getExecutionsId);case 6:return t.next=8,i.next();case 8:return s=t.sent,e=s.done,t.next=12,s.value;case 12:if(r=t.sent,e){t.next=35;break}return o=r,t.prev=15,t.next=18,v()(Object(m["g"])(P["b"],o));case 18:l=t.sent,d=l.data,u=d.records.reduce(function(t,e){return e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}$/)?Object(c["a"])({},t,{MS:e}):e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-PN-[0-9]{13}$/)?Object(c["a"])({},t,{PN:e}):e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-EV-[0-9]{13}$/)?Object(c["a"])({},t,{EV:e}):Object(c["a"])({},t)},{}),this.procedures=Object(f["a"])(this.procedures).concat([Object(c["a"])({},u)]),this.error={status:!1,message:""},t.next=29;break;case 25:return t.prev=25,t.t0=t["catch"](15),this.error={status:!0,message:t.t0.message},t.abrupt("break",35);case 29:return t.prev=29,this.loaded=!0,t.finish(29);case 32:e=!0,t.next=6;break;case 35:t.next=41;break;case 37:t.prev=37,t.t1=t["catch"](4),n=!0,a=t.t1;case 41:if(t.prev=41,t.prev=42,e||null==i.return){t.next=46;break}return t.next=46,i.return();case 46:if(t.prev=46,!n){t.next=49;break}throw a;case 49:return t.finish(46);case 50:return t.finish(41);case 51:case"end":return t.stop()}},t,this,[[4,37,41,51],[15,25,29,32],[42,,46,50]])}));function e(){return t.apply(this,arguments)}return e}()}},B=j,E=Object(w["a"])(B,u,_,!1,null,null,null);E.options.__file="Execution.vue";var z=E.exports,A=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"info"},[n("div",{staticClass:"info__title",attrs:{id:"contract-title"}},[t._v(t._s(t.$t("budget.spending")))]),n("div",{staticClass:"info-blocks"},[n("div",{staticClass:"info-block table-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            №\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.tender_id"))+"/"+t._s(t.$t("budget.contract_id"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.budget_project_id"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.amount"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.type"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.status"))+"\n          ")])])],1)],1)]),n("el-collapse",{attrs:{accordion:""},on:{change:t.changeActiveItem}},t._l(t.procedures,function(e,a){return n("spending-item",{key:e.id,attrs:{index:a,activeItemId:t.activeItemId,procedure:e}})}),1)],1)},D=[],R=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:1}},[n("template",{slot:"title"},[n("div",{staticClass:"info-blocks accordion-header"},[n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              "+t._s(t.index+1)+"\n            ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              1\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              2\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              3\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              4\n            ")])])],1)],1)])]),n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[n("div",{staticClass:"info-blocks"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            5\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            6\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            7\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            8\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            9\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            10\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            11\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            12\n          ")])])],1)],1)])],2)},F=[],M={name:"SpendingItem",props:{procedure:{type:Object,required:!0},index:{type:Number,required:!0},activeItemId:{type:String,required:!0}},methods:{gd:function(){return h["f"].apply(void 0,arguments)},fd:function(){return formatDate.apply(void 0,arguments)},fa:function(t){return Object(h["d"])(t)}}},L=M,T=Object(w["a"])(L,R,F,!1,null,null,null);T.options.__file="SpendingItem.vue";var q=T.exports,N={name:"Spanding",components:{"spending-item":q},props:{},data:function(){return{activeItemId:"",procedures:[]}},methods:{gd:function(){return h["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t}}},Y=N,V=Object(w["a"])(Y,A,D,!1,null,null,null);V.options.__file="Spending.vue";var Z=V.exports,H=function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.FSs.length?n("div",{staticClass:"info info_budget"},[t.needPagination?n("page-number",{attrs:{"current-page":t.currentPage,"elements-amount":t.elementsAmount,"page-size":t.pageSize}}):t._e(),n("el-collapse",{attrs:{accordion:"",value:t.mapFSs[0].ocid},on:{change:t.changeActiveItem}},t._l(t.mapFSs,function(e,a){return a>=t.numberOfLastDisplayedSource-t.pageSize&&a<t.numberOfLastDisplayedSource?n("budget-breakdown",{key:e.ocid,attrs:{budgetBreakdown:e}}):t._e()}),1),t.needPagination?n("list-pagination",{key:"pagination",attrs:{total:t.elementsAmount,pageCount:0,currentPage:t.currentPage,pageSize:t.pageSize,changePage:t.changePage,offsetTo:"contract-title"}}):t._e()],1):n("div",{staticClass:"info__no-data"},[t._v(t._s(t.$t("budget.no_finances_sources")))])},J=[],G=n("d429"),K={name:"SourceItem",components:{"budget-breakdown":G["a"],"list-pagination":O["a"],"page-number":S["a"]},props:{FSs:{type:Array,required:!0},buyer:{type:Object,required:!0}},data:function(){return{activeItemId:"",pageSize:25,numberOfLastDisplayedSource:25,currentPage:1}},computed:{needPagination:function(){return this.elementsAmount>this.pageSize},elementsAmount:function(){return this.FSs.length},mapFSs:function(){var t=this;return this.FSs.map(function(e){return{ocid:t.gd(e,function(t){return t.compiledRelease.ocid}),value:{amount:t.gd(e,function(t){return t.compiledRelease.planning.budget.amount.amount}),currency:t.gd(e,function(t){return t.compiledRelease.planning.budget.amount.currency})},sourceOfMoney:Object(h["h"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),t.gd(t.buyer,function(t){return t.id})),status:t.gd(e,function(t){return t.compiledRelease.planning.budget.status}),description:t.gd(e,function(t){return t.compiledRelease.planning.budget.description},"n/a"),period:{startDate:t.gd(e,function(t){return t.compiledRelease.planning.budget.period.startDate}),endDate:t.gd(e,function(t){return t.compiledRelease.planning.budget.period.endDate})},project:t.gd(e,function(t){return t.compiledRelease.planning.budget.project},"n/a"),projectId:t.gd(e,function(t){return t.compiledRelease.planning.budget.projectID},"n/a"),buyer:{name:t.gd(t.buyer,function(t){return t.name}),id:t.gd(t.buyer,function(t){return t.id})},funder:{name:t.gd(Object(h["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"funder"),function(t){return t.name}),id:t.gd(Object(h["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"funder"),function(t){return t.id})},payer:{name:t.gd(Object(h["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"payer"),function(t){return t.name}),id:t.gd(Object(h["g"])(t.gd(e,function(t){return t.compiledRelease.parties},[]),"payer"),function(t){return t.id})}}})}},methods:{gd:function(){return h["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t},changePage:function(t){this.numberOfLastDisplayedSource=t*this.pageSize,this.currentPage=t}}},Q=K,U=Object(w["a"])(Q,H,J,!1,null,null,null);U.options.__file="SourceOfFinancing.vue";var W=U.exports,X={name:"BudgetPage",components:{spending:Z,execution:z,"source-of-financing":W},data:function(){return{activeTab:"sourceOfFinancing"}},created:function(){this.getBudget()},computed:Object(c["a"])({},Object(l["b"])({EI:function(t){return t.entities.budgets.currentEntity.entityData.EI.compiledRelease},FSs:function(t){return t.entities.budgets.currentEntity.entityData.FSs},loaded:function(t){return t.entities.budgets.loaded},error:function(t){return t.entities.budgets.error}}),{wholeAmount:function(){var t=this.gd(this.EI,function(t){return t.planning.budget.amount.amount},0).toString().replace(/\B(?=(\d{3})+(?!\d))/g," ");return/\./.test(t)?t.slice(0,t.indexOf(".")):t},fractionAmount:function(){var t=this.gd(this.EI,function(t){return t.planning.budget.amount.amount},0).toString();return/\./.test(t)?1===t.slice(t.indexOf(".")+1).length?t.slice(t.indexOf(".")+1)+"0":t.slice(t.indexOf(".")+1):"00"},getExecutionsId:function(){return this.gd(this.EI,function(t){return t.relatedProcesses},[]).filter(function(t){return t.relationship.find(function(t){return"x_execution"===t})}).map(function(t){return t.identifier})}}),methods:{getBudget:function(){var t=Object(o["a"])(regeneratorRuntime.mark(function t(){return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.$store.dispatch(d["b"],{id:this.$route.params.id});case 2:case"end":return t.stop()}},t,this)}));function e(){return t.apply(this,arguments)}return e}(),gd:function(){return h["f"].apply(void 0,arguments)}}},tt=X,et=Object(w["a"])(tt,s,r,!1,null,null,null);et.options.__file="BudgetPage.vue";var nt=et.exports,at={name:"ContainerBudgetPage",components:{"budget-page":nt},data:function(){return{component:"budget-page"}}},it=at,st=Object(w["a"])(it,a,i,!1,null,null,null);st.options.__file="ContainerBudgetPage.vue";e["default"]=st.exports},d429:function(t,e,n){"use strict";var a=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:t.budgetBreakdown.ocid}},[n("template",{slot:"title"},[n("div",{staticClass:"info-block accordion-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budgetline_id")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.ocid)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.amount")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.fa(t.budgetBreakdown.value.amount))+"\n            "+t._s(t.budgetBreakdown.value.currency)+"\n          ")])])],1)],1)]),n("div",{staticClass:"info-blocks"},[n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budget_details_rationale")))]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.budgetBreakdown.description))])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.validity_period")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.fd(t.budgetBreakdown.period.startDate,"DD.MM.YYYY"))+"\n            -\n            "+t._s(t.fd(t.budgetBreakdown.period.endDate,"DD.MM.YYYY"))+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v("Source of Money")]),n("div",{staticClass:"info-block__value"},[t._v(t._s(t.budgetBreakdown.sourceOfMoney))])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v("Status")]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.status?t.$t("budget.verified"):t.$t("budget.not_verified"))+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budget_project")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.project)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.project_ID")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.projectId)+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.budget_owner")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.buyer.name)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.procuring_entity_identifier")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.buyer.id)+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.payer_entity")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.payer.name)+"\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.procuring_entity_identifier")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.payer.id)+"\n          ")])])],1)],1),n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:16}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.funding_entity")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.funder.name)+"\n          ")])]),t.budgetBreakdown.funder.id?n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text"},[t._v(t._s(t.$t("budgetBreakdown.procuring_entity_identifier")))]),n("div",{staticClass:"info-block__value"},[t._v("\n            "+t._s(t.budgetBreakdown.funder.id)+"\n          ")])]):t._e()],1)],1)])],2)},i=[],s=n("025e"),r={name:"SourceItem",props:{budgetBreakdown:{type:Object,required:!0}},methods:{fd:function(){return s["e"].apply(void 0,arguments)},fa:function(t){return Object(s["d"])(t)}}},o=r,c=n("2877"),l=Object(c["a"])(o,a,i,!1,null,null,null);l.options.__file="BudgetBreakdown.vue";e["a"]=l.exports}}]);