(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["BudgetPage"],{"5b0f":function(t,e,n){n("69d3"),t.exports=n("ccb9").f("asyncIterator")},c34e:function(t,e,n){"use strict";n.r(e);var s=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n(t.component,{tag:"component"})},a=[],i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"entity-wp"},[n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[t.loaded||t.error.status?t.loaded&&Object.keys(t.EI).length?n("div",{key:"info"},[n("div",{staticClass:"entity-main-info entity-main-info__budget "},[n("el-container",{attrs:{direction:"vertical"}},[n("el-row",[n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"entity-main-info__title"},[t._v("\n                "+t._s(t.gd(t.EI,function(t){return t.tender.title}))+"\n              ")]),n("div",{staticClass:"entity-main-info__description"},[t._v("\n                "+t._s(t.gd(t.EI,function(t){return t.tender.classification.description}))+"\n              ")]),n("div",{staticClass:"entity-main-info__timeline"})]),n("el-col",{attrs:{xs:22,sm:6,offset:2}},[n("div",{staticClass:"entity-main-info__value"},[t.gd(t.EI,function(t){return t.planning.budget},{}).hasOwnProperty("amount")?n("div",[n("div",[t._v(" "+t._s(t.$t("budget.estimated_value_excluding_VAT")))]),n("span",{staticClass:"entity-main-info__amount"},[n("span",{staticClass:"whole"},[t._v(t._s(t.wholeAmount)+" ")]),n("span",{staticClass:"fraction"},[n("span",{staticClass:"dot"},[t._v(".")]),t._v(t._s(t.fractionAmount))]),n("span",{staticClass:"entity-main-info__currency"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.planning.budget.amount.currency}))+"\n                  ")])])]):n("div",[t._v("\n                  "+t._s(t.$t("budget.no_finances_sources"))+"\n                ")])]),n("div",{staticClass:"entity-main-info__additional"},[n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.procuring_entity_name")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.buyer.name}))+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.region")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"buyer"===t})}).address.addressDetails.region.description)+"\n                  ")])]),n("div",{staticClass:"entity-main-info__additional-block"},[n("div",{staticClass:"entity-main-info__additional-title"},[t._v(t._s(t.$t("budget.number_of_notice")))]),n("div",{staticClass:"entity-main-info__additional-value"},[t._v("\n                    "+t._s(t.gd(t.EI,function(t){return t.ocid}))+"\n                  ")])])])])],1)],1)],1),n("div",{staticClass:"entity-tabs entity-tabs_budget"},[n("el-container",{attrs:{direction:"vertical"}},[n("el-row",[n("el-col",{attrs:{xs:24}},[n("el-tabs",{model:{value:t.activeTab,callback:function(e){t.activeTab=e},expression:"activeTab"}},[n("el-tab-pane",{key:"sourceOfFinancing",attrs:{name:"sourceOfFinancing",lazy:""}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.source_of_financing"))},slot:"label"}),n("source-of-financing",{attrs:{FSs:t.FSs}})],1),n("el-tab-pane",{key:"execution",attrs:{name:"execution",lazy:"",disabled:!t.getExecutionsId.length}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.execution"))},slot:"label"}),n("execution",{attrs:{getExecutionsId:t.getExecutionsId}})],1),n("el-tab-pane",{key:"spending",attrs:{name:"spending",lazy:"",disabled:""}},[n("span",{attrs:{slot:"label"},domProps:{innerHTML:t._s(t.$t("budget.spending"))},slot:"label"}),n("spending")],1)],1)],1)],1)],1)],1)]):n("el-container",{key:"error",staticClass:"error"},[n("div",{staticClass:"error-message"},[t._v(" "+t._s(t.error.message))]),n("button",{staticClass:"refresh-btn",on:{click:t.getBudget}},[t._v("\n        "+t._s(t.$t("refresh"))+"\n      ")]),n("button",{staticClass:"back-btn",on:{click:function(e){return t.$router.go(-1)}}},[t._v(t._s(t.$t("back")))])]):n("el-container",{key:"loading"},[n("div",{staticClass:"loading"})])],1)],1)},o=[],r=(n("96cf"),n("3b8d")),c=(n("7514"),n("6b54"),n("a481"),n("cebc")),l=n("2f62"),d=n("4df7"),u=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[t.loaded||t.error.status?t.loaded&&!t.error.status?n("div",{key:"info",staticClass:"info"},[n("div",{staticClass:"info__title",attrs:{id:"contract-title"}},[t._v(t._s(t.$t("budget.execution")))]),t.needPagination?n("page-number",{attrs:{"current-page":t.currentPage,"elements-amount":t.elementsAmount,"page-size":t.pageSize}}):t._e(),n("div",{staticClass:"info-blocks"},[n("div",{staticClass:"info-block table-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            №\n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.cpv"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.method"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.current_status"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.expected_value"))+"\n          ")])])],1)],1)]),n("el-collapse",{attrs:{accordion:"",value:t.getExecutionsId[0]},on:{change:t.changeActiveItem}},t._l(t.procedures,function(e,s){return s>=t.numberOfLastDisplayedProcedure-t.pageSize&&s<t.numberOfLastDisplayedProcedure?n("execution-item",{key:e.id,attrs:{index:s,activeItemId:t.activeItemId,procedure:e}}):t._e()}),1),t.needPagination?n("list-pagination",{key:"pagination",attrs:{total:t.elementsAmount,pageCount:0,currentPage:t.currentPage,pageSize:t.pageSize,changePage:t.changePage,offsetTo:"contract-title"}}):t._e()],1):n("div",{key:"error",staticClass:"error"},[n("div",{staticClass:"error-message"},[t._v(t._s(t.error.message))]),n("button",{staticClass:"refresh-btn",on:{click:t.getProcedures}},[t._v("\n    "+t._s(t.$t("refresh"))+"\n  ")])]):n("div",{key:"loading"},[n("div",{staticClass:"loading"})])])},_=[],f=n("75fc"),b=(n("4917"),n("5d58")),g=n.n(b),m=n("d9a3"),v=n.n(m),p=n("67bb"),x=n.n(p);function k(t){var e;if("function"===typeof x.a){if(v.a&&(e=t[v.a],null!=e))return e.call(t);if(g.a&&(e=t[g.a],null!=e))return e.call(t)}throw new TypeError("Object is not async iterable")}var h=n("bc3a"),C=n.n(h),y=n("dc56"),$=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:t.gd(t.ms,function(t){return t.ocid})}},[n("template",{slot:"title"},[n("div",{staticClass:"info-blocks accordion-header"},[n("div",{staticClass:"info-block accordion-table"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":"№"}},[t._v("\n              "+t._s(t.index+1)+"\n            ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.cpv")}},[t._v("\n              "+t._s(t.gd(t.ms,function(t){return t.tender.classification.id}))+",\n              "+t._s(t.gd(t.ms,function(t){return t.tender.classification.description}))+"\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.method")}},[t._v("\n              "+t._s(t.selectProcedure(t.gd(t.ms,function(t){return t.tender.mainProcurementCategory}),t.gd(t.ms,function(t){return t.tender.value.amount})))+"\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.current_status")}},[t._v("\n              "+t._s(t.mapProcedureStatus)+"\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.expected_value")}},[t._v("\n              "+t._s(t.fa(t.gd(t.ms,function(t){return t.tender.value.amount})))+" "+t._s(t.gd(t.ms,function(t){return t.tender.value.currency}))+"\n            ")])])],1)],1)])]),n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[n("div",{staticClass:"info-blocks"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.procedure_id"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[n("a",{staticClass:"info-block__text_link",attrs:{href:("ro"!==t.$i18n.locale?"/"+t.$i18n.locale:"")+"/"+t.getEntityName+"/"+t.gd(t.ms,function(t){return t.ocid}),target:"_blank","data-link":""}},[t._v("\n              "+t._s(t.gd(t.ms,function(t){return t.ocid}))+"\n            ")])])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.title"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.ms,function(t){return t.tender.title}))+"\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.procuring_entity"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.getOrganizationName(t.gd(t.ms,function(t){return t.parties},[]),"procuringEntity"))+"\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.payer_entity"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.getOrganizationName(t.gd(t.ms,function(t){return t.parties},[]),"payer"))+"\n          ")])])],1)],1)])],2)},I=[],O=(n("7f7f"),n("c5f6"),n("025e")),P=n("ade8"),w={name:"ExecutionItem",props:{procedure:{type:Object,required:!0},index:{type:Number,required:!0},activeItemId:{type:String,required:!0}},computed:{ms:function(){return this.gd(this.procedure.MS,function(t){return t.compiledRelease})},activeStage:function(){return this.procedure.hasOwnProperty("EV")?this.gd(this.procedure,function(t){return t.EV}):this.gd(this.procedure,function(t){return t.PN})},mapProcedureStatus:function(){if(this.activeStage.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-PN-[0-9]{13}$/))return P["a"].plans.find(function(t){return"planning notice"===t.value}).name[this.$i18n.locale];var t="".concat(this.activeStage.compiledRelease.tender.status,".").concat(this.activeStage.compiledRelease.tender.statusDetails);switch(t){case"active.clarification":return P["a"].tenders.find(function(t){return"clarification"===t.value}).name[this.$i18n.locale];case"active.tendering":return P["a"].tenders.find(function(t){return"tendering"===t.value}).name[this.$i18n.locale];case"active.auction":return P["a"].tenders.find(function(t){return"auction"===t.value}).name[this.$i18n.locale];case"unsuccessful.empty":return P["a"].tenders.find(function(t){return"unsuccessful"===t.value}).name[this.$i18n.locale];case"active.awarding":return P["a"].tenders.find(function(t){return"awarding"===t.value}).name[this.$i18n.locale];case"active.awardedContractPreparation":return P["a"].tenders.find(function(t){return"awarded"===t.value}).name[this.$i18n.locale];case"active.suspended":return P["a"].tenders.find(function(t){return"suspended"===t.value}).name[this.$i18n.locale];case"complete.empty":return P["a"].tenders.find(function(t){return"complete"===t.value}).name[this.$i18n.locale];case"cancelled.empty":return P["a"].tenders.find(function(t){return"cancelled"===t.value}).name[this.$i18n.locale]}},getEntityName:function(){return this.activeStage.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-PN-[0-9]{13}$/)?"plans":"tenders"}},methods:{gd:function(){return O["f"].apply(void 0,arguments)},fa:function(t){return Object(O["d"])(t)},getOrganizationName:function(t,e){return Object(O["g"])(t,e)},selectProcedure:function(t,e){return Object(O["i"])(t,e)}}},S=w,E=n("2877"),j=Object(E["a"])(S,$,I,!1,null,null,null),z=j.exports,A=n("e7d0"),R=n("08b8"),D=n("b63b"),N={name:"Execution",components:{"execution-item":z,"list-pagination":A["a"],"page-number":R["a"]},props:{getExecutionsId:{type:Array,required:!0}},data:function(){return{activeItemId:"",procedures:[],pageSize:25,numberOfLastDisplayedProcedure:25,currentPage:1,loaded:!1,error:{status:!1,message:""}}},computed:{needPagination:function(){return this.elementsAmount>this.pageSize},elementsAmount:function(){return this.procedures.length}},created:function(){this.getProcedures()},methods:{gd:function(){return O["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t},changePage:function(t){this.numberOfLastDisplayedProcedure=t*this.pageSize,this.currentPage=t},getProcedures:function(){var t=Object(r["a"])(regeneratorRuntime.mark(function t(){var e,n,s,a,i,o,r,l,d,u;return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:this.loaded=!1,this.error={status:!1,message:""},e=!0,n=!1,t.prev=4,a=k(this.getExecutionsId);case 6:return t.next=8,a.next();case 8:return i=t.sent,e=i.done,t.next=12,i.value;case 12:if(o=t.sent,e){t.next=35;break}return r=o,t.prev=15,t.next=18,C()(Object(y["g"])(D["b"],r));case 18:l=t.sent,d=l.data,u=d.records.reduce(function(t,e){return e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}$/)?Object(c["a"])({},t,{MS:e}):e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-PN-[0-9]{13}$/)?Object(c["a"])({},t,{PN:e}):e.ocid.match(/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}-EV-[0-9]{13}$/)?Object(c["a"])({},t,{EV:e}):Object(c["a"])({},t)},{}),this.procedures=[].concat(Object(f["a"])(this.procedures),[Object(c["a"])({},u)]),this.error={status:!1,message:""},t.next=29;break;case 25:return t.prev=25,t.t0=t["catch"](15),this.error={status:!0,message:t.t0.message},t.abrupt("break",35);case 29:return t.prev=29,this.loaded=!0,t.finish(29);case 32:e=!0,t.next=6;break;case 35:t.next=41;break;case 37:t.prev=37,t.t1=t["catch"](4),n=!0,s=t.t1;case 41:if(t.prev=41,t.prev=42,e||null==a.return){t.next=46;break}return t.next=46,a.return();case 46:if(t.prev=46,!n){t.next=49;break}throw s;case 49:return t.finish(46);case 50:return t.finish(41);case 51:case"end":return t.stop()}},t,this,[[4,37,41,51],[15,25,29,32],[42,,46,50]])}));function e(){return t.apply(this,arguments)}return e}()}},F=N,M=Object(E["a"])(F,u,_,!1,null,null,null),q=M.exports,L=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"info"},[n("div",{staticClass:"info__title",attrs:{id:"contract-title"}},[t._v(t._s(t.$t("budget.spending")))]),n("div",{staticClass:"info-blocks"},[n("div",{staticClass:"info-block table-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            №\n          ")])]),n("el-col",{attrs:{sm:8}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.tender_id"))+"/"+t._s(t.$t("budget.contract_id"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.budget_project_id"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.amount"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.type"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.status"))+"\n          ")])])],1)],1)]),n("el-collapse",{attrs:{accordion:""},on:{change:t.changeActiveItem}},t._l(t.procedures,function(e,s){return n("spending-item",{key:e.id,attrs:{index:s,activeItemId:t.activeItemId,procedure:e}})}),1)],1)},T=[],Y=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:1}},[n("template",{slot:"title"},[n("div",{staticClass:"info-blocks accordion-header"},[n("div",{staticClass:"info-block"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              "+t._s(t.index+1)+"\n            ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              1\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              2\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              3\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n              4\n            ")])])],1)],1)])]),n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[n("div",{staticClass:"info-blocks"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            5\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            6\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            7\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            8\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            9\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            10\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"},[t._v("\n             \n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            11\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            12\n          ")])])],1)],1)])],2)},B=[],V={name:"SpendingItem",props:{procedure:{type:Object,required:!0},index:{type:Number,required:!0},activeItemId:{type:String,required:!0}},methods:{gd:function(){return O["f"].apply(void 0,arguments)},fd:function(){return formatDate.apply(void 0,arguments)},fa:function(t){return Object(O["d"])(t)}}},Z=V,H=Object(E["a"])(Z,Y,B,!1,null,null,null),J=H.exports,U={name:"Spanding",components:{"spending-item":J},props:{},data:function(){return{activeItemId:"",procedures:[]}},methods:{gd:function(){return O["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t}}},G=U,K=Object(E["a"])(G,L,T,!1,null,null,null),Q=K.exports,W=function(){var t=this,e=t.$createElement,n=t._self._c||e;return t.FSs.length?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title",attrs:{id:"contract-title"}},[t._v(t._s(t.$t("budget.source_of_financing")))]),t.needPagination?n("page-number",{attrs:{"current-page":t.currentPage,"elements-amount":t.elementsAmount,"page-size":t.pageSize}}):t._e(),n("div",{staticClass:"info-blocks "},[n("div",{staticClass:"info-block table-header"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            №\n          ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.projectID"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.source_of_money"))+"\n          ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.validity_period"))+"\n          ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.amount"))+"\n          ")])]),n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold"},[t._v("\n            "+t._s(t.$t("budget.status"))+"\n          ")])])],1)],1)]),n("el-collapse",{attrs:{accordion:"",value:t.FSs[0].ocid},on:{change:t.changeActiveItem}},t._l(t.FSs,function(e,s){return s>=t.numberOfLastDisplayedSource-t.pageSize&&s<t.numberOfLastDisplayedSource?n("source-item",{key:e.ocid,attrs:{fs:e,index:s,activeItemId:t.activeItemId}}):t._e()}),1),t.needPagination?n("list-pagination",{key:"pagination",attrs:{total:t.elementsAmount,pageCount:0,currentPage:t.currentPage,pageSize:t.pageSize,changePage:t.changePage,offsetTo:"contract-title"}}):t._e()],1):n("div",{staticClass:"info__no-data"},[t._v(t._s(t.$t("budget.no_finances_sources")))])},X=[],tt=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-collapse-item",{attrs:{name:t.gd(t.fs,function(t){return t.compiledRelease.ocid})}},[n("template",{slot:"title"},[n("div",{staticClass:"info-blocks accordion-header "},[n("div",{staticClass:"info-block accordion-table"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":"№"}},[t._v("\n              "+t._s(t.index+1)+"\n            ")])]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.projectID")}},[t._v("\n              "+t._s(t.gd(t.fs,function(t){return t.compiledRelease.ocid}))+"\n            ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.source_of_money")}},[t._v("\n              "+t._s(t.getSourceOfMoney(t.index))+"\n            ")])]),n("el-col",{attrs:{sm:4}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.validity_period")}},[t._v("\n              "+t._s(t.fd(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.period.startDate}),"DD.MM.YYYY"))+"\n              -\n              "+t._s(t.fd(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.period.endDate}),"DD.MM.YYYY"))+"\n            ")])]),n("el-col",{attrs:{sm:3}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.amount")}},[t._v("\n              "+t._s(t.fa(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.amount.amount})))+" "+t._s(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.amount.currency}))+"\n            ")])]),n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text info-block__text_bold accordion-table__th",attrs:{"data-th":t.$t("budget.status")}},[t._v("\n              "+t._s(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.status})?t.$t("budget.verified"):t.$t("budget.not_verified"))+"\n            ")])])],1)],1)])]),n("transition",{attrs:{name:"fade",mode:"out-in",appear:""}},[n("div",{staticClass:"info-blocks"},[n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.eu_funder"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.isEuropeanUnionFunded})?t.$t("budget.yes"):t.$t("budget.no"))+"\n          ")])])],1),t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.projectID})?n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.project"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.projectID}))+"\n          ")])])],1):t._e(),t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.project})?n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.details"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.project}))+"\n          ")])])],1):t._e(),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.payer_entity"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.getOrganizationName(t.gd(t.fs,function(t){return t.compiledRelease.parties},[]),"payer"))+"\n          ")])])],1),n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.funding_entity"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.getOrganizationName(t.gd(t.fs,function(t){return t.compiledRelease.parties},[]),"funder"))+"\n          ")])])],1),t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.description})?n("el-row",{attrs:{gutter:15}},[n("el-col",{attrs:{sm:2}},[n("div",{staticClass:"info-block__text"})]),n("el-col",{attrs:{sm:10}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.$t("budget.budget_description"))+"\n          ")])]),n("el-col",{attrs:{sm:12}},[n("div",{staticClass:"info-block__text"},[t._v("\n            "+t._s(t.gd(t.fs,function(t){return t.compiledRelease.planning.budget.description}))+"\n          ")])])],1):t._e()],1)])],2)},et=[],nt=(n("cadf"),n("551c"),n("f751"),n("097d"),{name:"SourceItem",props:{fs:{type:Object,required:!0},index:{type:Number,required:!0},activeItemId:{type:String,required:!0}},methods:{gd:function(){return O["f"].apply(void 0,arguments)},fd:function(){return O["e"].apply(void 0,arguments)},fa:function(t){return Object(O["d"])(t)},getOrganizationName:function(t,e){return Object(O["g"])(t,e)},getSourceOfMoney:function(t){return this.$store.getters.getSourceOfMoney(t)}}}),st=nt,at=Object(E["a"])(st,tt,et,!1,null,null,null),it=at.exports,ot={name:"SourceItem",components:{"source-item":it,"list-pagination":A["a"],"page-number":R["a"]},props:{FSs:{type:Array,required:!0}},data:function(){return{activeItemId:"",pageSize:25,numberOfLastDisplayedSource:25,currentPage:1}},computed:{needPagination:function(){return this.elementsAmount>this.pageSize},elementsAmount:function(){return this.FSs.length}},methods:{gd:function(){return O["f"].apply(void 0,arguments)},changeActiveItem:function(t){this.activeItemId=t},changePage:function(t){this.numberOfLastDisplayedSource=t*this.pageSize,this.currentPage=t}}},rt=ot,ct=Object(E["a"])(rt,W,X,!1,null,null,null),lt=ct.exports,dt={name:"BudgetPage",components:{spending:Q,execution:q,"source-of-financing":lt},data:function(){return{activeTab:"sourceOfFinancing"}},created:function(){this.getBudget()},computed:Object(c["a"])({},Object(l["b"])({EI:function(t){return t.entities.budgets.currentEntity.entityData.EI.compiledRelease},FSs:function(t){return t.entities.budgets.currentEntity.entityData.FSs},loaded:function(t){return t.entities.budgets.loaded},error:function(t){return t.entities.budgets.error}}),{wholeAmount:function(){var t=this.gd(this.EI,function(t){return t.planning.budget.amount.amount},0).toString().replace(/\B(?=(\d{3})+(?!\d))/g," ");return/\./.test(t)?t.slice(0,t.indexOf(".")):t},fractionAmount:function(){var t=this.gd(this.EI,function(t){return t.planning.budget.amount.amount},0).toString();return/\./.test(t)?1===t.slice(t.indexOf(".")+1).length?t.slice(t.indexOf(".")+1)+"0":t.slice(t.indexOf(".")+1):"00"},getExecutionsId:function(){return this.gd(this.EI,function(t){return t.relatedProcesses},[]).filter(function(t){return t.relationship.find(function(t){return"x_execution"===t})}).map(function(t){return t.identifier})}}),methods:{getBudget:function(){var t=Object(r["a"])(regeneratorRuntime.mark(function t(){return regeneratorRuntime.wrap(function(t){while(1)switch(t.prev=t.next){case 0:return t.next=2,this.$store.dispatch(d["b"],{id:this.$route.params.id});case 2:case"end":return t.stop()}},t,this)}));function e(){return t.apply(this,arguments)}return e}(),gd:function(){return O["f"].apply(void 0,arguments)}}},ut=dt,_t=Object(E["a"])(ut,i,o,!1,null,null,null),ft=_t.exports,bt={name:"ContainerBudgetPage",components:{"budget-page":ft},data:function(){return{component:"budget-page"}}},gt=bt,mt=Object(E["a"])(gt,s,a,!1,null,null,null);e["default"]=mt.exports},d9a3:function(t,e,n){t.exports=n("5b0f")}}]);