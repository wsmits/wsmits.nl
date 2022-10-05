import{D as _,o as V,c as w,w as u,a as t,b as a,g as e,n as g,q as d}from"./app.4d913b1d.js";import{_ as v}from"./Button.d83e9bb8.js";import{_ as b}from"./FormSection.606bade8.js";import{_ as p}from"./Input.1822f8f3.js";import{_ as r}from"./InputError.8c6bcccd.js";import{_ as n}from"./Label.77c3d633.js";import{_ as S}from"./ActionMessage.79042166.js";import"./plugin-vue_export-helper.21dcd24c.js";const h=d(" Email settings "),y=d(" Setup your email account "),k={class:"col-span-6 sm:col-span-4"},x={class:"col-span-6 sm:col-span-4"},U={class:"col-span-6 sm:col-span-4"},$={class:"col-span-6 sm:col-span-4"},E={class:"col-span-6 sm:col-span-4"},B={class:"col-span-6 sm:col-span-4"},I={class:"col-span-6 sm:col-span-4"},N={class:"col-span-6 sm:col-span-4"},C={class:"col-span-6 sm:col-span-4"},F={class:"col-span-6 sm:col-span-4"},O=d(" Saved. "),T=d(" Save "),K={__name:"EmailSettingsForm",props:{user:Object},setup(i){const m=i,s=_({_method:"PUT",name:m.user.name,email:m.user.email,imaphost:m.user.imaphost,imapport:m.user.imapport,imapusername:m.user.imapusername,imappassword:m.user.imappassword,smtphost:m.user.smtphost,smtpport:m.user.smtpport,smtpusername:m.user.smtpusername,smtppassword:m.user.smtppassword}),c=()=>{s.post(route("settings.email.update"),{errorBag:"updateEmailSettings",preserveScroll:!0,onSuccess:()=>f()})},f=()=>{};return(j,l)=>(V(),w(b,{onSubmitted:c},{title:u(()=>[h]),description:u(()=>[y]),form:u(()=>[t("div",k,[a(n,{for:"name",value:"Name"}),a(p,{id:"name",modelValue:e(s).name,"onUpdate:modelValue":l[0]||(l[0]=o=>e(s).name=o),type:"text",class:"mt-1 block w-full",autocomplete:"name"},null,8,["modelValue"]),a(r,{message:e(s).errors.name,class:"mt-2"},null,8,["message"])]),t("div",x,[a(n,{for:"email",value:"Email"}),a(p,{id:"email",modelValue:e(s).email,"onUpdate:modelValue":l[1]||(l[1]=o=>e(s).email=o),type:"email",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.email,class:"mt-2"},null,8,["message"])]),t("div",U,[a(n,{for:"imaphost",value:"Imap host"}),a(p,{id:"imaphost",modelValue:e(s).imaphost,"onUpdate:modelValue":l[2]||(l[2]=o=>e(s).imaphost=o),type:"text",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.imaphost,class:"mt-2"},null,8,["message"])]),t("div",$,[a(n,{for:"imapport",value:"Imap port"}),a(p,{id:"imapport",modelValue:e(s).imapport,"onUpdate:modelValue":l[3]||(l[3]=o=>e(s).imapport=o),type:"text",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.imapport,class:"mt-2"},null,8,["message"])]),t("div",E,[a(n,{for:"imapusername",value:"Imap username"}),a(p,{id:"imapusername",modelValue:e(s).imapusername,"onUpdate:modelValue":l[4]||(l[4]=o=>e(s).imapusername=o),type:"text",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.imapusername,class:"mt-2"},null,8,["message"])]),t("div",B,[a(n,{for:"imappassword",value:"Imap password"}),a(p,{id:"imappassword",modelValue:e(s).imappassword,"onUpdate:modelValue":l[5]||(l[5]=o=>e(s).imappassword=o),type:"password",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.imappassword,class:"mt-2"},null,8,["message"])]),t("div",I,[a(n,{for:"smtphost",value:"Smtp host"}),a(p,{id:"smtphost",modelValue:e(s).smtphost,"onUpdate:modelValue":l[6]||(l[6]=o=>e(s).smtphost=o),type:"text",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.smtphost,class:"mt-2"},null,8,["message"])]),t("div",N,[a(n,{for:"smtpport",value:"Smtp port"}),a(p,{id:"smtpport",modelValue:e(s).smtpport,"onUpdate:modelValue":l[7]||(l[7]=o=>e(s).smtpport=o),type:"text",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.smtpport,class:"mt-2"},null,8,["message"])]),t("div",C,[a(n,{for:"smtpusername",value:"Smtp username"}),a(p,{id:"smtpusername",modelValue:e(s).smtpusername,"onUpdate:modelValue":l[8]||(l[8]=o=>e(s).smtpusername=o),type:"text",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.smtpusername,class:"mt-2"},null,8,["message"])]),t("div",F,[a(n,{for:"smtppassword",value:"Smtp password"}),a(p,{id:"smtppassword",modelValue:e(s).smtppassword,"onUpdate:modelValue":l[9]||(l[9]=o=>e(s).smtppassword=o),type:"password",class:"mt-1 block w-full"},null,8,["modelValue"]),a(r,{message:e(s).errors.smtppassword,class:"mt-2"},null,8,["message"])])]),actions:u(()=>[a(S,{on:e(s).recentlySuccessful,class:"mr-3"},{default:u(()=>[O]),_:1},8,["on"]),a(v,{class:g({"opacity-25":e(s).processing}),disabled:e(s).processing},{default:u(()=>[T]),_:1},8,["class","disabled"])]),_:1}))}};export{K as default};