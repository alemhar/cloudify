import{h,i as w,v as x,o as d,f as _,T as v,c,w as m,a,u as s,Z as V,t as B,g as f,b as r,j as C,d as p,n as $,e as P}from"./app-a7f35d30.js";import{_ as q}from"./GuestLayout-2f22af15.js";import{_ as g,a as k,b as y}from"./TextInput-aa1331e2.js";import{P as N}from"./PrimaryButton-6e0c025b.js";import"./_plugin-vue_export-helper-c27b6911.js";const S=["value"],U={__name:"Checkbox",props:{checked:{type:[Array,Boolean],required:!0},value:{default:null}},emits:["update:checked"],setup(l,{emit:e}){const n=e,i=l,t=h({get(){return i.checked},set(o){n("update:checked",o)}});return(o,u)=>w((d(),_("input",{type:"checkbox",value:l.value,"onUpdate:modelValue":u[0]||(u[0]=b=>t.value=b),class:"rounded dark:bg-gray-900 border-gray-300 dark:border-gray-700 text-indigo-600 shadow-sm focus:ring-indigo-500 dark:focus:ring-indigo-600 dark:focus:ring-offset-gray-800"},null,8,S)),[[x,t.value]])}},L={key:0,class:"mb-4 font-medium text-sm text-green-600"},R=["onSubmit"],j={class:"mt-4"},D={class:"block mt-4"},E={class:"flex items-center"},F=r("span",{class:"ms-2 text-sm text-gray-600 dark:text-gray-400"},"Remember me",-1),M={class:"flex items-center justify-end mt-4"},H={__name:"Login",props:{canResetPassword:{type:Boolean},status:{type:String}},setup(l){const e=v({email:"",password:"",remember:!1}),n=()=>{e.post(route("login"),{onFinish:()=>e.reset("password")})};return(i,t)=>(d(),c(q,null,{default:m(()=>[a(s(V),{title:"Log in"}),l.status?(d(),_("div",L,B(l.status),1)):f("",!0),r("form",{onSubmit:P(n,["prevent"])},[r("div",null,[a(g,{for:"email",value:"Email"}),a(k,{id:"email",type:"email",class:"mt-1 block w-full",modelValue:s(e).email,"onUpdate:modelValue":t[0]||(t[0]=o=>s(e).email=o),required:"",autofocus:"",autocomplete:"username"},null,8,["modelValue"]),a(y,{class:"mt-2",message:s(e).errors.email},null,8,["message"])]),r("div",j,[a(g,{for:"password",value:"Password"}),a(k,{id:"password",type:"password",class:"mt-1 block w-full",modelValue:s(e).password,"onUpdate:modelValue":t[1]||(t[1]=o=>s(e).password=o),required:"",autocomplete:"current-password"},null,8,["modelValue"]),a(y,{class:"mt-2",message:s(e).errors.password},null,8,["message"])]),r("div",D,[r("label",E,[a(U,{name:"remember",checked:s(e).remember,"onUpdate:checked":t[2]||(t[2]=o=>s(e).remember=o)},null,8,["checked"]),F])]),r("div",M,[l.canResetPassword?(d(),c(s(C),{key:0,href:i.route("password.request"),class:"underline text-sm text-gray-600 dark:text-gray-400 hover:text-gray-900 dark:hover:text-gray-100 rounded-md focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500 dark:focus:ring-offset-gray-800"},{default:m(()=>[p(" Forgot your password? ")]),_:1},8,["href"])):f("",!0),a(N,{class:$(["ms-4",{"opacity-25":s(e).processing}]),disabled:s(e).processing},{default:m(()=>[p(" Log in ")]),_:1},8,["class","disabled"])])],40,R)]),_:1}))}};export{H as default};
