import{z as u,o as c,c as f,b as s,h as a,H as _,w as l,F as w,a as r,n as V,j as b,s as k}from"./app.0ca1d3c9.js";import{J as v}from"./AuthenticationCard.130cc3ff.js";import{_ as g}from"./AuthenticationCardLogo.2c8faa57.js";import{_ as h}from"./Button.4b1a8e42.js";import{_ as i}from"./Input.61fd6c89.js";import{_ as m}from"./Label.a11e2bb7.js";import{_ as x}from"./ValidationErrors.3b2bc952.js";import"./plugin-vue_export-helper.21dcd24c.js";const y=["onSubmit"],P={class:"mt-4"},$={class:"mt-4"},C={class:"flex items-center justify-end mt-4"},F=k(" Reset Password "),H={__name:"ResetPassword",props:{email:String,token:String},setup(n){const d=n,o=u({token:d.token,email:d.email,password:"",password_confirmation:""}),p=()=>{o.post(route("password.update"),{onFinish:()=>o.reset("password","password_confirmation")})};return(S,e)=>(c(),f(w,null,[s(a(_),{title:"Reset Password"}),s(v,null,{logo:l(()=>[s(g)]),default:l(()=>[s(x,{class:"mb-4"}),r("form",{onSubmit:b(p,["prevent"])},[r("div",null,[s(m,{for:"email",value:"Email"}),s(i,{id:"email",modelValue:a(o).email,"onUpdate:modelValue":e[0]||(e[0]=t=>a(o).email=t),type:"email",class:"mt-1 block w-full",required:"",autofocus:""},null,8,["modelValue"])]),r("div",P,[s(m,{for:"password",value:"Password"}),s(i,{id:"password",modelValue:a(o).password,"onUpdate:modelValue":e[1]||(e[1]=t=>a(o).password=t),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"])]),r("div",$,[s(m,{for:"password_confirmation",value:"Confirm Password"}),s(i,{id:"password_confirmation",modelValue:a(o).password_confirmation,"onUpdate:modelValue":e[2]||(e[2]=t=>a(o).password_confirmation=t),type:"password",class:"mt-1 block w-full",required:"",autocomplete:"new-password"},null,8,["modelValue"])]),r("div",C,[s(h,{class:V({"opacity-25":a(o).processing}),disabled:a(o).processing},{default:l(()=>[F]),_:1},8,["class","disabled"])])],40,y)]),_:1})],64))}};export{H as default};
