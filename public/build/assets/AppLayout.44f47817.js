import{o as s,d as n,a as e,r as L,e as x,u as z,f as F,g as i,n as f,h,t as w,i as $,j as D,k as E,l as g,m as C,p as A,v as N,b as l,w as r,T as I,c as v,L as S,H as O,q as d,F as k,s as j,x as P}from"./app.ce970a42.js";import{_ as V}from"./plugin-vue_export-helper.21dcd24c.js";const H={},R={viewBox:"0 0 48 48",fill:"none",xmlns:"http://www.w3.org/2000/svg"},q=e("path",{d:"M11.395 44.428C4.557 40.198 0 32.632 0 24 0 10.745 10.745 0 24 0a23.891 23.891 0 0113.997 4.502c-.2 17.907-11.097 33.245-26.602 39.926z",fill:"#6875F5"},null,-1),J=e("path",{d:"M14.134 45.885A23.914 23.914 0 0024 48c13.255 0 24-10.745 24-24 0-3.516-.756-6.856-2.115-9.866-4.659 15.143-16.608 27.092-31.75 31.751z",fill:"#6875F5"},null,-1),U=[q,J];function G(c,a){return s(),n("svg",R,U)}var K=V(H,[["render",G]]);const Q={class:"max-w-screen-xl mx-auto py-2 px-3 sm:px-6 lg:px-8"},W={class:"flex items-center justify-between flex-wrap"},X={class:"w-0 flex-1 flex items-center min-w-0"},Y={key:0,class:"h-5 w-5 text-white",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},Z=e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1),ee=[Z],te={key:1,class:"h-5 w-5 text-white",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},se=e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M12 9v2m0 4h.01m-6.938 4h13.856c1.54 0 2.502-1.667 1.732-3L13.732 4c-.77-1.333-2.694-1.333-3.464 0L3.34 16c-.77 1.333.192 3 1.732 3z"},null,-1),oe=[se],re={class:"ml-3 font-medium text-sm text-white truncate"},ne={class:"shrink-0 sm:ml-3"},ae=e("svg",{class:"h-5 w-5 text-white",xmlns:"http://www.w3.org/2000/svg",fill:"none",viewBox:"0 0 24 24",stroke:"currentColor"},[e("path",{"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"})],-1),ie=[ae],le={__name:"Banner",setup(c){const a=L(!0),o=x(()=>{var t;return((t=z().props.value.jetstream.flash)==null?void 0:t.bannerStyle)||"success"}),p=x(()=>{var t;return((t=z().props.value.jetstream.flash)==null?void 0:t.banner)||""});return F(p,async()=>{a.value=!0}),(t,b)=>(s(),n("div",null,[a.value&&i(p)?(s(),n("div",{key:0,class:f({"bg-indigo-500":i(o)=="success","bg-red-700":i(o)=="danger"})},[e("div",Q,[e("div",W,[e("div",X,[e("span",{class:f(["flex p-2 rounded-lg",{"bg-indigo-600":i(o)=="success","bg-red-600":i(o)=="danger"}])},[i(o)=="success"?(s(),n("svg",Y,ee)):h("",!0),i(o)=="danger"?(s(),n("svg",te,oe)):h("",!0)],2),e("p",re,w(i(p)),1)]),e("div",ne,[e("button",{type:"button",class:f(["-mr-1 flex p-2 rounded-md focus:outline-none sm:-mr-2 transition",{"hover:bg-indigo-600 focus:bg-indigo-600":i(o)=="success","hover:bg-red-600 focus:bg-red-600":i(o)=="danger"}]),"aria-label":"Dismiss",onClick:b[0]||(b[0]=$(u=>a.value=!1,["prevent"]))},ie,2)])])])],2)):h("",!0)]))}},de={class:"relative"},T={__name:"Dropdown",props:{align:{type:String,default:"right"},width:{type:String,default:"48"},contentClasses:{type:Array,default:()=>["py-1","bg-white"]}},setup(c){const a=c;let o=L(!1);const p=u=>{o.value&&u.key==="Escape"&&(o.value=!1)};D(()=>document.addEventListener("keydown",p)),E(()=>document.removeEventListener("keydown",p));const t=x(()=>({48:"w-48"})[a.width.toString()]),b=x(()=>a.align==="left"?"origin-top-left left-0":a.align==="right"?"origin-top-right right-0":"origin-top");return(u,_)=>(s(),n("div",de,[e("div",{onClick:_[0]||(_[0]=B=>C(o)?o.value=!i(o):o=!i(o))},[g(u.$slots,"trigger")]),A(e("div",{class:"fixed inset-0 z-40",onClick:_[1]||(_[1]=B=>C(o)?o.value=!1:o=!1)},null,512),[[N,i(o)]]),l(I,{"enter-active-class":"transition ease-out duration-200","enter-from-class":"transform opacity-0 scale-95","enter-to-class":"transform opacity-100 scale-100","leave-active-class":"transition ease-in duration-75","leave-from-class":"transform opacity-100 scale-100","leave-to-class":"transform opacity-0 scale-95"},{default:r(()=>[A(e("div",{class:f(["absolute z-50 mt-2 rounded-md shadow-lg",[i(t),i(b)]]),style:{display:"none"},onClick:_[2]||(_[2]=B=>C(o)?o.value=!1:o=!1)},[e("div",{class:f(["rounded-md ring-1 ring-black ring-opacity-5",c.contentClasses])},[g(u.$slots,"content")],2)],2),[[N,i(o)]])]),_:3})]))}},ce={key:0,type:"submit",class:"block w-full px-4 py-2 text-sm leading-5 text-gray-700 text-left hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"},ue=["href"],y={__name:"DropdownLink",props:{href:String,as:String},setup(c){return(a,o)=>(s(),n("div",null,[c.as=="button"?(s(),n("button",ce,[g(a.$slots,"default")])):c.as=="a"?(s(),n("a",{key:1,href:c.href,class:"block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"},[g(a.$slots,"default")],8,ue)):(s(),v(i(S),{key:2,href:c.href,class:"block px-4 py-2 text-sm leading-5 text-gray-700 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 transition"},{default:r(()=>[g(a.$slots,"default")]),_:3},8,["href"]))]))}},M={__name:"NavLink",props:{href:String,active:Boolean},setup(c){const a=c,o=x(()=>a.active?"inline-flex items-center px-1 pt-1 border-b-2 border-indigo-400 text-sm font-medium leading-5 text-gray-900 focus:outline-none focus:border-indigo-700 transition":"inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-gray-700 hover:border-gray-300 focus:outline-none focus:text-gray-700 focus:border-gray-300 transition");return(p,t)=>(s(),v(i(S),{href:c.href,class:f(i(o))},{default:r(()=>[g(p.$slots,"default")]),_:3},8,["href","class"]))}},m={__name:"ResponsiveNavLink",props:{active:Boolean,href:String,as:String},setup(c){const a=c,o=x(()=>a.active?"block pl-3 pr-4 py-2 border-l-4 border-indigo-400 text-base font-medium text-indigo-700 bg-indigo-50 focus:outline-none focus:text-indigo-800 focus:bg-indigo-100 focus:border-indigo-700 transition":"block pl-3 pr-4 py-2 border-l-4 border-transparent text-base font-medium text-gray-600 hover:text-gray-800 hover:bg-gray-50 hover:border-gray-300 focus:outline-none focus:text-gray-800 focus:bg-gray-50 focus:border-gray-300 transition");return(p,t)=>(s(),n("div",null,[c.as=="button"?(s(),n("button",{key:0,class:f([i(o),"w-full text-left"])},[g(p.$slots,"default")],2)):(s(),v(i(S),{key:1,href:c.href,class:f(i(o))},{default:r(()=>[g(p.$slots,"default")]),_:3},8,["href","class"]))]))}},he={class:"min-h-screen bg-gray-100"},pe={class:"bg-white border-b border-gray-100"},fe={class:"max-w-7xl mx-auto px-4 sm:px-6 lg:px-8"},ge={class:"flex justify-between h-16"},me={class:"flex"},_e={class:"shrink-0 flex items-center"},ve={class:"hidden space-x-8 sm:-my-px sm:ml-10 sm:flex"},be=d(" Dashboard "),ye=d(" Contacts "),we=d(" Email "),xe={class:"hidden sm:flex sm:items-center sm:ml-6"},ke={class:"ml-3 relative"},$e={class:"inline-flex rounded-md"},Se={type:"button",class:"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:bg-gray-50 hover:text-gray-700 focus:outline-none focus:bg-gray-50 active:bg-gray-50 transition"},Ce=e("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[e("path",{"fill-rule":"evenodd",d:"M10 3a1 1 0 01.707.293l3 3a1 1 0 01-1.414 1.414L10 5.414 7.707 7.707a1 1 0 01-1.414-1.414l3-3A1 1 0 0110 3zm-3.707 9.293a1 1 0 011.414 0L10 14.586l2.293-2.293a1 1 0 011.414 1.414l-3 3a1 1 0 01-1.414 0l-3-3a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),je={class:"w-60"},Te=e("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Manage Team ",-1),Me=d(" Team Settings "),Le=d(" Create New Team "),Be=e("div",{class:"border-t border-gray-100"},null,-1),ze=e("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Switch Teams ",-1),Ae=["onSubmit"],Ne={class:"flex items-center"},Pe={key:0,class:"mr-2 h-5 w-5 text-green-400",fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",stroke:"currentColor",viewBox:"0 0 24 24"},Fe=e("path",{d:"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1),De=[Fe],Ee={class:"ml-3 relative"},Ie=e("button",{class:"flex justify-center items-center text-sm border-2 border-transparent h-8 w-8 rounded-full focus:outline-none focus:border-gray-300 transition bg-gray-300"},[e("div",{class:"text-center"},[e("i",{class:"bx bxs-bell-ring"})])],-1),Oe=e("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Notifications ",-1),Ve=e("div",{class:"border-t border-gray-100"},null,-1),He={key:0,class:"block px-4 py-2 text-xs text-gray-400 bg-green-200"},Re={class:"ml-3 relative"},qe={key:0,class:"flex text-sm border-2 border-transparent rounded-full focus:outline-none focus:border-gray-300 transition"},Je=["src","alt"],Ue={key:1,class:"inline-flex rounded-md"},Ge={type:"button",class:"inline-flex items-center px-3 py-2 border border-transparent text-sm leading-4 font-medium rounded-md text-gray-500 bg-white hover:text-gray-700 focus:outline-none transition"},Ke=e("svg",{class:"ml-2 -mr-0.5 h-4 w-4",xmlns:"http://www.w3.org/2000/svg",viewBox:"0 0 20 20",fill:"currentColor"},[e("path",{"fill-rule":"evenodd",d:"M5.293 7.293a1 1 0 011.414 0L10 10.586l3.293-3.293a1 1 0 111.414 1.414l-4 4a1 1 0 01-1.414 0l-4-4a1 1 0 010-1.414z","clip-rule":"evenodd"})],-1),Qe=e("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Manage Account ",-1),We=e("i",{class:"bx bx-user"},null,-1),Xe=d(" Profile "),Ye=e("i",{class:"bx bx-cog"},null,-1),Ze=d(" Settings "),et=d(" API Tokens "),tt=e("div",{class:"border-t border-gray-100"},null,-1),st=["onSubmit"],ot=e("i",{class:"bx bx-exit"},null,-1),rt=d(" Log Out "),nt={class:"-mr-2 flex items-center sm:hidden"},at={class:"h-6 w-6",stroke:"currentColor",fill:"none",viewBox:"0 0 24 24"},it={class:"pt-2 pb-3 space-y-1"},lt=d(" Dashboard "),dt=d(" Contacts "),ct=d(" Email "),ut={class:"pt-4 pb-1 border-t border-gray-200"},ht={class:"flex items-center px-4"},pt={key:0,class:"shrink-0 mr-3"},ft=["src","alt"],gt={class:"font-medium text-base text-gray-800"},mt={class:"font-medium text-sm text-gray-500"},_t={class:"mt-3 space-y-1"},vt=d(" Profile "),bt=d(" API Tokens "),yt=["onSubmit"],wt=d(" Log Out "),xt=e("div",{class:"border-t border-gray-200"},null,-1),kt=e("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Manage Team ",-1),$t=d(" Team Settings "),St=d(" Create New Team "),Ct=e("div",{class:"border-t border-gray-200"},null,-1),jt=e("div",{class:"block px-4 py-2 text-xs text-gray-400"}," Switch Teams ",-1),Tt=["onSubmit"],Mt={class:"flex items-center"},Lt={key:0,class:"mr-2 h-5 w-5 text-green-400",fill:"none","stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",stroke:"currentColor",viewBox:"0 0 24 24"},Bt=e("path",{d:"M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"},null,-1),zt=[Bt],At={key:0,class:"bg-white shadow"},Nt={class:"max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8"},Dt={__name:"AppLayout",props:{title:String},setup(c){const a=L(!1),o=t=>{P.Inertia.put(route("current-team.update"),{team_id:t.id},{preserveState:!1})},p=()=>{P.Inertia.post(route("logout"))};return(t,b)=>(s(),n("div",null,[l(i(O),{title:c.title},null,8,["title"]),l(le),e("div",he,[e("nav",pe,[e("div",fe,[e("div",ge,[e("div",me,[e("div",_e,[l(i(S),{href:t.route("dashboard")},{default:r(()=>[l(K,{class:"block h-9 w-auto"})]),_:1},8,["href"])]),e("div",ve,[l(M,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:r(()=>[be]),_:1},8,["href","active"]),l(M,{href:t.route("contacts"),active:t.route().current("contacts")},{default:r(()=>[ye]),_:1},8,["href","active"]),l(M,{href:t.route("email"),active:t.route().current("email")},{default:r(()=>[we]),_:1},8,["href","active"])])]),e("div",xe,[e("div",ke,[t.$page.props.jetstream.hasTeamFeatures?(s(),v(T,{key:0,align:"right",width:"60"},{trigger:r(()=>[e("span",$e,[e("button",Se,[d(w(t.$page.props.user.current_team.name)+" ",1),Ce])])]),content:r(()=>[e("div",je,[t.$page.props.jetstream.hasTeamFeatures?(s(),n(k,{key:0},[Te,l(y,{href:t.route("teams.show",t.$page.props.user.current_team)},{default:r(()=>[Me]),_:1},8,["href"]),t.$page.props.jetstream.canCreateTeams?(s(),v(y,{key:0,href:t.route("teams.create")},{default:r(()=>[Le]),_:1},8,["href"])):h("",!0),Be,ze,(s(!0),n(k,null,j(t.$page.props.user.all_teams,u=>(s(),n("form",{key:u.id,onSubmit:$(_=>o(u),["prevent"])},[l(y,{as:"button"},{default:r(()=>[e("div",Ne,[u.id==t.$page.props.user.current_team_id?(s(),n("svg",Pe,De)):h("",!0),e("div",null,w(u.name),1)])]),_:2},1024)],40,Ae))),128))],64)):h("",!0)])]),_:1})):h("",!0)]),e("div",Ee,[l(T,{align:"right",width:"w-80"},{trigger:r(()=>[Ie]),content:r(()=>[Oe,Ve,(s(!0),n(k,null,j(t.$page.props.notifications,u=>(s(),n("div",null,[u.type=="App\\Notifications\\SuccessfulLogin"?(s(),n("div",He," This is the message ")):h("",!0)]))),256))]),_:1})]),e("div",Re,[l(T,{align:"right",width:"48"},{trigger:r(()=>[t.$page.props.jetstream.managesProfilePhotos?(s(),n("button",qe,[e("img",{class:"h-8 w-8 rounded-full object-cover",src:t.$page.props.user.profile_photo_url,alt:t.$page.props.user.name},null,8,Je)])):(s(),n("span",Ue,[e("button",Ge,[d(w(t.$page.props.user.name)+" ",1),Ke])]))]),content:r(()=>[Qe,l(y,{href:t.route("profile.show")},{default:r(()=>[We,Xe]),_:1},8,["href"]),l(y,{href:t.route("settings")},{default:r(()=>[Ye,Ze]),_:1},8,["href"]),t.$page.props.jetstream.hasApiFeatures?(s(),v(y,{key:0,href:t.route("api-tokens.index")},{default:r(()=>[et]),_:1},8,["href"])):h("",!0),tt,e("form",{onSubmit:$(p,["prevent"])},[l(y,{as:"button"},{default:r(()=>[ot,rt]),_:1})],40,st)]),_:1})])]),e("div",nt,[e("button",{class:"inline-flex items-center justify-center p-2 rounded-md text-gray-400 hover:text-gray-500 hover:bg-gray-100 focus:outline-none focus:bg-gray-100 focus:text-gray-500 transition",onClick:b[0]||(b[0]=u=>a.value=!a.value)},[(s(),n("svg",at,[e("path",{class:f({hidden:a.value,"inline-flex":!a.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M4 6h16M4 12h16M4 18h16"},null,2),e("path",{class:f({hidden:!a.value,"inline-flex":a.value}),"stroke-linecap":"round","stroke-linejoin":"round","stroke-width":"2",d:"M6 18L18 6M6 6l12 12"},null,2)]))])])])]),e("div",{class:f([{block:a.value,hidden:!a.value},"sm:hidden"])},[e("div",it,[l(m,{href:t.route("dashboard"),active:t.route().current("dashboard")},{default:r(()=>[lt]),_:1},8,["href","active"]),l(m,{href:t.route("contacts"),active:t.route().current("contacts")},{default:r(()=>[dt]),_:1},8,["href","active"]),l(m,{href:t.route("email"),active:t.route().current("email")},{default:r(()=>[ct]),_:1},8,["href","active"])]),e("div",ut,[e("div",ht,[t.$page.props.jetstream.managesProfilePhotos?(s(),n("div",pt,[e("img",{class:"h-10 w-10 rounded-full object-cover",src:t.$page.props.user.profile_photo_url,alt:t.$page.props.user.name},null,8,ft)])):h("",!0),e("div",null,[e("div",gt,w(t.$page.props.user.name),1),e("div",mt,w(t.$page.props.user.email),1)])]),e("div",_t,[l(m,{href:t.route("profile.show"),active:t.route().current("profile.show")},{default:r(()=>[vt]),_:1},8,["href","active"]),t.$page.props.jetstream.hasApiFeatures?(s(),v(m,{key:0,href:t.route("api-tokens.index"),active:t.route().current("api-tokens.index")},{default:r(()=>[bt]),_:1},8,["href","active"])):h("",!0),e("form",{method:"POST",onSubmit:$(p,["prevent"])},[l(m,{as:"button"},{default:r(()=>[wt]),_:1})],40,yt),t.$page.props.jetstream.hasTeamFeatures?(s(),n(k,{key:1},[xt,kt,l(m,{href:t.route("teams.show",t.$page.props.user.current_team),active:t.route().current("teams.show")},{default:r(()=>[$t]),_:1},8,["href","active"]),t.$page.props.jetstream.canCreateTeams?(s(),v(m,{key:0,href:t.route("teams.create"),active:t.route().current("teams.create")},{default:r(()=>[St]),_:1},8,["href","active"])):h("",!0),Ct,jt,(s(!0),n(k,null,j(t.$page.props.user.all_teams,u=>(s(),n("form",{key:u.id,onSubmit:$(_=>o(u),["prevent"])},[l(m,{as:"button"},{default:r(()=>[e("div",Mt,[u.id==t.$page.props.user.current_team_id?(s(),n("svg",Lt,zt)):h("",!0),e("div",null,w(u.name),1)])]),_:2},1024)],40,Tt))),128))],64)):h("",!0)])])],2)]),t.$slots.header?(s(),n("header",At,[e("div",Nt,[g(t.$slots,"header")])])):h("",!0),e("main",null,[g(t.$slots,"default")])])]))}};export{Dt as _};
