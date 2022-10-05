import{D as b,o as n,d,b as s,g as t,H as w,w as m,F as g,t as h,h as c,a as o,c as k,L as x,n as y,i as V,q as _}from"./app.4d913b1d.js";import{J as v}from"./AuthenticationCard.7dc46065.js";import{_ as $}from"./AuthenticationCardLogo.30f62d11.js";import{_ as B}from"./Button.d83e9bb8.js";import{_ as u}from"./Input.1822f8f3.js";import{_ as F}from"./Checkbox.ac6be298.js";import{_ as f}from"./Label.77c3d633.js";import{_ as L}from"./ValidationErrors.5e1ac76f.js";import"./plugin-vue_export-helper.21dcd24c.js";const q={key:0,class:"mb-4 font-medium text-sm text-green-600"},C=["onSubmit"],N={class:"mt-4"},S={class:"block mt-4"},P={class:"flex items-center"},R=o("span",{class:"ml-2 text-sm text-gray-600"},"Remember me",-1),U={class:"flex items-center justify-end mt-4"},D=_(" Forgot your password? "),E=_(" Log in "),K={__name:"Login",props:{canResetPassword:Boolean,status:String},setup(l){const e=b({email:"",password:"",remember:!1}),p=()=>{e.transform(i=>({...i,remember:e.remember?"on":""})).post(route("login"),{onFinish:()=>e.reset("password")})};return(i,a)=>(n(),d(g,null,[s(t(w),{title:"Log in"}),s(v,null,{logo:m(()=>[s($)]),default:m(()=>[s(L,{class:"mb-4"}),l.status?(n(),d("div",q,h(l.status),1)):c("",!0),o("form",{onSubmit:V(p,["prevent"])},[o("div",null,[s(f,{for:"email",value:"Email"}),s(u,{id:"email",modelValue:t(e).email,"onUpdate:modelValue":a[0]||(a[0]=r=>t(e).email=r),type:"email",class:"mt-1 block w-full",required:"",autofocus:""},null,8,["modelValue"])]),o("div",N,[s(f,{for:"password",value:"Password"}),s(u,{id:"password",modelValue:t(e).password,"onUpdate:modelValue":a[1]||(a[1]=r=>t(e).password=r),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"current-password"},null,8,["modelValue"])]),o("div",S,[o("label",P,[s(F,{checked:t(e).remember,"onUpdate:checked":a[2]||(a[2]=r=>t(e).remember=r),name:"remember"},null,8,["checked"]),R])]),o("div",U,[l.canResetPassword?(n(),k(t(x),{key:0,href:i.route("password.request"),class:"underline text-sm text-gray-600 hover:text-gray-900"},{default:m(()=>[D]),_:1},8,["href"])):c("",!0),s(B,{class:y(["ml-4",{"opacity-25":t(e).processing}]),disabled:t(e).processing},{default:m(()=>[E]),_:1},8,["class","disabled"])])],40,C)]),_:1})],64))}};export{K as default};