import{z as l,r as c,o as d,c as u,b as s,h as a,H as p,w as r,F as f,a as e,n as _,j as w,s as b}from"./app.0ca1d3c9.js";import{J as h}from"./AuthenticationCard.130cc3ff.js";import{_ as x}from"./AuthenticationCardLogo.2c8faa57.js";import{_ as g}from"./Button.4b1a8e42.js";import{_ as v}from"./Input.61fd6c89.js";import{_ as y}from"./Label.a11e2bb7.js";import{_ as V}from"./ValidationErrors.3b2bc952.js";import"./plugin-vue_export-helper.21dcd24c.js";const C=e("div",{class:"mb-4 text-sm text-gray-600"}," This is a secure area of the application. Please confirm your password before continuing. ",-1),$=["onSubmit"],k={class:"flex justify-end mt-4"},F=b(" Confirm "),T={__name:"ConfirmPassword",setup(B){const o=l({password:""}),t=c(null),n=()=>{o.post(route("password.confirm"),{onFinish:()=>{o.reset(),t.value.focus()}})};return(N,i)=>(d(),u(f,null,[s(a(p),{title:"Secure Area"}),s(h,null,{logo:r(()=>[s(x)]),default:r(()=>[C,s(V,{class:"mb-4"}),e("form",{onSubmit:w(n,["prevent"])},[e("div",null,[s(y,{for:"password",value:"Password"}),s(v,{id:"password",ref_key:"passwordInput",ref:t,modelValue:a(o).password,"onUpdate:modelValue":i[0]||(i[0]=m=>a(o).password=m),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"current-password",autofocus:""},null,8,["modelValue"])]),e("div",k,[s(g,{class:_(["ml-4",{"opacity-25":a(o).processing}]),disabled:a(o).processing},{default:r(()=>[F]),_:1},8,["class","disabled"])])],40,$)]),_:1})],64))}};export{T as default};