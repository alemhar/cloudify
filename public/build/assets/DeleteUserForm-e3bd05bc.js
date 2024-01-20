import{o as i,f as u,r as y,k as m,T as w,a as s,w as c,b as t,B as h,d as l,u as r,R as b,n as k}from"./app-a7f35d30.js";import{_ as v}from"./_plugin-vue_export-helper-c27b6911.js";import{_ as $,a as B,b as C}from"./TextInput-aa1331e2.js";import{_ as D}from"./Modal-82400872.js";const V={},S={class:"inline-flex items-center px-4 py-2 bg-red-600 border border-transparent rounded-md font-semibold text-xs text-white uppercase tracking-widest hover:bg-red-500 active:bg-red-700 focus:outline-none focus:ring-2 focus:ring-red-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 transition ease-in-out duration-150"};function U(a,o){return i(),u("button",S,[y(a.$slots,"default")])}const _=v(V,[["render",U]]),A=["type"],K={__name:"SecondaryButton",props:{type:{type:String,default:"button"}},setup(a){return(o,n)=>(i(),u("button",{type:a.type,class:"inline-flex items-center px-4 py-2 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-500 rounded-md font-semibold text-xs text-gray-700 dark:text-gray-300 uppercase tracking-widest shadow-sm hover:bg-gray-50 dark:hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2 dark:focus:ring-offset-gray-800 disabled:opacity-25 transition ease-in-out duration-150"},[y(o.$slots,"default")],8,A))}},N={class:"space-y-6"},P=t("header",null,[t("h2",{class:"text-lg font-medium text-gray-900 dark:text-gray-100"},"Delete Account"),t("p",{class:"mt-1 text-sm text-gray-600 dark:text-gray-400"}," Once your account is deleted, all of its resources and data will be permanently deleted. Before deleting your account, please download any data or information that you wish to retain. ")],-1),T={class:"p-6"},E=t("h2",{class:"text-lg font-medium text-gray-900 dark:text-gray-100"}," Are you sure you want to delete your account? ",-1),F=t("p",{class:"mt-1 text-sm text-gray-600 dark:text-gray-400"}," Once your account is deleted, all of its resources and data will be permanently deleted. Please enter your password to confirm you would like to permanently delete your account. ",-1),I={class:"mt-6"},O={class:"mt-6 flex justify-end"},G={__name:"DeleteUserForm",setup(a){const o=m(!1),n=m(null),e=w({password:""}),g=()=>{o.value=!0,h(()=>n.value.focus())},f=()=>{e.delete(route("profile.destroy"),{preserveScroll:!0,onSuccess:()=>d(),onError:()=>n.value.focus(),onFinish:()=>e.reset()})},d=()=>{o.value=!1,e.reset()};return(j,p)=>(i(),u("section",N,[P,s(_,{onClick:g},{default:c(()=>[l("Delete Account")]),_:1}),s(D,{show:o.value,onClose:d},{default:c(()=>[t("div",T,[E,F,t("div",I,[s($,{for:"password",value:"Password",class:"sr-only"}),s(B,{id:"password",ref_key:"passwordInput",ref:n,modelValue:r(e).password,"onUpdate:modelValue":p[0]||(p[0]=x=>r(e).password=x),type:"password",class:"mt-1 block w-3/4",placeholder:"Password",onKeyup:b(f,["enter"])},null,8,["modelValue","onKeyup"]),s(C,{message:r(e).errors.password,class:"mt-2"},null,8,["message"])]),t("div",O,[s(K,{onClick:d},{default:c(()=>[l(" Cancel ")]),_:1}),s(_,{class:k(["ms-3",{"opacity-25":r(e).processing}]),disabled:r(e).processing,onClick:f},{default:c(()=>[l(" Delete Account ")]),_:1},8,["class","disabled"])])])]),_:1},8,["show"])]))}};export{G as default};