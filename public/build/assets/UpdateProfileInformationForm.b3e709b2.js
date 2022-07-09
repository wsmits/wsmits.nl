import{z as j,r as f,o as d,e as w,w as a,c as S,a as l,b as o,q as p,v as _,I as B,j as h,i as v,h as t,L as E,n as F,s as n,y as L}from"./app.0ca1d3c9.js";import{_ as z}from"./Button.4b1a8e42.js";import{_ as A}from"./FormSection.754d1295.js";import{_ as V}from"./Input.61fd6c89.js";import{_ as g}from"./InputError.8fd71bcb.js";import{_ as k}from"./Label.a11e2bb7.js";import{_ as R}from"./ActionMessage.c10f127e.js";import{_ as C}from"./SecondaryButton.9a3fbfa7.js";import"./plugin-vue_export-helper.21dcd24c.js";const D=n(" Profile Information "),T=n(" Update your account's profile information and email address. "),q={key:0,class:"col-span-6 sm:col-span-4"},M={class:"mt-2"},O=["src","alt"],Y={class:"mt-2"},G=n(" Select A New Photo "),H=n(" Remove Photo "),J={class:"col-span-6 sm:col-span-4"},K={class:"col-span-6 sm:col-span-4"},Q={key:0},W={class:"text-sm mt-2"},X=n(" Your email address is unverified. "),Z=n(" Click here to re-send the verification email. "),ee={class:"mt-2 font-medium text-sm text-green-600"},oe=n(" Saved. "),te=n(" Save "),de={__name:"UpdateProfileInformationForm",props:{user:Object},setup(c){const y=c,e=j({_method:"PUT",name:y.user.name,email:y.user.email,photo:null}),b=f(null),m=f(null),r=f(null),I=()=>{r.value&&(e.photo=r.value.files[0]),e.post(route("user-profile-information.update"),{errorBag:"updateProfileInformation",preserveScroll:!0,onSuccess:()=>P()})},$=()=>{b.value=!0},x=()=>{r.value.click()},N=()=>{const s=r.value.files[0];if(!s)return;const i=new FileReader;i.onload=u=>{m.value=u.target.result},i.readAsDataURL(s)},U=()=>{L.Inertia.delete(route("current-user-photo.destroy"),{preserveScroll:!0,onSuccess:()=>{m.value=null,P()}})},P=()=>{var s;(s=r.value)!=null&&s.value&&(r.value.value=null)};return(s,i)=>(d(),w(A,{onSubmitted:I},{title:a(()=>[D]),description:a(()=>[T]),form:a(()=>[s.$page.props.jetstream.managesProfilePhotos?(d(),S("div",q,[l("input",{ref_key:"photoInput",ref:r,type:"file",class:"hidden",onChange:N},null,544),o(k,{for:"photo",value:"Photo"}),p(l("div",M,[l("img",{src:c.user.profile_photo_url,alt:c.user.name,class:"rounded-full h-20 w-20 object-cover"},null,8,O)],512),[[_,!m.value]]),p(l("div",Y,[l("span",{class:"block rounded-full w-20 h-20 bg-cover bg-no-repeat bg-center",style:B("background-image: url('"+m.value+"');")},null,4)],512),[[_,m.value]]),o(C,{class:"mt-2 mr-2",type:"button",onClick:h(x,["prevent"])},{default:a(()=>[G]),_:1},8,["onClick"]),c.user.profile_photo_path?(d(),w(C,{key:0,type:"button",class:"mt-2",onClick:h(U,["prevent"])},{default:a(()=>[H]),_:1},8,["onClick"])):v("",!0),o(g,{message:t(e).errors.photo,class:"mt-2"},null,8,["message"])])):v("",!0),l("div",J,[o(k,{for:"name",value:"Name"}),o(V,{id:"name",modelValue:t(e).name,"onUpdate:modelValue":i[0]||(i[0]=u=>t(e).name=u),type:"text",class:"mt-1 block w-full",autocomplete:"name"},null,8,["modelValue"]),o(g,{message:t(e).errors.name,class:"mt-2"},null,8,["message"])]),l("div",K,[o(k,{for:"email",value:"Email"}),o(V,{id:"email",modelValue:t(e).email,"onUpdate:modelValue":i[1]||(i[1]=u=>t(e).email=u),type:"email",class:"mt-1 block w-full"},null,8,["modelValue"]),o(g,{message:t(e).errors.email,class:"mt-2"},null,8,["message"]),s.$page.props.jetstream.hasEmailVerification&&c.user.email_verified_at===null?(d(),S("div",Q,[l("p",W,[X,o(t(E),{href:s.route("verification.send"),method:"post",as:"button",class:"underline text-gray-600 hover:text-gray-900",onClick:h($,["prevent"])},{default:a(()=>[Z]),_:1},8,["href","onClick"])]),p(l("div",ee," A new verification link has been sent to your email address. ",512),[[_,b.value]])])):v("",!0)])]),actions:a(()=>[o(R,{on:t(e).recentlySuccessful,class:"mr-3"},{default:a(()=>[oe]),_:1},8,["on"]),o(z,{class:F({"opacity-25":t(e).processing}),disabled:t(e).processing},{default:a(()=>[te]),_:1},8,["class","disabled"])]),_:1}))}};export{de as default};