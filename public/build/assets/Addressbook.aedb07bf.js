import c from"./ContactCard.835a3007.js";import{o as s,d as t,q as d,t as n,a,F as i,s as l,c as m}from"./app.caa82190.js";import"./ContactInformation.35ecf4f1.js";import"./ContactAddress.abbcf120.js";const p={class:"container my-12 mx-auto px-4 md:px-12"},_={class:"flex flex-wrap -mx-1 lg:-mx-4"},x={class:"grid sm:grid-cols-2 lg:grid-cols-3 p-6 gap-8"},B={__name:"Addressbook",props:{addressbook:Object},setup(r){const e=r;return(u,g)=>(s(),t("div",p,[d(n(e.addressbook.name)+" ",1),a("div",_,[a("div",x,[(s(!0),t(i,null,l(e.addressbook.contacts,o=>(s(),m(c,{key:o.id,contact:o},null,8,["contact"]))),128))])])]))}};export{B as default};