(window["webpackJsonp"]=window["webpackJsonp"]||[]).push([["TenderPage"],{"0a49":function(t,e,n){var i=n("9b43"),r=n("626a"),c=n("4bf8"),s=n("9def"),a=n("cd1c");t.exports=function(t,e){var n=1==t,u=2==t,o=3==t,d=4==t,l=6==t,f=5==t||l,_=e||a;return function(e,a,v){for(var b,m,p=c(e),O=r(p),j=i(a,v,3),y=s(O.length),C=0,h=n?_(e,y):u?_(e,0):void 0;y>C;C++)if((f||C in O)&&(b=O[C],m=j(b,C,p),t))if(n)h[C]=m;else if(m)switch(t){case 3:return!0;case 5:return b;case 6:return C;case 2:h.push(b)}else if(d)return!1;return l?-1:o||d?d:h}}},"0bfb":function(t,e,n){"use strict";var i=n("cb7c");t.exports=function(){var t=i(this),e="";return t.global&&(e+="g"),t.ignoreCase&&(e+="i"),t.multiline&&(e+="m"),t.unicode&&(e+="u"),t.sticky&&(e+="y"),e}},1169:function(t,e,n){var i=n("2d95");t.exports=Array.isArray||function(t){return"Array"==i(t)}},3846:function(t,e,n){n("9e1e")&&"g"!=/./g.flags&&n("86cc").f(RegExp.prototype,"flags",{configurable:!0,get:n("0bfb")})},"6b54":function(t,e,n){"use strict";n("3846");var i=n("cb7c"),r=n("0bfb"),c=n("9e1e"),s="toString",a=/./[s],u=function(t){n("2aba")(RegExp.prototype,s,t,!0)};n("79e5")(function(){return"/a/b"!=a.call({source:"a",flags:"b"})})?u(function(){var t=i(this);return"/".concat(t.source,"/","flags"in t?t.flags:!c&&t instanceof RegExp?r.call(t):void 0)}):a.name!=s&&u(function(){return a.call(this)})},7514:function(t,e,n){"use strict";var i=n("5ca1"),r=n("0a49")(5),c="find",s=!0;c in[]&&Array(1)[c](function(){s=!1}),i(i.P+i.F*s,"Array",{find:function(t){return r(this,t,arguments.length>1?arguments[1]:void 0)}}),n("9c6c")(c)},a481:function(t,e,n){n("214f")("replace",2,function(t,e,n){return[function(i,r){"use strict";var c=t(this),s=void 0==i?void 0:i[e];return void 0!==s?s.call(i,c,r):n.call(String(c),i,r)},n]})},c4cb:function(t,e,n){"use strict";var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"entity-card"},[n("el-card",[n("div",{attrs:{slot:"header"},slot:"header"},[n("div",{staticClass:"entity-status"},[t.needLink?n("div",{class:"entity-status__ico "+t.parseStatusIco}):t._e(),t.needLink?n("div",{staticClass:"entity-status__text"},[t._v("\n          "+t._s(t.parseStatusText)+"\n        ")]):t._e()]),n("div",{staticClass:"entity-update"},[t._v("\n        "+t._s(t.$t("message.tender_card_last_modified_date"))+" "),n("span",{staticClass:"entity-update__date"},[t._v(t._s(t.modifiedDate))])])]),n("el-row",{attrs:{type:"flex",gutter:18}},[n("el-col",{attrs:{xs:24,sm:14}},[t.needLink?n("router-link",{staticClass:"entity-title",attrs:{to:"/tenders/"+t.id,"data-link":""}},[t._v("\n          "+t._s(t.title)+"\n        ")]):n("div",{staticClass:"entity-title"},[t._v("\n          "+t._s(t.title)+"\n        ")]),n("div",{staticClass:"entity-description"},[t._v("\n          "+t._s(t.description)+"\n        ")])],1),n("el-col",{attrs:{xs:24,sm:6}},[n("div",{staticClass:"entity-amount"},[n("div",{staticClass:"entity-amount__text"},[t._v(t._s(t.$t("message.tender_card_value"))+" ("+t._s(t.currency)+")")]),n("div",{staticClass:"entity-amount__number"},[n("span",{staticClass:"whole",style:t.wholeAmount.length>10?"font-size: 30px":""},[t._v("\n              "+t._s(t.wholeAmount)+" "),t.fractionAmount?n("span",[t._v(".")]):t._e()]),t.fractionAmount?n("span",{staticClass:"fraction"},[t._v(t._s(t.fractionAmount))]):t._e()])])]),n("el-col",{attrs:{xs:24,sm:4}},[n("div",{staticClass:"entity-pe-name"},[n("div",{staticClass:"title"},[t._v(t._s(t.$t("message.tender_card_procuring_entity_name"))+":")]),n("div",{staticClass:"text"},[t._v(t._s(t.peName))])]),n("div",{staticClass:"entity-region"},[n("div",{staticClass:"title"},[t._v(t._s(t.$t("message.tender_card_buyer_region"))+":")]),n("div",{staticClass:"text"},[t._v(t._s(t.region))])]),n("div",{staticClass:"entity-type"},[n("div",{staticClass:"title"},[t._v(t._s(t.$t("message.tender_card_procedure_type"))+":")]),n("div",{staticClass:"text text__status"},[t._v(t._s(t.type))])]),n("div",{staticClass:"entity-id"},[n("div",{staticClass:"title"},[t._v(t._s(t.$t("message.tender_card_tender_id"))+":")]),n("div",{staticClass:"text"},[t._v(t._s(t.entityId))])])])],1)],1)],1)},r=[],c=(n("6b54"),n("a481"),n("cadf"),n("551c"),n("097d"),n("025e")),s={name:"TenderCard",props:{entity:{type:Object,required:!0},needLink:{type:Boolean,default:!1}},computed:{parseStatusIco:function(){var t=Object(c["d"])(this.entity,function(t){return t.procedureStatus});switch(t){case"active.auction":return"entity-status__ico_auction";case"active.qualification":return"entity-status__ico_qualification";case"active.enquiries":return"entity-status__ico_enquiries";case"active.tendering":return"entity-status__ico_tendering";case"cancelled":return"entity-status__ico_cancelled";case"active":return"entity-status__ico_active";case"active.awarded":return"entity-status__ico_awarded";case"complete":return"entity-status__ico_complete";case"unsuccessful":return"entity-status__ico_unsuccessful";default:return"entity-status__ico_active"}},parseStatusText:function(){var t=Object(c["d"])(this.entity,function(t){return t.procedureStatus});switch(t){case"active.auction":return"Auction Period";case"active.qualification":return"Qualification Period";case"active.enquiries":return"Enquiries Period";case"active.tendering":return"Tendering Period";case"cancelled":return"Cancelled tender";case"active":return"Published";case"active.awarded":return"Awarded";case"complete":return"Complete";case"unsuccessful":return"Unsuccessful Tender";default:return t}},modifiedDate:function(){return Object(c["c"])(Object(c["d"])(this.entity,function(t){return t.modifiedDate}))},title:function(){return Object(c["d"])(this.entity,function(t){return t.title})},description:function(){return Object(c["d"])(this.entity,function(t){return t.description})},currency:function(){return Object(c["d"])(this.entity,function(t){return t.currency})},wholeAmount:function(){var t=Object(c["d"])(this.entity,function(t){return t.amount},0).toString().replace(/\B(?=(\d{3})+(?!\d))/g," ");return/\./.test(t)?t.slice(0,t.indexOf(".")):t},fractionAmount:function(){var t=Object(c["d"])(this.entity,function(t){return t.amount},0).toString();return/\./.test(t)?1===t.slice(t.indexOf(".")+1).length?t.slice(t.indexOf(".")+1)+"0":t.slice(t.indexOf(".")+1):""},region:function(){return Object(c["d"])(this.entity,function(t){return t.buyerRegion})},type:function(){return Object(c["d"])(this.entity,function(t){return t.procedureType})},peName:function(){return Object(c["d"])(this.entity,function(t){return t.buyerName})},id:function(){return Object(c["d"])(this.entity,function(t){return t.id})},entityId:function(){return Object(c["d"])(this.entity,function(t){return t.entityId})}}},a=s,u=n("2877"),o=Object(u["a"])(a,i,r,!1,null,null,null);o.options.__file="TenderCard.vue";e["a"]=o.exports},cd1c:function(t,e,n){var i=n("e853");t.exports=function(t,e){return new(i(t))(e)}},e853:function(t,e,n){var i=n("d3f4"),r=n("1169"),c=n("2b4c")("species");t.exports=function(t){var e;return r(t)&&(e=t.constructor,"function"!=typeof e||e!==Array&&!r(e.prototype)||(e=void 0),i(e)&&(e=e[c],null===e&&(e=void 0))),void 0===e?Array:e}},f129:function(t,e,n){"use strict";n.r(e);var i=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("div",{staticClass:"entity-wp"},[Object.keys(t.tender).length?n("el-container",{attrs:{direction:"vertical"}},[n("tender-card",{attrs:{entity:t.entity}}),n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Procuring Entity")]),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Procuring Entity full name")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value"},[t._v(t._s(t.procuringEntity.fullName))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("IDNO of Procuring Entity")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value"},[t._v(t._s(t.procuringEntity.identifier))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Legal address")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value"},[t._v(t._s(t.procuringEntity.address))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Person responsible for the procurement procedure")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value"},[t._v(t._s(t.procuringEntity.responsiblePerson))])])],1)],1)]),n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Information about the procurement procedure")]),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Estimated Value without VAT ("+t._s(t.procurementInfo.currency)+")")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(t.procurementInfo.amount))])])],1)],1),t.procurementInfo.minStep?n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Minimum amount of price reduction ("+t._s(t.procurementInfo.currency)+")")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(t.procurementInfo.minStep))])])],1)],1):t._e()]),t.dates?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Dates and terms")]),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Enquiries period")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(t.dates.enquiry))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Tendering period")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(t.dates.tendering))])])],1)],1),t.dates.auction?n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Auction period")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(t.dates.auction))])])],1)],1):t._e()]):t._e(),t.documents.length?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Purchase Documents")]),t._l(t.documents,function(e,i){return n("div",{key:e.id+i,staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info-document_name"},[n("div",[n("a",{attrs:{href:e.url,title:e.name}},[t._v(t._s(e.name))])])])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info-document_date-published"},[t._v("Published on "+t._s(e.datePublished))]),n("div",{staticClass:"info-document_id"},[t._v("ID: "+t._s(e.id))])])],1)],1)})],2):t._e(),n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Purchase Specification")]),t._l(t.items,function(e){return[n("div",{key:e.id,staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v(t._s(e.description))])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value_accent"},[t._v(t._s(e.quantityAndUnit))])])],1)],1),n("div",{key:e.id+1,staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}}),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_muted"},[t._v("CPV Code: "+t._s(e.cpv))]),n("div",{staticClass:"info__value info__value_muted"},[t._v("Delivery address:  "+t._s(e.deliveryAddress))])])],1)],1)]})],2),t.bids.length?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Proposals Registry")]),n("table",{staticClass:"info-table"},[n("tr",[n("th",[t._v("№")]),n("th",[t._v("Tenderer Name")]),n("th",[t._v("The initial amount of the offer")]),n("th",[t._v("Final offer price")]),n("th",[t._v("Documentation")])]),t._l(t.bids,function(e,i){return n("tr",{key:e.id},[n("td",[t._v(t._s(++i))]),n("td",[n("div",{staticClass:"info__value"},[t._v("\n              "+t._s(e.name)+"\n            ")]),n("div",{staticClass:"info__value info__value_muted"},[t._v("\n              IDNO Code : "+t._s(e.identifier)+"\n            ")])]),n("td",[n("div",{staticClass:"info__value info__value_accent"},[t._v("\n              "+t._s(e.amount)+"\n            ")]),n("div",{staticClass:"info__value info__value_muted"},[t._v("\n              "+t._s(e.currency)+" without VAT\n            ")])]),n("td",[n("div",{staticClass:"info__value info__value_accent"},[t._v("\n              "+t._s(e.amount)+"\n            ")]),n("div",{staticClass:"info__value info__value_muted"},[t._v("\n              "+t._s(e.currency)+" without VAT\n            ")])]),n("td",{staticClass:"text-center"},[e.documents.length?n("button",{staticClass:"document-link",attrs:{type:"button"},on:{click:function(n){t.$refs[e.id][0].open=!0}}}):t._e(),n("documents-modal",{ref:e.id,refInFor:!0,attrs:{open:!1,documents:e.documents}})],1)])})],2)]):t._e(),t.awards.length?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("\n        Protocol for the disclosure of proposals\n        "),n("div",{staticClass:"info__title_sub"},[t._v("\n          Date and time of disclosure of offers: "+t._s(t.awardsStartDate)+"\n        ")])]),n("table",{staticClass:"info-table"},[n("tr",[n("th",[t._v("№")]),n("th",[t._v("Supplier Name")]),n("th",[t._v("Final offer price\t")]),n("th",[t._v("Status")]),n("th",[t._v("Documentation")])]),t._l(t.awards,function(e,i){return n("tr",{key:e.id},[n("td",[t._v(t._s(++i))]),n("td",[n("div",{staticClass:"info__value"},[t._v("\n              "+t._s(e.name)+"\n            ")]),n("div",{staticClass:"info__value info__value_muted"},[t._v("\n              IDNO Code : "+t._s(e.identifier)+"\n            ")])]),n("td",[n("div",{staticClass:"info__value info__value_accent"},[t._v("\n              "+t._s(e.amount)+"\n            ")]),n("div",{staticClass:"info__value info__value_muted"},[t._v("\n              "+t._s(e.currency)+" without VAT\n            ")])]),n("td",[n("div",{staticClass:"info__value info__value_accent info__value_status"},[t._v("\n              "+t._s(e.status)+"\n            ")])]),n("td",{staticClass:"text-center"},[e.documents.length?n("button",{staticClass:"document-link",attrs:{type:"button"},on:{click:function(n){t.$refs[e.id][0].open=!0}}}):t._e(),n("documents-modal",{ref:e.id,refInFor:!0,attrs:{open:!1,documents:e.documents}})],1)])})],2)]):t._e(),t.activeAwards.length?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Notification of intention to conclude a contract")]),n("table",{staticClass:"info-table"},[n("tr",[n("th",[t._v("Supplier Name")]),n("th",[t._v("Final offer price\t")]),n("th",[t._v("Published on")])]),t._l(t.activeAwards,function(e){return n("tr",{key:e.id},[n("td",[n("div",{staticClass:"info__value"},[t._v("\n              "+t._s(e.name)+"\n            ")]),n("div",{staticClass:"info__value info__value_muted"},[t._v("\n              IDNO Code : "+t._s(e.identifier)+"\n            ")])]),n("td",[n("div",{staticClass:"info__value info__value_accent"},[t._v("\n              "+t._s(e.amount)+"\n            ")]),n("div",{staticClass:"info__value info__value_muted"},[t._v("\n              "+t._s(e.currency)+" without VAT\n            ")])]),n("td",[n("div",{staticClass:"info__value"},[t._v("\n              "+t._s(e.publishedDate)+"\n            ")])])])})],2)]):t._e(),t.contracts.length?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Concluded Contracts")]),t._l(t.contracts,function(e){return n("div",{key:e.id},[n("div",{staticClass:"info-contract"},[n("div",{staticClass:"info-contract__title"},[t._v(t._s(e.title))]),n("div",{staticClass:"info-contract__status"},[n("div",{staticClass:"info-contract__status_text"},[t._v(t._s(e.status))]),n("div",{class:"info-contract__status_ico "+e.status})])]),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Procuring Entity")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value"},[t._v(t._s(e.procuringEntity))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Suppliers")])]),n("el-col",{attrs:{xs:24,sm:14}},t._l(e.suppliers,function(e){return n("div",{key:e,staticClass:"info__value"},[t._v("\n                "+t._s(e)+"\n              ")])}))],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Contract ID")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value"},[t._v(t._s(e.contractId))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Contract amount")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(e.amount)+" (without VAT)")])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Contract number")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value"},[t._v(t._s(e.contractNumber))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Date signed")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(e.dateSigned))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Contract period start date")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(e.contractStartDate))])])],1)],1),n("div",{staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info__name"},[t._v("Contract period end date")])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info__value info__value_accent"},[t._v(t._s(e.contractEndDate))])])],1)],1)])})],2):t._e(),t.documentation.length?n("div",{staticClass:"info"},[n("div",{staticClass:"info__title"},[t._v("Documentation")]),t._l(t.documentation,function(e,i){return n("div",{key:e.id+i,staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info-document_name"},[n("div",[n("a",{attrs:{href:e.url}},[t._v(t._s(e.name))]),n("div",{staticClass:"info__value_muted"},[t._v(t._s(e.type))])])])]),n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info-document_date-published"},[t._v("Published on "+t._s(e.datePublished))]),n("div",{staticClass:"info-document_id"},[t._v("ID: "+t._s(e.id))])])],1)],1)})],2):t._e()],1):n("el-container",[t._v("\n    LOADING...\n  ")])],1)},r=[],c=(n("55dd"),n("7514"),n("7f7f"),n("c93e")),s=(n("cadf"),n("551c"),n("097d"),n("2f62")),a=n("4df7"),u=n("c4cb"),o=function(){var t=this,e=t.$createElement,n=t._self._c||e;return n("el-dialog",{attrs:{visible:t.open,"append-to-body":"",title:"Documents",width:"75%"},on:{"update:visible":function(e){t.open=e}}},[t._t("default",t._l(t.documents,function(e){return n("div",{key:e.id,staticClass:"info__text"},[n("el-row",{attrs:{gutter:30}},[n("el-col",{attrs:{xs:24,sm:10}},[n("div",{staticClass:"info-document_name"},[n("div",[n("a",{attrs:{href:e.url,title:e.name}},[t._v(t._s(e.name))])])])]),n("el-col",{attrs:{xs:24,sm:14}},[n("div",{staticClass:"info-document_date-published"},[t._v("Published on "+t._s(e.datePublished))]),n("div",{staticClass:"info-document_id"},[t._v("ID: "+t._s(e.id))])])],1)],1)}))],2)},d=[],l={name:"DocumentsModal",props:{open:{type:Boolean,required:!0,default:!1},documents:{type:Array,required:!0}}},f=l,_=n("2877"),v=Object(_["a"])(f,o,d,!1,null,null,null);v.options.__file="DocumentsModal.vue";var b=v.exports,m=n("b63b"),p=n("025e"),O={name:"TenderPage",components:{"tender-card":u["a"],"documents-modal":b},created:function(){var t=/^ocds-([a-z]|[0-9]){6}-[A-Z]{2,}-[0-9]{13}$/,e=this.$route.params.id,n=t.test(e)?m["b"]:m["a"];this.$store.dispatch(a["c"],{cdb:n,id:e})},computed:Object(c["a"])({},Object(s["b"])({cdb:function(t){return t.entities.tenders.currentTender.cdb},tender:function(t){return t.entities.tenders.currentTender.tenderData}}),{entity:function(){if(this.cdb===m["a"]){console.log(this.tender);var t=this.tender;return{procedureStatus:Object(p["d"])(t,function(t){return t.status}),modifiedDate:Object(p["d"])(t,function(t){return t.dateModified}),title:Object(p["d"])(t,function(t){return t.title}),description:Object(p["d"])(t,function(t){return t.description}),currency:Object(p["d"])(t,function(t){return t.value.currency}),amount:Object(p["d"])(t,function(t){return t.value.amount}),buyerName:Object(p["d"])(t,function(t){return t.procuringEntity.name}),buyerRegion:Object(p["d"])(t,function(t){return t.procuringEntity.address.region}),procedureType:Object(p["d"])(t,function(t){return t.procurementMethodType}),entityId:Object(p["d"])(t,function(t){return t.tenderID})}}var e=this.tender.MSRecord.compiledRelease,n=this.tender.EVRecord.compiledRelease,i=Object(p["d"])(e,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"procuringEntity"===t})});return console.log(this.tender),console.log("MSRecord ",e),console.log("EVRecord ",n),{procedureStatus:"".concat(Object(p["d"])(n,function(t){return t.tender.status})," ").concat(Object(p["d"])(n,function(t){return t.tender.statusDetails})),modifiedDate:Object(p["d"])(e,function(t){return t.date}),title:Object(p["d"])(e,function(t){return t.tender.title}),description:Object(p["d"])(e,function(t){return t.tender.description}),currency:Object(p["d"])(e,function(t){return t.tender.value.currency}),amount:Object(p["d"])(e,function(t){return t.tender.value.amount}),buyerName:Object(p["d"])(i,function(t){return t.name}),buyerRegion:Object(p["d"])(i,function(t){return t.address.addressDetails.region.description}),procedureType:Object(p["d"])(e,function(t){return t.tender.procurementMethodDetails}),entityId:Object(p["d"])(e,function(t){return t.ocid})}},procuringEntity:function(){if(this.cdb===m["a"]){var t=this.tender;return{fullName:Object(p["d"])(t,function(t){return t.procuringEntity.name}),identifier:"".concat(Object(p["d"])(t,function(t){return t.procuringEntity.identifier.scheme}),"\n                       ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.identifier.id})," -\n                       ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.identifier.legalName})),address:"".concat(Object(p["d"])(t,function(t){return t.procuringEntity.address.postalCode}),",\n                    ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.address.countryName}),",\n                    ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.address.region}),",\n                    ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.address.locality}),",\n                    ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.address.streetAddress})),responsiblePerson:"".concat(Object(p["d"])(t,function(t){return t.procuringEntity.contactPoint.name})," /\n                              ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.contactPoint.email})," /\n                              ").concat(Object(p["d"])(t,function(t){return t.procuringEntity.contactPoint.telephone}))}}var e=this.tender.MSRecord.compiledRelease,n=Object(p["d"])(e,function(t){return t.parties},[]).find(function(t){return t.roles.some(function(t){return"procuringEntity"===t})});return{fullName:Object(p["d"])(n,function(t){return t.name}),identifier:"".concat(Object(p["d"])(n,function(t){return t.identifier.scheme}),"\n                       ").concat(Object(p["d"])(n,function(t){return t.identifier.id})," -\n                       ").concat(Object(p["d"])(n,function(t){return t.identifier.legalName})),address:"".concat(Object(p["d"])(n,function(t){return t.address.postalCode}),",\n                    ").concat(Object(p["d"])(n,function(t){return t.address.addressDetails.country.description}),",\n                    ").concat(Object(p["d"])(n,function(t){return t.address.addressDetails.region.description}),",\n                    ").concat(Object(p["d"])(n,function(t){return t.address.addressDetails.locality.description}),",\n                    ").concat(Object(p["d"])(n,function(t){return t.address.streetAddress})),responsiblePerson:"".concat(Object(p["d"])(n,function(t){return t.contactPoint.name})," /\n                              ").concat(Object(p["d"])(n,function(t){return t.contactPoint.email})," /\n                              ").concat(Object(p["d"])(n,function(t){return t.contactPoint.telephone}))}},procurementInfo:function(){if(this.cdb===m["a"]){var t=this.tender,e=function(){var e=Object(p["d"])(t,function(t){return t.value.amount}),n=Object(p["d"])(t,function(t){return t.minimalStep.amount});return Math.round(n/e*100*100)/100},n=t.hasOwnProperty("auctionPeriod");return{currency:Object(p["d"])(t,function(t){return t.value.currency}),amount:Object(p["d"])(t,function(t){return t.value.amount}),minStep:n?"".concat(Object(p["d"])(t,function(t){return t.minimalStep.amount})," (").concat(e()," %)"):""}}var i=this.tender.MSRecord.compiledRelease;return{currency:Object(p["d"])(i,function(t){return t.tender.value.currency}),amount:Object(p["d"])(i,function(t){return t.tender.value.amount})}},dates:function(){if(this.cdb===m["a"]){var t=this.tender;if("reporting"===t.procurementMethodType)return!1;var e=t.hasOwnProperty("auctionPeriod");return{enquiry:"".concat(Object(p["c"])(Object(p["d"])(t,function(t){return t.enquiryPeriod.startDate}))," - ").concat(Object(p["c"])(Object(p["d"])(t,function(t){return t.enquiryPeriod.endDate}))),tendering:"".concat(Object(p["c"])(Object(p["d"])(t,function(t){return t.tenderPeriod.startDate}))," - ").concat(Object(p["c"])(Object(p["d"])(t,function(t){return t.tenderPeriod.endDate}))),auction:e?"".concat(Object(p["c"])(Object(p["d"])(t,function(t){return t.auctionPeriod.startDate}))," -\n            ").concat(Object(p["c"])(Object(p["d"])(t,function(t){return t.auctionPeriod.endDate}))):""}}var n=this.tender.EVRecord.compiledRelease,i=n.tender.hasOwnProperty("auctionPeriod");return{enquiry:"".concat(Object(p["c"])(Object(p["d"])(n,function(t){return t.tender.enquiryPeriod.startDate}))," - ").concat(Object(p["c"])(Object(p["d"])(n,function(t){return t.tender.enquiryPeriod.endDate}))),tendering:"".concat(Object(p["c"])(Object(p["d"])(n,function(t){return t.tender.tenderPeriod.startDate}))," - ").concat(Object(p["c"])(Object(p["d"])(n,function(t){return t.tender.tenderPeriod.endDate}))),auction:i?"".concat(Object(p["c"])(Object(p["d"])(tender,function(t){return t.tender.auctionPeriod.startDate}))," -\n            ").concat(Object(p["c"])(Object(p["d"])(tender,function(t){return t.tender.auctionPeriod.endDate}))):""}},documents:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["d"])(t,function(t){return t.documents},[]).map(function(t){return{name:Object(p["d"])(t,function(t){return t.title}),url:Object(p["d"])(t,function(t){return t.url}),datePublished:Object(p["c"])(Object(p["d"])(t,function(t){return t.datePublished})),id:Object(p["d"])(t,function(t){return t.id})}})}var e=this.tender.EVRecord.compiledRelease;return Object(p["d"])(e,function(t){return t.tender.documents},[]).map(function(t){return{name:Object(p["d"])(t,function(t){return t.title}),url:Object(p["d"])(t,function(t){return t.url}),datePublished:Object(p["d"])(t,function(t){return t.datePublished}),id:Object(p["d"])(t,function(t){return t.id})}})},items:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["d"])(t,function(t){return t.items},[]).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),description:Object(p["d"])(t,function(t){return t.description}),quantityAndUnit:"".concat(Object(p["d"])(t,function(t){return t.quantity}),"\n                              ").concat(Object(p["d"])(t,function(t){return t.unit.name})),cpv:"".concat(Object(p["d"])(t,function(t){return t.classification.id}),"\n                  ").concat(Object(p["d"])(t,function(t){return t.classification.description})),deliveryAddress:"".concat(Object(p["d"])(t,function(t){return t.deliveryAddress.postalCode}),",\n                              ").concat(Object(p["d"])(t,function(t){return t.deliveryAddress.countryName}),",\n                              ").concat(Object(p["d"])(t,function(t){return t.deliveryAddress.region}),",\n                              ").concat(Object(p["d"])(t,function(t){return t.deliveryAddress.locality}),",\n                              ").concat(Object(p["d"])(t,function(t){return t.deliveryAddress.streetAddress}))}})}var e=function(t){var e=Object(p["d"])(n,function(t){return t.tender.lots},[]).find(function(e){return e.id===t}).placeOfPerformance.address;return"\n            ".concat(e.postalCode,",\n            ").concat(e.addressDetails.country.description,",\n            ").concat(e.addressDetails.region.description,",\n            ").concat(e.addressDetails.locality.description,",\n            ").concat(e.postalCode,"\n          ")},n=this.tender.EVRecord.compiledRelease;return Object(p["d"])(n,function(t){return t.tender.items},[]).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),description:Object(p["d"])(t,function(t){return t.description}),quantityAndUnit:"".concat(Object(p["d"])(t,function(t){return t.quantity}),"\n                              ").concat(Object(p["d"])(t,function(t){return t.unit.name})),cpv:"".concat(Object(p["d"])(t,function(t){return t.classification.id}),"\n                  ").concat(Object(p["d"])(t,function(t){return t.classification.description})),deliveryAddress:e(Object(p["d"])(t,function(t){return t.relatedLot}))}})},bids:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["d"])(t,function(t){return t.bids},[]).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),name:Object(p["d"])(t,function(t){return t.tenderers[0].name}),identifier:"".concat(Object(p["d"])(t,function(t){return t.tenderers[0].identifier.scheme}),"\n                         ").concat(Object(p["d"])(t,function(t){return t.tenderers[0].identifier.id})," -\n                         ").concat(Object(p["d"])(t,function(t){return t.tenderers[0].identifier.legalName})),amount:Object(p["d"])(t,function(t){return t.value.amount}),currency:Object(p["d"])(t,function(t){return t.value.currency}),documents:Object(p["d"])(t,function(t){return t.documents},[]).map(function(t){return{name:Object(p["d"])(t,function(t){return t.title}),url:Object(p["d"])(t,function(t){return t.url}),datePublished:Object(p["c"])(Object(p["d"])(t,function(t){return t.datePublished})),id:Object(p["d"])(t,function(t){return t.id})}})}})}var e=this.tender.EVRecord.compiledRelease;return Object(p["d"])(e,function(t){return t.bids.details},[]).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),name:Object(p["d"])(t,function(t){return t.tenderers[0].name}),identifier:"".concat(Object(p["d"])(t,function(t){return t.tenderers[0].id})),amount:Object(p["d"])(t,function(t){return t.value.amount}),currency:Object(p["d"])(t,function(t){return t.value.currency}),documents:Object(p["d"])(t,function(t){return t.documents},[]).map(function(t){return{name:Object(p["d"])(t,function(t){return t.title}),url:Object(p["d"])(t,function(t){return t.url}),datePublished:Object(p["c"])(Object(p["d"])(t,function(t){return t.datePublished})),id:Object(p["d"])(t,function(t){return t.id})}})}})},awardsStartDate:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["c"])(Object(p["d"])(t,function(t){return t.awardPeriod.startDate}))}var e=this.tender.EVRecord.compiledRelease;return Object(p["c"])(Object(p["d"])(e,function(t){return t.tender.awardPeriod.startDate}))},awards:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["d"])(t,function(t){return t.awards},[]).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),name:Object(p["d"])(t,function(t){return t.suppliers[0].name}),identifier:"".concat(Object(p["d"])(t,function(t){return t.suppliers[0].identifier.scheme}),"\n                         ").concat(Object(p["d"])(t,function(t){return t.suppliers[0].identifier.id})," -\n                         ").concat(Object(p["d"])(t,function(t){return t.suppliers[0].identifier.legalName})),amount:Object(p["d"])(t,function(t){return t.value.amount}),currency:Object(p["d"])(t,function(t){return t.value.currency}),status:Object(p["d"])(t,function(t){return t.status}),documents:Object(p["d"])(t,function(t){return t.documents},[]).map(function(t){return{name:Object(p["d"])(t,function(t){return t.title}),url:Object(p["d"])(t,function(t){return t.url}),datePublished:Object(p["c"])(Object(p["d"])(t,function(t){return t.datePublished})),id:Object(p["d"])(t,function(t){return t.id})}})}})}var e=this.tender.EVRecord.compiledRelease;return Object(p["d"])(e,function(t){return t.awards},[]).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),name:Object(p["d"])(t,function(t){return t.suppliers[0].name}),identifier:"".concat(Object(p["d"])(t,function(t){return t.suppliers[0].id})),amount:Object(p["d"])(t,function(t){return t.value.amount}),currency:Object(p["d"])(t,function(t){return t.value.currency}),status:Object(p["d"])(t,function(t){return t.status}),documents:Object(p["d"])(t,function(t){return t.documents},[]).map(function(t){return{name:Object(p["d"])(t,function(t){return t.title}),url:Object(p["d"])(t,function(t){return t.url}),datePublished:Object(p["c"])(Object(p["d"])(t,function(t){return t.datePublished})),id:Object(p["d"])(t,function(t){return t.id})}})}})},activeAwards:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["d"])(t,function(t){return t.awards},[]).filter(function(t){return"active"===Object(p["d"])(t,function(t){return t.status},"")}).sort(function(t,e){return Object(p["d"])(t,function(t){return t.value.amount})===Object(p["d"])(e,function(t){return t.value.amount})?Object(p["d"])(t,function(t){return t.date})>Object(p["d"])(e,function(t){return t.date}):Object(p["d"])(t,function(t){return t.value.amount})>Object(p["d"])(e,function(t){return t.value.amount})}).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),name:Object(p["d"])(t,function(t){return t.suppliers[0].name}),identifier:"".concat(Object(p["d"])(t,function(t){return t.suppliers[0].identifier.scheme}),"\n                             ").concat(Object(p["d"])(t,function(t){return t.suppliers[0].identifier.id})," -\n                             ").concat(Object(p["d"])(t,function(t){return t.suppliers[0].identifier.legalName})),amount:Object(p["d"])(t,function(t){return t.value.amount}),currency:Object(p["d"])(t,function(t){return t.value.currency}),publishedDate:Object(p["c"])(Object(p["d"])(t,function(t){return t.date}))}})}var e=this.tender.EVRecord.compiledRelease;return Object(p["d"])(e,function(t){return t.awards},[]).filter(function(t){return"active"===Object(p["d"])(t,function(t){return t.status},"")}).sort(function(t,e){return Object(p["d"])(t,function(t){return t.value.amount})===Object(p["d"])(e,function(t){return t.value.amount})?Object(p["d"])(t,function(t){return t.date})>Object(p["d"])(e,function(t){return t.date}):Object(p["d"])(t,function(t){return t.value.amount})>Object(p["d"])(e,function(t){return t.value.amount})}).map(function(t){return{id:Object(p["d"])(t,function(t){return t.id}),name:Object(p["d"])(t,function(t){return t.suppliers[0].name}),identifier:"".concat(Object(p["d"])(t,function(t){return t.suppliers[0].id})),amount:Object(p["d"])(t,function(t){return t.value.amount}),currency:Object(p["d"])(t,function(t){return t.value.currency}),publishedDate:Object(p["c"])(Object(p["d"])(t,function(t){return t.date}))}})},contracts:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["d"])(t,function(t){return t.contracts},[]).map(function(e){return{id:Object(p["d"])(e,function(t){return t.id}),title:Object(p["d"])(e,function(t){return t.title}),status:Object(p["d"])(e,function(t){return t.status}),procuringEntity:Object(p["d"])(t,function(t){return t.procuringEntity.name}),suppliers:Object(p["d"])(e,function(t){return t.suppliers},[]).map(function(t){return t.name}),contractId:Object(p["d"])(e,function(t){return t.contractID}),amount:Object(p["d"])(e,function(t){return t.value.amount}),currency:Object(p["d"])(e,function(t){return t.value.currency}),contractNumber:Object(p["d"])(e,function(t){return t.contractNumber},"none"),dateSigned:Object(p["c"])(Object(p["d"])(e,function(t){return t.dateSigned}),"DD.MM.YYYY"),contractStartDate:Object(p["c"])(Object(p["d"])(e,function(t){return t.period.startDate}),"DD.MM.YYYY"),contractEndDate:Object(p["c"])(Object(p["d"])(e,function(t){return t.period.endDate}),"DD.MM.YYYY")}})}return[]},documentation:function(){if(this.cdb===m["a"]){var t=this.tender;return Object(p["d"])(t,function(t){return t.contracts},[]).map(function(t){return Object(p["d"])(t,function(t){return t.documents},[]).map(function(t){return{name:Object(p["d"])(t,function(t){return t.title}),url:Object(p["d"])(t,function(t){return t.url}),type:Object(p["d"])(t,function(t){return t.documentType}),datePublished:Object(p["c"])(Object(p["d"])(t,function(t){return t.datePublished})),id:Object(p["d"])(t,function(t){return t.id})}})}).reduce(function(t,e){return t.concat(e)},[])}return[]}})},j=O,y=Object(_["a"])(j,i,r,!1,null,null,null);y.options.__file="TenderPage.vue";e["default"]=y.exports}}]);